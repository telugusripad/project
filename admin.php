<!DOCTYPE html>
<html>
<head>
<style>

.dropbtn {
    background-color: #1FAC4567;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
   left:80px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9a9;
    min-width: 190px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #e1b1b1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e56ffff;
}
h1{
    text-align:center;
    top:5px;

}
.a{
    position:absolute;
    top:5px;
    left: 1200px;
}
.button{
   
}
img{
    position: absolute;
    top:50px;
    left:1080px;
}
legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}

.output {
    font: 1rem 'Fira Sans', sans-serif;
}

label {
    margin-top: 1rem;
    display: block;
    font-size: .8rem;
}
input {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  /*padding: 0.5em 3.5em 0.5em 1em;*/

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}
a{
  color: red;
}
input:invalid + span:after {
    position: absolute;
    content: '✖';
    color: #f00;
    padding-left: 5px;
}

input:valid + span:after {
    position: absolute;
    content: '✓';
    color: #26b72b;
    padding-left: 5px;
}
</style>
</head>
<body  background="bmsit2.jpg ">
<form action="admin2.php" method="post">
<h1>ADMIN PAGE</h1>
<b>Select The Month:<input type="month" id="start" name="month"
           min="2018-01" />
        <input style="background-color: lightblue" type="submit" name="Go" value="Go"/>
</form>
<h3 class="a"><a href = "logout.php">Sign Out</a></h3>
<br><br>
<form method="post" action="admin1.php" name="form1">
<center><h2> Is There Any Upcoming event??</h2></center>
<center><h4>fill up below</h4></center>
<center><h4>Name: <input type="text" name="upcome" required/>
<center><h4>Date: <input type="date" name="dat" min="2018-10-24">
    <br><br> 
 <center> <input style="background-color: lightblue" type="submit" name="submit" onsubmit="required()"></center>
    <img src="admin.jpg"/>

    <script type="text/javascript">
      function required()
{
   var empt = document.forms["form1"]["upcome"].value;
   if (empt == "")
  {
  alert("Please input a Value");
 return false;
   }
return true; 
}

    </script>
  </form>
</body>
</html>
