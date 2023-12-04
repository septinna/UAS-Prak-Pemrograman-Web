<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index_view');
    }

    public function login()  /// untuk mengontrol pages login
    {
        return view('login');
    }
    public function register()  /// untuk mengontrol pages register
    {
        return view('register');
    }
    public function lowongan()  /// untuk mengontrol pages register
    {
        return view('lowongan');  // untuk mengontroll pages lowongan
    }

    public function contact()  /// untuk mengontrol pages register
    {
        return view('contact');  // untuk mengontroll pages dekstop 7 
    }
    public function premium()  /// untuk mengontrol pages register
    {
        return view('premium');  // untuk mengontroll pages dekstop 7 
    }
}