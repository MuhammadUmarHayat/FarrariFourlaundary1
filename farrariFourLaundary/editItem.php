<?php
include 'config.php';

$id= $_GET['id'];

$result = $con->query("SELECT * FROM items where item_code='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		
	$title=	$row['title'];
$category= $row['category'];
		$price= $row['price'];
		 $status=$row['status'];
		 /// $Quantity $unitPrice $TotalPrice
}
}







if(isset($_POST['edit']))
{
	$id= $_GET['id'];
	$title = $_POST['name'];
	$Type = $_POST['userType'];
    $price = $_POST['price'];
    $status ="available";
          echo  $query= "update `items` set `title`='$title', `category`='$Type', `price`='$price' where `item_code`='$id'";
			$insert = mysqli_query($con,$query);
	        echo '<h2> Record is updated  successfully </h2>';
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
  <form method="post" action="editItem.php?id=<?php echo $id ?>">
  
    <h1> Edit Items interface</h1>
    <hr>
    <table>
    <tr><td>Item Code</td><td><?php echo $id ?></td><td></td> </tr>
        <tr><td>Item Name</td><td><input type="text" name="name" value= "<?php echo $title ?>" required></td><td>*</td> </tr>
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
        <tr><td>Unit Price</td><td><input type="number" name="price" value= "<?php echo $price ?>" required></td><td>*</td> </tr>
       
        <tr><td></td><td></td><td></td> </tr>
        <tr><td></td><td><button type="submit" name="edit"> Save Changes</button></td><td></td> </tr>
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


