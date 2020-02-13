<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReimbursementRequest extends FormRequest
{
    protected $forceJsonResponse = false;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'           => 'required',
            'limit'          => 'required',
            'expired'        => 'required',
            'effective_date' => 'required',
        ];
    }
}
