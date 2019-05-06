<?php

namespace App\Http\Controllers\MerchantAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function index() {

        if (sizeof(Auth::user()->restaurants)==0) {
            return view('merchant.home')->with(['types' => \App\Type::all(), 'shortcuts' => \App\GroupMenu::all()]);
        } else {
            return view('merchant.home_stats')->with(['types' => \App\Type::all()]);
        }

        return view('merchant.home')->with(['types' => \App\Type::all()]);
    }
}
