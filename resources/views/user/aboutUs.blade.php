<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<style>
    h3{
margin-left:-400px;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/userIndex.css')}}">
</head>
<body>



<!------ Include the above in your HEAD tag ---------->


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

<h3 class="text-center">Contact us</h3><br />



<div class="row">
  <div class="col-md-8">
      <form action="/post" method="post">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4">
    <b>Customer service:</b> <br />
    Phone: 01521415098<br />
    E-mail: <a href="mailto:support@mysite.com">eqramul8@gmail.com</a><br />
    <br /><br />
    <b>Headquarter:</b><br />
    OxyLife Company Ltd, <br />
    Dhanmondi Road 1201<br />
    5501 Dhaka, Bangladesh<br />
    Phone: 01779980720<br />
    <a href="mailto:usa@mysite.com">eqramul8@gmail.com</a><br />


    <br /><br />
    <b>Chittagong:</b><br />
    OxyLife Company Ltd, <br />
    25/F.168 Nasirabad<br />
    52/A, Navana Chittagong<br />
    Phone: 01779980720<br />
    <a href="mailto:hk@mysite.com">pabonsaha@gmail.com</a><br />


  </div>
</div>

</div>


 
  
</body>
</html>