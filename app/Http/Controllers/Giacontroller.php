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
        $gia = gia::paginate(10);
           $data =[
               'gia'=> $gia
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
        $gia = gia::all();
        return view('admin.gia.them',['gia'=>$gia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiaRequest $request)
    {
        $gia = $request ->except('_token');
       $id = gia::insertgetid($gia);
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
        $gia= gia::where('id',$id)->first();
     
        return view('admin.gia.sua',['Gia'=>$gia]);
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
        $news = gia::find($id);
        $news->Phim = $request->Phim;
        $news->Gia = $request->Gia;
        $news->save();
        
        return redirect()->action('GiaController@index');
    }
    public function delete($id){
        $gia = DB::table('gia')->where('id',$id);
        if($gia) $gi ->delete();
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
