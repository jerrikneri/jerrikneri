<?php
class DiaryEntries extends Eloquent {

  protected $table = 'diaryEntries';

  protected $fillable = array('title', 'date', 'tag', 'content');

  public $timestamps = true;

}