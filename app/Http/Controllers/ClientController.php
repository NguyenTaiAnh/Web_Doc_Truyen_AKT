<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Chapter;
use App\Status;
use App\Story;
use App\User;
use App\UserStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function search(Request $request)
    {
        $tukhoa = $request->get('tukhoa');
        $story = Story::whereHas('author', function($query) use($tukhoa) {
            $query->where('name', 'like', '%'.$tukhoa.'%');
        })->orWhere('name','LIKE','%'.$tukhoa.'%')->take(30)->paginate(5)->appends(['tukhoa' => $tukhoa]);
//        dd($story);
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);
//        dd($chapter);
        $chapter1 = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();
        $category = Category::all();
        $status = Status::all();
        return view('page.timkiem', compact('tukhoa','story','chapter','category','status','chapter1'));
    }

    public function index()
    {
        $category = Category::all();
//        $story = Story::get();
        $chapter1 = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);

        $status = Status::get();
//        dd($chapter);
        return view('TrangChu', compact('category', 'chapter', 'status','chapter1'));
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
        $totalChapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);
        $check = UserStory::where("user_id",auth()->user()->id)->where('story_id', $id)->first();

        return view('page.truyen', compact('check','totalChapter','status', 'category', 'chapter', 'count', 'oldStory', 'allChapter'));
    }

    public function getTheLoai($id)
    {
        $category = Category::all();
        $category_id = Category::where('id', $id)->first();
        $story = Story::where('category_id', 'like', '%' . $id . '%')->paginate(10);
        $status = Status::get();

        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);
        $chapter1 = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();
        return view('page.theloai', compact('category', 'category_id', 'story', 'chapter', 'status','chapter1'));
    }

    public function getTacGia($id)
    {
        $category = Category::all();
        $author = Author::where('id', $id)->first();
        $story = Story::where('author_id', $id)->first();
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);
        $chapter1 = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();

        $status = Status::get();
        return view('page.tacgia', compact('category', 'author', 'story', 'chapter', 'status','chapter1'));
    }
    public function getDanhMuc($id)
    {
        $category = Category::all();
        $status = Status::get();
        $detail = Status::where('id', $id)->first();
        $story = Story::where('status_id', $id)->get();
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->paginate(10);
        $chapter1 = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();


        return view('page.danhmuc', compact('category', 'status', 'detail', 'story', 'chapter','chapter1'));
    }

    public function getChiTiet($name,$chap)
    {
        $category = Category::all();
        $status = Status::get();
        $story = Story::where('name',$name)->first();
        $chapter = Chapter::where('story_id', $story->id)->where('chap',$chap)->first();
//        dd($chapter);
        $totalChapter = Chapter::all();
        $countChapter = Chapter::where('story_id', $story->id)->get();
        return view('page.chitiet', compact('category', 'status', 'chapter', 'totalChapter','countChapter'));

    }


    public function getTheoDoi()
    {
        $category= Category::all();
        $status = Status::all();
        $user_id = auth()->user()->id;
        $userstory = UserStory::where('user_id',$user_id)->paginate(10);
        $chapter = Chapter::orderBy('created_at', 'desc')->groupBy('story_id')->latest()->get();

        return view('page.theodoi',compact('category','status','userstory','chapter','status'));
    }


    public function  postTheoDoi( Request $request){
        $check = UserStory::where("user_id",auth()->user()->id)->where('story_id', $request->story_id)->first();
//        dd($check->story);
        if (!isset($check)){
            $add = new UserStory();
            $add->user_id = auth()->user()->id;
            $add->story_id = $request['story_id'];
            $add->save();
//            dd(9);
        }
        return redirect()->route('truyen', $request->story_id);
    }
}
