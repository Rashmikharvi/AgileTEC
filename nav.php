
      
<nav class="navbar navbar-expand-lg shadow  py-4 navbar-white" style="background-color:white;">
  <div class="container-fluid">
       <div class="nav-brand">
          <a href="index.php"> <img src="img/logo.png" alt="" class="img-fluid" style="height:70px;"></a>
          <p class="font" style="font-size:10px;color:#00356B;"><a href="service.php" style="text-decoration:none;">𝙎𝙤𝙛𝙩𝙬𝙖𝙧𝙚 𝙩𝙧𝙖𝙞𝙣𝙞𝙣𝙜| 𝙄𝙣𝙩𝙚𝙧𝙣𝙨𝙝𝙞𝙥 𝙥𝙧𝙤𝙜𝙧𝙖𝙢</a></p></div>
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
</nav>
