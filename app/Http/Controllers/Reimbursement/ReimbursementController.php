<?php

namespace App\Http\Controllers\Reimbursement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReimbursementRequest;
use App\Http\Requests\UpdateReimbursementRequest;
use App\Models\Reimbursement\Reimbursement;
use App\Models\Reimbursement\ReimbursementSettings;

class ReimbursementController extends Controller
{
    public function index($reloadAjax = false)
    {
        $reimbursement = Reimbursement::all()->sortByDesc('updated_at');

        if ($reloadAjax === true) {
            return view('reimbursement.reimbursement.list', compact('reimbursement'));
        }

        return view('reimbursement.reimbursement.index', compact('reimbursement'));
    }

    public function store(StoreReimbursementRequest $request)
    {
        $reimbursement        = Reimbursement::create($request->all());
        $reimbursementSetting = new ReimbursementSettings();
        $reimbursement->reimbursementSettings()->save($reimbursementSetting);
        return $this->index(true);
    }

    public function update(UpdateReimbursementRequest $request, Reimbursement $reimbursement)
    {
        $reimbursement->update($request->all());

        return $this->index(true);
    }

    public function destroy(Reimbursement $reimbursement)
    {
        $reimbursement->reimbursementSettings()->delete();
        $reimbursement->delete();

        return $this->index(true);
    }
}
