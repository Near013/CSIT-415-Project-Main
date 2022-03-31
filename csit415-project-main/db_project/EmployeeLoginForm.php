<html>
<head>
  <title>Employee Login</title>
</head>
<body>
<h1>Employee Login</h1>
<?php
  // create short variable names
  $searchusername=$_POST['username'];
  $searchpassword=trim($_POST['password']);
  $searchemployeeID=trim($_POST['employeeID']);

  if (!$searchusername || !$searchpassword || !$searchemployeeID) {
     echo 'Please make sure you entered all required information';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchusername = addslashes($searchusername);
    $searchpassword = addslashes($searchpassword);
    $searchemployeeID = addslashes($searchemployeeID);
  }

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "SELECT * FROM EMPLOYEE WHERE EmployeeID = '$searchemployeeID' and Username = '$searchusername' and Password = '$searchpassword'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  
    if($row['EmployeeID'] == $searchemployeeID && $row['Username'] == $searchusername && $row['Password'] == $searchpassword){
    echo "Welcome " .htmlspecialchars(stripslashes($row['Username']));
    echo "<br>";
    echo "Your password is ".stripslashes($row['Password']);
    echo "<br>";
    echo "Your employee ID is ".stripslashes($row['EmployeeID']);
    echo "<br>";
    echo "<a href= AddPart.html>Click here to add a part!</a>";
    echo "<br>";
    echo "<a href= EmployeeRegister.html>Click here to add an employee!</a>";
    echo "<br>";
    echo "<a href= AddStock.html>Click here to update stock!</a>";
    }
    else{
        echo "Account does not exist";
        echo "<br>";
        echo "<a href= EmployeeLogin.html>Return to Login</a>";
    }

  $result->free();
  $db->close();
?>
</body>
</html>
