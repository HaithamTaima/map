<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $option = 'option3';
//        $student_name="Mohammed";
//        $average=95.5;

        $user_id=Auth::user()->id;
        $user_name=Auth::user()->name;
        $user_email=Auth::user()->email;

        $cities_array=['Gaza','Rafah','Jabalia'];

        return view('home',
            [
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,

                'cities_array'=>$cities_array,
                'option'=>$option
            ]);
    }
}
