<?php

namespace hotelMoche\Http\Requests;

use hotelMoche\Http\Requests\Request;

class HabitacionUpdateRequest extends Request
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
            'piso' => 'required',
            'numero' => 'required'
        ];
    }
}