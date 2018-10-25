<html>
<body>
<?php 
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$check = $_POST['category'];

if(!empty($email)||!empty($username)||!empty($password))
{
	$host= "localhost";
    $dbuser = "root";
    $dbpassword = "sachin123";
    $dbname = "register";

   $con = new mysqli($host,$dbuser,$dbpassword,$dbname);

   if($check=="student"){
   $SELECT = "SELECT email from users where email= ? limit 1 ";
   $INSERT = "INSERT Into users (email,username,password)values(?,?,?)";
    }
    else
    {
     $SELECT = "SELECT email from lecture where email= ? limit 1";
     $INSERT = "INSERT Into lecture(email,username,password)values(?,?,?)";

      }
   $stmt=$con->prepare($SELECT);
   $stmt->bind_param("s",$email);
   $stmt->execute();
   $stmt->bind_result($email);
   $stmt->store_result();
   $rnum = $stmt->num_rows;

   if($rnum==0)
   {
   	$stmt->close();

   	 $stmt = $con->prepare($INSERT);
   $stmt->bind_param("sss",$email,$username,$password);
   $stmt->execute();
   header("location: \project/login.php");

   $stmt->close();
   $con->close();
    }
   else
   {
   	echo "username or email already exist";
   }
  
 }
else{
	echo "every field should fill";
}
?>
