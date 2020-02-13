@extends('layouts.reimbursement.app')
@section('content')
    <div class="content-header ri2-block ri2-bgwhite1 ri2-paddingleft20 ri2-paddingright20">
        <div class="ri2-table ri2-fullwidth ri2-fullheight">
            <div class="ri2-cell ri2-vmid ri2-fit ri2-paddingright10">
                <div class="ri2-table ri2-font18 ri2-semibold">
                    <div class="ri2-cell ri2-paddingleft10">
                        Reimbursement Transaction Detail
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box ri2-bgwhite2">
        <div class="ri2-table ri2-relative ri2-fullwidth">
            <div class="ri2-cell ri2-vmid ri2-right">
                <button
                    class="modaledittransactionopen new-ba-toolbar ri2-inlineblock ri2-vmid ri2-circle ri2-borderfull1 ri2-bordergreen1 ri2-circle ri2-bgwhite1 ri2-txblack3 ri2-center ri2-font16 ri2-nopadding ri2-pointer ri2-tooltip ri2-relative ri2-nowrap ri2-linkhover">
                    <span class="ri2-lefttooltiptext ri2-normal ri2-linenormal">Edit Transaction</span><i
                        class="fas fa-pen"></i>
                </button>
                <button
                    class="modalhapustransactionopen new-ba-toolbar ri2-inlineblock ri2-vmid ri2-circle ri2-borderfull1 ri2-bordergreen1 ri2-circle ri2-bgwhite1 ri2-txblack3 ri2-center ri2-font16 ri2-nopadding ri2-pointer ri2-tooltip ri2-relative ri2-nowrap ri2-linkhover">
                    <span class="ri2-lefttooltiptext ri2-normal ri2-linenormal">Hapus Transaction</span><i
                        class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="content-body">

        <div class="ri2-block ri2-relative ri2-fullwidth ri2-box ri2-boxpad10">
            <div class="ri2-flex ri2-relative ri2-cell-end1">
                <div class="ri2-block ri2-relative ri2-vtop new-content-cellspace ri2-box ri2-cell-end1"
                     style="width: 400px;">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative">
                        <div class="ri2-block ri2-font16 ri2-txblack5 ri2-semibold ri2-bgwhite3 ri2-boxpad7">
                            Detail Reimbursement Transaction
                        </div>
                    </div>
                    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box">
                        <div
                            class="ri2-table ri2-relative ri2-fullwidth ri2-font14 ri2-txblack3 new-bordertable ri2-borderfull1 ri2-borderwhite5 ri2-borderradius5 ri2-overflowhidden">
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    ID
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementTransaction->id }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Transaction Id
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementTransaction->transaction_ids }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Reimbursement
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementTransaction->reimbursement['name'] }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Type
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementTransaction->type }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Description
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementTransaction->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ri2-flex1 ri2-relative ri2-vtop new-content-cellspace ri2-box ri2-cell-end1">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative">
                        <div class="ri2-block ri2-font16 ri2-txblack5 ri2-semibold ri2-bgwhite3 ri2-boxpad7">
                            List Transaction
                        </div>
                    </div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div class="ri2-block ri2-relative ri2-marginbottom20">
                            <a class="modaltambahlisttransactionopen new-toolbarbutton ri2-inlineblock new-ocean-gradient ri2-font14 ri2-mobilefont12 ri2-semibold ri2-txwhite1 ri2-pointer ri2-hovering"><i
                                    class="fas fa-plus-circle"></i> Tambah List Transaction</a>
                        </div>
                        <div class="ri2-block ri2-relative ri2-overflowauto ri2-paddingbottom20" data-simplebar
                             data-simplebar-auto-hide="false" id="reimbursementTransactionsList">
                            @include('reimbursement.reimbursement-transactions.detail.list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reimbursement.reimbursement-transactions.detail.create-transactions')
    @include('reimbursement.reimbursement-transactions.detail.edit-transactions')
@endsection
@section('js')
    <script type="text/javascript">
        var simpan = {
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Message',
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
            text: '<i class="far fa-comment-alt ri2-paddingright7"></i>Message',
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

        //Edit transaction
        var modaledittransaction = $('.modaledittransaction');
        var modaledittransactionopen = $('.modaledittransactionopen');
        var modaledittransactionback = $('.modaledittransactionback');
        var modaledittransactionclose = $('.modaledittransactionclose');

        $(modaledittransactionopen).on('click', function () {
            $('.modaledittransaction').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaledittransactionback).on('click', function () {
            $('.modaledittransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaledittransactionclose).on('click', function () {
            $('.modaledittransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        //modal hapustransaction
        var modalhapustransaction = $('.modalhapustransaction');
        var modalhapustransactionopen = $('.modalhapustransactionopen');
        var modalhapustransactionback = $('.modalhapustransactionback');
        var modalhapustransactionclose = $('.modalhapustransactionclose');

        $(modalhapustransactionopen).on('click', function () {
            $('.modalhapustransaction').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalhapustransactionback).on('click', function () {
            $('.modalhapustransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalhapustransactionclose).on('click', function () {
            $('.modalhapustransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        //modal tambahlisttransaction
        var modaltambahlisttransaction = $('.modaltambahlisttransaction');
        var modaltambahlisttransactionopen = $('.modaltambahlisttransactionopen');
        var modaltambahlisttransactionback = $('.modaltambahlisttransactionback');
        var modaltambahlisttransactionclose = $('.modaltambahlisttransactionclose');

        $(modaltambahlisttransactionopen).on('click', function () {
            $('.modaltambahlisttransaction').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaltambahlisttransactionback).on('click', function () {
            $('.modaltambahlisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaltambahlisttransactionclose).on('click', function () {
            $('.modaltambahlisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#tambahListTransaction').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url("reimbursement-transactions/$reimbursementTransaction->id/saveDetail") }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#tambahListTransaction')[0].reset();
                    $('#reimbursementTransactionsList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modaltambahlisttransaction').css('display', 'none');
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
        //modal editlisttransaction
        var modaleditlisttransaction = $('.modaleditlisttransaction');
        var modaleditlisttransactionopen = $('.modaleditlisttransactionopen');
        var modaleditlisttransactionback = $('.modaleditlisttransactionback');
        var modaleditlisttransactionclose = $('.modaleditlisttransactionclose');

        $(modaleditlisttransactionopen).on('click', function () {
            $('.modaleditlisttransaction').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaleditlisttransactionback).on('click', function () {
            $('.modaleditlisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaleditlisttransactionclose).on('click', function () {
            $('.modaleditlisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#editListTransaction').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url("reimbursement-transactions/$reimbursementTransaction->id/updateDetail/") }}/" +,
                method: "PUT",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#tambahListTransaction')[0].reset();
                    $('#reimbursementTransactionsList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modaltambahlisttransaction').css('display', 'none');
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

        //modal hapuslisttransaction
        var modalhapuslisttransaction = $('.modalhapuslisttransaction');
        var modalhapuslisttransactionopen = $('.modalhapuslisttransactionopen');
        var modalhapuslisttransactionback = $('.modalhapuslisttransactionback');
        var modalhapuslisttransactionclose = $('.modalhapuslisttransactionclose');

        $(modalhapuslisttransactionopen).on('click', function () {
            $('.modalhapuslisttransaction').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalhapuslisttransactionback).on('click', function () {
            $('.modalhapuslisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalhapuslisttransactionclose).on('click', function () {
            $('.modalhapuslisttransaction').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

    </script>
@endsection
