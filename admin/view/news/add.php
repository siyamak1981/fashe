

<section class="col-sm-10" style="background:black;float:left;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن خبر جدید </h4>
            </div>

            <div class="card-body">
                <form method="post" role="form" enctype="multipart/form-data" action="index.php?c=news&a=add ">
                    <span>عنوان خبر</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان خبر را وارد کنید">

                    </div>


                    <span> دسته بندی</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[newcat_id]">
                            <option value="0">دسته بندی </option>
                            <?php
                          
                            foreach ($newcat_list as $val) {
                                echo "<option value='$val[id]'>$val[title]</option>";
                            }

                            ?>
                        </select>

                        <div class="input-group-lg input-group mt-3">


                            <span>توضیحات محصول</span>
                        </div>
                        <textarea type="text" id = "editor1" class="form-control input-lg " style="width:500" name="frm[body]" placeholder="توضیحات محصول"> 
                            </textarea>
                            <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="img" class="form-control-file bg-warning" id="exampleFormControlFile1">
            </div>
    <!-- </div> -->
    <div class="form-group">
        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn mr-3">
    </div>
    </form>
</div>
</div>
</div>
</section>
                   


