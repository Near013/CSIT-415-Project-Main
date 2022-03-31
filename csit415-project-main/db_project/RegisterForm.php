<html>
<head>
  <title>Register</title>
</head>
<body>
<h1>Register</h1>
<?php
  // create short variable names
  $createusername=$_POST['username'];
  $createpassword=trim($_POST['password']);
  $createfname=trim($_POST['firstname']);
  $createlname=trim($_POST['lastname']);
  $createphone=trim($_POST['phone']);
  $createaddress=trim($_POST['address']);
$createcity=trim($_POST['city']);
 $createstate=trim($_POST['state']);

  if (!$createusername || !$createpassword) {
     echo 'Please make sure you entered both username and password';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $createusername = addslashes($createusername);
    $createpassword = addslashes($createpassword);
    $createfname = addslashes($createfname);
    $createlname = addslashes($createlname);
    $createphone = doubleval($createphone);
    $createaddress = addslashes($createaddress);
    $createcity = addslashes($createcity);
    $createstate = addslashes($createstate);
  }

  $db = new mysqli('localhost', '', '', 'haightk1_ProjectDB');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "INSERT INTO CLIENT(email, Password, Fname, Lname, Phone, Address, City, State) VALUES ('".$createusername."','".$createpassword."','".$createfname."','".$createlname."','".$createphone."','".$createaddress."','".$createcity."','".$createstate."')";
            $result = $db->query($query);
            if ($result) {
      echo"Account added to database.";
      echo"<br>";
      echo "<a href='Login.html'>Go back to search</a>";
  } else {
  	  echo "An error has occurred.  Account not created.";
  	  echo"<br>";
  	  echo"<a href='Register.html'>Go back to register page</a>";
  }
  $db->close();
?>
</body>
</html>
