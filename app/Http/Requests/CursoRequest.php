<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
                'descricao'=>'required',
                'valor'=> 'required|numeric',
                'dataInicio'=> 'required',
                'dataFim'=> 'required',
                'qtdInscritos'=> 'required|numeric',
                'material'=> 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Coloque um nome.',
            'descricao.required'  => 'Coloque uma descrição',
            'valor.required'  => 'Coloque um valor.',
            'valor.numeric'  => 'Coloque apenas números em valor.',
            'dataInicio.required'  => 'Coloque uma data de inicio.',
            'qtdInscritos.required'  => 'Coloque um valor.',
            'qtdInscritos.numeric'  => 'Coloque apenas númeors em quantidade de inscritos',
            'material.required'  => 'Coloque um Material.',
        ];
    }
}

