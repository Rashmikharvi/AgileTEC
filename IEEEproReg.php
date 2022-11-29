<?php
    require("connection.php");
?>
<?php


?>
<!DOCTYPE html>

<html>

<?php require("header.php");?>

<style>
.form-select{
          border-radius: 20px;  
          border:1px solid black;
         
        }
        .btn1{
            border-color:#0CAFFF;
            color:#0CAFFF;
            border-radius: 20px;
           
        }
         body{
    font-family: 'Poppins', sans-serif;
    background-image:url(img/bg.jpg);
}
</style>
    <body>

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

                          
                           </div>
                                
                        </section>        
        
             
          <div class="col-md-4 mt-3 mb-3">
                             <button type="submit" class="btn w-100">Pay</button>
                           </div>
        </form>

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

                $query = "INSERT INTO `iprojectregister`(`pname`,`college`,`course`,`branch`,`sname`,`smail`,`spno`,training_id,is_value)VALUES('$pname','$college','$course','$branch','$sname','$smail','$spno','',0)";
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
