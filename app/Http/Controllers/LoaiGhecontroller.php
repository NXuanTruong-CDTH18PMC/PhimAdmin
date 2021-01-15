<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LoaiGhe;
use App\Http\Requests\LoaiGheRequest;

class LoaiGhecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaighe = loaighe::paginate(10);
        $data =[
            'loaighe'=> $loaighe
        ];
     return view('admin.loaighe.danhsach', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaighe = LoaiGhe::all();
        return view('admin.loaighe.them',['LoaiGhe'=>$loaighe]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiGheRequest $request)
    {
        $loaighe = $request ->except('_token');
       $id = loaighe::insertgetid($loaighe);
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
        $loaighe= LoaiGhe::where('id',$id)->first();
     
        return view('admin.loaighe.sua',['LoaiGhe'=>$loaighe]);
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
        $news = LoaiGhe::find($id);
      $news->TenLoai = $request->TenLoai;
      $news->save();
        
        return redirect()->action('LoaiGheController@index');
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
