<?php  
/*if(isset($_POST["login"])){*/  
  
if(!empty($_POST['uname']) && !empty($_POST['psw'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['psw'];  

    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "sachin123";
    $dbname = "register";
  
    $con = new mysqli($host,$dbuser,$dbpassword,$dbname);  
  
    $SELECT = "SELECT username,password from users where username= ? AND password=? limit 1 ";
    $stmt=$con->prepare($SELECT);
   $stmt->bind_param("ss",$user,$pass);
   $stmt->execute();
   $stmt->bind_result($user,$pass);
   $stmt->store_result();
   $rnum = $stmt->num_rows;

   if($rnum==0){

    echo "username or password is incorrect";
     $stmt->close();
   $con->close();
}
   else
   {
     
     header('location: /project\welcome2.php');
    $stmt->close();
   $con->close();
   }

    /*$query=mysql_query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser   
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
*/

}  
/*} */ 
?>  