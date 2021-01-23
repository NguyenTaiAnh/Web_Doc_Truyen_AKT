<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Chapter;
use App\Status;
use App\Story;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function index()
    {
        $story = Story::all();
        $category = Category::all();
        $chapter = Chapter::latest()->paginate(10);
        $status = Status::get();

        return view('TrangChu', compact('category', 'chapter', 'story', 'status'));
    }

    public function getTruyen($id)
    {
        $status = Status::get();
        $category = Category::all();
        $chapter = Chapter::where('story_id',$id)->first();
        return view('page.truyen',compact('status','category','chapter'));
    }

    public function getTheLoai($id)
    {
        $category = Category::all();
        $category_id = Category::where('id', $id)->first();
        $story = Story::where('category_id', 'like', '%' . $id . '%')->paginate(10);
        $status = Status::get();

        $chapter = Chapter::all();
        return view('page.theloai', compact('category', 'category_id', 'story', 'chapter', 'status'));
    }

    public function getTacGia($id)
    {
        $category = Category::all();
        $author = Author::where('id', $id)->first();
        $story = Story::where('author_id', $id)->paginate(10);
        $chapter = Chapter::all();
        $status = Status::get();
        return view('page.tacgia', compact('category', 'author', 'story', 'chapter', 'status'));
    }

    public function getChiTiet()
    {
        return view('page.chitiet');
    }

    public function getDanhMuc($id)
    {
        $category = Category::all();
        $status = Status::get();
        $detail = Status::where('id',$id)->first();
        $story = Story::where('status_id',$id)->get();
        $chapter = Chapter::all();

        return view('page.danhmuc', compact('category','status','detail','story','chapter'));
    }

    public function getTaiKhoan()
    {
        return view('page.taikhoan');
    }
}
