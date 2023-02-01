@extends('admin.layouts.master')

@section('content')
    <div class="main">
        @include('admin.layouts.nav')

        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Profile</h1>
                </div>
                <div class="row">
                    <form class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile Details</h5>
                                </div>
                                <div class="card-body text-center" style="padding-bottom: 65px;">
                                    <input type="file" class="avatar-add">
                                    <img src="../img/avatars/avatar-4.jpg" alt="Christina Mason"
                                         class="img-fluid rounded-circle mb-2" width="128" height="128"/>
                                    <h5 class="card-title mb-0">Christina Mason</h5>
                                    <div class="text-muted mb-2">Lead Developer</div>
                                    <div class="text-muted">Moaz@scaleda.com</div>
                                    <div class="text-muted mb-2">
                                        <input type="text" class="text-muted text-center bg-black border-0"
                                               value="+963 999 836 287">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Activities</h5>
                                </div>
                                <div class="card-body h-100">
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" value="Moaz Alsamman"
                                                   placeholder="Full Name">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">E-mail</label>
                                            <input type="email" class="form-control" value="Moaz@scaleda.com"
                                                   placeholder="E-Mail">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Department</label>
                                            <select class="form-control">
                                                <option>Development</option>
                                                <option>IT</option>
                                                <option>Account Manager</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Job Title</label>
                                            <input type="text" class="form-control" value="Developer"
                                                   placeholder="Job Title">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Street</label>
                                            <input type="text" class="form-control" value="Roken Al-Deen"
                                                   placeholder="Street">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" value="Damascus" placeholder="City">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#">
                                                <button class="form-control btn btn-outline-primary"><i
                                                            class="align-middle" data-feather="save"></i> Save
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <button class="form-control btn btn-outline-danger"><i
                                                            class="align-middle" data-feather="arrow-left"></i> Cancel
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-8 col-xl-12" style="width:100%">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Report Leaves</h5>
                            </div>
                            <div class="card-body h-100">
                                <div class="row">
                                    <div class="col">
                                        <label class="col-form-label-sm">Annual (20 Days per Year)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                    <div class="col">
                                        <label class="col-form-label-sm">Sick (7 Days per Year)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="col-form-label-sm">Marriage (7 Days)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                    <div class="col">
                                        <label class="col-form-label-sm">Death (3 Days)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="col-form-label-sm">Hourly Leaves (Paid)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                    <div class="col">
                                        <label class="col-form-label-sm">Hourly Leaves (UnPaid)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label class="col-form-label-sm">Daily (UnPaid)</label>
                                        <input type="text" class="form-control" readonly value="5 | Days">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
