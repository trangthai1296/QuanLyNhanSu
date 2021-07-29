<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phongban;

;
use Illuminate\Support\Facades\Redirect;

class PhongBanController extends Controller
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
            $phongban = phongban::all();
            return view('quanlynhanvien.phongban.index',compact('phongban'));
        }
        else{
            $phongban =  phongban::where('tenphongban','like', "%$search%")
            ->get();
            return view('quanlynhanvien.phongban.index',compact('phongban'));

        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlynhanvien.phongban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phongban = new phongban();
        $phongban->tenphongban = $request->tenphongban;
        $phongban->matruongphong = $request->matruongphong;
        $phongban->sdt = $request->sdt;
        $phongban->diachi = $request->diachi;
        $phongban->save();
        return Redirect::to('/phongBanIndex');
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
        $phongban = phongban::find($id);
        return view('quanlynhanvien.phongban.edit', compact('phongban'));
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
        $phongban = phongban::find($id);
        $phongban->tenphongban = $request->tenphongban;
        $phongban->matruongphong = $request->matruongphong;
        $phongban->sdt = $request->sdt;
        $phongban->diachi = $request->diachi;
        $phongban->save();
        return Redirect::to('/phongBanIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phongban = phongban::find($id);
        $phongban->delete();
        return Redirect::to('/phongBanIndex');
    }
}
