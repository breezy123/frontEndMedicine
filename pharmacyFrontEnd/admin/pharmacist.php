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
			<h2 style="text-align: center">Add Pharmacy</h2>
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
			<form id="form1" name="form1" onsubmit="addPharmacy()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Pharmacy Name</span>
						<input name="pharmacyName" type="text" class="form-control" id="fr_itemname" placeholder="Pharmacy Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Qualification</span>
						<input name="qualification" type="text" class="form-control" id="fr_price" placeholder="Obtained Qualification..." />
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Add Item Now"/>
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
			<h2 style="text-align: center">Delete Pharmacy</h2>
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
			<form id="form2" name="form2" onsubmit="deletePharmacy()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Pharmacy ID:</span>
						<input name="pharmacyId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Pharmacy ID.." required/>
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
			<h2 style="text-align: center">Update Pharmacy</h2>
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
			<form id="form3" name="form3" onsubmit="updatePharmacy()" method = "post" class="form-horizontal" enctype="multipart/form-data">
			
			<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Pharmacy ID:</span>
						<input name="pharmacyId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Pharmacy ID.." required/>
					</div>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Pharmacy Name</span>
						<input name="pharmacyName" type="text" class="form-control" id="fr_itemname" placeholder="Pharmacy Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Qualification</span>
						<input name="qualification" type="text" class="form-control" id="fr_price" placeholder="Obtained Qualification..." />
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

    function addPharmacy() {
        var pharmacyName = document.forms["form1"]["pharmacyName"].value;
        var qualification = document.forms["form1"]["qualification"].value;
        var url = "http://localhost:8080/pharmacy/addPharmacy/"+pharmacyName+"/"+qualification;

        var request = new XMLHttpRequest();

        alert("Pharmacy Successfully Captured.")
        request.open("GET", url);
        request.send();
    }
	
	function deletePharmacy() {
        var pharmacyId = document.forms["form2"]["pharmacyId"].value;
        var url = "http://localhost:8080/pharmacy/deletePharmacy/" + pharmacyId;
        var request = new XMLHttpRequest();

        alert("Pharmacy Successfully Deleted.")
        request.open("GET", url);
        request.send();
    }
	
	 function updatePharmacy() {
	    var pharmacyId = document.forms["form3"]["pharmacyId"].value;
        var pharmacyName = document.forms["form3"]["pharmacyName"].value;
        var qualification = document.forms["form3"]["qualification"].value;
		
        var url = "http://localhost:8080/pharmacy/updatePharmacy/"+pharmacyId+"/"+pharmacyName+"/"+qualification;

        var request = new XMLHttpRequest();

        alert("Pharmacy Successfully Updated.")
        request.open("GET", url);
        request.send();
    }

</script>