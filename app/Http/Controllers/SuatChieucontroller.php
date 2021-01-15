<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuatChieuRequest;
use App\suatchieu;
use DB;
class SuatChieucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sc = suatchieu::paginate(10);
           $data =[
               'suat'=> $sc
           ];
        
        return view('admin.suatchieu.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suatchieu.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuatChieuRequest $request)
    {
        
        $sc = $request ->except('_token');
        $id = suatchieu::insertgetid($sc);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.suatchieu.them');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sc= Suatchieu::where('id',$id)->first();
     
        return view('admin.suatchieu.sua',['suatchieu'=>$sc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuatChieuRequest $request, $id)
    {
        $news = suatchieu::find($id);
      $news->ThoiGianChieu = $request->ThoiGianChieu;

      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('SuatChieucontroller@index');
    }
    public function delete($id){
        $sc = suatchieu::where('id',$id)->first();
        $sc->trangthai = 0;
        $sc->save();
        return redirect()->back()->with('thongbao', 'Thành Công');
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
