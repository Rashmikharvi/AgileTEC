<!DOCTYPE html>

<?php
    require("connection.php");
?>
<html>

<?php require("header.php");?>
   <style>

       
 .text-start {
    color: #fff;
}

.card-img-overlay {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    height: 100%;   
}
.card-footer{
    border:none;
}
.card{
    border:none;
}
 body{
    font-family: 'Poppins', sans-serif;
    background-image:url(img/bg.jpg);
}

        </style>
    
    <body>
        <?php require("nav.php");?>


               <div class="container-fluid">
                    
                <div class="d-flex justify-content-center flex-wrap mt-3">
                  
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM `gallery`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                      <div class="card">
                    <img src="img/<?php echo $row['image']; ?>" alt="not found" class=" p-1 m-3 card-img-top" style="max-width:320px;" />

                <div class="card-img-overlay">
                             <h5 class="card-title"></h5>
                             <div class="card-footer text-start">
                                 <h6><?php echo $row['title']; ?></h6>
                    </div>
            </div>
        </div>
 <?php } ?>
               </div>
                </div>
           
  

<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
            </div></section>
        
    </body>
</html>
