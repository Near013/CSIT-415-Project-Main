<html>
<head>
  <title>Employee Register</title>
</head>
<body>
<h1>Employee Register</h1>
<?php
  // create short variable names
  $searchemployeeID=trim($_POST['employeeID']);
  $createusername=$_POST['username'];
  $createpassword=trim($_POST['password']);
  if (!$searchemployeeID || !$createusername || !$createpassword) {
     echo 'Please make sure you entered all required information';
     exit;
  }
  

  
  if (!get_magic_quotes_gpc()){
    $searchemployeeID = addslashes($searchemployeeID);
    $createusername = addslashes($createusername);
    $createpassword = addslashes($createpassword);
  }
  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
  
  $query = "SELECT * FROM EMPLOYEE WHERE EmployeeID = '$searchemployeeID'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  
if($row['EmployeeID'] == $searchemployeeID){
  $query = "insert into EMPLOYEE (Username, Password) values
            ('".$createusername."', '".$createpassword."')";
            $result = $db->query($query);
            if ($result) {
      echo"Account added to database.";
  } else {
  	  echo "An error has occurred.  Account not created.";
  }
  }  
  else{
      echo "Manager ID not found";
}
  $db->close();
?>
</body>
</html>
