<?php

require_once "db/connection.php";
//insert with placeholder (?)
 $sql="INSERT INTO tbl_Authors(authors_name,phone,email,website,`address`,) VALUES(?,?,?,?,?)";

 if($stmt=$connection->prepare($sql)){
     $values=array_values($_POST);
     if($stmt->execute($values)){
         header("Location:list.php");
     }else{
         header("Location:insert.php");
     }
}