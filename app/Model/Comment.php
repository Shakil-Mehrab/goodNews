<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Reply;
use App\Model\News;
use App\User;

class Comment extends Model
{
    // use CommentableTrait;
    public function limit_replies(){
        return $this->hasMany(Reply::class)->limit(4)->latest();
    }
    public function replies(){
        return $this->hasMany(Reply::class)->latest();
    }
    public function news(){
        return $this->belongsTo(News::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
