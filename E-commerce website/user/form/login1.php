<?php
include '../../product/config.php';
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
   $sql="SELECT * FROM `user` WHERE (username='$name' OR email='$name' ) AND password='$password' ";
   $query=mysqli_query($conn,$sql);
   session_start();
   $_SESSION['user']=$name;
   $_SESSION['count']=0;
  if(mysqli_num_rows($query)){
   
      echo "
      <script>
      alert('successfully login');
      window.location.href='../index.php';
      </script>
      ";
  }
  else{
    echo "
    <script>
    alert('incorrect username/email/password/');
    window.location.href='login.php';
    </script>
    ";
  }
}
?>