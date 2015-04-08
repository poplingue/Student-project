<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request {

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
            'firstname'=>'required',
            'name'=>'required',
            'status'=>'in:publish,unpublish',
        ];
	}

	public function messages()
	{
		return [
			'required' => ':attribute obligatoire'
		];
	}

}
