<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Transaction ID</th>
        <th>Reimbursement</th>
        <th>Tipe</th>
        <th>Deskripsi</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($reimbursementTransactions as $reimbursements)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reimbursements->transaction_ids }}</td>
            <td>{{ $reimbursements->reimbursement['name']}}</td>
            <td>{{ $reimbursements->type }}</td>
            <td>{{ $reimbursements->description }}</td>
            <td><a href="{{ url("reimbursement-transactions/$reimbursements->id") }}"
                   class="ri2-txgrey1 ri2-linkhover ri2-tooltip ri2-relative ri2-nowrap"><span
                        class="ri2-lefttooltiptext ri2-normal">Lihat Detail</span><i class="fas fa-search"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
