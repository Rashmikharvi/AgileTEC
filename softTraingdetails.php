<!DOCTYPE html>
<?php
    require("connection.php");
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($con,"SELECT * FROM `software training` WHERE `id`='$id'");
    
    $row = mysqli_fetch_array($result);
?>
<html>
<!--    <head>
        <meta charset="UTF-8">
        <title></title>
         <title>Service7</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>-->
<?php require("header.php");?>
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
            color:#0CAFFF;
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
        .btn{
            background-color:#0CAFFF;
            color: white;
            outline: none;
            border-radius: 20px;
            width:100%;
            margin-top:20px;
        }
        .rrr a{
            color: #0CAFFF;
        }
        .btn1{
            border:none;
            color:black;
            outline:none;
            background-color:transparent;
            margin-right: 50px;
            
        }
        .btn1:active{height:40px;
            width:200px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
        }
        .btn1:focus{height:40px;
            width:200px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
            font-weight: bold;
        }
         .btn1:hover{height:40px;
            width:230px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
            font-weight:bold;
        }
         #buttons li{
            float:left;
             margin-right:40px;
             
              
        }
        .vvv a{
           text-decoration:none;
           color:black; 
        }
        #buttons li a:hover {
            color:#0CAFFF;
           
            border-radius:20px;
        }
       
         .footer{
            background-color:#303030;
            color:white;
        }
        .footer a{
            text-decoration:none;
            color:white;
         
        }

    .swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
       
        </style>
    <body>
<!--          <nav class="navbar navbar-expand-lg shadow  py-4 navbar-white">
  <div class="container-fluid">
       <div class="swing">
          <a href="index.php"> <img src="img/logo.png" alt="" class="img-fluid" style="height:80px;"></a></div>

    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>
         <li class="nav-item">
             <a class="nav-link active" href="Service.php">Services</a>
        </li>
         <li class="nav-item">
             <a class="nav-link active" href="Gallerry.php">Gallery</a>
        </li>
         <?php 
                        $res = mysqli_query($con, "SELECT * FROM `settings` WHERE `careeropt`='Show'");
                        if(mysqli_num_rows($res) == 1){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="career.php">Career</a>
                        </li>
                        <?php } ?>
       
       
      </ul>
    
          <a href="ContactUS.php"><button class="btn0" type="submit">Contact Us</button></a>
      
    </div>
  </div>
</nav>-->
<?php require("nav.php");?>
  <div class="container">
            <div class="container" style="background-color: #fff;">
                <div class="p-3 my-5">
                    <div class="mb-5">
                        <img src="img/<?php echo $row['simg']; ?>" style="border: solid #000;width: 100%;" />
                    </div>
                    <div class="mb-3">
                        <h1 style="color:#005A9C;"><?php echo $row['sname']; ?></h1>
                    </div>
                    <div class="mb-5">
                        <p style="text-align: justify;"><?php echo $row['descrip']; ?></p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="card border-light">
                                <div class="card-body bg-light">
                                    <div>
                                        <h5 class="mb-3">
                                            Are you looking for Best <?php echo $row['sname']; ?> Course in Mangalore ?
                                        </h5>
                                        <p style="text-align:justify;">
                                            Our <mark>AgileTEC</mark> will ensure you to understand the terminologies that the <?php echo $row['sname']; ?> Course will encompass in it.
                                        </p>
                                        <p style="text-align:justify;">
                                            The place where you have landed is an epitome of excellence in teaching and practicing <?php echo $row['sname']; ?> concepts.
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-5">
                            <h4 class="text-warning">Overview</h4>
                            <table class="table">
                                <tr>
                                    <th>Level</th>
                                    <td><?php echo $row['level']; ?></td>
                                </tr>
                                <tr>
                                    <th>Prerequisites</th>
                                    <td><?php echo $row['prereq']; ?></td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td><?php echo $row['duration']; ?></td>
                                </tr>
                                <tr>
                                    <th>Exit profile</th>
                                    <td><?php echo $row['exit']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php if(isset($row['syllabus'])){ ?>
                    <a href="syllabus/<?php echo $row['syllabus']; ?>" class="btn " style="width:50%">
                        <i class="bi bi-download"></i> Syllabus Copy
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
<!--                <section class="footer">
            <div class="container-fluid px-5 py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a> Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>9876543210,9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> Home </a><br><br>
                        <a href="aboutus.php"> About Hs</a><br><br>
                        <a href="Gallerry.php"> Gallery</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="Career.php" >Carrer</a><br><br>
                        <a href="ContactUS.php">Contact Us</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="">  <i class="fa fa-whatsapp" style="font-size:24px; "></i></a>
                        <a href=""><i class="fa fa-instagram" style="font-size:24px;margin-left:10px;"></i></a>
                        <a href=""><i class="fa fa-facebook" style="font-size:24px;margin-left:10px;"></i></a>
                </div>
            </div>
            </div>
        </section>-->
<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6 text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>
    </body>
</html>