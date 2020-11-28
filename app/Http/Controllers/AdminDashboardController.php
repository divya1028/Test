<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class AdminDashboardController extends Controller
{
    public function admindash()
    {
    	return view('admindashboard');
    }

     public function admincategory()
    {
    	return view('category');
    }
    //display db content workshop  in admin view  
    public function index()
    {
    	$file=Workshop::all();
    	return view('view',compact('file'));
    }

    public function admin()
    {
    	return view('workshop');
    }
    
}
