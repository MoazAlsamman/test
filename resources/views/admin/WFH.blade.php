@extends('admin.layouts.master')

@section('content')
    <div class="main">
        @include('admin.layouts.nav')
        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Work From Home</h1>
                </div>
                <div class="col-md-8 col-xl-9" style="width: 100%;">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body h-100">
                            <form>
                                <div class="row">
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
                                    <div class="col">
                                        <label class="form-label">Hourly / Dayle </label>
                                        <select class="form-control">
                                            <option> Dayle </option>
                                            <option> Hourly </option>
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
                                        <label class="form-label">Reason</label>
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
                                                Cancel
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
