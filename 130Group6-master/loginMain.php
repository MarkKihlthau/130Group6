<!DOCTYPE html>
<html lang= "en-US">
<body style="background-color:powderblue;">

<h1 style="text-align:center;"> Welcome to StoreYourPasswords</h1> 
<p><a href="indexMain.php">Register</a> | <a href="loginMain.php">Login</a></p>  

<form action="/Hasher.php" method="POST"> 
 <legend>  
    <fieldset>  
          <p> 
          	<h3> Login</h3>
Username: <br><input type="text" name="user"><br />  
Password: <br><input type="password" name="pass"><br />   
<input type="submit" value="Login" name="hash" /> 
 		</p>
        </fieldset>  
        </legend>  
</form>  

<p style= "border:2px solid Violet;">
<p style= "text-align:center;">Got Milk? </p>
</body>
</html>