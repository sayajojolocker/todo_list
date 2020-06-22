<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteTodo extends FormRequest
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
            'todoIds.required' => '削除する:attributeを選択してください',
        ];
    }

    public function attributes()
    {
        return [
            'todoIds' => 'ToDo',
        ];
    }
}
