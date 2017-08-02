<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RunningLogRequest extends FormRequest
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
            'run_date'          => 'required|date|before:tomorrow',
            'day_time_id'       => 'required|integer',
            'distance'          => 'required|numeric|min:1',
            'minutes'           => 'required|integer',
            'seconds'           => 'required|integer|max:59',
            'run_type_id'       => 'required|integer',
            'terrain_type_id'   => 'required|integer',
            'run_effort_id'     => 'required|integer',
            'run_feeling_id'    => 'required|integer'
        ];
    }
}
