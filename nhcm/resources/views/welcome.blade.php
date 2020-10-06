@extends('layouts.main')
@section('content')
 @if(session('successMsg'))
 <div class="alert alert-success" role="alert">
    {{session('successMsg')}}
</div>
@endif
<style>
    #more {display: none;}
    .container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
  /*  body { 
  background-image: url("http://localhost:8080/nhcmedicalp//nhcm/public/boostf/img/logo/ICEmedical.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}*/
    </style>
<div class="container ">

    <div class="row">
    
    <div class=" col-md-10 ht-3">
    </br>
</br>
        <img src="http://localhost:8080/nhcmedicalp//nhcm/public/boostf/img/logo/ICEmedical.jpg" alt="Italian Trulli">
    </div>
    <div class="col-md-10 ">
    </br>
</br>
    </div>
      <div class="col-md-10 ">
    
    <b class=" text-light">Welcome to <span  class="text-light bg-success">ICEⒸ .</span >Here is a little bit about what we are about.</b>
<p class="  text-light"><span  class="text-light bg-success">ICEⒸ</span > is designed with one purpose in mind; to arm emergency care practitioners with the
best chance of helping you. When a patient presents to the medical team in an emergency setting, we are only as strong as the information we have to hand.
 <span id="dots">...</span><span id="more">
      </br>
  <span class=" text-light">Most of the time, the sickest patients present to us in a non responsive state. If someone is
    not responding, too short of breath to talk, found unconscious, presenting to us after trauma,
    the medical history of that person is limited to say the least, and more commonly
    non-existent to us. We are working in a battlefield with no ammunition.
  </span>
      </br>
  <span class=" text-light">But this card, and you, can help us. And ultimately help you. We WANT to save lives, and if
    it happens to be yours, we want to save your life.
  </span>
      </br>
  <span class="  text-light">We need the information to do this. I am a medical doctor of 20 years. I love medicine. For
      me it remains a noble profession, and like all things based on nobility, knowledge is our
      major weapon in the war against disease. I would love to see the day when all disease is
      wiped out; that day is far, far away, if at all.
  </span>
      </br>
  <span class="  text-light">Until then help us, the doctors, the nurses, and all the allied staff help you. Make sure we
    have all the information you can give us to help us help you the best we can, in case of
    emergency.
  </span>
     </br>
  <span class=" text-light align-middle">
    
    The card talks for you when you can’t.
  </span>
     </br>
    </br>
  <span class=" align-middle">HELP US HELP YOU</span>
     </br>
    
     <span class=" text-light"><span  class="text-light bg-success">ICEⒸ</span >  WILL SAVE LIVES; ONE OF THEM MIGHT BE YOURS</span>
</span></p>
<a onclick="myFunction()" id="myBtn" style="color: #ffffff">Read more</<a>
        
    </div> 
</div>
</div>

@endsection