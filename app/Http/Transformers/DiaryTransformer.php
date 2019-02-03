<?php

namespace App\Http\Transformers;

use Illuminate\Support\Facades\Log;


class DiaryTransformer
{
    public function storeTransformer(array $storeData): array
    {
        return [
            'title' => $storeData['title'],
            'content' => $storeData['content'],
            'user_id' => auth()->id()
        ];
    }

    public function updateTransformer(array $updateData): array
    {
        return [
            'title' => $updateData['title'],
            'content' => $updateData['content']
        ];
    }
}
