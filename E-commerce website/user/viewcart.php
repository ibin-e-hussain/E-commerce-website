

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
</head>
<body>
 <?php
 
 //session_destroy();
 
 include 'heder.php';
 ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="text-warning text-center">My Cart</h1>

            </div>
        </div>
    </div>
</body>
<div class="container-fluid mt-4">
    <div class="row d-flex flex-row">
        <div class="col-sm-6 col-sm-12 col-lg-9 border">
            <table  class="table   text-center ">
                <thead class=" fs-5 ">
                    <th class="bg-danger text-white">Serial. no</th>
                    <th class="bg-danger text-white">Product Name</th>
                    <th class="bg-danger text-white">Product Price</th>
                    <th class="bg-danger text-white">Product Quantity</th>
                    <th class="bg-danger text-white">Total Price</th>
                    <th class="bg-danger text-white">Update</th>
                    <th class="bg-danger text-white">Delete</th>
                </thead>
                <tbody>
                    <?php
                    $cart_total=0;
                    if(isset($_SESSION['cart'])){
                        
                        foreach($_SESSION['cart'] as $key=>$value){
                            $total=(int)$value['p_price'] * (int)$value['p_quantity'];
                            $key=$key+1;
                            $cart_total=$cart_total+$total;
                            echo "
                            <form action='insertcart.php' method='POST'>
                            <tr>
                            <td>$key</td>
                            <td> $value[p_name]</td>
                              <td>$value[p_price]</td>
                             <td><input  type='text' name='item_quantity' value='$value[p_quantity]'></td>
                            <td>$total</td>
                            <td><button name='update_item' class='btn btn-warning'>Update</button></td>
                             <td><button name='del_item' class='btn btn-danger'>Delete</button></td>
                            </tr>
                            <input hidden='visible' type='text' name='item' value='$value[p_name]'>
                            
                              ";
                            }
                    }     
                    ?>
                   
                    
                </tbody>
            </table>
        </div>
        <div class="col-12 col-lg-3   text-center">
            <h1>Total</h1>
        <h2 class="bg-danger text-white" ><?php echo $cart_total; ?></h2>
        </div>
        <div class=" mt-3 col-12 w-75  gap-4 d-flex justify-content-end">
        <button name='update_item'  class='btn btn-secondary'>Confirm</button>
        <button name='cancel'  class='btn btn-danger'>Cancel</button>
        </div>
        </form>
    </div>
</div>
</html>