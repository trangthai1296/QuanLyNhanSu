<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kyluat;
use Illuminate\Support\Facades\Redirect;

class KyLuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if(empty($search)){
            $kyluat = kyluat::all();
            return view('thongkebaocao.kyluat.index',compact('kyluat'));
        }
        else{
            $kyluat =  kyluat::where('manhanvien','like', "%$search%")
            ->orwhere('lydo','like', "%$search%")
            ->orwhere('hinhthuc','like', "%$search%")
            ->orwhere('ngaykyluat','like', "%$search%")
            ->get();
            return view('thongkebaocao.kyluat.index',compact('kyluat'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thongkebaocao.kyluat.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kyluat = new kyluat();
        $kyluat->manhanvien = $request->manhanvien;
        $kyluat->lydo = $request->lydo;
        $kyluat->hinhthuc = $request->hinhthuc;
        $kyluat->ngaykhenthuong = $request->ngaykyluat;
        $kyluat->save();
        return Redirect::to('/kyLuatIndex');
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
        $kyluat = kyluat::find($id);
        return view('thongkebaocao.kyluat.edit', compact('kyluat'));
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
        $kyluat = kyluat::find($id);
        $kyluat->manhanvien = $request->manhanvien;
        $kyluat->lydo = $request->lydo;
        $kyluat->hinhthuc = $request->hinhthuc;
        $kyluat->ngaykhenthuong = $request->ngaykyluat;
        $kyluat->save();
        return Redirect::to('/kyLuatIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kyluat = kyluat::find($id);
        $kyluat->delete();
        return Redirect::to('/kyLuatIndex');
    }
}
