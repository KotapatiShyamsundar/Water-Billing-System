<html>
<head>
  <style>
    body{
      background-color: black;
      color:white;
      padding-left: 350px;
      
    }
    .second{
     
      width: 600px;
      height: 565px;
      border: 10px solid violet;
      padding: 50px;
      margin: 20px;
    }
    .back{
      text-align: center;
      font-size: larger;
    }
  </style>
</head>
<body>
<div class="second">
<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where id='$id'");
while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $customer_id=$row['customer_id'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
	  $date=$row['dates'];
 
  }

?>

<?php
  
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM customer WHERE id  = '$customer_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
                $fname=$test['Firstname'] ;
				$lname= $test['Lastname'] ;					
				$address=$test['Addss'] ;
				$contact=$test['Phoneno'] ;

?>

<div id="data">
<center>
<h1>SRM WATER STATION</h1>
<p>MANGALGIRI, GUNTUR</p>
<p>Phone: 984917180 </p>
</center>
<div id="context">
<p>Name: <?php echo $fname.'&nbsp;'.$lname; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Id: 000<?php echo $id; ?>
<br /><br />
Address: <?php echo $address; ?>
<br /> <br />
Contact: <?php echo $contact; ?>
</p>
<center>Date: <?php echo $date; ?> </center>
<p>
Previous Reading : <?php echo $prev;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: <?php echo $price; ?><br /><br />
Present Reading : <?php echo $pres; ?> <br /><br />
Consuption: <?php echo $totalcons;?>
<h1 align="center">Bill Amount:P <?php echo $bill; ?> </h1><br />
<p>Casher: </p>
</p>
<CENTER><form><input type="button" onclick="window.print()" value="Print page" /></form><a href="bill.php">Back</a></CENTER>
</div>

</div>

</div>
</body>
</html>