<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $fillable =['title', 'body'];

    public function user(){
    	return $this->belongTo(User::class);
    }
}
