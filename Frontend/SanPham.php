<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/SanPham.css">
    
</head>
<body>
   <?php
        include("sidebar.php");
   ?>

    <div class="top">
        <ul class="pick"> <h3>Loại Sản Phẩm</h3> 
            <div class="icon active1"></div><li>Phong Thủy</li>
            <div class="icon"></div><li>Thời Trang</li>
        </ul>
        <ul class="pick"> <h3>Dòng Sản Phẩm</h3> 
            <div class="icon"></div><li>Cao cấp</li>
            <div class="icon"></div><li>Trung cấp</li>
            <div class="icon"></div><li>Phổ thông</li>
        </ul>
    </div>
    <div class= "container-fluid">

        <div class= "row d-inline-flex ">
           <!-- Gallery Item 1 -->
            <?php
                include("connectdb.php");
                $lenh = "SELECT * FROM products";
                $res = mysqli_query($conn,$lenh);
                while ($row = mysqli_fetch_row($res)){
                    echo "
                        <div class ='mx-auto col-6 col-sm-4 col-md-3 p-2 mt-4' index='$row[0]'>
                            <div class='card h-90'>
                              <a href='ChiTietSanPham.php?id=$row[0]'><img class='card-img-top' src='pic/SanPham/$row[2]'></a> 
                               <p class='card-text text-center'>$row[1]</p>
                               <p>Giá :$row[3] </p>
                               <p>Chiết Khấu :$row[4] </p>
                               <a href='ChiTietSanPham.php?id=$row[0]'><div class='btn btn-primary'>Chi Tiết </div></a>
                            </div>
                         </div>
                    ";
                };
            
            
            ?>
   
        

        </div>
     </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>