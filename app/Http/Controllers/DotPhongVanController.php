<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dotphongvan;
use Illuminate\Support\Facades\Redirect;

class DotPhongVanController extends Controller
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
            $dotphongvan = dotphongvan::all();
            return view('quanlytuyendung.dotphongvan.index',compact('dotphongvan'));
        }
        else{
            $dotphongvan =  dotphongvan::where('ten','like', "%$search%")
            ->get();
            return view('quanlytuyendung.dotphongvan.index',compact('dotphongvan'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlytuyendung.dotphongvan.index',compact('dotphongvan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dotphongvan = new dotphongvan();
        $dotphongvan->madottuyendung = $request->madottuyendung;
        $dotphongvan->ten = $request->ten;
        $dotphongvan->soluong = $request->soluong;
        $dotphongvan->diadiem = $request->diadiem;
        $dotphongvan->ngaybatdau = $request->ngaybatdau;
        $dotphongvan->ngayketthuc = $request->ngayketthuc;
        $dotphongvan->save();
        return Redirect::to('/dotPhongVanIndex');
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
        $dotphongvan = dotphongvan::find($id);
        return view('quanlytuyendung.dotphongvan.edit', compact('dotphongvan'));
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
        $dotphongvan = dotphongvan::find($id);
        $dotphongvan->madottuyendung = $request->madottuyendung;
        $dotphongvan->ten = $request->ten;
        $dotphongvan->soluong = $request->soluong;
        $dotphongvan->diadiem = $request->diadiem;
        $dotphongvan->ngaybatdau = $request->ngaybatdau;
        $dotphongvan->ngayketthuc = $request->ngayketthuc;
        $dotphongvan->save();
        return Redirect::to('/dotPhongVanIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dotphongvan = dotphongvan::find($id);
        $dotphongvan->delete();
        return Redirect::to('/dotPhongVanIndex');
    }
}
