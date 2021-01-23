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
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function index()
    {
        $story = Story::all();
        $category = Category::all();
//        $name = Story::select('name')->get();
        $story = Story::get();
//        $chapter = Chapter::latest()->paginate(5);
        $truyen = Chapter::get();

//        foreach ($truyen as $chap){
////                dd($chap->index);
//            $data = $chap->story_id;
//        }
//        dd($data);

        $chapter = Chapter::
            groupBy('story_id')->orderBy('created_at', 'desc')->latest()->paginate(5);
//        $chapter = DB::select(DB::raw('SELECT id , MAX(chap), name, story_id, content, created_at , updated_at
//FROM chapter
//GROUP BY story_id'));
//        dd($chapter);
//        $chapter = DB::table('chapter')->where('story_id',$data)->orderBy('created_at', 'desc')->groupBy('story_id')->get();
        $status = Status::get();

        return view('TrangChu', compact('category', 'chapter', 'story', 'status'));
    }

    public function getTruyen($id)
    {
        $status = Status::get();
        $category = Category::all();
        $chapter = Chapter::where('story_id', $id)->first();
        $count = Chapter::where('story_id', $id)->count();
        $oldStory = Chapter::where('story_id', $id)->select('id')->orderBy('created_at', 'asc')->first();
        $allChapter = Chapter::where('story_id', $id)->get();
//        dd($allChapter);
        return view('page.truyen', compact('status', 'category', 'chapter', 'count', 'oldStory', 'allChapter'));
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

    public function getChiTiet($id)
    {
        $category = Category::all();

        $status = Status::get();
        $chapter = Chapter::where('id',$id)->first();
        $story = Story::all();
        foreach ($story as $chap){
            $data = $chap->id;
        }
        $totalChapter = Chapter::where('story_id',$data)->get();
//        dd($totalChapter);

        return view('page.chitiet',compact('category','status','chapter','totalChapter'));
    }

    public function getDanhMuc($id)
    {
        $category = Category::all();
        $status = Status::get();
        $detail = Status::where('id', $id)->first();
        $story = Story::where('status_id', $id)->get();
        $chapter = Chapter:: groupBy('story_id')->orderBy('created_at', 'desc')->latest()->paginate(5);

        return view('page.danhmuc', compact('category', 'status', 'detail', 'story', 'chapter'));
    }

    public function getTaiKhoan()
    {
        return view('page.taikhoan');
    }
}
