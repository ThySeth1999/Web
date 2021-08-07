<?php
require_once "db/conection.php";
$id=$_POST['author_id'];
$name=$_POST['author_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$website=$_POST['website'];
$address=$_POST['address'];

$statement="UPDATE tbl_authors SET author_name='$name',phone='$phone',email='$email',website='$website',address='$address'";
$statement.=" WHERE author_id='$id';";

if($connection->exec($statement)>0){
    echo "<script>window.location='action.php'</script>";
}else{
    echo "<script>window.location='edit.php?author_id='$id'</script>";
}
