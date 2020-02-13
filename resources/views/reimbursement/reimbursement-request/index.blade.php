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
                    <div class="ri2-cell ri2-paddingleft10">
                        Reimbursement Request
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ri2-block ri2-relative ri2-boxpad20 ri2-box ri2-bgwhite2">
        <div class="ri2-table ri2-relative ri2-fullwidth">
            <div class="ri2-cell ri2-vmid">
                <a class="modalbuatrequestopen new-toolbarbutton ri2-inlineblock new-ocean-gradient ri2-font14 ri2-mobilefont12 ri2-semibold ri2-txwhite1 ri2-pointer ri2-hovering"><i
                        class="fas fa-plus-circle"></i> Buat Reimbursement Request</a>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="ri2-block ri2-relative ri2-fullwidth ri2-box ri2-boxpad10">
            <div class="ri2-block ri2-relative new-content-space">
                <div class="ri2-block ri2-relative">
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-shadow"></div>
                    <div class="ri2-absolute ri2-fullwidth ri2-fullheight ri2-bgwhite1 new-content-box-white"></div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div class="ri2-block ri2-relative ri2-overflowauto ri2-paddingbottom20" data-simplebar
                             data-simplebar-auto-hide="false" id="reimbursementRequestList">
                            @include('reimbursement.reimbursement-request.list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reimbursement.reimbursement-request.create')
@endsection
@section('js')
    <script type="text/javascript">
        //select
        $('.basic-single').select2();

        //datatable
        $('.datatable-table').DataTable();

        //date
        $('.datetimepicker').datetimepicker({timepicker :false, format: 'd/m/y'});

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
        $('.noty-button').click(function(e){
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
        $('.noty-button-hapus').click(function(e){
            console.log(hapus);
            e.preventDefault();
            noty(hapus);
        });
        //Buat transaction
        var modalbuatrequest = $('.modalbuatrequest');
        var modalbuatrequestopen = $('.modalbuatrequestopen');
        var modalbuatrequestback = $('.modalbuatrequestback');
        var modalbuatrequestclose = $('.modalbuatrequestclose');

        $(modalbuatrequestopen).on('click',function(){
            $('.modalbuatrequest').css('display','block');
            $('body','html').css('overflow', 'hidden');
        });

        $(modalbuatrequestback).on('click',function(){
            $('.modalbuatrequest').css('display','none');
            $('body','html').css('overflow', 'auto');
        });

        $(modalbuatrequestclose).on('click',function(){
            $('.modalbuatrequest').css('display','none');
            $('body','html').css('overflow', 'auto');
        });

        $('#saveReimbursementRequest').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('reimbursement-requests.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#saveReimbursementRequest')[0].reset();
                    $('#reimbursementRequestList').html(data);
                    $('.datatable-table').DataTable();
                    noty(simpan);
                    $('.modalbuatrequest').css('display', 'none');
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
        // upload multiple

        var $fileInput = $('.ri2-drop-input');
        var $droparea = $('.ri2-drop-area');

        // highlight drag area
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' file dipilih');
            }
        });

    </script>
@endsection
