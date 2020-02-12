<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Emails;

class Welcome_Controller extends Controller
{
    public function storeMails(Request $request)
    {
    	

    	$validator = Validator::make($request->all(), [
            'from' => 'required|email',
            'subject' => 'required|string|max:100',
        ]);

        $data = [
        	'email' => $request->input('from'),
        	'subject'	=> $request->input('subject'),
        	'description'	=> $request->input('description'),   
        	'token'		=> csrf_token(),   	
        ];

        $token = Emails::where('token', csrf_token())->first(); 

        //mail send 

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        	if ($token != Null) {
	         	if ($token->token === csrf_token()) {
	        	return redirect('/')->with('danger', 'Kamu sudah melakukan pengiriman email');
		        }else {
		        	Emails::insert($data);
		        	$email = Emails::where('token', csrf_token())->latest()->first();

		        	Mail::send('template.mails.tempMails', ['email' => $email], function($message) use ($email)
	                {
	                    $message->to('hattpri.yhukimura@gmail.com', 'Portofolio')->subject($email->subject);
	                    $message->from($email->email);
	                });
	        		return redirect('/')->with('status', 'Terima kasih !!');
		        } 
	        }else{	        	
		        	Emails::insert($data);
		        	$email = Emails::where('token', csrf_token())->latest()->first();

			        Mail::send('template.mails.tempMails', ['email' => $email], function($message) use ($email)
	                {
	                    $message->to('hattpri.yhukimura@gmail.com')->subject($email->subject);
	                    $message->from($email->email);
	                });
	        		return redirect('/')->with('status', 'Terima kasih !!');
	        } 
	       //send  mail
	        
        }
    }
 /////
}
