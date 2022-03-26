<?php

require_once "passlogin.php";
require_once "dbh.inc.php";

$photo=$_FILES['photo']['name'];
$cne=$_POST['CNE'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adress=$_POST['adres'];
$city=$_POST['city'];
$email=$_POST['email'];


if($photo==""){
    $res="UPDATE  students   SET cne='$cne',nom='$lname', prenom='$fname', adresse='$adress' ,ville='$city',email='$email' WHERE CNE='$cne' ";

}
else{
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./$photo");
$res="UPDATE  students   SET photo='$photo', cne='$cne',nom='$lname', prenom='$fname', adresse='$adress' ,ville='$city',email='$email' WHERE CNE='$cne' ";
}
    


$rs=mysqli_query($connect,$res) or die (mysqli_error($connect));

header("location:students.php");
?> 

