<!--modal modaleditlisttransaction-->
<div class="modaleditlisttransaction ri2-modal ri2-fixed ri2-fullwidth ri2-fullheight">
    <div class="ri2-table ri2-fullwidth ri2-fullheight ri2-relative">
        <div class="ri2-cell ri2-center ri2-vmid ri2-boxpad20 ri2-box">
            <div class="modaleditlisttransactionback ri2-modal-back ri2-absolute ri2-fullwidth ri2-fullheight"></div>
            <div class="ri2-modal-content ri2-relative new-modal-content">
                <div
                    class="ri2-modal-body ri2-block ri2-relative ri2-bgwhite1 ri2-marginbottom15 ri2-borderradius2 ri2-overflowhidden">
                    <div
                        class="ri2-block ri2-relative ri2-left new-blackoutgradient ri2-txwhite1 ri2-font20 ri2-boxpad10 ri2-box">
                        Edit List Transaction
                    </div>
                    <form method="post" id="editListTransaction" class="form-horizontal"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                            <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                                <div
                                    class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                    ID Employee
                                </div>
                                <div class="ri2-block ri2-relative">
                                    <select
                                        class="basic-single ri2-block ri2-relative ri2-input40 ri2-input-greyholder ri2-box ri2-bgwhite4 ri2-fullwidth"
                                        name="user_id" style="width: 100%;">
                                        <option value="" selected>Pilih ID Employee</option>
                                        @foreach($employee as $id => $employees)
                                            <option value="{{ $id }}">{{ $employees }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ri2-block ri2-relative ri2-left ri2-margintop20">
                                <input type="submit"
                                       class="ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgblue1 ri2-txwhite1 ri2-hovering ri2-font16 ri2-semibold ri2-pointer"
                                       value='Ubah'>
                                <button
                                    class="modaleditlisttransactionclose ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgwhite5 ri2-txblack3 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ri2-block ri2-relative ri2-center">
                    <div
                        class="modaleditlisttransactionclose ri2-inlineblock ri2-relative ri2-modal-close ri2-txwhite1 ri2-semibold ri2-font18 ri2-pointer ri2-linkhoveryellow1">
                        <i class="fas fa-times-circle"></i> Tutup
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal modaleditlisttransaction-->
