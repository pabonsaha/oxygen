@extends('Admin.adminmaster')

@section('content')

<div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total User</h5>
          <h2 class="card-title text-warning ">{{$user}}</h2>
          
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Pending Order</h5>
          <h2 class="card-title text-warning ">{{$supply}}</h2>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Pending Payment</h5>
          <h2 class="card-title text-warning ">{{$payment}}</h2>
        </div>
      </div>
    </div>
  </div>
    
@endsection