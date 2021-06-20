<?php
     $mysqli = new mysqli("127.0.0.1", "root", "","data") or die(mysqli_error($mysqli));
    
     if (isset($_POST['add'])){
        $id = $_POST['id'];
        $tenSp = $_POST['tenSp'];
        $MaSp = $_POST['MaSp'];
        $Gia = $_POST['Gia'];
        $SL = $_POST['SoLuongSp'];
        $Menh  = $_POST['Menh'];
        $brandid = $_POST['brandid'];
        $target_dir ="images/";
        $filename =$_FILES["images"]["name"];
        $target_file = $target_dir .basename($_FILES["images"]["name"]);
        move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
        $mota = $_POST['mota'];
        $mysqli->query("INSERT INTO products(prd_id,prd_name,MaSP,images,price,quantity,descriptions,brand_id,Menh) VALUES ('$id','$tenSp','$MaSp','$target_dir/$filename','$Gia','$SL','$mota','$brandid','$Menh')") or die(mysqli->error);
        header("Location:SanPhamAdmin.php");
    };


    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM products WHERE prd_id=$id") or die(mysqli.error);
        header("Location:SanPhamAdmin.php");
    }
?>