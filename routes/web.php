<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('');
});
Route::get('index', [App\Http\Controllers\LoginController::class, 'index'])->name('index');

Route::get('register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('checkRegister', [App\Http\Controllers\RegisterController::class, 'checkRegister'])->name('checkRegister');

Route::get('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('checkLogin', [App\Http\Controllers\LoginController::class, 'checkLogin'])->name('checkLogin');

Route::get('changePassword', [App\Http\Controllers\LoginController::class, 'changePassword'])->name('changePassword');
Route::post('checkChangePassword/{id}', [App\Http\Controllers\LoginController::class, 'checkChangePassword'])->name('checkChangePassword');
Route::get('profile', [App\Http\Controllers\LoginController::class, 'profile'])->name('profile');

Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'roleAdmin:1'], function () {
    Route::get('userIndex', [App\Http\Controllers\UserController::class, 'index'])->name('userIndex');
    Route::get('userEdit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('userEdit');
    Route::post('userUpdate/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('userUpdate');
    Route::get('userDelete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('userDelete');
    Route::get('userCreate', [App\Http\Controllers\UserController::class, 'create'])->name('userCreate');
    Route::post('userStore', [App\Http\Controllers\UserController::class, 'store'])->name('userStore');

    Route::get('roleIndex', [App\Http\Controllers\RoleController::class, 'index'])->name('roleIndex');
    Route::get('roleCreate', [App\Http\Controllers\RoleController::class, 'create'])->name('roleCreate');
    Route::post('roleStore', [App\Http\Controllers\RoleController::class, 'store'])->name('roleStore');
    Route::get('roleEdit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('roleEdit');
    Route::post('roleUpdate/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('roleUpdate');
    Route::get('roleDelete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roleDelete');
});

Route::group(['middleware' => 'role:1,2'], function () {
    Route::get('chucVuIndex', [App\Http\Controllers\ChucVuController::class, 'index'])->name('chucVuIndex');
    Route::get('chucVuCreate', [App\Http\Controllers\ChucVuController::class, 'create'])->name('chucVuCreate');
    Route::post('chucVuStore', [App\Http\Controllers\ChucVuController::class, 'store'])->name('chucVuStore');
    Route::get('chucVuEdit/{id}', [App\Http\Controllers\ChucVuController::class, 'edit'])->name('chucVuEdit');
    Route::post('chucVuUpdate/{id}', [App\Http\Controllers\ChucVuController::class, 'update'])->name('chucVuUpdate');
    Route::get('chucVuDelete/{id}', [App\Http\Controllers\ChucVuController::class, 'destroy'])->name('chucVuDelete');

    Route::get('phongBanIndex', [App\Http\Controllers\PhongBanController::class, 'index'])->name('phongBanIndex');
    Route::get('phongBanCreate', [App\Http\Controllers\PhongBanController::class, 'create'])->name('phongBanCreate');
    Route::post('phongBanStore', [App\Http\Controllers\PhongBanController::class, 'store'])->name('phongBanStore');
    Route::get('phongBanEdit/{id}', [App\Http\Controllers\PhongBanController::class, 'edit'])->name('phongBanEdit');
    Route::post('phongBanUpdate/{id}', [App\Http\Controllers\PhongBanController::class, 'update'])->name('phongBanUpdate');
    Route::get('phongBanDelete/{id}', [App\Http\Controllers\PhongBanController::class, 'destroy'])->name('phongBanDelete');

    Route::get('nhanVienCreate', [App\Http\Controllers\NhanVienController::class, 'create'])->name('nhanVienCreate');
    Route::post('nhanVienStore', [App\Http\Controllers\NhanVienController::class, 'store'])->name('nhanVienStore');
    Route::get('nhanVienEdit/{id}', [App\Http\Controllers\NhanVienController::class, 'edit'])->name('nhanVienEdit');
    Route::post('nhanVienUpdate/{id}', [App\Http\Controllers\NhanVienController::class, 'update'])->name('nhanVienUpdate');
    Route::get('nhanVienDelete/{id}', [App\Http\Controllers\NhanVienController::class, 'destroy'])->name('nhanVienDelete');

    Route::get('hopDongCreate', [App\Http\Controllers\HopDongController::class, 'create'])->name('hopDongCreate');
    Route::post('hopDongStore', [App\Http\Controllers\HopDongController::class, 'store'])->name('hopDongStore');
    Route::get('hopDongEdit/{id}', [App\Http\Controllers\HopDongController::class, 'edit'])->name('hopDongEdit');
    Route::post('hopDongUpdate/{id}', [App\Http\Controllers\HopDongController::class, 'update'])->name('hopDongUpdate');
    Route::get('hopDongDelete/{id}', [App\Http\Controllers\HopDongController::class, 'destroy'])->name('hopDongDelete');

    Route::get('nguoiThanCreate', [App\Http\Controllers\NguoiThanController::class, 'create'])->name('nguoiThanCreate');
    Route::post('nguoiThanStore', [App\Http\Controllers\NguoiThanController::class, 'store'])->name('nguoiThanStore');
    Route::get('nguoiThanEdit/{id}', [App\Http\Controllers\NguoiThanController::class, 'edit'])->name('nguoiThanEdit');
    Route::post('nguoiThanUpdate/{id}', [App\Http\Controllers\NguoiThanController::class, 'update'])->name('nguoiThanUpdate');
    Route::get('nguoiThanDelete/{id}', [App\Http\Controllers\NguoiThanController::class, 'destroy'])->name('nguoiThanDelete');

    Route::get('khenThuongCreate', [App\Http\Controllers\KhenThuongController::class, 'create'])->name('khenThuongCreate');
    Route::post('khenThuongStore', [App\Http\Controllers\KhenThuongController::class, 'store'])->name('khenThuongStore');
    Route::get('khenThuongEdit/{id}', [App\Http\Controllers\KhenThuongController::class, 'edit'])->name('khenThuongEdit');
    Route::post('khenThuongUpdate/{id}', [App\Http\Controllers\KhenThuongController::class, 'update'])->name('khenThuongUpdate');
    Route::get('khenThuongDelete/{id}', [App\Http\Controllers\KhenThuongController::class, 'destroy'])->name('khenThuongDelete');

    Route::get('kyLuatCreate', [App\Http\Controllers\KyLuatController::class, 'create'])->name('kyLuatCreate');
    Route::post('kyLuatStore', [App\Http\Controllers\KyLuatController::class, 'store'])->name('kyLuatStore');
    Route::get('kyLuatEdit/{id}', [App\Http\Controllers\KyLuatController::class, 'edit'])->name('kyLuatEdit');
    Route::post('kyLuatUpdate/{id}', [App\Http\Controllers\KyLuatController::class, 'update'])->name('kyLuatUpdate');
    Route::get('kyLuatDelete/{id}', [App\Http\Controllers\KyLuatController::class, 'destroy'])->name('kyLuatDelete');

    Route::get('dotTuyenDungIndex', [App\Http\Controllers\DotTuyenDungController::class, 'index'])->name('dotTuyenDungIndex');
    Route::get('dotTuyenDungCreate', [App\Http\Controllers\DotTuyenDungController::class, 'create'])->name('dotTuyenDungCreate');
    Route::post('dotTuyenDungStore', [App\Http\Controllers\DotTuyenDungController::class, 'store'])->name('dotTuyenDungStore');
    Route::get('dotTuyenDungEdit/{id}', [App\Http\Controllers\DotTuyenDungController::class, 'edit'])->name('dotTuyenDungEdit');
    Route::post('dotTuyenDungUpdate/{id}', [App\Http\Controllers\DotTuyenDungController::class, 'update'])->name('dotTuyenDungUpdate');
    Route::get('dotTuyenDungDelete/{id}', [App\Http\Controllers\DotTuyenDungController::class, 'destroy'])->name('dotTuyenDungDelete');

    Route::get('chiTietTuyenDungIndex', [App\Http\Controllers\ChiTietTuyenDungController::class, 'index'])->name('chiTietTuyenDungIndex');

    Route::get('dotPhongVanIndex', [App\Http\Controllers\DotPhongVanController::class, 'index'])->name('dotPhongVanIndex');
    Route::get('dotPhongVanCreate', [App\Http\Controllers\DotPhongVanController::class, 'create'])->name('dotPhongVanCreate');
    Route::post('dotPhongVanStore', [App\Http\Controllers\DotPhongVanController::class, 'store'])->name('dotPhongVanCreate');
    Route::get('dotPhongVanEdit/{id}', [App\Http\Controllers\DotPhongVanController::class, 'edit'])->name('dotPhongVanEdit');
    Route::post('dotPhongVanUpdate/{id}', [App\Http\Controllers\DotPhongVanController::class, 'update'])->name('dotPhongVanUpdate');
    Route::get('dotPhongVanDelete/{id}', [App\Http\Controllers\DotPhongVanController::class, 'destroy'])->name('dotPhongVanDelete');

    Route::get('chamCongCreate', [App\Http\Controllers\ChamCongController::class, 'create'])->name('chamCongCreate');
    Route::post('chamCongStore', [App\Http\Controllers\ChamCongController::class, 'store'])->name('chamCongStore');
    Route::get('chamCongEdit/{id}', [App\Http\Controllers\ChamCongController::class, 'edit'])->name('chamCongEdit');
    Route::post('chamCongUpdate/{id}', [App\Http\Controllers\ChamCongController::class, 'update'])->name('chamCongUpdate');
    Route::get('chamCongDelete/{id}', [App\Http\Controllers\ChamCongController::class, 'destroy'])->name('chamCongDelete');

    Route::get('tangCaCreate', [App\Http\Controllers\TangCaController::class, 'create'])->name('tangCaCreate');
    Route::post('tangCaStore', [App\Http\Controllers\TangCaController::class, 'store'])->name('tangCaStore');
    Route::get('tangCaEdit/{id}', [App\Http\Controllers\TangCaController::class, 'edit'])->name('tangCaEdit');
    Route::post('tangCaUpdate/{id}', [App\Http\Controllers\TangCaController::class, 'update'])->name('tangCaUpdate');
    Route::get('tangCaDelete/{id}', [App\Http\Controllers\TangCaController::class, 'destroy'])->name('tangCaDelete');

    Route::get('chiLuongIndex', [App\Http\Controllers\ChiLuongController::class, 'index'])->name('chiLuongIndex');
});

Route::get('nhanVienIndex', [App\Http\Controllers\NhanVienController::class, 'index'])->name('nhanVienIndex');
Route::get('hopDongIndex', [App\Http\Controllers\HopDongController::class, 'index'])->name('hopDongIndex');
Route::get('nguoiThanIndex', [App\Http\Controllers\NguoiThanController::class, 'index'])->name('nguoiThanIndex');
Route::get('khenThuongIndex', [App\Http\Controllers\KhenThuongController::class, 'index'])->name('khenThuongIndex');
Route::get('kyLuatIndex', [App\Http\Controllers\KyLuatController::class, 'index'])->name('kyLuatIndex');
Route::get('chamCongIndex', [App\Http\Controllers\ChamCongController::class, 'index'])->name('chamCongIndex');
Route::get('tangCaIndex', [App\Http\Controllers\TangCaController::class, 'index'])->name('tangCaIndex');
Route::get('bangCongIndex', [App\Http\Controllers\BangCongController::class, 'index'])->name('bangCongIndex');
Route::get('bangLuongIndex', [App\Http\Controllers\LuongController::class, 'index'])->name('bangLuongIndex');
