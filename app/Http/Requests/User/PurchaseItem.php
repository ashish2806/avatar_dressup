<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseItem extends FormRequest
{
	
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
			'user_id' => 'required|numeric',
			'item_id' => 'required|numeric',
			
        ];
	}
}
