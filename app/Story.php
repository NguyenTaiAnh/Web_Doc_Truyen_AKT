<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $table='story';
    protected $fillable=['id','name','image','category_id','author_id','status_id','description'];
    public function Category()
    {
        return $this->belongsToMany(Category::class,'story_category','story_id', 'category_id');
    }
    public function Author(){
        return $this->belongsTo(Author::class);
    }
    public function Status(){
        return $this->belongsTo(Status::class);
    }
    public function Chapter(){
        return $this->hasMany(Chapter::class);
    }

//    public function getCategoryStory()
//    {
//        return explode(',', $this->category);
//    }
}
