
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
<main>
<div class="row">
<div class="col-6 col-s-9">
  
  <h2 style="color: red;">Logout</h2>
</div>
</div>
<div class="row">
    <section>
     <?php 
     session_start();
     session_destroy();
    ?>
    <h2>Your session has been expire. To login again <a style="color: green;" href="login.php">Click Here</a></h2>
    </section>
  
    <div class="row">
 <div class="footer">
 <?php include_once "footer.php"; ?>
</div>
</div>
</div>
</main>

<?php include_once "footer.php"; ?>
</body>
</html>