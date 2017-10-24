<!DOCTYPE html>
<htmL>
<head>
    <title>Inventory List</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

	
	<style type="text/css">
		.input-group-addon {
			min-width: 125px;
			text-align: right;
		}
		body {
 			padding-top: 10px;
		}
	</style>
</head>
<body>
<?php include_once("../header.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-1 col-md-2">
		</div>
		<div class="col-xs-10 col-md-8">
			<h2 style="text-align: center">Add Patient</h2>
		</div>
		<div class="col-xs-1 col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
		<div class="col-xs-12 col-md-10">
		
		
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
		<div class="col-xs-12 col-md-10">
			<form id="form1" name="form1" onsubmit="addPatients()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Patient Name</span>
						<input name="patientName" type="text" class="form-control" id="fr_itemname" placeholder="Patient Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Medical-Aid Name</span>
						<input name="medicalAidName" type="text" class="form-control" id="fr_price" placeholder="Medical Aid Name..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Medical-Aid Number</span>
						<input name="medicalAidNumer" type="text" class="form-control" id="fr_category" placeholder="Medical Aid Number..." />
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Add Patient"/>
				</div>
			</form>
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-1 col-md-2">
		</div>
		<div class="col-xs-10 col-md-8">
			<h2 style="text-align: center">Delete Patient</h2>
		</div>
		<div class="col-xs-1 col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
		<div class="col-xs-12 col-md-10">
		
		
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
<div class="col-xs-12 col-md-10">
			<form id="form2" name="form2" onsubmit="deletePatient()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Patient ID:</span>
						<input name="patientId" type="text" class="form-control" id="fr_itemname" placeholder="Patient ID.." required/>
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Delete"/>
				</div>
			</form>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-1 col-md-2">
		</div>
		<div class="col-xs-10 col-md-8">
			<h2 style="text-align: center">Update Patient</h2>
		</div>
		<div class="col-xs-1 col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
		<div class="col-xs-12 col-md-10">
		
		
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-0 col-md-1">
		</div>
		<div class="col-xs-12 col-md-10">
			<form id="form3" name="form3" onsubmit="updatePatient()" method = "post" class="form-horizontal" enctype="multipart/form-data">
			
			<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Patient ID:</span>
						<input name="patientId" type="text" class="form-control" id="fr_itemname" placeholder="Patient ID.." required/>
					</div>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Patient Name</span>
						<input name="patientName" type="text" class="form-control" id="fr_itemname" placeholder="Patient Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Medical-Add Name</span>
						<input name="medicalAidName" type="text" class="form-control" id="fr_price" placeholder="Medical-Aid Name..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Medical-Aid Number</span>
						<input name="medicalAidNumber" type="text" class="form-control" id="fr_category" placeholder="Medical-Aid Number..." />
					</div>
				</div>

				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Update"/>
				</div>
			</form>
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
</div>
</body>

</htmL>

<script type = "text/javascript">

    function addPatients() {
        var patientName = document.forms["form1"]["patientName"].value;
        var medicalAidName = document.forms["form1"]["medicalAidName"].value;
		var medicalAidNumber = document.forms["form1"]["medicalAidNumer"].value;
        var url = "http://localhost:8080/pharmacy/addPatient/" + patientName +"/"+medicalAidName +"/"+medicalAidNumber;

        var request = new XMLHttpRequest();

        alert("Patient Successfully Captured.")
        request.open("GET", url);
        request.send();
    }
	
	function deletePatient() {
        var patientId = document.forms["form2"]["patientId"].value;
        var url = "http://localhost:8080/pharmacy/deletePatient/" + patientId;
        var request = new XMLHttpRequest();

        alert("Patient Successfully Deleted.")
        request.open("GET", url);
        request.send();
    }
	
	 function updatePatient() {
	    var patientId = document.forms["form3"]["patientId"].value;
        var patientName = document.forms["form3"]["patientName"].value;
        var medicalAidName = document.forms["form3"]["medicalAidName"].value;
		var medicalAidNumber = document.forms["form3"]["medicalAidNumber"].value;
		
        var url = "http://localhost:8080/pharmacy/updatePatient/" + patientId +"/"+patientName +"/"+medicalAidName+"/"+medicalAidNumber;

        var request = new XMLHttpRequest();

        alert("Patient Successfully Updated.")
        request.open("GET", url);
        request.send();
    }

</script>