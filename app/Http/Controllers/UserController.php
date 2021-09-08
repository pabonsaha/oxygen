<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supply;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   public function registerUser(Request $request)
   {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|unique:users|email',
        'phone' => 'required',
        'address' => 'required',
        'password' => 'required|min:8|max:15',
        'confirm_password' => 'required|min:8|max:15',
    ]);

    if($request->password!=$request->confirm_password)
    {
        return redirect()->back()->with('notMatched','Password and Confirm Password did not match');
    }
    else if($request->password==$request->confirm_password)
    {
        $user= new User();
        $user->name= $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password= Hash::make($request->password);
        $user->save();
        return redirect()->route('login');

    }




   }

   public function confirmOrder(Request $request)
   {
       $supply= new Supply();
       $supply->save();
       $payment= new Payment();
       $payment->save();

       $supply->payment_id = $payment->id;
       $supply->user_id = Auth::user()->id;
       $supply->supply_amount = $request->quantity;
       $supply->supply_date = Carbon::now();
       $supply->supply_status = 0;
       $supply->save();

       $payment->user_id= Auth::user()->id;
       $payment->amount= $request->price;
       $payment->payment_date=Carbon::now();
       $payment->supply_id= $supply->id;
       $payment->payment_status=0;
       $payment->save();
        return redirect()->route('user.orderList');
       
   }


   public function orderList()
   {
       $user_id = Auth::user()->id;
       
       $orders = DB::table('supplies')
            ->where('supplies.user_id' ,'=',$user_id )
            ->join('payments', 'payments.supply_id', '=', 'supplies.id')
            ->orderBy('supplies.id','DESC')
            ->get();
            return view('user.orderList',compact('orders'));
       
   }




}
