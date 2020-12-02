<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $table='story';
    protected $fillable=['id','name','image','category_id','author_id'];
    public function Category()
    {
        return $this->belongsToMany(Category::class,'story_category');
    }
    public function Author(){
        return $this->belongsTo(Author::class);
    }
    public function Chapter(){
        return $this->hasMany(Chapter::class);
    }
}
