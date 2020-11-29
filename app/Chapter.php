<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table='chapter';
    protected $fillable=['id','chap','name','story_id','content'];

    public function story(){
        return $this->belongsTo(Story::class);
    }
}
