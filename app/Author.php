<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table='author';
    protected $fillable=['id','name'];
    public function story(){
        return $this->hasMany(Story::class);
    }
}
