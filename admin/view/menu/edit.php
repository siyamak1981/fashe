<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3  ">
            <div class="card-header mt-3 mb-2 ">
                <h4><i class='fa fa-edit'></i> ویرایش منو </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان منو<?php echo $res['title']; ?></span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان منو را وارد کنید" value="<?php echo $res['title']; ?>">

                    </div>
                    <span>آدرس منو</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" name="frm[url]" placeholder="لینک منو را وارد کنید" value="<?php echo $res['url']; ?>">
                    </div>

                    <span> سرگروه</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[parent]">
                            <option value="0">سر گروه</option>

                            <?php
                            foreach ($sub as $subs) : ?>
                            <option value='<?php echo $subs['id']; ?>'>
                                <?php echo $subs['title']; ?>
                            </option>;
                            <?php endforeach; ?>
                        </select>


                    </div>
                    <span>نمایش منو</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[sort]" placeholder="ترتیب نمایش" value="<?php echo $res['sort']; ?>">
                    </div>
                    <span>وضعیت نمایش</span>
                    <div class="radio">
                        <label><input type="radio" name="frm[status]" value="1" <?php if ($res['status'] == 1) {
                                                                                    echo 'checked';
                                                                                } ?>> فعال </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="0" name="frm[status]" value="0" <?php if ($res["status"] == 0) {
                                                                                                echo 'checked';
                                                                                            } ?>> غیرفعال </label>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 