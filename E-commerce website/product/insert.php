<?php
if(isset($_POST["submit"])){
    include 'config.php';
    $product_name=$_POST["Pname"];
    $product_price=$_POST["Pprice"];
    $product_image=$_FILES["Pimage"]; //because image is used this why files use
    $product_page=$_POST["pages"];
    $image_loc=$_FILES['Pimage']['tmp_name'];
    $image_name=$_FILES['Pimage']['name'];
    $image_des="upload_image/".$image_name;
   
    //image function
    //three things:location,
   move_uploaded_file($image_loc,$image_des);
   
   //insert product
   $sql="INSERT INTO `product`(`Pname`, `Pprice`, `Pimage`, `Pcategory`) VALUES ('$product_name','$product_price','$image_des','$product_page')";
   $query=mysqli_query($conn,$sql) or die("query failed");
   header("location:index.php");
}
?>