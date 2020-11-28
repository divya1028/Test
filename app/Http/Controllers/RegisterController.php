<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('register');
    }
    public function create(Request $request){
$data = $request->input();
			try{
				$staff = new Register;
                $staff->name = $data['name'];
                $staff->password = $data['password'];
			    $staff->email = $data['email'];
				$staff->save();
				return redirect('register')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('register')->with('failed',"operation failed");
			}
		}
    	
}
