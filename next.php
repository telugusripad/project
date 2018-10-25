<?php
$host = "localhost";
$userName = "root";
$password = "sachin123";
$dbName = "register";

$conn = new mysqli($host, $userName, $password, $dbName);
 if((isset($_POST['id'])&& $_POST['date'] !='') && (isset($_POST['title'])&& $_POST['pak'] !=''))
{
$id= $conn->real_escape_string($_POST['id']);
$dat = $conn->real_escape_string($_POST['date']);
$cname = $conn->real_escape_string($_POST['title']);
$package = $conn->real_escape_string($_POST['pak']);
$nostu = $conn->real_escape_string($_POST['number']);
$sname=  $conn->real_escape_string($_POST['comment']);
$file= $conn->real_escape_string($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], "placement/$file");

$path="placement/".$_FILES['file']['name'];
$sql="INSERT INTO placement (cname,Dat, sname, package,nostu,uid,logo) VALUES ('".$cname."','".$dat."', '".$sname."', '".$package."','".$nostu."','".$id."','".$path."')";
 
 
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
  
  echo '<script>alert("Success")</script>';
}
}
?>
<html>
<head>
<style>

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
   font-size: 40px;
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
    left:5px;
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


<h1 style="text-align: center">PLACEMENT_ACTIVITIES</h1>
</head>
<body>
<h2 style="text-align: right; text-decoration-color: red"><a href = "logout.php">Sign Out</a></h2>
<form method="post"  action="next.php" enctype="multipart/form-data" >
Name Of The Company: <input class="input1" type="text" name="title">
<br><br><br>
Select The Date: <input type="date" name="date" id="dateofbirth" required="">
<br><br><br>
Enter Your User Id: <input class="input1" name="id" required>
<br><br><br>
Number Of Students Got Selected: <input class="input2" type="number" id="myNumber" value="2" min="0" name="number">
<br><br><br>
Name Of The Students: <br>
<textarea class="input3" name='comment' id='comment' required="" /></textarea>
<br><br><br>
Package : <input class="input" type="number" name="pak" >
<br><br><br>
<h2 style="top: 400px;"><b>Upload Images Here --><input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="file" id="filer_input2"  type="file" required="">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop images here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
        </div>

<br><br><br>
        
 <center><button class="button" onclick="func()" name="submit">Submit</button></center>
 <script>
   func(){
     confirm("Once Updated Cant be Modified!");
   }
 </script>    
 </form>
  </body>
   
</html>