@extends('admin.layouts.master')

@section('content')
    <div class="main">
        @include('admin.layouts.nav')

        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3 d-flex justify-content-between">
                    <h1 class="h3 align-middle">List Work From Home</h1>
                    <a href="{{route('admin.WFH')}}" class="h3 align-middle">
                        <button class="btn btn-outline-light"><i class="align-middle me-1" data-feather="plus"></i> Add
                            New Request
                        </button>
                    </a>

                </div>
                <div class="col-md-8 col-xl-12" style="width:100%">
                    <div class="card">
                        <div class="card-body h-100">
                            <table class="table table-hover my-0" id="example">
                                <thead>
                                <tr>
                                    <th><h6>User Name</h6></th>
                                    <th><h6>Reason</h6></th>
                                    <th><h6>Start Date</h6></th>
                                    <th><h6>End Date</h6></th>
                                    <th class="d-none d-md-table-cell"><h6>Status</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span style="color: #dddee2">Moaz AL-Samman</span></td>
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
