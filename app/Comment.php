<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    
    public function Task()
    {
        return $this->belongsTo('App\Task');
    }
    
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
