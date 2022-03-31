<html>
<head>
  <title>I Haight Computers Part Search</title>
</head>
<body>
    <a href="PartsPage.html">Go back to search</a>
<h1>Part Results</h1>
<?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype){
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }
  
  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
  
  echo "<form action='Cart.php' method='post'>";
     echo "Enter model number:";
     echo '<input name="model" type="text" maxlength="5">';
     echo "<br>";
     echo "Enter amount you want to buy:";
    echo "<input name='amount' type='int'>";
    echo '<input type="submit" name="submit" value="Enter">';
  echo "</form>";
  
  $query = "select * from PART where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;
  
  echo "<p>Number of parts found: ".$num_results."</p>";


  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Product Type: ";
     echo htmlspecialchars(stripslashes($row['ProductType']));
     echo "</strong><br />Brand: ";
     echo stripslashes($row['Brand']);
     echo "<br />Model Number: ";
     echo stripslashes($row['ModelNumber']);
     echo "<br />Price: ";
     echo "$ ". stripslashes($row['Price']);
     echo "<br />Stock Count: ";
     echo stripslashes($row['StockCount']);
     echo "</p>";
    echo "<br />";
  }
  

  $result->free();
  $db->close();
     exit;

?>
</body>
</html>
