<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form class="glass-effect d-flex flex-column justify-content-center align-items-center p-5  rounded"
            action="../proses/validasi.php" method="POST">
            <h2 class="text-white mb-4">Login Admin</h2>
            <div class="form-group">
                <label class="text-white mt-2" for="exampleFormControlInput1">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="username" />
            </div>
            <div class="form-group">
                <label class="text-white mt-2" for="exampleFormControlInput2">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput2" name="password" />
            </div>
            <button type="submit" name='submit' class="btn btn-primary mt-4">Login</button>
        </form>
    </div>

</body>
</html>