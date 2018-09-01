<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function user()
    {
    	return view('setting.user');
    }

    public function userPost()
    {

    }
}
