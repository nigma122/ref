<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
          'category_id' => ['required', 'numeric'],
          'title' => ['required', 'string', 'min:5', 'max:190'],
          'author' => ['required', 'string', 'min:2', 'max:50'],
          'status' => ['sometimes'],
          'description' => ['sometimes']
        ];
    }

    public function message()
    {
      return parent::message(); // TODO: Change the autogenerated stub
    }

    public function attributes()
    {
      return parent::attributes(); // TODO: Change the autogenerated stub
    }

}