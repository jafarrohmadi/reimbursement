<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Employee ID</th>
        <th>Full Name</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($reimbursementTransaction->reimbursementTransactionDetail as $reimbursementTransactions)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reimbursementTransactions->user['nik'] ?? ''}}</td>
            <td>{{ $reimbursementTransactions->user['name'] ?? ''}}</td>
            <td><span class="new-datatable-nowrap"><a
                        class="modaleditlisttransactionopen new-datatable-action icon-only ri2-txwhite1 ri2-bggreen1 ri2-tooltip ri2-nowrap"><span
                            class="ri2-righttooltiptext">Edit</span><i
                            class="fas fa-pen"></i></a><a
                        class="modalhapuslisttransactionopen new-datatable-action icon-only ri2-txblack1 ri2-bgyellow1 ri2-tooltip ri2-nowrap"><span
                            class="ri2-righttooltiptext">Hapus</span><i
                            class="fas fa-times"></i></a></span></td>
        </tr>
    @endforeach
    </tbody>
</table>
