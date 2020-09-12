@extends('panel.template.base')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/panel/table/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/panel/table/dt-global_style.css') }}">
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="default-ordering" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Stage Name </th>
                                    <th> Members </th>
                                    <th> Email </th>
                                    <th> Register at </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (sizeof($data_umum) > 0)
                                @foreach ($data_umum as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }} </td>
                                    <td>{{ $data->stagename }}</td>
                                    <td>{{ $data->membersvalue }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td class="text-center"><a href="{{ route('panel.registration.detail', ['dataUmum' => $data->id]) }}" class="btn btn-primary"> View </a> </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8" class="text-center"> No Data Available. </td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th> # </th>
                                    <th> Stage Name </th>
                                    <th> Members </th>
                                    <th> Email </th>
                                    <th> Register at </th>
                                    <th class="invisible"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')   
<script src="{{ asset('js/panel/datatable/datatables.js') }}"></script>
<script>        
    $('#default-ordering').DataTable( {
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "order": [[ 0, "desc" ]],
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7,
        drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
    } );
</script>
@endsection
