<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user()->can('update', $this->route('blog'));
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ];
    }
}
