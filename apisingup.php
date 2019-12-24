<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    include('config.php');
/*
    $c ontentdata = file_get_contents("php://input");
     $getdata = json_decode($contentdata);
     
     $name = $getdata->$name;
     $email = $getdata->email;
     $pass = $getdata->pass; */

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email']; 
    
   /*  $name = 'ill1';
    $pass = 'ill1';
    $email = 'ill1.com'; */

    $sql = "INSERT INTO accounts(username ,password ,email) VALUES('$name','$pass','$email')";
    $result = mysqli_query($conn,$sql);

    if($result == 0){
        $calback= array(
            'status' => 200,
            'msg' => 'Insert Success'
        );
    }else{
        $calback= array(
            'status' => 404,
            'msg' => 'Insert Fail'
        );
    }
    echo json_encode($calback);

?>