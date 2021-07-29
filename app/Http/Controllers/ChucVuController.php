<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chucvu;
use Illuminate\Support\Facades\Redirect;

class ChucVuController extends Controller
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
            $chucvu = chucvu::all();
            return view('quanlynhanvien.chucvu.index',compact('chucvu'));
        }
        else{
            $chucvu =  chucvu::where('tenchucvu','like', "%$search%")
            ->get();
            return view('quanlynhanvien.chucvu.index',compact('chucvu'));
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlynhanvien.chucvu.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chucvu = new chucvu();
        $chucvu->tenchucvu = $request->tenchucvu;
        $chucvu->save();
        return Redirect::to('/chucVuIndex');
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
        $chucvu = chucvu::find($id);
        return view('quanlynhanvien.chucvu.edit', compact('chucvu'));
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
        $chucvu = chucvu::find($id);
        $chucvu->tenchucvu = $request->tenchucvu;
        $chucvu->save();
        return Redirect::to('/chucVuIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chucvu = chucvu::find($id);
        $chucvu->delete();
        return Redirect::to('/chucVuIndex');
    }
}
