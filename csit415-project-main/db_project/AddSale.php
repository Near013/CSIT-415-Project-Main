<html>
<head>
  <title>Cart</title>
</head>
<body>
<h1>Cart</h1>
<?php

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
  
$query = "SELECT * FROM CART";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  $confirmationID = $row['ConfirmationID'];
  $email = $row['email'];
  $price = $row['Price'];
  $timestamp = date("Y-m-d H:i:s");
  
  $query = "INSERT INTO SALE(OrderTime, CartID, email, Price) VALUES ('".$timestamp."','".$confirmationID."','".$email."','".$price."')";
            $result = $db->query($query);
            if($result){
                echo "Successfully made a purchase, thank you!";
                $query = "DELETE FROM CART WHERE ID='1'";
                echo"<br>";
                echo "<a href= Login.html>Logout</a>";
  $result = $db->query($query);
            }
            else{
                echo "Failed to purchase, please try again later";
                echo"<br>";
                echo "<a href= Login.html>Return to Login</a>";
            }

  $result->free();
  $db->close();
?>
</body>
</html>
