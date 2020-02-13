<?php

namespace App\Http\Controllers\Reimbursement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReimbursementSettingsRequest;
use App\Models\Reimbursement\Reimbursement;
use App\Models\Reimbursement\ReimbursementSettings;
use Illuminate\Http\Request;

class ReimbursementSettingsController extends Controller
{
    public function index($reloadAjax = false)
    {
        $reimbursement = Reimbursement::get()->sortByDesc('updated_at');

        $reimbursementSettings = ReimbursementSettings::all()->sortByDesc('updated_at');

        if ($reloadAjax === true) {
            return view('reimbursement.reimbursement-setting.list', compact('reimbursementSettings'));
        }

        return view('reimbursement.reimbursement-setting.index', compact('reimbursementSettings', 'reimbursement'));
    }

    public function store(StoreReimbursementSettingsRequest $request)
    {
        ReimbursementSettings::create($request->all());
        return $this->index(true);
    }

    public function update(Request $request, ReimbursementSettings $reimbursementSettings)
    {
        $reimbursementSettings->update($request->all());

        return $this->index(true);
    }

    public function destroy($id)
    {
        ReimbursementSettings::find($id)->delete();

        return $this->index(true);
    }
}
