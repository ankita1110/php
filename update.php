<?php
include('con.php');

$id=$_REQUEST['up'];

$sq="select name,city from std where id=".$id;
$sel=mysqli_query($conn,$sq);
$se=mysqli_fetch_array($sel);

echo $se['name']."<br>";
echo $se['city'];

?>
