<?php
include 'config.php';
if(isset($_POST['add']))
{
	
	$userid = $_POST['name'];
	$Type = $_POST['userType'];
    $price = $_POST['price'];
    $status ="available";
          echo  $query= "INSERT INTO `items`( `title`, `category`, `price`, `status`) VALUES ('$userid','$Type','$price',' $status')";
			$insert = mysqli_query($con,$query);
	        echo '<h2> Record is saved  successfully </h2>';
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
  <form method="post" action="addItems.php">
    <h1> Add Items interface</h1>
    <hr>
    <table>
        <tr><td>Item Name</td><td><input type="text" name="name" required></td><td>*</td> </tr>
        <tr><td>Item Type</td>
        <td>
            <input type="radio" name="userType"
<?php if (isset($userType) && $userType=="Men") echo "checked";?>
 value="Men">Men<br>
 <input type="radio" name="userType"
<?php if (isset($userType) && $userType=="Women") echo "checked";?>
 value="Women">Women<br>

 <input type="radio" name="userType"
<?php if (isset($userType) && $userType=="Home") echo "checked";?>
 value="Home">Home<br>

</td><td>*</td> </tr>
        <tr><td>Unit Price</td><td><input type="number" name="price" required></td><td>*</td> </tr>
        <tr><td></td><td></td><td></td> </tr>
        <tr><td></td><td></td><td></td> </tr>
        <tr><td></td><td><button type="submit" name="add"> Add Items</button></td><td></td> </tr>
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


