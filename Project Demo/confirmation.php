<!doctype html>
<html lang="en">

<head>
    <title>Silver City Cinema</title>
    <meta charset=“utf-8”>
<link rel="stylesheet" href="css.css">

<style>
form{font-family:Arial,sans-serif; width:400px;padding:30px 10px 40px 300px;}

        
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
			padding: 0px 75px 30px 75px
        }
        
        td,
        th {
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #254855;
            color: #FFFFFF;
        }
        
        tr:nth-child(even) {
            background-color: #DDDDDD;
        }
		

}
</style>
</head>
<?php
$servername = "localhost";
$username = "f31ee";
$password = "f31ee";
$dbname = "f31ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {  //if not connected successfully
    die("Connection failed: " . mysqli_connect_error());
}  
?>
<body>
    <div id="wrapper">
        <header>
            <img src="logo(silver).jpg" alt="Silver City" width="364px" height="108.75px" style="padding:10px">
            <nav>
                <a href="faqs.html"><b>FAQs</b></a>
                <a href="schedule.html"><b>Schedule</b></a>
                <a href="personaldetail.php"><b>Bookings</b></a>
                <div class="dropdown">
                    <button class="dropbtn"><a><b>Movies&#8609;</b></a></button>
                    <div class="dropdown-content">
                        <a href="comedy.html"><b>Comedy</b></a>
                        <a href="horror.html"><b>Horror</b></a>
                        <a href="family.html"><b>Family</b></a>
                    </div>
                </div>
                <a class="active" href="index.html"><b>Home</b></a>
            </nav>
        </header>
		<div>
            <center><img src="bookings.jpg" alt="Bookings" width="46.2px" height="46.2" style="padding-top:50px"></center>
            <h1><center>Bookings</center></h1>
        </div>
		<div>
			<h2 style="padding-left:50px; letter-spacing:2.5px">Step 2/3: Confirmation of details</h2>
		</div>
		
		<div>
		<form method="POST" action="payment.html">
		<?php
			$sql = mysqli_query($conn,"SELECT * FROM moviedata ORDER BY id DESC LIMIT 1");
			
			$print_data = mysqli_fetch_array($sql);
		?>
		<p>Hi,
		<?php echo $print_data[5]?>&nbsp<?php echo $print_data[6]?>!</p>
		<p>This is your confirmation receipt:</p>
		<table class="confirm">
		<tr>
			<td>Movie: </td>
			<td><?php echo $print_data[1]?></td>
			<br>
		</tr>
		<tr>
			<td>Date: </td>
			<td><?php echo $print_data[2]?></td>
			<br>
		</tr>
		<tr>
			<td>Timing: </td>
			<td><?php echo $print_data[3]?></td>
			<br>
		</tr>
		<tr>
			<td>No. of Ticket(s):</td>
			<td><?php echo $print_data[4]?></td>
			<br>
		</tr>
		<tr>
			<td>Total Payable($):</td>
			<td><input type="text" onclick="payment()" id="totalpayable">
		</tr>
		</table>
		<br><br>
		<input id="submitpayment" name="submitseat" type="submit" value="Proceed to Payment" class="submitseat">
				<script type="text/javaScript">
		function payment(){
			var quantity=<?php echo $print_data[4]?>;
			
			var price=quantity*9;
			
			document.getElementById("totalpayable").value =price.toString();
		}
		</script>
		</form>
		</div>
		<footer>
            <img src="logo(black).jpg" alt="Silver City" width="291.2px" height="87px" style="padding-top:10px;padding-bottom:10px;padding-left:10px">
            <b><small>&copy; Copyright 2019 Silver City Cinema - All rights Reversed.</small></b>
        </footer>
		
	</div>
</body>
</html>