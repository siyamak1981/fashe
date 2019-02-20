

<div class="col-sm-10">
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover text-warning " style="background:#111;">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
              
                <th> عنوان محصول</th>
                <th> تعداد</th>
                <th> قیمت </th>
                <th> تصویر</th>
                <th>Edit</th>
                <th>Delete</th>
                
                </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($pro as $value) : ?>
        <tr>
          <td><?php echo $value['title']; ?></td>
          <td><?php echo $value['count']; ?></td>
          <td><?php echo $value['price']; ?></td>
          <td><img width= 40 src= "<?php echo $value['image1']; ?>"></td>
        </td>
       
          <td><a href="index.php?c=pro&a=edit&id=<?php echo $value['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="index.php?c=pro&a=delete&id=<?php echo $value['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
                    
                    
                    

   
    