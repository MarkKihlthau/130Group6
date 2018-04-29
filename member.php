<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:loginMain.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: powderblue ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
              
          
    </style>  
</head>  
<body>  
    <center><h1>Your password is "safe" here :^)</h1></center>  
      
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>  
<p>  
<center><img src="http://i0.kym-cdn.com/entries/icons/original/000/021/807/4d7.png" alt="hackerman" width="300" height="300"> </center>  
</p>  
</body>  
</html>  
<?php  
}  
?>  