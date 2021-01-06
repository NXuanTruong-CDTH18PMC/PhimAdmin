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
        $thanhvien = thanhvien::paginate(10);
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
        return view('admin.thanhvien.them');
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
        $thanhvien = DB::table('thanhvien')->where('MaTV',$id)->first();
     
        return view('admin.thanhvien.sua',compact('thanhvien'));
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
        $thanhvien = DB::table('thanhvien')->where('MaTV',$id)->update([
            'MaTV'=> $request->MaTV,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }


    public function delete($id){
        $thanhvien = DB::table('thanhvien')->where('MaTV',$id);
        if($thanhvien) $thanhvien ->delete();
        return redirect()->back();
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
