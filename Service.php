
<?php
    require("connection.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/style.css" />  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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
            height:40px;
            width:230px;
            text-align:center;
        }
       .btn1:active{
           height:40px;
            width:230px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
        }
       .btn1:focus{height:40px;
            width:230px;
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
            text-align: center;
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
        .block-card {
  display: none;
}

.block-card.active {
  display: block;
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
   .card-img-top {
width:100%;
height:250px;
object-fit:cover;
   }
        </style>
    <body>
        <?php require("nav.php");?>
<!--          <nav class="navbar navbar-expand-lg shadow py-4 navbar-white">
  <div class="container-fluid">
       <div class="swing">
          <a href="index.php"> <img src="img/logo.png" alt="" class="img-fluid" style="height:80px;"></a></div>

      <div class="avatar">
          <a href="index.php"><img src="img/logo.png" alt="logo" class="img-fluid" style="height:55px;"></a>
      </div>
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
       

         <section class="ddd">
       <nav class="navbar navbar-expand-lg navbar-white m-4">
  <div class="container-fluid">
      
      <select class="navbar-toggler" style="width:100%;border-color:#0CAFFF;color:#0CAFFF;border-radius:20px;" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Default select example">
          <option selected>services</option>
      </select>

   <div class="collapse navbar-collapse" id="navbarNav">
      
         <ul class="d-flex navbar ml-0 select px">
<!--             <input type="button" name="answer"  class="btn1" onclick="showDiv('toggle')" value="software training">-->
             <div class="filter" >      
             <button class=" filter-btn btn1 px-3 mb-2 active" data-target="#block-1" type="submit"><i class="bi bi-mortarboard-fill"></i> Software training</button>
                          <button class=" filter-btn btn1 px-3 mb-2"  data-target="#block-2" type="submit"><i class="bi bi-mortarboard-fill"></i> Internship program</button>
                           <button class=" filter-btn btn1 px-3 mb-2"  data-target="#block-3" type="submit"><i class="bi bi-mortarboard-fill"></i> Software development</li></button></li>
                     <button class=" filter-btn btn1 px-3 mb-2" data-target="#block-4" type="submit"><i class="bi bi-mortarboard-fill"></i> IEEEproject guidence</button>
             </div>
            
         </ul>
       
  
    
               
    </div>
  </div>
</nav>
         </section>
        <div class="block">
             <div class="block-card active" id="block-1">
   
        <div class="container">
            <div class="my-5">
               
                
                <div class="d-flex justify-content-evenly flex-wrap">
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `software training`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="card mb-5 course-card" style="border-radius:20px;">
                            <img class="card-img-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['simg']; ?>" />
                            <div class="card-body">
                                <h4   style="color:#005A9C;"><?php echo $row['sname']; ?></h4>
                                <p>Learn What is <?php echo $row['sname']; ?> and Become Expert in <?php echo $row['sname']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="softTraingdetails.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="softTrainingReg.php" class="btn">Register Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
      </div>
             <div class="block-card " id="block-2">
          
   
        <div class="container">
            <div class="my-5">
               
                <div class="d-flex justify-content-evenly flex-wrap">
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `internship program`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                    <div class="card mb-5 course-card" style="border-radius:20px;">
                            <img class="card-image-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['iimg']; ?>" />
                            <div class="card-body">
                                <h4 style="color:#005A9C;"><?php echo $row['iname']; ?></h4>
                                <p>Learn What is <?php echo $row['iname']; ?> and Become Expert in <?php echo $row['iname']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="internPgrdetails.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="internshipReg.php" class="btn">Apply</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
             </div >
            <div class="block-card" id="block-3">
         <div class="container">
            <div class="my-5">
               
                
                <div class="d-flex justify-content-evenly flex-wrap">
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `software development`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="card mb-5 course-card" style="border-radius:20px;">
                            <img class="card-image-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['simg']; ?>" />
                            <div class="card-body">
                                <h4 style="color:#005A9C;"><?php echo $row['sname']; ?></h4>
                                <p>Learn What is <?php echo $row['sname']; ?> and Become Expert in <?php echo $row['sname']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="softwaredevdetail.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="softwaredevReg.php" class="btn">Register</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
          </div>
              <div class="block-card" id="block-4">
         <div class="container">
            <div class="my-5">
                
                
                <div class="d-flex justify-content-evenly flex-wrap">
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `ieee projectguide`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="card mb-5 course-card"style="border-radius:20px;">
                            <img class="card-image-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['pimg']; ?>" />
                            <div class="card-body">
                                <h4 style="color:#005A9C;"><?php echo $row['pname']; ?></h4>
                                <p>Learn What is <?php echo $row['pname']; ?> and Become Expert in <?php echo $row['pname']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="IEEEprodetail.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="IEEEproReg.php" class="btn">Get</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
        </div>
<?php require("footer.php");?>

<!--            <section class="footer mt-5">
            <div class="container-fluid px-5 py-5">
                <div class="row ">
                    <div class="col-lg-3">
                        <p class="h4" style="color:#0CAFFF;">AgileTEC</p>
                        <p> <a href=""><i class="fa fa-map-marker" style="font-size:30px;color:#0CAFFF"></i></a>   Office.no.4,First floor,Lalbhag,Commercial Complex(Near Mangalore City Corporation),Lalbagh,Mangalore-575003</p>
                       <p> <a href=""><i class="fa fa-phone" style="font-size:30px;color:#0CAFFF"></i></a>   9876543210, 9786546342</p>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="index.php"> home </a><br><br>
                        <a href="aboutus.php"> About us</a><br><br>
                        <a href="Gallerry.php"> Gallery</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href="Career.php" >carrer</a><br><br>
                        <a href="ContactUS.php">contact us</a><br><br>
                    </div>
                    <div class="col-lg-3 px-4">
                        <a href=""><i class="fa fa-whatsapp" style="font-size:24px;"></i></a>
                        <a href=""><i class="fa fa-instagram" style="font-size:24px;margin-left:10px;"></i></a>
                        <a href=""><i class="fa fa-facebook" style="font-size:24px;margin-left:10px;"></i></a>
                </div>
            </div>
            </div>
        </section>-->
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>

<!--        <script>
        let $blocks = $('.block-card');

$('.filter-btn').on('click', e => {
  let $btn = $(e.target).addClass('active');
  $btn.siblings().removeClass('active');
  
  let selector = $btn.data('target');
  $blocks.removeClass('active').filter(selector).addClass('active');
});
    </script>-->
         <script>
        let $blocks = $('.block-card');

$('.filter-btn').on('click', e => {
  let $btn = $(e.target).addClass('active');
  $btn.siblings().removeClass('active');
  
  let selector = $btn.data('target');
  $blocks.removeClass('active').filter(selector).addClass('active');
});
    </script>
    </body>
</html>
