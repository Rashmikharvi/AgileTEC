<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require("connection.php");
?>
<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>Career2</title>
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
        .form-control{
            border-radius:20px;
            border:1px solid black;
            color:black;
        }
        input[type="file"]::file-selector-button{
            color:#0CAFFF;
            border-radius:20px;
            border:1.5px solid #0CAFFF;
            background:none;
            font-size:12px;
            font-weight: bold;
            height:42px;
        }
        .kkk a{
            color:#0CAFFF;
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
                            <a class="nav-link" href="career.php">Career</a>
                        </li>
                        <?php } ?>
       
       
      </ul>
    
               <a href="ContactUs.php"><input  type="button" class="btn0" value="Contact us"></a>
  
    </div>
  </div>
</nav>-->
<?php require("nav.php");?>
        <section class="ddd d-flex">
           
            <div class="container-fluid mx-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h4><b>Frontend developer</b></h4><br>
            <p class="fs-6 mb-5"><b>Experience:</b>0-3 Years<br><b>Education:</b>B.E/B.Tech/BCA/MCA/Freshers<br><b>Location:</b>Mangalore<br><b>Job role:</b>Developer<br><br><b>Job descripton:</b>We are looking for programmers with a keen eye for design for the position of front end developer. Front end developers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.</p>
                    </div>
                </div>
            </div>
            </section>
        <section class="kkk">
            <div class="container-fluid  ">
                <div class="row mx-4">
                    
                    <p class="h5">Intrested candidate can apply using the form below </p>
                    <div class="alert alert-danger text-center" id="errormsg" style="display: none;"></div>
                    <div class="col-md-4 mt-3 mb-3 text-center ">
                        <form method="POST" name="internship" onsubmit="return valInternship();" class="card-body" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name"  name="name" autocomplete="off" aria-label="Username" aria-describedby="basic-addon1">
   </div>
 <div class="input-group mb-3">
       <input type="email" class="form-control" placeholder="Email address" aria-label="Username" name="email" autocomplete="off" aria-describedby="basic-addon1">
   </div>
                         <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" name="pnum" autocomplete="off" aria-describedby="basic-addon1">
   </div>
                        
                        <p class="fs-6 text-start">Upload resume</p>
                        <div class="input-group mb-3">
                         <input class="form-control" type="file" name="resume" accept=".doc,.docx,.pdf" id="formFile">
</div>
<!--                        <div class="mb-3">
                                    <label>Upload Your Resume</label>
                                    <input type="file" name="resume" accept=".doc,.docx,.pdf" class="form-control mb-3" required />
                                </div>-->
              <button type="submit" name="internship" class="btn  mt-3 px-5">Apply</button>
              <p class="fs-6 mt-3">You can also send your resume to<a href="">info@agiletech.in</a></p>

                       </form>
                    </div>
                </div>
            </div>
        </section> 
<!--             <section class="footer">
            <div class="container-fluid px-5 py-5">
                <div class="row ">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a> Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>  9876543210, 9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> Home </a><br><br>
                        <a href="aboutus.php"> About Us</a><br><br>
                        <a href="Gallerry.php"> Gallery</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="Career.php">Carrer</a><br><br>
                        <a href="ContactUS.php">Contact us</a><br><br>
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
                </div> </div></section>
        
<?php

       
        if(isset($_POST['internship']))
        {
            $name=$_POST['name'];
           
            $email=$_POST['email'];
            $pnum=$_POST['pnum'];
          
//            $resume=$_FILES['resume']['name'];
//            $resume_type=$_FILES['resume']['type'];
//             $resume_SIZE=$_FILES['resume']['size'];
//             $resume_tem_loc=$_FILES['resume']['tmp_name'];
//             $resume_store="image/".$resume;
                   $resume = $_FILES['resume']['name'];
        $tmpresume = $_FILES['resume']['tmp_name'];
        
//        $folder6 = "../img/".$pimage;
        $folder = "syllabus/".$resume;
            $sql="insert into careerregister(name,email,pnum,resume)values('$name','$email','$pnum','$resume')";
//              move_uploaded_file($resume_tem_loc, $resume_store);
            mysqli_query($con, $sql);
           
           move_uploaded_file($tmpresume, $folder);
//                   echo "<script>alert('successfully registered')</script>";
             
           
                  
//            if(mysqli_query($con,$sql))
//            {
//                
//                echo "<script>alert('successfully registered')</script>";
//            }
//            else{
//                echo "error:".mysqli_error($con);
//            }
//            mysqli_close($con);
      }
        ?>
        <script type="text/javascript">
            function valInternship() {
                if(document.internship.name.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Name";
                    document.internship.name.focus();
                    return false;
                }
                if(document.internship.email.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Email";
                    document.internship.email.focus();
                    return false;
                }
                if(document.internship.pnum.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Phone Number";
                    document.internship.pnum.focus();
                    return false;
                }
                 alert("Form submitted")
                return true;
            }
        </script>
    </body>
</html>
