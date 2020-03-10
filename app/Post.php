<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id','title','body',
    ];
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }   
}
