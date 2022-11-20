<?php
    require("connection.php");
?>
<!DOCTYPE html>


<html>
<!--    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>-->
<?php require("header.php");?>
    <style>
        .btn{
            background-color:#0CAFFF;
            color: white;
            outline: none;
            border-radius: 20px;
            width:100%;
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
        <section class="hhh">
            <div class="container-fluid py-3 px-4">
                <div class="row px-4">
                   <div class="col-md-4 align-items-center mx-auto">
                     <div class="d-flex justify-content-center" style=" width:100%;height:auto;margin-bottom:30px;">
                         
                         <img src="img/service.png" class="img-fluid" alt="">
                         </div></div>
    </div>
                      <p style="color:#005A9C;font-size:12px;margin-bottom:9px;font-weight:500;">INTERNSHIP PROGRAM</p>
    <p class="h5 ">Web develpoment</p>
    <p class="fs-6">A paragraph could be part of a text that informs people, describes something, critiques something, compares things, persuades people, lists a process, makes an argument, offers a solution, or narrates a story. The level of detail will vary from text to text, so there is no answer to the question "how long is a paragraph?".

This diversity means that it's not always easy to determine what "one topic" means when dividing your text into paragraphs. For example, you could have a one-topic paragraph describing Venus (with the next paragraph describing Mars) or a one-topic paragraph describing the hues of a sunset (with the next paragraph describing its reflection in the sea).

So, what is a topic? That is another question that cannot be answered. Sometimes, a paragraph will be an aspect of a topic, sometimes it will be a topic within an issue, sometimes it will be an issue within an argument...a narrative, a process, a comparison, whatever. Whatever the scope of your paragraph, it should be neatly bounded as one aspect. If you prefer "aspect" instead of "topic," go with that.
    </p>             </div>
                
            </div>
        </section>
        <section>
            <div class="container-fluid px-4">
                <div class="row px-4">
                    <p class="h5">Intrested candidate can apply using the form below</p>
                     <div class="alert alert-danger text-center" id="errormsg" style="display: none;"></div>
                    <div class="col-md-4 mt-3 mb-3">
                                        <form method="POST" name="internship" onsubmit="return valIntership();">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" aria-label="Username" name="name" aria-describedby="basic-addon1" >
   </div>
 <div class="input-group mb-3">
     <input type="text" class="form-control" placeholder="Email address" aria-label="Username" name="email" aria-describedby="basic-addon1">
   </div>
                         <div class="input-group mb-3">
                             <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" name="pnum" aria-describedby="basic-addon1">
   </div>
                                            <button   type="submit" name="internship" class="btn mt-3" >Register</button>

                                        </form>
                    </div>
                </div>
            </div>
        </section> 
<?php require("footer.php");?>
<!--        <section class="footer">
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
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6 text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>
  <?php
            if(isset($_POST['internship'])){
                  $name=$_POST['name'];
           
            $email=$_POST['email'];
            $pnum=$_POST['pnum'];
//            $pnum = (double)$spum;
             $sql="insert into register(name,email,pnum)values('$name','$email','$pnum')";
            mysqli_query($con,$sql);
            
            
            }
            ?>
 <script type="text/javascript">
            function valIntership() {
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

