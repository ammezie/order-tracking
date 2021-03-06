<?php

namespace tracking\Http\Requests;

use tracking\Http\Requests\Request;

class TrackFormRequest extends Request
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
            'track_code' => 'required|min:6'
        ];
    }
}
