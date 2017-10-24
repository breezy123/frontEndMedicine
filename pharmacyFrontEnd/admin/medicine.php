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
			<h2 style="text-align: center">Add Medicine</h2>
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
			<form id="form1" name="form1" onsubmit="validateForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Product Name</span>
						<input name="productName" type="text" class="form-control" id="fr_itemname" placeholder="Product Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Price</span>
						<input name="productPrice" type="text" class="form-control" id="fr_price" placeholder="Product Cost..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Quantity</span>
						<input name="productQuantity" type="text" class="form-control" id="fr_category" placeholder="Quantity..." />
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Details</span>
						<textarea name="productDetails" rows="4" class="form-control" id="fr_details" placeholder="product description..."> </textarea>
					</div>
				</div>
				
				<div class="form-group">
				<div class="input-group">
			    	<span class="input-group-addon">Product Image</span>
					<input name="fr_image" type="file" class="form-control" id="fr_image" />
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
			<h2 style="text-align: center">Delete Medicine</h2>
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
				    	<span class="input-group-addon">Medicine ID:</span>
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
			<h2 style="text-align: center">Update Medicine</h2>
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
				    	<span class="input-group-addon">Medicine ID:</span>
						<input name="medicineId" type="text" class="form-control" id="fr_itemname" placeholder="Provide Medicine ID.." required/>
					</div>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Product Name</span>
						<input name="productName" type="text" class="form-control" id="fr_itemname" placeholder="Product Name..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Price</span>
						<input name="productPrice" type="text" class="form-control" id="fr_price" placeholder="Product Cost..." />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Quantity</span>
						<input name="productQuantity" type="text" class="form-control" id="fr_category" placeholder="Quantity..." />
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
				    	<span class="input-group-addon">Product Details</span>
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
			<form id="form4" name="form4" onsubmit="readForm()" method = "post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
				    <div class="input-group">
				    	<span class="input-group-addon">Medicine ID:</span>
						<input name="medicineId" type="text" class="form-control" id="fr_itemname" placeholder="Medicine ID.." required/>
					</div>
				</div>
				
				<div class="form-group">
				<input name="button" type="submit" class="btn btn-default btn-primary" id="button" value="Display"/>
				</div>
				<p id="medID"></p>
			</form>
</div>
</body>

</htmL>

<script type = "text/javascript">

    function validateForm() {
        var productName = document.forms["form1"]["productName"].value;
        var productPrice = document.forms["form1"]["productPrice"].value;
		var productQuantity = document.forms["form1"]["productQuantity"].value;
		var productDetails = document.forms["form1"]["productDetails"].value;
        var url = "http://localhost:8080/pharmacy/addMedicine/" + productName +"/"+productPrice +"/"+productQuantity+"/"+productDetails;

        var request = new XMLHttpRequest();

        alert("Medicine Successfully Captured.")
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
	
	
    function readForm() {
		var id = document.forms["form4"]["medID"].value;
		
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