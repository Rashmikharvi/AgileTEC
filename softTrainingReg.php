<!DOCTYPE html>

<?php
    require("connection.php");
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($con,"SELECT * FROM `softwaretraining` WHERE `id`='$id'");
    
    $row = mysqli_fetch_array($result);
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
        <section class="hhh">
            <div class="container-fluid py-3 px-4">
                <div class="row px-4">
                    <div class="col-md-4 align-items-center mx-auto">
                     <div class="d-flex justify-content-center" style="width:100%;height:auto;margin-bottom:30px;">

                         <img src="img/service.png" class="img-fluid" alt="">

                     </div></div>
                      <p style="color:#005A9C;font-size:12px;margin-bottom:9px;font-weight:500;">SOFTWARE TRAINING</p>
    <p class="h5 ">Web development</p>
    <p class="fs-6">AgileTEC  is leading institute for Website Design Training with React & Node Js, trusted by graduates in all streams & Working Professionals, Providing latest industry standard course curriculum.

We train you right from the basics to advance web designing, javascript & react js skills with node js skills by creating responsive websites for all the platforms of computers, tablets, and mobiles. This course gives you opportunities to get places in the renowned companies which offers the maximum payroll for the entry-level Web Designer position.
   Our industry-validated curriculum is designed with inputs from our Software Engineering Advisory Board comprised of industry veterans and renowned experts and authors. The program is delivered by top instructors with several years of experience under their belt. </p>             </div>
                
            </div>
        </section>
        <section>
            <div class="container-fluid px-4">
                <div class="row px-4">
                    <p class="h5">Intrested candidate can apply using the form below</p>
                     <div class="alert alert-danger text-center" id="errormsg" style="display: none;"></div>
                    <div class="col-md-4 mt-3 mb-3">
                       <form  name="internship" method="POST" onsubmit="return valIntership();">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" aria-label="Username" name="name" aria-describedby="basic-addon1">
   </div>
 <div class="input-group mb-3">
     <input type="text" class="form-control" placeholder="Email address" aria-label="Username" name="email" aria-describedby="basic-addon1">
   </div>
                         <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" name="pnum" aria-describedby="basic-addon1">
   </div>
              <button type="submit" name="internship" class="btn mt-3 w-100">Register</button>

                       </form>
                    </div>
                </div>
            </div>
        </section> 

<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6 text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div>   </div></section>
      <?php
            if(isset($_POST['internship'])){
                  $name=$_POST['name'];
           
            $email=$_POST['email'];
            $pnum=$_POST['pnum'];

             $sql="insert into register(name,email,pnum,service_id)values('$name','$email','$pnum','$id')";
            
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
                 alert("Registered succsessfully")
                return true;
            }
        </script>
        </body>
</html>
