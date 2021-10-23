<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Hankaku;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'register'){
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
            'code'=>'required',
            'mail'=>'email',
            'passcon_confirmation'=>['required','min:8',new Hankaku],
            'passcon'=>['required','confirmed','min:8',new Hankaku],
            'looks'=>'required',
            'tabaco'=>'required',
            'alchol'=>'required',
            'sexual'=>'required',
            'area'=>'required',
            'sex'=>'required',
            'purpose'=>'required',
            'showok'=>'required',
            'servicechecked' =>'required',
        ];
    }
}
