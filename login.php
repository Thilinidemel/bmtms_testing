<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['username']);
  $pass = validate($_POST['password']);

  if (empty($uname)) {
    header("Location: index.php?error=User Name is Required");
    exit();
  }else if (empty($pass)) {
    header("Location: index.php?error=Password is Required");
    exit();
  }else {
    echo "Valid input";
  }
}

else {
  header("Location: index.php");
  exit();
}
