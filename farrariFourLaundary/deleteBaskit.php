<?php include 'config.php'; 
 
$id= $_GET['id'];
$statusMsg ="";

$insert = $con->query("Delete from `baskit` where `id`='$id'"); 
             if($insert){ 
               
                 $statusMsg = "Record is deleted successfully."; 
                
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  
            header('Location:'.'bookItems.php');



?>