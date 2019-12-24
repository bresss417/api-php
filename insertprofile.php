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

    $names = $_POST['names'];
    $city = $_POST['city'];
    $call = $_POST['call'];
    $career = $_POST['career'];
    $photo = $new_image_photo; 

   /*  $name = 'brees';
    $city = 'kuwing';
    $call = '0011232345';
    $career = 'single';
    $photo = 'bb.jpg'; */
/*
    //upload image
    $ext = pathinfo(basename($_FILES['data_photo']['name']), PATHINFO_EXTENSION);
    $new_image_photo = 'img_'.uniqid(). ".".$ext;
    $image_path = "images/";
    $upload_path = $image_path.$new_image_photo;
    //uploadeding
    $sucess =  move_uploaded_file($_FILES['data_photo']['tmp_photo'],$upload_path);
    if($sucess == FALSE) {
        echo "on sucess";
        exit();
    }
*/

    $sql = "INSERT INTO ionicdata(data_name ,data_city ,data_call,data_career,data_photo) VALUES('$names','$city','$call','$career','$photo')";
    $result = mysqli_query($conn,$sql);

    if($result != 0){
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
    mysqli_close($conn);

?>
