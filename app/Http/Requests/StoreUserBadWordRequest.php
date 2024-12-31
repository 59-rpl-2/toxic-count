<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserBadWordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'bad_word_id' => 'required|exists:bad_words,id',
            'count' => 'required|integer|min:1',
        ];
    }
}
