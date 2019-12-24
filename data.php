<?php

  include('config.php');

  $sql = "SELECT * FROM accounts ";
  $result = mysqli_query($conn,$sql);
  $arry = array();
  while($row = mysqli_fetch_assoc($result)){
      $arry[] = $row;
  }
  mysqli_close($conn);
  echo json_encode($arry);

?>