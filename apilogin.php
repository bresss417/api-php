<?php

     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     include('config.php');
/*
     $contentdata = file_get_contents("php://input");
     $getdata = json_decode($contentdata);
     
     $email = $getdata->email;
     $password = $getdata->password;
*/
     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password' ";
     $result = mysqli_query($conn,$sql);
     $numrow = mysqli_num_rows($result);

     if($numrow == 1){
         $arr = array();
         while($row = mysqli_fetch_assoc($result)){
             $arr[] = $row;
         }
         echo json_encode($arr);
         //mysqli_close($conn);
     }

?>
