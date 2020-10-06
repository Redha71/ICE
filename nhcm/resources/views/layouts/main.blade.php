<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NHCMedical</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/boostf/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('public/boostf/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('public/boostf/css/style.css')}}" rel="stylesheet">
  <!-- Paypal -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  
</head>

<body style="background-color: #105a35">

  <!-- Start your project here-->
  @include('layouts.navbar')

  @yield('content')
  
  @include('layouts.footer')


  <!-- Start your project here-->
   <!-- Required. Replace SB_CLIENT_ID with your sandbox client ID.-->
 <script src="https://www.paypal.com/sdk/js?client-id=AQz0aRiXoVq269FiRtRsw08xSKwok9kkMqXWcY19IK-GKg66Ljf_eFRQXZXPrZg9rK2MPaJlYJDvT0ri"></script>
 <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('public/boostf/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('public/boostf/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('public/boostf/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('public/boostf/js/mdb.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('public/boostf/js/projs.js')}}"></script>
     
      
     
          
<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>
  
  


</body>

</html>
