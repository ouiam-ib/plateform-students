
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
        height: 500px;
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        padding-top: 5%;
        padding: auto;
        border-radius: 5%;  
        opacity: 0.85; 
    }
    td{
        padding-top: 5px;
        
        
    }
    #last{
        padding-top: 70px;
        
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
 
    <title>Index</title>
</head>
<body>
   
    <div> <center><h3 style="color:rgb(26, 91, 171);">  Please create your account </h3></center>
    <table align="center">
        <form method="POST" action="signup.php"  >
            <tr>
                <td style="font-size: 15px;" >Email </td>
            </tr>
            <tr>
                <td ><input type="text" name="email" required placeholder="Email"></td>
            </tr>
            <tr>
                <td style="font-size: 15px;" >Username </td>
            </tr>
            <tr>
                <td ><input type="text" name="user" required placeholder="Username"></td>
            </tr>
            <tr>
                <td style="font-size: 15px;" >Password </td>
            </tr>
            <tr>
                <td ><input type="password" name="passwrd" required placeholder="Password"></td>
            </tr>
            <tr>
                <td id="last" ><input id="sub" type="submit" name="cre_account" value="Create Account"></td>  
            </tr><br>
            
            <tr><td style="font-size: 13px;"><center><a style="color: gray; font-family:'Arial Narrow Bold', sans-serif" href="connexion.php"> LOGIN </a></center></td></tr>

        </form>
    </table>

</div>
<?php 
     include_once 'dbh.inc.php';
     if(isset($_POST["cre_account"]))
     {
               $user=$_POST["user"];
                 $email=$_POST["email"];
                 $pass=$_POST["passwrd"];
         $sql="INSERT into login (username,email,passwrd) VALUES('$user','$email','$pass')";
         $res=mysqli_query($connect,$sql) or die (mysqli_error($connect));
         if($res)
         {
             echo "Your account has been seccessfully created";
         }
         else echo "Couldn't create this account";
     }
?>
</body>
</html>