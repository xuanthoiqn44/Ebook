<?php include ('include/dbcon.php');

?>
<html>

<head>
		<title>Library Management System</title>
		
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}
		
@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
				<img src = "images/logo.jpeg" style = " margin-top:-17px; float:left; margin-left:115px; margin-bottom:-6px; width:100px; height:100px;">
				<img src = "images/logo4.jpg" style = " margin-top:-17px; float:right; margin-right:115px; width:100px; height:100px;" >
				<center><h5 style = "font-style:Calibri"></h5>&nbsp; &nbsp;&nbsp; Republic of the Philippines &nbsp;	&nbsp; </center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> &nbsp; &nbsp; Library Management System</center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> Valladolid National High School</center>
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Member List&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
<?php
							$result= mysql_query("select * from user 
							order by user.user_id DESC ") or die (mysql_error());
?>
						<table class="table table-striped">
						  <thead>
								<tr>
								<tr>
									<th>User Name</th>
									<th>Contact</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Type</th>
									<th>Level</th>
									<th>Section</th>
									<th>Status</th>
								</tr>
								</tr>
						  </thead>   
						  <tbody>
<?php
							while ($row= mysql_fetch_array ($result) ){
							$id=$row['user_id'];
?>
							<tr>
								<td style="text-align:center;"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
								<td style="text-align:center;"><?php echo $row['contact']; ?></td> 
								<td style="text-align:center;"><?php echo $row['gender']; ?></td> 
								<td style="text-align:center;"><?php echo $row['address']; ?></td> 
								<td style="text-align:center;"><?php echo $row['type']; ?></td> 
								<td style="text-align:center;"><?php echo $row['level']; ?></td> 
								<td style="text-align:center;"><?php echo $row['section']; ?></td> 
								<td style="text-align:center;"><?php echo $row['status']; ?></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />
							<?php
								include('include/dbcon.php');
								include('session.php');
								$user_query=mysql_query("select * from admin where admin_id='$id_session'")or die(mysql_error());
								$row=mysql_fetch_array($user_query); {
							?>        <h2><i class="glyphicon glyphicon-user"></i> <?php echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['firstname']." ".$row['lastname']." ".'</span>';?></h2>
								<?php } ?>


			</div>
	
	
	
	

	</div>
</body>


</html>