<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require("../connection.php");
    session_start();
?>

<!--Insert Values to Notification-->
<?php
    if(isset($_POST['addmsg'])){
        $msg = $_POST['msg'];
        
        $query = "INSERT INTO `notification`(`msg`) VALUES('$msg')";
        mysqli_query($con, $query);
        
   
        }
?>
<!-- Insert image to about us-->

<?php
if(isset($_POST['addaimage'])){
   
    $name=$_POST['name'];
    $title=$_POST['title'];
     $image=$_FILES['image']['name'];
       $tmpimg = $_FILES['image']['tmp_name'];
        $folder = "../img/".$image;
     
    $query56="INSERT INTO `aboutus`(`image`,`name`,`tiile`) VALUES('$image','$name','$title')";
    mysqli_query($con, $query56);
     move_uploaded_file($tmpimg, $folder);
     if($query){
            echo '<script>alert("image uploaded")</script>';
        }
}
?>
<!--Insert Image-->

<?php
    if(isset($_POST['addimg'])){
        $title=$_POST['title'];
        $image = $_FILES['image']['name'];
        $tmpimg = $_FILES['image']['tmp_name'];
        
        $folder = "../img/".$image;
        
        $query01 = "INSERT INTO `gallery`(`image`,`title`) VALUES('$image','$title')";
        mysqli_query($con, $query01);
        
        move_uploaded_file($tmpimg, $folder);
        if($query01){
            echo '<script>alert("image uploaded")</script>';
        }
    }
?>
<!--Insert software taraining Course-->
<?php
    if(isset($_POST['addscourse'])){
        $sname = $_POST['sname'];
        $level = $_POST['level'];
        $prereq = $_POST['prereq'];
        $duration = $_POST['duration'];
        $exit = $_POST['exit'];
        $descrip = $_POST['descrip'];
        
        $simage = $_FILES['simg']['name'];
        $tmpimg = $_FILES['simg']['tmp_name'];
        
        $syllabus = $_FILES['syllabus']['name'];
        $tmpsyllabus = $_FILES['syllabus']['tmp_name'];
        
        $folder = "../img/".$simage;
        $folder1 = "../syllabus/".$syllabus;
        
        $query02 = "INSERT INTO `software training`(`sname`,`level`,`prereq`,`duration`,`exit`,`descrip`,`simg`,`syllabus`)
                 VALUES('$sname','$level','$prereq','$duration','$exit','$descrip','$simage','$syllabus')";
        mysqli_query($con, $query02);
        
        move_uploaded_file($tmpimg, $folder);
        move_uploaded_file($tmpsyllabus, $folder1);
        if($query02){
            echo '<script>alert("submitted ")</script>';
        }
    }
?>
<!--Insert internship program Course-->
<?php
    if(isset($_POST['addicourse'])){
        $iname = $_POST['iname'];
        $level = $_POST['level'];
        $prere = $_POST['prere'];
        $duration = $_POST['duration'];
        $exit = $_POST['exit'];
        $descrip = $_POST['descrip'];
        
        $iimage = $_FILES['iimg']['name'];
        $tmpimg = $_FILES['iimg']['tmp_name'];
        
        $syllabus = $_FILES['syllabus']['name'];
        $tmpsyllabus = $_FILES['syllabus']['tmp_name'];
        
        $folder2 = "../img/".$iimage;
        $folder3 = "../syllabus/".$syllabus;
        
        $query03 = "INSERT INTO `internship program`(`iname`,`level`,`prere`,`duration`,`exit`,`descrip`,`iimg`,`syllabus`)
                 VALUES('$iname','$level','$prere','$duration','$exit','$descrip','$iimage','$syllabus')";
        mysqli_query($con, $query03);
        
        move_uploaded_file($tmpimg, $folder2);
        move_uploaded_file($tmpsyllabus, $folder3);
        if($query03){
            echo '<script>alert("submitted")</script>';
        }
    }
?>
<!--Insert software development  Course-->
<?php
    if(isset($_POST['addsdcourse'])){
        $sname = $_POST['sname'];
        $level = $_POST['level'];
        $prere = $_POST['prere'];
        $duration = $_POST['duration'];
        $exit = $_POST['exit'];
        $descrip = $_POST['descrip'];
        
        $simage = $_FILES['simg']['name'];
        $tmpimg = $_FILES['simg']['tmp_name'];
        
        $syllabus = $_FILES['syllabus']['name'];
        $tmpsyllabus = $_FILES['syllabus']['tmp_name'];
        
        $folder4 = "../img/".$simage;
        $folder5 = "../syllabus/".$syllabus;
        
        $query07 = "INSERT INTO `software development`(`sname`,`level`,`prere`,`duration`,`exit`,`descrip`,`simg`,`syllabus`)
                 VALUES('$sname','$level','$prere','$duration','$exit','$descrip','$simage','$syllabus')";
        mysqli_query($con, $query07);
        
        move_uploaded_file($tmpimg, $folder4);
        move_uploaded_file($tmpsyllabus, $folder5);
        if($query07){
            echo '<script>alert("image uploaded")</script>';
        }
    }
?>
<!--Insert IEEE Project guidence  Course-->
<?php
    if(isset($_POST['addpcourse'])){
        $sname = $_POST['pname'];
        $level = $_POST['level'];
        $prere = $_POST['prere'];
        $duration = $_POST['duration'];
        $exit = $_POST['exit'];
        $descrip = $_POST['descrip'];
        
        $pimage = $_FILES['pimg']['name'];
        $tmpimg = $_FILES['pimg']['tmp_name'];
        
        $syllabus = $_FILES['syllabus']['name'];
        $tmpsyllabus = $_FILES['syllabus']['tmp_name'];
        
        $folder6 = "../img/".$pimage;
        $folder7 = "../syllabus/".$syllabus;
        
        $query08 = "INSERT INTO `ieee projectguide`(`pname`,`level`,`prere`,`duration`,`exit`,`descrip`,`pimg`,`syllabus`)
                 VALUES('$sname','$level','$prere','$duration','$exit','$descrip','$pimage','$syllabus')";
        mysqli_query($con, $query08);
        
        move_uploaded_file($tmpimg, $folder6);
        move_uploaded_file($tmpsyllabus, $folder7);
        if($query08){
            echo '<script>alert("image uploaded")</script>';
        }
    }
?>


<!--Get Total no of course Registration-->
<?php
    $query1 = "SELECT * FROM `register`";
    $result1 = mysqli_query($con, $query1);
    
    $register = mysqli_num_rows($result1);
?>
<?php
    $query9 = "SELECT * FROM `iprojectregister`";
    $result9 = mysqli_query($con, $query9);
    
    $projectregister = mysqli_num_rows($result9);
?>

<!--Get Total no of courses-->
<?php
    $query2 = "SELECT * FROM `software training`";
    $result2 = mysqli_query($con, $query2);
    
    $softwaretraining = mysqli_num_rows($result2);
?>
<?php
    $query21 = "SELECT * FROM `internship program`";
    $result21 = mysqli_query($con, $query21);
    
    $internshiprogram = mysqli_num_rows($result21);
?>
<?php
    $query22 = "SELECT * FROM `software development`";
    $result22 = mysqli_query($con, $query22);
    
    $softwaredevelopment = mysqli_num_rows($result22);
?>
<?php
    $query23 = "SELECT * FROM `ieee projectguide`";
    $result23 = mysqli_query($con, $query23);
    
    $ieeeprojectguide = mysqli_num_rows($result23);
?>

<!--Get Total no of Gallery Images-->
<?php
    $query3 = "SELECT * FROM `gallery`";
    $result3 = mysqli_query($con, $query3);
    
    $gallery = mysqli_num_rows($result3);
?>

<!--Career Option-->
<?php 
    if(isset($_POST['careeropt1'])){
        $setquery = "UPDATE `settings` SET `careeropt`='Show'";
        mysqli_query($con, $setquery);
    }
    if(isset($_POST['careeropt2'])){
        $setquery = "UPDATE `settings` SET `careeropt`='Hide'";
        mysqli_query($con, $setquery);
    }
    
    $qry = mysqli_query($con, "SELECT `careeropt` FROM `settings`");
    $res = mysqli_fetch_array($qry);
?>

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
        
        <div class="container">
            <div class="p-3 my-5">
                <h1 class="text-primary mb-5">Admin Panel</h1>

                <!-- Row 1 -->
                <div class="row mb-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $_SESSION['username'] ?></h3>
                                <p>Current Admin</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $gallery; ?></h3>
                                <p>Gallery Images</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $register; ?></h3>
                                <p>course Registrations</p>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $projectregister; ?></h3>
                                <p>project Registrations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $softwaretraining ; ?></h3>
                                <p>software training Courses</p>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $internshiprogram; ?></h3>
                                <p>internship program Courses</p>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $softwaredevelopment ; ?></h3>
                                <p>software development courses</p>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-info"><?php echo $ieeeprojectguide; ?></h3>
                                <p>IEEE project Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="row mb-5 mt-5">
                    <!-- Noticifications -->
<!--                    <div class="col">
                        <div class="card">
                            <form method="POST" class="card-body">
                                <h3 class="text-primary mb-3">Add Notification</h3>

                                <input type="text" name="msg" class="form-control mb-3" placeholder="Message..." autocomplete="off" required />
                                <button type="submit" name="addmsg" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>-->
                          <div class="col">
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                <h3 class="text-primary mb-3">Add image to about us</h3>

                                <input type="file" name="image" class="form-control mb-3" autocomplete="off" required />
                                <input type="text" name="name" class="form-control mb-3" placeholder="name" autocomplete="off" required />
                                <input type="text" name="title" class="form-control mb-3" placeholder="job role" autocomplete="off" required />
                                <button type="submit" name="addaimage" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    

                    <!-- Gallery -->
                    <div class="col">
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                
                                <h5 class="text-primary">add image to gallery</h5>

                                <input type="file" name="image" class="form-control mb-3" autocomplete="off" required />
                                <input type="text" name="title" class="form-control mb-3" placeholder="title" autocomplete="off" required />
                                
                                <button type="submit" name="addimg" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="row
                     row-cols-md-2
                     row-cols-sm-1
                     row-col-xs-1">
                   <!-- add software training Course -->
                    <div class="col">
                        
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                <h5 class="text-primary mb-3">Add software training Course</h5>

                                <input type="text" name="sname" class="form-control mb-3" placeholder="Course Name" autocomplete="off" required />
                                <input type="text" name="level" class="form-control mb-3" placeholder="Course Level" autocomplete="off" required />
                                <input type="text" name="prereq" class="form-control mb-3" placeholder="Prerequisites" autocomplete="off" required />
                                <input type="text" name="duration" class="form-control mb-3" placeholder="Duration (in hours)" autocomplete="off" required />
                                <input type="text" name="exit" class="form-control mb-3" placeholder="Exit Profile" autocomplete="off" required />
                                <div class="mb-3">
                                    <label for="descrip">Description</label>
                                    <textarea name="descrip" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="simg">Course Image</label>
                                    <input type="file" name="simg" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="syllabus">Course Syllabus</label>
                                    <input type="file" name="syllabus" class="form-control" required />
                                </div>
                                <button type="submit" name="addscourse" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    <!-- add internship program Course -->
                   <div class="col">
                        
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                <h5 class="text-primary mb-3">Add internship program Course</h5>

                                <input type="text" name="iname" class="form-control mb-3" placeholder="Course Name" autocomplete="off" required />
                                <input type="text" name="level" class="form-control mb-3" placeholder="Course Level" autocomplete="off" required />
                                <input type="text" name="prere" class="form-control mb-3" placeholder="Prerequisites" autocomplete="off" required />
                                <input type="text" name="duration" class="form-control mb-3" placeholder="Duration (in hours)" autocomplete="off" required />
                                <input type="text" name="exit" class="form-control mb-3" placeholder="Exit Profile" autocomplete="off" required />
                                <div class="mb-3">
                                    <label for="descrip">Description</label>
                                    <textarea name="descrip" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="iimg">Course Image</label>
                                    <input type="file" name="iimg" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="syllabus">Course Syllabus</label>
                                    <input type="file" name="syllabus" class="form-control" required />
                                </div>
                                <button type="submit" name="addicourse" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-4  row-cols-md-2
                     row-cols-sm-1
                     row-col-xs-1">
                    <!-- add software development Course -->
                     <div class="col">
                        
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                <h5 class="text-primary mb-3">Add software development Course</h5>

                                <input type="text" name="sname" class="form-control mb-3" placeholder="Course Name" autocomplete="off" required />
                                <input type="text" name="level" class="form-control mb-3" placeholder="Course Level" autocomplete="off" required />
                                <input type="text" name="prere" class="form-control mb-3" placeholder="Prerequisites" autocomplete="off" required />
                                <input type="text" name="duration" class="form-control mb-3" placeholder="Duration (in hours)" autocomplete="off" required />
                                <input type="text" name="exit" class="form-control mb-3" placeholder="Exit Profile" autocomplete="off" required />
                                <div class="mb-3">
                                    <label for="descrip">Description</label>
                                    <textarea name="descrip" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="simg">Course Image</label>
                                    <input type="file" name="simg" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="syllabus">Course Syllabus</label>
                                    <input type="file" name="syllabus" class="form-control" required />
                                </div>
                                <button type="submit" name="addsdcourse" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                     <!--add IEEE project guide Course -->
                    <div class="col">
                        
                        <div class="card">
                            <form method="POST" class="card-body" enctype="multipart/form-data">
                                <h5 class="text-primary mb-3">Add IEEE Project guide Course</h5>

                                <input type="text" name="pname" class="form-control mb-3" placeholder="Course Name" autocomplete="off" required />
                                <input type="text" name="level" class="form-control mb-3" placeholder="Course Level" autocomplete="off" required />
                                <input type="text" name="prere" class="form-control mb-3" placeholder="Prerequisites" autocomplete="off" required />
                                <input type="text" name="duration" class="form-control mb-3" placeholder="Duration (in hours)" autocomplete="off" required />
                                <input type="text" name="exit" class="form-control mb-3" placeholder="Exit Profile" autocomplete="off" required />
                                <div class="mb-3">
                                    <label for="descrip">Description</label>
                                    <textarea name="descrip" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="pimg">Course Image</label>
                                    <input type="file" name="pimg" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="syllabus">Course Syllabus</label>
                                    <input type="file" name="syllabus" class="form-control" required />
                                </div>
                                <button type="submit" name="addpcourse" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                   
                    </div>
                    <div class="col-sm-6 d-flex  mt-5">
                        <div class="card p-3 mb-5">
                            <form method="POST" class="row card-body mb-3">
                                <h3 class="mb-3">Career Option</h3>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="careeropt1" id="flexRadioDefault1" onchange="this.form.submit()">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Show
                                    </label>
                                </div>
                                <div class="col form-check">
                                    <input class="form-check-input" type="radio" name="careeropt2" id="flexRadioDefault2" onchange="this.form.submit()">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Hide
                                    </label>
                                </div>
                            </form>
                            <p class="text-success">* Currently Career Option is <b><?php echo $res['careeropt']; ?></b></p>
                        </div>
                    </div>
                
            </div>
        </div>
    </body>
</html>



