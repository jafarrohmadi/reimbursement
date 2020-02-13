<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReimbursementSettingsRequest extends FormRequest
{
    protected $forceJsonResponse = false;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'reimbursement_id' => 'required',
        ];
    }
}
