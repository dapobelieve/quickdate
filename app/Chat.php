<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chat extends Model
{
    protected $dates = ['last_reply'];
    
    public function user ()
    {
        return $this->belongsto(User::class);
    }
}
