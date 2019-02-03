<?php

namespace App\Services;

use App\Tag;
use App\DiaryEntry;


class DiaryService
{
    private $tag;

    public function __construct(
        DiaryEntry $diaryEntry,
        Tag $tag
    ) {
        $this->diaryEntry = $diaryEntry;
        $this->tag = $tag;
    }

    public function associateTags(string $tags, int $diaryId): void
    {
        $diaryEntry = $this->diaryEntry->find($diaryId);
        $diaryEntry->tags()->delete();
        $tags = explode(",", $tags);
        foreach($tags as $tag)
        {
            $tag = trim($tag);
            $this->tag->firstOrCreate([
                'name' => $tag
            ]);
            $tagId = $this->tag->where('name', $tag)->get()->first()->id;
            $diaryEntry->tags()->attach($tagId);
        }
    }
}
