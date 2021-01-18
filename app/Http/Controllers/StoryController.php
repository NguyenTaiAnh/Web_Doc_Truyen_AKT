<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Status;
use App\Story;
use Illuminate\Http\Request;
//use DataTab
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $story = Story::get();
        return view('story.index', compact('story'));
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

        return view('story.create', compact('category', 'author', 'status'));
    }

    public function store(Request $request)
    {

        $story = new Story();
        $story->name = $request['name'];

        //handle Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            // Thư mục upload
            $path = public_path() . '/assets/images/';
            // Bắt đầu chuyển file vào thư mục
            $image->move($path, $name);
            $story->image = $name;
        }

        //handle category
        //         $categories = $request->input('category');
        $story->category_id = json_encode($request->category, true);
        $story->description = $request['description'];
        $story->author_id = $request['author_id'];
        $story->status_id = $request['status_id'];
        $story->save();
        //         $story->Category()->attach($categories);

        //        $saveTmp = Story::create([
        //            'name' => $request->name,
        //            'image' => $request->image,
        //            'category_id' => json_encode($request->category, true),
        //            'author_id' => $request->author_id,
        //            'status_id' => $request->status_id,
        //            'description' => $request->description,
        //            'image' => ''
        //        ]);
        return redirect()->route('story.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $story = Story::find($id);
        $category = Story::all();
        $status = Story::all();
        $author = Author::all();
        return view('story.detail', compact('story', 'category', 'status', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = Category::get();
        // $oldCategory = StoryCategory::where('story_id', $id)->get();
        $author = Author::get();
        $status = Status::get();
        $story = Story::find($id);
        $oldCategory = json_decode($story['category_id'], true);

        return view('story.update', compact('story', 'categories', 'author', 'status', 'oldCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            // Thư mục upload
            $path = public_path() . '/assets/images/';

            // Bắt đầu chuyển file vào thư mục
            $image->move($path, $name);
            $story->image = $name;
            $story->save();
        }
        $story->update([
            'name' => $request->name,
            'category_id' => json_encode($request->category_id, true),
            'author_id' => $request->author_id,
            'status_id' => $request->status_id,
            'description' => $request->description,
        ]);


        return redirect()->route('story.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $story = Story::find($id);
        if ($story != null) {
            $story->delete();
            return redirect()->route('story.index')->with(['message' => 'Successfully deleted!!']);
        }
        return redirect()->route('story.index')->with(['message' => 'Wrong ID!!']);
    }
}
