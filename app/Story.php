<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $table='story';
    protected $fillable=['id','name','image','category_id','author_id','status_id','description'];
    public function category()
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

    public function setCategoryAttribute($value)
    {
        $this->attributes['category_id'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category_id'] = json_decode($value);
    }

    public function categoryName( $value ) {
        return Category::whereIn('id',json_decode( $value ));
    }
}
