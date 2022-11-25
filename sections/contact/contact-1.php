<section class="contact_one">
    <div class="mc-container">
        <div class="titl-contact-sec-1">
            <?php echo "Liên hệ quảng cáo" ?>
        </div>
        <div class="form-contact-sec-1">
            <form id="formContactPage" name="formContactPage" class="form-tag-sec-1 formContactPage">
                <div class="mc-row mc-mg--15">
                    <div class="mc-ctf-sec-1 mc-col-6 mc-pdx-15">
                        <label for="hoTen">Họ và tên:</label>
                        <div class="mc-inpt-st">
                            <input type="text" name="hoTen" id="hoTen" />
                            <p class="nameVal">Bạn chưa điền họ và tên</p>
                        </div>
                    </div>
                    <div class="mc-ctf-sec-1 mc-col-6 mc-pdx-15">
                        <label for="sdtMc">Số điện thoại:</label>
                        <div class="mc-inpt-st">
                            <input type="number" name="sdtMc" id="sdtMc" />
                            <p class="phoneVal">Bạn chưa điền số điện thoại</p>
                        </div>
                    </div>
                    <div class="mc-ctf-sec-1 mc-col-12 mc-pdx-15">
                        <label for="emailMc">Email:</label>
                        <div class="mc-inpt-st">
                            <input type="text" name="emailMc" id="emailMc" />
                        </div>
                    </div>
                    <div class="mc-ctf-sec-1 mc-col-12 mc-pdx-15">
                        <label for="contentMc">Nội dung:</label>
                        <div class="mc-inpt-st">
                            <textarea name="contentMc" id="contentMc"></textarea>
                        </div>
                    </div>
                </div>
                <div class="inp-sub-mc">
                    <?php $url      = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];$validURL = str_replace("&", "&amp", $url);?>
                    <input type="hidden" id="url" class="" value="<?php echo $validURL;?>" name="Url_Register" />
                    <input type="hidden" id="ngay_dang_ky" class="" value="<?php echo date("G:i - d/m/Y");?>" name="Date" />
                    <input type="submit" class="btn-inp-sub-mc" value="Gửi"/>
                </div>
            </form>
        </div>
    </div>
</section>