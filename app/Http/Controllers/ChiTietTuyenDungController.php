<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChiTietTuyenDungController extends Controller
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
        $cttd = DB::select("select dottuyendung.ten as ten, dottuyendung.soluong as soluong , count(nhanvien.id) as datuyen, (dottuyendung.soluong - count(nhanvien.id)) as phaituyen
                            from dottuyendung inner join dotphongvan
                            on dottuyendung.id = dotphongvan.madottuyendung inner join nhanvien
                            on nhanvien.madotphongvan = dotphongvan.id
                            GROUP by dottuyendung.ten,dottuyendung.soluong ");
        //dd($cttd);
        return view('thongkebaocao.tuyendung.index', compact('cttd'));
        }
        else{
            $cttd = DB::select("select dottuyendung.ten as ten, dottuyendung.soluong as soluong , count(nhanvien.id) as datuyen, (dottuyendung.soluong - count(nhanvien.id)) as phaituyen
                            from dottuyendung inner join dotphongvan
                            on dottuyendung.id = dotphongvan.madottuyendung inner join nhanvien
                            on nhanvien.madotphongvan = dotphongvan.id where dottuyendung.ten like '%$search%'
                            GROUP by dottuyendung.ten,dottuyendung.soluong ");
        return view('thongkebaocao.tuyendung.index', compact('cttd'));
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
