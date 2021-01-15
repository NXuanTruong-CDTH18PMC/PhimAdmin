<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;
use Hash;
use App\admin;
use session;
session_start();
use DB;




class AdminController extends Controller
{
    public function dangky(){
        return view('admin.register.register');
      }
      public function postdangky(Request $req){
       
        $nv = new admin();
        $nv->name = $req->name;
        $nv->email = $req->email;
        $nv->password = Hash::make($req->password);
       
          //$nv->diachi = $req->diachi;
          //$nv->chucvu = $req->chucvu;
        $nv->save();
        return redirect()->back()->with('thanhcong', 'Tao tài khoản thanh công');
      }
    
      //dang nhap
      public function dangnhap(){
       
       return view('login.login');
     }
     public function postdangnhap(Request $request ){
      
    // $data = $request->all();
    if(['email'=>$request->email, 'password'=>$request->password ]){
      return redirect()->route('admin.index'); 
    }else {
      return redirect()->route('dangnhap')->with('message','Tài khoản hoặc mật khẩu authentication không đúng');
    }
          
     
    }
}

