<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = array('title', 'image', 'tag', 'content', 'user_id');

    public $timestamps = true;

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function addNew($data_arr)
    {
        $this->setFieldValues($data_arr);
        $this->save();
        return $this->id;
    }

    public static function getPosts()
    {
        return static::where('id', '>', '0')
            ->orderBy('id', 'desc')->get();
    }

    public function scopeEntries($query)
    {
        return $query->where('id', '>', '0')
            ->orderBy('id', 'desc');
    }
}
