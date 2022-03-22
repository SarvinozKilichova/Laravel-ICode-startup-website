<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
use Validator;

class TutorialAdminController extends Controller
{
    public function execute(){

        if(view()->exists('admin.tutorials')){

            $tutorial=Tutorial::all();
            $data=[
                'title'=>'Darslar',
                'tutorial'=>$tutorial
            ];

            return view('admin.tutorials', $data);

            
        }
                abort(404);

    }

        public function Addexecute( Request $request){


            if ($request->isMethod('post')) {
                
                $input=$request->except('_token');

                $messages=[

                      'required'=>":attribute to'ldirilishi shart",
                      'unique' => ":attribute yagona bo'lishi shart" 
                ];
               
                 $validator=Validator::make($input, [

                        'name'=>'required|max:255|unique:tutorials,name',
                        'subject'=>'required|max:255',
                        'text'=>'required',
                        'icon'=>'required|unique:tutorials|max:100',
                        'link'=>'required',

                 ], $messages);  


                 if($validator->fails()){
                    return redirect()->route('tutorialadd')->withErrors($validator)->withInput();
                 }

                 if($request->hasFile('images')){

                 $file=$request->file('images');

                 $input['images']= $file->getClientoriginalName();

                 $file->move(public_path().'/css/assets/images' , $input['images'] );

                 }

                 $tutorial= new Tutorial($input);
                 if ($tutorial->save()) {
                     return redirect('admin')->with('status', "ma'lumot saqlandi");
                 }

            }          


            if(view()->exists('admin.tutorials_add')){

            $data=[
                'title'=>"Yangi dars qo'shish oynasi",
            ];

            return view('admin.tutorials_add', $data);

        }

                abort(404);
    }



            public function editexecute($id,  Request $request, Tutorial $tutorial ){

                    $tutorial=Tutorial::find($id);


                    if ($request->isMethod('delete')) {

                        $tutorial->delete();
                        return redirect('admin')->with('status', "Dars o'chirildi");

                    }


                    if ($request->isMethod('post')) {
                        
                        $input =$request->except('_token');

                        $validator = Validator::make($input, [

                        'name'=>'required|max:255',
                        'subject'=>'required|max:255',
                        'text'=>'required',
                        'icon'=>'required',
                        'link'=>'required',


                 ]); 

                    
                 if($validator->fails()){
                    return redirect()->route('tutorialedit',['tutorial'=>$input['id']])->withErrors($validator)->withInput();
                 }


                    if($request->hasFile('images')){

                     $file=$request->file('images');
                    $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                     $input['images']= $file->getClientoriginalName();



                       }

                       else {
                        $input['images']= $input['old_images'];
                       }

                       unset($input['old_images']);

                       $tutorial->fill($input);
                   
                   

                       if ($tutorial->update()) {
                           return redirect('admin')->with('status', "Dars yangilandi");
                       }
                  
                   }

                    $old = $tutorial->toArray();

                    if (view()->exists('admin.tutorials_edit')) {
                        

                        $data=[
                            'title'=> $old['name'] . 'ni tahrirlash oynasi',
                            'data'=>$old
                        ];

                        return view('admin.tutorials_edit', $data);
                    }

            }


        


}