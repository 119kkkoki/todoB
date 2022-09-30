<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable =[
        'user_id', 'contents',
    ];

    public function Bookmarks()
    {
        return $this->hasMany('App\Bookmark');
    }
    
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function BookmarkBy($user)
    {
        return Bookmark::where('user_id',$user->id)->where('task_id', $this->id);
    }
}





