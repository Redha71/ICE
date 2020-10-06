<?php

namespace App\Http\Controllers;
use App;
use Session;
use App\NhcMed;
use App\Jobs\SendEmail;
use App\Mail\ContentMsg;
use Illuminate\Http\Request;
use App\Paypal\CreatePayment;
use App\Http\Controllers\View;
use App\Paypal\ExecutePayment;
use Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\Notification;

class PaymentController extends Controller
{
    public function execute()
    {
    	
    	$payment = new ExecutePayment();
    	return $payment->execute();
    }

    public function store(Request $request){
       /**
       *
       *
       *Pay using PayPal
       */

      $request->session()->put('name',$request->name);
      $request->session()->put('dob',$request->dob);
      $request->session()->put('medical',$request->medical);
      $request->session()->put('surgical',$request->surgical);
      $request->session()->put('drag',$request->drag);
      $request->session()->put('allergies',$request->allergies);
      $request->session()->put('email',$request->email);
       $payment= new CreatePayment();
       return $payment->create();
  }
public function storeData(){
      $name =session('name');
      $dob = session('dob');
      $medical = session('medical');
      $surgical = session('surgical');
      $drag = session('drag');
      $allergies = session('allergies');
      $email = session('email');
     
      $nhcmedical = new NhcMed;
      $nhcmedical-> name = $name ;
      $nhcmedical-> dob = $dob;
      $nhcmedical-> pastmh = $medical;
      $nhcmedical-> pastsh = $surgical;
      $nhcmedical-> dragh = $drag;
      $nhcmedical-> allergies = $allergies;
      $nhcmedical-> pay = 1;
      $nhcmedical-> email = $email;
      $nhcmedical->save();
      $details = ['email' => $email
    ];
    Mail::send('emails.contentInfo', [], function ($mail) {

  $mail->to('rshsoft@hotmail.com','Admin')->subject('Contant Message');
  $mail->cc('redhakaban@gmail.com','Admin')->subject('Contant Message');
 });


      /*$fileName = 'PDF/'.$name.'_pdfinformation.pdf';
      $mpdf = new \Mpdf\Mpdf([
          'margin_left'=>10,
          'margin_right'=>10,
          'margin_top'=>15,
          'margin_bottom'=>10,
          'margin_header'=>10,
          'margin_footer'=>10
      ]);*/
      
     
      return view('welcome')->with('successMsg','The information Stored and you will receive email with all information you need from send');
         return redirect(route('sendEmail'));
    }


   
}