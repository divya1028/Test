<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
//for guest model
use App\Models\GuestLecture;

class WorkShopController extends Controller
{
    public function workshop()
    {
    	return view('workshop');
    }

    public function guestlecture()
    {
        return view('guestlecture');
    }
    public function create(Request $request){
                $data =new Workshop;
			    if($request->file('file')){
			    	$file=$request->file('file');
			    	$filename=time().'.'.$file->getClientOriginalExtension();
			    	$request->file->move('storage/'.$filename);
			    	$data->file=$filename;
			    }
			
                $data->name = $request->name;
                $data->email = $request->email;
                $data->category = $request->category;
                $data->title = $request->title;
                $data->fromdate = $request->fromdate;
                $data->todate = $request->todate;
                $data->organization = $request->organization;
                $data->venue = $request->venue;
			    /*$see->file = $data['userfile'];*/
				$data->save();
				return redirect('workshop')->with('status',"Insert successfully");
			}

            public function store(Request $request){
                $data =new GuestLecture;
                if($request->file('file')){
                    $file=$request->file('file');
                    $filename=time().'.'.$file->getClientOriginalExtension();
                    //before file upload to store db it is as
                    //$request->file->move('storage/'.$filename);//
                    $request->file->move('storage/',$filename);
                    $data->file=$filename;
                }
            
                $data->name = $request->name;
                $data->email = $request->email;
                $data->category = $request->category;
                $data->title = $request->title;
                $data->fromdate = $request->fromdate;
                $data->todate = $request->todate;
                $data->organization = $request->organization;
                $data->venue = $request->venue;
                /*$see->file = $data['userfile'];*/
                $data->save();
                return redirect('guestlecture')->with('status',"Insert successfully");
            }

            //show (view file)
            public function show($id)
            {
                $data= Workshop::find($id);
                return view('display',compact('data'));
            }
            public function download($file)
            {
                       return  response()->download('storage/'.$file);
            }
}
