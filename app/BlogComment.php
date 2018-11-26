<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = array('body', 'blog_post_id');

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
