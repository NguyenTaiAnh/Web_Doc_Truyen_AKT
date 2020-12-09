<?php

use App\Category;

 function getCategory($value)
{
    return Category::whereIn('id', json_decode($value, true))->get();
}

