<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;

class TutorialController extends Controller
{
    public function execute(Request $request){


        $front= Tutorial::where('subject', '=', 'front-end' )->get(array('name', 'text', 'text', 'icon', 'link'));
        $back= Tutorial::where('subject', '=', 'back-end' )->get(array('name', 'text', 'text', 'icon', 'link'));
        $database= Tutorial::where('subject', '=', 'database' )->get(array('name', 'text',  'text', 'icon', 'link'));

         

   	 return view('tutorial', array(
            'front'=>$front,
            'back'=>$back,
            'database'=>$database,
            
        ));
   }

}
