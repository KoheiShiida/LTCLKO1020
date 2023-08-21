<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'string|max:100',
            'post.body' => 'string|max:4000',
        ];
    }
}
