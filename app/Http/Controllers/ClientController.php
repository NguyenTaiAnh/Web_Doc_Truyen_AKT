<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ClientController extends Controller
{
    //
    public function getDangNhap(){
        return view('page.dangnhap');
    }
//    public function postDangNhap(Request $request){
//        $this->validate(
//            $request,[
//                'email'=>'required',
//                'password'=>'required|min:3|max:32'
//            ],
//            [
//                'email.required'=>'ban chua nhap email',
//                'password.required'=>'ban chua dang nhap password'
//            ]
//        );
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
//        {
//            return redirect('home');
//        }
//        else{
////            return redirect('page.dangnhap')->with('thongbao','Dang nhap khong thanh cong');
//            return redirect()->back()->with('thongbao','thatbai');
//        }
//    }
    public function getDangKy(){
        return view('page.dangky');

    }

    public function getTruyen(){
        return view('page.truyen');
    }
    public function getTheLoai(){
        return view('page.theloai');
    }
    public function getTaGia(){
        return view('page.tacgia');
    }
    public function getChiTiet(){
        return view('page.chitiet');
    }
    public function getDanhMuc(){
        return view('page.danhmuc');
    }
    public function getTaiKhoan(){
        return view('page.taikhoan');
    }
}
