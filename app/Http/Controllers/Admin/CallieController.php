<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class CallieController extends BaseController
{
    function index(){
        return view("admin.home.index");
    }
    function noAccess(){
        return view("admin.home.no-access");
    }
}
