<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiaryEntry extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'diary_entries';
    protected $fillable = ['title', 'content', 'user_id'];

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

    public function getEntries()
    {
        return $this->with('tags:name')->where('id', '>', '0')
            ->orderBy('id', 'desc')->get();
    }

    public function scopeEntries($query)
    {
        return $query->where('id', '>', '0')
            ->orderBy('id', 'desc');
    }
}
