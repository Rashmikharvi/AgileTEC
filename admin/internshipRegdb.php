<!DOCTYPE html>

<?php
    include "../connection.php";
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>service9</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
      <style>
           *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            
        }
         .nav-link{
            color:black;
        }
        .nav-link:hover{
            color:#0CAFFF;
            transition:all 0.5s;
            font-weight:bold;
        }
        
        .nav-item{
            color:black;
            font-weight:500;
            padding-left:35px;
        
        }
         .btn0{
            height:40px;
            width:130px;
            background-color:transparent;
            color: #0CAFFF;
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
       

        .form-control{
            border-radius: 20px;
            border:1px solid black;
            color:black;
           
        }
        .form-select{
          border-radius: 20px;  
          border:1px solid black;
          color:black;
         
        }
        .btn1{
            border-color:#0CAFFF;
            color:#0CAFFF;
            border-radius: 20px;
           
        }
         .footer{
            background-color:#303030;
            color:white;
        }
        .footer a{
            text-decoration:none;
            color:white;
         
        }

        </style>
        <body>
       
          <nav class="navbar navbar-expand-lg navbar-whie">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin/panel.php">
                    <img src="../img/logo.png" alt="logo" height="60" />
                </a>
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../admin/panel.php">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/gallerydb.php">Gallery</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link " href="../admin/careerRegdb.php">carrer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/ieeeProjectRegdb.php">IEEE projectRegister</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="../admin/SoftwareTrainingRegdb.php">Software training</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/internshipRegdb.php">internship register</a>
                        </li>
                    </ul>
                    
                  <a href="../index.php" class="btn btn-primary" style="margin:0 50px;">Logout</a>
                </div>
            </div>
        </nav>
        
              
              <div class="container" style="background-color: #fff;">
            <div class="p-3 my-5">
                <div class="mb-5">
                    <h1 class="text-primary">course register detail</h1>
                </div>
                      <table class="table">
                    <thead>
                        <tr>
                           
                          <th>id</th>
                             <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>project name</th>
                            <th>college</th>
                            <th>course</th>
                            <th>branch</th>
                            <th>service name</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            $query = "SELECT iprojectregister.id,iprojectregister.sname,iprojectregister.smail,iprojectregister.spno,iprojectregister.is_contacted,iprojectregister.pname,iprojectregister.college,iprojectregister.course,iprojectregister.branch,internshipprogram.service_name
                                 FROM internshipprogram,iprojectregister
                                 WHERE is_value=1 and iprojectregister.training_id=internshipprogram.id";
                          $result = mysqli_query($con, $query);
                           if(!$result){
                               echo "error=". mysqli_error();
                           }
                           
                            $count = 1;
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr id="<?php echo $row['id'] ?>">
                           
                          <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['sname']; ?></td>
                            <td><?php echo $row['smail']; ?></td>
                            <td><?php echo $row['spno']; ?></td>
                            <td><?php echo $row['pname']; ?></td>
                           <td><?php echo $row['college']; ?></td>
                           <td><?php echo $row['course']; ?></td>
                           <td><?php echo $row['branch']; ?></td>
                           <td><?php echo $row['service_name']; ?></td>
 <td><?php  
                            if($row['is_contacted']==0){
                                echo '<font color="red">not contacted</font>';
                            }
                               
                                else{
                                    echo'<font color="green">contacted</font>';
                                }
                            
                                                              ?></td>
                            <td>

 <?php 
                              if($row['is_contacted']==0){

                               echo '<button class="btn btn-danger btn-sm update" id="btn">click</button>';
                              }
                              else{
                                 '<button class="btn btn-danger btn-sm disabled">click</button>';
                              }
                              
                              ?> 
                              
                            </td>
                        </tr>
                            <?php $count++; } ?>
                        
                       
                    
                    </tbody>
                </table>
            </div>
        </div>
          


    </body>
    <script type="text/javascript">
    $(".update").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure?'))
        {
            $.ajax({
               url: 'ajax2.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function() {

            $(document).ajaxStop(function(){
            window.location.reload();
             });
                    alert("Record updated successfully");  
               }
            });
        }
    });


</script>
</html>


