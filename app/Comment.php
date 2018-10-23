<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('body', 'diary_entry_id');

    public function diaryEntry()
    {
        return $this->belongsTo(DiaryEntry::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
