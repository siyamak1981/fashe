

<div class="col-sm-10">
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover text-warning " style="background:#111;">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
              
                <th>دسته بندی</th>
                <th> نمایش</th>
                <th>Edit</th>
                <th>Delete</th>
                
                </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($procat as $value) : ?>
        <tr>
          <td><?php echo $value['title']; ?></td>
        </td>
       
          <td><a href="#"><i class='fa fa-list'></i></a></td>
          <td><a href="index.php?c=procat&a=edit&id=<?php echo $value['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="index.php?c=procat&a=delete&id=<?php echo $value['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
                    
                    
                    

   
    