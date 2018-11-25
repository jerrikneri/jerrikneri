<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function diaryEntries()
    {
        return $this->belongsToMany(DiaryEntry::class);
    }
}
