<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestPhim;
use App\Http\Requests\RequesteditPhim;
use App\phim;
use DB;
class PhimController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $demo = phim::paginate(10);
           $data =[
               'demo'=> $demo
           ];
    	
           
        
        return view('admin.phim.danhsach', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phim.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestPhim $request)
    {
      
        $demo = $request ->except('_token');
       $id = Phim::insertgetid($demo);
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
        $demo = DB::table('phim')->where('MaPhim',$id)->first();
     
        return view('admin.phim.sua',compact('demo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequesteditPhim $request, $id)
    {
      
      
        
        $demo = DB::table('phim')->where('MaPhim',$id)->update([
            'MaPhim'=> $request->MaPhim,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $demo = DB::table('phim')->where('MaPhim',$id);
        if($demo) $demo ->delete();
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
