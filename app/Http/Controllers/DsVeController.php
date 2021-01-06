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
        return view('admin.dsve.them');
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
    public function edit(igrate $igrate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\igrate  $igrate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igrate $igrate)
    {
        //
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
