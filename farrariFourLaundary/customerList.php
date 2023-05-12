<?php include 'config.php'; 
 
$result = $con->query("SELECT * FROM customers"); 
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
  <table>
    <tr>
    <th>Custoemr Code</th>
    <th>Customer Name</th>
    <th>Mobile Number</th>
    <th>CNIC No</th>
    <th>Address</th>
    </tr>
  <?php if($result->num_rows > 0)
  { 
    
    while($row = $result->fetch_assoc())
    {//`code`, `name`, `mobile`, `cnic`, `address`
      $code= $row['code'];
       $name=$row['name'];
      $mobile=$row['mobile'];
      $cnic=$row['cnic'];
      $address= $row['address'];
    
       ?>


<tr>
    <td><?php echo $code?></td>
    <td><?php echo$name?></td>
    <td><?php echo$mobile?></td>
    <td><?php echo$cnic?></td>
    <td><?php echo$address?></td>
</tr>
   <?php 
    }
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


