
<?php
if(isset($_POST['login']))
{
	
	$userid = $_POST['userid'];
	$password = $_POST['password'];

		if($userid=="admin" && $password =="admin")
		{
	
            header('Location:'.'admin_Account.php');
			
		}
		
		else
        {
				
			echo"Wrong user id or password";
		}
		
	
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
    
    <?php include_once "nav.php"; ?>
  </div>

   
  <div class="col-6 col-s-9">
  <form method="post" action="login.php">
  <table>
<tr>
    <td>Enter userid</td>
    <td><input type="text" name="userid" required> </td>
    <td>*</td>
</tr>
<tr>
    <td>Enter password</td>
    <td><input type="password" name="password" required></td>
    <td>*</td>
</tr>
<tr>
    <td><td> <button type="submit" name="login"> Login </button></td>
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


