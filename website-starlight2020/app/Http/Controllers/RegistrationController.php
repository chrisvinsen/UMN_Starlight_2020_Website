<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Response;
use File;

class RegistrationController extends Controller
{
    public function index(){
        $title = "Registration";
        $nav_menu = "";

        return view('cms.registration', compact('title', 'nav_menu'));
    }

    public function registrationPost(Request $request) {
        $type;
        if ($request->membersvalue) {
            $type = 'group';
        } else {
            $request->membersvalue = 1;
            $type = 'solo';
        }

        // $validatedData = $request->validate([
        //     'stagename' => 'required|max:50|unique:data_umum',
        //     'membersvalue' => 'required',
        //     'line' => 'required|max:30|unique:data_umum',
        //     'phonenumber' => 'required|max:15|unique:data_umum',
        //     'instagram' => 'required|max:30|unique:data_umum',
        //     'stagedescription' => 'required',
        //     'performerbackground' => 'required',
        //     'payment' => 'required',
        //     'videolink' => 'required|max:50|unique:data_umum'
        // ]);

        if ($request->hasFile('payment')) {
            $extension = $request->file('payment')->getClientOriginalExtension();

            $path = public_path('images/data_umum/payment');

            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $filename = 'payment_' . $request->stagename . '.' . $extension;
            $path_payment = '/images/data_umum/payment/' . $filename;
            $request->file('payment')->move($path, $filename);

            DB::insert('insert into data_umum (stagename, membersvalue, line, phonenumber, instagram, stagedescription, performerbackground, payment, videolink) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->stagename,
                $request->membersvalue,
                $request->line,
                $request->phonenumber,
                $request->instagram,
                $request->stagedescription,
                $request->performerbackground,
                $path_payment,
                $request->videolink
            ]);
        }

        if (strcmp($type, 'solo') == 0) {
            $path_ktp0 = null;
            $path_studentid0 = null;
            if ($request->hasFile('ktp0')) {
                $extension = $request->file('ktp0')->getClientOriginalExtension();

                $path = public_path('images/data_individu/ktp');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname0 . '.' . $extension;
                $path_ktp0 = '/images/data_individu/ktp/' . $filename;
                $request->file('ktp0')->move($path, $filename);
            }
            if ($request->hasFile('studentid0')) {
                $extension = $request->file('studentid0')->getClientOriginalExtension();

                $path = public_path('images/data_individu/studentid');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname0 . '.' . $extension;
                $path_studentid0 = '/images/data_individu/studentid/' . $filename;
                $request->file('studentid0')->move($path, $filename);
            }
            DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->fullname0,
                $request->birthdate0,
                $request->address0,
                $request->school0,
                $request->phonenumber0,
                $request->line0,
                $path_ktp0,
                $path_studentid0,
                $request->stagename
            ]);
        } else if (strcmp($type, 'group') == 0) {
            $path_ktp1 = null;
            $path_studentid1 = null;
            if ($request->hasFile('ktp1')) {
                $extension = $request->file('ktp1')->getClientOriginalExtension();

                $path = public_path('images/data_individu/ktp');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname1 . '.' . $extension;
                $path_ktp1 = '/images/data_individu/ktp/' . $filename;
                $request->file('ktp1')->move($path, $filename);
            }
            if ($request->hasFile('studentid1')) {
                $extension = $request->file('studentid1')->getClientOriginalExtension();

                $path = public_path('images/data_individu/studentid');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname1 . '.' . $extension;
                $path_studentid1 = '/images/data_individu/studentid/' . $filename;
                $request->file('studentid1')->move($path, $filename);
            }
            DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->fullname1,
                $request->birthdate1,
                $request->address1,
                $request->school1,
                $request->phonenumber1,
                $request->line1,
                $path_ktp1,
                $path_studentid1,
                $request->stagename
            ]);

            $path_ktp2 = null;
            $path_studentid2 = null;
            if ($request->hasFile('ktp2')) {
                $extension = $request->file('ktp2')->getClientOriginalExtension();

                $path = public_path('images/data_individu/ktp');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname2 . '.' . $extension;
                $path_ktp2 = '/images/data_individu/ktp/' . $filename;
                $request->file('ktp2')->move($path, $filename);
            }
            if ($request->hasFile('studentid2')) {
                $extension = $request->file('studentid2')->getClientOriginalExtension();

                $path = public_path('images/data_individu/studentid');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname2 . '.' . $extension;
                $path_studentid2 = '/images/data_individu/studentid/' . $filename;
                $request->file('studentid2')->move($path, $filename);
            }
            DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->fullname2,
                $request->birthdate2,
                $request->address2,
                $request->school2,
                $request->phonenumber2,
                $request->line2,
                $path_ktp2,
                $path_studentid2,
                $request->stagename
            ]);

            if ($request->fullname3) {
                $path_ktp3 = null;
                $path_studentid3 = null;
                if ($request->hasFile('ktp3')) {
                    $extension = $request->file('ktp3')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/ktp');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname3 . '.' . $extension;
                    $path_ktp3 = '/images/data_individu/ktp/' . $filename;
                    $request->file('ktp3')->move($path, $filename);
                }
                if ($request->hasFile('studentid3')) {
                    $extension = $request->file('studentid3')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/studentid');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname3 . '.' . $extension;
                    $path_studentid3 = '/images/data_individu/studentid/' . $filename;
                    $request->file('studentid3')->move($path, $filename);
                }
                DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname3,
                    $request->birthdate3,
                    $request->address3,
                    $request->school3,
                    $request->phonenumber3,
                    $request->line3,
                    $path_ktp3,
                    $path_studentid3,
                    $request->stagename
                ]);
            }

            if ($request->fullname4) {
                $path_ktp4 = null;
                $path_studentid4 = null;
                if ($request->hasFile('ktp4')) {
                    $extension = $request->file('ktp4')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/ktp');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname4 . '.' . $extension;
                    $path_ktp4 = '/images/data_individu/ktp/' . $filename;
                    $request->file('ktp4')->move($path, $filename);
                }
                if ($request->hasFile('studentid4')) {
                    $extension = $request->file('studentid4')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/studentid');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname4 . '.' . $extension;
                    $path_studentid4 = '/images/data_individu/studentid/' . $filename;
                    $request->file('studentid4')->move($path, $filename);
                }
                DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname4,
                    $request->birthdate4,
                    $request->address4,
                    $request->school4,
                    $request->phonenumber4,
                    $request->line4,
                    $path_ktp4,
                    $path_studentid4,
                    $request->stagename
                ]);
            }

            if ($request->fullname5) {
                $path_ktp5 = null;
                $path_studentid5 = null;
                if ($request->hasFile('ktp5')) {
                    $extension = $request->file('ktp5')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/ktp');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname5 . '.' . $extension;
                    $path_ktp5 = '/images/data_individu/ktp/' . $filename;
                    $request->file('ktp5')->move($path, $filename);
                }
                if ($request->hasFile('studentid5')) {
                    $extension = $request->file('studentid5')->getClientOriginalExtension();

                    $path = public_path('images/data_individu/studentid');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname5 . '.' . $extension;
                    $path_studentid5 = '/images/data_individu/studentid/' . $filename;
                    $request->file('studentid5')->move($path, $filename);
                }
                DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname5,
                    $request->birthdate5,
                    $request->address5,
                    $request->school5,
                    $request->phonenumber5,
                    $request->line5,
                    $path_ktp5,
                    $path_studentid5,
                    $request->stagename
                ]);
            }
        }

        return redirect('');
    }
}
