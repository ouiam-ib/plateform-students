<!DOCTYPE html>
<html>
<head>
      <!-- Favicons -->
  <link href="projet\logo.png" rel="icon">
    <style type="text/css">
          
    div{
        background-color: rgb(255, 255, 255);
        border:1px solid rgba(0, 0, 0, 0.17);
        border-collapse: collapse;
        width: 400px;
        height: 350px;
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        padding-top: 2%;
        padding: auto;
        border-radius: 5%;  
        opacity: 0.85;
        align-items: center;   
    }
    td{
        padding-top: 5px;    
    }
    #last{
        padding-top: 50px;    
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
    <div> <center><h3 style="color:rgb(26, 91, 171);">  Please Enter You Identiication </h3></center>
    <table align="center">
        <form method="POST" action="forgotpass.php"  >
            <tr>
                <td style="font-size: 15px;" >Username </td>
            </tr>
            <tr>
                <td ><input type="text" name="user" required placeholder="Username"></td>
            </tr>
            <tr>
                <td style="font-size: 15px;"> Email </td>
            </tr>
            <tr>
             <td ><input type="text" name="email" required  placeholder="Email"></td>
            </tr></center>
            <tr>
                <td id="last" ><input id="sub" type="submit" name="verify" value="Send Verification "></ins></td>  
            </tr><br>
            <tr><td style="font-size: 13px;"><center><a style="color: gray;  font-family:'Arial Narrow Bold', sans-serif"" href="connexion.php"> LOGIN </a></center></td></tr>
            <tr><td style="font-size: 13px;"><center><a style="color: gray; font-family:'Arial Narrow Bold', sans-serif" href="signup.php"> SIGN UP </a></center></td></tr>
        </form>
    </table>
</div>
<?php
 if(isset($_POST["verify"]))
 {
     $user=$_POST["user"];
     $email=$_POST["email"];
     $sql="select * from login where username='".$user."' AND email='".$email."'";
     //$result=mysqli_query($connect,$sql);
     //$row=mysqli_num_rows($result);
     if(!$sql){
        echo "the verification is successfully sent";  
    
    }
    else {
        echo "Email or username could not be found ";
    } 
 }

?>
</body>
</html>