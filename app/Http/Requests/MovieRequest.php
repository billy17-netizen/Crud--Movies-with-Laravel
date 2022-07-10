<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:movies',
            'storyline' => 'required',
            'language' => 'required',
            'box_office' => 'required',
            'rating' => 'required|numeric|between:1,10',
            'runtime' => 'required|numeric|between:1,300',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
