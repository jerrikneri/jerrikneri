<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model
{
    public $timestamps = true;
    protected $table = 'diary_entries';
    protected $fillable = ['title', 'tag', 'content'];

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function comments()
    {
        return $this->hasMany(DiaryComment::class);
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

    public static function getEntries()
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
