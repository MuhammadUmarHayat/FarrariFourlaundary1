
<?php include 'config.php';

 $booking_No=0;
 $code =0;
 $totalBill=0;
     $name ="";
     $date = date('d-m-y h:i:s');
echo $date;
			
 $result = $con->query("SELECT * FROM `booking_items`"); 

 if($result->num_rows > 0)
 {
    $row = $result->fetch_assoc();
   $booking_No = $row['booking_No'];
    if($booking_No==null)
    {
         $booking_No=0;
    }
    
 }
 //,Search,,,,, ,,
 if(isset($_POST['Search']))
 {
   $search=$_POST['search'];

   $result = $con->query("SELECT * FROM `customers` WHERE `code`='$search' or  `mobile`='$search' or `cnic`='$search'"); 

   if($result->num_rows > 0)
   {
      $row = $result->fetch_assoc();
     $code = $row['code'];
     $name = $row['name'];
      
      
   }


     
 }
 if(isset($_POST['Mobile']))
 {
    $search=$_POST['search'];

   $result = $con->query("SELECT * FROM `customers` WHERE  `mobile`='$search' "); 

   if($result->num_rows > 0)
   {
      $row = $result->fetch_assoc();
     $code = $row['code'];
     $name = $row['name'];
      
      
   }
  
 }
 if(isset($_POST['Code']))
 {
    $search=$_POST['search'];

    $result = $con->query("SELECT * FROM `customers` WHERE `code`='$search'"); 
 
    if($result->num_rows > 0)
    {
       $row = $result->fetch_assoc();
      $code = $row['code'];
      $name = $row['name'];
       
       
    }
 
 }
 if(isset($_POST['Name']))
 {
    $search=$_POST['search'];

    $result = $con->query("SELECT * FROM `customers` WHERE `name`='$search'"); 
 
    if($result->num_rows > 0)
    {
       $row = $result->fetch_assoc();
      $code = $row['code'];
      $name = $row['name'];
       
       
    }
 
 }
 if(isset($_POST['CustomerList']))
 {
   echo "<script type='text/javascript'> 
    window.open('customerList.php', '_blank'); 
 </script>";
 }
 if(isset($_POST['DryClean']))
 {
    echo "<script type='text/javascript'> 
    window.open('customerList.php', '_blank'); 
 </script>";  
 }
 if(isset($_POST['DryCleanUrgent']))
 {
    echo "<script type='text/javascript'> 
    window.open('customerList.php', '_blank'); 
 </script>";
 }
 if(isset($_POST['Iron']))
 {
    echo "<script type='text/javascript'> 
    window.open('customerList.php', '_blank'); 
 </script>";  
 }
 if(isset($_POST['IronUrgent']))
 {
    echo "<script type='text/javascript'> 
    window.open('customerList.php', '_blank'); 
 </script>";   
 }

$item1="";
$qty=0;
$unitPrice=0;
$total=0;
$grandTotal=0;


 if(isset($_POST['SaveOrder']))
 {
   $products = $_POST['items'];
   $quantities = $_POST['quantities'];
 
   // Loop through the products and quantities
   for ($i = 0; $i < count($products); $i++)
    {
     $product = $products[$i];
     $quantity = $quantities[$i];
     $item1=$product;
     $qty=$quantity;
     $unitPrice=getPrice($item1);
     $total=$quantity*$unitPrice;
      

     echo  $query= "INSERT INTO `baskit`( `itemcode`, `qty`, `price`, `totalPrice`) VALUES ('$product','$quantity','$unitPrice','$total')";
     $insert = mysqli_query($con,$query);

   }
  echo "<br> Grand Total:  $grandTotal";

 }
 function getPrice($itemCode)
{
  include 'config.php';
  $result = $con->query("SELECT * FROM `items` where  `item_code`='$itemCode'"); 

   $row = $result->fetch_assoc();
    $price= $row['price'];
   
    return  $price;

}
 if(isset($_POST['CalculateBill']))
 {
  $itemCode=$_POST['items'];  
  
  $chk="";  
  $totalBill=0;
  $price=0;
  $quantity=0;
 
$size=sizeof($itemCode);
if($_POST['quantity']!="")
{


 $quantity=$_POST['quantity'];
  // for ($i = 0; $i < $size; $i++) 
  // {         
  //  //echo"item ". $itemCode[$i];
  // // echo "qty ".$quantity[$i];
  // // echo"<br>";

  // } 
  
  foreach($itemCode as $chk1)  
     { 
      echo $p=(int) $chk1;
      echo "Total Quantity: ".$_POST['quantity'];
    echo $quantity=$_POST['quantity'];
      $quantity=1;
      
     $t=(int) getPrice($p)*$quantity;
  $price+=$t;
 
      echo"<br>". (string)$chk1;  
     } 
    
    $totalBill=$price;
   echo"<br> Total Bill: ". $totalBill; 
    }
 }




 if(isset($_POST['refresh']))
 {
  header('Location:'.'bookItems.php');   
 }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="StyleSheet1.css" rel="stylesheet" />


<style>

.btn-success {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 0px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 8px;
    height:20px;
  }
  
  .btn-Blue {
      background-color: #008CBA;
  border: none;
    color: white;
    padding: 0px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 8px;
    height:14px;
  
  
  } /* Blue */
  .btn-Red {
  background-color: #f44336;
  border: none;
    color: white;
    padding: 0px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 8px;
    height:14px;
    } 
    /* Red */ 
  .btn-Gray {
  background-color:#3c3c3c;
  border: none;
    color: white;
    padding: 0px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 8px;
    height:14px;
    } 
    .btn-Pink {
  background-color:#66004d;
  border: none;
    color: white;
    padding: 0px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 8px;
    height:14px;
    } 
  
  


    </style>


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
  <form method="POST" action="bookItems.php">
  <table border=1>
    <tr><td>Booking No </td> <td> <input type="text" name="name" value="<?php  $booking_No=$booking_No+1;  echo  $booking_No ?>"></td>
     <td ><input type="text" name="search" placeHolder="search by code|mobile|cnic`"> </td>
     <td> <button class="btn-success" type="submit" name="Search">Search</button> </td>
    <td> <button class="btn-Pink" type="submit" name="Mobile">Mobile</button></td>
    <td><button class="btn-Blue" type="submit" name="Code">Code</button> </td>
    <td><button class="btn-Red" type="submit" name="Name"> Name</button></td>
    <td colspan="2"> <button class="btn-Gray" type="submit" name="CustomerList">List</button></td ><tr>
    <tr><td> Booking Date </td> <td>
<label for="bookingDate" name="bookingDate"><?php  $date = date('d-m-y');echo $date;?></label> </td> <td colspan="6"> Customer Detail <input type="text" name="customer" value="<?php   echo  $code; ?>"> <?php   echo  $name; ?> </td><tr>
    <tr><td> Delivery Date</td>
     <td>  <input type="date" id="deliveryDate" name="deliveryDate"></td>
      <td > <button class="btn-success" type="submit" name="DryClean">Dry Clean</button></td>
      <td> <button class="btn-Red" type="submit" name="DryCleanUrgent">Dry Clean Urgent</button></td>
      <td> <button class="btn-success" type="submit" name="Iron">Iron</button></td>
      <td colspan=4> <button class="btn-Red" type="submit" name="IronUrgent">Iron Urgent</button></td>
      <tr>
      <tr>
       <td colspan="5"> 
        <?php $result = $con->query("SELECT * FROM `items`"); ?>
        <table border=1>
  <tr> <th>Select</th><th>Code</th><th>Title </th><th>Type</th><th>Price</th></tr>
        <?php while($row = $result->fetch_assoc())
        { ?> 
		
            
              <tr>
              <td><input type="checkbox" name="items[]"  value=" <?php echo $row['item_code']?>"> </td>
        
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
     <input type="number" name="quantities[]" value="1">
	  </td>
   
    </tr>
	   
	   <?php

// echo '<a href="tech.php?id=' . $row['userid'] . '">Show Details</a>';

	    } ?> 
      
     
	  </table>
 
       </td>
       <td colspan=3> 
        <table border=1>
          <tr>
            <td>#</td> 
            <td>Item Code</td> 
            <td>Quantity</td>
             <td>Unit Price</td>
              <td>Total Price</td> 
              <td>Edit </td>
               <td>Delete</td> 
                
             
    </tr>
       <?php $result2 = $con->query("SELECT * FROM `baskit`"); ?>  
       <?php while($row2 = $result2->fetch_assoc())
        { 
          //`id`, `itemcode`, `qty`, `price`, `totalPrice`
          ?> 
       

       <tr>
            <td> <?php echo $row2['id']?></td> 
            <td><?php echo $row2['itemcode']?></td> 
            <td><?php echo $row2['qty']?></td> 
            <td><?php echo $row2['price']?></td> 
            <td><?php echo $row2['totalPrice']?></td> 
            <td> 

            <?php  echo '<a style="color: Green; text-decoration: none;" href="EditBaskit.php?id=' . $row2['id'] .'">Edit</a>';
?>


            </td> 
            <td>
            <?php  echo '<a style="color: red; text-decoration: none;" href="deleteBaskit.php?id=' . $row2['id'] .'">Delete</a>';
?>


            </td> 
           

    </tr>




      
       
       <?php echo $totalBill;  ?> 
      
      
      
      <?php 
      }
      
      ?>
      </table>
      </td>
       
      <tr>
        <tr>
        <td><button class="btn-success" type="submit" name="SaveOrder">Save </button></td>
        <td><button class="btn-Red" type="submit" name="refresh">Cancel</button></td>
        <td><button class="btn-Red" type="submit" name="CalculateBill">Calculate Bill</button></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        
    </tr>
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


