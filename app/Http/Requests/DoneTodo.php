<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoneTodo extends FormRequest
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
            'todoIds' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'todoIds.required' => '完了する:attributeを選択してください',
        ];
    }

    public function attributes()
    {
        return [
            'todoIds' => 'ToDo',
        ];
    }
}
