<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <h2>Login</h2>
                <form action="lproc.php" method="POST">
                    <label for="user">Username:</label> <br>
                    <input type="text" name="user"> <br>
                    <label for="pwd">Password:</label> <br>
                    <input type="pwd" name="pwd"> <br>
                    <button type="submit">Login In</button>
                </form>
            </div>
        
        </div>
    </div>
</body>
</html>