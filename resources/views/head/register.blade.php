<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/logo.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>Sign Up | HR-Scale</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: black;
        }
        .btn-scale{
            background-color: #e0ff01;
            color: #000000;
        }
        .btn-scale:hover{
            color: #e0ff01;
            border-color: #e0ff01;
        }
    </style>
</head>

<body>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4 pb-3">
                        <h1 class="h2">Get started</h1>
{{--                        <p class="lead">--}}
{{--                            Start creating the best possible user experience for you customers.--}}
{{--                        </p>--}}
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="../img/icons/logo.png" alt="Charles Hall" class="img-fluid rounded-circle" width="200" height="200" />
                                </div>
                                <form class="pt-5">
                                    <div class="row p-1">
                                        <div class="col">
                                            <label class="form-label">Name</label>
                                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />

                                        </div>
                                        <div class="col">
                                            <label class="form-label">E-Mail</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your E-Mail" />
                                        </div>
                                    </div>
                                    <div class="row p-1">
                                        <div class="col">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Confirm Password</label>
                                            <input class="form-control form-control-lg" type="password" name="Confirm_Password" placeholder="Enter Confirm Password" />
                                        </div>
                                    </div>
                                    <div class="row p-1">
                                        <div class="col">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control form-control-lg" type="number" name="phone" placeholder="Enter your Phone Number " />
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Location</label>
                                            <input class="form-control form-control-lg" type="text" name="location" placeholder="Enter your Location" />
                                        </div>
                                    </div>
                                    <div class="row p-1">
                                        <div class="col">
                                            <label class="form-label">Department</label>
                                            <select class="form-control form-control-lg" name="department">
                                                <option> Select Your Department  </option>
                                                <option> IT </option>
                                                <option> Development </option>
                                                <option> Account Managers </option>
                                                <option> Creative </option>
                                                <option> Marketing  </option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Job Title </label>
                                            <input class="form-control form-control-lg" type="text" name="job" placeholder="Enter your Job Title" />
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="index.html" class="btn btn-lg btn-scale">Sign up</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a class="h6" href="{{route('head.login')}}" class="btn btn-lg">I have Account ! </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="../js/app.js"></script>

</body>

</html>
