
        <?php
         include "../connection.php";
        if(isset($_GET['id']))
{
             $id = $_GET['id'];

     mysqli_query($con,"UPDATE iprojectregister SET is_contacted='1'  WHERE `id`='$id'");
	 echo 'updated successfully.';
}


?>
        
