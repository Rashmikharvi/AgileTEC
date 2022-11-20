<?php
    require("connection.php");
?>
<!DOCTYPE html>

<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>contactus</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
           width:100%;
        }
        .form-control{
            border-radius:20px;
            border:1px solid black;
            color:black;
        }
 .bbb h3{
            color:#00416A;
        }
         .ddd h4{
            color:#00416A;
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
             <a class="nav-link active" href="Career.php">Career</a>
        </li>
        <?php } ?>
       
      </ul>
      
          <a href="ContactUS.php"><button class="btn0" type="submit">Contact Us</button></a>
   
    </div>
  </div>
</nav>-->
<?php require("nav.php");?>
        <section class="bbb">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 ">
                        <form method="POST" >
                        <h3>Get in touch with us</h3>
                         <div class="input-group mt-5 mb-3">
                             <input type="text" class="form-control" placeholder="Name" aria-label="Username" name="cname" aria-describedby="basic-addon1" autocomplete="off" required>
   </div>
 <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Email address" aria-label="Username" name="cmail" aria-describedby="basic-addon1" autocomplete="off" required>
   </div>
                        <div class="input-group mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="message"  name="message"  required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn py-3 mb-4">Register</button> 
                        </form>
                    </div>
                    <div class="col-md-6 px-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d32351.4635998621!2d74.82527919247217!3d12.888682973139653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5812d9734d573ae6!2sAgileTEC!5e0!3m2!1sen!2sin!4v1666869023882!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <i class="fa fa-envelope " aria-hidden="true" style="font-size:24px;"></i> info@agiletec.in
                    <i class="fa fa-clock-o" style="font-size:24px; margin-left:40px;"></i>  Mon-Sat 9AM to 7PM
                    </div>
                </div>
            </div>
        </section> 
<!--          <section class="footer">
            <div class="container-fluid px-5 py-5">
                <div class="row ">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a> Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>9876543210,9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> Home </a><br><br>
                        <a href="aboutus.php"> About Us</a><br><br>
                        <a href="Gallerry.php"> Gallery</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="Career.php">Carrer</a><br><br>
                        <a href="ContactUS.php">Contact Us</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href=""><i class="fa fa-whatsapp" style="font-size:24px;"></i></a>
                        <a href=""><i class="fa fa-instagram" style="font-size:24px;margin-left:10px;"></i></a>
                        <a href=""><i class="fa fa-facebook" style="font-size:24px;margin-left:10px;"></i></a>
                </div>
            </div>
            </div>
        </section>-->
<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div>
                </div></section>
         <?php
            if(isset($_POST['submit'])){
                $to = "kowshikpc007@gmail.com";
                $subject = "this is subject";
                $message = $_POST['message'];
                
                if(mail($to, $subject, $message)){
                    print '<script>alert("message sent successfully");</script>';
                }
                else{
                   print '<script>alert("message not sent");</script>'; 
                }
            }
        ?>
    </body>
</html>
