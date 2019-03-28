<section class="col-sm-10" style="background:black;float:left;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>ویزایش خبر</h4>
            </div>

            <div class="card-body">
                <form method="post" role="form" enctype="multipart/form-data" action="index.php?c=newcat&a=edit&id=<?php echo $newcat_showedit['id']; ?>">
                    <span>عنوان خبر</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" value="<?php echo $newcat_showedit['title']; ?>" placeholder="عنوان خبر را وارد کنید">

                    </div>

                    <span> دسته بندی</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[chid]">
                            <option value='0'>سرگروه</option>";
                            <?php foreach ($newmaincat_list as $val) : ?>
                            <option value='<?php echo $val['id']; ?>'><?php echo $val['title']; ?></option>";
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn mr-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 