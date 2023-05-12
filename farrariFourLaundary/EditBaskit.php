<?php 
include 'config.php';

if(isset($_POST["submit"]))
{
    $id= $_GET['id'];
	
	    $qty= $_POST['qty'];
    echo    $sql="UPDATE `baskit` SET `qty`='$qty' where  `id`='$id'";
	 

    $insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }
        header('Location:'.'bookItems.php');

}


?>


<?php
  $id= $_GET['id'];
   $result2 = $con->query("SELECT * FROM `baskit` where `id`='$id'"); 
   ?>  
       <?php while($row2 = $result2->fetch_assoc())
        { 
          //`id`, `itemcode`, `qty`, `price`, `totalPrice`
         $id= $row2['id'];
         $code= $row2['itemcode'];
         $qty= $row2['qty'];


         
        }
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
  <form action="EditBaskit.php?id=<?php echo $id; ?>" method="post">
  <table border=1>
          

 
       

       <tr><td>ID</td>     <td> <?php echo $id?></td></tr>
       <tr><td>Item Code</td><td><input type="Text" name="code" value="<?php echo $code; ?>"></td> </tr>
       <tr><td>Quantity</td><td><input type="number" name="qty" value="<?php echo $qty ?>"></td> </tr>
       <tr><td></td><td><input type="submit" class="btn-success"  name="submit" value="Save Changes"></td></tr>
              <td> 
 </table>
          </form>
  </div>

  </div>
 <div class="row">
 <div class="footer">
 <?php include_once "footer.php"; ?>
</div>
</div>
</body>
</html>


