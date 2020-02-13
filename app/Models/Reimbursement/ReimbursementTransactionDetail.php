<?php

namespace App\Models\Reimbursement;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ReimbursementTransactionDetail extends Model
{
    public $table = 'reimbursement_transaction_details';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'start_date',
        'end_date'
    ];

    protected $fillable = [
        'user_id',
        'balance',
        'start_date',
        'end_date',
        'reimbursement_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' );
    }
}
