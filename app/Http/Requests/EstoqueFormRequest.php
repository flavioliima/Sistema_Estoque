<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstoqueFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome_produto' => 'required',
            'fornecedor' => 'required',
            'data' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nome_produto' => 'O campo nome do produto é  obrigatório',
            'fornecedor' => 'O campo fornecedor é  obrigatório',
            'data' => 'O campo data é  obrigatório',
        ];
    }
}
