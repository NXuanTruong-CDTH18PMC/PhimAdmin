<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ghe;
use App\Http\Requests\GheRequest;

class Ghecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ghe = ghe::paginate(10);
        $data =[
            'ghe'=> $ghe
        ];
     return view('admin.ghe.danhsach', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ghe = Ghe::all();
        return view('admin.ghe.them',['Ghe'=>$ghe]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GheRequest $request)
    {
        $ghe = $request ->except('_token');
       $id = ghe::insertgetid($ghe);
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
        $ghe= Ghe::where('id',$id)->first();
     
        return view('admin.ghe.sua',['Ghe'=>$ghe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = Ghe::find($id);
      $news->LoaiGhe = $request->LoaiGhe;
      $news->SoHang = $request->SoHang;
      $news->SoCot= $request->SoCot;
      $news->save();
        
        return redirect()->action('GheController@index');
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
