<?php

namespace App\Http\Requests\MenuGallery;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required',
            'post_id' => 'nullable'
        ];
    }
}
