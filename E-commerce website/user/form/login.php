<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    <style>
        .reg_btn:hover{
          background-color:blue !important;
        }
       
    </style>
</head>
<body>
    <div class="container bg-white shadow font-monospace w-50 mt-4 pb-3">
        <div class="row">
            <div class="col-12">
                <p class="w-100 text-warning fs-3 fw-bold text-center">User Login</p>
                <form action="login1.php
                " method="POST">
                    <div class="mb-3">
                        <label  class="mb-2" for="">UserName</label>
                        <input class="form-control mb-2" type="text" name="name" placeholder="enter user name">
                        <label  class="mb-2" for="">Password</label>
                        <input name="password" class="form-control mb-2" type="password" placeholder="enter a strong password">
                       </div>
                    <div class="">
                        <button type="submit" class="form-control btn reg_btn bg-secondary text-white fs-5" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>