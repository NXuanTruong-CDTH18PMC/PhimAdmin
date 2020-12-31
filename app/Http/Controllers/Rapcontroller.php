<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RapRequest;
use App\rap;
use DB;

class Rapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rp = rap::paginate(10);
           $data =[
               'rap'=> $rp
           ];
        return view('admin.rap.danhsach',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rap.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RapRequest $request)
    {
        $rp = $request ->except('_token');
        $id = rap::insertgetid($rp);
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
        return view('admin.rap.them');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rp = DB::table('rap')->where('MaRap',$id)->first();
     
        return view('admin.rap.sua',compact('rp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RapRequest $request, $id)
    {
        $rp = DB::table('rap')->where('MaRap',$id)->update([
            'MaRap'=> $request->MaRap,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }
    public function delete($id){
        $rp = DB::table('rap')->where('MaRap',$id);
        if($rp) $rp ->delete();
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
