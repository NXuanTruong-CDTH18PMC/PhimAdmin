<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NhanVienRequest;
use App\nhanvien;
use DB;
class NhanViencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nv = nhanvien::paginate(10);
           $data =[
               'nhanvien'=> $nv
           ];
        return view('admin.nhanvien.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhanvien.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhanVienRequest $request)
    {
        $nv = $request ->except('_token');
       $id = NhanVien::insertgetid($nv);
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
        $nv = DB::table('nhanvien')->where('MaNV',$id)->first();
     
        return view('admin.nhanvien.sua',compact('nv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NhanVienRequest $request, $id)
    {
        $nv= DB::table('nhanvien')->where('MaNV',$id)->update([
            'MaNV'=> $request->MaNV,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $nv = DB::table('nhanvien')->where('MaNV',$id);
        if($nv) $nv ->delete();
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
