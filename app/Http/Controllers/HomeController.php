<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.welcome');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function userById($userId)
    {
        if ($userId == 2) {
            return "User Name Is : Mudabir";
        }
        if ($userId == 1) {
            return "User Name Is : Mudabir";
        }
        return "Not Found";
    }
}
