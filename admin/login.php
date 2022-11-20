<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AgileTec | Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/style.css" />
        
        <style type="text/css">
            .msg{
                display: none;
            }
            @media (max-width: 768px){
                .card{
                    display: none;
                }
                .msg{
                    display: block;
                }
            }
        </style>
    </head>
    <body>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card w-50 border-light" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
                <div class="card-header bg-primary">
                    <h5 class="text-light">Admin Login</h5>
                </div>
                <form method="POST" class="card-body">
                    <input type="text" name="username" class="form-control mb-3" placeholder="Username" autocomplete="off" />
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" autocomplete="off" />
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <a href="../index.php" class="btn btn-outline-primary">Back</a>
                </form>
            </div>
            
            <div class="msg">
                <h1>Shift to Desktop Screen</h1>
                <a href="../index.php" class="btn btn-primary btn-sm">Back To Home Page</a>
            </div>
        </div>
        
        <?php   
            require("../connection.php");

            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result) == 1){
                    session_start();
                    $_SESSION['username'] = $username;
                    header("location: panel.php");
                }
                else{
                    print '<script>alert("Invalid User");</script>';
                }
            }
        ?>
    </body>
</html>
