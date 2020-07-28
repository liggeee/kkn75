<?php

namespace App\Http\Controllers;

use App\MailData;
use App\UserData;
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
        if (Auth::user()->role == 0) {
            $dpenduduk0 = UserData::where('status',0)->count();
            $dpenduduk1 = UserData::where('status',1)->count();
            $dpenduduk2 = UserData::where('status',2)->count();
            $mail0 = MailData::where('status',0)->count();
            $mail1 = MailData::where('status',1)->count();
            $mail2 = MailData::where('status',2)->count();

            return view('admin.home',compact('dpenduduk0','dpenduduk1','dpenduduk2','mail0','mail1','mail2'));
        }else{
            $data = UserData::where('user_id',Auth::user()->id)->get();
            return view('user.home', compact('data'));
        }
    }
}
