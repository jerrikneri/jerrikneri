<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function diaryEntries()
    {
        return $this->belongsToMany(DiaryEntry::class);
    }

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class);
    }

    public function getAll()
    {
        return static::all()
                ->map(function ($tag) {
                    return $tag->name;
                });
    }
}
