<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = array('title', 'image', 'tag', 'content', 'user_id');

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getAll()
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
