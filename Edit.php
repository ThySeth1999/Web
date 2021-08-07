<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit PHP</title>
    <?php
    require_once "db/conecttion.php"
    ?>
</head>
<body>
    <div class="caard-header">
        <strong>Edit</strong>

    </div>
    <div class="card-body">
        <?php
            $id=$_GET[id]
            $sql="SELECT * FORM tbl_category WHERE id='$id';";
            $query=$conection->query($aql);
            $row=$query->fetch();
            
        ?>
    </div>
    <form method="POST">
        <input type="hidden" name="id" value="<?=row['id']?>">
        <div class="mb-2">
            <label for="category_name" >Category Name</label>
            <input type="text" name="category_name" id="category_name"
                   value="<?= $row["category_name"] ?>"
                   class="form-control" />
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">
                <?=$row["description"] ?>
            </textarea>

        </div>
        <div class="mb-3">
            <button type="sumit" class="btn btn-warning">Udate</button>

        </div>
    </form>
</body>
</html>