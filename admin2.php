<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<?php

$orderdate = explode('-', $_POST['month']);
$year = $orderdate[0];
$month  = $orderdate[1];
$con=mysqli_connect("localhost","root","sachin123","register");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM placement Where MONTH(Dat)=$month AND YEAR(Dat)=$year";
$i=0;
if ($result=mysqli_query($con,$sql))
  {
?>
 <center><h1>MONTHLY REPORT</h1></center>
  <h2><u>placemnet Details:</u></h2>
    <?php 
     if($row = $result->fetch_assoc()){
      ?>
     

       <table border="1"> <tr >
 
      	<th>LOGO</th><th>Company name</th><th>Date</th><th>NO.Student</th><th>Package</th><th>Name of students</th></tr>
  <?php   
   }
   else
      echo "NILL";

  while($row = $result->fetch_assoc())
    {
      if($row['cname']=='')
      {
        echo "nill";

      }
      else
      {
      ?>

       
      	<tr style="text-align: center">
      	<td><img src="<?echo $row['logo']; ?>" alt="logo"></td>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['Dat']; ?></td>
        <td><?php echo $row['nostu']; ?></td>
        <td><?php echo $row['package']; ?></td>
        <td><?php echo $row['sname']; ?></td>
        </tr>
      </table>

        <br>
        <br>
     <?php

       }

    }
  mysqli_free_result($result);
  }

mysqli_close($con);

?>

<?php

$con=mysqli_connect("localhost","root","sachin123","register");
$sql="SELECT * FROM cocurricular Where MONTH(Dat)=$month AND YEAR(Dat)=$year";
$i=0;
if ($result=mysqli_query($con,$sql))
  {
?>
<br><br>
<h2><u>Co curricular Details:</u></h2>
 <table border="1"> <tr>
      	<th>Date</th><th>Faculty name</th><th>Activity Name </th><th>Number Of days</th><th>Memorial Moments</th><th>image</th></tr>
<?php
  while($row = $result->fetch_assoc())
    {
    	$MyPhoto=$row['img'];
      ?>

       
      	<tr style="text-align: center">
      	<td><?php echo $row['Dat']; ?></td>
        <td><?php echo $row['Fname']; ?></td>
        <td><?php echo $row['Aname']; ?></td>
        <td><?php echo $row['Nodays']; ?></td>
        <td><?php echo $row['wmm']; ?></td>
        <td><img src="<?php echo $MyPhoto; ?>" alt="image"></td>
        </tr>
      </table>
      <br><br>
     <?php



    }
  mysqli_free_result($result);
  }

mysqli_close($con);

?>

<?php

$con=mysqli_connect("localhost","root","sachin123","register");
$sql="SELECT * FROM welcome Where MONTH(Dat)=$month AND YEAR(Dat)=$year";
$i=0;
if ($result=mysqli_query($con,$sql))
  {
?>
<br>
<h2><u>Work Shop/ Seminar/ FDP attended/ Expert Talk :</u></h2>
 <table border="1"> <tr>
      	<th>Domain</th><th>Date</th><th>FName</th><th>Number Of days</th><th>Memorial Moments</th><th>image</th><th>name</th></tr>
<?php
  while($row = $result->fetch_assoc())
    {
    	$MyPhoto=$row['img'];
      ?>

       
      	<tr style="text-align: center">
      	<td><?php echo $row['Domain']; ?></td>
        <td><?php echo $row['Dat']; ?></td>
        <td><?php echo $row['FName']; ?></td>
        <td><?php echo $row['Nodays']; ?></td>
        <td><?php echo $row['wmm']; ?></td>
        <td><img src="<?echo $MyPhoto; ?>" alt="image"></td>
        <td><?php echo $row['dname']; ?></td>
        </tr>
      </table>
      <br><br>
     <?php



    }
  mysqli_free_result($result);
  }

mysqli_close($con);

?>
<center><button onclick="myFunction()">Print this page</button></center>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>