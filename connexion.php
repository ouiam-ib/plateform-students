<?php
 include_once 'dbh.inc.php';
if(!$connect){
    echo("error");
}
if(isset($_POST["conx"])){
    session_start(); 
    $user=$_POST["user"];
    $passwd=$_POST["passwrd"];
    $sql="select * from login where (username='".$user."' OR email='".$user."') AND passwrd='".$passwd."' ";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_num_rows($result);
    if($row==1){
        $_SESSION['user']=$_POST['user'];
        header("location:bienvenue.php");
    }
    else {
        echo "Username or Password incorrect PLEASE TRY AGAIN ";
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
     <!-- Favicons -->
  <link href="logo.png" rel="icon">
    <style type="text/css">

  
    
    div{
        background-color: rgb(255, 255, 255);
        border:1px solid rgba(0, 0, 0, 0.17);
        border-collapse: collapse;
        width: 400px;
        height: 450px;
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        padding-top: 5%;
        padding: auto;
        border-radius: 5%;  
        opacity: 0.85;
        align-items: center;
        float: right;
        margin-right: 25%;  
    }
    td{
        padding-top: 10px;   
    }
    #last{
        padding-top: 110px;    
    }
    body{
        background: linear-gradient(to right,  deepskyblue, white );
    }
    input{
        border-radius: 15px;
        width: 200px;
        height: 25px;
        border:1px solid rgb(115, 120, 30);
    }
  
    #sub{
        border: 1px solid whitesmoke;
        width: 280px;
        height: 35px;
        border-radius: 15px;
        background: linear-gradient(to right , blue,deepskyblue);
        color: white;
    }
   
</style>
</head>
<body>
    <img style="margin-top: 180px; float: left; margin-left: 20%; "" src="Capture d’écran (293).png" width="300px">
    <div> <center><h3 style="color:rgb(26, 91, 171);">  Please login to your account </h3></center>
    <table align="center">
        <form method="POST" action="connexion.php"  >
            <tr>
                <td style="font-size: 15px;" >Username Or Email </td>
            </tr>
            <tr>
                <td ><input type="text" name="user" required placeholder="Email or Username"></td>
            </tr>
            <tr>
                <td style="font-size: 15px;"> Password </td>
            </tr>
            <tr>
             <td ><input type="password" name="passwrd" required  placeholder="Password"></td>
            </tr></center>
            <tr>
                <td id="last" ><input id="sub" type="submit" name="conx" value="Connexion"></ins></td>  
            </tr><br>
            <tr><td style="font-size: 13px;"><center><a style="color: gray;" href="forgotpass.php"> Forgot password? </a></center></td></tr>
            <tr><td style="font-size: 13px;"><center><a style="color: gray; font-family:'Arial Narrow Bold', sans-serif" href="signup.php"> SIGN UP </a></center></td></tr>
        </form>
    </table>
</div>
</body>
</html>