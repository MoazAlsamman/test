@extends('admin.layouts.master')

@section('content')
    <div class="main">
        @include('admin.layouts.nav')
        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3 d-flex justify-content-between">
                    <h1 class="h3 align-middle">List Leave Requests</h1>
                </div>
                <div class="col-md-8 col-xl-12" style="width:100%">
                    <div class="card">
                        <form method="post" action="{{route('admin.    search')}}">
                            @csrf
                            <br>
                            <div class="card h-100">
                                <div class="row p-2">

                                    {{--Start Date--}}
                                    <label for="date" class="col-form-label col-sm-2">Start Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control input-group-sm" id="fromdate"
                                               name="fromdate" required>
                                    </div>
                                    {{--End Date--}}
                                    <label for="date" class="col-form-label col-sm-2">End Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control input-group-sm" id="todate" name="todate"
                                               required>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    {{--Department--}}
                                    <label for="date" class="col-form-label col-sm-2">Department</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="department">
                                            <option>Development</option>
                                            <option>IT</option>
                                            <option>Account Manager</option>
                                        </select>
                                    </div>
                                    {{--User Name--}}
                                    <label for="name" class="col-form-label col-sm-2">User Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-group-sm" id="user_name"
                                               placeholder="User Name" name="user_name">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    {{--Paid--}}
                                    <label for="paid" class="col-form-label col-sm-2">Paid Type</label>
                                    <div class="col-sm-4">
                                        <span class="h6">Paid</span> <input type="radio" class="form-check-inline"
                                                                            id="paid" name="paid" value="Paid"
                                                                            title="Paid">
                                        <span class="h6">UnPaid</span> <input type="radio" class="form-check-inline"
                                                                              id="paid" name="paid" value="UnPaid"
                                                                              title="UnPaid">
                                    </div>
                                    {{--Time--}}
                                    <label for="time" class="col-form-label col-sm-2">Time Type</label>
                                    <div class="col-sm-4">
                                        <span class="h6">Hourly</span> <input type="radio" class="form-check-inline"
                                                                              id="time" name="time" value="Hourly"
                                                                              title="Hourly">
                                        <span class="h6">Daily</span> <input type="radio" class="form-check-inline"
                                                                             id="time" name="time" value="Daily"
                                                                             title="Daily">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <label for="reason" class="col-form-label col-sm-2">Reason Type</label>
                                    <div class="col-sm-4">
                                        <span class="h6">Annual</span> <input type="radio" class="form-check-inline"
                                                                              id="reason" name="reason" value="Annual"
                                                                              title="Annual">
                                        <span class="h6">Sick</span> <input type="radio" class="form-check-inline"
                                                                            id="reason" name="reason" value="Sick"
                                                                            title="Sick">
                                        <span class="h6">Marriage</span> <input type="radio" class="form-check-inline"
                                                                                id="reason" name="reason"
                                                                                value="Marriage" title="Marriage">
                                        <span class="h6">Death</span> <input type="radio" class="form-check-inline"
                                                                             id="reason" name="reason" value="Death"
                                                                             title="Death">
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="form-control btn btn-outline-primary "
                                                name="search" title="search">
                                            <i class="align-middle" data-feather="search"></i> Apply
                                        </button>
                                        {{--<button type="submit" class="btn align-items-end" name="search" title="search">--}}
                                        {{--<img src="img/search.png" alt="Search" width="25px" height="25px">--}}
                                        {{--</button>--}}
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
