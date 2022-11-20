<?php
    require("connection.php");
?>
<!DOCTYPE html>

<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>service8</title>
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
            width:100%;
        }
        .form-control{
            border-radius: 20px;
            border:1px solid black;
            color:black;
           
        }
        .form-select{
          border-radius: 20px;  
          border:1px solid black;
         
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
    
        <a href="ContactUS.php"> <input class="btn0" type="button" value="contact Us"></a>
    </div>
  </div>
</nav>-->
<?php require("nav.php");?>
        <section class="hhh mx-3">
            <div class="container-fluid py-3 px-4">
                <div class="row">
                   <div class="col-md-4 align-items-center mx-auto">
                     <div class="d-flex justify-content-center" style="width:100%;height:auto;margin-bottom:30px;">

                         <img src="img/service.png" class="img-fluid" alt="">

                     </div></div>
                      <p style="color:#005A9C;font-size:12px;margin-bottom:9px;font-weight:500;">JAVA</p>
    <p class="h5 ">Website design</p>
    <p class="fs-6">Take web design courses  to build your design skills and advance your career. Modern, responsive web design involves understanding the technology and platforms used to access web content as well as the accessibility needs of users. Enroll in this courses to develop your professional web designing abilities.
    </p>             </div>
                
            </div>
        </section>

 <div class="container-fluid  ">
          
                 <form method="POST" name="intership" onsubmit="return valIntership();">

                      <div class="container-fluid">
                <div class="row">
                    <div>
                    <p class="h5">Intrested candidte can apply using the form below</p>
                    </div>
                    
                   <div class="alert alert-danger text-center" id="errormsg" style="display: none;"></div>
                    <div class="col-md-4 mt-3 mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="project Name" aria-label="Username" name="pname" aria-describedby="basic-addon1">
   </div>     
                        <div class="input-group mb-3">
                         <select class="form-select" id="inputGroupSelect01" name="college">
    <option value="">select college</option>
    <option value="kpt">kpt</option>
    <option value="wpt">wpt</option>
    <option value="josep"> saint josep</option>
     <option value="sahyadri">sahyadri</option>
      <option value="shreedevi">shreedevi</option>
    
  </select>
                          </div>
                         <div class="input-group mb-3">
                         <select class="form-select" id="inputGroupSelect01" name="course">
    <option value="">select course</option>
    <option value="Diploma">Diploma</option>
    <option value="Degree">Degree</option>
     <option value="Engeneering">Engineering</option>
      <option value="BCA">BCA</option>
    
  </select>
                          </div>
                         <div class="input-group mb-3">
                         <select class="form-select" id="inputGroupSelect01" name="branch">
                             <option value="">select branch</option>
    <option value="CS">computer science</option>
    <option value="EC">Information technology</option>
    
  </select>
                          </div>
                    </div></div></div>
                        <section class="ddd">
                           <div class=" container-fluid border px-4  border-dark border-start-0 border-end-0">
                                <div class="row
                                     row-cols-xs-1
                                     row-cols-md-3
                                     row-cols-sm-1 bg-light py-3 mt-3
                                     
                                     
                                     ">
                                    <div class="col">
                                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" name="sname" aria-describedby="basic-addon1">
   </div>
                                    </div>
                                    
                                     <div class="col">
                                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Email address" aria-label="Username" name="smail" aria-describedby="basic-addon1" >
                                        </div></div>
                                         
                              
                                    <div class="col">
                                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" name="spno" aria-describedby="basic-addon1">
                                        </div></div>
                                    </div>   
                                 
                                <button type="submit" name="intership" class="btn1 bg-white mt-3 py-1 px-3  mb-3">+Add student</button>
<!--                               <button type="submit" name="internship" class="btn1 bg-white mt-3 py-1 px-3  mb-3">+Add student</button>-->
                          
                           </div>
                                
                        </section>        
        
             
          <div class="col-md-4 mt-3 mb-3">
                             <button type="submit" class="btn">Pay</button>
                           </div>
        </form>
<!--             <section class="footer">
            <div class="container-fluid px-5 py-5">
                <div class="row">
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
      
 </div>
        <?php
            if(isset($_POST['intership'])){

               
                $pname=$_POST['pname'];
             $college=$_POST['college'];
              $course=$_POST['course'];
               $branch=$_POST['branch'];
                 $sname = $_POST['sname'];
                $smail = $_POST['smail'];
                $spno = $_POST['spno'];
              $pno = (double)$spno;

                $query = "INSERT INTO `iprojectregister`(`pname`,`college`,`course`,`branch`,`sname`,`smail`,`spno`)VALUES('$pname','$college','$course','$branch','$sname','$smail','$spno')";
                mysqli_query($con, $query);
                 
            
                 
                
            }
        ?>
        
        <script type="text/javascript">
            function valIntership() {
                 if(document.intership.pname.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your project Name";
                    document.intership.pname.focus();
                    return false;
                }
                if(document.intership.college.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Select Your College";
                    document.intership.college.focus();
                    return false;
                }
                  if(document.intership.course.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Select Your Course";
                    document.intership.course.focus();
                    return false;
                }
                if(document.intership.branch.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Select Your Branch";
                    document.intership.branch.focus();
                    return false;
                }
                if(document.intership.sname.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Name";
                    document.intership.sname.focus();
                    return false;
                }
                if(document.intership.smail.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Email";
                    document.intership.smail.focus();
                    return false;
                }
                if(document.intership.spno.value == ""){
                    document.getElementById("errormsg").style.display = "";
                    document.getElementById("errormsg").innerHTML = "! Enter Your Phone Number";
                    document.intership.spno.focus();
                    return false;
                }
              
                
                alert("Registered successfully")
                return true;
            }
        </script>
    </body>
</html>
