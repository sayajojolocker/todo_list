<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTodo extends FormRequest
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
            'todo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'todo.required' => '追加する:attributeを入力してください',
        ];
    }

    public function attributes()
    {
        return [
            'todo' => 'ToDo',
        ];
    }
}
