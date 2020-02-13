<?php

namespace App\Models\Reimbursement;

use Illuminate\Database\Eloquent\Model;

class ReimbursementSettings extends Model
{
    public $table = 'reimbursement_settings';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'set_default',
        'emerge_at_join',
        'reimbursement_id',
        'mandatory_upload_file',
    ];

    public function reimbursement()
    {
        return $this->belongsTo(Reimbursement::class, 'reimbursement_id');
    }
}
