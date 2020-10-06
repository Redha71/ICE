<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;

class medicalController extends Controller
{
	/**
	*
	*
	* Home Page
	*/

   public function index(){
   	return view('welcome');
   }
   /**
	*
	*
	* Content
	*/

   public function content(){
   	return view('content');
   }
   /**
	*
	*
	* Contact Us
	*/

   public function contactus(){
   	return view('contactus');
   }
   /**
	*
	*
	* About Us
	*/

   public function aboutus(){
   	return view('aboutus');
   }
   /**
   *
   *
   *Contact email
   */
public function store(Request $request){

    $this->validate($request,[
        'name' =>'required',
        'email' =>'required|email',
        'message' =>'required'
    ]);
    $request->session()->flash('cname',$request->name);
    $request->session()->flash('cmsg',$request->message);
    $request->session()->flash('cemail',$request->email);

    Mail::send('emails.contact', [], function ($mail) {
      $mail->to(session('cemail'),session('cname'))->subject('Contact Message copy');
      $mail->cc('redhakaban@gmail.com',session('cname'))->subject('Contact Message');
     });

    
    return redirect()->back()->with('flash_message','Thank you for your message');
   }
  
}
