<?php
include 'passlogin.php';
include 'dbh.inc.php';
if(isset($_GET['delete'])){
    $cne=$_GET['delete'];
    $sql="DELETE from students where cne='$cne' ";
    $res=mysqli_query($connect,$sql);
    if($res){
        header('location:students.php');
    }else 
    die(mysqli_error($connect));
}
?>