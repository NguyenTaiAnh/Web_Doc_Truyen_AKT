<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Status;
use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $story = Story::all();
        return view('story.index',compact('story'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        $author = Author::all();
        $status = Status::all();
        return view('story.create',compact('category','author','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $story = new Story();
        $story->name = $request['name'];

        //handle Image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            // Thư mục upload
            $path =public_path() . '/assets/images/';
            // Bắt đầu chuyển file vào thư mục
            $image->move($path,$name);
            $story->image =$name;
        }

        //handle category
        $categories = $request->input('category');

        $story->description = $request['description'];
        $story->author_id = $request['author_id'];
        $story->status_id = $request['status_id'];

        $story->save();
        $story->Category()->attach($categories);

        return redirect()->route('story.index');

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
        //
        $story = Story::find($id);
        $category = Category::all();
        $author = Author::all();
        $status = Status::all();
        return view('story.update',compact('story','category','author','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        //
        $story->update([
           'name' => $request['name'],
           'author_id' => $request['author_id']
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            // Thư mục upload
            $path =public_path() . '/assets/images/';
            // Bắt đầu chuyển file vào thư mục
            $image->move($path,$name);
            $story->image =$name;
        }
        $categories = $request->input('category');
        $story->Category()->attach($categories);
        $story->save();
        return redirect()->route('story.index');
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
        $story = Story::find($id);
        if ($story != null) {
            $story->delete();
            return redirect()->route('story.index')->with(['message'=> 'Successfully deleted!!']);
        }
        return redirect()->route('story.index')->with(['message'=> 'Wrong ID!!']);
    }
}
