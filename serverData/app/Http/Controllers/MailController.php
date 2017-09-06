<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    //
    public function __construct(){
	$this->middleware('guest');
    }

    public function send(Request $request){
    
     
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'name' => 'required|string',
            'phone' => 'required|min:10|numeric',
            'message'=>'required|string'
        ]);
      
        if($validator->passes()) {
	       $data = array(
	       		'email'=>$request->email,
	       		'name'=>$request->name, 
	       		'phone'=>$request->phone,
	       		'company'=>$request->company,
	       		//'message'=>stripslashes($request->message)
	       		'messages'=>explode("\n",$request->message)
	       	);
	       
	       
	       Mail::send(['html'=>'mail'],$data,function($message) use ($data){
	            $message->to('info@mergetransit.com','Mergetransit')->subject('Contactus');
	            $message->from($data['email'], $data['name']);
	       });
	      //info@mergetransit.com
	      return back()
	      	->with('status',"Thank you for your message.");
	  }else{
	  	 return redirect()->back()->withInput($request->all())->withErrors($validator);
	  }
    }
}