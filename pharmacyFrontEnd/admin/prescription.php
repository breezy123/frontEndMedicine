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
			<h2 style="text-align: center">Add Patient Prescription</h2>
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
			<form id="form1" name="form1" onsubmit="addPrescription()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Prescription Date</span>
						<input name="prescriptionDate" type="date" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Doctor Identity</span>
						<input name="doctorId" type="text" class="form-control" id="fr_price" placeholder="Doctor Identity..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Patient Identity</span>
						<input name="patientId" type="text" class="form-control" id="fr_category" placeholder="Patient Identity..." />
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Pharmacy Identity</span>
						<input name="pharmacyId" type="text" class="form-control" id="fr_category" placeholder="Pharmacy Identity..." />
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Add Prescription"/>
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
			<h2 style="text-align: center">Delete Patient Prescription</h2>
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
			<form id="form2" name="form2" onsubmit="deleteMedicineForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Prescription Identity</span>
						<input name="medicineId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Medicine ID.." required/>
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
			<h2 style="text-align: center">Update Prescription</h2>
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
			<form id="form3" name="form3" onsubmit="updateForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
			
			<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Prescrption ID:</span>
						<input name="medicineId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Medicine ID.." required/>
					</div>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Prescription Date</span>
						<input name="prescriptionDate" type="date" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Doctor Identity</span>
						<input name="doctorId" type="text" class="form-control" id="fr_price" placeholder="Product Cost..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Patient Identity</span>
						<input name="productQuantity" type="text" class="form-control" id="fr_category" placeholder="Quantity..." />
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Pharmacy Identity</span>
						<textarea name="productDetails" rows="4" class="form-control" id="fr_details" placeholder="product description..."> </textarea>
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

    function addPrescription() {
        var prescriptionDate = document.forms["form1"]["prescriptionDate"].value;
        var doctorId = document.forms["form1"]["doctorId"].value;
		var patientId = document.forms["form1"]["patientId"].value;
		var pharmacyId = document.forms["form1"]["pharmacyId"].value;
        var url = "http://localhost:8080/pharmacy/addPrescription/" + prescriptionDate +"/"+doctorId +"/"+patientId+"/"+pharmacyId;

        var request = new XMLHttpRequest();

        alert("Pateint Prescription Successfully Captured.")
        request.open("GET", url);
        request.send();
    }
	
	function deleteMedicineForm() {
        var medicineId = document.forms["form2"]["medicineId"].value;
        var url = "http://localhost:8080/pharmacy/deleteMedicine/" + medicineId;
        var request = new XMLHttpRequest();

        alert("Medicine Successfully Deleted.")
        request.open("GET", url);
        request.send();
    }
	
	 function updateForm() {
	    var productID = document.forms["form3"]["medicineId"].value;
        var productName = document.forms["form3"]["productName"].value;
        var productPrice = document.forms["form3"]["productPrice"].value;
		var productQuantity = document.forms["form3"]["productQuantity"].value;
		var productDetails = document.forms["form3"]["productDetails"].value;
        var url = "http://localhost:8080/pharmacy/updateMedicine/" + productID +"/"+productName +"/"+productPrice+"/"+productQuantity+"/"+productDetails;

        var request = new XMLHttpRequest();

        alert("Medicine Successfully Updated.")
        request.open("GET", url);
        request.send();
    }

</script>