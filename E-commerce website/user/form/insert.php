<?php

include '../../product/config.php';

if(isset($_POST['register'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['number'];
    $Password=$_POST['password'];
   //store duplicate email
   $dup_email=mysqli_query($conn,"SELECT * FROM `user` WHERE email='$Email'");
   //store duplicate username
   $dup_username=mysqli_query($conn,"SELECT * FROM `user` WHERE username='$Name'");
   //check duplicate email
   if(mysqli_fetch_row($dup_email)>0){
    echo "
    <script>
    alert('duplicate email');
     window.location.href ='register.php';
    </script>
    ";
   }
   //check duplicate username
   else if(mysqli_fetch_row($dup_username)>0)
   {
    echo "
    <script>
    alert('duplicate username');
    window.location.href ='register.php';
    </script>
    ";
   }
   else{
    $sql="INSERT INTO `user`(`username`, `email`, `number`, `password`) VALUES ('$Name','$Email','$Number','$Password')";
    $query=mysqli_query($conn,$sql);
    echo "
    <script>
    alert('lregistered Successfully');
    window.location.href='login.php';
    </script>
    ";
   }
}
?> 