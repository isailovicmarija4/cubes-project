<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexSlide;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('front.home.index');
    }
      public function aboutUs(){
      return view('front.home.about-us');
  }
  public function contact(){
      return view('front.home.contact');
  }
}


