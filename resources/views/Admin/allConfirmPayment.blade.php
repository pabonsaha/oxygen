@extends('Admin.adminmaster')

@section('content')

<div class="col-12">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Data Table With Full Features</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>Payment ID</th>
                       <th>Payment Amount</th>
                       <th>Payment Date</th>
                       <th>Payment Status</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($orders as $order)
                       
                   
                   <tr>
                       <td>{{$order->id}}</td>
                       <td>{{$order->amount}}</td>
                       <td>{{$order->payment_date}}</td>
                       <td class="text-success">Confirm</td>
  
                   </tr>
                  @endforeach
               </tbody>

              
               
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
    
@endsection