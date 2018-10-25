<?php  
/*if(isset($_POST["login"])){ */ 
  
if(!empty($_POST['uname']) && !empty($_POST['psw'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['psw'];  
 }
    if($user=='admin123'&&$pass='admin111'){

    header('Location: \project/admin.php');     

         }
/*}*/
else
    echo "sorry";
?>  