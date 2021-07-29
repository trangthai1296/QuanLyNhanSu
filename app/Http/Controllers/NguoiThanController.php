<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nguoithan;
use Illuminate\Support\Facades\Redirect;

class NguoiThanController extends Controller
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
            $nguoithan = nguoithan::all();
            return view('quanlynhanvien.nguoithan.index',compact('nguoithan'));
        }
        else{
            $nguoithan =  nguoithan::where('tenthannhan','like', "%$search%")
            ->orwhere('quanhe','like', "%$search%")
            ->orwhere('manhanvien','like', "%$search%")
            ->orwhere('diachi','like', "%$search%")
            ->orwhere('sdt','like', "%$search%")
            ->orwhere('gioitinh','like', "%$search%")
            ->orwhere('nghenghiep','like', "%$search%")
            ->get();
            return view('quanlynhanvien.nguoithan.index',compact('nguoithan'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlynhanvien.nguoithan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoithan = new nguoithan();
        $nguoithan->manhanvien = $request->manhanvien;
        $nguoithan->tenthannhan = $request->tenthannhan;
        $nguoithan->quanhe = $request->quanhe;
        $nguoithan->diachi = $request->diachi;
        $nguoithan->sdt = $request->sdt;
        $nguoithan->gioitinh = $request->gioitinh;
        $nguoithan->nghenghiep = $request->nghenghiep;
        $nguoithan->save();
        return Redirect::to('/nguoiThanIndex');
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
        $nguoithan = nguoithan::find($id);
        return view('quanlynhanvien.nguoithan.edit', compact('nguoithan'));
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
        $nguoithan = nguoithan::find($id);
        $nguoithan->manhanvien = $request->manhanvien;
        $nguoithan->tenthannhan = $request->tenthannhan;
        $nguoithan->quanhe = $request->quanhe;
        $nguoithan->diachi = $request->diachi;
        $nguoithan->sdt = $request->sdt;
        $nguoithan->gioitinh = $request->gioitinh;
        $nguoithan->nghenghiep = $request->nghenghiep;
        $nguoithan->save();
        return Redirect::to('/nguoiThanIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoithan = nguoithan::find($id);
        $nguoithan->delete();
        return Redirect::to('/nguoiThanIndex');
    }
}
