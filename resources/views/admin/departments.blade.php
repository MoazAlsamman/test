@extends('admin.layouts.master')

<div id="overlay"></div>
@section('content')
    <div class="main">
        @include('admin.layouts.nav')
        <main class="content">
            <div class="container-fluid p-0">
                <div class="mb-3 d-flex justify-content-between">
                    <h1 class="h3 align-middle">List Department</h1>
                    <a href="#" class="h3 align-middle">
                        <button class="btn btn-outline-light" onclick="myFunction()"><i class="align-middle"
                                                                                        data-feather="plus"></i> Add New
                            Department
                        </button>
                    </a>
                </div>

                <div class="col-md-8 col-xl-12" style="width:100%">
                    <div class="card">
                        <div class="card-header" style="padding-top:0px;">
                        </div>
                        <div class="popup">
                            <div class="popuptext" id="myPopup">
                                <form>
                                    <div>
                                        <button class="close" onclick="off()"><i data-feather="x"></i></button>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Department Name</label>
                                            <input type="text" class="form-control" placeholder="Department Name">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Head Of Department</label>
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
                                            <a href="#">
                                                <button class="form-control btn btn-outline-primary"><i
                                                            class="align-middle" data-feather="edit"></i> Create
                                                    Department
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body h-100">
                            <table class="table table-hover my-0">
                                <thead>
                                <tr>
                                    <th><h6>Department Name</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>Head Of Department</h6></th>
                                    <th class="d-none d-xl-table-cell"><h6>Number of Employees</h6></th>
                                    <th class="d-none d-md-table-cell"><h6>Action</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span style="color: #dddee2">Development</span></td>
                                    <td class="d-none d-xl-table-cell"><span
                                                style="color: #dddee2">Abdullah Alawa</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">4</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="edit"></i> Edit
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger "><i
                                                                class="align-middle" data-feather="delete"></i> Delete
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Account Manager</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">leen Shokker</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">3</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="edit"></i> Edit
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="delete"></i> Delete
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color: #dddee2">Creative</span></td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">Mazen Baisony</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell"><span style="color: #dddee2">10</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-primary"><i
                                                                class="align-middle" data-feather="edit"></i> Edit
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#">
                                                    <button class="form-control btn btn-outline-danger"><i
                                                                class="align-middle" data-feather="delete"></i> Delete
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

