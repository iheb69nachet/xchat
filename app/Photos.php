<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $fillable = ['user_imgs'];
    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
