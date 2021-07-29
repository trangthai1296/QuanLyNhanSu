<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tangca;
use Illuminate\Support\Facades\Redirect;

class TangCaController extends Controller
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
            $tangca = tangca::all();
            return view('quanlyluong.tangca.index',compact('tangca'));
        }
        else{
            $tangca =  tangca::where('ngay','like', "%$search%")
            ->get();
            return view('quanlyluong.tangca.index',compact('tangca'));

        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlyluong.tangca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tangca = new tangca();
        $tangca->ngay = $request->ngay;
        $tangca->manhanvien = $request->manhanvien;
        $tangca->sogio = $request->sogio;
        $tangca->save();
        return Redirect::to('/tangCaIndex');
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
        $tangca = tangca::find($id);
        return view('quanlyluong.tangca.edit', compact('tangca'));
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
        $tangca = tangca::find($id);
        $tangca->ngay = $request->ngay;
        $tangca->manhanvien = $request->manhanvien;
        $tangca->sogio = $request->sogio;
        $tangca->save();
        return Redirect::to('/tangCaIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tangca = tangca::find($id);
        $tangca->delete();
        return Redirect::to('/tangCaIndex');
    }
}
