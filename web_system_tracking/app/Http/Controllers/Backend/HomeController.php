<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        
        return view('backend.home',[
            // 'model'   => $model,
        ]);
    }
}