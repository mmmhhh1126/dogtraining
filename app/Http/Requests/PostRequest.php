<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'title'       => ['required', 'max:80'],                             // タイトル
            'description' => ['required'],                                       // 本文
            'image'       => ['nullable', 'max:1024', 'mimes:jpg,jpeg,png,gif'], // 画像
        ];
    }
}
