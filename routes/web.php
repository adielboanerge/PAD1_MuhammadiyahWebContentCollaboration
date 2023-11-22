<?php

use App\Http\Controllers\admincon;
use App\Http\Controllers\loginregis;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KajianController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('admin/layout');
});
Route::get('/homepage', function () {
    return view('user/homepage');
});
Route::get('/homepage2', function () {
    return view('user/homepage');
});
Route::get('/sign_in', function () {
    return view('user/sign_in');
});
Route::get('/sign_up', function () {
    return view('user/sign_up');
});
Route::get('/index', function () {
    return view('user/index');
});
Route::get('/kajian', function () {
    return view('user/kajian');
});
Route::get('/kajian', function () {
    return view('user/kajian');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/data_kajian', function () {
    return view('admin/data_kajian');
});
Route::get('/data_user', function () {
    return view('admin/data_user');
});
Route::get('/history_login', function () {
    return view('admin/history_login');
});
Route::get('/history_download', function () {
    return view('admin/history_download');
});
Route::get('/history_upload', function () {
    return view('admin/history_upload');
});
Route::get('/form_create_admin', function () {
    return view('admin/form_create_admin');
});
Route::get('/form_edit_admin_ori', function () {
    return view('admin/form_edit_admin_ori');
});
Route::get('/form_edit_user_nv', function () {
    return view('admin/form_edit_user_nv');
});
Route::get('/form_edit_user_ori', function () {
    return view('admin/form_edit_user_ori');
});
Route::get('/detail_kajian_ori', function () {
    return view('admin/detail_kajian_ori');
});
Route::get('/detail_kajian_nv', function () {
    return view('admin/detail_kajian_nv');
});
Route::get('/detail_kajian_upload', function () {
    return view('admin/detail_kajian_upload');
});
Route::get('/sign_in_admin', function () {
    return view('admin/sign_in_admin');
});

Route::get('/detail_akun_user', function () {
    return view('admin/detail_akun_user');
});
// Route::controller(loginregis::class)->group(function () {
//     Route::get('/sign_up', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/sign_in', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('auth');
//     Route::get('/homepage', 'homepage')->name('homepage');
//     Route::post('/logout', 'logout')->name('logout');
=======

// Route::get('/layout', function () {
//     return view('admin/layout');
// });
// Route::get('/homepage', function () {
//     return view('user/homepage');
// });
// Route::get('/homepage2', function () {
//     return view('user/homepage');
// });
// Route::get('/sign_in', function () {
//     return view('user/sign_in');
>>>>>>> 09605ace09c06fc794eff90e7c4b290821ca638a
// });
// Route::get('/sign_up', function () {
//     return view('user/sign_up');
// });
// Route::get('/index', function () {
//     return view('user/index');
// });
// Route::get('/kajian', function () {
//     return view('user/kajian');
// });
// Route::get('/kajian', function () {
//     return view('user/kajian');
// });
// Route::get('/about', function () {
//     return view('user/about');
// });
// Route::get('/about', function () {
//     return view('user/about');
// });
// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });
// Route::get('/data_kajian', function () {
//     return view('admin/data_kajian');
// });
// Route::get('/data_user', function () {
//     return view('admin/data_user');
// });
// Route::get('/history_login', function () {
//     return view('admin/history_login');
// });
// Route::get('/history_download', function () {
//     return view('admin/history_download');
// });
// Route::get('/history_upload', function () {
//     return view('admin/history_upload');
// });
// Route::get('/form_create_admin', function () {
//     return view('admin/form_create_admin');
// });
// Route::get('/detail_kajian', function () {
//     return view('admin/detail_kajian');
// });

Route::controller(loginregis::class)->group(function () {
    Route::get('/sign_up', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/sign_in', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('auth');
    Route::get('/homepage', 'homepage')->name('homepage');
    Route::get('/adminhome', 'adminhome')->name('adminhome');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(KajianController::class)->group(function () {
    Route::get('/create_form', 'create')->name('create');
    Route::post('/storekajian', 'storekajian')->name('storekajian');
    Route::get('/kajian', 'kajian')->name('kajian');
    Route::get('/data_kajian', 'data_kajian')->name('data_kajian');
    Route::get('/deleteKajian/{id}', 'deleteKajian')->name('deleteKajian');
});

Route::controller(admincon::class)->group(function () {
    Route::get('/admin_dashboard', 'dashboard')->name('dashboard');
    
    Route::get('/data_user', 'data_user')->name('data_user');
    Route::get('/history_login', 'historylogin')->name('history_login');
    

});



