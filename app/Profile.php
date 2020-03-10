<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'address'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
