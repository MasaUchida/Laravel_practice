<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//FormRequestはRequestsクラスの子クラス
class CreateFolder extends FormRequest
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
        //この配列のキーがhtmlのname属性と対応する
        //requiredは必須の意味で、ここではtitleというname要素のformは必須という意味
        return [
            'title' => 'required|max:20'
            //
        ];
    }
    
    //attributesをオーバーライド
    public function attributes(){
        return [
            'title' => 'フォルダ名',    
        ];
    }
}
