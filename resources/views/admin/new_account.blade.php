@extends('admin.layouts.master')

@section('content')
    <div class="main">
        @include('admin.layouts.nav')

        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Create New Account</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card mb-3">
                            <div class="card-header">
                                {{--									<h5 class="card-title mb-0">Profile Details</h5>--}}
                            </div>
                            <div class="card-body text-center" style="padding-bottom: 208px;">
                                <input type="file" class="avatar-add">
                                <img src="../img/avatars/avatar-4.jpg" alt="Christina Mason"
                                     class="img-fluid rounded-circle mb-2" width="128" height="128"/>
                                <div class="text-muted mb-2">
                                    <input type="text" class="form-control text-muted text-center bg-black border-0"
                                           placeholder="Add Phone Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                {{--									<h5 class="card-title mb-0" style="color: transparent">Details</h5>--}}
                            </div>
                            <div class="card-body h-100">
                                <form>
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
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" value="Roken Al-Deen"
                                                   placeholder="Password">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" value="Roken Al-Deen"
                                                   placeholder="Confirm Password">
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
                                                            class="align-middle" data-feather="save"></i> Create Account
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <button class="form-control btn btn-outline-danger"><i
                                                            class="align-middle" data-feather="arrow-left"></i> Cancel
                                                    Create Account
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
