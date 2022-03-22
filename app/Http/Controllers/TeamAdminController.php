<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Validator;

class TeamAdminController extends Controller
{
     public function execute(){

        if(view()->exists('admin.teams')){

            $team=Team::all();
            $data=[
                'title'=>'Jamoa',
                'team'=>$team
            ];

            return view('admin.teams', $data);

            
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

                        'name'=>'required|max:255|unique:team,name',
                        'duty'=>'required|max:255',
                        'text'=>'required',
                        'images'=>'required'

                 ], $messages);  


                 if($validator->fails()){
                    return redirect()->route('teamadd')->withErrors($validator)->withInput();
                 }

                 if($request->hasFile('images')){

                 $file=$request->file('images');

                 $input['images']= $file->getClientoriginalName();

                 $file->move(public_path().'/css/assets/images/' , $input['images'] );

                 }

                 $team= new Team($input);
                 if ($team->save()) {
                     return redirect('admin')->with('status', "ma'lumot saqlandi");
                 }

            }          


            if(view()->exists('admin.teams_add')){

            $data=[
                'title'=>"Yangi jamoa a'zosini qo'shish oynasi",
            ];

            return view('admin.teams_add', $data);

        }

                abort(404);
    }



    			public function editexecute($id,  Request $request, Team $team ){

                    $team=Team::find($id);


                    if ($request->isMethod('delete')) {

                        $team->delete();
                        return redirect('admin')->with('status', "Jamoa a'zosi o'chirildi");

                    }


                    if ($request->isMethod('post')) {
                        
                        $input =$request->except('_token');

                        $validator = Validator::make($input, [

                        'name'=>'required',
                        'duty'=>'required|max:255',
                        'text'=>'required',
                        

                 ]); 

                    
                 if($validator->fails()){
                    return redirect()->route('teamedit',['team'=>$input['id']])->withErrors($validator)->withInput();
                 }


                    if($request->hasFile('images')){

                     $file=$request->file('images');
                    $file->move(public_path().'/css/assets/images/',$file->getClientOriginalName());
                     $input['images']= $file->getClientoriginalName();



                       }


                       $team->fill($input);
                   
                   

                       if ($team->update()) {
                           return redirect('admin')->with('status', " Jamoa a'zosi ma'lumotlari yangilandi");
                       }
                  
                   }

                    $old = $team->toArray();

                    if (view()->exists('admin.teams_edit')) {
                        

                        $data=[
                            'title'=> $old['name'] . "ni ma'lumotlarini tahrirlash oynasi",
                            'data'=>$old
                        ];

                        return view('admin.teams_edit', $data);
                    }

                    abort(404);
    

            }



}
