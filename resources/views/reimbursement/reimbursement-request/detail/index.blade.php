@extends('layouts.reimbursement.app')
@section('css')
    <style type="text/css">
        .select2 {
            min-width: 100%;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #dfe4ea;
            border-radius: 2px;
            background-color: #fbfbfb;
        }
    </style>
@endsection
@section('content')
    <div class="content-header ri2-block ri2-bgwhite1 ri2-paddingleft20 ri2-paddingright20">
        <div class="ri2-table ri2-fullwidth ri2-fullheight">
            <div class="ri2-cell ri2-vmid ri2-fit ri2-paddingright10">
                <div class="ri2-table ri2-font18 ri2-semibold">
                    <div class="ri2-cell ri2-paddingright10 ri2-borderright1 ri2-bordergrey2">
                        <a href="{{url('reimbursement-requests')}}" class="ri2-tooltip ri2-nowrap ri2-relative"><span
                                class="ri2-righttooltiptext">Halaman Sebelum</span><i
                                class="fas fa-chevron-circle-left ri2-txblack5 ri2-linkhover"></i></a>
                    </div>
                    <div class="ri2-cell ri2-paddingleft10">
                        Reimbursement Request Detail
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box ri2-bgwhite2">
        <div class="ri2-table ri2-relative ri2-fullwidth">
            <div class="ri2-cell ri2-vmid ri2-right">
                <button
                    class="modaleditrequestopen new-ba-toolbar ri2-inlineblock ri2-vmid ri2-circle ri2-borderfull1 ri2-bordergreen1 ri2-circle ri2-bgwhite1 ri2-txblack3 ri2-center ri2-font16 ri2-nopadding ri2-pointer ri2-tooltip ri2-relative ri2-nowrap ri2-linkhover">
                    <span class="ri2-lefttooltiptext ri2-normal ri2-linenormal">Edit Reimbursement Request</span><i
                        class="fas fa-pen"></i>
                </button>
                <a
                    class="modalhapusrequestopen new-ba-toolbar ri2-inlineblock ri2-vmid ri2-circle ri2-borderfull1 ri2-bordergreen1 ri2-circle ri2-bgwhite1 ri2-txblack3 ri2-center ri2-font16 ri2-nopadding ri2-pointer ri2-tooltip ri2-relative ri2-nowrap ri2-linkhover"
                    data-id="{{ $reimbursementRequest->id }}" data-name="{{ $reimbursementRequest->name }}">
                    <span class="ri2-lefttooltiptext ri2-normal ri2-linenormal">Hapus Reimbursement Request</span><i
                        class="fas fa-times"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="content-body">

        <div class="ri2-block ri2-relative ri2-fullwidth ri2-box ri2-boxpad10">
            <div class="ri2-block ri2-relative new-content-cellspace">
                <div class="ri2-block ri2-relative">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative">
                        <div class="ri2-block ri2-font16 ri2-txblack5 ri2-semibold ri2-bgwhite3 ri2-boxpad7">
                            Progress
                        </div>
                    </div>
                    <div class="ri2-block ri2-relative ri2-boxpad20">
                        <div class="ri2-block ri2-relative ri2-overflowauto">
                            <ul class="SteppedProgress">
                                <li class="complete">
                                    <div class="status-paket">Request Submit
                                        <div class="ri2-bold">{{ $reimbursementRequest->user->name }}</div>
                                    </div>
                                    <div class="image-status true step-status"><i class="fas fa-check"></i></div>
                                </li>
                                <li class="process">
                                    <div class="status-paket">Waiting Approval
                                        <div class="ri2-bold">Rick Grimes</div>
                                        <span>2 Hari 3 Jam</span></div>
                                    <div class="image-status true step-status"><i
                                            class="fas fa-circle-notch ri2-spinning"></i></div>
                                </li>
                                <li class="undone">
                                    <div class="status-paket">Selesai</div>
                                    <div class="image-status true step-status"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ri2-flex ri2-relative ri2-cell-end1">
                <div class="ri2-flex1 ri2-relative ri2-vtop new-content-cellspace ri2-box ri2-cell-end1">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative">
                        <div class="ri2-block ri2-font16 ri2-txblack5 ri2-semibold ri2-bgwhite3 ri2-boxpad7">
                            List Benefit
                        </div>
                    </div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div class="ri2-block ri2-relative ri2-marginbottom20">
                            <a class="modaltambahbenefitopen new-toolbarbutton ri2-inlineblock new-ocean-gradient ri2-font14 ri2-mobilefont12 ri2-semibold ri2-txwhite1 ri2-pointer ri2-hovering"><i
                                    class="fas fa-plus-circle"></i> Tambah Benefit</a>
                        </div>
                        <div class="ri2-block ri2-relative ri2-overflowauto ri2-paddingbottom20" data-simplebar
                             data-simplebar-auto-hide="false" id="reimbursementRequestBenefitList">
                            @include('reimbursement.reimbursement-request.detail.list')
                        </div>
                    </div>
                </div>
                <div class="ri2-block ri2-relative ri2-vtop new-content-cellspace ri2-box ri2-cell-end1"
                     style="width: 400px;">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative">
                        <div class="ri2-block ri2-font16 ri2-txblack5 ri2-semibold ri2-bgwhite3 ri2-boxpad7">
                            Detail Reimbursement Request
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
                                    {{ $reimbursementRequest->id }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Transaction Id
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementRequest->transaction }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    ID Employee
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementRequest->user->nik }} {{ $reimbursementRequest->user->name }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Reimbursement
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementRequest->reimbursement->name ?? '' }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Keterangan
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{ $reimbursementRequest->description ?? '' }}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    Tanggal Efektif
                                </div>
                                <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                    {{$reimbursementRequest->effective_date}}
                                </div>
                            </div>
                            <div class="ri2-row">
                                <div class="ri2-cell ri2-vtop ri2-fit ri2-boxpad10 ri2-box">
                                    File Upload
                                </div>
                                @if($reimbursementRequest->file_upload)
                                    <?php $i = 0; ?>
                                    @foreach(unserialize($reimbursementRequest->file_upload) as $file)
                                        <div class="ri2-cell ri2-vtop ri2-boxpad10 ri2-box">
                                            <a href="{{ asset('files/uploads/'.$file) }}" target="_blank"
                                               class="ri2-inlineblock ri2-txwhite1 ri2-font14 new-lightbluegradient2 ri2-boxpad7 ri2-paddingbottom10 ri2-relative ri2-borderradius5 ri2-marginbottom3">
                                                <div
                                                    class="ri2-inlineblock ri2-relative ri2-vmid new-attachment ri2-ellipsis">
                                                    <i class="fas fa-file-download ri2-marginright5"></i>Lampiran {{ ++$i }}
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        @if($reimbursementRequest->user->role == 'admin')
                            <div class="ri2-block ri2-relative ri2-margintop40" style="display: block ruby;">
                                <form method="post"
                                      action="{{url("reimbursement-requests/$reimbursementRequest->id/approve")}}"
                                      enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="status" value="2">
                                    <button
                                        class="ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgblue1 ri2-txwhite1 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">
                                        Setuju
                                    </button>
                                </form>
                                <form method="post"
                                      action="{{url("reimbursement-requests/$reimbursementRequest->id/approve")}}"
                                      enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="status" value="1">
                                    <button
                                        class="ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgyellow1 ri2-txblack3 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">
                                        Tidak Setuju
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reimbursement.reimbursement-request.detail.create-benefit')
    @include('reimbursement.reimbursement-request.detail.delete-benefit')
    @include('reimbursement.reimbursement-request.detail.edit')
    @include('reimbursement.reimbursement-request.detail.delete')
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
        var modaleditrequest = $('.modaleditrequest');
        var modaleditrequestopen = $('.modaleditrequestopen');
        var modaleditrequestback = $('.modaleditrequestback');
        var modaleditrequestclose = $('.modaleditrequestclose');

        $(modaleditrequestopen).on('click', function () {
            $('.modaleditrequest').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaleditrequestback).on('click', function () {
            $('.modaleditrequest').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaleditrequestclose).on('click', function () {
            $('.modaleditrequest').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        //modal hapusrequest
        var modalhapusrequest = $('.modalhapusrequest');
        var modalhapusrequestopen = $('.modalhapusrequestopen');
        var modalhapusrequestback = $('.modalhapusrequestback');
        var modalhapusrequestclose = $('.modalhapusrequestclose');

        $(modalhapusrequestopen).on('click', function () {
            $('#reimbursementRequestDeleteName').html($(this).data('name'));
            $('#reimbursementRequestDeleteId').val($(this).data('id'));
            $('.modalhapusrequest').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalhapusrequestback).on('click', function () {
            $('.modalhapusrequest').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalhapusrequestclose).on('click', function () {
            $('.modalhapusrequest').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });


        //modal modaltambahbenefit
        var modaltambahbenefit = $('.modaltambahbenefit');
        var modaltambahbenefitopen = $('.modaltambahbenefitopen');
        var modaltambahbenefitback = $('.modaltambahbenefitback');
        var modaltambahbenefitclose = $('.modaltambahbenefitclose');

        $(modaltambahbenefitopen).on('click', function () {
            $('.modaltambahbenefit').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modaltambahbenefitback).on('click', function () {
            $('.modaltambahbenefit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modaltambahbenefitclose).on('click', function () {
            $('.modaltambahbenefit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#saveBenefit').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url("reimbursement-requests/$reimbursementRequest->id/saveDetail") }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": $('#name').val(),
                    "requestAmount": $('#requestAmount').val(),
                    'paidAmount': $('#paidAmount').val() ? $('#paidAmount').val() : 0,
                    'description': $('#description').val()
                },
                success: function (data) {
                    $('#saveBenefit')[0].reset();
                    $('#reimbursementRequestBenefitList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modaltambahbenefit').css('display', 'none');
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
        //modal hapusbenefit
        var modalhapusbenefit = $('.modalhapusbenefit');
        var modalhapusbenefitopen = $('.modalhapusbenefitopen');
        var modalhapusbenefitback = $('.modalhapusbenefitback');
        var modalhapusbenefitclose = $('.modalhapusbenefitclose');

        $(document).on("click", ".modalhapusbenefitopen", function () {
            $('#nameBenefit').html($(this).attr('data-name'));
            $('#idBenefit').val($(this).attr('data-id'));
            $('.modalhapusbenefit').css('display', 'block');
            $('body', 'html').css('overflow', 'hidden');
        });

        $(modalhapusbenefitback).on('click', function () {
            $('.modalhapusbenefit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $(modalhapusbenefitclose).on('click', function () {
            $('.modalhapusbenefit').css('display', 'none');
            $('body', 'html').css('overflow', 'auto');
        });

        $('#deleteBenefit').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ url("reimbursement-requests/$reimbursementRequest->id/destroyDetail") }}/" + $('#idBenefit').val(),
                type: "delete",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    $('#reimbursementRequestBenefitList').html(data);
                    $('.datatable-table').DataTable();
                    noty(hapus);
                    $('.modalhapusbenefit').css('display', 'none');
                    $('body', 'html').css('overflow', 'auto');
                }
            })
        });
    </script>

@endsection
