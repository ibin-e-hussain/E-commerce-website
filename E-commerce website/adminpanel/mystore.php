<?php
session_start();
if(!$_SESSION['admin']){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link href="style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar  bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MyStore</h1></a>
     <span>
     <i class="fa-solid fa-user-tie"></i>
     Helo,<?php echo $_SESSION['admin'];?> |
     <i class="fa-solid fa-right-from-bracket"></i>
     <a href="logout.php" class="text-decoration-none text-white">Logout</a>
     |
     <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
     </span>
  </div>
</nav>

     <div style="background-color:orange">
            <h1 class="text-center pt-4 text-white">Dashboard</h1>
        
        <div class="group_button d-flex  justify-content-center gap-3 pb-4">
            <div class="d-flex flex-column gap-2">
                <div class="image img-container d-flex justify-content-center">
                <img class="img-fluid " src="admin_img.png" alt="" style="opacity:85%;">
                </div>
                <div class="d-flex justify-content-center">
                <a href="../product/index.php" class="btn btn-danger">Add Post</a>
                </div>
            </div>
            <div class="d-flex flex-column gap-2">
                <div class="image img-container d-flex justify-content-center">
                    <img src="user_img.png" alt="">
                </div>
                <div class="d-flex justify-content-center">
                <a href="allusers.php" class="btn btn-danger">Users</a>
                </div>
            </div>
           
        </div>
    </div>
</body>
</html>