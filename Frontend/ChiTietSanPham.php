<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/chitiet.css">
    <style>
        .sidebar{
            height: 1010px;
        }
        a{
            color:#fff;
        }
    </style>
    
</head>
<body style="background-color:rgba(199, 194, 84, 0.35)" >
    <?php
        include("navbar.php");
    ?>
    <div class="container-fluid">
  
    
    <div class="main my-4">
        <div class="row">
        <?php
            include("connectdb.php");
            $id = $_GET["id"];
            $lenh = "SELECT * FROM products where prd_id = $id";
            $res = mysqli_query($conn,$lenh);
            while( $row = mysqli_fetch_row($res)){
                if ($row[5] > 0) {
                    $hang = "Còn Hàng";
                }else{
                    $hang = "Hết Hàng";
                }
                echo"
                    <form method='post' class=''  method='post' >
                           <div class='row mx-auto'>
                                <div class='text-center col-5 m-5'>
                                    <img class='my-3'  src='pic/SanPham/$row[3]' width='400px' alt='' class='img-sanpham'>
                                    <p >***Lưu Ý: Hình ảnh chỉ mang tính chất minh hoạ. Sản phẩm là đá tự nhiên nên vân đá có thể thay đổi.</p>
                                </div>
                                <div class='col-5 mt-5'>
                                    <div class='text-sanpham'>
                                    <h4 class='mb-4 mt-3' > $row[1]  <span style='color:red'> ($hang)</span> </h4>
                                    <div class='mb-4'>
                                         <p class='m-0' >Mã sản phẩm: $row[2]</p>
                                         <p class='m-0' >Trạng Thái: New </ơ>
                                    </div>
                                    <p class='m-0'><h5>Nôi Dung sản phẩm :</h5> $row[6]</p>
                                    <h5 class=''>Mạng phù hợp: $row[8] </h5>
                                    <hr>
                                    <h5 class='text-center my-3 text-danger'> $row[4] VND</h5>
                                    <div class='text-center'>
                                        <label for='name'>Số Lượng</label>
                                        <input type='number' name='french-hens' id='french-hens' value='1' class='input mx-3'>
                                        <input  type='submit' class='btn btn-danger rounded-pill  mx-3  px-4 ' value='Thêm vào giỏ'>
                                    </div>
                                   


                               
                                </div>
                           
                           </div>
                    </form>
                ";
            };
        
        ?>
        </div>

    </div>
        <div class="row ">
            <div class="col-10 text-center mx-auto">
            <div class="tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a style="color:black" class="nav-link mx-2 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin vận chuyển</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a style="color:black" class="nav-link mx-2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Chính sách hoàn chả</a>
                </li>
            </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane border-0 p-4 fade show active text-left" id="home" role="tabpanel" aria-labelledby="home-tab">
                
            <h4>THÔNG TIN VẬN CHUYỂN </h4>
            <p> Giao hàng</p>
            <p>– Nội thành: Giao từ 1 – 3 ngày; Miễn phí giao hàng trong bán kính 10km</p>
            <p>– Tỉnh khác: Giao từ 5 – 7 ngày; 30.000 VNĐ / đơn</p>
            <p>** Lưu ý: Thời gian nhận hàng có thể thay đổi sớm hoặc muộn hơn tùy theo địa chỉ cụ thể của khách hàng.</p>
            <p>*** Trong trường hợp sản phầm tạm hết hàng, nhân viên CSKH sẽ liên hệ trực tiếp với quý khách để thông báo về thời gian giao hàng.
Nếu khách hàng có yêu cầu về Giấy Kiểm Định Đá, đơn hàng sễ cộng thêm 20 ngày để hoàn thành thủ tục.</p>

            </div>
            <div class="tab-pane border-0 p-4 fade text-left" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>Chính sách hoàn trả</h4>
            <p> – Chúng tôi chấp nhận đổi / trả sản phẩm ngay lúc khách kiểm tra và xác nhận hàng hóa. Chúng tôi cam kết sẽ hỗ trợ và áp dụng chính sách bảo hành tốt nhất tới Quý khách, đảm bảo mọi quyền lợi Quý khách được đầy đủ.</p>
            <p>   – Những trình trạng bể, vỡ do quá trình quý khách sử dụng chúng tôi xin từ chối đổi hàng.</p>
            <p>   – Tùy vào tình hình thực tế của sản phẩm , chúng tôi sẽ cân nhắc hỗ trợ đổi / trả nếu sản phẩm lỗi hoặc các vấn đề liên quan khác.</p>
            <p>   – Chúng tôi nhận bảo hành dây đeo vĩnh viễn dành cho khách hàng nếu tình trạng dây lâu ngày bị giãn nở, cọ sát vớt đá gây đứt dây trong quá trình sử dụng, chi phí vận chuyển xin quý khách vui lòng tự thanh toán.</p>
            </div>
        </div>
            </div>
        </div>
   
    </div>
    </div>
    </div>

    <?php
        include("footer.php");
    ?>
  
         
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>

