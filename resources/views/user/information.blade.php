<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/userIndex.css')}}">
    <title>Information</title>
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
        <div class="containt">
            <div class="row">
                
                    

                    <div class="well well-sm">
                        
                        <h1>Oxygen Levels, Pulse Oximeters, and COVID-19</h1>
                        <h2>How does COVID-19 lower a person’s oxygen levels?</h2>
                        <p>Many people with COVID-19 have low levels of oxygen in their blood, even when they feel well. Low oxygen levels can be an early warning sign that medical care is needed.</p>
                        <h2>What is a pulse oximeter?</h2>
                        <p>A pulse oximeter measures how much oxygen is in someone’s blood. It is a small device that clips onto a finger, or another part of the body. They are used often in hospitals and clinics and can be bought to use at home.  </p>
                        <p>Many people consider oxygen level an important sign of how well a body is working, just like a person’s blood pressure or body temperature. People who have a lung or heart condition may use a pulse oximeter at home to check how they are doing, as directed by their health care provider. People can buy pulse oximeters without a prescription at some pharmacies and stores. </p>
                        <h2>Can a pulse oximeter tell if someone has COVID-19 or how well they are doing if they have it?</h2>
                        <p>We do not recommend using a pulse oximeter as a way to tell if someone has COVID-19. Get tested if you have signs of COVID-19 or if you have been close to someone who has it.  </p>
                        <p>If someone has COVID-19, a pulse oximeter may help them keep watch over their health and to know if they need medical care. However, while a pulse oximeter may help someone feel like they have some control over their health, it does not tell the whole story. Oxygen level measured by a pulse oximeter is not the only way to know how sick someone is. Some people may feel very sick and have good oxygen levels, and some may feel OK, but have poor oxygen levels. </p>
                        <p>Pulse oximetry results may not be as accurate for people with darker skin. Their oxygen levels are sometimes reported as higher than they really are. People who check their own oxygen levels, or those who check it for them, should keep this in mind when looking at results. </p>
                        <p>Oxygen levels may be low if someone feels short of breath, is breathing faster than usual, or feels too sick to do their usual daily activities, even if a pulse oximeter says their oxygen levels are normal. Call a doctor or another health care provider right away if you have these symptoms. </p>
                        <h2>What are normal readings?</h2>
                        <p>A normal level of oxygen is usually 95% or higher. Some people with chronic lung disease or sleep apnea can have normal levels around 90%. The “SpO2” reading on a pulse oximeter shows the percentage of oxygen in someone’s blood.  </p>
                        <p>If your home SpO2 reading is lower than 95%, call your health care provider. </p>
                    </div>
                
            </div>
        </div>
    </div>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>