<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

class HomeController extends Controller
{
    /**
     * ホーム表示アクション
     */
    public function index()
    {
        return view('home.index');
    }

}
