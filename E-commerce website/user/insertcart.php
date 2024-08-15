<?php
if(!(session_start())){
session_start(); 
}

//session_destroy();

   
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    //insert item intp list
if(isset($_POST['addcart'])){
    $pname=$_POST['Pname'];
    $pprice=$_POST['PPrice'];
   $pquantity=$_POST['Pquantity'];
//in $_session['cart'] array repitition happens to avoid it
//we used check product to have list of products
//in array for comparision
    $check_product = array_column($_SESSION['cart'],'p_name');
    if(in_array($pname,$check_product)){
        echo "
    <script>
    alert('item already added to cart');
    window.location.href='index.php';
    </script>
    ";
    exit();
   
    }
    else if($pquantity>0){
    $_SESSION['count']=$_SESSION['count']+1;
    $_SESSION['cart'][]=array('p_name'=>$pname,'p_price'=>$pprice,'p_quantity'=>$pquantity);
   // print_r($_SESSION['cart']);
   header('location:viewcart.php');
}
else{
     echo "
    <script>
    alert('add quantity');
    window.location.href='index.php';
    </script>
   ";

}
}
//remove item from list
if(isset($_POST['del_item'])){
    $_SESSION['count']=$_SESSION['count']-1;
  foreach($_SESSION['cart'] as $key=>$value){
    //item remove and array become unordered
    if($value['p_name']===$_POST['item']){
        //item remove and array become unordered
        unset($_SESSION['cart'][$key]);
        //array become in proper indexing and order
        $_SESSION['cart']=array_values($_SESSION['cart']);
        header('location:viewcart.php');
    }
  }
}
//Update item from list
if(isset($_POST['update_item'])){
    echo 'update button pressed';
    foreach($_SESSION['cart'] as $key=>$value){
        if($value['p_name']===$_POST['item']){
           $_SESSION['cart'][$key]=array('p_name'=>$value['p_name'],'p_price'=>$value['p_price'],'p_quantity'=>$_POST['item_quantity']);
           header('location:viewcart.php');
        }
}
}

 
 
//cancel order
if(isset($_POST['cancel'])){
    unset($_SESSION['cart']);
    unset($_SESSION['count']);
    header('location:index.php');
}
?>
