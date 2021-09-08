<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use App\Models\Payment;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = User::count(); 
        $supply = $users = DB::table('supplies')->where('supply_status',0)->count();
        $payment = $users = DB::table('payments')->where('payment_status',0)->count();
        return view('admin.dashboard',compact('user','supply','payment'));
        
    }

    public function allUser()
    {
        $users = User::all();
        return view('admin.allUser',compact('users'));
    }

    public function pendingOrder()
    {
        $orders = DB::table('supplies')->where('supply_status','=' ,0)->orderByDesc('id')->get();
        return view('admin.allPendingOrder',compact('orders'));
    }

    public function confirmOrder()
    {
        $orders = DB::table('supplies')->where('supply_status','=' ,1)->orderByDesc('id')->get();
        return view('admin.allConfirmOrder',compact('orders'));
    }

    public function pendingPayment()
    {
        $orders = DB::table('payments')->where('payment_status','=' ,0)->orderByDesc('id')->get();
        return view('admin.allPendingPayment',compact('orders'));
    }

    public function confirmPayment()
    {
        $orders = DB::table('payments')->where('payment_status','=' ,1)->orderByDesc('id')->get();
        return view('admin.allConfirmPayment',compact('orders'));
    }

    public function makeOrderConfirm($id)
    {
        $supply = Supply::find($id);
        
        $supply->supply_status=1;
        $supply->save();
        return redirect()->back();
    }
    public function makePaymentConfirm($id)
    {
        $payment = Payment::find($id);
        
        $payment->payment_status=1;
        $payment->save();
        return redirect()->back();
    }


}
