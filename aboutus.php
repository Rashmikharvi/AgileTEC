<!DOCTYPE html>
<?php
require_once 'connection.php';
?>
<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>aboutus</title>
    </head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
       
        .btn{
            background-color:#0CAFFF;
            color: white;
            outline: none;
            border-radius: 20px;
          
        }
        .form-control{
            border-radius: 20px;
            border:1px solid black;
            color:black;
        }
         .footer{
            background-color:#303030;
            color:white;
        }
        .footer a{
            text-decoration:none;
            color:white;
         
        }
       .box {

  width:500px;

  height:300px;

  position:absolute;

}
.red{
    z-index:1;
    background-color:#0CAFFF;
    position:relative;
   
    
}
.blue{
    z-index:2;
     left:50px;
     top:130px;
    position:absolute;
    background-color:white;
}
.img{
    z-index: 3;
    left:80px;
     top:151px;
     position:absolute;
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
            <a class="nav-link active" href="index.php">Home</a>
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
      
          <a href="ContactUs.php"><input  type="button" class="btn0" value="Contact Us"></a>
     
    </div>
  </div>
</nav>-->
<?php require("nav.php");?>
    
      <section class="main">
                <div class="container-fluid py-5">
                    <div class="row ">
<!--                       <div class="col justify-content-center">
                            <img src="img/image2.png" class="img-fluid " width="500"/>
                        </div>-->
                        <div class="col-md-6 justify-content-center px-4">
                            <div class="align-items-center justify-content-center">
<!--                            <div class="box red"></div>-->
<!--                            <div class="box blue"></div>-->
<!--                            <div class="box img">-->
                            <img src="img/image2.png" class="img-fluid" width="500"/>
                          </div></div>
<!--                           <div class="col justify-content-center align-items-center d-none">
                               <img src="img/image2.png" class="logo" width="400" />
                    </div>-->
                        <div class="col py-3 px-5 d-flex flex-wrap ">
                            <p class="h3 mt-5"  style="color:#00416A;font-weight:bold;">Who we are</p>
                            <p class="fs-6">We are team of Engineering - IIM graduates with over two decades of expereince in IT product developments, services and Training.<br>

                                Our current team comprises of qualified corporate professionals combining experience in multiple disciplines including Human Resources, Technology, Sales and Marketing.</p>
                        </div>
                             
                    </div>
                </div>
            </section>
            <div class="container-fluid d-flex flex-wrap mb-4 mt-4">
                <div class="row px-4">
                    <div class="col-lg-12">
                    <p class="h3 mb-4  text-center"  style="color:#00416A;font-weight:bold;">The Team</p>
                    <p class="text-center mb-4">Our current team comprises of qualified corporate professionals combining experience in multiple disciplines including Human Resources, Technology, Sales and Marketing. A strong customer service attitude coupled with a desire to excel and innovate is an integral part of our team members.

                    </p>
                    </div></div></div>
<!--            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="img/prof.jpg" class="img-fluid"/>
                    </div>
                    <div class="col">
                         <img src="img/prof2.jpg" class="img-fluid"/>
                    </div>
                    <div class="col">
                         <img src="img/proff3.jpg" class="img-fluid"/>
                    </div>
                    <div class="col">
                         <img src="img/proff4.jpg" class="img-fluid"/>
                    </div>
                    <div class="col">
                         <img src="img/prof5.jpg" class="img-fluid"/>
                    </div>
                </div>
            </div>-->
           <div class="container-fluid ">
                    
<!--                <div class="d-flex justify-content-center flex-wrap mt-3">-->
<div class="row justify-content-center align-items-center">
<!--/*     row-cols-md-5
     row-cols-sm-2
     row-cols-xs-2*/-->
     
      
     
   
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `aboutus`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
         <div class="col gx-0 px-0">
           
             <img src="img/<?php echo $row['image']; ?>" alt="not found" width="200" class="img-responsive" style="height:180px;"/>
             <div class="text">
                 <p class="fs-5" style="font-weight:bold;"><?php echo $row['name']; ?></p>
                 <p class="h6"><?php echo $row['tiile']; ?></p>
                     
             </div>
         </div>
       <?php } ?>             
         </div> </div> 
<div class="container- py-5  mt-4">
    <div class="col-lg-12 ">
    <div class="row py-5 px-5" style="background-color:#00356B;color:white;">
        
            <p class="h3 text-center mb-5">Our Mission</p>
            <p class="fs-6 text-center"><i>"Our mission is to deliver quality knowledge transfer through innovative delivery mechanism and technologies"</i></p>
    </div>
    </div></div>
<div class="container px-5 py-5">
    <div class="row">
        <div class="col">
            <p class="h3 text-center" style="color:#00416A;">What we do</p>
            <p class="fs-6 mt-5 text-center">AgileTEC is a company which provides Industry Relevant Training, Services and Solutions in IT/ITES segment. Our focus is on bridge the gap between Corporate and Institutes by providing conventional education and the requirements of the industry. Our training spans both IT and non IT segments and provides a variety of career oriented courses for different segments like students, job seekers and corporate citizens. At AgileTEC, your enthusiasm to master Software, Networking, Internet and enterprise are coupled with our state of art training. The courses of AgileTEC Technologies have been specially created to meet the demand of the industry. We have tailored our courses after in-depth research validated and approved by leading IT Giants. The entire curriculum is designed so as to lead to internationally recognized certification.</p>
            
        </div>
    </div>
</div>
<?php require("footer.php");?>
<!-- <section class="footer mt-5">
            <div class="container-fluid px-5 py-5">
                <div class="row ">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a>  Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>  9876543210, 9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> <secHome </a><br><br>
                        <a href="aboutus.php"> About Us</a><br><br>
                        <a href="Gallerry.php"> Gallery</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="Career.php">Carrer</a><br><br>
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
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
            </div></section>

    </body>
</html>
