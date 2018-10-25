<!doctype html>
<html>

<head lang ="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
  <script>
    function show()
    {
      var pass=document.getElementById('pass');
      if(document.getElementById('check').checked)
      {
        pass.setAttribute('type','text');

      }
      else
      {
        pass.setAttribute('type','password');
      }
    }
  </script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th{
    background-color: lightblue;
    text-align: center;
    padding: 8px;

  } 
td {
    text-align: center;
    padding: 8px;
}

button {
    background-color: #4ABF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}
.s{

  background-color: gray;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
  background-color: #b56377;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
.container {
    padding: 16px;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: #474e5d;
    padding-top: 50px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%; 
  }
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: black;
}

.hero-image {
  background-image: url("img.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-image1 {
  background-image: url("logo.png");
  background-color: #cccccc;
  height: 100px;
  width:80px;
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  text-decoration: blink;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.hero-text1 {
  position: absolute;
  top: -12%;
  left: 70%;
  transform: translate(-50%, -50%);
  color: red;
}
.hero-text2 {
  position: absolute;
  top: -12%;
  left: 90%;
  transform: translate(-50%, -50%);
  color: red;
}
.par {
  position: absolute;
  top: -12%;
  left: 10%;
  color: red;
}
select {
width:200px;
padding:12px;
margin-top:8px;
font-family:Cursive;
line-height:1;
border-radius:5px;
background-color:white;
color:black;
font-size:15px;
-webkit-appearance:none;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
outline:none
}
select:hover {
color:gray;
}
</style>
</head>
<body style="background-color:#E6E6FA">
  <div class="hero-image1">
  </div>


<div class="hero-image">
  <div class="hero-text">
	<font size='10'>OBE Activities System</font><hr>
  </div>
    <?php if(isset($result)) echo $result; ?>
    <div class="hero-text1">
    <h2>SignUp</h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
  </div>
  <div class="hero-text2">
    <h2>Login</h2>
    <button onclick="window.location.href='login.php'" style="width:auto;">Login</button>
  </div>
  <div class="par">
    <font size="6">BMS INSTITUTE OF TECHNOLOGY </font>
  </div>
</div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" method="POST" action="resources/storedata.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="category"><b>Category : </b></label>
      <select name="category[]">
         <option value="lecture">Lecture</option>
         <option value="student">Student</option>
      </select><br><br>

       <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>


      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Must be Unique" name="username" required>

     

      <label for="password"><b>Password</b></label>
      <input type="password" name="password" required id="pass" value="">
      <input type="checkbox" id="check" onclick="show();"/>Show Password

      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="SignUp">SignUp</button>
      </div>
     </div>
    </form>
  </div>
  <h3>Sign up or Login to get more Info</h3>

<?php
$con=mysqli_connect("localhost","root","sachin123","register");
$qry="DELETE FROM admin where Dat <=CURDATE() ";
 mysqli_query($con,$qry);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT title,Dat FROM admin ORDER BY Dat";
$i=0;
if ($result=mysqli_query($con,$sql))
  {
     ?>
<table border="1">
  <tr> <th colspan="3"  class="s" style="text-align: center"><h1>UPCOMING OBE ACTIVITIES</h1></th></tr>
<tr><th>s.no</th><th>Activity</th><th>Date</th></tr>
  <?php
  while ($row=mysqli_fetch_row($result))
    {
       $i++;
    ?>
       <tr><td><?php echo $i;?></td>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1]; ?></td>
      </tr>


      <?php
    }
  mysqli_free_result($result);
}

mysqli_close($con);
?>

</body>
</html>

