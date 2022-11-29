<?php
    require("connection.php");
?>
<!DOCTYPE html>

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
        <section class="bbb">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 ">
                        <form method="POST" >
                        <h3>Get in touch with us</h3>
                         <div class="input-group mt-5 mb-3">
                             <input type="text" class="form-control" placeholder="Name" aria-label="Username" name="cname" aria-describedby="basic-addon1" autocomplete="off" required>
   </div>
 <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Email address" aria-label="Username" name="cmail" aria-describedby="basic-addon1" autocomplete="off" required>
   </div>
                        <div class="input-group mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="message"  name="message"  required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn py-3 mb-4 w-100">Register</button> 
                        </form>
                    </div>
                    <div class="col-md-6 px-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d32351.4635998621!2d74.82527919247217!3d12.888682973139653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5812d9734d573ae6!2sAgileTEC!5e0!3m2!1sen!2sin!4v1666869023882!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <i class="fa fa-envelope " aria-hidden="true" style="font-size:24px;"></i> info@agiletec.in
                    <i class="fa fa-clock-o" style="font-size:24px; margin-left:40px;"></i>  Mon-Sat 9AM to 7PM
                    </div>
                </div>
            </div>
        </section> 

<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div>
                </div></section>
         <?php
            if(isset($_POST['submit'])){
                $to = "kowshikpc007@gmail.com";
                $subject = "this is subject";
                $message = $_POST['message'];
                
                if(mail($to, $subject, $message)){
                    print '<script>alert("message sent successfully");</script>';
                }
                else{
                   print '<script>alert("message not sent");</script>'; 
                }
            }
        ?>
    </body>
</html>
