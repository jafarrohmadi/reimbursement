<?php

namespace App\Http\Controllers\Reimbursement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReimbursementRequestRequest;
use App\Models\Reimbursement\Reimbursement;
use App\Models\Reimbursement\ReimbursementRequest;
use App\Models\Reimbursement\ReimbursementRequestsDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ReimbursementRequestController extends Controller
{
    public function index($ajax = false)
    {
        $user          = User::where('id', Auth::id())->first();
        $allUser       = $user;
        $reimbursement = Reimbursement::all();

        if ($user->role === 'admin') {
            $reimbursementRequests = ReimbursementRequest::all();
            $allUser               = User::all();
        } else {
            $reimbursementRequests = ReimbursementRequest::where('user_id', Auth::id())->get();
        }

        if ($ajax === true) {
            return view('reimbursement.reimbursement-request.list', compact('reimbursementRequests'));
        }

        return view('reimbursement.reimbursement-request.index', compact('reimbursementRequests', 'user', 'allUser', 'reimbursement'));
    }

    public function store(StoreReimbursementRequestRequest $request)
    {
        $file_upload = [];
        if ($request->file_uploads) {
            foreach ($request->file_uploads as $file) {
                $filename = time() . '.' . $file->extension();
                $filePath = public_path() . '/files/uploads/';
                $file->move($filePath, $filename);
                $file_upload[] = $filename;
            }
        }
        $file_upload = serialize($file_upload);
        $request->merge([ 'file_upload' => $file_upload ]);
        ReimbursementRequest::create($request->all());

        return $this->index(true);
    }
//
//    public function edit(ReimbursementRequest $reimbursementRequest)
//    {
//        $reimbursements = Reimbursement::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
//
//        $reimbursementRequest->load('reimbursement');
//
//        $users =
//            User::join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id', 2)->get();
//        return view('admin.reimbursementRequests.edit', compact('reimbursements', 'reimbursementRequest', 'users'));
//    }
//
//    public function update(UpdateReimbursementRequestRequest $request, ReimbursementRequest $reimbursementRequest)
//    {
//        $reimbursementRequest->update($request->all());
//
//        if ($request->input('file_upload', false)) {
//
//            if (!$reimbursementRequest->file_upload || $request->input('file_upload') !== $reimbursementRequest->file_upload->file_name) {
//                $reimbursementRequest->addMedia(public_path('/uploads/' . $request->input('file_upload')))->toMediaCollection('file_upload');
//            }
//        } else if ($reimbursementRequest->file_upload) {
//            $reimbursementRequest->file_upload->delete();
//        }
//
//        return redirect()->route('admin.reimbursement-requests.index');
//    }
//
    public function show(ReimbursementRequest $reimbursementRequest, $load = false)
    {
        $reimbursementRequest->load('reimbursement');

        if ($load === true) {
            return view('reimbursement.reimbursement-request.detail.list', compact('reimbursementRequest'));
        }

        return view('reimbursement.reimbursement-request.detail.index', compact('reimbursementRequest'));
    }

    public function destroy(ReimbursementRequest $reimbursementRequest)
    {
        $reimbursementRequest->delete();

        return redirect()->route('reimbursement-requests.index');
    }

    public function approve($id, Request $request)
    {
        $reimbursement         = ReimbursementRequest::find($id);
        $reimbursement->status = $request->status ;
        $reimbursement->save();
        return redirect()->route('reimbursement-requests.index');
    }

    public function saveDetail($id, Request $request)
    {
        $reimbursement                           = new ReimbursementRequestsDetail();
        $reimbursement->name                     = $request->name;
        $reimbursement->reimbursement_request_id = $id;
        $reimbursement->requestAmount            = $request->requestAmount;
        if (isset($request->paidAmount)) {
            $reimbursement->paidAmount = $request->paidAmount;
        }
        $reimbursement->description = $request->description;
        $reimbursement->save();

        return $this->show(ReimbursementRequest::find($id), true);
    }

    public function destroyDetail($id, $detailId)
    {
        ReimbursementRequestsDetail::where('id', $detailId)->delete();

        return $this->show(ReimbursementRequest::find($id), true);
    }

}
