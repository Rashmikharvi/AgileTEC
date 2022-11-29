<!DOCTYPE html>
<?php
    require("connection.php");
?>
<?php
$id=$_GET['id'];
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
    <section>
            <div class="container-fluid py-3 px-4">
                <div class="row">
                   <div class="col-md-4 align-items-center mx-auto">
                     <div class="d-flex justify-content-center" style="width:100%;height:auto;margin-bottom:30px;">

                         <img src="img/service.png" class="img-fluid" alt="">

                     </div></div>
    <p style="color:#005A9C;font-size:12px;margin-bottom:9px;font-weight:500;">SOFTWARE DEVELOPMENT</p>
    <p class="h5 ">Web development</p>
    <p class="fs-6">A paragraph could be part of a text that informs people, describes something, critiques something, compares things, persuades people, lists a process, makes an argument, offers a solution, or narrates a story. The level of detail will vary from text to text, so there is no answer to the question "how long is a paragraph?".

This diversity means that it's not always easy to determine what "one topic" means when dividing your text into paragraphs. For example, you could have a one-topic paragraph describing Venus (with the next paragraph describing Mars) or a one-topic paragraph describing the hues of a sunset (with the next paragraph describing its reflection in the sea).

So, what is a topic? That is another question that cannot be answered. Sometimes, a paragraph will be an aspect of a topic, sometimes it will be a topic within an issue, sometimes it will be an issue within an argument...a narrative, a process, a comparison, whatever. Whatever the scope of your paragraph, it should be neatly bounded as one aspect. If you prefer "aspect" instead of "topic," go with that.
</p>             
                     </div>
                   
                  
                
            </div>
        </section>
        <section>
            <div class="container-fluid px-4 ">
                <div class="row">
                    <p class="h5">Have an idea in mind? lets have a talk!</p>
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
                     <button type="submit" name="internship" class="btn mt-3 w-100">Contact Us</button>

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
    </body>
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
                 alert("Registered successfully")
                return true;
            }
        </script>
</html>
