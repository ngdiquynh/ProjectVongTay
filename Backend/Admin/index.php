<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý nhân viên</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- JQuery UI -->
    <link rel="stylesheet" href="css/jquery-ui.min.css" />

    <!-- Animate -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <!-- My CSS -->
    <link rel="stylesheet" href="css/modal.css" />

    <link rel="stylesheet" href="css/style4.css" />

    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php
        include("sidebar.php");
      ?>

      <!-- Page Content Holder -->
      <div id="content">
  
        <h1 class="text-center text-title-Don text-light">BookStore Admin</h1>
        <div class="container">
            <h4> <i class="fa fa-universal-access"></i> Chức Năng </h4>
            <div class="row">
              <div class="col-3 text-center">
                <a href="UserInfo.php"><img class='my-5' src="images/33442_user_256x256.png" alt=""></a>
                <a href="UserInfo.php" class='h5 text-center '>Thông tin Khách Hàng</a>
              </div>
              <div class="col-3 text-center">
                <a href="SanPhamAdmin.php"><img class='my-5' src="images/icon-256x256.png" alt=""></a>
                <a href="SanPhamAdmin.php" class='h5 text-center '>Quản Lí Sản Phẩm</a>
              </div>
              <div class="col-3 text-center">
                <a href="Order.php"><img class='my-5' src="images/shopping_cart_full.png" alt=""></a>
                <a href="Order.php" class='h5 text-center '>Quản lí Đơn Hàng</a>
              </div>
              <div class="col-3 text-center">
                <a href="AdminInfo.php"><img class='my-5' src="images/administrator_woman2.png" alt=""></a>
                <a href="AdminInfo.php" class='h5 text-center '>Thông tin Cá Nhân</a>
              </div>
            </div>
        </div>
        </div>
    </div>  

    <!-- Bootstrap -->
    <script src='js/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- Date Picker -->
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/Product.js"></script>





    <!-- <script src="js/modal.js"></script> -->

    <script type="text/javascript">
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
        });
      });
 

    </script>
    
      
    </script>

  </body>
</html>
