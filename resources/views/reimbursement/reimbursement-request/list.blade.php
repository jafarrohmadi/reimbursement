<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Transaction ID</th>
        <th>ID Employee</th>
        <th>Reimbursement</th>
        <th>Tanggal Efektif</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0; ?>
    @foreach($reimbursementRequests as $reimbursement)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reimbursement->transaction }}</td>
            <td>{{ $reimbursement->user['nik'] ?? '' }} - {{ $reimbursement->user['name'] ?? '' }}</td>
            <td>{{ $reimbursement->reimbursement['name'] ?? ''}}</td>
            <td>{{ $reimbursement->effective_date ?? ''}}</td>
            <td>{{ $reimbursement->description ?? ''}}</td>
            <td class="new-rekrutment-status">
                <span class="ri2-bggreen1"></span>
                <span class="ri2-bgblue1"></span>
                <span class="ri2-bggrey2"></span>{{ \App\Models\Reimbursement\ReimbursementRequest::TYPE_Status[$reimbursement->status] ?? ''}}
            </td>
            <td>
                <a href="{{ url("reimbursement-requests/$reimbursement->id") }}"
                   class="ri2-txgrey1 ri2-linkhover ri2-tooltip ri2-relative ri2-nowrap">
                    <span class="ri2-lefttooltiptext ri2-normal">Lihat Detail</span>
                    <i class="fas fa-search"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
