<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        DB::statement('CREATE VIEW dimuon
        AS
        SELECT DISTINCT month(ngay) as thang ,manhanvien, count(tinhtrang) as songaydimuon
        FROM bangchamcong
        WHERE tinhtrang=-1
        GROUP by thang ,manhanvien');

        DB::statement('CREATE VIEW ngaycong
        AS
        SELECT DISTINCT month(ngay) as thang ,manhanvien, count(tinhtrang) as songaycong
        FROM bangchamcong
        WHERE tinhtrang=1
        GROUP by thang ,manhanvien');

        DB::statement('CREATE VIEW vang
        AS
        SELECT DISTINCT month(ngay) as thang ,manhanvien, count(tinhtrang) as songayvang
        FROM bangchamcong
        WHERE tinhtrang=0
        GROUP by thang ,manhanvien');

        DB::statement('CREATE VIEW tongtangca
        AS
        SELECT DISTINCT month(ngay) as thang ,manhanvien, sum(sogio) as sogiotangca
        FROM tangca
        GROUP by thang ,manhanvien');

        if (empty($search)) {
            $luong = DB::select('select ngaycong.thang as thang, nhanvien.id as manhanvien,
            songaycong*8*hesoluong*luongcoban + songaydimuon*8*hesoluong*luongcoban*0.85  as luongcoban,
                                    sogiotangca*luongtangca as luongtangca, bhxh as khautru, phucap,
                                    songaycong*8*hesoluong*luongcoban + songaydimuon*8*hesoluong*luongcoban*0.85 +
                                    sogiotangca*luongtangca  +phucap - bhxh  as thuclinh
                                   from nhanvien INNER join ngaycong on nhanvien.id = ngaycong.manhanvien
                                   inner join dimuon on nhanvien.id = dimuon.manhanvien
                                   INNER join tongtangca on nhanvien.id = tongtangca.manhanvien
                                   inner join hopdong on nhanvien.id = hopdong.manhanvien
                                    GROUP by thang, nhanvien.id, songaycong, songaydimuon, sogiotangca, hesoluong, luongcoban, luongtangca,khautru, phucap
                                    order by thang DESC');

            DB::statement('drop view dimuon');
            DB::statement('drop view ngaycong');
            DB::statement('drop view vang');
            DB::statement('drop view tongtangca');

            return view('quanlyluong.bangluong.index', compact('luong'));
        } else {
            $luong = DB::select("select ngaycong.thang as thang, nhanvien.id as manhanvien,
            songaycong*8*hesoluong*luongcoban + songaydimuon*8*hesoluong*luongcoban*0.85  as luongcoban,
                                    sogiotangca*luongtangca as luongtangca, bhxh as khautru, phucap,
                                    songaycong*8*hesoluong*luongcoban + songaydimuon*8*hesoluong*luongcoban*0.85 +
                                    sogiotangca*luongtangca  +phucap - bhxh  as thuclinh
                                   from nhanvien INNER join ngaycong on nhanvien.id = ngaycong.manhanvien
                                   inner join dimuon on nhanvien.id = dimuon.manhanvien
                                   INNER join tongtangca on nhanvien.id = tongtangca.manhanvien
                                   inner join hopdong on nhanvien.id = hopdong.manhanvien
                                   where nhanvien.id like '%$search%'
                                    GROUP by thang, nhanvien.id, songaycong, songaydimuon, sogiotangca, hesoluong, luongcoban, luongtangca,khautru, phucap
                                    order by thang DESC");

            DB::statement('drop view dimuon');
            DB::statement('drop view ngaycong');
            DB::statement('drop view vang');
            DB::statement('drop view tongtangca');

            return view('quanlyluong.bangluong.index', compact('luong'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
