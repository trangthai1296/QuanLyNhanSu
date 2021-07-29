<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use App\Models\dotphongvan;
use App\Models\nhanvien;
use App\Models\phongban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if (empty($search)) {
            $nhanvien = nhanvien::all();
            return view('quanlynhanvien.nhanvien.index', compact('nhanvien'));
        } else {
            $nhanvien = nhanvien::where('hoten', 'like', "%$search%")
            ->orwhere('ngaysinh', 'like', "%$search%")
            ->orwhere('diachi', 'like', "%$search%")
            ->orwhere('gioitinh', 'like', "%$search%")
            ->orwhere('tinhtrang', 'like', "%$search%")
            ->get();
            return view('quanlynhanvien.nhanvien.index', compact('nhanvien'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phongban = phongban::all('id', 'tenphongban');
        $chucvu = chucvu::all('id', 'tenchucvu');
        $dotpv = dotphongvan::all('id', 'ten');
        return view('quanlynhanvien.nhanvien.create', compact('phongban', 'chucvu', 'dotpv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhanvien = new nhanvien();
        $nhanvien->hoten = $request->hoten;
        $nhanvien->ngaysinh = $request->ngaysinh;
        $nhanvien->diachi = $request->diachi;
        $nhanvien->gioitinh = $request->gioitinh;
        $nhanvien->sdt = $request->sdt;
        $nhanvien->cmnd = $request->cmnd;
        $nhanvien->tinhtrang = $request->tinhtrang;
        $nhanvien->hesoluong = $request->hesoluong;
        $nhanvien->maphongban = $request->maphongban;
        $nhanvien->machucvu = $request->machucvu;
        $nhanvien->madotphongvan = $request->madotphongvan;
        $nhanvien->save();
        return Redirect::to('/nhanVienIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien = nhanvien::find($id);
        $phongban = phongban::all('id', 'tenphongban');
        $chucvu = chucvu::all('id', 'tenchucvu');
        $dotpv = dotphongvan::all('id', 'ten');
        return view('quanlynhanvien.nhanvien.edit', compact('nhanvien','phongban', 'chucvu', 'dotpv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nhanvien = nhanvien::find($id);
        $nhanvien->hoten = $request->hoten;
        $nhanvien->ngaysinh = $request->ngaysinh;
        $nhanvien->diachi = $request->diachi;
        $nhanvien->gioitinh = $request->gioitinh;
        $nhanvien->sdt = $request->sdt;
        $nhanvien->cmnd = $request->cmnd;
        $nhanvien->tinhtrang = $request->tinhtrang;
        $nhanvien->hesoluong = $request->hesoluong;
        $nhanvien->maphongban = $request->maphongban;
        $nhanvien->machucvu = $request->machucvu;
        $nhanvien->madotphongvan = $request->madotphongvan;
        $nhanvien->save();
        return Redirect::to('/nhanVienIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvien = nhanvien::find($id);
        $nhanvien->delete();
        return Redirect::to('/nhanVienIndex');
    }
}
