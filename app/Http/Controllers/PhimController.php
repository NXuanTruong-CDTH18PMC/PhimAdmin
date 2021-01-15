<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestPhim;
use App\Http\Requests\RequesteditPhim;
use App\phim;
use App\TheLoai;

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
        $TL = TheLoai::all();
        
    	
        return view('admin.phim.them',['TL'=>$TL]);
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
        $Phim= Phim::where('id',$id)->first();
     
        return view('admin.phim.sua',['Phim'=>$Phim]);
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
      //$deletedRows = Flight::where('active', 0)->delete();
      
      $news = Phim::find($id);
      $news->TenPhim = $request->TenPhim;
     

      $news->save();
        //mà không pít thêm sao
        
        return redirect()->action('PhimController@index');
    }
    public function delete($id){
        $phim = Phim::where('id',$id)->first();
  $phim->trangthai = 0;
  $phim->save();
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
