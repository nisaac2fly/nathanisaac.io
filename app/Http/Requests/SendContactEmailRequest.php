<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendContactEmailRequest extends Request {

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
			'name' => 'required',
			'company' => '',
			'phone' => 'required_without:email',
			'email' => 'required_without:phone|email',
			'subject' => 'required',
			'message' => 'required'
		];
	}

}
