<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {

        return substr($this->content,0,120);
    }
    public function getPublishedAtAttribute()
    {
        // use if you want format('y/w/d')
        return $this->created_at->diffForHumans();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
