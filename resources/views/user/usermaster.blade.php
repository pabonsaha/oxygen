<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oxigen</title>
    <link rel="stylesheet" href="{{asset('css/userIndex.css')}}">
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
                
                <li><button type="submit">Logout</button></li>
              </form>
        </ul>
    </div>

    <div class="content">
        <div class="card">
            <div class="name"><h3>Linde Portabel Oxygen</h3></div>
            <div class="price">
                <h2>10500 TAKA</h2>
            </div>
            <div class="details">
                <ul>
                    <li>Type: Portbale</li>
                    <li>Size: Small</li>
                    <li>Oxygen Flow Meter</li>
                    <li>Weight: 3KG</li>
                    <li>Pressure: 12000 Litters+</li>
                    <li>Home Delivery</li>
                    <li>Support: 24/7</li>
                </ul>

                <a href="{{route('user.order','3')}}">Order Now</a>
            </div>
        </div>


        <div class="card">
            <div class="name"><h3>Linde Portabel Oxygen</h3></div>
            <div class="price">
                <h2>12500 TAKA</h2>
            </div>
            <div class="details">
                <ul>
                    <li>Type: Portbale</li>
                    <li>Size: Medium</li>
                    <li>Oxygen Flow Meter</li>
                    <li>Weight: 4KG</li>
                    <li>Pressure: 15000 Litters+</li>
                    <li>Home Delivery</li>
                    <li>Support: 24/7</li>
                </ul>

                <a href="{{route('user.order','4')}}">Order Now</a>
            </div>
        </div>


        <div class="card">
            <div class="name"><h3>Linde Portabel Oxygen</h3></div>
            <div class="price">
                <h2>15500 TAKA</h2>
            </div>
            <div class="details">
                <ul>
                    <li>Type: Portbale</li>
                    <li>Size: Medium</li>
                    <li>Oxygen Flow Meter</li>
                    <li>Weight: 5KG</li>
                    <li>Pressure: 17000 Litters+</li>
                    <li>Home Delivery</li>
                    <li>Support: 24/7</li>
                </ul>

                <a href="{{route('user.order','5')}}">Order Now</a>
            </div>
        </div>
        
        <div class="card">
            <div class="name"><h3>Linde Portabel Oxygen</h3></div>
            <div class="price">
                <h2>20500 TAKA</h2>
            </div>
            <div class="details">
                <ul>
                    <li>Type: Portbale</li>
                    <li>Size: Small</li>
                    <li>Oxygen Flow Meter</li>
                    <li>Weight: 7KG</li>
                    <li>Pressure: 17000 Litters+</li>
                    <li>Home Delivery</li>
                    <li>Support: 24/7</li>
                </ul>

                <a href="{{route('user.order','7')}}">Order Now</a>
            </div>
        </div>
        
    </div>

</body>
</html>