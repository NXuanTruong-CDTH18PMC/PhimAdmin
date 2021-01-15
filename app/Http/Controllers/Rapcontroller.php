<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RapRequest;
use App\Rap;
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
        $rap= Rap::where('id',$id)->first();
     
        return view('admin.rap.sua',['rap'=>$rap]);
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
        $news = Rap::find($id);
      $news->TenRap = $request->TenRap;
     

      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('Rapcontroller@index');
    }
    public function delete($id){
        $rp = rap::where('id',$id)->first();
  $rp->trangthai = 0;
  $rp->save();
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
