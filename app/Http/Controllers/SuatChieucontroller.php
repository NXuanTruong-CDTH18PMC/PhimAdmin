<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuatChieuRequest;
use App\SuatChieu;
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
        $sc = SuatChieu::paginate(10);
        $data =[
            'sc'=> $sc
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
       $id = SuatChieu::insertgetid($sc);
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
        $sc = DB::table('suatchieu')->where('MaSC',$id)->first();
     
        return view('admin.suatchieu.sua',compact('sc'));
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
        $sc = DB::table('suatchieu')->where('MaSC',$id)->update([
            'MaSC'=> $request->MaSC,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $sc = DB::table('suatchieu')->where('MaSC',$id);
        if($sc) $sc ->delete();
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
