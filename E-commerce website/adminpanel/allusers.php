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
    <div class="container">
    <div class="row">
<div class="col-5  mt-2 mb-5 fs-3 "><a href="../adminpanel/mystore.php"><i class="fa-solid fa-arrow-left" style="color:black; font-size:25px;"></i></a></div>
<div class="col-7   mt-2 mb-5 fs-3 fw-bold">ALL USERS</div>
</div>
</div>
<?php
$conn=mysqli_connect("localhost","root","","e_commerce");
$sql="select * from user";
$query=mysqli_query($conn,$sql) or die("query failed");
echo "
<table class='table w-75 m-auto border shadow '>
<thead >
<th class='text-white bg-dark'>username</th>
<th class='text-white bg-dark'>email</th>
<th class='text-white bg-dark'>number</th>
<th class='text-white bg-dark'>Delete</th>
</thead>
<tbody>
";
while($row=mysqli_fetch_assoc($query))
{
echo "
<tr>
  <td>$row[username]</td>
  <td>$row[email]</td>
  <td>$row[number]</td>
  <td ><a name='del' class='btn btn-danger' href='?press=true&name=$row[username]'>Delete</a></td>
  </tr>
";

}
?>
</tbody>
</table>

<?php
if(isset($_GET['press'])){
   if(isset($_GET['name'])){
    $name=$_GET['name'];
   $sql1="DELETE FROM `user` WHERE username='$name'";
   $query1=mysqli_query($conn,$sql1);
   }
}
?>
</body>
</html>