<?php
$host = "localhost";
$userName = "root";
$password = "sachin123";
$dbName = "register";

$conn = new mysqli($host, $userName, $password, $dbName);
 if((isset($_POST['date'])&& $_POST['choice'] !='') && (isset($_POST['title'])&& $_POST['comment'] !=''))
{
$Domain= $conn->real_escape_string($_POST['choice']);
$Dat = $conn->real_escape_string($_POST['date']);
$uid = $conn->real_escape_string($_POST['uid']);
$fname = $conn->real_escape_string($_POST['fname']);
$dname= $conn->real_escape_string($_POST['title']);
$wmm=  $conn->real_escape_string($_POST['comment']);
$img= $conn->real_escape_string($_FILES['file']['name']);
$noday = $conn->real_escape_string($_POST['number']);
move_uploaded_file($_FILES['file']['tmp_name'], "welcome/$img");

$path=$_SERVER['HTTP_REFERER']."welcome/".$img;
$sql="INSERT INTO welcome(Domain,Dat,FName,Nodays,wmm,img,uid,dname) VALUES ('".$Domain."','".$Dat."', '".$fname."', '".$noday."','".$wmm."','".$img."','".$uid."','".$dname."')";
 
 
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
  
  echo '<script>alert("Successfully stored")</script>';
}
}
?>
<html>
<head>
<style>
select {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}
h1{
  position: absolute;
  top:10px;
  left:40px;
}
input {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}



/* arrows */

select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, skyblue, skyblue);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    linear-gradient(to right, gray, gray);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}




select.round {
  background-image:
    linear-gradient(45deg, transparent 50%, gray 50%),
    linear-gradient(135deg, gray 50%, transparent 50%),
    radial-gradient(#ddd 70%, transparent 72%);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    calc(100% - .5em) .5em;
  background-size:
    5px 5px,
    5px 5px,
    1.5em 1.5em;
  background-repeat: no-repeat;
}

select.round:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    radial-gradient(gray 70%, transparent 72%);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    calc(100% - .5em) .5em;
  background-size:
    5px 5px,
    5px 5px,
    1.5em 1.5em;
  background-repeat: no-repeat;
  border-color: green;
  outline: 0;
}





select.minimal {
  background-image:
    linear-gradient(45deg, transparent 50%, gray 50%),
    linear-gradient(135deg, gray 50%, transparent 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
}

select.minimal:focus {
  background-image:
    linear-gradient(45deg, green 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, green 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
  border-color: green;
  outline: 0;
}
.img {
  text-align: center;
  position: absolute;
  text-decoration: blink;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}


select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}

body {
  background-color: rgb(0,159,214);
  font: bold 1em/100% "Helvetica Neue", Arial, sans-serif;
  padding: 2em 0;
  text-align: left;
}
h1 {
  color: white;
  line-height: 120%;
  margin: 0 auto 2rem auto;
  max-width: 30rem;
  left:500px;
   font-size: 60px;
}
h2 {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 20px;
    font-weight: bold;
    color: #f1f1f1;
}
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 8px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}
.input {
  border: 1px solid #c4c4c4;
  border-radius: 8px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 300px;
}
.input1 {
  border: 1px solid #c4c4c4;
  border-radius: 8px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 500px;
}
.input2 {
  border: 1px solid #c4c4c4;
  border-radius: 8px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 70px;
}
.Neon {
    font-family: sans-serif;
    font-size: 14px;
    color: #494949;
    position: relative;
    

}
.Neon * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.Neon-input-dragDrop {
    display: block;
    width: 343px;
    margin: 0 auto 25px auto;
    padding: 25px;
    color: #8d9499;
    color: #97A1A8;
    background: #fff;
    border: 2px dashed #C8CBCE;
    text-align: center;
    -webkit-transition: box-shadow 0.3s, border-color 0.3s;
    -moz-transition: box-shadow 0.3s, border-color 0.3s;
    transition: box-shadow 0.3s, border-color 0.3s;
}
.Neon-input-dragDrop .Neon-input-icon {
    font-size: 48px;
    margin-top: -10px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.Neon-input-text h3 {
    margin: 0;
    font-size: 18px;
}
.Neon-input-text span {
    font-size: 12px;
}
.Neon-input-choose-btn.blue {
    color: #008BFF;
    border: 1px solid #008BFF;
}
.Neon-input-choose-btn {
    display: inline-block;
    padding: 8px 14px;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    font-size: 12px;
    font-weight: bold;
    color: #8d9496;
    border-radius: 3px;
    border: 1px solid #c6c6c6;
    vertical-align: middle;
    background-color: #fff;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
}
.input3 {
    width: 700px;
    height: 200px;
    padding: 10px 10px;
    margin: 5px;
    box-sizing: border-box;
}
.button {
    background-color: #4FAC51; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>

</head>
<body>
<h2 style="text-align: right; text-decoration-color: red"><a href = "logout.php">Sign Out</a></h2>
<center><h1>WELCOME</h1></center>
<br>
<br><br>
<form action="welcome.php" method="post" enctype ="multipart/form-data">
	<div>
    
Select The Domain: <select class="classic" name="choice" required="">
  <option>Work Shop</option>
  <option>Seminar</option>
  <option>FDP attended</option>
  <option>Expert Talk</option>
</select>
<br><br><br>
Select The Date: <input type="date" name="date" id="dateofbirth" required="">
<br><br><br>
Enter Your USer ID:<input type="text" class="input" name="uid">
<br><br><br>
Name Of The Faculty: <input class="input" type="text" name="fname" >
<br><br><br>
Title Of The Domain: <input class="input1" type="text" name="title">
<br><br><br>
Number Of Days: <input class="input2" type="number" name="number" id="myNumber" value="2">
<br><br><br>
  <label for="fname"><b>Few Word On Memorial Moments</b></label>
  <div class="Neon Neon-theme-dragdropbox">
   <textarea class="input3" name='comment' id='comment' required="" /></textarea>       
   <h2><b>Upload Images Here --><input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="file" id="filer_input2"type="file" required="">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop images here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
        </div>
<br><br><br>
 <center><button class="button" onclick="func()">Submit</button></center>
 <script>
   func(){
     confirm("Once Updated Cant be Modified!");
   }
 </script>    
 </form> 
 
   </body>
   
</html>