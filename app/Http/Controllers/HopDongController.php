<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hopdong;
use Illuminate\Support\Facades\Redirect;

class HopDongController extends Controller
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
            $hopdong = hopdong::all();
            return view('quanlynhanvien.hopdong.index',compact('hopdong'));
        }
        else{
            $hopdong =  hopdong::where('manhanvien','like', "%$search%")
            ->orwhere('luongtangca','like', "%$search%")
            ->orwhere('bhxh','like', "%$search%")
            ->orwhere('ngaybatdau','like', "%$search%")
            ->orwhere('ngayketthuc','like', "%$search%")
            ->get();
            return view('quanlynhanvien.hopdong.index',compact('hopdong'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlynhanvien.hopdong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hopdong = new hopdong();
        $hopdong->manhanvien = $request->manhanvien;
        $hopdong->luongcoban = $request->luongcoban;
        $hopdong->luongtangca = $request->luongtangca;
        $hopdong->phucap = $request->phucap;
        $hopdong->bhxh = $request->bhxh;
        $hopdong->ngaybatdau = $request->ngaybatdau;
        $hopdong->ngayketthuc = $request->ngayketthuc;
        $hopdong->save();
        return Redirect::to('/hopDongIndex');
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
        $hopdong = hopdong::find($id);
        return view('quanlynhanvien.hopdong.edit', compact('hopdong'));
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
        $hopdong = hopdong::find($id);
        $hopdong->manhanvien = $request->manhanvien;
        $hopdong->luongcoban = $request->luongcoban;
        $hopdong->luongtangca = $request->luongtangca;
        $hopdong->phucap = $request->phucap;
        $hopdong->bhxh = $request->bhxh;
        $hopdong->ngaybatdau = $request->ngaybatdau;
        $hopdong->ngayketthuc = $request->ngayketthuc;
        $hopdong->save();
        return Redirect::to('/hopDongIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hopdong = hopdong::find($id);
        $hopdong->delete();
        return Redirect::to('/hopDongIndex');
    }
}
