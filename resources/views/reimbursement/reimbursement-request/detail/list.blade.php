<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Nama Benefit</th>
        <th>Request Amount</th>
        <th>Paid Amount</th>
        <th>Desc</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($reimbursementRequest->reimbursementRequestDetail as $key => $reimbursementRequestDetail)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reimbursementRequestDetail->name }}</td>
            <td>{{ (new App\Helpers\Helper)->convertToIndonesiaCurrency($reimbursementRequestDetail->requestAmount) ?? '' }}</td>
            <td>{{ isset($reimbursementRequestDetail->paidAmount) ? (new App\Helpers\Helper)->convertToIndonesiaCurrency($reimbursementRequestDetail->paidAmount) : '' }}</td>
            <td>{{ $reimbursementRequestDetail->description }}</td>
            <td><span class="new-datatable-nowrap"><a
                        class="modalhapusbenefitopen new-datatable-action icon-only ri2-txblack1 ri2-bgyellow1 ri2-tooltip ri2-nowrap"
                        data-id="{{$reimbursementRequestDetail->id}}"
                        data-name="{{$reimbursementRequestDetail->name}}"><span
                            class="ri2-righttooltiptext">Hapus</span><i
                            class="fas fa-times"></i></a></span></td>
        </tr>
    @endforeach
    </tbody>
</table>
