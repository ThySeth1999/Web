<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors List</title>
    <link href="Libs/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- <?php include_once("navbar.php") ?> -->
    <?php 
        require_once("db/connection.php"); 
       
    ?>
    <div class="container">
    <a href="insert.php">Create New</a>
    <table class="table table-border">
        <thead>
            <tr>
                <th>Authors ID</th>
                <th>Authors Name</th>
                <th>Phone </th>
                <th>Email</th>
                <th>Website</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        <?php  
            $sql="SELECT * FROM tbl_authors;";
            if($data=$connection->query($sql,PDO::FETCH_NUM)){
                if($rows=$data->fetchAll()){
                    foreach($rows as $row){
                        echo "<tr>
                                <td>{$row[0]}</td>
                                <td>{$row[1]}</td>
                                <td>{$row[2]}</td>
                                <td>{$row[3]}</td>
                                <td>{$row[4]}</td>
                                <td>{$row[5]}</td>
                                <td>{$row[6]}</td>
                                <td>
                                 <a href='edit.php?id={$row[0]}'><i class='far fa-edit'></i></a>
                                 <a href='delete.php?id={$row[0]}'><i class='fas fa-trash'></i></a>
                                 <a href='#'>Show</a>
                                </td>
                            </tr>";
                    }
                }
            }
        ?>    
        </tbody>
    </table>

    </div>
    <script src="libs/fontawesome/js/all.js"></script>
</body>
</html>
