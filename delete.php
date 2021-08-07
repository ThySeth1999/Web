<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link href="Libs/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php include_once("navbar.php") ?>
    <?php 
        require_once("db/connection.php"); 
        $sql="SELECT * FROM tbl_category WHERE id=:id";
        if($stmt=$connection->prepare($sql)){
            $stmt->bindParam(":id",$id);
            $id=$_GET['id'];
            $stmt->execute();
        }
    ?>
    <div class="container">
       
        <?php if($stmt->rowCount()>0):  ?>
        <div class="alert alert-danger">
            <strong>Confirm?</strong>
            <p>Do you want to delete this record?</p>
            <form method="POST">
                <input type="hidden" value="<?= $_GET["id"];   ?>" name="id1" />
                <div  class="mt-3">
                    <button type="submit" class="btn btn-warning">Delete</button>
                    <a href="list.php">Back to List</a>
                </div>
            </form>
        </div>
        <?php
            unset($stmt); 
            endif; 
        ?>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $sql1="DELETE FROM tbl_category WHERE id=?;";
            if($stmt1=$connection->prepare($sql1)){
                $stmt1->bindParam(1,$id1,PDO::PARAM_INT);
                $id1=$_POST["id1"];
                if($stmt1->execute()){
                    header("Location:list.php");
                    exit;
                }
            }
        }
        ?>
    </div>
    <script src="libs/fontawesome/js/all.js"></script>
</body>
</html>
