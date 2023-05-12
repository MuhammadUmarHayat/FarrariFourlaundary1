
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
 if(isset($_POST['SaveOrder']))
 {
  
  /*
  $checkbox1=$_POST['items'];  
  $quantity=$_POST['quantity'];
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
    echo"<br>".  $chk .= (string)$chk1;  
   }
   */
  
   
   $products = $_POST['items'];
   $quantities = $_POST['quantities'];
 
   // Loop through the products and quantities
   for ($i = 0; $i < count($products); $i++)
    {
     $product = $products[$i];
     $quantity = $quantities[$i];
 
     // Do something with the product and quantity
     echo "<br> Product: $product, Quantity: $quantity";
   }
  






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
     // echo "Total Quantity: ".$_POST['quantity'];
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
 $result="";
 if(isset($_POST['btnSearchItem']))
 {
  $item=$_POST['searchitem'];
 $result = $con->query("SELECT * FROM `items` where `item_code`='$item' or `title`='$item'"); 
 }
 else
 {
  $result = $con->query("SELECT * FROM `items`"); 

 }

//addtocart
if(isset($_POST['addtocart']))
 {
   
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
  <form method="POST" action="test3.php">
  <table border=1>
    <tr><td>Booking No </td> <td> <input type="text" name="name" value="<?php  $booking_No=$booking_No+1;  echo  $booking_No ?>"></td>
     <td ><input type="text" name="search" placeHolder="search by code|mobile|cnic"> </td>
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
        <tr>
        <td>
          
        </td>
        <td></td>
        <td><input type="text" name="searchitem" placeHolder="search by code|Title"></td>
        <td><button class="btn-success" type="submit" name="btnSearchItem">Search</button></td>
        <td><button class="btn-Red" type="submit" name="CalculateBill">Calculate Bill</button></td>
        <td></td>
        <td>
      </td>
        <td><button class="btn-Red" type="submit" name="refresh">Cancel</button></td>
        
        
    </tr>
      <tr>
       <td colspan="5"> 
       
        

        <?php while($row = $result->fetch_assoc())
        { ?> 
		</div>
    <div style="float:left; padding: 10px;margin-top:10px;margin-left: 20px; width: 300px;border: 1px solid red;word-wrap:break-word;  ">
Code: <?php echo $row['item_code']?>
<br>
Title:  <?php echo $row['title']?>
<br>
Category: <?php echo $row['category']?>
<br>
Price : <?php echo $row['price']?>
<br>
   
     <br>
     <?php  echo '<a style="color: red; text-decoration: none;" href="baskit.php?id=' . $row['item_code'] .'">Add To Baskit</a>';
        }
?>
    
  
    

</div>

            
             
	   
	   <?php

// echo '<a href="tech.php?id=' . $row['userid'] . '">Show Details</a>';

	     ?> 
      
     
 
       </td>
       <td colspan=3> <?php echo $totalBill;  ?> </td>
       
      
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


