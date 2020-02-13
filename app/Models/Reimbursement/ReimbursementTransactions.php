<?php

namespace App\Models\Reimbursement;

use Illuminate\Database\Eloquent\Model;

class ReimbursementTransactions extends Model
{
    public $table = 'reimbursement_transactions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TYPE_SELECT = [
        'Assign' => 'Assign',
        'Update' => 'Update',
    ];

    protected $fillable = [
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'transaction_ids',
        'reimbursement_id',
    ];

    public function reimbursement()
    {
        return $this->belongsTo(Reimbursement::class, 'reimbursement_id');
    }

    public function reimbursementTransactionDetail()
    {
        return $this->hasMany(ReimbursementTransactionDetail::class);
    }
}
