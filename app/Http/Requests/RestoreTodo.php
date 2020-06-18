<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestoreTodo extends FormRequest
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
            'select_todo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'select_todo.required' => '完了を取り消しする:attributeを選択してください',
        ];
    }

    public function attributes()
    {
        return [
            'select_todo' => 'ToDo',
        ];
    }}
