<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgister From</title>
    <?php include './links.php';?>
    <?php include './navbar.php';?>
</head>
<style>
    .card{
        width:500px;
    }
</style>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form action="./db_login.php" method="POST">
                   

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>

                    <br>
                    <button class="btn btn-primary" type="submit">Login</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>