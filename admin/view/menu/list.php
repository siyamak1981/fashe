<div class="col-sm-10">
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover text-warning " style="background:#111;">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>عنوان منو</th>
                    <th>سرگروه</th>
                    <th>لینک منو</th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($row as $val) : ?>
                </td>
                <td>
                    <?php echo $val['title']; ?>
                </td>
                <td>
                    <?php if ($val['chid'] == 0) {
                      echo "ندارد";
                    } else {
                      $parent = SelectParentMenu($val['child']);
                      echo $parent;
                    }
                    ?>
                </td>
                <td>
                    <?php echo $val['url']; ?>
                </td>
                <td>
                    <?php echo $val['sort']; ?>
                </td>

                <!-- <td>elit</td> -->
                <td>
                    <?php
                    if ($val['status'] == 0) {
                      echo "<i class='fa fa-bed'></i>";
                    } else {
                      echo "<i class='fa fa-bomb'></i>";
                    }
                    ?>
                </td>
                <td><a href="index.php?c=menu&a=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
                <td><a href="index.php?c=menu&a=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> 