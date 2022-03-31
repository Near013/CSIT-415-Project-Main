<html>
<head>
  <title>Add Stock</title>
</head>
<body>
<h1>Stock Addition Page</h1>
<?php
  // create short variable names
  $modelNumber=trim($_POST['mn']);
  $stockCount=trim($_POST['inv']);
  $employeeID=trim($_POST['employeeID']);
  if (!$modelNumber|| !$stockCount || !$employeeID) {
     echo 'Please make sure you entered all required information';
     exit;
  }
  

  
  if (!get_magic_quotes_gpc()){
    $modelNumber = addslashes($modelNumber);
    $stockCount = doubleval($stockCount);
    $employeeID = addslashes($employeeID);
  }
  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
$query = "SELECT * FROM EMPLOYEE WHERE EmployeeID = '$employeeID'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  
    if($row['EmployeeID'] == $employeeID){
 $update = "UPDATE PART SET StockCount = '$stockCount' WHERE ModelNumber = '$modelNumber'";
            $stmt = $db->query($update);
    
     if ($update) {
      echo "Part stock updated.";
  } else {
  	  echo "An error has occurred.  Part stock not updated.";
  }
    }
    else{
        echo "Account does not exist";
        echo "<br>";
        echo "<a href= EmployeeLogin.html>Return to Login</a>";
    }
  $db->close();
?>
</body>
</html>
