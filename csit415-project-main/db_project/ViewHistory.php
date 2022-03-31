<html>
<head>
  <title>Sales History</title>
</head>
<body>
<h1>History</h1>
<?php
  // create short variable names
  $searchusername=$_POST['username'];
  $searchpassword=trim($_POST['password']);

  if (!$searchusername || !$searchpassword) {
     echo 'Please make sure you entered both username and password';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchusername = addslashes($searchusername);
    $searchpassword = addslashes($searchpassword);
  }

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "SELECT * FROM CLIENT WHERE email = '$searchusername' and Password = '$searchpassword'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  
    if($row['email'] == $searchusername && $row['Password'] == $searchpassword){
          $query = "SELECT * FROM SALE WHERE email = '$searchusername'";
  $sale = $db->query($query);
    $num_results = $sale->num_rows;
    
    echo "<p>Number of sales found: ".$num_results."</p>";
  
    for ($i=0; $i <$num_results; $i++) {
     $row = $sale->fetch_assoc();
     echo "<p>Sale: ";
     echo htmlspecialchars(stripslashes($row['SaleID']));
     echo "</strong><br />Time stamp: ";
     echo stripslashes($row['OrderTime']);
     echo "<br />Email: ";
     echo stripslashes($row['email']);
     echo "<br />Price: ";
     echo "$ ". stripslashes($row['Price']);
     echo "</p>";
    echo "<br />";
  }
    }
    else{
        echo "Account does not exist";
        echo "<br>";
        echo "<a href= ViewHistory.html>Return to Security Login</a>";
    }

  $result->free();
  $db->close();
?>
</body>
</html>
