<html>
<head>
  <title>Part Addition</title>
</head>
<body>
<h1>Part Addition Page</h1>
<?php
  // create short variable names
  $productType=trim($_POST['type']);
  $brand=trim($_POST['brand']);
  $modelNumber=trim($_POST['mn']);
  $price=trim($_POST['price']);
  $stockCount=trim($_POST['stock']);
  $employeeID=trim($_POST['employeeID']);
  if (!$brand || !$modelNumber || !$price || !$stockCount || !$employeeID) {
     echo 'Please make sure you entered all required information';
     exit;
  }
  

  
  if (!get_magic_quotes_gpc()){
    $brand = addslashes($brand);
    $modelNumber = addslashes($modelNumber);
    $price = doubleval($price);
    $stockCount = doubleval($stockCount);
    $employeeID = addslashes($employeeID);
  }
  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "insert into PART values
            ('".$productType."', '".$brand."', '".$modelNumber."', '".$price."', '".$stockCount."', '".$employeeID."')";
            $result = $db->query($query);
    
     if ($result) {
      echo "Part added to database.";
  } else {
  	  echo "An error has occurred.  Part not created.";
  }
  $db->close();
?>
</body>
</html>
