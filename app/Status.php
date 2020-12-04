<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table='status';
    protected $fillable=['id','name'];
    public function story(){
        $this->hasMany(Story::class);
    }
}
