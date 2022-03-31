        <html>
    <head>
<style>
</style>
</head>
    <body>
        <h1>Checkout</h1>
                <?php
                
                $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
        $query = "SELECT * FROM CART";
  $result = $db->query($query);
  if($result){
          $row = $result->fetch_assoc();
    
    echo "Subtotal: ".$row['Price'];
    $grandTotal = $row['Price'] * 1.07;
    echo "<br>";
    echo "grand total: ".$grandTotal;
  }
  else{
      echo "fail";
  }

        ?>  
        
        <form method = "post" action = "AddSale.php">
   <table>
			   <tr>
            <td><input type = "submit" value = "Purchase" /></td>
            </tr>
			       </table>
			       </form>
    </body>
</html>
