<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactDataRequest;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
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

    public function privacy()
    {
      return view('privacy');
    }
    
    public function login()
    {
      return view('auth.login');
    }

    public function store(ContactDataRequest $request){
      try {
        $mail = new ContactMailable($request);
        $author = config("mail.from.address",""); 
        Mail::to($author)->send($mail);
        $title = "Mensaje enviado";
        $status = true;
        return view("messagealert", compact("title","status"));
      } catch (\Exception $e) {
        $title = "Error de envio";
        $status = false;
        return view("messagealert", compact("title","status"));
      }      
    }
}
