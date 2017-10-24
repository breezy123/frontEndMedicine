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
			<h2 style="text-align: center">Add Condition</h2>
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
			<form id="form1" name="form1" onsubmit="addForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Condition Name</span>
						<input name="conditionName" type="text" class="form-control" id="fr_itemname" placeholder="Condition Name..."/>
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
			<h2 style="text-align: center">Delete Condition</h2>
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
			<form id="form2" name="form2" onsubmit="deleteForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Condition ID:</span>
						<input name="conditionId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Condition ID.." required/>
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
			<h2 style="text-align: center">Update Condition</h2>
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
				    	<span class="input-group-addon">Condition ID:</span>
						<input name="conditionId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Medicine ID.." required/>
					</div>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Condition Name</span>
						<input name="conditionName" type="text" class="form-control" id="fr_itemname" placeholder="Condition Name..."/>
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

    function addForm() {
        var conditionName = document.forms["form1"]["conditionName"].value;
        
        var url = "http://localhost:8080/pharmacy/addCondition/" + conditionName ;

        var request = new XMLHttpRequest();

        alert("Condition Successfully Added.")
        request.open("GET", url);
        request.send();
    }
	
	function deleteForm() {
        var conditionId = document.forms["form2"]["conditionId"].value;
        var url = "http://localhost:8080/pharmacy/deleteCondition/" + conditionId;
        var request = new XMLHttpRequest();

        alert("Condition Successfully Deleted.")
        request.open("GET", url);
        request.send();
    }
	
	 function updateForm() {
	    var conditionId = document.forms["form3"]["conditionId"].value;
        var conditionName = document.forms["form3"]["conditionName"].value;
        var url = "http://localhost:8080/pharmacy/updateCondition/" + conditionId +"/"+conditionName ;

        var request = new XMLHttpRequest();

        alert("Condition Successfully Updated.")
        request.open("GET", url);
        request.send();
    }

</script>