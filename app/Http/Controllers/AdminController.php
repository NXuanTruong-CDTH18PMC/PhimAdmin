<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;
use Hash;




class AdminController extends Controller
{
    public function dangky(){
        return view('admin.register.register');
      }
      public function postdangky(Request $req){
        $this->validate($req,[
          'hoten'=> 'required',
          'email'=>'required|email|unique:nhanviens,email',
              //'diachi'=>'required',
          'password'=>'required|min:6|max:20',
          're_password'=>'same:password',
          'sdt'=>'required',
              //'chucvu'=>'required',
    
        ],[
          'email.required'=>'Vui lòng nhập lại email',
          'email.email'=>'Vui lòng nhập lại email',
          'email.unique'=>'Email đã tồn tại',
          'password.required'=>'Vui lòng nhập lại mật khẩu',
          're_password.same'=>'Mật khẩu không giống nhau',
          'hoten.required'=>'Vui lòng nhập lại họ tên',
              //'diachi.required'=>'Vui lòng nhập lại địa chỉ',
          'std.required'=>'Vui lòng nhập lại số diện thoại',
              //'chucvu.required'=>'Vui lòng nhập lại chức vụ',
        ]
      );
        $nv = new nhanvien();
        $nv->hoten = $req->hoten;
        $nv->email = $req->email;
        $nv->password = Hash::make($req->password);
        $nv->sdt = $req->sdt;
          //$nv->diachi = $req->diachi;
          //$nv->chucvu = $req->chucvu;
        $nv->save();
        return redirect()->back()->with('thanhcong', 'Tao tài khoản thanh công');
      }
    
      //dang nhap
      public function dangnhap(){
       return view('login.login');
     }
     public function postdangnhap(Request $req ){
       $this->validate($req,[
        'email'=>'required|email',
        'password'=>'required|min:6|max:20'
      ],
      [
       'email.required'=>'Vui lòng nhập email',
       'email.email'=>'Email không đúng địng dạng',
       'password.required'=>'Vui lòng nhập lại mật khẩu',
       'password.max'=>'Mật khẩu it nhất 6 ký tự',
       'password.min'=>'Mật khẩu không quá 20 ký tự'
     ]
    );
       $a = array('email'=>$req->email,'password'=>$req->password);
       
       if (Auth::guard('nhanvien')->attempt($a)){
        return redirect()->route('admin');          
      }
      else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);  
      }
    }
}
