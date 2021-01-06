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
        return view('admin.phong.them');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ph = DB::table('phong')->where('MaPhong',$id)->first();
     
        return view('admin.phong.sua',compact('ph'));
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
        $ph = DB::table('phong')->where('MaPhong',$id)->update([
            'MaPhong'=> $request->MaPhong,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $ph = DB::table('phong')->where('MaPhong',$id);
        if($ph) $ph ->delete();
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
