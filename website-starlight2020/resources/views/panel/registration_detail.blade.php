@extends('panel.template.base')

@section('custom_css')
<link href="{{ asset('css/panel/user-profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Info</h3>
                        </div>
                        <div class="text-center user-info">
                            <img src="{{ asset('images/core-img/logoSL.png') }}" width="90" alt="avatar">
                            <p class="">{{ $dataUmum->stagename }}</p>
                        </div>
                        <div class="user-info-list">
                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> {{ $dataUmum->membersvalue }} @if($dataUmum->membersvalue > 1) Members @else Member @endif
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ $dataUmum->created_at }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg> {{ $dataUmum->instagram }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <a href="mailto:{{ $dataUmum->email }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> {{ $dataUmum->email }} </a>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{ $dataUmum->phonenumber }}
                                    </li>
                                    <li>
                                        ID Line: {{ $dataUmum->line }}
                                    </li>
                                </ul>
                            </div>                                    
                        </div>
                    </div>
                </div>

                <div class="education layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Payment Status</h3>
                         <div class="user-info-list">
                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="py-2">
                                        From: {{ $dataUmum->payment_name }}
                                    </li>
                                    <li class="py-2">
                                        Bank Name: {{ $dataUmum->payment_bank }}
                                    </li>
                                    <li class="py-2">
                                        Bank Number: {{ $dataUmum->payment_number }}
                                    </li>
                                    <li class="py-2">
                                        <img src="{{ $dataUmum->payment }}" class="w-100" alt="Transfer receipt" >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                <div class="skills layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Stage Description</h3>
                        <p>{{ $dataUmum->stagedescription }}</p>
                    </div>
                </div>
                @foreach($dataUmum->individu as $key => $data)
                <div class="bio layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mb-2">Member {{ $key + 1 }}</h3>
                        <div class="bio-skill-box">

                            <div class="row">
                                
                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Full Name</h5>
                                            <p>{{ $data->fullname }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Birth Date</h5>
                                            <p>{{ $data->birthdate }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Address</h5>
                                            <p>{{ $data->address }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>School</h5>
                                            <p>{{ $data->school }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Phone Number</h5>
                                            <p>{{ $data->phonenumber }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>ID Line</h5>
                                            <p>{{ $data->line }}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                    
                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Student ID Card</h5>
                                            <img src="{{ $data->studentid }}" width="100%" alt="{{ $data->fullname }}'s' Student ID Card">
                                            
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Identity Card</h5>
                                            @if ($data->ktp)
                                            <img src="{{ $data->ktp }}" width="100%" alt="{{ $data->fullname }}'s' Identity Card">
                                            @else
                                            <p> No Data </p>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>                                
                </div>
                @endforeach
            </div>

        </div>
    </div>
        
@endsection

@section('custom_js')   
@endsection
