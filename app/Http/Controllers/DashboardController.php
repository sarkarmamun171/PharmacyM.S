<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.list');
    }
    public function dashboard_profile(){
        $users = User::all();
        return view('admin.profile.index',[
            'users'=>$users,
        ]);
    }
}
