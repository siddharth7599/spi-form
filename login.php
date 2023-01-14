<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1){
    $err="*Invalid email or password";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

</head>

<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4" style="height: 400px; text-align:center; background-color:pink;">
                <h1>Admin Login</h1>
                <form action="login_data.php" method="post" enctype="multipart/form-data" class="form-control ">
                    <span style="color: red;"><?php echo $err; ?></span>
                    <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control mt-4">
                    <input type="password" name="password" id="password" class="form-control mt-4" placeholder="Enter your Password">
                    <button type="submit" class="btn btn-primary mt-4">Login

                    </button>

                </form>



            </div>
        </div>
    </div>
</body>

</html>