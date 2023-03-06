<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function createproduct(){
        return view('admin.create');
    }

    public function ordersproduct(){
        return view('admin.orders');
    }

    public function editproduct(){
        return view('admin.edit');
    }
    public function profileadmin(){
        return view('admin.profile');
    }
    public function customers(){
        return view('admin.customer');
        
    } public function calenders(){
        return view('admin.calender');
    }


}