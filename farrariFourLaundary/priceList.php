
<?php include 'config.php';
$result = $con->query("SELECT * FROM `items`"); 


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
  <div style="display: inline-Block; width: 100px; margin: 3px;">
  <table border=1>
  <tr> <th>Select</th><th>Code</th><th>Title </th><th>Type</th><th>Price</th></tr>
        <?php while($row = $result->fetch_assoc())
        { ?> 
		
            
              <tr>
              <td><input type="checkbox" name="items" value=" <?php echo $row['item_code']?>"> </td>
        
            <td>
				 <?php echo $row['item_code']?>
        </td>
		<td>
				 <?php echo $row['title']?>
        </td>
				
           
      
	  <td>
	   <?php echo $row['category']?>
        </td>
        <td>
	   <?php echo $row['price']?>
	  </td>
      
        </tr>
	   
	   <?php

// echo '<a href="tech.php?id=' . $row['userid'] . '">Show Details</a>';

	    } ?> 
	  </table>
     </div></div>
<?php  ?>
    


    
  </div>

  </div>
 <div class="row">
 <div class="footer">
 <?php include_once "footer.php"; ?>
</div>

</div>
</body>
</html>


