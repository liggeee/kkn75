<?php

namespace App\Http\Controllers;

use App\Mail;
use App\MailData;
use App\UserData;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailDataController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $mails = Mail::all();
        return view('user.components/choosemail', compact('mails', 'id'));
    }

    public function create(Request $request)
    {
        $userdata = UserData::where('id', $request->id)->first();
        $mail = Mail::where('id', $request->mail)->first();
        if ($mail->id == 1) {
            return view('user.forms/formdomisili', compact('userdata', 'mail'));
        } elseif ($mail->id == 2) {
            return view('user.forms/formsketusaha', compact('userdata', 'mail'));
        } elseif ($mail->id == 3) {
            return view('user.forms/formsktm', compact('userdata', 'mail'));
        } elseif ($mail->id == 4) {
            return view('user.forms/formkelahiran', compact('userdata', 'mail'));
        } elseif ($mail->id == 5) {
            return view('user.forms/formkematian', compact('userdata', 'mail'));
        } elseif ($mail->id == 6) {
            return view('user.forms/formpenghasilan', compact('userdata', 'mail'));
        } elseif ($mail->id == 7) {
            return view('user.forms/formskck', compact('userdata', 'mail'));
        }
    }

    public function store(Request $request)
    {
        $data = new MailData();
        $add_data = collect([]);
        $userdata = UserData::where('id', $request->userdata)->first();
        $mail = Mail::where('id', $request->mail)->first();
        if ($mail->id == 1) {
            $add_data = collect([
                'keperluan' => $request->keperluan,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 2) {
            $add_data = collect([
                'usaha' => $request->usaha,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 3) {
            $add_data = collect([
                'keperluan' => $request->keperluan,
                'namaanak' => $request->namaanak,
                'tgllahir' => $request->tgllahir,
                'kotalahir' => $request->kotalahir,
                'kelamin' => $request->kelamin,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 4) {
            $add_data = collect([
                'namaistri' => $request->namaistri,
                'namaanak' => $request->namaanak,
                'tgllahir' => $request->tgllahir,
                'kotalahir' => $request->kotalahir,
                'kelamin' => $request->kelamin,
                'anakke' => $request->anakke,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 5) {
            $add_data = collect([
                'sebabkematian' => $request->sebabkematian,
                'tglkematian' => $request->tglkematian,
                'tempatkematian' => $request->tempatkematian,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 6) {
            $add_data = collect([
                'namaanak' => $request->namaanak,
                'nikanak' => $request->nikanak,
                'asalsekolah' => $request->asalsekolah,
                'tmptlahir' => $request->tmptlahir,
                'tgllahir' => $request->tgllahir,
                'keperluan' => $request->keperluan,
                'penghasilan' => $request->penghasilan,
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        } elseif ($mail->id == 7) {
            $add_data = collect([
                'ttd' => '',
                'jabatanttd' => ''
            ]);
        }

        $data->create([
            'mail_id' => $mail->id,
            'user_data_id' => $request->userdata,
            'add_data' => $add_data,
            'status' => 0
        ]);
        $data = UserData::where('user_id', Auth::user()->id)->get();
        return view('user.home', compact('data'));
    }

    public function ajax($id)
    {
        $data = MailData::where('id', $id)->first();
        $jenis = $data->mail_id;
        $maildata = json_decode($data->add_data, true);

        if ($jenis == 1) {
            return view('admin.formsurat/form-domisili', compact('data', 'maildata'));
        } elseif ($jenis == 2) {
            return view('admin.formsurat/form-sketusaha', compact('data', 'maildata'));
        } elseif ($jenis == 3) {
            return view('admin.formsurat/form-sktm', compact('data', 'maildata'));
        } elseif ($jenis == 4) {
            return view('admin.formsurat/form-kelahiran', compact('data', 'maildata'));
        } elseif ($jenis == 5) {
            return view('admin.formsurat/form-skematian', compact('data', 'maildata'));
        } elseif ($jenis == 6) {
            return view('admin.formsurat/form-penghasilan', compact('data', 'maildata'));
        } elseif ($jenis == 7) {
            return view('admin.formsurat/form-skck', compact('data', 'maildata'));
        }
    }

    public function adminupdate(Request $request)
    {
        $mail = MailData::where('id', $request->id)->first();
        $jenis = $mail->mail_id;

        if ($jenis == 1) {
            $add_data = collect([
                'keperluan' => $request->keperluan,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);

            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 2) {
            $add_data = collect([
                'usaha' => $request->usaha,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);
            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 3) {
            $add_data = collect([
                'keperluan' => $request->keperluan,
                'namaanak' => $request->namaanak,
                'tgllahir' => $request->tgllahir,
                'kotalahir' => $request->kotalahir,
                'kelamin' => $request->kelamin,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);

            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 4) {
            $add_data = collect([
                'namaistri' => $request->namaistri,
                'namaanak' => $request->namaanak,
                'tgllahir' => $request->tgllahir,
                'kotalahir' => $request->kotalahir,
                'kelamin' => $request->kelamin,
                'anakke' => $request->anakke,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);

            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 5) {
            $add_data = collect([
                'sebabkematian' => $request->sebabkematian,
                'tglkematian' => $request->tglkematian,
                'tempatkematian' => $request->tempatkematian,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);

            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 6) {
            $add_data = collect([
                'namaanak' => $request->namaanak,
                'nikanak' => $request->nikanak,
                'asalsekolah' => $request->asalsekolah,
                'tmptlahir' => $request->tmptlahir,
                'tgllahir' => $request->tgllahir,
                'keperluan' => $request->keperluan,
                'penghasilan' => $request->penghasilan,
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);

            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        } elseif ($jenis == 7) {
            $add_data = collect([
                'ttd' => $request->ttd,
                'jabatanttd' => $request->jabatanttd
            ]);
            $mail->update([
                'add_data' => $add_data,
                'mail_number' => $request->mailnumber
            ]);
        }


        return redirect()->back();
    }

    public function mailverif(Request $request)
    {
        $data = MailData::where('id', $request->id)->first();
        $data->update([
            'status' => $request->status
        ]);

        return redirect()->back();
    }

    public function print($id)
    {
        $data = MailData::where('id', $id)->first();
        $jenis = $data->mail_id;
        $maildata = json_decode($data->add_data, true);
        // dd($data->userdata);
        if ($jenis == 1) {
            $pdf = PDF::loadView('admin.surat/print-domisili', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');

            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 2) {
            $pdf = PDF::loadView('admin.surat/print-ketusaha', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');

            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 3) {
            $pdf = PDF::loadView('admin.surat/print-SKTM', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');
            // return view('admin.surat/print-SKTM', compact('data', 'maildata'));
            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 4) {
            $pdf = PDF::loadView('admin.surat/print-suratkelahiran', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');
            // return view('admin.surat/print-suratkelahiran', compact('data', 'maildata'));
            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 5) {
            $pdf = PDF::loadView('admin.surat/print-suratkematian', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');
            // return view('admin.surat/print-suratkematian', compact('data', 'maildata'));
            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 6) {
            $pdf = PDF::loadView('admin.surat/print-suratpenghasilan', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');
            // return view('admin.surat/print-suratpenghasilan', compact('data', 'maildata'));
            return $pdf->stream('rekap.pdf');
        }elseif ($jenis == 7) {
            $pdf = PDF::loadView('admin.surat/print-suratSKCK', compact('data', 'maildata'));
            $pdf->setPaper('Legal', 'potrait');
            // return view('admin.surat/print-suratSKCK', compact('data', 'maildata'));
            return $pdf->stream('rekap.pdf');
        }
    }
}
