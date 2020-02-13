<!--modal modaleditrequest-->
<div class="modaleditrequest ri2-modal ri2-fixed ri2-fullwidth ri2-fullheight">
    <div class="ri2-table ri2-fullwidth ri2-fullheight ri2-relative">
        <div class="ri2-cell ri2-center ri2-vmid ri2-boxpad20 ri2-box">
            <div class="modaleditrequestback ri2-modal-back ri2-absolute ri2-fullwidth ri2-fullheight"></div>
            <div class="ri2-modal-content ri2-relative new-modal-content">
                <div class="ri2-modal-body ri2-block ri2-relative ri2-bgwhite1 ri2-marginbottom15 ri2-borderradius2 ri2-overflowhidden">
                    <div class="ri2-block ri2-relative ri2-left new-blackoutgradient ri2-txwhite1 ri2-font20 ri2-boxpad10 ri2-box">
                        Edit Reimbursement Request
                    </div>
                    <div class="ri2-block ri2-relative ri2-boxpad40 ri2-mobileboxpad20 ri2-box">
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Transaction ID
                            </div>
                            <div class="ri2-block ri2-relative">
                                <input type="number" class="ri2-input40 ri2-paddingleft10 ri2-paddingright10 ri2-box ri2-bgwhite2 ri2-borderradius2 ri2-borderfull1 ri2-borderwhite5 ri2-fullwidth ri2-input-greyholder ri2-font14" placeholder="0">
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                ID Employee
                            </div>
                            <div class="ri2-block ri2-relative">
                                <select class="basic-single ri2-block ri2-relative ri2-input40 ri2-input-greyholder ri2-box ri2-bgwhite4 ri2-fullwidth" name="select">
                                    <option value="" selected>Pilih ID Employee</option>
                                    <option value="JKT">ID Employee 1</option>
                                    <option value="SBY">ID Employee 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Reimbursement
                            </div>
                            <div class="ri2-block ri2-relative">
                                <select class="basic-single ri2-block ri2-relative ri2-input40 ri2-input-greyholder ri2-box ri2-bgwhite4 ri2-fullwidth" name="select">
                                    <option value="" selected>Pilih Reimbursement</option>
                                    <option value="JKT">Reimbursement 1</option>
                                    <option value="SBY">Reimbursement 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Tanggal efektif
                            </div>
                            <div class="ri2-block ri2-relative">
                                <input type="text" class="ri2-input40 ri2-box ri2-fullwidth ri2-paddingleft10 ri2-paddingright10 ri2-bgwhite2 ri2-borderradius2 ri2-borderfull1 ri2-borderwhite5 form-control diss datetimepicker" autocomplete="off" name="time" id="time2" placeholder="YYYY/MM/DD H:M" maxlength="20" required >
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Keterangan
                            </div>
                            <div class="ri2-block ri2-relative">
                                <textarea class="ri2-textarea100 ri2-boxpad10 ri2-box ri2-font14 ri2-txblack3 ri2-fullwidth ri2-bgwhite2 ri2-borderfull1 ri2-borderwhite5 ri2-borderradius2 ri2-noresize" placeholder="Masukan Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Upload
                            </div>
                            <div class="ri2-block ri2-relative">
                                <div class="ri2-flex ri2-relative ri2-drop-area ri2-bgwhite1 ri2-box ri2-borderradius2 ri2-overflowhidden ri2-borderfull1 ri2-borderwhite4 ri2-boxpad3">
                                    <span class="ri2-drop-btn ri2-bgwhite4 ri2-txblack3 ri2-font14 ri2-pointer ri2-paddingleft10 ri2-paddingright10 ri2-marginright10 ri2-borderfull1 ri2-borderwhite5"><i class="fas fa-cloud-upload-alt"></i> Upload</span>
                                    <span class="ri2-drop-msg ri2-font14 ri2-txblack3 ri2-breakall">Klik atau drop disini</span>
                                    <input class="ri2-drop-input ri2-absolute ri2-fullwidth ri2-fullheight ri2-pointer" type="file" id="upload" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-marginbottom20 ri2-left">
                            <div class="ri2-block ri2-relative ri2-marginbottom5 ri2-font14 ri2-txgrey1 ri2-semibold">
                                Terlampir
                            </div>
                            <div class="ri2-block ri2-relative">
                                <a class="ri2-inlineblock ri2-txwhite1 ri2-font14 new-lightbluegradient2 ri2-boxpad7 ri2-paddingbottom10 ri2-relative ri2-borderradius5 ri2-marginbottom3">
                                    <div class="ri2-inlineblock ri2-relative ri2-vmid new-attachment ri2-ellipsis"><i class="fas fa-file-download ri2-marginright5"></i>Lampiran 1</div>
                                    <div class="ri2-inlineblock ri2-vmid ri2-relative ri2-linkhover ri2-pointer">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                </a>
                                <a class="ri2-inlineblock ri2-txwhite1 ri2-font14 new-lightbluegradient2 ri2-boxpad7 ri2-paddingbottom10 ri2-relative ri2-borderradius5 ri2-marginbottom3">
                                    <div class="ri2-inlineblock ri2-relative ri2-vmid new-attachment ri2-ellipsis"><i class="fas fa-file-download ri2-marginright5"></i>Lampiran 2 yan deskripsinya panjang</div>
                                    <div class="ri2-inlineblock ri2-vmid ri2-relative ri2-linkhover ri2-pointer">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="ri2-block ri2-relative ri2-left ri2-margintop20">
                            <button class="noty-button modaleditrequestclose ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgblue1 ri2-txwhite1 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">Simpan</button>
                            <button class="modaleditrequestclose ri2-inlineblock ri2-bordernone ri2-borderradius2 ri2-boxpad7 ri2-paddingright15 ri2-paddingleft15 ri2-bgwhite5 ri2-txblack3 ri2-hovering ri2-font16 ri2-semibold ri2-pointer">Batal</button>
                        </div>
                    </div>
                </div>
                <div class="ri2-block ri2-relative ri2-center">
                    <div class="modaleditrequestclose ri2-inlineblock ri2-relative ri2-modal-close ri2-txwhite1 ri2-semibold ri2-font18 ri2-pointer ri2-linkhoveryellow1">
                        <i class="fas fa-times-circle"></i> Tutup
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal modaleditrequest-->
