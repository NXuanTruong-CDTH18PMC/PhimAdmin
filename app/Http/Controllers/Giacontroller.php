<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GiaRequest;
use App\gia;
use DB;
class Giacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gi = gia::paginate(10);
           $data =[
               'gia'=> $gi
           ];
        return view('admin.gia.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gia.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiaRequest $request)
    {
        $gi = $request ->except('_token');
       $id = Gia::insertgetid($gi);
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
        $gi = DB::table('gia')->where('MaGia',$id)->first();
     
        return view('admin.gia.sua',compact('gi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GiaRequest $request, $id)
    {
        $gi= DB::table('gia')->where('MaGia',$id)->update([
            'MaGia'=> $request->MaGia,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $gi = DB::table('gia')->where('MaGia',$id);
        if($gi) $gi ->delete();
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
