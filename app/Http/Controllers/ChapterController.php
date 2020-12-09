<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Story;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chapter = Chapter::all();
        return view('chapter.index',compact('chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $story = Story::all();
        return view('chapter.create',compact('story'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $chap = new Chapter();
        $chap->chap = $request['chap'];
        $chap->name = $request['name'];
        $chap->story_id = $request['story'];
        $chap->content = $request['content'];
        $chap->save();
        return redirect()->route('chapter.index');
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
        $chapter = Chapter::find($id);
        return view('chapter.detail',compact('chapter'));
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
        $chapter = Chapter::find($id);
        $story = Story::all();

        return view('chapter.update',compact('chapter','story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
        $chapter->update([
            'name' => $request['name'],
            'chap' => $request['chap'],
            'story_id' => $request['story_id'],
            'content' => $request['content']
        ]);
        return redirect()->route('chapter.index');
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
        $chap = Chapter::find($id);
        $chap->delete();
        return redirect()->route('chapter.index');
    }
}
