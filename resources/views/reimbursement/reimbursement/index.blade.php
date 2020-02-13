@extends('layouts.reimbursement.app')
@section('content')
    <div class="content-header ri2-block ri2-bgwhite1 ri2-paddingleft20 ri2-paddingright20">
        <div class="ri2-table ri2-fullwidth ri2-fullheight">
            <div class="ri2-cell ri2-vmid ri2-fit ri2-paddingright10">
                <div class="ri2-table ri2-font18 ri2-semibold">
                    <div class="ri2-cell ri2-paddingleft10">
                        Reimbursement
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box ri2-bgwhite2">
        <a class="modalReimbursementCreateOpen new-toolbarbutton ri2-inlineblock new-ocean-gradient ri2-font14 ri2-mobilefont12 ri2-semibold ri2-txwhite1 ri2-pointer ri2-hovering"><i
                class="fas fa-plus-circle"></i> Buat Reimbursement</a>
    </div>

    <div class="content-body">
        <div class="ri2-block ri2-relative ri2-fullwidth ri2-box ri2-boxpad10">
            <div class="ri2-block ri2-relative new-content-space">
                <div class="ri2-block ri2-relative">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div class="ri2-block ri2-relative ri2-overflowauto ri2-paddingbottom20" data-simplebar
                             data-simplebar-auto-hide="false" id="reimbursementList">
                            @include('reimbursement.reimbursement.list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reimbursement.reimbursement.create')
    @include('reimbursement.reimbursement.edit')
    @include('reimbursement.reimbursement.delete')
@endsection
@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //datatable
        $('.datatable-table').DataTable();
        //date
        $('.datetimepicker').datetimepicker({
            timepicker: false,
            format: 'd/m/y'
        });
        var simpan = {
            text: '<i class="far fa-comment-alt ri2-paddingright7">Add reimbursement success</i>',
            timeout: 1500,
            type: 'success',
            theme: 'relax',
            layout: 'topRight',
            closeWith: ['click'],
            maxVisible: 10,
            animation: {
                open: 'animated bounceInRight', // Animate.css class names
                close: 'animated bounceOutRight', // Animate.css class names
                easing: 'swing', // unavailable - no need
                speed: 100 // unavailable - no need
            }
        };

        var edit = {
            text: '<i class="far fa-comment-alt ri2-paddingright7">Edit reimbursement success</i>',
            timeout: 1500,
            type: 'success',
            theme: 'relax',
            layout: 'topRight',
            closeWith: ['click'],
            maxVisible: 10,
            animation: {
                open: 'animated bounceInRight', // Animate.css class names
                close: 'animated bounceOutRight', // Animate.css class names
                easing: 'swing', // unavailable - no need
                speed: 100 // unavailable - no need
            }
        };

        // missing options such as Theme!!
        $('.noty-button').click(function (e) {
            console.log(simpan);
            e.preventDefault();
            noty(simpan);
        });

        var hapus = {
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Delete reimbursement success',
            timeout: 1500,
            type: 'warning',
            theme: 'relax',
            layout: 'topRight',
            closeWith: ['click'],
            maxVisible: 10,
            animation: {
                open: 'animated bounceInRight', // Animate.css class names
                close: 'animated bounceOutRight', // Animate.css class names
                easing: 'swing', // unavailable - no need
                speed: 100 // unavailable - no need
            }
        };

        // missing options such as Theme!!
        $('.noty-button-hapus').click(function (e) {
            console.log(hapus);
            e.preventDefault();
            noty(hapus);
        });

        //Buat buat reimbursement
        var modalReimbursementCreate = $('.modalReimbursementCreate');
        var modalReimbursementCreateOpen = $('.modalReimbursementCreateOpen');
        var modalReimbursementCreateBack = $('.modalReimbursementCreateBack');
        var modalReimbursementCreateClose = $('.modalReimbursementCreateClose');

        $(modalReimbursementCreateOpen).on('click', function () {
            $('#saveReimbursement')[0].reset();
            $('.modalReimbursementCreate').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalReimbursementCreateBack).on('click', function () {
            $('.modalReimbursementCreate').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalReimbursementCreateClose).on('click', function () {
            $('.modalReimbursementCreate').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#saveReimbursement').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('reimbursements.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#saveReimbursement')[0].reset();
                    $('#reimbursementList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modalReimbursementCreate').css('display', 'none');
                    $('body', 'html').css('overflow', 'auto');
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    var html = '';
                    $.each(errors.errors, function (i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span style="color: red;">' + error[0] + '</span>'));
                    });

                }
            })
        });

        //Buat edit reimbursement
        var modalReimbursementEdit = $('.modalReimbursementEdit');
        var modalReimbursementEditOpen = $('.modalReimbursementEditOpen');
        var modalReimbursementEditBack = $('.modalReimbursementEditBack');
        var modalReimbursementEditClose = $('.modalReimbursementEditClose');

        $(document).on("click", ".modalReimbursementEditOpen", function () {
            $('#reimbursementEditId').val($(this).attr('data-id'));
            $('#editName').val($(this).attr('data-name'));
            $('#editLimit').val($(this).attr('data-limit'));
            $('#editExpired').val($(this).attr('data-expired'));
            $('#editEffectiveDate').val($(this).attr('data-effective_date'));
            $('.modalReimbursementEdit').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalReimbursementEditBack).on('click', function () {
            $('.modalReimbursementEdit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalReimbursementEditClose).on('click', function () {
            $('.modalReimbursementEdit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#editReimbursement').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('reimbursements') }}/" + $('#reimbursementEditId').val(),
                method: "PUT",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id' : $('#reimbursementEditId').val(),
                    'name' : $('#editName').val(),
                    'limit': $('#editLimit').val(),
                    'expired' : $('#editExpired').val(),
                    'effective_date' : $('#editEffectiveDate').val(),
                },
                success: function (data) {
                    $('#editReimbursement')[0].reset();
                    $('#reimbursementList').html(data);
                    $('.datatable-table').DataTable();
                    noty(edit);
                    $('.modalReimbursementEdit').css('display', 'none');
                    $('body', 'html').css('overflow', 'auto');
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    var html = '';
                    $.each(errors.errors, function (i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span style="color: red;">' + error[0] + '</span>'));
                    });

                }
            })
        });
        //modal hapus
        var modalReimbursementHapus = $('.modalReimbursementHapus');
        var modalReimbursementHapusOpen = $('.modalReimbursementHapusOpen');
        var modalReimbursementHapusBack = $('.modalReimbursementHapusBack');
        var modalReimbursementHapusClose = $('.modalReimbursementHapusClose');

        $(document).on("click", ".modalReimbursementHapusOpen", function () {
            $('#reimbursementDeleteName').html($(this).attr("data-name"));
            $('#reimbursementDeleteId').val($(this).attr('data-id'));
            $('.modalReimbursementHapus').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalReimbursementHapusBack).on('click', function () {
            $('.modalReimbursementHapus').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalReimbursementHapusClose).on('click', function () {
            $('.modalReimbursementHapus').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#deleteReimbursement').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('reimbursements') }}/" + $('#reimbursementDeleteId').val(),
                type: "delete",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    $('#reimbursementList').html(data);
                    $('.datatable-table').DataTable();
                    noty(hapus);
                    $('.modalReimbursementCreate').css('display', 'none');
                    $('body', 'html').css('overflow', 'auto');
                }
            })
        });

    </script>
@endsection
