
<?php
    require("connection.php");
?>
<html>

<?php require("header.php");?>
  
  

<style>    
    .block-card {
  display: none;
}

.block-card.active {
  display: block;
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
            width:235px;
            text-align:center;
        }
       .btn1:active{
           height:40px;
            width:235px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
        }
       .btn1:focus{height:40px;
            width:235px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
            font-weight: bold;
        }
         .btn1:hover{height:40px;
            width:235px;
            background-color:transparent;
            color: #0CAFFF;
            outline:none;
            border:2px solid #0CAFFF;
            border-radius: 20px;
            font-weight:bold;
            text-align: center;
        }
         body{
    font-family: 'Poppins', sans-serif;
    background-image:url(img/bg.jpg);
 }
/* .btn {
     background-color:#0CAFFF;
            color: white;
            outline: none;
            border-radius: 20px;
            width:100%;
            margin-top:20px;
  display: inline-block;
  border-radius: 4px;
  
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}*/
.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
}
/*.project a{
    text-decoration:none;
}*/
</style>
    <body>
        <?php require("nav.php");?>

     
       

         <section class="ddd">
       <nav class="navbar navbar-expand-lg navbar-white m-4">
  <div class="container-fluid">
      
      <select class="navbar-toggler" style="width:100%;border-color:#0CAFFF;color:#0CAFFF;border-radius:20px;" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Default select example">
          <option selected>services</option>
      </select>

   <div class="collapse navbar-collapse" id="navbarNav">
      
         <ul class="d-flex navbar ml-0 select px">

             <div class="filter" >      
             <button class=" filter-btn btn1 px-2 mb-2 active" data-target="#block-1" type="submit"><i class="bi bi-mortarboard-fill"></i> Software training</button>
                          <button class=" filter-btn btn1 px-2 mb-2"  data-target="#block-2" type="submit"><i class="bi bi-mortarboard-fill"></i> Internship program</button>
                           <button class=" filter-btn btn1 px-2 mb-2"  data-target="#block-3" type="submit"><i class="bi bi-mortarboard-fill"></i> Software development</li></button></li>
                     <button class=" filter-btn btn1 px-2 mb-2" data-target="#block-4" type="submit"><i class="bi bi-mortarboard-fill"></i> IEEEproject guidence</button>
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
                        $result = mysqli_query($con,"SELECT * FROM `softwaretraining`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="card mb-5 course-card" style="border-radius:20px;">
                            <img class="card-img-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['simg']; ?>" />
                            <div class="card-body">
                                <h4   style="color:#005A9C;"><?php echo $row['service_name']; ?></h4>
                                <p>Learn What is <?php echo $row['service_name']; ?> and Become Expert in <?php echo $row['service_name']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="card-footer border-0 bg-white">
                                    <a href="softTraingdetails.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="softTrainingReg.php?id=<?php echo $row['id']; ?>" class="btn">Register Now</a>
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
                        $result = mysqli_query($con,"SELECT * FROM `internshipprogram`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                    <div class="card mb-5 course-card" style="border-radius:20px;">
                            <img class="card-image-top" style="border-top-left-radius:20px;border-top-right-radius:20px;" src="img/<?php echo $row['iimg']; ?>" />
                            <div class="card-body">
                                <h4 style="color:#005A9C;"><?php echo $row['service_name']; ?></h4>
                                <p>Learn What is <?php echo $row['service_name']; ?> and Become Expert in <?php echo $row['service_name']; ?> Field.</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <span class="text-muted"><i class="bi bi-briefcase-fill text-success"></i> <?php echo $row['exit']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-muted"><i class="bi bi-clock text-danger"></i> <?php echo $row['duration']; ?></span>
                                    </div>
                                </div>
                                <div class="card-footer border-0 bg-white">
                                    <a href="internshipdetails.php?id=<?php echo $row['id']; ?>">Read More</a>
                                    <a href="internshipReg.php?id=<?php echo $row['id']; ?>" class="btn">Apply</a>
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
                        $result = mysqli_query($con,"SELECT * FROM `softwareproducts`");
                        
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="card mb-5 course-card h-100" style="border-radius:20px;">
                            <img class="card-image-top" style="border-top-left-radius:20px;border-top-right-radius:20px;height:250px;" src="img/<?php echo $row['image']; ?>" />
                            <div class="card-body">
                                <h4 style="color:#005A9C;"><?php echo $row['title']; ?></h4>
                                <p>Learn What is <?php echo $row['title']; ?> and Become Expert in <?php echo $row['title']; ?> Field.</p>
                                
                                  
                              
                                <div class="card-footer border-0 bg-white">
                                    
                                    <a href="SoftwareProductsdetail.php?id=<?php echo $row['id']; ?>" class="btn">More info</a>
                                </div>
                                  </div>
                            </div>
                        
                    <?php } ?>
                    </div>
            </div>
            </div>
            </div>
        
        
             <section class="project">
              <div class="block-card" id="block-4">

            <div class="my-5">-->
<div class="row justify-content-end">
                <div class="col-md-4 offset-md-6">
                    <a href="IEEEproReg.php" class="btn w-50" style="vertical-align:middle"> <span>Register</span></a>
                </div></div>
                  <div class="container" style="background-color: #fff;">
            <div class="p-3 my-5">
                
                 <table class="table">
                    <thead>
                        <tr>
                            
                            <th>sl.No</th>
                            
                            <th>Title</th>
                            <th>Description</th>
                            <th>Domain</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                        $result = mysqli_query($con,"SELECT * FROM `project_topic`");
                          $count = 1;
                        while ($row=mysqli_fetch_array($result)){
                    ?>
                         <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['platform']; ?></td>
                     </tr>
                            <?php $count++; } ?>
                    </tbody>
                </table>
                 

            </div>
        </div>
              </div></section>
        </div>
<?php require("footer.php");?>


         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6  text-center " style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>


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
