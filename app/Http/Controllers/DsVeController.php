<?php

namespace App\Http\Controllers;

use DB;
use App\DsVe;
use App\Http\Requests\DSVeRequest;

class DsVeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsve =dsve::paginate(10);
           $data =[
               'dsve'=> $dsve
           ];
        return view('admin.dsve.danhsach', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsve = DsVe::all();
        return view('admin.dsve.them',['DsVe'=>$dsve]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DSVeRequest $request)
    {
        $dsve = $request ->except('_token');
        $id = dsve::insertgetid($dsve);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function show(igrate $igrate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsve= DsVe::where('id',$id)->first();
     
        return view('admin.dsve.sua',['DsVe'=>$dsve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function update(DSVeRequest $request, $id)
    {
        $news = DsVe::find($id);
        $news->SoLuong = $request->SoLuong;
        $news->Ve = $request->Ve;
        $news->TV = $request->TV;
        $news->NgayTao = $request->NgayTao;
        $news->save();
        
        return redirect()->action('DsVeController@index');
    }

    public function delete($id){
        $dsve = DB::table('dsve')->where('id',$id);
        if($dsve) $dsve ->delete();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function destroy(igrate $igrate)
    {
        //
    }
}
