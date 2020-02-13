<?php

namespace App\Http\Requests;

use App\Models\ReimbursementRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreReimbursementRequestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'transaction'      => 'required',
            'user_id'          => 'required',
            'reimbursement_id' => 'required',
            'effective_date'   => 'required',
            'file_uploads.*'   => 'mimes:png,pdf,xls,xlsx,doc,docx,zip,jpeg,jpg',
        ];
    }
}
