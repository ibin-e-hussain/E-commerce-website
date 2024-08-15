<?php
session_start();
if(!$_SESSION['admin']){
header('location:../adminpanel/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="style.css" rel="stylesheet">
   
</head>
<body>
<div class="p-4 pl-2 "><a href="../adminpanel/mystore.php"><i class="fa-solid fa-arrow-left" style="color: #ee3a4c; font-size:25px;"></i></a></div>
<!--------------foam------------- -->
   <div class="container ">
    <div class="row mt-4">
        <div class="col-md-6 m-auto  border border-dark">
             <form action="insert.php" method="POST" enctype="multipart/form-data">
             <div class="mb-3">
                   <p class="text-center  ">Product Detail:</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" name="Pprice"  class="form-control" placeholder="Enter Product Price">
                </div>
                <div class="mb-3 ">
                    <label class="form-label">Add Product Image</label >
                    <input type="file" name="Pimage"  class="form-control" >
                </div>
                <div class="mb-3 d-flex ">
                    <select class="form-select form-control" aria-label="Default select example" name="pages">
                   <option selected>Select Page Category
                   <option value="bag">bag</option>
                   <option value="mobile">mobile</option>
                   <option value="laptop">laptop</option>
                   </select>
               </div>
               <button name="submit" class="bg-danger my-3 form-control text-white">Upload</button>
              </form>
        </div>
    </div>
   </div>
    <div class="container  ">
        <div class="row ">
            <div class="col-md-9 m-auto">
            <table class="table table-hover mt-5 border border-warning">
                     <thead class="bg-dark text-white text-center">
                         <th>Id</th>
                         <th>Name</th>
                         <th>Price</th>
                         <th>Image</th>
                         <th>Category</th>
                         <th>Delete</th>
                     </thead>
                     <tbody class="text-center">

                     <?php
                     include 'config.php';
                     $sql="SELECT * FROM `product`;";
                     $query=mysqli_query($conn,$sql) or die("query failed");
                     while($row=mysqli_fetch_array($query)){
                       echo "
                       <tr>
                       <td>$row[id]</td>
                       <td>$row[Pname]</td>
                       <td>$row[Pprice]</td>
                       <td><img src='$row[Pimage]' 'height='90px' width='200px'></td>
                       <td>$row[Pcategory]</td>
                         <td>
                        <a class='btn btn-danger' href='?press=true&name=$row[Pname]'>Delete</a>
                      </td>
                       ";
                     }
                   ?>  
                   
                      </tr>
                      </tbody>
             </table>
            </div>
        </div>
    </div>
          <?php
           //very important 
           /*steps involved in it are
           1) first i created a form and assign method post
           2) Access that form values through global variable $_POST in another file(php)
           3)there was a problem when button is pressed the input fields are not null
           4) in same file(php) i used $_SERVER global variable to handle it*/
          if($_SERVER['REQUEST_METHOD']==='POST'){   
            $Pname="";
            $Pprice="";
           $Pages="";
           $Pimage="";
          }
          if(isset($_GET['press'])){
            if(isset($_GET['name'])){
                $name=$_GET['name'];
               $sql1="DELETE FROM `product` WHERE Pname='$name'";
               $query1=mysqli_query($conn,$sql1);
               }
          }
          ?> 
         
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
