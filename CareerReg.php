<!DOCTYPE html>

<?php
    require("connection.php");
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
                   
                    <div class="col-md-4 mt-3 mb-3 text-center ">
                        <form method="POST" name="internship" onsubmit="return valInternship();" class="card-body" enctype="multipart/form-data">
                        <div class="alert alert-danger text-center" id="errormsg" style="display: none;"></div>
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

              <button type="submit" name="internship" class="btn  mt-3 px-5">Apply</button>
              <p class="fs-6 mt-3">You can also send your resume to<a style="color:#0CAFFF;" href="">info@agiletech.in</a></p>

                       </form>
                    </div>
                </div>
            </div>
        </section> 

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
          

                   $resume = $_FILES['resume']['name'];
        $tmpresume = $_FILES['resume']['tmp_name'];
        

        $folder = "syllabus/".$resume;
            $sql="insert into careerregister(name,email,pnum,resume)values('$name','$email','$pnum','$resume')";

            mysqli_query($con, $sql);
           
           move_uploaded_file($tmpresume, $folder);

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
