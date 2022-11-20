
<?php
    require("connection.php");
?>
<html>

<?php
    require("header.php");
?>
     
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            
        }
/*        navbar*/
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
/*        button*/
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
/*Course Card*/
.course-card{
    border: none;
    max-width: 350px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}
.course-card h4{
    font-size: 18px;
}
.course-card p{
    text-align: justify;
    font-size: 14px;
}
.course-card span{
    font-size: 12px;
    letter-spacing: 0.5px;
}
 .footer{
            background-color:#303030;
            color:white;
        }
        .footer a{
            text-decoration:none;
            color:white;
         
        }
         .form-control{
            border-radius: 20px;
            border:1px solid black;
            color:black;
         }
          .card{
             transition: transform .2s;
        }
        .card:hover{
           transform: scale(1.01);
           box-shadow: 0 3px 10px rgba(0 0 0 / 0.2);
           
        }
        .overlay{
            margin-top:430px;
            z-index:9;
        }    
 .card-img-top {
width: 100%;
height: 250px;
object-fit: cover;  
 }
 .tagline a{
     text-decoration:none;color:#00356B;
     
 }
 
    </style>
    <body>
          <?php include 'nav.php';?>
        <section class="tagline">
        <div class="container">
            <div class="row d-flex">
                <div class="col">
                    <p class="font" style="font-size:1.5vw;color:#00356B;"><a href="service.php">𝙎𝙤𝙛𝙩𝙬𝙖𝙧𝙚 𝙩𝙧𝙖𝙞𝙣𝙞𝙣𝙜  | 𝙄𝙣𝙩𝙚𝙧𝙣𝙨𝙝𝙞𝙥 𝙥𝙧𝙤𝙜𝙧𝙖𝙢 |  𝙎𝙤𝙛𝙩𝙬𝙖𝙧𝙚 𝙙𝙚𝙫𝙚𝙡𝙤𝙥𝙢𝙚𝙣𝙩</a></p>
                </div>
                </div>
            </div> 
        </section>
            <div class="container-fluid" style="position:absolute;">
                <div class="row d-flex">
                    

                <div class="bg-image w-100 text-center text-white"
     style="background-image:linear-gradient(rgba(28, 24, 25, 0.7), rgba(11, 20, 96, 0.7)),url('img/building.jpg');object-fit:cover;background-repeat: no-repeat; background-size: cover; background-position: center center;
            height:100vh;">
                    
              <div class="d-flex justify-content-center align-items-center h-50 flex-wrap">
    

  <div class="mask mt-4" >
  <h1 class="mb-3 h1 mt-5" style="font-weight:bold;font-size:5vw;">EDUCATION CHANGES EVERYTHING</h1>
  </div>
                   <div class="d-flex flex-column flex-wrap px-3">
                       <p class="text-center" style="text-align:justify;">
      Welcome to AgileTEC we are group of IIM-IT graduates having<br>hands on experiences on software develpoment and the faculty<br> from different colleges.The various course materials have been <br>carefully designed to fulfill your needs and current IT demands.. 
  </p></div>
  
                   </div></div>
</div>
                    </div>
               
            <section class="services py-4">
                
                <div class="container d-flex flex-wrap flex-column">
                   
                    <div class="row overlay  text-center mx-4 shadow-lg py-3 bg-white" style="border-radius:20px;">
                        <div class="col-md-4" style="border-right: solid #bebebe 1px;">
                       
                        <img src="img/slogo1.jpg" alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti</p>
                        <div class="mx-auto">
                            <a href="softTrainingReg.php"><input  type="button" class="btn0" style="width:80%;" value="Course registration"></a>
                        </div>
                    </div>
                        
                        <div class="col-md-4" style="border-right: solid #bebebe 1px;">
                   
                        <img src="img/slogo2.jpg" alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti</p>
                        <a href="internshipReg.php"><input  type="button" class="btn0"  style="width:80%;" value="Internship registration"></a>
                    </div>
                            <div class="col-md-4">
                   
                        <img src="img/slogo3.jpg" alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti</p>
                        <a href="IEEEproReg.php"><input  type="button" class="btn0" style="width:80%;" value="Project Registration"></a>
                    
                            </div>    
                </div>
                </div></section>
            
        <div class="container py-5">
            <div class="row py-5">
                <div class="col text-center">
                    <p style="color:#00356B;font-weight:bold;font-size:25px;">What We Offer</p>
                </div></div></div>
        
            
            <div class="container-fluid py-4 my-5">
                <div class="row py-5 px-4" style="background-color:#00356B;color:white;">
                    <div class="col-md-6 px-4">
                        <img src="img/a1.jpg"  class="img-fluid" width="500"/>
                        </div>
                    <div class="col-md-6 px-4 mt-5">
                       <h4 class=" mb-3">We will open the world of knowledge for you!</h4>
                        <p style="text-align:justify;">We are a group of IT professionals who shared similar vision of starting a computer education centre which would provide quality training in various specializations of IT.</p>
                        <p style="text-align:justify;">We offer various courses, both short term and long term. Visit the 'courses' page for more details Do join us, explore the field of software technology and become an expert in IT.</p>
                        <p style="text-align:justify;">AgileTEC course developers and instructors combine extensive experience and knowledge of the principles of learning to provide quality IT training.</p>
                    </div>
                </div>
            </div>
                
 <div class="container d-flex flex-wrap flex-column">
     <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="border-radius:20px;">
                <img src="img/card1.jpg" class="card-img-top " style="border-top-left-radius:20px;border-top-right-radius:20px;" alt="img"/>
                <div class="card-body text-center">
                    <div class="card-title">
                    <h4>what we do</h4>
                    </div>
                    <div class="card-text">
                    <p> AgileTEC is run by Eminent Industrial Experts. The Training center houses excellent facilities for holding effective training sessions for batches of students.</p>
                    </div></div>
                <div class="card-footer mx-auto bg-white border-0">
                    <a href="aboutus.php"><input  type="button" class="btn0" value="Read more"></a>
                </div>
        </div>
        </div>
       
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="border-radius:20px;">
                 <img src="img/card2.jpg" class="card-img-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" alt="img"/>
                 <div class="card-body text-center">
                      
                     <h4>Our courses</h4>
                     
                     <p>We offer training in different streams of computer related technologies, languages and tools which falls in these following broad Spectrums which are-Web designing,programming & basic computer education</p>

                    
            </div>
                   <div class="card-footer mx-auto bg-white border-0">
                       <a href="Service.php"><input  type="button" class="btn0" value="Read more"></a>
                   </div></div>
      </div>
           <div class="col-md-4 mb-3">
            <div class="card h-100" style="border-radius:20px;">
                 <img  class="card-img-top" src="img/card3.jpg" style="border-top-left-radius:20px;border-top-right-radius:20px;" alt="img"/>
                 <div class="card-body">
                     <h4 class="text-center">Meet the team</h4>
                     <p class="text-center">AgileTEC is a pioneer in the field of learning with a long history of innovation. Our training team has an incredible corps of experienced trainers.</p>
                 </div>
                   <div class="card-footer mx-auto bg-white border-0">
                       <a href="ContactUS.php"><input  type="button" class="btn0" value="Read more" style=""></a>
                   </div></div>
        </div>
    </div>
 </div>
            <div class="container">
                <div class="row px-5 py-3">
            <div id="carouselExampleControls" class="carousel slide w-80 text-center" data-bs-ride="carousel" style="background-color:#00356B;color:white;border-radius:30px;">
  <div class="carousel-inner py-5" >
    <div class="carousel-item active">
        <img class="rounded-circle mt-4 mb-4 align-items-center"
             src="img/pro1.jpg" alt="avatar"
        style="width:160px;height:130px;" />
         <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3 text-center">Maria Kate</h5>
          <p class="text-center">
            I had the best experience with the AgileTEC training institute by learning AWS Cloud Architect. Their main benefit is considered to be as one-on-one training which helped me to understand the classes efficiently. Their scheduling timings for each student
          </p>
    </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mt-4 mb-4"
             src="img/pro2.jpg" alt="avatar"
        style="width:160px;height:130px;" />
         <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3 text-center">Maria Kate</h5>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
    </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4 mt-4"
             src="img/pro3.jpg" alt="avatar"
        style="width:160px;height:130px;" />
         <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3 text-center">Maria Kate</h5>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
    </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
            </div>
</div>
            </div>
        
<!--            <section class="footer mt-5">
            <div class="container-fluid px-5 py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a>   Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>   9876543210, 9786546342</p>
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
                        <a href=""><i class="fa fa-whatsapp" style="font-size:24px;"></i></a>
                        <a href=""><i class="fa fa-instagram" style="font-size:24px;margin-left:10px;"></i></a>
                        <a href=""><i class="fa fa-facebook" style="font-size:24px;margin-left:10px;"></i></a>
                </div>
            </div>
            </div>
        </section>-->
          <?php include 'footer.php';?>
        <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>

                        
        </form></body></html>
