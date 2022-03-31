<html>
<head>
  <title>Checkout</title>
</head>
<body>
<h1>Checkout</h1>
<?php
    $getEmail=$_POST['email'];
    
    if (!get_magic_quotes_gpc()){
    $getEmail = addslashes($getEmail);
  }

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "SELECT * FROM CONTAINS";
  $result = $db->query($query);
  
  $num_results = $result->num_rows;
  $subTotal = 0;
  
  
  for($i=0; $i < $num_results; $i++){
      $row = $result->fetch_assoc();
      echo "Part: ".$row['ModelNumber'];
      echo "<br>";
      echo "Part Price: ".$row['Price'];
      echo "<br>";
      $subTotal += $row['Price'];
      echo "<br>";
  }
  echo "Subtotal: ".$subTotal;
  echo "<br>";
  
    $query = "SELECT * FROM CONTAINS";
  $result = $db->query($query);
    $row = $result->fetch_assoc();
  $ID = $row['ID'];
 
  $query = "INSERT INTO CART(email, Price, ID) VALUES ('".$getEmail."','".$subTotal."','".$ID."')";
            $result = $db->query($query);
            if($result){
                echo "<a href='MakeSale.php'>Click here to purchase items</a>";
               $delete = "TRUNCATE TABLE CONTAINS";
                $rdelete = $db->query($delete);
            }
            else{
                echo "Failed to build cart, please go back and try again";
            }

  $result->free();
  $db->close();
?>
</body>
</html>
