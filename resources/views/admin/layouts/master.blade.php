<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/logo.png" />
    <title>Scale-HR</title>
    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Popup container - can be anything you want */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 50%;
            background-color: #000;
            color: #fff;
            text-align: Left;
            border-radius: 6px;
            padding: 30px;
            position: absolute;
            z-index: 3;
            /*bottom: 125%;*/
            left: 25%;
            box-shadow: 0 0 0.5rem 0 #e0ff0196;
            /*margin-left: -80px;*/
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity:1 ;}
        }
        #overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 2;
            cursor: pointer;
        }
        .close{
            width: 100%;
            border: 0px;
            text-align: right;
            padding: 0px;
            background-color: transparent;
            color: #e0ff0196;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="/">
                <img class="align-middle" src="../img/icons/scale.png" width="100px"/>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-item {{Request::is('admin')?'active':''}}">
                    <a class="sidebar-link" href="/admin">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{Request::is('admin/departments')?'active':''}}">
                    <a class="sidebar-link nav-link" href="{{route('admin.departments')}}" >
                        <i class="align-middle" data-feather="users"></i>
                        <span class="align-middle"> Create New Department </span>
                    </a>
                </li>
                <li class=" nav-item has-submenu sidebar-item {{Request::is('admin/users')||Request::is('admin/new-account')?'active':''}}">
                    <a class=" sidebar-link nav-link" href="#">
                        <i class="align-middle" data-feather="plus"></i>
                        Users
                    </a>
                    <ul class="submenu collapse sub sidebar-nav " style="padding-left: 2rem;">
                        <li class="sidebar-item {{Request::is('admin/users')?'active':''}} nav-item">
                            <a class="sidebar-link nav-link" href="{{route('admin.users')}}">
                                <i class="align-middle" data-feather="users"></i> View All Users
                            </a>
                        </li>
                        <li class="sidebar-item {{Request::is('admin/new-account')?'active':''}} nav-item ">
                            <a class="sidebar-link nav-link" href="{{route('admin.new_account')}}">
                                <i class="align-middle" data-feather="user-plus"></i> Create New Account
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-item {{Request::is('admin/list_work_from_home')||Request::is('admin/work_from_home')?'active':''}}">
                    <a class=" sidebar-link nav-link" href="#"> <i class="align-middle" data-feather="plus"></i> WFH </a>
                    <ul class="submenu collapse sub sidebar-nav " style="padding-left: 2rem;">
                        <li class="sidebar-item {{Request::is('admin/list_work_from_home')?'active':''}} nav-item">
                            <a class=" sidebar-link nav-link" href="{{route('admin.WFHs')}}">
                                <i class="align-middle" data-feather="list"></i> All WFH
                            </a>
                        </li>
                        <li class="sidebar-item {{Request::is('admin/work_from_home')?'active':''}}">
                            <a class="sidebar-link" href="{{route('admin.WFH')}}">
                                <i class="align-middle" data-feather="home"></i> <span class="align-middle">Request WFH</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-item {{Request::is('admin/leaves')||Request::is('admin/leave_request')||Request::is('admin/report')?'active':''}}">
                    <a class=" sidebar-link nav-link" href="#"> <i class="align-middle" data-feather="plus"></i> Leaves </a>
                    <ul class="submenu collapse sub sidebar-nav " style="padding-left: 2rem;">
                        <li class="sidebar-item {{Request::is('admin/leaves')?'active':''}} nav-item ">
                            <a class="sidebar-link nav-link" href="{{route('admin.leaves')}}">
                                <i class="align-middle" data-feather="list"></i> All Leaves
                            </a>
                        </li>
                        <li class="sidebar-item {{Request::is('admin/leave_request')?'active':''}} nav-item">
                            <a class=" sidebar-link nav-link" href="{{route('admin.leave_request')}}">
                                <i class="align-middle" data-feather="edit"></i> Leave Request
                            </a>
                        </li>
                        <li class="sidebar-item {{Request::is('admin/report')?'active':''}} nav-item">
                            <a class=" sidebar-link nav-link" href="{{route('admin.report')}}">
                                <i class="align-middle" data-feather="clipboard"></i> Leaves Report
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    @yield('content')
</div>

<script src="../js/app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

            element.addEventListener('click', function (e) {

                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
    });
</script>
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            //defaultDate: defaultDate
        });
    });
</script>
<script>
    function off() {
        document.getElementById("overlay").style.display = "none";
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
    // When the user clicks on div, open the popup
    function myFunction() {
        document.getElementById("overlay").style.display = "block";
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
</script>
</body>
</html>
