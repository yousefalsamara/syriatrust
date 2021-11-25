<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table="governorate";
    protected $fillable=['name'];

    public function news(){
        return $this->belongsToMany(News::class,'news_governorate');
    }
    //
}
