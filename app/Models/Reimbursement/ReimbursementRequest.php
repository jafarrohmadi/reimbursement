<?php

namespace App\Models\Reimbursement;

use App\Helpers\Helper;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ReimbursementRequest extends Model
{
    public $table = 'reimbursement_requests';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'effective_date',
    ];

    protected $fillable = [
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'transaction',
        'description',
        'effective_date',
        'reimbursement_id',
        'status',
        'file_upload',
    ];

    const TYPE_Status = [
        '0' => 'Waiting Approve',
        '1' => 'Not Approve',
        '2' => 'Approve',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reimbursementRequestDetail()
    {
        return $this->hasMany(ReimbursementRequestsDetail::class, 'reimbursement_request_id');
    }

    public function reimbursement()
    {
        return $this->belongsTo(Reimbursement::class, 'reimbursement_id');
    }

    public function getEffectiveDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(Helper::date_format) : null;
    }

    public function setEffectiveDateAttribute($value)
    {
        $this->attributes['effective_date'] =
            $value ? Carbon::createFromFormat(Helper::date_format, $value)->format('Y-m-d') : null;
    }
}
