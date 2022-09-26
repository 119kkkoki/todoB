<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
    public function Task()
    {
        return $this->belongsTo('App\Task');
    }
    

}
