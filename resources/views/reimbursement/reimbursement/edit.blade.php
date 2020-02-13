<!--modal modalReimbursementEdit-->
<div class="modalReimbursementEdit ri2-modal ri2-fixed ri2-fullwidth ri2-fullheight">
    <div class="ri2-table ri2-fullwidth ri2-fullheight ri2-relative">
        <div class="ri2-cell ri2-center ri2-vmid ri2-boxpad20 ri2-box">
            <div class="modalReimbursementEditBack ri2-modal-back ri2-absolute ri2-fullwidth ri2-fullheight"></div>
            <div class="ri2-modal-content ri2-relative new-modal-content">
                <div
                    class="ri2-modal-body ri2-block ri2-relative ri2-bgwhite1 ri2-marginbottom15 ri2-borderradius2 ri2-overflowhidden">
                    <div
                        class="ri2-block ri2-relative ri2-left new-blackoutgradient ri2-txwhite1 ri2-font20 ri2-boxpad10 ri2-box">
                        Edit Reimbursement
                    </div>
                    <form method="post" id="editReimbursement" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="reimbursementEditId" name="id">
                        <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                            <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                                <div
                                    class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                    Judul
                                </div>
                                <div class="ri2-block ri2-relative">
                                    <input type="text"
                                           class="ri2-input40 ri2-paddingleft10 ri2-paddingright10 ri2-box ri2-bgwhite2 ri2-borderradius2 ri2-borderfull1 ri2-borderwhite5 ri2-fullwidth ri2-input-greyholder ri2-font14"
                                           placeholder="Judul Reimbursement" name="name" id="editName" required>
                                </div>
                            </div>
                            <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                                <div
                                    class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                    Limit
                                </div>
                                <div class="ri2-block ri2-relative">
                                    <div
                                        class="ri2-table ri2-relative ri2-fullwidth ri2-borderradius2 ri2-overflowhidden">
                                        <div class="ri2-cell new-leftvalue ri2-vmid ri2-fit">
                                            <div
                                                class="ri2-block ri2-relative ri2-paddingleft10 ri2-paddingright10 ri2-box ri2-bgwhite1 ri2-borderfull1 ri2-borderwhite5 ri2-txblack3 ri2-font14">
                                                Rp.
                                            </div>
                                        </div>
                                        <div class="ri2-cell ri2-vmid">
                                            <input type="number"
                                                   class="ri2-input40 ri2-paddingleft10 ri2-paddingright10 ri2-box ri2-bgwhite2 ri2-borderfull1 ri2-borderwhite5 ri2-fullwidth ri2-input-greyholder ri2-font14"
                                                   placeholder="00" name="limit" id="editLimit" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                                <div
                                    class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                    Expired Pada
                                </div>
                                <div class="ri2-block ri2-relative">
                                    <input type="text"
                                           class="ri2-input40 ri2-box ri2-fullwidth ri2-paddingleft10 ri2-paddingright10 ri2-bgwhite2 ri2-borderradius2 ri2-borderfull1 ri2-borderwhite5 form-control diss datetimepicker"
                                           autocomplete="off" name="expired" id="editExpired" placeholder="YYYY/MM/DD H:M"
                                           maxlength="20" required>
                                </div>
                            </div>
                            <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                                <div
                                    class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                    Tanggal efektif
                                </div>
                                <div class="ri2-block ri2-relative">
                                    <input type="text"
                                           class="ri2-input40 ri2-box ri2-fullwidth ri2-paddingleft10 ri2-paddingright10 ri2-bgwhite2 ri2-borderradius2 ri2-borderfull1 ri2-borderwhite5 form-control diss datetimepicker"
                                           autocomplete="off" name="effective_date" id="editEffectiveDate"
                                           placeholder="YYYY/MM/DD H:M"
                                           maxlength="20" required>
                                </div>
                            </div>
                            <div class="ri2-block ri2-relative ri2-left ri2-margintop20">
                                <input type="submit"
                                       class="ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgblue1 ri2-txwhite1 ri2-hovering ri2-font16 ri2-semibold ri2-pointer"
                                       value='Simpan'>
                                <button
                                    class="modalReimbursementEditClose ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgwhite5 ri2-txblack3 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ri2-block ri2-relative ri2-center">
                    <div
                        class="modalReimbursementEditClose ri2-inlineblock ri2-relative ri2-modal-close ri2-txwhite1 ri2-semibold ri2-font18 ri2-pointer ri2-linkhoveryellow1">
                        <i class="fas fa-times-circle"></i> Tutup
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal modalReimbursementEdit-->
