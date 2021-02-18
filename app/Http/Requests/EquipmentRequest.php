<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentRequest extends FormRequest
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
            'type'          => "required",
    		'body_number'   => "required",
    		'status'        => "required",
    		'last_location' => "required",
    		'operator'      => "required",
        ];
    }
}
