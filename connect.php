<?php

    $FullName = $_POST['FullName'];
    $Userid = $_POST['Userid'];
    $EmailId = $_POST['EmailId'];
    $Password = $_POST['Password'];

  $conn =new mysqli('localhost','root','','e-learning');
  if($conn->connect_error)
  {
    echo "$conn->connect_error";
    die("Connection Failed:". $conn->connect_error);
  } else {
     $stmt = $conn->prepare("insert into login(FullName,Userid,EmailId,Password)values(?,?,?,?)");
     $stmt->bind_param("sssi",$FullName,$Userid,$Email,$Password);
     $stmt->execute();
     echo $execval;
     echo "registration successfully..";
     $stmt->close();
     $stmt->close();
  }

?>