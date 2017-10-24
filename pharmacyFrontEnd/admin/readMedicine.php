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
			<h2 style="text-align: center">Read Medicine</h2>
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
			<form id="form1" name="form1" onsubmit="validateForm()()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Medicine ID</span>
						<input name="medicineId" type="text" class="form-control" id="fr_itemname" placeholder="Condition Name..."/>
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Add Item Now"/>
				</div>
				<p id="medID"></p>
			</form>
		</div>
		<div class="col-xs-0 col-md-1">
		</div>
	</div>
</div>
<div class="form-group">

</div>

</body>

</htmL>

<script type = "text/javascript">

    function validateForm() {
		var id = document.forms["form1"]["medID"].value;
		
		var url = "http://localhost:8080/pharmacy/readMedicine/" + id;
		alert(url);
		var request = new XMLHttpRequest();
		
		request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var high = this.responseText;
       }
		};
		
		request.open("GET", url);
		request.send();
		//alert(high);
		var myObj = JSON.parse(high);
		alert("ID: " + myObj.id);
		document.getElementById("medID").innerHTML = myObj.id;
	}


</script>