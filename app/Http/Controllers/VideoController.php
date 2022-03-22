<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VedioLessons;
use App\VideoStream;
use Storage;
class VideoController extends Controller
{
    public function execute(){

   	$video=VedioLessons::get(array('name', 'id', 'subject', 'text', 'info', 'videos', 'created_at', 'image', 'price'));

 
        $name= VedioLessons::get('name');
        $price= VedioLessons::get('price');
        $id= VedioLessons::get('id');
        $image= VedioLessons::get('image');
        $subject= VedioLessons::get('subject');
        $videos= VedioLessons::get('videos');
        $text= VedioLessons::get('text');
        $info= VedioLessons::get('info');
        $created_at= VedioLessons::get('created_at');
        
   	
   	  if (view()->exists('layouts.video')) {
   	    return view('layouts.video',array(
						'name'=>$name,
						'image'=>$image,
						'subject'=>$subject,
						'videos'=>$videos,
						'text'=>$text,
						'info'=>$info,
						'created_at'=>$created_at,
						'video'=>$video,
            'id'=>$id,
            
   	    ));	 
      }
		  abort(404);
    }

    public function Vexecute($id,  VedioLessons $video){

      $video=VedioLessons::FindOrFail($id);
      $old = $video->toArray();
      if (view()->exists('layouts.fullVideo')) {
          $data=[
            'title'=> $old['name'],
            'data'=>$old,
            'video'=>$video
          ];
          return view('layouts.fullVideo',  $data); 
      }
    }

    public function getVideo($id, VedioLessons $video){
      $video=VedioLessons::FindOrFail($id);
      $old = $video->toArray();
       $name=$old['videos'];
       $videoPath=base_path('resources/assets/videos');
       $filePath= $videoPath.'/' . $name;
       if (! file_exists($filePath)) {
        return abort(404); 
      } 
        $name = basename($filePath);
        return response()->download($filePath, $name, ['Content-Type'=> 'video/mp4']); 
            }
        

    }
   

