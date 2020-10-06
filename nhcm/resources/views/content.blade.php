@extends('layouts.main')
@section('content')




<div class="container">
<!--Section: Contact v.2-->
<section class="mb-4">
</br>
</br>
    <!--Section heading-->
   <h2 class="text-light" >Content</h2>
    <!--Section description-->


   <div class="row">

        <!--Grid column-->
        <div class="col-md-6">
            <form id="payment-form" name="contact-form" action="{{route('store')}}" method="POST" class="needs-validation" novalidate>
                {{csrf_field()}}
                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control text-light" required>
                        <label for="name" class="text-light">Name:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group">            
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control text-light" aria-describedby="emailHelp" required>
                        <label for="email" class="text-light">Email:(name@domin*)</label>
                    </div>
              
                </div>

                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="dob" name="dob" class="form-control text-light" required>
                        <label for="name" class="text-light">D.O.B:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="medical" name="medical" class="form-control text-light" required>
                        <label for="name" class="text-light">Past Medical History:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="surgical" name="surgical" class="form-control text-light" required>
                        <label for="name" class="text-light">Past Surgical History:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="drag" name="drag" class="form-control text-light" required>
                        <label for="name" class="text-light">Drag History:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="md-form mb-0">
                        <input type="text" id="allergies" name="allergies" class="form-control text-danger " required>
                        <label for="name" class="text-danger">ALLERGIES:</label>
                        <div class="valid-feedback text-light">
                            Looks good!
                        </div>
                    </div>
                </div>

                <button class="btn btn-light" type="submit" data-toggle="modal" data-target="#exampleModal">Pay with PayPal</button>
                <label for="name" class="text-danger">Using PayPal the cost is £25</label>
            </form>

  
        </div>
    </div>   
    <div class="row">
        <div class="col-md-6 text-center">
            <ul class="list-unstyled mb-0">

                <li>
                    <p class="text-justify text-light"><b>Past Medical History:</b>please enter chronic illnesses here e.g. heart,lung, bowel, kidney, liver, vascular, diseases etc.</p>
                </li>

                <li>
                    <p class="text-justify text-light"><b>Past Surgical History:</b>please enter any previous surgical procedures here.</p>
                </li>

                <li>
                   <p class="text-justify text-light"><b>Drag History:</b>please list any medications taken on a repeat basis here.</p>
                </li>
                <li>
                   <p class="text-justify text-light"><b>Allergies:please list any known allergies here.</b></p>
                </li>
                <li>
                    <p class="text-justify text-light">If there is no relevent information, please enter <b class="text-danger">"NONE"</b> in the appropriate subheading.</p>
                </li>
            </ul>
    </div>
</div>



</section>
<!--Section: Contact v.2-->

@endsection