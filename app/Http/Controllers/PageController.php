<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('index');
    }

    public function about()
    {
      return view('about');
    }
    
    public function blog()
    {
      return view('blog');
    }
    
    public function project()
    {
      return view('portafolio');
    }
    
    public function login()
    {
      return view('auth.login');
    }
}
