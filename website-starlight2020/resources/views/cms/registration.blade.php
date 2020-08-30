@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/paper-bootstrap-wizard/paper-bootstrap-wizard.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/registration.css') }}">
<style>
    body{
        background: url("{{ asset('images/bg-img/background_1.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('content')
<script>
    var stagename_list = [
        @foreach ($stagename_list as $st)
            "{{ $st->stagename }}", 
        @endforeach
    ];
    var email_list = [
        @foreach ($stagename_list as $st)
            "{{ $st->email }}", 
        @endforeach
    ];
</script>
<div class="container col-sm-8 pt-5 pb-5">
    <div class="wizard-container" style="letter-spacing:1px; font-size:14px;" >
        <div class="wizard-card card py-4" data-color="red" id="wizard">
            <form action="{{ route('registrationPost') }}" class="formfull" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="wizard-header text-center">
                    <h2 class="wizard-title mb-4 f-carneval"> PENDAFTARAN PESERTA </h2>
                </div>
                <div class="wizard-navigation">
                    <div class="progress-with-circle">
                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%; height: 100%;"></div>
                    </div>
                    <ul>
                        <li id="li-validation" class="active linav">
                            <a href="#validation" class="anav" data-toggle="tab" id="a-validation" onclick="setvalidation()">
                                <div class="icon-circle" id="circle-validation">
                                    <i class="facheck fas fa-user-check"></i>
                                </div>
                                Persetujuan
                            </a>
                        </li>
                        <li id="li-sologroupcheck" class="linav">
                            <a href="#sologroupcheck" class="anav " data-toggle="tab" id="a-sologroupcheck" onclick="setsologroupcheck()">
                                <div class="icon-circle" id="circle-sologroup">
                                    <i class="facheck fas fa-user-friends"></i>
                                </div>
                                Solo/Group
                            </a>
                        </li>
                        <li id="li-formgeneral" class="linav">
                            <a href="#formgeneral" class="" data-toggle="tab" onclick="setformgeneral()" id="a-formgeneral">
                                <div class="icon-circle" id="circle-formgeneral">
                                    <i class="facheck fas fa-id-badge"></i>
                                </div>
                                Umum
                            </a>
                        </li>
                        <li id="li-formindividual" class="linav">
                            <a href="#formindividual" class="disable"  data-toggle="tab" onclick="setformindividual()"  id="a-formindividual">
                                <div class="icon-circle" id="circle-formindividual">
                                    <i class="facheck fas fa-user-cog"></i>
                                </div>
                                Individu
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane" id="sologroupcheck">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-lg-4 offset-lg-2">
                                    <div class="choice active" id="solochoice" data-toggle="wizard-radio" onclick="solo()">
                                        <input type="radio" name="sologroup" value="solo" id="solocheck">
                                        <div class="card card-checkboxes card-hover-effect">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Solo
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 offset">
                                    <div class="choice" id="groupchoice" data-toggle="wizard-radio" onclick="group()">
                                        <input type="radio" name="sologroup" value="group" id="groupcheck">
                                        <div class="card card-checkboxes card-hover-effect">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="formgeneral">
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="info-text" style="font-weight:bold;">Form Umum</h5>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nama Panggung<span class="text-danger">*</span></label>
                                        <input name="stagename" data-rule-uniquestagename="true" type="text" class="form-control" placeholder="Starlighters" maxlength="50" required>
                                    </div>
                                    <div class="form-group" id="membersvalue">
                                        <label>Jumlah Anggota<span class="text-danger">*</span><small> (maksimal 8 anggota) </small></label>
                                        <input name="membersvalue" id="membersvalueinput" type="number" class="form-control" placeholder="5" min="2" max="8" required onchange="changeMembers()" onkeypress="return event.charCode >= 50 && event.charCode <= 56 && $(this).val().length < 1" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span><small> (perwakilan) </small></label>
                                        <input name="email" type="email" data-rule-uniqueemail="true" class="form-control" placeholder="starlight@gmail.com" maxlength="50" minlength="6" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span><small> (perwakilan) </small></label>
                                        <input name="line" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span><small> (perwakilan) </small></label>
                                        <input name="phonenumber" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username Instagram<span class="text-danger">*</span><small> (perwakilan yang mengupload video di IGTV) </small></label>
                                        <input name="instagram" type="text" class="form-control" placeholder="starlightumn" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi penampilan<span class="text-danger">*</span><small> (penjelasan secara singkat tentang apa yang ingin ditampilkan) </small></label>
                                        <textarea name="stagedescription" class="form-control" placeholder="Extend your light" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Bukti pembayaran uang pendaftaran<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="payment" id="payment" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="payment" style="background-color: #ffffff;" id="paymentlabel">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama pengirim rekening bank<span class="text-danger">*</span></label>
                                        <input name="payment_name" type="text" class="form-control" placeholder="Starlighters" maxlength="50" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama bank<span class="text-danger">*</span></label>
                                        <select name="payment_bank" class="custom-select" onchange="bankCheck(this)">
                                            <option selected value="BCA">Bank Central Asia (BCA)</option>
                                            <option value="BRI">Bank Rakyat Indonesia (BRI)</option>
                                            <option value="Mandiri">Bank Mandiri</option>
                                            <option value="BNI">Bank Negara Indonesia (BNI)</option>
                                            <option value="CIMB">BANK CIMB Niaga</option>
                                            <option value="BRI">Bank Rakyat Indonesia (BRI)</option>
                                            <option value="BTPN">Bank Tabungan Pensiunan Nasional (BTPN)</option>
                                            <option value="Danamon">Bank Danamon</option>
                                            <option value="Others">Bank lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group bank_others" style="display:none;">
                                        <label>Nama bank lainnya<span class="text-danger">*</span></label>
                                        <input name="payment_bank_others" type="text" class="form-control" placeholder="Bank lainnya" maxlength="50" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No rekening pengirim<span class="text-danger">*</span></label>
                                        <input name="payment_number" id="payment_numberinput" type="text" class="form-control" placeholder="1234567890" required onkeypress="return event.charCode >= 48 && event.charCode <= 57 && $(this).val().length < 18">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="formindividual">
                        <!-- form untuk solo -->
                        <div class="col-lg-12" id="soloform">
                            <h5 class="info-text" style="font-weight:bold;">
                                Form Individu
                            </h5>
                            <div class="row" id="member0">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname0" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate0" data-rule-optdate="true" type="text" onfocus="(this.type='date')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address0" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school0" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber0" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line0" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp0" id="ktp0"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp0" style="background-color: #ffffff;" id="ktp0label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid0" id="studentid0" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid0" style="background-color: #ffffff;" id="studentid0label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- form buat group -->
                        <div class="col-lg-12" id="groupform" style="display: none;">
                            <script>
                                var index = 1;
                            </script>
                            <h5 class="info-text" style="font-weight:bold;">
                                Individual Form<br>
                                <input type='button' class="previous disable" style="color:white;cursor:pointer;" onclick="prevMember()" value="&#8249;">
                                <small> <div style="display: inline-block;" id="membernumber">Member 1</div> </small>
                                <input type='button' class="next" style="cursor:pointer;" onclick="nextMember()" value="&#8250;">
                            </h5>
                            <!-- member1 -->
                            <div class="row" id="member1">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname1" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate1" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address1" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school1" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber1" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line1" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP<small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp1" id="ktp1"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp1" style="background-color: #ffffff;" id="ktp1label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid1" id="studentid1" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid1" style="background-color: #ffffff;" id="studentid1label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member2 -->
                            <div class="row" id="member2" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname2" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate2" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address2" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school2" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber2" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line2" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp2" id="ktp2"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp2" style="background-color: #ffffff;" id="ktp2label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid2" id="studentid2" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid2" style="background-color: #ffffff;" id="studentid2label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member3 -->
                            <div class="row" id="member3" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname3" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate3" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address3" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school3" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber3" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line3" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp3" id="ktp3"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp3" style="background-color: #ffffff;" id="ktp3label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid3" id="studentid3" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid3" style="background-color: #ffffff;" id="studentid3label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member4 -->
                            <div class="row" id="member4" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname4" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate4" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address4" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school4" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber4" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line4" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp4" id="ktp4"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp4" style="background-color: #ffffff;" id="ktp4label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid4" id="studentid4" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid4" style="background-color: #ffffff;" id="studentid4label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member5 -->
                            <div class="row" id="member5" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname5" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate5" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address5" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school5" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber5" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line5" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp5" id="ktp5"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp5" style="background-color: #ffffff;" id="ktp5label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid5" id="studentid5" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid5" style="background-color: #ffffff;" id="studentid5label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member6 -->
                            <div class="row" id="member6" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname6" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate6" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address6" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school6" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber6" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line6" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp6" id="ktp6"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp5" style="background-color: #ffffff;" id="ktp6label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid6" id="studentid6" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid6" style="background-color: #ffffff;" id="studentid6label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member7 -->
                            <div class="row" id="member7" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname7" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate7" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address7" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school7" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber7" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line7" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp7" id="ktp7"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp7" style="background-color: #ffffff;" id="ktp7label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid7" id="studentid7" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid7" style="background-color: #ffffff;" id="studentid7label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- member8 -->
                            <div class="row" id="member8" style="display: none;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname8" type="text" class="form-control" placeholder="Starlight UMN" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input name="birthdate8" type="text" onfocus="(this.type='date')" data-rule-optdate="true" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <textarea name="address8" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi<span class="text-danger">*</span><small> (SMA/Universitas) </small></label>
                                        <input name="school8" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" maxlength="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber8" type="text" class="form-control phone" placeholder="0812-3456-789" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line8" type="text" class="form-control" placeholder="@252uzsbl" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp8" id="ktp8"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp8" style="background-color: #ffffff;" id="ktp8label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid8" id="studentid8" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid8" style="background-color: #ffffff;" id="studentid8label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="validation">
                        <script>
                            var downloadCheck = 0;
                        </script>
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="info-text" style="font-weight:bold;">
                                Peraturan Performance Starlight
                            </h5>
                            <div class="col-lg-12 mt-3">
                                <div class="row">
                                    <object class="regulation-obj" data="{{ asset('files/Regulasi Venicea Starlight UMN 2020-min.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" style="width:100%; height:500px">
                                        <div class="rules">
                                            <h5><b>A. Ketentuan Umum Vergilia (Peserta) Lomba :</b></h5>
                                            1. Starlight 2020 terdiri atas 3 rangkaian acara; mulai dari Venicea, Mardi Gras, hingga Rio de Janeiro. <br>
                                            2. Pendaftaran tahap Venicea dibuka melalui website (starlight.umn.ac.id) yang akan diselenggarakan mulai dari <b>Senin, 31 Agustus 2020</b> sampai dengan <b>Sabtu, 10 Oktober 2020</b> Pk 23.59 WIB. <br>
                                            3. Bakat yang ditampilkan dapat berupa <b>APAPUN</b>, dengan syarat <b>BUKAN</b> berupa editing dan animasi. <br>
                                            4. Peserta <b>WAJIB</b> secara resmi terdaftar dalam instansi pendidikan pada tingkat SMA/SMK/MA (Sekolah Menengah Atas/ Sekolah Menengah Kejuruan/ Madrasah Aliyah) atau Perguruan Tinggi se-Indonesia. <br>
                                            5. Peserta dapat mengatasnamakan atau menjadi perwakilan dari instansi pendidikan mereka masing-masing atau mendaftar tanpa instansi <b>(membawa nama tim pribadi).</b> <br>
                                            6. Tidak ada batasan usia bagi peserta, selama peserta masih terdaftar secara aktif dalam instansi pendidikan tersebut. <br>
                                            7. Salah satu perwakilan dari peserta yang lolos ke tahap selanjutnya (tahap stage Mardi Gras) <b>WAJIB</b> untuk masuk ke dalam grup besar melalui aplikasi LINE. Untuk Link invitation akan tercantum pada laman pengumuman lolos dari Venicea ke Mardi Gras. <br>
                                            8. Bagi peserta yang sudah dinyatakan lolos ke tahap selanjutnya, <b>DILARANG</b> untuk mengundurkan diri. <u>Bila mengundurkan diri maka uang pendaftaran tidak akan dikembalikan. <br></u>
                                            9. Peserta yang sudah mendaftarkan diri <b>DILARANG</b> untuk mengganti/menambahkan/mengurangi jumlah anggotanya dari awal hingga akhir rangkaian acara. Kecuali dengan keadaan sebagai berikut : <br>
                                            <div class="indent">a. Diopname, (melampirkan surat keterangan dari Rumah Sakit dan diserahkan kepada LO yang bersangkutan). <br></div>
                                            <div class="indent">b. Keluarga Inti meninggal, dengan menginformasikan kepada LO masing-masing. <br></div>
                                            10. Keputusan juri bersifat mutlak dan <b>TIDAK DAPAT</b> diganggu gugat. <br>
                                            11. Pihak Panitia Starlight 2020 berhak menggunakan dan meminta video audisi peserta untuk kebutuhan publikasi dan promosi acara Starlight 2020. <br>
                                            12. Seluruh peserta audisi online <b>WAJIB mengikuti</b> seluruh ketentuan dan aturan yang berlaku di Starlight 2020. <br>
                                            13. Jika peserta tidak mengikuti regulasi yang telah ditetapkan oleh pihak panitia Starlight 2020, maka pihak panitia berhak <b>mendiskualifikasi</b> peserta. <br><br>
                                            <h5><b>B. Aspek Penilaian</b></h5>
                                            Berikut adalah persentase untuk penilaian peserta :<br>
                                            <div class="indent">
                                                <b>a. Penguasaan Skill (35%)</b> <br>
                                                <div class="indent">
                                                    <i>*Memiliki keahlian dalam bakat yang ditampilkan.</i> <br>
                                                </div>
                                                <b>b. Keunikan (25%)</b> <br>
                                                <div class="indent">
                                                    <i>*Keistimewaan bakat yang ditampilkan dan seberapa jarang bakat ditemukan.</i> <br>
                                                </div>
                                                <b>c. Konsep (25%)</b> <br>
                                                <div class="indent">
                                                    <i>*Menampilkan suatu hal yang menarik dan menghibur sertadengan penyampaian yang kreatif.</i> <br>
                                                </div>
                                                <b>d. Kostum (15%)</b> <br>
                                                <div class="indent">
                                                    <i>*Atribut yang mendukung konsep dan kreativitas penampilan serta mampu menghidupkan karakter yang ditampilkan.</i> <br>
                                                </div>
                                            </div> <br><br>
                                            <h5><b>C. List Juara dan Hadiah Pemenang</b></h5>
                                            Berikut ini merupakan kategori pemenang beserta hadiah dari Starlight 2020 : <br><br>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td><b>Categories</b></td>
                                                    <td><b>Prize</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Sirius (The Newborn Star)</td>
                                                    <td>Rp 2.000.000 + Piala + E-Sertifikat</td>
                                                </tr>
                                                <tr>
                                                    <td>Adara (First Runner Up)</td>
                                                    <td>Rp 1.500.000 + Piala + E-Sertifikat</td>
                                                </tr>
                                                <tr>
                                                    <td>Murzim (Second Runner Up)</td>
                                                    <td>Rp 1.000.000 + Piala + E-Sertifikat</td>
                                                </tr>
                                                <tr>
                                                    <td>Cassiopeia (Best Costume)</td>
                                                    <td>Rp 350.000 + E-Sertifikat</td>
                                                </tr>
                                                <tr>
                                                    <td>Stellar (Crowd Pleaser)</td>
                                                    <td>Rp 125.000 + E-Sertifikat</td>
                                                </tr>
                                            </table> <br>
                                            <h5><b>D. Ketentuan Pendaftaran :</b></h5>
                                            1. Peserta terdiri dari <b>minimal</b> 1 orang dan <b>maksimal</b> 8 orang.  <br>
                                            2. Peserta dianggap <b>resmi terdaftar</b> dalam perlombaan apabila <b>sudah memenuhi ketentuan biaya pendaftaran</b> sejumlah : <br>
                                            <div class="indent">
                                                a. 1-3 orang/kelompok <br>
                                                <div class="indent">
                                                    Earlybird   : Rp 80.000,-  <br>
                                                    New Normal  : Rp 100.000,- <br>
                                                </div>
                                                b. 4-8 orang/kelompok  <br>
                                                <div class="indent">
                                                    Earlybird   : Rp 140.000,-  <br>
                                                    New Normal  : Rp 160.000,-  <br>
                                                </div>
                                                <div style="font-style:italic;color:red;"><b>*Early Bird</b>: 31 Agustus - 13 September 2020. <br></div>
                                                <div style="font-style:italic;color:red;"><b>*New Normal</b>: 14 September - 10 Oktober 2020. <br></div>
                                            </div>
                                            3. Biaya pendaftaran ditransfer ke rekening dengan nomor rekening <b>BCA 8831372281 atas nama JONATHAN NITISANJAYA</b> dengan berita : Venicea_Nama Panggung.  <br>

                                            Nominal yang ditransfer oleh peserta <b>WAJIB</b> menggunakan kode unik di belakangnya, yaitu ‘005’. Contoh: Transfer biaya pendaftaran sebesar Rp 125.005,00. <br>
                                            4. Ketentuan uang pendaftaran bagi <b>peserta yang tidak lolos</b> pada Venicea Stage akan dikembalikan sebesar <b>25%</b> dari uang pendaftaran. <br>
                                            5. Bagi <b>peserta yang berasal dari Mahasiswa Universitas Multimedia Nusantara</b>, akan mendapatkan potongan sebesar <b>30%</b> dari biaya pendaftaran (dengan syarat apabila <b>SELURUH</b> anggota tim merupakan mahasiswa Universitas Multimedia Nusantara dan diwajibkan untuk memasukkan bukti berupa scan foto Kartu Tanda Mahasiswa). <br><br>
                                            <h5><b>E. Ketentuan Konten Video Penampilan Vergilia (Peserta) :</b></h5>
                                            1. Video berdurasi <b>minimal</b> 2 menit 30 detik dan <b>maksimal</b> 4 menit. <br>
                                            2. Peserta <b>DILARANG</b> melakukan tahap editing seperti color grading, penggunaan autotune, atau penggunaan efek-efek visual dan audio lainnya, <b>terkecuali</b> untuk penggabungan beberapa footage video yang <b>TETAP</b> direkam secara one-take. <br>
                                            <div class="indent">
                                                *Contoh editing video yang diperbolehkan :  <br>
                                                <div style="color:#3c78d8;">
                                                    (Dance)  <br>
                                                    https://www.youtube.com/watch?v=Ol1BJca6DPA&feature=youtu.be  <br>
                                                    (Vocal)  <br>
                                                    https://www.youtube.com/watch?v=uZb7we7O8hk&feature=youtu.be  <br>
                                                    (Orchestra)  <br>
                                                    https://www.youtube.com/watch?v=3eXT60rbBVk&feature=youtu.be  <br>
                                                    (Band)  <br>
                                                    https://www.youtube.com/watch?v=P_yeICLSDOQ&feature=youtu.be <br>
                                                </div>
                                                <div style="color:red;">
                                                    (Orientasi akhir harus berbentuk Landscape.) <br>
                                                </div>
                                            </div>
                                            3. Peserta <b>WAJIB</b> untuk menggunakkan teknik record one take saat merekam (teknik pengambilan video dalam satu kali perekaman).
                                            4. Video <b>WAJIB</b> berbentuk <b>landscape</b> (1920 x 1080 px). <br>
                                            5. Video yang diunggah oleh peserta <b>WAJIB</b> memiliki resolusi minimal 720p dan frame rate 30fps. <br>
                                            6. Perekaman video dapat dilakukan menggunakan teknologi apapun baik menggunakan handphone, kamera, dan sebagainya.
                                            7. Video yang diunggah dalam bentuk <b>.mp4</b> atau <b>.mov</b>. <br>
                                            8. Peserta <b>tidak dianjurkan</b> menggunakan benda tajam atau alat yang membahayakan dalam penampilan. <br>
                                            9. Karya yang dikumpulkan merupakan <b>hasil karya sendiri</b> dan bukan milik orang lain. <br>
                                            10. <b>WAJIB</b> mengenakan <b>pakaian</b> yang <b>sopan</b> (tidak mengenakan pakaian yang terbuka). <br>
                                            11. Peserta <b>DILARANG</b> menampilkan brand produk atau jasa dalam video penampilan. <br>
                                            12. Peserta <b>DILARANG</b> membawa atau menampilkan unsur SARA, Asusila, Kekerasan, dan Pornografi dalam konten video. <br>
                                            13. Peserta <b>DILARANG</b> menggunakan konten video yang menyinggung dan merugikan orang lain.  <br><br>
                                            <h5><b>F. Ketentuan Submisi Video :</b></h5>
                                            1. Submisi dikumpulkan dalam bentuk <b>video</b> dan diunggah ke Instagram (IGTV). <br>
                                            2. Peserta <b>WAJIB</b> mengunggah video melalui Instagram, dengan menggunakan hashtag <b>#Starlight2020 #ExtendYourLight #AudisiVeniceaStarlight</b>, mention <b>@starlightumn</b>, dan tag <b>@starlightumn</b>. <br>
                                            <div class="indent">
                                                *Bagi peserta yang tergabung dalam team <b>WAJIB</b> men-tag teman dalam satu timnya. <br>
                                            </div>
                                            3. Peserta <b>WAJIB</b> mengunggah video di Instagram dengan menggunakan template caption sebagai berikut : <br>
                                            <div class="indent">
                                                <b>a. Solo <br></b>
                                                <div class="indent">
                                                    Title: <br>
                                                    [ VENICEA STARLIGHT 2020 ] <br> <br>

                                                    Description: <br>
                                                    Halo! Aku, (nama panggung), siap untuk membentangkan cahaya menuju tak terbatas dan melampauinya! <br> <br>

                                                    Alasanku mengikuti Starlight 2020 adalah (jelaskan alasanmu mengikuti Starlight 2020). <br> <br>

                                                    Jadi, jangan lupa dukung aku dalam petualangan di Planet Starlight, karena aku siap melintasi angkasa menuju Mardi Gras! <br> <br>

                                                    #Starlight2020 #ExtendYourLight #AudisiVeniceaStarlight @starlightumn <br> <br>
                                                </div>
                                                <b>b. Grup <br></b>
                                                <div class="indent">
                                                    Title: <br>
                                                    [ VENICEA STARLIGHT 2020 ] <br> <br>

                                                    Description: <br>
                                                    Halo! Kami, (nama panggung), siap untuk membentangkan cahaya menuju tak terbatas dan melampauinya! <br> <br>

                                                    Alasanku mengikuti Starlight 2020 adalah (jelaskan alasanmu mengikuti Starlight 2020). <br> <br>

                                                    Jadi, jangan lupa dukung kami dalam petualangan di Planet Starlight karena kami siap melintasi angkasa menuju Mardi Gras! <br> <br>

                                                    #Starlight2020 #ExtendYourLight #AudisiVeniceaStarlight @starlightumn <br> <br>
                                                </div>
                                            </div>

                                            4. Seluruh peserta <b>WAJIB</b> mengikuti (follow) akun instagram @starlightumn. <br>
                                            5. Akun Instagram peserta <b>WAJIB</b> tidak terkunci (tidak boleh akun private). <br>
                                            6. Bagi peserta yang memiliki anggota lebih dari satu orang, <b>video</b> hanya boleh diunggah oleh <b>SATU perwakilan</b> saja. <br>
                                        </div>
                                    </object>
                                </div>
                                <div class="custom-control custom-checkbox mt-5 mb-5">
                                    <input name="validaterules" type="checkbox" class="custom-control-input" id="validaterules" value="validrules" required>
                                    <label id="cstm-label" class="custom-control-label" for="validaterules" style="margin-top: 0.5%;">Saya telah membaca dan menyetujui peraturan dan ketentuan performance Starlight</label>
                                    <br><br>
                                    <label class="custom-control-label" for="validaterules" style="margin-top: 0.5%;font-weight:bold;">*Kamu akan mengunduh peraturan dan ketentuan performance Starlight ketika menekan tombol next</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <a href="{{ asset('files/Regulasi Venicea Starlight UMN 2020-min.pdf') }}" class='btn btn-next btn-fill btn-danger btn-wd' id="downloadbtn" onclick="donwloadCheck()" name="next" download>Next</a>
                        <input type='button' class='btn btn-next btn-fill btn-danger btn-wd hideBtn' onclick="nextcheck()" name='next' value='Next' id="nextbtn"/>
                        <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' onclick="finishcheck()" value='Finish' id="finishbtn" />
                    </div>

                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-danger btn-wd' name='previous' onclick="prevcheck()" value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- End of all content -->
@endsection

@section('custom_js')
<!-- Custom js -->
<script src="{{ asset('js/cms/register.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/paper-bootstrap-wizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/paper-bootstrap-wizard/paper-bootstrap-wizard.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/paper-bootstrap-wizard/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/sweetalert/sweetalert.js') }}"></script>
@if (session('status') == 'success')
<script>
    Swal.fire(
        'Registrasi berhasil',
        'Mohon menunggu e-mail dari Starlight untuk informasi selanjutnya',
        'success'
    )
</script>
@endif
@if (session('status') == 'fail_dataumum')
<script>
    Swal.fire("Registrasi gagal", "Terjadi kesalahan saat registrasi, silahkan coba lagi dengan stage name atau email lain.", "error");
</script>
@endif
@if (session('status') == 'fail')
<script>
    Swal.fire("Registrasi gagal", "Terjadi kesalahan saat registrasi, silahkan coba lagi.", "error");
</script>
@endif
@if (session('status') == 'kosong')
<script>
    Swal.fire("Registrasi gagal", "Harap isi semua data yang dibutuhkan!", "error");
</script>
@endif
@endsection
