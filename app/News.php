<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    protected $table="news";
    protected $fillable=['title','describtion','image'];

    public function governorates(){
        return $this->belongsToMany(Governorate::class,"news_governorate");
    }

}
