<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllTutorial;
use Validator;

class AllTutorialsController extends Controller
{
    
        public function execute(){
   
           if(view()->exists('admin.allTutorials')){
   
               $tutorials=AllTutorial::all();
               $data=[
                   'title'=>"Barcha darslar to'plami",
                   'tutorials'=>$tutorials
               ];
   
               return view('admin.allTutorials', $data);
   
               
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
   
                           'name'=>'required|max:255|unique:_all_tutorial,name',
                           'subject'=>'required|max:255',
                           'text1'=>'required',
                           'image1'=>'required'
   
                    ], $messages);  
   
   
                    if($validator->fails()){
                       return redirect()->route('AllTutorialsAdd')->withErrors($validator)->withInput();
                    }
   
                    if($request->hasFile('image1')){
   
                    $file=$request->file('image1');
   
                    $input['image1']= $file->getClientoriginalName();
   
                    $file->move(public_path().'/css/assets/images/' , $input['image1'] );
   
                    }

                    if($request->hasFile('image2')){
   
                        $file=$request->file('image2');
       
                        $input['image2']= $file->getClientoriginalName();
       
                        $file->move(public_path().'/css/assets/images/' , $input['image2'] );
       
                        }

                        if($request->hasFile('image3')){
   
                            $file=$request->file('image3');
           
                            $input['image3']= $file->getClientoriginalName();
           
                            $file->move(public_path().'/css/assets/images/' , $input['image3'] );
                        }
   
                    $tutorials= new  AllTutorial($input);
                    if ($tutorials->save()) {
                        return redirect('admin')->with('status', "ma'lumot saqlandi");
                    }
   
               }          
   
   
               if(view()->exists('admin.AllTutorials_add')){
   
               $data=[
                   'title'=>"Yangi dars qo'shish oynasi",
               ];
   
               return view('admin.AllTutorials_add', $data);
   
           }
   
                   abort(404);
       }
   
   
   
                   public function editexecute($id,  Request $request, AllTutorial $tutorials ){
   
                       $tutorials=AllTutorial::find($id);
   
   
                       if ($request->isMethod('delete')) {
   
                           $tutorials->delete();
                           return redirect('admin')->with('status', "Dars o'chirildi");
   
                       }
   
   
                       if ($request->isMethod('post')) {
                           
                           $input =$request->except('_token');
   
                           $validator = Validator::make($input, [
   
                           'name'=>'required',
                           'subject'=>'required|max:255',
                           'text1'=>'required',
                           
   
                    ]); 
   
                       
                    if($validator->fails()){
                       return redirect()->route('AllTutorialsEdit',['tutorials'=>$input['id']])->withErrors($validator)->withInput();
                    }
   
   
                       if($request->hasFile('image1')){
   
                        $file=$request->file('image1');
                       $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                        $input['image1']= $file->getClientoriginalName();
   
   
   
                          }
   
                          if($request->hasFile('image2')){
   
                            $file=$request->file('image2');
                           $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                            $input['image2']= $file->getClientoriginalName();
       
       
       
                              }
   
                              if($request->hasFile('image3')){
   
                                $file=$request->file('image3');
                               $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                                $input['image3']= $file->getClientoriginalName();
           
           
           
                                  }
           
   
                          $tutorials->fill($input);
                      
                      
   
                          if ($tutorials->update()) {
                              return redirect('admin')->with('status', " Dars yangilandi");
                          }
                     
                      }
   
                       $old = $tutorials->toArray();
   
                       if (view()->exists('admin.AllTutorials_edit')) {
                           
   
                           $data=[
                               'title'=> $old['name'] . "ni ma'lumotlarini tahrirlash oynasi",
                               'data'=>$old
                           ];
   
                           return view('admin.AllTutorials_edit', $data);
                       }
   
                       abort(404);
       
   
               }
   
}
