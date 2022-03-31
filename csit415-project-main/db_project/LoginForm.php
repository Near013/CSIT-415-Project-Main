<html>
<head>
  <title>Login</title>
</head>
<body>
<h1>Login</h1>
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
    echo "Welcome " .htmlspecialchars(stripslashes($row['email']));
    echo "<br>";
    echo "<a href= PartsPage.html>Click here to shop!</a>";
    echo "<br>";
    echo "<a href= ViewHistory.html>Click here to view purchase history!</a>";
    }
    else{
        echo "Account does not exist";
        echo "<br>";
        echo "<a href= Login.html>Return to Login</a>";
    }

  $result->free();
  $db->close();
?>
</body>
</html>
