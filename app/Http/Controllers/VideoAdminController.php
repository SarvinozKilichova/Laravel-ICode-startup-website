<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VedioLessons;
use Validator;

class VideoAdminController extends Controller
{
    public function execute(){

        if(view()->exists('admin.videos')){

            $video=VedioLessons::all();
            $data=[
                'title'=>'Video darslar',
                'video'=>$video

            ];
           

            return view('admin.videos', $data);

            
        }
                abort(404);

    }

    public function Addexecute( Request $request){


            if ($request->isMethod('post')) {
                
                $input=$request->except('_token');

                $messages=[

                      'required'=>':attribute toldirilishi shart',
                      'unique' => ':attribute yagona bolishi shart' 
                ];
               
                 $validator=Validator::make($input, [

                        'name'=>'required|max:255|unique:videolessons,name',
                        'subject'=>'required|max:255',
                        'text'=>'required',
                        'videos'=>'required',
                        'info'=>'required',
                        'image'=>'required'

                 ], $messages);  


                 if($validator->fails()){
                    return redirect()->route('videoadd')->withErrors($validator)->withInput();
                 }

                 if($request->hasFile('videos')){

                 $file=$request->file('videos');

                 $input['videos']= $file->getClientoriginalName();

                 $file->move(base_path('resources/assets/videos') , $input['videos'] );

                 }


                 if($request->hasFile('image')){

                 $file=$request->file('image');

                 $input['image']= $file->getClientoriginalName();

                 $file->move(public_path().'/css/assets/images/' , $input['image'] );

                 }


                 $video= new VedioLessons($input);
                 if ($video->save()) {
                     return redirect('admin')->with('status', "video dars saqlandi");
                 }

            }          


            if(view()->exists('admin.video_add')){

            $data=[
                'title'=>"Yangi video dars qo'shish oynasi",
            ];

            return view('admin.video_add', $data);

        }

                abort(404);
    }


    public function Editexecute($id,   Request $request, VedioLessons $video ){

                    $video=VedioLessons::find($id);


                    if ($request->isMethod('delete')) {

                        $video->delete();
                        return redirect('admin')->with('status', " Video dars o'chirildi");

                    }


                    if ($request->isMethod('post')) {
                        
                        $input =$request->except('_token');

                        $validator = Validator::make($input, [

                        'name'=>'required',
                        'subject'=>'required|max:255',
                        'text'=>'required',
                        
                        'info'=>'required',
                        

                 ]); 

                    
                 if($validator->fails()){
                    return redirect()->route('videoedit',['videoedit'=>$input['id']])->withErrors($validator)->withInput();
                 }


                    if($request->hasFile('videos')){

                     $file=$request->file('videos');
                    $file->move(base_path('resources/assets/videos'),$file->getClientOriginalName());
                     $input['videos']= $file->getClientoriginalName();
                       }


                      
                      

                      


                       if($request->hasFile('image')){

                     $file=$request->file('image');
                    $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                     $input['image']= $file->getClientoriginalName();
                       }

                       

                       $video->fill($input);
                   
                   

                       if ($video->update()) {
                           return redirect('admin')->with('status', " Video dars yangilandi");
                       }
                  
                   }

                    $old = $video->toArray();

                    if (view()->exists('admin.videos_edit')) {
                        

                        $data=[
                            'title'=> $old['name'] . " video darsini tahrirlash oynasi",
                            'data'=>$old
                        ];

                        return view('admin.videos_edit', $data);
                    }

                    abort(404);
    

            }


}
