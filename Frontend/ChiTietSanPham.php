<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/mainSanPham.css">
    <style>
        .sidebar{
            height: 1000px;
        }
    </style>
    
</head>
<body>
    <?php
        include("sidebar.php");    
    ?>

   
    <h1 class="text-center mb-5 " style="font-size:100px">Chi tiết sản phẩm</h1>
    <div class="main " height='85%'>
    <?php
            include("connectdb.php");
            $id = $_GET["id"];
            $lenh = "SELECT * FROM products where prd_id = $id";
            $res = mysqli_query($conn,$lenh);
            while( $row = mysqli_fetch_row($res)){
                echo"
                    <form method='post' class=''  method='post' >
                           <div class='row'>
                                <div class='col-5 ml-5'><img class='' src='pic/SanPham/$row[2]' width='550px' alt='' class='img-sanpham'></div>
                                <div class='col-6'>
                                    <div class='text-sanpham'>
                                    <h1 class='my-4' >Sản Phẩm $row[1]</h1>
                                    <h3 class='my-4' >Mã sản phẩm: SP001048-TCCB-2</h3>
                                    <h4 class='my-4'>Tồn  kho $row[4]</h4>
                                    <h4 class='my-4'>NỘI DUNG SẢN PHẨM:</h4>
                                    <h4 class='my-4'>MẠNG PHÙ HỢP: <p class='element'>HỎA - THỔ</p> </h4>
                                    <hr>
                                    <h2>Giá Tiền : $row[3]</h2>
                                     
                                    <div>
                                        <label for='name'>Số Lượng</label>
                                        <input type='number' name='french-hens' id='french-hens' value='1' class='input'>
                                    </div>
                                    <input  type='submit' class='btn btn-danger  px-5 my-4' value='Thêm vào giỏ'>


                               
                                </div>
                           
                           </div>
                    </form>
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