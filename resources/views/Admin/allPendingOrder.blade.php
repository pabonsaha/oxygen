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
                       <th>Order ID</th>
                       <th>Supply Amount</th>
                       <th>Supply Date</th>
                       <th>Supply Status</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($orders as $order)
                       
                   
                   <tr>
                       <td>{{$order->id}}</td>
                       <td>{{$order->supply_amount}}</td>
                       <td>{{$order->supply_date}}</td>
                       <td class="text-warning">Pending</td>
                       <td class="text-warning"><a class="btn btn-success" href="{{route('admin.makeOrderConfirm',$order->id)}}">Confirm Order</a></td>
  
                   </tr>
                  @endforeach
               </tbody>

              
               
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
    
@endsection