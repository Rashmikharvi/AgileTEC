<?php
    require("connection.php");
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($con,"SELECT * FROM `internshipprogram` WHERE `id`='$id'");
    
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
  <div class="container">
            <div class="container" style="background-color: #fff;">
                <div class="p-3 my-5">
                    <div class="mb-5">
                        <img src="img/<?php echo $row['iimg']; ?>" style="border: solid #000;width: 100%;" />
                    </div>
                    <div class="mb-3">
                        <h1 style="color:#005A9C;"><?php echo $row['service_name']; ?></h1>
                    </div>
                    <div class="mb-5">
                        <p style="text-align: justify;"><?php echo $row['descrip']; ?></p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="card border-light">
                                <div class="card-body bg-light">
                                    <div>
                                        <h5 class="mb-3">
                                            Are you looking for Best <?php echo $row['service_name']; ?> Course in Mangalore ?
                                        </h5>
                                        <p style="text-align:justify;">
                                            Our <mark>AgileTEC</mark> will ensure you to understand the terminologies that the <?php echo $row['service_name']; ?> Course will encompass in it.
                                        </p>
                                        <p style="text-align:justify;">
                                            The place where you have landed is an epitome of excellence in teaching and practicing <?php echo $row['service_name']; ?> concepts.
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-5">
                            <h4 class="text-warning">Overview</h4>
                            <table class="table">
                                <tr>
                                    <th>Level</th>
                                    <td><?php echo $row['level']; ?></td>
                                </tr>
                                <tr>
                                    <th>Prerequisites</th>
                                    <td><?php echo $row['prere']; ?></td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td><?php echo $row['duration']; ?></td>
                                </tr>
                                <tr>
                                    <th>Exit profile</th>
                                    <td><?php echo $row['exit']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

<?php require("footer.php");?>
         <section><div class="container">
                <div class="row">
                    
                    <p class="fs-6 text-center" style="color:#adb5bd">Copyright@AgileTEC 2022</p>
                </div> </div></section>
    </body>
</html>
