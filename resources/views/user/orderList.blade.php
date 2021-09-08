<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/userIndex.css')}}">
    <title>Order List</title>
</head>
<body>
    <div class="header">
        <h2>OXIGEN</h2>
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{route('user.orderList')}}">Oder List</a></li>
            <li><a href="{{route('user.information')}}">Medical Information</a></li>
            <li><a href="{{route('user.aboutUS')}}">About Us</a></li>
            <form action="{{route('logout')}} " method="POST">
              @csrf
              <li><button type="submit" class="btn btn-success">Logout</button></li>
              
            </form>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                              
                          <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->supply_amount}}</td>
                            <td>{{$order->amount}}</td>
                            @if ($order->supply_status ==0)
                                <td class="text-primary">Pending</td>

                             @elseif ($order->supply_status ==1)
                               <td class="text-success">Confirm</td>
                                
                            @endif
                            
                          </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>