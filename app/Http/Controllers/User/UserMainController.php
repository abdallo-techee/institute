<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserMainController extends Controller
{
    //
    public function index(){
        return view('user.profile');


    }

    public function user_dashboard(){

        return view('user_dashboard');
    }

    public function user_settings(){

        return view('user.settings');
    } public function user_following(){

        return view('user.following');
    } public function user_course_adv_marked(){

        return view('user.course_adv_marked');
    } public function user_history(){

        return view('user.history');

    }
}
