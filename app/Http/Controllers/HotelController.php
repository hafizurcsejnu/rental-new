<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Hotel;
use Session;
session_start();

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        //echo $user_id = Session::get('user_id');
     }
     public function authCheck()
     {
       $user_id = Session::get('user_id');
       $name = Session::get('name');
 
       if ($user_id) {
         return;
       }else{
         return Redirect::to('/signin')->send();
       }
     }


    public function index()
    {
      $fetch = DB::table('hotels')
        ->orderBy('id', 'desc')
        ->get();
                
      $data=view('pages.hotels')->with('data',$fetch);
      return view('layouts.master')->with('main_content',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authCheck();
        
        $addCategory=view('admin.class_add');

        return view('layouts.master')
        ->with('main_content',$addCategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->authCheck();
        $data=array();
        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['schedule_day']=$request->schedule_day;
        $data['schedule_time']=$request->schedule_time;
        $data['active']=$request->active;
        $data['created_by']=Session::get('user_id');
        $data['updated_by']='';  
        
         $file = $request->file('file');
         $filename = $file->getClientOriginalName();
         $video = date('His').$filename;  
         $destination_path = base_path(). '/video';
         $success = $file->move($destination_path, $video); 
         $data['source_file'] = $video;


        DB::table('classes')->insert($data);

        Session::put('message', 'Category saved successfully!');
        return Redirect::to('/classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $fetch = Hotel::where('id', $id)->first();
      return view('pages.hotel_details', ['data' => $fetch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fetch = DB::table('classes')
        ->where('id',$id)
        ->first();

        $data=view('admin.class_edit')
        ->with('class',$fetch);

        return view('layouts.master')
        ->with('main_content',$data);

        return Redirect::to('/classes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //$this->authCheck();
        $data=array();

        $id=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['schedule_day']=$request->schedule_day;
        $data['schedule_time']=$request->schedule_time;
        $data['active']=$request->active;

        $file = $request->file('file');
        if($file == null){  
          $data['source_file'] =  $request->old_file;  
        }
        else{
          $file = $request->file('file');
          $filename = $file->getClientOriginalName();
          $video = date('His').$filename;  
          $destination_path = base_path(). '/video';
          $success = $file->move($destination_path, $video); 
          $data['source_file'] = $video;           
       }


        DB::table('classes')
        ->where('id',$id)
        ->update($data);

        Session::put('message', 'Category updated successfully!');
        return Redirect::to('/classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('classes')
        ->where('id',$id)
        ->delete();

        Session::put('message', 'Category deleted successfully!');
        return Redirect::to('/classes');
    }
}
