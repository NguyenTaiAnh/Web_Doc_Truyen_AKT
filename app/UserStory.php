<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStory extends Model
{
    //
    protected $table="user_story";
    protected $fillable=[
        'id',
        'user_id',
        'story_id',
    ];
    public function Story(){
        return $this->belongsTo(Story::class);
    }
}
