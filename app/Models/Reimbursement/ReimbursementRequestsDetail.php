<?php

namespace App\Models\Reimbursement;

use Illuminate\Database\Eloquent\Model;

class ReimbursementRequestsDetail extends Model
{
    public $table = 'reimbursement_requests_details';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'reimbursement_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'requestAmount',
        'paidAmount',
        'description',
        'reimbursement_request_id',
    ];

    public function reimbursement()
    {
        return $this->belongsTo(Reimbursement::class);
    }
}
