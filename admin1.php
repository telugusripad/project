<html>
<head>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button2 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button2:hover {background-color: #3e8e41}

.button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body background="bmsit.jpg">

<?php
$server="localhost";
$username = "root";
$password = "sachin123";
$dbname = "register";
$conn = new mysqli($server, $username, $password, $dbname);
if(isset($_POST['submit'])){

$name = $_POST['upcome'];
$date = $_POST['dat'];
if($name !=''||$date !=''){
//Insert Query of SQL
$query = "insert into admin(title, Dat) values ('$name', '$date')";
if ($conn->query($query) === TRUE) {
    echo "<script>alert('Record updated successfully')</script>";
}
}
else
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
$conn->close();
}
?>
<form action="admin.php" method="post">
<center><button class="button" type="submit" name="submit"><span>Continue</span></button></center>
</form>
<center><h3>OR</h3></center>
<form action="signup.php" method="post">
<center><button class="button2" type="submit" name="submit">LOGOUT</button></center>
</form>


</body>
</html>
