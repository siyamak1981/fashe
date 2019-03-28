

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keyword" content="FlatLab, index, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="stylesheet" type="text/css" media="screen" href="../public/admin/css/dashbord.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../public/admin/css/addmenu.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../public/admin/css/hover-box.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../public/admin//css/bootstrap.min.css">
  <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning  ">
    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <a class="navbar-brand ml-4" href="#"><i class="fa fa-home"></i></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">طراحی وبسایت <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> فروشگاه اینترنتی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-sign-out"></i></a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <aside class="col-sm-2" style="background-color:#111111;height:1000px;">
        <div class="bibi" style="height:800px;">
          <!-- <div>
          </div> -->
          <div class="media ">
            <img src="../public/admin/images/siyamak.jpg" class="mx-auto m-5 rounded-circle" style="width:70px">
          </div>
          <div class="p-2 border bg-warning pl-5"></div>

          <div class="list-group">
            <a href="index.php?c=index&a=index" class="list-group-item "><i class="fa fa-index"></i>صفحه اصلی</a>
            <!-- submenue -->
            <a data-toggle="collapse" class="list-group-item" href="#collapse1">
           <i class="fa fa-cogs"></i>مدیریت منوها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse1" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=menu&a=list"><li class="list-group-item">لیست منو ها</li></a>
             <a class = "bibiten" href ="index.php?c=menu&a=add"><li class="list-group-item">افزودن منو های جدید</li></a>
           </ul>
         </div>
        <!-- submenue -->
        <a data-toggle="collapse" class="list-group-item" href="#collapse2">
          <i class="fa fa-car"></i>  محصولات<i class="fa fa-caret-down " style="float:left;"></i></a>
        <div id="collapse2" class="panel-collapse collapse">
          <ul class="list-group">
            <a class = "bibiten" href ="index.php?c=pro&a=list"><li class="list-group-item">لیست محصولات </li></a>
            <a class = "bibiten" href ="index.php?c=pro&a=add"><li class="list-group-item">افزودن محصول</li></a>
          </ul>
        </div>
        <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse5">
           <i class="fa fa-list"></i> دسته بندی محصولات<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse5" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=procat&a=list"><li class="list-group-item">لیست  دسته بندی</li></a>
             <a class = "bibiten" href ="index.php?c=procat&a=add"><li class="list-group-item">افزودن دسته بندی</li></a>
           </ul>
         </div>
                  <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse4">
           <i class="fa fa-list"></i>دسته بندی خبرها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse4" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=newcat&a=list"><li class="list-group-item">لیست خبر ها</li></a>
             <a class = "bibiten" href ="index.php?c=newcat&a=add"><li class="list-group-item">افزودن خبر های جدید</li></a>
           </ul>
         </div>
                 <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse3">
            <i class="fa fa-cogs"></i> خبر ها<i class="fa fa-caret-down " style="float:left;"></i></a>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <a class = "bibiten" href ="index.php?c=news&a=list"><li class="list-group-item">لیست اخبار </li></a>
              <a class = "bibiten" href ="index.php?c=news&a=add"><li class="list-group-item">افزودن خبر جدید</li></a>
            </ul>
          </div>
        <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse6">
           <i class="fa fa-list"></i> تماسها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse6" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=contact&a=list"><li class="list-group-item">لیست  تماسها</li></a>
           
           </ul>
         </div>
         <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse7">
           <i class="fa fa-list"></i>مدیریت ویجت<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse7" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=widget&a=list"><li class="list-group-item">لیست  ویجت</li></a>
             <a class = "bibiten" href ="index.php?c=widget&a=add"><li class="list-group-item">افزودن ویجت جدید</li></a>
           </ul>
         </div>
         <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse8">
           <i class="fa fa-cogs"></i>تنظیمات وب<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse8" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=settings&a=edit"><li class="list-group-item">ویرایش تنطیمات</li></a>
            </ul>
          </div>
          
             <!-- submenue -->
            <a data-toggle="collapse" class="list-group-item" href="#collapse9">
           <i class="fa fa-list"></i>مدیریت صفحه<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse9" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="index.php?c=page&a=list"><li class="list-group-item">لیست صفحه</li></a>
             <a class = "bibiten" href ="index.php?c=page&a=add"><li class="list-group-item">افزودن صفحه جدید</li></a>
           </ul>
         </div>
         </div>
     </div>
      </aside>
</body>

<script src="../public/admin/js/jquery-3.2.1.slim.min.js"></script>
<script src="../public/admin/js/popper.min.js"></script>
<script src="../public/admin/js/bootstrap.min.js"></script>

</html>