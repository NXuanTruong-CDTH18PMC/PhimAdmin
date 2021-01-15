<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ThanhVien;

use App\Http\Requests\ThanhVienRequest;
use App\Http\Requests\ThanhVienRequesteidt;

class ThanhViencontroller extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thanhvien = thanhvien::where('Trangthai',1)->paginate(10);
           $data =[
               'thanhvien'=> $thanhvien
           ];
        return view('admin.thanhvien.danhsach', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thanhvien = ThanhVien::all();
        return view('admin.thanhvien.them',['ThanhVien'=>$thanhvien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThanhVienRequest $request)
    {
        $thanhvien = $request ->except('_token');
       $id = thanhvien::insertgetid($thanhvien);
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
        $ThanhVien= ThanhVien::where('id',$id)->first();
     
        return view('admin.thanhvien.sua',['ThanhVien'=>$ThanhVien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThanhVienRequesteidt $request, $id)
    {
        $news = ThanhVien::find($id);
        $news->TenTV = $request->TenTV;
        $news->SDT = $request->SDT;
        $news->DiaChi = $request->DiaChi;
        $news->Email = $request->Email;
        $news->Hinh = $request->Hinh;
        $news->TenTK = $request->TenTK;
        $news->MK = $request->MK;
        $news->TrangThai = $request->TrangThai;
        $news->save();
        
        return redirect()->action('ThanhVienController@index');
    }


    public function delete($id){
        $thanhvien = ThanhVien::where('id',$id)->first();
        $thanhvien->trangthai = 0;
        $thanhvien->save();
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
