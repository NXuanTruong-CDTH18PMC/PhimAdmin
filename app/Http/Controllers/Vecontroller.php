<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ve;
use App\Http\Requests\VeRequest;
use App\Http\Requests\VeRequesteidt;

class Vecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ve = ve::paginate(10);
           $data =[
               've'=> $ve
           ];
        return view('admin.ve.danhsach', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ve.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeRequest $request)
    {
        $ve = $request ->except('_token');
       $id = ve::insertgetid($ve);
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
        $ve = DB::table('ve')->where('MaVe',$id)->first();
     
        return view('admin.ve.sua',compact('ve'));
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
        $ve = DB::table('ve')->where('MaVe',$id)->update([
            'MaVe'=> $request->MaVe,
            
            ]);
        
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa nhà cung cấp thành công!!!']);
    }


    public function delete($id){
        $ve = DB::table('ve')->where('MaVe',$id);
        if($ve) $ve ->delete();
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
