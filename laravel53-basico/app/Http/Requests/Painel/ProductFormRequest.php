<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // TRUE para liberar no ACL
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required | min:3 | max: 100',
            'number'        => 'required | numeric',
            'category'      => 'required',
            'description'   => ' min:3 | max: 100'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "O campo nome é requerido",
            'number.numeric'=> 'Apenas números'
        ];
    }
}
