
<?php
    require("connection.php");
?>
<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>career</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
        <?php require("nav.php");?>
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
     
          <a href="ContactUs.php"><button class="btn0" type="submit">Contact Us</button></a>
 
    </div>
  </div>
</nav>-->

        <section class="hhh">
            <div class="container-fluid ">
                <div class="row px-5 mt-3 mb-3">
                  
                    <div class="card shadow-lg" style="border-radius:20px;">
 
  <div class="card-body">
    <h4 class="card-title">Frontend developer</h4>
    <p class="card-text"><b>experience:</b>0-3 years<br><b>Education:</b>B.E/B.Tech/BCA/MCA/Freshers<br><b>Location:</b>Mangalore<br><b>Job role:</b>Developer<br><br><b>Job descripton:</b>We are looking for programmers with a keen eye for design for the position of front end developer. Front end developers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.</p>
 
    <a href="Career2.php" >Read more</a>
     <div class="d-flex align-items-end flex-column">
         <a href="Career2.php"> <button type="submit"  class="btn px-5 btn-lg">Apply</button></a>
     </div>
   
  </div>
</div>
                        
                    </div>
                 <div class="row px-5 mt-3 mb-3">
                  
                    <div class="card shadow-lg" style="border-radius:20px;">
 
  <div class="card-body">
    <h4 class="card-title">Frontend developer</h4>
    <p class="card-text"><b>experience:</b>0-3 years<br><b>Education:</b>B.E/B.Tech/BCA/MCA/Freshers<br><b>Location:</b>Mangalore<br><b>Job role:</b>Developer<br><br><b>Job descripton:</b>We are looking for programmers with a keen eye for design for the position of front end developer. Front end developers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.</p>
 
    <a href="Career2.php" >Read more</a>
    <div class="d-flex align-items-end flex-column">
         
        <a href="Career2.php"><button type="submit"  class="btn px-5 btn-lg">Apply</button></a>
         </div>
   
  </div>
</div>
                        
                    </div>
                 <div class="row px-5 mt-3 mb-3">
                  
                    <div class="card shadow-lg" style="border-radius:20px;">
 
  <div class="card-body">
    <h4 class="card-title">Frontend developer</h4>
    <p class="card-text"><b>Experience:</b>0-3 years<br><b>Education:</b>B.E/B.Tech/BCA/MCA/Freshers<br><b>Location:</b>Mangalore<br><b>Job role:</b>Developer<br><br><b>Job Descripton:</b>We are looking for programmers with a keen eye for design for the position of front end developer. Front end developers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.</p>
 
    <a href="Career2.php" >Read more</a>
     <div class="d-flex align-items-end flex-column">
         <a href="Career2.php"> <button type="submit"  class="btn btn-lg px-5 ">Apply</button></a>
     </div>
   
  </div>
</div>
                        
                    </div>
                </div>
           
            
        </section>
<?php require("footer.php");?>
<!--            <section class="footer">
            <div class="container-fluid px-5 py-5">
                <div class="row ">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a> Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a> 9876543210, 9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> Home </a><br><br>
                        <a href="aboutus.php"> About Us</a><br><br>
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
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
            </div></section>
    </body>
</html>
