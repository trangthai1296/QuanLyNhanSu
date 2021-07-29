<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dottuyendung;
use App\Models\phongban;
use App\Models\chucvu;
use Illuminate\Support\Facades\Redirect;

class DotTuyenDungController extends Controller
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
            $dottuyendung = dottuyendung::all();
            return view('quanlytuyendung.dottuyendung.index',compact('dottuyendung'));
        }
        else{
            $dottuyendung =  dottuyendung::where('ten','like', "%$search%")
            ->get();
            return view('quanlytuyendung.dottuyendung.index',compact('dottuyendung'));
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
        return view('quanlytuyendung.dottuyendung.create',compact('phongban','chucvu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dottuyendung = new dottuyendung();
        $dottuyendung->ten = $request->ten;
        $dottuyendung->maphongban = $request->maphongban;
        $dottuyendung->machucvu = $request->machucvu;
        $dottuyendung->soluong = $request->soluong;
        $dottuyendung->ngaybatdau = $request->ngaybatdau;
        $dottuyendung->ngayketthuc = $request->ngayketthuc;
        $dottuyendung->save();
        return Redirect::to('/dotTuyenDungIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phongban = phongban::all('id', 'tenphongban');
        $chucvu = chucvu::all('id', 'tenchucvu');
        $dottuyendung = dottuyendung::find($id);
        return view('quanlytuyendung.dottuyendung.edit', compact('dottuyendung','phongban','chucvu'));
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
        $dottuyendung = dottuyendung::find($id);
        $dottuyendung->ten = $request->ten;
        $dottuyendung->maphongban = $request->maphongban;
        $dottuyendung->machucvu = $request->machucvu;
        $dottuyendung->soluong = $request->soluong;
        $dottuyendung->ngaybatdau = $request->ngaybatdau;
        $dottuyendung->ngayketthuc = $request->ngayketthuc;
        $dottuyendung->save();
        return Redirect::to('/dotTuyenDungIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dottuyendung = dottuyendung::find($id);
        $dottuyendung->delete();
        return Redirect::to('/dotTuyenDungIndex');
    }
}
