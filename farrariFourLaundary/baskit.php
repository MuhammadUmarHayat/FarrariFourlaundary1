<?php
include 'config.php';
$item = $_GET['id'];

$qty =1;
     $query= "INSERT INTO `baskit`( `itemcode`, `qty`, `date`) VALUES ('$item ','$qty','')";
        $insert = mysqli_query($con,$query);
        $result = $con->query("SELECT * FROM `baskit`"); 


?>

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
  
    <?php while($row = $result->fetch_assoc())
        { ?> 
		</div>
    <div style="float:left; padding: 10px;margin-top:10px;margin-left: 20px; width: 300px;border: 1px solid red;word-wrap:break-word;  ">
Code: <?php echo $row['itemcode']?>

<br>
Quantity: <?php echo $row['qty']?>

<br>
   
     <br>
     <?php  
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


