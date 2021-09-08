<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/userIndex.css')}}">
<style>
    .header
    {
        display: flex;
        align-items: center;
        
    }
</style>
</head>
<body>

    <div class="header">
        <h2>OXIGEN</h2>
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{route('user.orderList')}}">Oder List</a></li>
            <li><a href="{{route('user.information')}}">Medical Information</a></li>
            <li><a href="{{route('user.aboutUS')}}">About Us</a></li>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <li><button type="submit" class="btn btn-success">Logout</button></li>
              
            </form>
        </ul>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>You are ordering {{$value}}KG weight Cylender</h2>
                    @php
                    $price=0;
                        if($value==3)
                        {
                            $price=10500;
                        }
                        elseif ($value==4) {
                            # code..
                            $price= 12500;
                        }
                        elseif ($value==5) {
                            # code...
                            $price=15500;
                        }
                        elseif ($value==7) {
                            # code...
                            $price=20500;
                        }
                    @endphp
                <form method="POST" action="{{route('user.confirm')}}">
                    @csrf
                    <input type="hidden" value="{{$value}}" name="quantity">
                    <input type="hidden" value="{{$price}}" name="price">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" required>

                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" placeholder="Enter Number" required>

                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            
        </div>
            
        
    </div>
  
  
  

  
</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>