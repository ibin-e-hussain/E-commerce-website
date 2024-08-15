<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Foam</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../product/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-secondary">
<div class="container ">

    <div class="row mt-4">
        <col-md-3><a href="../user/index.php"><i class="fa-solid fa-arrow-left" style="color:darkgrey; font-size:25px;"></i></a></col-md-3>
        <div class="col-md-6 shadow bg-white font-monospace p-3 m-auto border border-dark">
             <form action="login1.php" method="POST" >
             <div class="mb-3">
                   <p class="text-center  ">Login:</p>
                </div>
                <div class="mb-3">
                    <label class="form-label"> Name</label>
                    <input type="text" name="Username" class="form-control" placeholder="Enter userame">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="Userpassword"  class="form-control" placeholder="Enter password">
                </div>
                
               <button name="submit" class="bg-danger my-3 form-control text-white">Login</button>
              </form>
        </div>
    </div>
   </div>
</body>
</html>