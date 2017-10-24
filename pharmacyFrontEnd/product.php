<?php

	if(isset($_GET['id'])){
		$id = preg_replace('#[^0-9]#i', '',$_GET['id']);
	}
	else{
		echo "no such product exist";
		exit();
		$dbh = null;
	}
    include "connect_to_mysql_pdo.php";
	$date_added="";
	$dynamic_list = "";
    $res = $dbh->prepare("SELECT * FROM medicine WHERE medicineid='$id' LIMIT 10");
    $res->execute();
    $productCount = $res->rowCount();
    if ($productCount > 0) {
        while ($row = $res->fetch()) {
        $id = $row['medicineid'];
        $product_name = $row['medicine_name'];
        $product_price = $row['medicine_price'];
        $quantity = $row['quantity'];
        $product_details = $row['medicin_zdetails'];
        $check = $product_details;
        if (strlen(trim($check)) == 0){
            $product_details = "<u>No Details</u>";
        }
		$more ="";

		if(strlen($product_details)>60){
          //  $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
        }
	  }
    }

    else {
        $dynamic_list = "This product does not exist.";
    }
    $dbh = null;
?>
<!DOCTYPE html>
<htmL>
<head>
    <title><?php echo $product_name;?> - Ecommerce Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        body {
            margin-top: 25px;
        }
        .thumbnail img{
            width: 100%;
        }
        .caption-full {
            padding-right: 10px;
            padding-left: 10px;
        }
        .extra-data {
            padding-right: 10px;
            padding-left: 10px;
            color: #d17581;
        }
        .thumbnail .caption-full {
            padding: 9px;
            color: #333;
        }
    </style>
</head>
<body>
<?php
    $path_parts = pathinfo(__FILE__);
    $GLOBALS['page'] = $path_parts['basename'];
    include_once("header.php");
?>
<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Prescription</p>
                <div class="list-group">
                </div>
            </div>

            <div class="col-md-9">
                <div class="thumbnail">
                <img class="img-responsive" src="inventory_images/<?php echo $id;?>.jpg" alt="">
                <div class="caption-full">
                    <h3 class="pull-right">R<?php echo $product_price;?></h3>
                    <h3><a href="#"><?php echo$product_name ?></a>
                    </h3>
                    <p><?php echo$product_details; ?></p>
                    <form id="form1" name="form1" method="post" action="cart.php">
                        <div class="form-group">
                            <input type="hidden" name="pid" id="pid" value="<?php echo $id;?>"/>
                            <input type="submit" class="btn btn-default btn-primary" id="button" value="add to cart">
                        </div>
                    </form>
                    <p class="pull-right"><?php echo $date_added;?></p>

                </div>
            </div>
            </div>

        </div>

    </div>
	
    <!-- /.container -->
    <?php include_once("footer.php"); ?>
</body>
</html>
