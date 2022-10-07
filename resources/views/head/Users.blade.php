@extends('head.layouts.master')

@section('content')
    <div class="main">
        @include('head.layouts.nav')
        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3 d-flex justify-content-between">
                    <h1 class="h3 align-middle">List User</h1>
{{--                    <a href="{{route('new_account')}}" class="h3 align-middle">--}}
{{--                        <button class="btn btn-outline-light"><i class="align-middle" data-feather="plus"></i> Add New--}}
{{--                            User--}}
{{--                        </button>--}}
{{--                    </a>--}}

                </div>
                <div class="col-md-8 col-xl-12" style="width:100%">
                    <div class="card">
                        <div class="card-header" style="padding-top:0px;">
                        </div>
                        <div class="card-body h-100">
                            <table class="table table-hover my-0">
                                <thead>
                                <tr>
                                    <th><h6>Photo</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>Name</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>E-Mail</h6></th>
                                    <th><h6>Department</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span style="color: #dddee2">
                                            <img src="../img/avatars/avatar.jpg" class="avatar img-fluid me-1">
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz@scaleda.com</span></td>
                                    <td><span style="color: #dddee2">Development</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="color: #dddee2">
                                            <img src="../img/avatars/avatar.jpg" class="avatar img-fluid me-1">
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz@scaleda.com</span></td>
                                    <td><span style="color: #dddee2">Development</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="color: #dddee2">
                                            <img src="../img/avatars/avatar.jpg" class="avatar img-fluid me-1">
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz@scaleda.com</span></td>
                                    <td><span style="color: #dddee2">Development</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="color: #dddee2">
                                            <img src="../img/avatars/avatar.jpg" class="avatar img-fluid me-1">
                                        </span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span
                                            style="color: #dddee2">Moaz@scaleda.com</span></td>
                                    <td><span style="color: #dddee2">Development</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
