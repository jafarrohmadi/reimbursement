<?php

namespace App\Models\Reimbursement;

use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reimbursement extends Model
{
    public $table = 'reimbursements';

    protected $dates = [
        'updated_at',
        'created_at',
        'effective_date',
        'expired'
    ];

    protected $fillable = [
        'name',
        'limit',
        'expired',
        'created_at',
        'updated_at',
        'deleted_at',
        'effective_date',
    ];

    public function reimbursementTransactions()
    {
        return $this->hasMany(ReimbursementTransactions::class, 'reimbursement_id', 'id');
    }

    public function reimbursementSettings()
    {
        return $this->hasMany(ReimbursementSettings::class, 'reimbursement_id', 'id');
    }

    public function reimbursementRequests()
    {
        return $this->hasMany(ReimbursementRequests::class, 'reimbursement_id', 'id');
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

    public function getExpiredAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(Helper::date_format) : null;
    }

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] =
            $value ? Carbon::createFromFormat(Helper::date_format, $value)->format('Y-m-d') : null;
    }
}

