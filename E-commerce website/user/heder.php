<?php
if(session_id()==''){
  session_start();
  }

$log="login";
if(isset($_SESSION['user'])){
  $log="logout";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <style>
      .hover-effect:hover {
             /* Change background color on hover */
            border-radius:5px;
            color: white; /* Change text color on hover */
            transform: scale(1.05); /* Slightly scale up on hover */
            transition: 0.3s ease; /* Smooth transition */
        }
      .cursor-pointer{
        cursor:pointer;
      }
    </style>
    <body>
    <nav class="navbar navbar-light bg-light">
  <div class="w-100 container-fluid d-flex justify-content-between">
    <a class=" navbar-brand "><img src="logo.png" alt="" style="background-color:black;width:115px;height:55px"></a>
    <div class=" " >
      <a href="index.php?button=Home" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house-chimney "></i><label class="ps-2 cursor-pointer" for="">Home</label></a>
      
      <?php
   if(isset($_SESSION['user'])){
    
    ?>
      <a href="viewcart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i><label class="ps-2 cursor-pointer" for="">Cart (<?php 
      if(isset($_SESSION['count'])){
      echo $_SESSION['count']; 
      }
      else{
        echo '0';
      }
      ?>)</label></a>
      
      <?php
   }
  ?>
   <i class="fa-solid fa-user text-secondary text-decoration-none pe-2"></i><label class="text-warning" for="">Hello,|
   <?php
   if(isset($_SESSION['user'])){
    echo $_SESSION['user']; 
   }
   else if(isset($_SESSION['admin'])){
    echo $_SESSION['admin']; 
   }
   ?>
   </label>
 <?php
    if(!isset($_SESSION['admin']) && $log=='login')
    {
      
    ?>
   <a class=" text-warning text-decoration-none pe-2" href="form/register.php?value=<?php echo $log; ?>"><i class="fa-solid fa-right-to-bracket"></i><label class="ps-2 cursor-pointer" name="buton" for=""><?php echo $log; ?></label></a> 
   <?php
    }
    else  if(!isset($_SESSION['admin']) && $log=='logout')
    {
      ?>
      <a class=" text-warning text-decoration-none pe-2" href="?value=<?php echo $log; ?>"><i class="fa-solid fa-right-to-bracket"></i><label class="ps-2 cursor-pointer" name="buton" for=""><?php echo $log; ?></label></a> 
  
   <?php
    }
   ?>
   <?php
   if(!isset($_SESSION['user'])){
    echo "
    <a class='text-secondary text-decoration-none pe-2' href='../adminpanel/mystore.php'><i class='fa-solid fa-user-tie'></i><label class='ps-2 text-warning cursor-pointer' for=''>Admin</label></a>
    ";
   }
   ?>
   
   </div>
   
  </div>
</nav>

<div class="bg-danger font-monospace w-100">
  <ul class="list-unstyled ">
    <li class="d-flex  justify-content-between w-50 m-auto ">
      <a class="text-decoration-none fs-4 text-white hover-effect" href="index.php?button=laptop">Laptops</a>
      <a class="text-decoration-none fs-4 text-white hover-effect" href="index.php?button=mobile">Mobiles</a>
      <a class="text-decoration-none fs-4 text-white hover-effect" href="index.php?button=bag">Bags</a>
    </li>
  </ul>
</div>
<?php

  if(isset($_GET['value'])){
     if($_GET['value']=='login'){
      header('location:form/login.php');   
     }
     else if($_GET['value']=='logout'){
      session_destroy();
      header('location:index.php');   
     }
  }
?>
</body>
</html>