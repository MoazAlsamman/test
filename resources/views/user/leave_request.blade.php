@extends('user.layouts.master')

@section('content')
    <div class="main">
        @include('user.layouts.nav')
        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Leave Request </h1>
                </div>
                <div class="col-md-8 col-xl-9" style="width: 100%;">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body h-100">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Paid Type</label>
                                        <select class="form-control">
                                            <option>Select Paid Type</option>
                                            <option>Paid</option>
                                            <option>UnPaid</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Reason Type</label>
                                        <select class="form-control">
                                            <option>Select Reason Type</option>
                                            <option>Annual</option>
                                            <option>Sick</option>
                                            <option>Marriage</option>
                                            <option>Death</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Time Type</label>
                                        <select class="form-control">
                                            <option>Select Time Type</option>
                                            <option>Hourly</option>
                                            <option>Daily</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">User</label>
                                        <select class="form-control">
                                            <option>Select User</option>
                                            <option>Moaz Alsamman</option>
                                            <option>Chaden AlShabta</option>
                                            <option>Ahmad Baak</option>
                                            <option>Lina Al-Riss</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Start date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">End Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <a href="#">
                                            <button class="form-control btn btn-outline-primary"><i class="align-middle"
                                                                                                    data-feather="save"></i>
                                                Request
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <button class="form-control btn btn-outline-danger"><i class="align-middle"
                                                                                                   data-feather="arrow-left"></i>
                                                Cancel Request
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
