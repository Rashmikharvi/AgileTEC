

<?php
    include "../connection.php";
?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>service9</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
      <style>
           *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            
        }
         .nav-link{
            color:black;
        }
        .nav-link:hover{
            color:#0CAFFF;
            transition:all 0.5s;
            font-weight:bold;
        }
        
        .nav-item{
            color:black;
            font-weight:500;
            padding-left:35px;
        
        }
         .btn0{
            height:40px;
            width:130px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
             margin-left:20px;
           }
           .btn0:hover{
               background-color:#0CAFFF;
               transition:all 0.4s;
               color:white;border:none;
               outline:none;
           }
       
/*        .btn{
            background-color:#0CAFFF;
            color: white;
            outline: none;
            border-radius: 20px;
            width:100%;
        }*/
        .form-control{
            border-radius: 20px;
            border:1px solid black;
            color:black;
           
        }
        .form-select{
          border-radius: 20px;  
          border:1px solid black;
          color:black;
         
        }
        .btn1{
            border-color:#0CAFFF;
            color:#0CAFFF;
            border-radius: 20px;
           
        }
         .footer{
            background-color:#303030;
            color:white;
        }
        .footer a{
            text-decoration:none;
            color:white;
         
        }
/*        .form_select arrow{
            color:red;
        }*/
        </style>
        <body>
       
          <nav class="navbar navbar-expand-lg navbar-whie">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin/panel.php">
                    <img src="../img/logo.png" alt="logo" height="60" />
                </a>
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../admin/panel.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/courseRegdb.php">course register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/gallerydb.php">Gallery</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link " href="../admin/careerRegdb.php">carrer</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link " href="../admin/ieeprojectRegdb.php">IEEE projectRegister</a>
                        </li>
                    </ul>
                    
                  <a href="../index.php" class="btn btn-primary" style="margin:0 50px;">Logout</a>
                </div>
            </div>
        </nav>
                
        <div class="container" style="background-color: #fff;">
            <div class="p-3 my-5">
                <div class="mb-5">
                    <h1 class="text-primary">Gallery List</h1>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>title</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $query = "SELECT * FROM `gallery`";
                            $result = mysqli_query($con, $query);

                            $count = 1;
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['image']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td>
                                <form action="gallerydb.php?id=<?php echo $row['id']; ?>" method="POST">
                                <button type="submit" name="delete" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                            <?php $count++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

<!--Delete Operation-->
<?php
    if(isset($_POST['delete'])){
        $id = $_GET['id'];
        $delete = mysqli_query($con, "DELETE FROM `gallery` WHERE `id`='$id'");

       if($delete){
      echo '<script>alert("image deleted")</script>';
      }
    }
?>
