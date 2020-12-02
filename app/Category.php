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
        'name'
    ];
    public function story(){
        return $this->belongsToMany(Story::class,'story_category');
    }
}
