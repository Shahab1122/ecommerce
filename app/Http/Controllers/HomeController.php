<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;   // ✅ fixed
use App\Models\User;
use App\Models\product;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');   // must exist in resources/views/admin/home.blade.php
        } else {
            $data = product::paginate(4);

          return view('home',compact('data'));    // must exist in resources/views/dashboard.blade.php
        }
    }
    public function index()
    {
        $data = product::paginate(4);

          return view('home',compact('data'));  // resources/views/user/home.blade.php
    }
}