<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllTutorial;

class AllTutorialController extends Controller
{

    //html full tutorial controllers
    public function HtmlShow()
    {
        if(view()->exists('layouts.html')){
            $HtmlNav=AllTutorial::where('subject', 'html')->get(array( 'id', 'name', 'subject', 'image1',
             'image2', 'image3',  'text1', 'text2', 'text3'));       

                $HtmlContent=AllTutorial::take(1)->where('subject', 'html')->get(array( 'id','name', 'subject', 'image1',
                 'text1' ));
                
               $data=[
                'title'=>'Html 5',
                'HtmlNav'=>$HtmlNav,
                'HtmlContent'=>$HtmlContent,   
                           
            ];
            return view('layouts.html', $data);            
        }
                abort(404);
    }

    public function HtmlIdShow($id, AllTutorial $HtmlNav){

        $HtmlNav=AllTutorial::where('subject', 'html')->get(array( 'id',  'name', 'subject', 'image1',
        'image2', 'image3', 'text1', 'text2', 'text3'));

            $HtmlIdContent=AllTutorial::find($id);  
            $old=$HtmlIdContent->toArray('');      
            
     
            if (view()->exists('layouts.html')) {                           
                             $data=[     
                                'title'=> $old['name'],
                                'HtmlNav'=>$HtmlNav,
                                 'HtmlIdContent'=>$HtmlIdContent,
                                 
                             ];
     
                             return view('layouts.html', $data);
                         }
                         abort(404);
    }


//css full tutorial controllers
    public function CssShow()
    {
        if(view()->exists('layouts.html')){
            $CssNav=AllTutorial::where('subject', 'css')->get(array( 'id', 'name', 'subject', 'image1',
             'image2', 'image3', 'text1', 'text2', 'text3',));
            

             $CssContent=AllTutorial::take(1)->where('subject', 'css')->get(array( 'id','name', 'subject', 'image1',
                 'text1' ));


            $data=[
                'title'=>'Css 3',
                'CssNav'=>$CssNav,
                'CssContent'=>$CssContent,
                               
            ];
            return view('layouts.html', $data);            
        }
                abort(404);
    }

    public function CssIdShow($id, AllTutorial $CssNav){

        $CssNav=AllTutorial::where('subject', 'css')->get(array( 'id', 'name', 'subject', 'image1',
        'image2', 'image3', 'text1', 'text2', 'text3'));

            $CssIdContent=AllTutorial::find($id);  
            $old=$CssIdContent->toArray();       
             
            if (view()->exists('layouts.html')) {                           
                             $data=[     
                                'title'=> $old['name'],
                                'CssNav'=>$CssNav,
                                 'CssIdContent'=>$CssIdContent,
                                 
                             ];
     
                             return view('layouts.html', $data);
                         }
                         abort(404);
    }



    //javascript full tutorial controllers
    public function JsShow()
    {
        if(view()->exists('layouts.html')){
            $JsNav=AllTutorial::where('subject', 'js')->get(array( 'id', 'name', 'subject', 'image1',
             'image2', 'image3',  'text1', 'text2', 'text3',));  
             
             $JsContent=AllTutorial::take(1)->where('subject', 'js')->get(array( 'id','name', 'subject', 'image1',
                 'text1' ));
             

            $data=[
                'title'=>'JavaScript',
                'JsContent'=>$JsContent,  
                'JsNav'=>$JsNav,
                           
            ];
            return view('layouts.html', $data);            
        }
                abort(404);
    }


    public function jsIdShow($id, AllTutorial $JsNav){

        $JsNav=AllTutorial::where('subject', 'js')->get(array( 'id',  'name', 'subject', 'image1',
        'image2', 'image3', 'text1', 'text2', 'text3'));

            $JsIdContent=AllTutorial::find($id);  
            $old=$JsIdContent->toArray();  
                 
     
            if (view()->exists('layouts.html')) {                           
                             $data=[     
                                'title'=> $old['name'],
                                'JsIdContent'=>$JsIdContent,
                                 'JsNav'=>$JsNav,
                                 
                             ];
     
                             return view('layouts.html', $data);
                         }
                         abort(404);
    }


    //php full tutorial controllers

    
    public function PhpShow()
    {
        if(view()->exists('layouts.html')){
            $PhpNav=AllTutorial::where('subject', 'php')->get(array( 'id', 'name', 'subject', 'image1',
             'image2', 'image3', 'text1', 'text2', 'text3'));   
             $PhpContent=AllTutorial::take(1)->where('subject', 'php')->get(array( 'id','name', 'subject', 'image1',
                 'text1' ));  
                  

            $data=[
                'title'=>'Php',
                'PhpNav'=>$PhpNav,
                'PhpContent'=>$PhpContent ,
                 
               
            ];
            return view('layouts.html', $data);            
        }
                abort(404);
    }


    public function PhpIdShow($id, AllTutorial $PhpNav){

        $PhpNav=AllTutorial::where('subject', 'php')->get(array( 'id',  'name', 'subject', 'image1',
        'image2', 'image3','text1', 'text2', 'text3'));

            $PhpIdContent=AllTutorial::find($id);  
            $old=$PhpIdContent->toArray(); 
             
      
     
            if (view()->exists('layouts.html')) {                           
                             $data=[     
                                'title'=> $old['name'],
                                'PhpNav'=>$PhpNav,
                                 'PhpIdNav'=>$PhpIdContent,
                                 
                             ];
     
                             return view('layouts.html', $data);
                         }
                         abort(404);
    }


    //mysql full tutorial controllers

    
    public function MysqlShow()
    {
        if(view()->exists('layouts.html')){
            $MysqlNav=AllTutorial::where('subject', 'mysql')->get(array( 'id', 'name', 'subject', 'image1',
             'image2', 'image3', 'text1', 'text2', 'text3'));

             $MysqlContent=AllTutorial::take(1)->where('subject', 'mysql')->get(array( 'id','name', 'subject', 'image1',
                 'text1' ));  
                    

            $data=[
                'title'=>'Mysql',
                'MysqlNav'=>$MysqlNav,
                'MysqlContent'=>$MysqlContent,
                               
            ];
            return view('layouts.html', $data);            
        }
                abort(404);
    }


    public function MysqlIdShow($id, AllTutorial $MysqlNav){

        $MysqlNav=AllTutorial::where('subject', 'mysql')->get(array( 'id',  'name', 'subject', 'image1',
        'image2', 'image3', 'text1', 'text2', 'text3'));

            $MysqlIdContent=AllTutorial::find($id);  
            $old=$MysqlIdContent->toArray(); 
                  
     
            if (view()->exists('layouts.html')) {                           
                             $data=[     
                                'title'=> $old['name'],
                                'MysqlIdContent'=>$MysqlIdContent,
                                 'MysqlNav'=>$MysqlNav,
                                 
                             ];
     
                             return view('layouts.html', $data);
                         }
                         abort(404);
    }

}
