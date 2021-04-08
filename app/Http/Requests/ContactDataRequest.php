<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactDataRequest extends FormRequest
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
          'name' => 'required|max:100',
          'email' => 'required|email|max:100',
          'business' => 'required|max:100',
          'message' => 'required|max:255',
        ];
      }
      
      public function attributes()
      {
        return [
        'name' => 'nombres',
        'email' => 'correo',
        'business' => 'asunto',
        'message' => 'mensaje',
      ];
    }

    // public function messages(){
    //   //
    // }
}
