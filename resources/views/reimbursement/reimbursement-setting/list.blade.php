<table class="display datatable-table" style="width:100%;">
    <thead>
    <tr>
        <th class="fit">No</th>
        <th>Name</th>
        <th>Set Default</th>
        <th>Emerge At Join</th>
        <th>Mandatory Upload File</th>
        <th>Pilihan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($reimbursementSettings as $reimbursements)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$reimbursements->reimbursement['name'] }}</td>
            <td><i class="fas {{ $reimbursements->set_default == 0 ? 'fa-times':'fa-check' }} ri2-txgreen1"></i></td>
            <td><i class="fas {{ $reimbursements->emerge_at_join == 0 ? 'fa-times':'fa-check' }} ri2-txgreen1"></i></td>
            <td>
                <i class="fas {{ $reimbursements->mandatory_upload_file == 0 ? 'fa-times':'fa-check' }} ri2-txgreen1"></i>
            </td>
            <td><span class="new-datatable-nowrap">
                    <a
                        class="modaleditreimbursementsettingopen new-datatable-action icon-only ri2-txwhite1 ri2-bggreen1 ri2-tooltip ri2-nowrap"
                        data-id="{{$reimbursements->id}}"
                        data-name="{{$reimbursements->reimbursement['name']}}"
                        data-set_default="{{$reimbursements->set_default}}"
                        data-emerge_at_join="{{$reimbursements->emerge_at_join}}"
                        data-mandatory_upload_file="{{$reimbursements->mandatory_upload_file}}">
                        <span
                            class="ri2-righttooltiptext">Edit</span><i class="fas fa-pen"></i></a>
                    <a
                        class="modalReimbursementSettingsHapusOpen new-datatable-action icon-only ri2-txblack1 ri2-bgyellow1 ri2-tooltip ri2-nowrap"
                        data-id="{{$reimbursements->id}}"
                        data-name="{{$reimbursements->reimbursement['name']}}">
                        <span
                            class="ri2-righttooltiptext">Hapus</span><i class="fas fa-times"></i>
                    </a></span>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
