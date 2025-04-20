<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index(){

        return view('admin.admin');
    }

    public function settings(){

        return view('admin.settings');
    }
    public function manage_students(){

        return view('admin.manage.manage_students');
    }
    public function manage_institutes(){

        return view('admin.manage.manage_institutes');
    }
    public function manage_notifications(){

        return view('admin.manage.manage_notifications');
    }



}
