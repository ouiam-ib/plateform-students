<?php

require_once "passlogin.php";
require_once "dbh.inc.php";


$photo=$_FILES['photo']['name'];
$fullname=$_POST['fullname'];
$telephone=$_POST['tele'];
$adresse=$_POST['adress'];
$facebook=$_POST['facebook'];
$github=$_POST['github'];
$user=$_SESSION['user'];

if($photo==""){
    $req="UPDATE  login   SET  fullname='$fullname',tele='$telephone', adress='$adresse', facebook='$facebook' ,github='$github' WHERE username='$user' ";


}
else{
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./$photo");
$req="UPDATE  login   SET  photo='$photo', fullname='$fullname',tele='$telephone', adress='$adresse', facebook='$facebook' ,github='$github' WHERE username='$user' ";

}

$rs=mysqli_query($connect,$req) or die (mysqli_error($connect));

header("location:info.php");
?>