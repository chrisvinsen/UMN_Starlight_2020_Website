@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/paper-bootstrap-wizard/paper-bootstrap-wizard.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/registration.css') }}">
@endsection

@section('content')
<div class="container col-sm-8 pt-5 pb-5">
    <div class="wizard-container" style="letter-spacing:1px;font-size:14px;" >
        <div class="wizard-card card py-4" data-color="red" id="wizard">
            <form action="{{url('/registrationPost')}}" class="formfull" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="wizard-header">
                    <h3 class="wizard-title mb-4">
                        Pendaftaran Peserta
                    </h3>
                </div>
                <div class="wizard-navigation">
                    <div class="progress-with-circle">
                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;height: 100%;"></div>
                    </div>
                    <ul>
                        <li id="li-sologroupcheck" class="active linav">
                            <a href="#sologroupcheck" class="anav" data-toggle="tab" id="a-sologroupcheck" onclick="setsologroupcheck()">
                                <div class="icon-circle" id="circle-sologroup">
                                    <i class="facheck fas fa-user-friends"></i>
                                </div>
                                Solo/Group
                            </a>
                        </li>
                        <li id="li-formgeneral" class="linav">
                            <a href="#formgeneral" class="disable" data-toggle="tab" onclick="setformgeneral()" id="a-formgeneral">
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
                        <li id="li-validation" class="linav">
                            <a href="#validation" class="anav disable" data-toggle="tab" id="a-validation" onclick="setvalidation()">
                                <div class="icon-circle" id="circle-validation">
                                    <i class="facheck fas fa-user-check"></i>
                                </div>
                                Persetujuan
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="sologroupcheck">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-lg-4 offset-lg-2">
                                    <div class="choice active" id="solochoice" data-toggle="wizard-checkbox" onclick="solo()">
                                        <input type="checkbox" name="solo" value="solo" id="solocheck" checked="checked">
                                        <div class="card card-checkboxes card-hover-effect">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Solo
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 offset">
                                    <div class="choice" id="groupchoice" data-toggle="wizard-checkbox" onclick="group()">
                                        <input type="checkbox" name="group" value="group" id="groupcheck">
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
                                        <label>Nama Panggung</label>
                                        <input name="stagename" type="text" class="form-control" placeholder="Starlighters" required>
                                    </div>
                                    <!-- kalo group ilang members -->
                                    <div class="form-group" id="membersvalue">
                                        <label>Jumlah Anggota <small>(maksimal 5 anggota)</small></label>
                                        <input name="membersvalue" id="membersvalueinput" type="number" class="form-control" placeholder="5" min="2" max="5" required onchange="changeMembers()" onkeypress="return event.charCode >= 50 && event.charCode <= 53 && $(this).val().length < 1" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line <small>(perwakilan)</small></label>
                                        <input name="line" type="text" class="form-control" placeholder="@252uzsbl" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon <small>(perwakilan)</small></label>
                                        <input name="phonenumber" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username Instagram <small>(perwakilan yang mengupload video di IGTV)</small></label>
                                        <input name="instagram" type="text" class="form-control" placeholder="starlightumn" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi penampilan <small>(penjelasan secara singkat tentang apa yang ingin ditampilkan)</small></label>
                                        <textarea name="stagedescription" class="form-control" placeholder="Extend your light" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi background performer <small>(cerita tentang asal usul performer solo atau group)</small></label>
                                        <textarea name="performerbackground" class="form-control" rows="3" placeholder="The stage is owned by everybody to present all talents by Universitas Multimedia Nusantara"    required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Bukti pembayaran uang pendaftaran</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="payment" id="payment" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="payment" style="background-color: #ffffff;" id="paymentlabel">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Link video yang diunggah melalui IGTV <small>(link akan digunakan panitia untuk melihat video dari para peserta)</small></label>
                                        <input name="videolink" type="url" class="form-control" placeholder="https://www.instagram.com/tv/CASH5NNnVnm/" required>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname0" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate0" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address0" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school0" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber0" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line0" type="text" class="form-control" placeholder="@252uzsbl" required>
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
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname1" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate1" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address1" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school1" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber1" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line1" type="text" class="form-control" placeholder="@252uzsbl" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto KTP <small>(jika telah berumur 18 tahun)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp1" id="ktp1"  onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="ktp1" style="background-color: #ffffff;" id="ktp1label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname2" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate2" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address2" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school2" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber2" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line2" type="text" class="form-control" placeholder="@252uzsbl" required>
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
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname3" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate3" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address3" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school3" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber3" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line3" type="text" class="form-control" placeholder="@252uzsbl" required>
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
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname4" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate4" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address4" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school4" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber4" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line4" type="text" class="form-control" placeholder="@252uzsbl" required>
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
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
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
                                        <label>Nama Lengkap</label>
                                        <input name="fullname5" type="text" class="form-control" placeholder="Starlight UMN" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="birthdate5" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="25 November 2005" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address5" class="form-control" placeholder="Jalan Scientia Boulevard, Gading Serpong, Tangerang, Banten" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Instansi <small>(SMA/Universitas)</small></label>
                                        <input name="school5" type="text" class="form-control" placeholder="Universitas Multimedia Nusantara" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="phonenumber5" type="text" class="form-control phone" placeholder="(081) 234-567-89"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Line</label>
                                        <input name="line5" type="text" class="form-control" placeholder="@252uzsbl" required>
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
                                        <label>Scan Foto Kartu Pelajar/Kartu Tanda Mahasiswa</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="studentid5" id="studentid5" required onchange="checkFile(this)" accept="image/*">
                                            <label class="custom-file-label" for="studentid5" style="background-color: #ffffff;" id="studentid5label">Choose file...</label>
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="validation">
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="info-text" style="font-weight:bold;">
                                Peraturan Performance Starlight
                            </h5>
                            <div class="col-lg-12 mt-5">
                                <div class="row">
                                    <div class="rules">
                                        <h5>1. Rule 1</h5>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id massa euismod, interdum dolor vel, ornare elit. Nunc dolor urna, pharetra vel ex nec, hendrerit viverra sem. Pellentesque at bibendum lacus. Nullam dapibus lectus nec velit ullamcorper ullamcorper. Nam eu nibh nec dolor aliquet dignissim. Praesent varius ipsum eu dolor vehicula, id convallis est tempor. Integer quis enim magna. Phasellus porttitor suscipit augue eget gravida. Nulla ac leo at ipsum hendrerit elementum porttitor eu leo. Integer ut vehicula elit, in scelerisque lorem. Maecenas quis iaculis mi, eu gravida ligula. Nunc blandit et mauris eget dictum. Mauris porttitor maximus quam id efficitur. Morbi hendrerit augue vel eleifend interdum. <br>
                                        <h5 class="mt-3">2. Rule 2</h5>
                                        Phasellus euismod ex quis eleifend commodo. In a turpis non neque ultricies commodo. Fusce libero magna, tincidunt vel cursus eu, venenatis sit amet libero. Proin accumsan ut magna ac efficitur. Aenean sed mattis augue, vel rhoncus lacus. Pellentesque sollicitudin sed ante at iaculis. Donec quis neque eu nisi placerat faucibus vel imperdiet nunc. Sed at luctus dui, vel lacinia diam. <br>
                                        <h5 class="mt-3">3. Rule 3</h5>
                                        Praesent sit amet mattis lectus, eget mattis augue. Praesent sollicitudin nunc eget nunc bibendum pulvinar. Fusce mattis elementum odio, sit amet blandit nibh posuere quis. Quisque nec purus consectetur, rhoncus libero ac, rutrum urna. Aenean consectetur, augue sed varius suscipit, lorem turpis ornare metus, et mattis sem nunc eu mi. Donec sed erat pulvinar, ornare mauris ut, ullamcorper enim. Vestibulum nec imperdiet mi, ac cursus purus. Aenean eget neque id sapien convallis sollicitudin eget sit amet felis. Aliquam tristique aliquam magna. Nullam aliquet arcu mollis, imperdiet enim ornare, rhoncus lectus. Maecenas sodales enim vel orci pulvinar, et consectetur mauris dignissim. Donec maximus ut leo nec cursus. Pellentesque imperdiet ligula neque, eget sagittis libero sollicitudin ut. Vivamus at tortor volutpat, tincidunt metus a, tempor est. Nullam condimentum massa nulla, in iaculis risus porta eget. Suspendisse potenti. <br>
                                        <h5 class="mt-3">4. Rule 4</h5>
                                        Nullam eget auctor justo. Ut maximus euismod elit, eu finibus enim mattis non. Sed ut sollicitudin ligula, sed fermentum nulla. Ut at enim vitae risus suscipit malesuada et non lacus. Praesent egestas fermentum orci quis semper. Vestibulum consequat felis lorem, sed venenatis erat convallis in. Praesent tempor lorem sit amet turpis condimentum varius. Quisque quis lobortis erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac feugiat quam. Maecenas ut velit in tortor lobortis bibendum. <br>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mt-5 mb-5">
                                    <input name="validaterules" type="checkbox" class="custom-control-input" id="validaterules" value="validrules" required>
                                    <label class="custom-control-label" for="validaterules" style="margin-top: 0.5%;">Saya menyetujui peraturan dan ketentuan performance Starlight</label>
                                    <br>
                                    <label id="validation-error" class="mt-1" style="color: #b10000;font-weight: 300;font-size: 0.8em;display:none;" for="validaterules" >Kamu perlu menyetujui peraturan dan ketentuan performance Starlight.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' onclick="nextcheck()" name='next' value='Next' id="nextbtn"/>
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
<script>
    Swal.fire(
    'Registrasi berhasil',
    'Tolong tunggu email konfirmasi dari Starlight untuk mendapatkan kode registrasi',
    'success'
    )
</script>
@endsection
