<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use User;
use Auth;
use App\Tutorial;




class MainController extends Controller
{
   public function execute(Request $request){

      if($request->isMethod('POST')){

         $messages= [
            'required'=>"mavjud :attribute qator to'ldirilishi shart",
            'email'=>"mavjud :attribute bo'lgan email manzilini kiriting"
         ];
         $this->validate($request, [

            'username'=>'required|max:255',
            'email'=>'required|email',
            'comment'=>'required'

         ], $messages);

        
         $data = $request->all();
         
         $result = Mail::send('layouts.email', ['data'=>$data], function($message) use ($data) {

            $mail_admin= env('MAIL_ADMIN');
            $message->from($data['email'], $data['username']);
            $message->to($mail_admin)->subject('Question');

         });

              
               return redirect()->route('Home')->with('status', 'xabar yuborildi');
              
   }

      $front= Tutorial::take(1)->where('subject', '=', 'front-end' )->get(array('name', 'text', 'text', 'link', 'images'));
      $back= Tutorial::take(1)->where('subject', '=', 'back-end' )->get(array('name', 'text', 'text', 'link', 'images'));
      $database= Tutorial::take(1)->where('subject', '=', 'database' )->get(array('name', 'text',  'text', 'link', 'images'));

        
       
      
      return view('layouts.site', array(
         'front'=>$front,
         'back'=>$back,
         'database'=>$database,
        
     ));

   	 
   

  }
}