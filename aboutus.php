<!DOCTYPE html>
<?php
require_once 'connection.php';
?>
<html>

<?php require("header.php");?>
<style>
body{
    font-family: 'Poppins', sans-serif;
    background-image:url(img/bg.jpg);
}
</style>

    <body>

<?php require("nav.php");?>
    
      <section class="main">
                <div class="container-fluid py-5">
                    <div class="row ">

                        <div class="col-md-6 justify-content-center px-4">
                            <div class="align-items-center justify-content-center">

                            <img src="img/image2.png" class="img-fluid" width="500"/>
                          </div></div>

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

           <div class="container-fluid ">
                    

<div class="row justify-content-center align-items-center">

     
      
     
   
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

         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
            </div></section>

    </body>
</html>
