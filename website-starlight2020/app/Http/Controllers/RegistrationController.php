<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

        if ($request->hasFile('payment')) {
            $extension = $request->file('payment')->getClientOriginalExtension();

            $path = public_path('images/Registration/Payment');

            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $filename = 'payment_' . $request->stagename . '.' . $extension;
            $path_payment = '/images/Registration/Payment/' . $filename;
            $request->file('payment')->move($path, $filename);

            $data_umum = DB::insert('insert into data_umum (stagename, membersvalue, line, phonenumber, instagram, stagedescription, payment, payment_name, payment_bank, payment_number, token, stage, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->stagename,
                $request->membersvalue,
                $request->line,
                $request->phonenumber,
                $request->instagram,
                $request->stagedescription,
                $path_payment,
                $request->payment_name,
                $request->payment_bank,
                $request->payment_number,
                strtoupper(Str::random(6)),
                'Caribana',
                'Pending'
            ]);
        }

        if (strcmp($type, 'solo') == 0) {
            $path_ktp0 = null;
            $path_studentid0 = null;
            if ($request->hasFile('ktp0')) {
                $extension = $request->file('ktp0')->getClientOriginalExtension();

                $path = public_path('images/Registration/KTP');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname0 . '.' . $extension;
                $path_ktp0 = '/images/Registration/KTP/' . $filename;
                $request->file('ktp0')->move($path, $filename);
            }
            if ($request->hasFile('studentid0')) {
                $extension = $request->file('studentid0')->getClientOriginalExtension();

                $path = public_path('images/Registration/StudentID');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname0 . '.' . $extension;
                $path_studentid0 = '/images/Registration/StudentID/' . $filename;
                $request->file('studentid0')->move($path, $filename);
            }
            $data_individu0 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

            if ($data_umum && $data_individu0) {
                session()->flash('status', 'success');
            } else {
                session()->flash('status', 'fail');
            }
        } else if (strcmp($type, 'group') == 0) {
            $path_ktp1 = null;
            $path_studentid1 = null;
            if ($request->hasFile('ktp1')) {
                $extension = $request->file('ktp1')->getClientOriginalExtension();

                $path = public_path('images/Registration/KTP');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname1 . '.' . $extension;
                $path_ktp1 = '/images/Registration/KTP/' . $filename;
                $request->file('ktp1')->move($path, $filename);
            }
            if ($request->hasFile('studentid1')) {
                $extension = $request->file('studentid1')->getClientOriginalExtension();

                $path = public_path('images/Registration/StudentID');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname1 . '.' . $extension;
                $path_studentid1 = '/images/Registration/StudentID/' . $filename;
                $request->file('studentid1')->move($path, $filename);
            }
            $data_individu1 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

                $path = public_path('images/Registration/KTP');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'ktp_' . $request->fullname2 . '.' . $extension;
                $path_ktp2 = '/images/Registration/KTP/' . $filename;
                $request->file('ktp2')->move($path, $filename);
            }
            if ($request->hasFile('studentid2')) {
                $extension = $request->file('studentid2')->getClientOriginalExtension();

                $path = public_path('images/Registration/StudentID');

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }

                $filename = 'studentid_' . $request->fullname2 . '.' . $extension;
                $path_studentid2 = '/images/Registration/StudentID/' . $filename;
                $request->file('studentid2')->move($path, $filename);
            }
            $data_individu2 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname3 . '.' . $extension;
                    $path_ktp3 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp3')->move($path, $filename);
                }
                if ($request->hasFile('studentid3')) {
                    $extension = $request->file('studentid3')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname3 . '.' . $extension;
                    $path_studentid3 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid3')->move($path, $filename);
                }
                $data_individu3 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname4 . '.' . $extension;
                    $path_ktp4 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp4')->move($path, $filename);
                }
                if ($request->hasFile('studentid4')) {
                    $extension = $request->file('studentid4')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname4 . '.' . $extension;
                    $path_studentid4 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid4')->move($path, $filename);
                }
                $data_individu4 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname5 . '.' . $extension;
                    $path_ktp5 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp5')->move($path, $filename);
                }
                if ($request->hasFile('studentid5')) {
                    $extension = $request->file('studentid5')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname5 . '.' . $extension;
                    $path_studentid5 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid5')->move($path, $filename);
                }
                $data_individu5 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
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

            if ($request->fullname6) {
                $path_ktp6 = null;
                $path_studentid6 = null;
                if ($request->hasFile('ktp6')) {
                    $extension = $request->file('ktp6')->getClientOriginalExtension();

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname6 . '.' . $extension;
                    $path_ktp6 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp6')->move($path, $filename);
                }
                if ($request->hasFile('studentid6')) {
                    $extension = $request->file('studentid6')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname6 . '.' . $extension;
                    $path_studentid6 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid6')->move($path, $filename);
                }
                $data_individu6 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname6,
                    $request->birthdate6,
                    $request->address6,
                    $request->school6,
                    $request->phonenumber6,
                    $request->line6,
                    $path_ktp6,
                    $path_studentid6,
                    $request->stagename
                ]);
            }

            if ($request->fullname7) {
                $path_ktp7 = null;
                $path_studentid7 = null;
                if ($request->hasFile('ktp7')) {
                    $extension = $request->file('ktp7')->getClientOriginalExtension();

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname7 . '.' . $extension;
                    $path_ktp7 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp7')->move($path, $filename);
                }
                if ($request->hasFile('studentid7')) {
                    $extension = $request->file('studentid7')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname7 . '.' . $extension;
                    $path_studentid7 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid7')->move($path, $filename);
                }
                $data_individu7 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname7,
                    $request->birthdate7,
                    $request->address7,
                    $request->school7,
                    $request->phonenumber7,
                    $request->line7,
                    $path_ktp7,
                    $path_studentid7,
                    $request->stagename
                ]);
            }

            if ($request->fullname8) {
                $path_ktp8 = null;
                $path_studentid8 = null;
                if ($request->hasFile('ktp8')) {
                    $extension = $request->file('ktp8')->getClientOriginalExtension();

                    $path = public_path('images/Registration/KTP');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'ktp_' . $request->fullname8 . '.' . $extension;
                    $path_ktp8 = '/images/Registration/KTP/' . $filename;
                    $request->file('ktp8')->move($path, $filename);
                }
                if ($request->hasFile('studentid8')) {
                    $extension = $request->file('studentid8')->getClientOriginalExtension();

                    $path = public_path('images/Registration/StudentID');

                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }

                    $filename = 'studentid_' . $request->fullname8 . '.' . $extension;
                    $path_studentid8 = '/images/Registration/StudentID/' . $filename;
                    $request->file('studentid8')->move($path, $filename);
                }
                $data_individu8 = DB::insert('insert into data_individu (fullname, birthdate, address, school, phonenumber, line, ktp, studentid, stagename) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [
                    $request->fullname8,
                    $request->birthdate8,
                    $request->address8,
                    $request->school8,
                    $request->phonenumber8,
                    $request->line8,
                    $path_ktp8,
                    $path_studentid8,
                    $request->stagename
                ]);
            }

            if ($data_umum && $data_individu1 && $data_individu2) {
                session()->flash('status', 'success');
            } else {
                session()->flash('status', 'fail');
            }
        }

        return redirect('registration');
    }
}
