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
        $nv = NhanVien::paginate(10);
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
        $nhanvien= NhanVien::where('id',$id)->first();
     
        return view('admin.nhanvien.sua',['nhanvien'=>$nhanvien]);
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
        $news = NhanVien::find($id);
      $news->TenNV = $request->TenNV;
      $news->TrangThai = $request->TrangThai;
      $news->SDT = $request->SDT;
      $news->DiaChi = $request->DiaChi;
      $news->Rap = $request->Rap;
      $news->Email = $request->Email;
      $news->Hinh = $request->Hinh;
      $news->TenTK = $request->TenTK;
      $news->MK = $request->MK;

     

      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('NhanViencontroller@index');
    }
    public function delete($id){
        $nv = NhanVien::where('id',$id)->first();
  $nv->trangthai = 0;
  $nv->save();
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
