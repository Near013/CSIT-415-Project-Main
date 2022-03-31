<html>
<head>
  <title>Cart</title>
</head>
<body>
<h1>Cart</h1>
<?php
  // create short variable names
  $getModel=$_POST['model'];
  $getAmount=trim($_POST['amount']);

  if (!$getModel || !$getAmount) {
     echo 'Please make sure you entered all required information';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $getModel = addslashes($getModel);
    $getAmount = addslashes($getAmount);
  }

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "SELECT * FROM PART WHERE ModelNumber = '$getModel'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  $totalStock = $row['StockCount'];
  $price = $row['Price'];
  
    if($row['ModelNumber'] == $getModel){
        if($row['StockCount'] <= 0){
            echo "Sorry, that part is out of stock";
            echo"<br>";
                echo "<a href='PartsPage.html'>Click here to continue shopping</a>";
        }
        else if($row['StockCount'] - $getAmount <= 0){
            $totalPrice = $price * $totalStock;
            $contains = "insert into CONTAINS (ModelNumber, Count, Price) values
            ('".$getModel."', '".$totalStock."', '".$totalPrice."')";
            $result = $db->query($contains);
                        if($result){
                            $updateStock = $totalStock - $totalStock;
            $update = "UPDATE PART SET StockCount = '$updateStock' WHERE ModelNumber = '$getModel'";
            $stmt = $db->query($update);
            
                echo "Part has been added to cart";
                echo"<br>";
                echo "<a href='PartsPage.html'>Click here to continue shopping</a>";
                echo"<br>";
                echo "<a href='Checkout.html'>Click here to check out</a>";
            }
            else{
                echo "Error, part not added to cart";
                echo"<br>";
                echo "<a href='PartsPage.html'>Click here to continue shopping</a>";
            }
        }
        else{
            $totalPrice = $price * $getAmount;
    $contains = "insert into CONTAINS (ModelNumber, Count, Price) values
            ('".$getModel."', '".$getAmount."', '".$totalPrice."')";
            $result = $db->query($contains);
            
            
            if($result){
                $updateStock = $totalStock - $getAmount;
            $update = "UPDATE PART SET StockCount = '$updateStock' WHERE ModelNumber = '$getModel'";
            $stmt = $db->query($update);
            
                echo "Part has been added to cart";
                echo"<br>";
                echo "<a href='PartsPage.html'>Click here to continue shopping</a>";
                echo"<br>";
                echo "<a href='Checkout.html'>Click here to check out</a>";
            }
            else{
                echo "Error, part not added to cart";
                echo"<br>";
                echo "<a href='PartsPage.html'>Click here to continue shopping</a>";
            }
        }
    }
    else{
        echo "Error";
    }

  $result->free();
  $db->close();
?>
</body>
</html>
