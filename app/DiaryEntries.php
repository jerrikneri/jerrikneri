<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class DiaryEntries extends Model {

  protected $table = 'diaryEntries';

  protected $fillable = array('title', 'date', 'tag', 'content');

  public $timestamps = true;

  public function addNew($data_arr)
    {
        $this->setFieldValues($data_arr);
        $this->save();
        return $this->id;
    }

}