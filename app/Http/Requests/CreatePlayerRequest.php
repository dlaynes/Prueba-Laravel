<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Config;

class CreatePlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $databaseName = Config::get('database.connections');
        //.$databaseName['mysql']['database']

        return [
            'name' => ['required','string','max:150'],
            'last_name' => ['required','string','max:150'],
            'matches' => ['required','integer','min:0'],
            'goals' => ['required','integer','min:0'],
            'country_id' => ['required','integer','exists:countries,id'],
            'clubs' => ['required','array'],
            'clubs.*' => ['exists:clubs,id']
        ];
    }
}
