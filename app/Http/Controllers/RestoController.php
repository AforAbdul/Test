<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoController extends Controller
{
    //
    function index()
    {
return  view('home');
    }
    function home()
    {
return  view('home');
    }
    function booking()
    {
return  view('booking');
    }
    function admin()
    {
return  view('admin');
    }
    function about()
    {
return  view('about');
    }
    function contact()
    {
return  view('contact');
    }
    function login()
    {
return  view('login');
    }
    function register()
    {
return  view('register');
    }


}
