<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');
Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');
Route::get('/head/login', function () {
    return view('head.login');
})->name('head.login');
Route::get('/head/register', function () {
    return view('head.register');
})->name('head.register');
Route::get('/login', function () {
    return view('user.login');
})->name('login');
Route::get('/register', function () {
    return view('user.register');
})->name('register');


Route::group(['prefix' => 'admin'], function(){
/*      Admin Route      */
Route::get('/', function () {
    return view('admin.welcome');
})->name('admin.dashboard');
Route::get('/profile', function () {
    return view('admin.profile');
})->name('admin.profile');
Route::get('/users', function () { return view('admin.Users'); })->name('admin.users');
Route::get('/leaves', function () {
    return view('admin.leaves');
})->name('admin.leaves');
Route::get('/new-account', function () {
    return view('admin.new_account');
})->name('admin.new_account');
Route::get('/report', function () {
    return view('admin.report');
})->name('admin.report');
Route::get('/departments', function () {
    return view('admin.departments');
})->name('admin.departments');
Route::get('/leave_request', function () {
    return view('admin.leave_request');
})->name('admin.leave_request');

Route::get('/work_from_home', function () {
    return view('admin.WFH');
})->name('admin.WFH');
Route::get('/list_work_from_home', function () {
    return view('admin.WFHs');
})->name('admin.WFHs');

Route::post('/search', function (Request $request) {
    $date=[
            'start_date'=>$request->fromdate,   'end_date'=>$request->todate,
            'department'=>$request->department, 'user_name'=>$request->user_name,
            'paid'=>$request->paid,             'time'=>$request->time,
            'reason'=>$request->reason,
    ];
    dd($date);
})->name('admin.search');
});

/*      Head Route      */
Route::group(['prefix' => 'head'], function(){
    Route::get('/', function () {
        return view('head.welcome');
    });
    Route::get('/profile', function () {
        return view('head.profile');
    })->name('head.profile');
    Route::get('/users', function () {
        return view('head.users');
    })->name('head.users');
    Route::get('/leaves', function () {
        return view('head.leaves');
    })->name('head.leaves');
    Route::get('/leaves_management', function () {
        return view('head.Leaves_Management');
    })->name('leaves_management');
    Route::get('/department', function () {
        return view('head.departments');
    })->name('head.department');
    Route::get('/leave_request', function () {
        return view('head.leave_request');
    })->name('head.leave_request');
    Route::get('/work_from_home_management', function () {
        return view('head.WFHs_Management');
    })->name('head.WFHs_management');
    Route::get('/work_from_home', function () {
        return view('head.WFH');
    })->name('head.WFH');
    Route::get('/list_work_from_home', function () {
        return view('head.WFHs');
    })->name('head.WFHs');
});

/*      User Route      */
Route::get('/', function () {
    return view('user.welcome');
});
Route::get('/profile', function () {
    return view('user.profile');
})->name('user_profile');
Route::get('/leaves', function () {
    return view('user.Leaves');
})->name('user_leaves');
Route::get('/leave_request', function () {
    return view('user.leave_request');
})->name('leave_request');
Route::get('/work_from_home', function () {
    return view('user.WFH');
})->name('user_WFH');
Route::get('/list_work_from_home', function () {
    return view('user.WFHs');
})->name('user_WFHs');
