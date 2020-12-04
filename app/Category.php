<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'description'
    ];
    public function story(){
        return $this->belongsToMany(Story::class, 'story_category', 'category_id', 'story_id');//not available story_id
    }
}
