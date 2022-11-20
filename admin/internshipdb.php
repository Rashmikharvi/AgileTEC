<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require("../connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AgileTec | Admin Panel | Intership</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <body>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin/panel.php">
                    <img src="../img/logo.png" alt="logo" height="60" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../admin/panel.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/courseRegdb.php">course resgister</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/gallerydb.php">Gallery</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link " href="../admin/careerRegdb.php">career</a>
                        </li>
                    </ul> 
                </div>
            </div>
        </nav>
        
        <div class="container" style="background-color: #fff;">
            <div class="p-3 my-5">
                <div class="mb-5">
                    <h1 class="text-primary">Intership List</h1>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Course</th>
                            <th>Branch</th>
                            <th>Year</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $query = "SELECT * FROM `intership`";
                            $result = mysqli_query($con, $query);

                            $count = 1;
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['sname']; ?></td>
                            <td><?php echo $row['smail']; ?></td>
                            <td><?php echo $row['spno']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['branch']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td>
                                <form action="intershipdb.php?id=<?php echo $row['id']; ?>" method="POST">
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
        $delete = mysqli_query($con, "DELETE FROM `intership` WHERE `id`='$id'");

        if($delete){
        header("location: intershipdb.php");
        }
    }
?>
