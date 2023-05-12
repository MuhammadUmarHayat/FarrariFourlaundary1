

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="StyleSheet1.css" rel="stylesheet" />
</head>
<body>

<div class="header">
<h1>Farrari Four laundary</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    
    <?php include_once "nav2.php"; ?>
  </div>

   
  <div class="col-6 col-s-9">
  


<?php include 'config.php'; 
 //`dresstype`, `category`, `price`
// Get image data from database 
$id= $_GET['id'];
$statusMsg ="";

$insert = $con->query("Delete from `items` where `item_code`='$id'"); 
             if($insert){ 
               
                 $statusMsg = "Item is deleted successfully."; 
                 header('Location:'.'admin_Account.php');
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  
?>
</div>

</div>
<div class="row">
<div class="footer">
<?php include_once "footer.php"; ?>
</div>

</div>
</body>
</html>
