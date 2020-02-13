@extends('layouts.reimbursement.app')
@section('content')
    <div class="content-header ri2-block ri2-bgwhite1 ri2-paddingleft20 ri2-paddingright20">
        <div class="ri2-table ri2-fullwidth ri2-fullheight">
            <div class="ri2-cell ri2-vmid ri2-fit ri2-paddingright10">
                <div class="ri2-table ri2-font18 ri2-semibold">
                    <div class="ri2-cell ri2-paddingleft10">
                        Reimbursement Setting
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box ri2-bgwhite2">
        <a class="modalAddReimbursementSettingOpen new-toolbarbutton ri2-inlineblock new-ocean-gradient ri2-font14 ri2-mobilefont12 ri2-semibold ri2-txwhite1 ri2-pointer ri2-hovering"><i
                class="fas fa-plus-circle"></i> Tambah Reimbursement Setting</a>
    </div>

    <div class="content-body">
        <div class="ri2-block ri2-relative ri2-fullwidth ri2-box ri2-boxpad10">
            <div class="ri2-block ri2-relative new-content-space">
                <div class="ri2-block ri2-relative">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div id='reimbursementSettingsList'
                             class="ri2-block ri2-relative ri2-overflowauto ri2-paddingbottom20" data-simplebar
                             data-simplebar-auto-hide="false">
                            @include('reimbursement.reimbursement-setting.list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reimbursement.reimbursement-setting.create')
    @include('reimbursement.reimbursement-setting.edit')
    @include('reimbursement.reimbursement-setting.delete')
@endsection
@section('js')
    <script type="text/javascript">

        var simpan = {
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Add reimbursement setting success',
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
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Edit reimbursement setting success',
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
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Delete reimbursement setting success',
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

        //select
        $('.basic-single').select2();

        //datatable
        $('.datatable-table').DataTable();

        //Buat tambah reimbursement setting
        var modalAddReimbursementSetting = $('.modalAddReimbursementSetting');
        var modalAddReimbursementSettingOpen = $('.modalAddReimbursementSettingOpen');
        var modalAddReimbursementSettingBack = $('.modalAddReimbursementSettingBack');
        var modalAddReimbursementSettingClose = $('.modalAddReimbursementSettingClose');

        $(modalAddReimbursementSettingOpen).on('click', function () {
            $('.modalAddReimbursementSetting').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalAddReimbursementSettingBack).on('click', function () {
            $('.modalAddReimbursementSetting').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalAddReimbursementSettingClose).on('click', function () {
            $('.modalAddReimbursementSetting').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });
        $('#saveReimbursementSettings').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('reimbursements-settings.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#saveReimbursementSettings')[0].reset();
                    $('#reimbursementSettingsList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modalAddReimbursementSetting').css('display', 'none');
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

        //Buat edit reimbursement setting
        var modaleditreimbursementsetting = $('.modaleditreimbursementsetting');
        var modaleditreimbursementsettingopen = $('.modaleditreimbursementsettingopen');
        var modaleditreimbursementsettingback = $('.modaleditreimbursementsettingback');
        var modaleditreimbursementsettingclose = $('.modaleditreimbursementsettingclose');

        $(document).on("click", ".modaleditreimbursementsettingopen", function () {
            $('#reimbursementSettingsEditId').val($(this).attr('data-id'));
            $('#idCheckbox').prop('checked', true);
            $('.modaleditreimbursementsetting').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaleditreimbursementsettingback).on('click', function () {
            $('.modaleditreimbursementsetting').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaleditreimbursementsettingclose).on('click', function () {
            $('.modaleditreimbursementsetting').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#editReimbursementSettings').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('reimbursements-settings') }}/" + $('#reimbursementSettingsEditId').val(),
                type: "put",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "reimbursement_id": $('#reimbursement_id').val(),
                    "set_default": $('#set_default').val(),
                    "emerge_at_join": $('#emerge_at_join').val(),
                    "mandatory_upload_file": $('#mandatory_upload_file').val(),
                },
                success: function (data) {
                    $('#reimbursementSettingsList').html(data);
                    $('.datatable-table').DataTable();
                    noty(hapus);
                    $('.modaleditreimbursementsetting').css('display', 'none');
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
        var modalhapus = $('.modalhapus');
        var modalhapusopen = $('.modalhapusopen');
        var modalhapusback = $('.modalhapusback');
        var modalhapusclose = $('.modalhapusclose');

        $(document).on("click", ".modalReimbursementSettingsHapusOpen", function () {
            $('#reimbursementSettingsDeleteName').html($(this).attr("data-name"));
            $('#reimbursementSettingsDeleteId').val($(this).attr('data-id'));
            $('.modalhapus').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalhapusback).on('click', function () {
            $('.modalhapus').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalhapusclose).on('click', function () {
            $('.modalhapus').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#deleteReimbursementSettings').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('reimbursements-settings') }}/" + $('#reimbursementSettingsDeleteId').val(),
                type: "delete",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    $('#reimbursementSettingsList').html(data);
                    $('.datatable-table').DataTable();
                    noty(hapus);
                    $('.modalhapus').css('display', 'none');
                    $('body', 'html').css('overflow', 'auto');
                }
            })
        });

    </script>
@endsection
