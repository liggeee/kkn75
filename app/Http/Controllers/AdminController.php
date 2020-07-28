<?php

namespace App\Http\Controllers;

use App\MailData;
use App\UserData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminpenduduk($id)
    {
        $dpenduduk0 = UserData::where('status', 0)->count();
        $dpenduduk1 = UserData::where('status', 1)->count();
        $dpenduduk2 = UserData::where('status', 2)->count();
        $mail0 = MailData::where('status', 0)->count();
        $mail1 = MailData::where('status', 1)->count();
        $mail2 = MailData::where('status', 2)->count();
        $data = UserData::where('status', $id)->orderBy('id','desc')->paginate(10);
        // dd($data);
        return view('admin.datapenduduk', compact('data','dpenduduk0','dpenduduk1','dpenduduk2','mail0','mail1','mail2'));
    }

    public function adminsurat($id)
    {
        $dpenduduk0 = UserData::where('status', 0)->count();
        $dpenduduk1 = UserData::where('status', 1)->count();
        $dpenduduk2 = UserData::where('status', 2)->count();
        $mail0 = MailData::where('status', 0)->count();
        $mail1 = MailData::where('status', 1)->count();
        $mail2 = MailData::where('status', 2)->count();
        $data = MailData::where('status',$id)->orderBy('id','desc')->paginate(10);     

        return view('admin.adminsurat', compact('data','dpenduduk0','dpenduduk1','dpenduduk2','mail0','mail1','mail2'));

    }
}
