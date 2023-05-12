
<?php 
if (isset($_POST['submit'])) 
{
  $products = $_POST['products'];
  $quantities = $_POST['quantities'];

  // Loop through the products and quantities
  for ($i = 0; $i < count($products); $i++)
   {
    $product = $products[$i];
    $quantity = $quantities[$i];

    // Do something with the product and quantity
    echo "Product: $product, Quantity: $quantity";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="test2.php">
  <input type="checkbox" name="products[]" value="Product 1"> Product 1
  <input type="number" name="quantities[]" value="1">
  <br>
  <input type="checkbox" name="products[]" value="Product 2"> Product 2
  <input type="number" name="quantities[]" value="1">
  <br>
  <input type="checkbox" name="products[]" value="Product 3"> Product 3
  <input type="number" name="quantities[]" value="1">
  <br>
  <input type="submit" name="submit" value="Submit">
</form>   
</body>
</html>