<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamCongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $chamcong = DB::update("update bangchamcong set tinhtrang = -1
        where checkin BETWEEN '8:00:00' and '8:30:00' or checkout BETWEEN '17:00:00' and '17:30:00' ");
        $chamcong = DB::update("update bangchamcong set tinhtrang = 1
        where checkin <='8:00:00' and checkout>='17:30:00' ");
        if (empty($search)) {
            $chamcong = DB::select("select id, manhanvien,ngay,checkin, checkout, tinhtrang
            from bangchamcong order by ngay desc");
            return view('quanlyluong.chamcong.index', compact('chamcong'));
        } else {
            $chamcong = DB::select("select id, manhanvien,ngay,checkin, checkout, tinhtrang from bangchamcong where manhanvien like '%$search%' order by ngay desc");
            return view('quanlyluong.chamcong.index', compact('chamcong'));
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
