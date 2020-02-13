<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Judul</th>
        <th>Limit</th>
        <th>Expired Pada</th>
        <th>Tanggal Efektif</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0 ?>
    @foreach($reimbursement as $reimbursements)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reimbursements->name }}</td>
            <td>{{ (new App\Helpers\Helper)->convertToIndonesiaCurrency($reimbursements->limit) }}</td>
            <td>{{ $reimbursements->expired }}</td>
            <td>{{ $reimbursements->effective_date }}</td>
            <td><span class="new-datatable-nowrap">
                    <a class="modalReimbursementEditOpen new-datatable-action icon-only ri2-txwhite1 ri2-bggreen1 ri2-tooltip ri2-nowrap"
                       data-id="{{$reimbursements->id}}"
                       data-name="{{$reimbursements->name}}"
                       data-limit="{{$reimbursements->limit}}"
                       data-expired="{{$reimbursements->expired}}"
                       data-effective_date="{{$reimbursements->effective_date}}">
                        <span class="ri2-righttooltiptext">Edit</span>
                        <i class="fas fa-pen"></i>
                    </a>
                    <a class="modalReimbursementHapusOpen new-datatable-action icon-only ri2-txblack1 ri2-bgyellow1 ri2-tooltip ri2-nowrap"
                       data-id="{{$reimbursements->id}}"
                       data-name="{{$reimbursements->name}}">
                        <span class="ri2-righttooltiptext">Hapus</span>
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
