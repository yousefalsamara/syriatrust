<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table="contact";
    protected $fillable=['name','governorates','subject','mobile','e-mail','message'];
}
