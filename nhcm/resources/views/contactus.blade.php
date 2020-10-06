@extends('layouts.main')
@section('content')


<!--Section: Contact v.2-->
<section class="mb-4">
    <div class="container">
      <!--Section heading-->
    </br>
</br>
        <h2 class="text-light">Contact us</h2>
        <!--Section description-->
        <p class=" col-md-6 text-light" >Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">
            
            	
        <!--Grid column-->
        <div class="col-md-6 ">
            @if (Session::has('flash_message'))
                 <div class="alert alert-success ">{{ Session::get('flash_message')}} </div>
            @endif
            <form  action="{{route('contactus.store')}}" method="POST" class="needs-validation" novalidate>

                {{csrf_field()}}
            
                    <!--Grid column-->
                    <div class="form-group">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control text-light" required>
                            <label for="name" class="text-light">Full name:</label>
                            <div class="valid-feedback text-light">
                            <p >Looks good!</p>
                            </div>
                        </div>
                    </div>

                     <div class="form-group">            
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control text-light" aria-describedby="emailHelp" required>
                            <label for="email" class="text-light">Email:(name@domin*)</label>
                        </div>
                  
                    </div>

                 <!--   <div class="form-group">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" required>
                            <label for="subject" class="">Subject:</label>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                    </div>-->

                    <!--Grid column-->
                    <div class="form-group">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea text-light" required></textarea>
                            <label class="text-light" for="message">Message:</label>
                             <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>

                    </div>
                 <button class="btn btn-light" type="submit">Send</button>
            </form>


     
        <!--Grid column-->
        </div>
  
        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p class=" text-light">San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p class=" text-light">+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p class=" text-light">contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

        </div>

    </div>
</section>
<!--Section: Contact v.2-->

@endsection