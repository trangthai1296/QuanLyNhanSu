<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BangCongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        // DB::table('bangcong')->delete();
        // $bangcong = bangcong::all();
        //dd($bangcong);

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

        if (empty($search)) {
            $bangcong = DB::select(
                "select DISTINCT ngaycong.thang as thang, ngaycong.manhanvien, songaycong, songayvang, songaydimuon
                            from ngaycong inner join dimuon on ngaycong.manhanvien = dimuon.manhanvien
                            INNER join vang on vang.manhanvien=ngaycong.manhanvien
                            GROUP by ngaycong.manhanvien, thang, songaycong, songayvang, songaydimuon
                            order by thang DESC"
            );

            DB::statement('drop view dimuon');
            DB::statement('drop view ngaycong');
            DB::statement('drop view vang');

            return view('quanlyluong.bangcong.index', compact('bangcong'));
        } else {
            $bangcong = DB::select(
                "select DISTINCT ngaycong.thang as thang, ngaycong.manhanvien, songaycong, songayvang, songaydimuon
                            from ngaycong inner join dimuon on ngaycong.manhanvien = dimuon.manhanvien
                            INNER join vang on vang.manhanvien=ngaycong.manhanvien
                            where ngaycong.thang like '%$search%'
                            GROUP by ngaycong.manhanvien, thang, songaycong, songayvang, songaydimuon
                            order by thang DESC"
            );

            DB::statement('drop view dimuon');
            DB::statement('drop view ngaycong');
            DB::statement('drop view vang');

            return view('quanlyluong.bangcong.index', compact('bangcong'));
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
