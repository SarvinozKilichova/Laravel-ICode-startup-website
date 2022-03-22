<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class teamController extends Controller
{
    public function execute(Request $request){

        $team= Team::get(array("name", "duty", "images", "text")); 

        $name= Team::get('name');
        $duty= Team::get('duty');
        $images= Team::get('images');
        $text= Team::get('text');


   	 return view('team', array(
                             'team'=>$team,       
                            'name'=>$name,
                            'duty'=>$duty,
                            'images'=>$images,
                            'text'=>$text

        ));
   }
}
