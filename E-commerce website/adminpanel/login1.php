<?php
include '../product/config.php';
$a_name=$_POST['Username'];
$a_password=$_POST['Userpassword'];
$sql="select * FROM `admin` WHERE username='$a_name' and userpassword='$a_password' ";
$query=mysqli_query($conn,$sql) or die("connection failed");
session_start();
if(mysqli_num_rows($query)>0){
    $_SESSION['admin']=$a_name;
    
    echo "
      <script>
      alert('login successfully');
      window.location.href='mystore.php';
      </script>
       ";
}
else{
    echo "
      <script>
      alert('invalid username/password');
      window.location.href='login.php';
       </script>
        ";
}
?>