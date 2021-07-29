<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khenthuong;
use Illuminate\Support\Facades\Redirect;

class KhenThuongController extends Controller
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
            $khenthuong = khenthuong::all();
            return view('thongkebaocao.khenthuong.index',compact('khenthuong'));
        }
        else{
            $khenthuong =  khenthuong::where('manhanvien','like', "%$search%")
            ->orwhere('lydo','like', "%$search%")
            ->orwhere('hinhthuc','like', "%$search%")
            ->orwhere('ngaykhenthuong','like', "%$search%")
            ->get();
            return view('thongkebaocao.khenthuong.index',compact('khenthuong'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thongkebaocao.khenthuong.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khenthuong = new khenthuong();
        $khenthuong->manhanvien = $request->manhanvien;
        $khenthuong->lydo = $request->lydo;
        $khenthuong->hinhthuc = $request->hinhthuc;
        $khenthuong->ngaykhenthuong = $request->ngaykhenthuong;
        $khenthuong->save();
        return Redirect::to('/khenThuongIndex');
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
        $khenthuong = khenthuong::find($id);
        return view('thongkebaocao.khenthuong.edit', compact('khenthuong'));
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
        $khenthuong = khenthuong::find($id);
        $khenthuong->manhanvien = $request->manhanvien;
        $khenthuong->lydo = $request->lydo;
        $khenthuong->hinhthuc = $request->hinhthuc;
        $khenthuong->ngaykhenthuong = $request->ngaykhenthuong;
        $khenthuong->save();
        return Redirect::to('/khenThuongIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khenthuong = khenthuong::find($id);
        $khenthuong->delete();
        return Redirect::to('/khenThuongIndex');
    }
}
