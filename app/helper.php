<?php

use App\Category;
use App\Chapter;

function getCategory($value)
{
    return Category::whereIn('id', json_decode($value, true))->get();
}

 function getNew($id){
    return Chapter::where('story_id', $id)->orderBy('created_at', 'desc')->first();
}
