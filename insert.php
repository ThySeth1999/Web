<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php
require_once "db/connection.php" 
?>
<body>
    <div class="card">
        <div class="card-header">
            <strong>Insert</strong>
        </div>
        <div class="card-body">
            <form method="POST" action="store.php">
                <!-- <div class="mb-2">
                    <label for="authors_id">Authors ID</label>
                    <input type="text" name="authors_id"  id="authors_id" 
                           class="form-control" />
                </div> -->
                <div class="mb-2">
                    <label for="authors_name">Authors Name</label>
                    <input type="text" name="authors_name"  id="authors_name" 
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="phone">phone</label>
                    <input type="text" name="phone"  id="phone" 
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="Email">email</label>
                    <input type="text" name="email"  id="email" 
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="Website">website</label>
                    <input type="text" name="website"  id="website" 
                           class="form-control" />
                </div>
                <div class="mb-2">
                    <label for="address">Address</label>
                    <input type="text" name="addresse"  id="address" 
                           class="form-control" />
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-warning">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>