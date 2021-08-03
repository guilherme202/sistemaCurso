<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscricaoRequest extends FormRequest
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
                'nome'=>'required',
                'email'=>'required|email',
                'cpf'=> 'numeric',
                'endereco'=> 'required',
                'empresa'=> 'required',
                'telefone'=> 'telefone_com_ddd',
                'celular'=> 'celular_com_ddd',
            ];
    
            
    }

    public function messages()
    {
        return [
            'nome.required' => 'Coloque um nome.',
            'email.required'  => 'Coloque um email válido.',
            'email.email'  => 'Coloque um email válido.',
            'cpf.numeric'  => 'Coloque apenas números.',
                   
        ];
    }
}
