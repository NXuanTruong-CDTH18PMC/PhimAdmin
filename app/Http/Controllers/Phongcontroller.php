<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhongRequest;
use App\phong;
use DB;

class Phongcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ph = phong::paginate(10);
           $data =[
               'phong'=> $ph
           ];
        return view('admin.phong.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phong.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhongRequest $request)
    {
        $ph = $request ->except('_token');
        $id = phong::insertgetid($ph);
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
        $ph= Phong::where('id',$id)->first();
     
        return view('admin.phong.sua',['phong'=>$ph]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhongRequest $request, $id)
    {
        $news = phong::find($id);
      $news->TenPhong = $request->TenPhong;
      $news->SoLuongGhe = $request->SoLuongGhe;
      $news->Rap = $request->Rap;
      
      $news->TrangThai = $request->TrangThai;
    

      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('Phongcontroller@index');
    }
    public function delete($id){
        $ph = phong::where('id',$id)->first();
  $ph->trangthai = 0;
  $ph->save();
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
