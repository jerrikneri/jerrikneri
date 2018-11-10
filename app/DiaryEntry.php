<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model
{
    protected $table = 'diaryEntries';

    protected $fillable = array('title', 'tag', 'content');

    public $timestamps = true;

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
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
