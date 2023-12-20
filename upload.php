<?php
require('registeration-login-system/db.php');
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
$DArray = explode("/",$date);
$UDatestr = $DArray[2].$DArray[1].$DArray[0];
$UDate = intval($UDatestr);
////////////////////////////////////////////////////////////////
$quantity = $_POST["quantity"];
$userAuth = $_COOKIE["user"];
$sub = $_POST["sub"];
$top = $_POST["top"];
$topic = $_POST["topic"];
///////////////////////////
$user = $_POST['top']=='norml'?$_COOKIE["user"]:'umm';
$type = $_POST['top']=='norml'?0:1;
$sqlfire = "INSERT INTO `records`(`who`, `topicc`, `subj`, `date`, `type`, `l0`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `l9`, `udate`) VALUES('$userAuth','$topic','$sub','$date', $type,";
$allsetsqlpermision = true;

$target_dir = "uploads/".$user."/";
for ($i = 0; $i <$quantity;$i++) {
  $filerr = 'fileToUpload'.$i;
  $sqlfire = $sqlfire ."'". basename($_FILES[$filerr]["name"])."',";
  echo "<br />";
  $target_file = $target_dir . basename($_FILES[$filerr]["name"]);
  $uploadOk = 1;
  
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // // Check if image file is a actual image or fake image
  // if(isset($_POST["submit"])) {
  //   $check = getimagesize($_FILES[$filerr]["tmp_name"]);
  //   if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  //   } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  //   }
  // }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    break;
    $uploadOk = 0;
    $allsetsqlpermision = false;
  }


  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
        if (move_uploaded_file($_FILES[$filerr]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$filerr]["name"])). " has been uploaded.";

        } else {
            echo "Sorry, there was an error uploading your file.";
            $allsetsqlpermision = false;
        }
  }

}//for
for($i;$i<10;$i++) {
  $sqlfire = $sqlfire ."'NONE',";
}

$sqlfire=$sqlfire."'$UDate')";
echo $sqlfire;
if($allsetsqlpermision){

        if (mysqli_query($con,$sqlfire)){
            echo "SQL Server data shared";
        }
        else{
            echo "SQL Server: ".mysqli_error($con);
        }
}
echo "<br /> <br /> <a href='./'>home</a>";
?>