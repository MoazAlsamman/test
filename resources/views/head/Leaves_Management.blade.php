@extends('head.layouts.master')

@section('content')
    <div class="main">
        @include('head.layouts.nav')

        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3 d-flex justify-content-between">
                    <h1 class="h3 align-middle">Leave Requests Management</h1>
                </div>
                <div class="col-md-8 col-xl-12" style="width:100%">
                    <div class="card">
                        <div class="card-body h-100">
                            <table class="table table-hover my-0" id="example">
                                <thead>
                                <tr>
                                    <th><h6>User Name</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>Paid</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>Time</h6></th>
                                    <th><h6>Reason</h6></th>
                                    <th><h6>Start Date</h6></th>
                                    <th><h6>End Date</h6></th>
                                    <th class="d-none d-md-table-cell"><h6>Status</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">paid</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">daily</span></td>
                                    <td><span style="color: #dddee2">Annual</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="check"></i> Accept
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="x-circle"></i> Reject
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">paid</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">daily</span></td>
                                    <td><span style="color: #dddee2">Annual</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="check"></i> Accept
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="x-circle"></i> Reject
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">paid</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">daily</span></td>
                                    <td><span style="color: #dddee2">Annual</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="check"></i> Accept
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="x-circle"></i> Reject
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">paid</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">daily</span></td>
                                    <td><span style="color: #dddee2">Annual</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="check"></i> Accept
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="x-circle"></i> Reject
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">paid</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">daily</span></td>
                                    <td><span style="color: #dddee2">Annual</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td><span style="color: #dddee2">2022-09-14 12:00:00</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="check"></i> Accept
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="x-circle"></i> Reject
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
