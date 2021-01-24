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

    public function search(Request $request)
    {
        $tukhoa = $request->get('tukhoa');
//        $story = Story::where('name', 'like', "%$tukhoa%")
//            ->take(30)->paginate(5)->appends(['tukhoa' => $tukhoa]);
        $story = Story::whereHas('author', function($query) use($tukhoa) {
            $query->where('name', 'like', '%'.$tukhoa.'%');
        })->orWhere('name','LIKE','%'.$tukhoa.'%')->take(30)->paginate(5)->appends(['tukhoa' => $tukhoa]);

        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(5);
        $category = Category::all();
        $status = Status::all();
        return view('page.timkiem', compact('tukhoa','story','chapter','category','status'));
    }

    public function index()
    {
        $category = Category::all();
//        $story = Story::get();
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(5);

        $status = Status::get();

        return view('TrangChu', compact('category', 'chapter', 'status'));
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

        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(5);
        return view('page.theloai', compact('category', 'category_id', 'story', 'chapter', 'status'));
    }

    public function getTacGia($id)
    {
        $category = Category::all();
        $author = Author::where('id', $id)->first();
        $story = Story::where('author_id', $id)->paginate(10);
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(5);

        $status = Status::get();
        return view('page.tacgia', compact('category', 'author', 'story', 'chapter', 'status'));
    }

    public function getChiTiet($id)
    {
        $category = Category::all();
        $status = Status::get();
        $chapter = Chapter::where('id', $id)->first();
        $totalChapter = Chapter::all();
        return view('page.chitiet', compact('category', 'status', 'chapter', 'totalChapter'));

    }

    public function getDanhMuc($id)
    {
        $category = Category::all();
        $status = Status::get();
        $detail = Status::where('id', $id)->first();
        $story = Story::where('status_id', $id)->get();
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(5);

//        $chapter = Chapter:: groupBy('story_id')->orderBy('created_at', 'desc')->latest()->paginate(5);

        return view('page.danhmuc', compact('category', 'status', 'detail', 'story', 'chapter'));
    }

    public function getTheoDoi()
    {
        return view('page.theodoi');
    }
}
