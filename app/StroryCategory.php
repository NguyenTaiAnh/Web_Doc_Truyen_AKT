<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryCategory extends Model
{
    //
    protected $table = 'story_category';
    protected $fillable=['id','category_id','story_id'];

    public function story()
    {
        return $this->belongsTo(Story::class, 'story_id');
    }
}


