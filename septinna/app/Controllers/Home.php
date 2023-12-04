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
    public function forget()  /// untuk mengontrol pages register
    {
        return view('forget');  // untuk mengontroll pages forget password
    }
    public function dekstop_5()  /// untuk mengontrol pages register
    {
        return view('dekstop_5');  // untuk mengontroll pages dekstop 5 
    }
    public function dekstop_6()  /// untuk mengontrol pages register
    {
        return view('dekstop_6');  // untuk mengontroll pages dekstop 6 
    }
    public function dekstop_7()  /// untuk mengontrol pages register
    {
        return view('dekstop_7');  // untuk mengontroll pages dekstop 7 
    }
}