<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestContatos extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        // Inicializa o array das regras
        $request = [];

        // Verifica se o método é POST ou PUT 
        if($this->method() == 'POST' || $this->method() == 'PUT'){
            $request = [
                'nome' => 'required', // essa validação pode ser feita no frontend
            ];
        }
        return $request;
    }
}
