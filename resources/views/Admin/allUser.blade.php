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
                       <th>Name</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>Email</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($users as $key=>$user)
                       
                   
                   <tr>
                       <td>{{$user->name}}</td>
                       <td>{{$user->address}}</td>
                       <td>{{$user->phone}}</td>
                       <td>{{$user->email}}</td>
                       
                       
                   </tr>
                  @endforeach
               </tbody>

              
               
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
    
@endsection