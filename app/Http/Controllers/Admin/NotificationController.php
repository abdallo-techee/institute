<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function create_notification(){
        return view('admin.notification.create_notification');
        // return view('admin.manage.manage_notifications');

    }

    // The notification Manage page is accessible from admin controller


}
