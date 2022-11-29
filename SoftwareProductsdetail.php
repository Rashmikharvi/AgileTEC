<!DOCTYPE html>

    <?php
    require("connection.php");
    $id = $_GET['id'];
?>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<?php require("header.php");?>
    <?php
    
    $result = mysqli_query($con,"SELECT * FROM `softwareproducts` WHERE `id`='$id'");
    
    $row = mysqli_fetch_array($result);
?>
  
   
        <style>
     body{
    font-family: 'Poppins', sans-serif;
    background-image:url(img/bg.jpg);
}
</style>
    <body>
        <?php require("nav.php");?>
       
 <div class="container">
            <div class="container" style="background-color: #fff;">
                <div class="p-3 my-5">
                    <div class="mb-5">
                        <img src="img/<?php echo $row['image']; ?>" style="border: solid #000;width: 100%;" />
                    </div>
                    <div class="mb-3">
                        <h1 style="color:#005A9C;"><?php echo $row['platform']; ?></h1>
                    </div>
                    <div class="mb-5">
                        <p style="text-align: justify;">This is description for above software products</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="card border-light w-100 h-100">
                                <div class="card-body bg-light ">
                                    <div>

                                           <p style="text-align: justify;"><?php echo $row['description']; ?></p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-5">
                            
                             <div class="card border-light h-100 w-100">
                                   <div class="card-body bg-light">
                                        <div class="card-body bg-light">
                                            <div class="card-title">
                                            <h4 class="text-warning">TECHNOLOGIES USED</h4>
                                            </div>
                                            <div>
                                                <p style="text-align: justify;">
                                                   <?php echo $row['technology_used']; ?> 
                                                </p>
                                                
                                            </div>

                            
                            
                        </div>
                                   </div></div></div></div>

                </div>
            </div>
        </div>
        
                  
   
      
     
     <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
     
      <?php
                            $result1 = mysqli_query($con,"SELECT * FROM `productimage` WHERE `product_id`='$id'");
                            $i=0;
                              while($row = mysqli_fetch_array($result1)){
                            $actives='';
                            if($i==0){
                                $actives='active';
                            }
                            ?>
    <div class="carousel-item <?=$actives;?>">
        <img src="img/<?php echo $row['image']; ?>" class="d-block w-100" style="width:100%;height:400px;object-fit:cover;">
    </div>
     <?php $i++;}?>
   
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
        
            </div></div>
 
       

    

<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6 text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>
    </body>
</html>
