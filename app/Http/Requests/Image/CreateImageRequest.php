<?php

namespace App\Http\Requests\Image;

use Illuminate\Foundation\Http\FormRequest;

class CreateImageRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image_gallery' => 'required|image',
            'image_contact' => 'required|image',
            'image_carrier' => 'required|image',
        ];
    }
}
