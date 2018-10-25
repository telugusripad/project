<?php
 if(isset($_POST['submit'])){
$cname = $_POST['title'];
$date = $_POST['date'];
$nostu= $_POST['number'];
$name=$_POST['comment'];
$package = $_POST['pak'];
$uid = $_POST['id'];

if(!empty($cname)||!empty($date)||!empty($nostu)||!empty($name)||!empty($package))
{
  $host= "localhost";
    $dbuser = "root";
    $dbpassword = "sachin123";
    $dbname = "register";
    $con = new mysqli($host,$dbuser,$dbpassword,$dbname);

   $INSERT = "INSERT Into placement(cname,Dat,sname,package,nostu,uid)values(?,?,?,?,?,?)";

     $stmt = $con->prepare($INSERT);
   $stmt->bind_param("sssiis",$cname,$date,$name,$package,$nostu,$uid);
   $stmt->execute();
    $stmt->close();
   $con->close();
  header('Location: \project/index.php');  
   echo '<script>alert("successfully uploaded")</script>';

  
}
 
}
 ?> 