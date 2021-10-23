<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'reserve'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'mail'=>'email'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'名前は必須入力です',
            'mail.email'=>'正しいメールアドレス形式でメールアドレスを入力して下さい'
        ];
    }
}
