<?php

namespace App\Http\Controllers;

use App\Education;
use App\Gender;
use App\Job;
use App\MaritalStatus;
use App\Religion;
use App\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nik' => 'required|digits:16',
            'nkk' => 'required|digits:16',
            'rt' => 'required|digits_between:1,4',
            'rw' => 'required|digits_between:1,4',
            'dusun' => 'required|string',
            'street' => 'required|string',
            'born' => 'required|string',
            'birthdate' => 'required|date',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10240'
        ]);

        if ($validator->fails()) {
            return
                response()->json(array(
                    'success' => false,
                    'errors' => $validator->errors()
                ), 400); // 400 being the HTTP code for an invalid request.
        } else {
            $adddata = new UserData();
            $image = $request->file('file');
            $n_image = 'kkn-' . $request->nama. '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images_data', $n_image);
            $adddata->create([
                'user_id'=> Auth::user()->id,
                'nik' => $request->nik,
                'nkk' => $request->nkk,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'dusun' => $request->dusun,
                'street' => $request->street,
                'name' => $request->nama,
                'born' => $request->born,
                'birthdate' => $request->birthdate,
                'gender_id' => $request->gender,
                'job_id' => $request->job,
                'education_id' => $request->education,
                'marital_id' => $request->marital,
                'religion_id' => $request->religion,
                'img' => $n_image
            ]);
            $data = UserData::where('user_id', Auth::user()->id)->get();
            return view('user.components/mydata', compact('data'));
        }
    }

    public function edit(Request $request)
    {
        $genders = Gender::all();
        $jobs = Job::all();
        $educations = Education::all();
        $religions = Religion::all();
        $marital_status = MaritalStatus::all();
        $data = UserData::where('id',$request->id)->first();
        return view('user.components/editdata',compact('genders','marital_status','religions','educations','jobs','data'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nik' => 'required|digits:16',
            'nkk' => 'required|digits:16',
            'rt' => 'required|digits_between:1,4',
            'rw' => 'required|digits_between:1,4',
            'dusun' => 'required|string',
            'street' => 'required|string',
            'born' => 'required|string',
            'birthdate' => 'required|date',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10240'
        ]);

        if ($validator->fails()) {
            return
                response()->json(array(
                    'success' => false,
                    'errors' => $validator->errors()
                ), 400); // 400 being the HTTP code for an invalid request.
        } else {
            $adddata = UserData::where('id',$request->id)->first();
            Storage::delete('public/images_data/' . $adddata->img);
            $image = $request->file('file');
            $n_image = 'kkn-' . $request->nam. '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images_data', $n_image);
            $adddata->update([
                'user_id'=> Auth::user()->id,
                'nik' => $request->nik,
                'nkk' => $request->nkk,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'dusun' => $request->dusun,
                'street' => $request->street,
                'name' => $request->nama,
                'born' => $request->born,
                'birthdate' => $request->birthdate,
                'gender_id' => $request->gender,
                'job_id' => $request->job,
                'education_id' => $request->education,
                'marital_id' => $request->marital,
                'religion_id' => $request->religion,
                'img' => $n_image,
                'status'=>0
            ]);
            $data = UserData::where('user_id', Auth::user()->id)->get();
            return view('user.components/mydata', compact('data'));
        }
    }
    public function verification(Request $request)
    {
        $data = UserData::where('id',$request->id)->first();
        $data->update([
            'status'=>$request->data
        ]);

        return redirect()->back();
    }
}
