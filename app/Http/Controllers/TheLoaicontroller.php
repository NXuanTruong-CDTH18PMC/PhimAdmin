<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TheLoaiRequest;
use App\theloai;
use DB;

class TheLoaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tl = TheLoai::paginate(10);
           $data =[
               'theloai'=> $tl
           ];
        return view('admin.theloai.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.theloai.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tl = $request ->except('_token');
        $tl = TheLoai::insertgetid($tl);
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
        $tl= TheLoai::where('id',$id)->first();
     
        return view('admin.theloai.sua',['theloai'=>$tl]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TheLoaiRequest $request, $id)
    {
        $news = TheLoai::find($id);
      $news->TenTL = $request->TenTL;
      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('TheLoaicontroller@index');
    }
    public function delete($id){
        $tl = TheLoai::where('id',$id)->first();
        $tl->save();
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
