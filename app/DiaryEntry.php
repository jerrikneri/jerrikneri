<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model
{
    protected $table = 'diaryEntries';

    protected $fillable = array('title', 'date', 'tag', 'content');

    public $timestamps = true;

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
