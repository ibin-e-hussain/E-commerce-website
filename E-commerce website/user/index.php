<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include 'heder.php';
    ?>
</head>

<body>
    
        <div class="container">
          <div class="row">
            
     <h1 class="text-warning font-monospace text-center mt-3  w-100">
     <?php
      if(isset($_GET['button'])){
      echo $_GET['button']; 
      }
      else{
        echo  "Home";
      }
      ?>
      </h1>


    <?php
     include '../product/config.php' ;

     
      if (isset($_GET['button']) && $_GET['button'] == 'laptop') {

        $sql="select * from product WHERE Pcategory='laptop'";

    } 
    else if (isset($_GET['button']) && $_GET['button'] == 'mobile') {

      $sql="select * from product WHERE Pcategory='mobile'";

  } 
 else  if (isset($_GET['button']) && $_GET['button'] == 'bag') {

    $sql="select * from product WHERE Pcategory='bag'";

} 
    else  if (isset($_GET['button']) && $_GET['button'] == 'Home') {
        
         $sql="select * from product";
    }
    else{
      $sql="select * from product";
    }

     
     $query=mysqli_query($conn,$sql) or die("query failed");
     while($row=mysqli_fetch_assoc($query)){
         
      
    echo  "
    
    <div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center '>
    <form action='insertcart.php' method='POST'>
    <div class='card mt-5 ' style='width: 20rem;'>
         
        <img r style='width:14rem;height:12rem;'  src='../product/$row[Pimage]' class='pt-2 card-img-top  m-auto  ' alt='...'>
        <div class='card-body d-flex flex-column align-items-center'>
          <h5 class='card-title text-danger fw-bolder fs-3 font-monospace' >$row[Pname]</h5>
          <p class='card-text text-warning fw-bold fs-4 font-monospace' >RS:$row[Pprice]</p>

          <input type='hidden' name='Pname' value='$row[Pname]'>
          <input type='hidden' name='PPrice' value='$row[Pprice]'>
           ";
           if(isset($_SESSION['user'])){
            echo "
 <input name='Pquantity' type='number' value='min='1' max='20' placeholder='Quantity'>
          <input type='submit' name='addcart' class='mt-3 btn btn-warning text-white form-control'>
            ";
           }
           echo "
          </div>
           
        </div>
        </form> 
      </div>
      ";
     }
    ?> 
          </div>
        </div>
</body>
</html>