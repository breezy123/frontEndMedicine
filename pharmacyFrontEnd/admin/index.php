<!DOCTYPE html>
<htmL>
<head>
    <title>Admin Page (index)</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php 

	$path_parts = pathinfo(__FILE__);
	$GLOBALS['page'] = $path_parts['basename'];
	include_once("admin_header.php");
 ?>
<div class="container">
	<h1>Admin Area</h1>
	<div class="list-group">
	<a class="list-group-item"href="medicine.php">Medicine</a>
	<a class="list-group-item"href="conditions.php">Condition</a>
	<a class="list-group-item"href="patientcondition.php">Patient Condition</a>
	<a class="list-group-item"href="patient.php">Patient</a>
	<a class="list-group-item"href="pharmacist.php">Pharmacy</a>
  <a class="list-group-item"href="prescription.php">Patient Prescription</a>

	</div>
</div>
</body>
</htmL>
