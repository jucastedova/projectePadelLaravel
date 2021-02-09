<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscripcioCrearRequest extends FormRequest
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
            'dni' => 'required|unique:tbl_participants,DNI',
            'nom' => 'required',
            'primer_cognom' => 'required',
            'segon_cognom' => 'required',
            'data_naixement' => 'required',
            'email' => 'required|unique:tbl_participants,email|email|max:255|email',
            'sexe' => 'required'
        ];
    }
}
