<?php 
require_once('config.php');
	$noOfSections=0;	
?>

<!doctype html>
<html lang="en">
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;text-align: left;padding: 2px;
}
.navbar-dark .navbar-nav .nav-link {
    color: orange !important;
}
#cart{
	text-decoration:none;
}
.cart_sup{
	color: #131212;font-weight: bold;text-decoration:none;top: -1.05em !important;left: -1px !important;text-decoration:none;	
}
#sidebar ul li{
	color:rgba(230,230,230,0.9);
	list-style:none;
	border-bottom: 1px solid rgba(100,100,100,0.3);
}
#sidebar .toggle-btn{
position:absolute;
	left:230px;
	top:20px;
}
#sidebar{

position: fixed;
width:200px;
height:100%;
background:#151719;
	z-index:190000;
	left:-200px;
	transition: all 500ms linear;
}
#sidebar.active{
	left:0px;
}
.pricing-block:hover{
	box-shadow: 5px 10px 8px #888888;
}
.category{
	font-weight: bold;
	font-size: 16px;
    width: 150px;
    height: 150px;
    background: #FF5733 !important;
    color: white;
    text-align: center;
    margin: 0 auto;
    border-radius: 100%;
    padding-top: 40px;
	border: 1px solid #FF5733;
	transition : all 500ms linear;
	cursor:pointer;
}
.category:hover{
	color: #fff;
	
	background: #FF5733 !important;
	transition : all 500ms linear;
	box-shadow: 5px 10px 8px #888888;
	}
.btn-primary{
	background-color:#FF5733 !important;
	border-color:#FF5733 !important;
	}
	.btn-primary:hover{
	background-color:#F65937 !important;
		border-color:#F65937 !important;
	}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s; 
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.closeModal {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-top: -20px;
  margin-right: -5px;
}

.closeModal:hover,
.closeModal:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.closeMenu {
  float: right;
  font-size: 26px;
  font-weight: bold;
  margin-right: 5px;
}

.closeMenu:hover,
.closeMenu:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 10px;
  background-color:#FF5733;
  color: white;
    margin-left: -15px;
    margin-right: -15px;
}
	text-align:center;
}

.modal-body {padding: 2px 10px; color:black;}

</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawseom Icon CSS -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="shortcut icon" type="image/icon" href="assets/img/cart-icon.png"/>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>ମୋ ଦୋକାନ ( My Shop )</title>
</head>
<body id="page-top">
	<!-- The Modal -->
<div id="newsModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content col-md-8 col-lg-8 col-sm-12 col-xs-12 mb-12">
    <div class="modal-header ">
      <b style="color:white;font-weight:bold;font-size:125%;text-align:center">ଆଜିର ସୂଚନା ( Today's News ) </b>
		<span class="closeModal">&times;</span>
    </div>
    <div class="modal-body">
      <b style="font-weight:bold;font-size:16px;">ଫନି ମହା ବାତ୍ୟା ଦ୍ୱାରା ହୋଇଥିବା କ୍ଷତି ଯୋଗୁ ଆମ ଦୋକାନୀ ମାନେ ଆମକୁ ଜିନିଷ ଯୋଗାଇବା ନିମନ୍ତେ ସକ୍ଷମ ନୁହନ୍ତି | <br><br>ତେଣୁ ମୋଦୋକାନ ବର୍ତମାନ ଆପଣଙ୍କୁ ନିଜର ସେବା ଯୋଗାଇ ବାକୁ ଅସମର୍ଥ | ଯଥା ଶୀଘ୍ର ଆମ ଦୋକାନୀ ମାନେ ସକ୍ଷମ ହେଲା ମାତ୍ରେ, ଆମେ ଆପଣଙ୍କୁ ଆମର ସେବା ଯୋଗାଇ ଦେବୁ |</b><br><br>
      <b style="font-weight:bold;font-size:16px;">ଅସୁବିଧା ପାଇଁ ଆମେ ଦୁଃଖିତ |</b>
    </div>    
  </div>
</div>

<div id="cartModal" class="modal ">
  <div class="modal-content col-md-8 col-lg-8 col-sm-12 col-xs-12 mb-12">
    <div class="modal-header">
      <b style="color:white;font-weight:bold;font-size:22px;text-align:center">Shopping</b>
		<span class="closeModal">&times;</span>
    </div>
    <div class="modal-body">
      <b style="font-weight:bold;font-size:16px;color:black">Kindly add Products to your cart..!</b>
    </div>    
  </div>
</div>

	<div id="placedOrderModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content col-md-8 col-lg-8 col-sm-12 col-xs-12 mb-12">
    <div class="modal-header ">
      <b style="color:white;font-weight:bold;font-size:125%;text-align:center">Placed Order Status</b>
		<span class="closeModal">&times;</span>
    </div>
    <div class="modal-body">
    	<div>
			<p id="purchaseMsg" style='font-weight:bold;font-size:16px;'></p>
		</div>
    </div>    
  </div>
</div>

<div class="container-fluid fixed-top" style="background-color:#f8f9fa;height:30px;width:100%;font-size: 12px;color:black;">
		
		<p class="pull-right"><i class="fa fa-envelope" style="color:orange;margin-top:5px;"></i> <a href="mailto:support@modokaan.com">support@modokaan.com </a>&nbsp;&nbsp;<i class="fa fa-whatsapp" style="color:green"></i> <a href="tel:+91-7008766586">(+91)7008766586</a></p>
	</div>
	<div id="sidebar" style="background-color:#f8f9fa;">
		<i class="closeMenu toggleSidebar" style="color:#0774d2;cursor:pointer;">&times;</i>
		<ul style="padding: 0px !important;margin-top: 25px;color:black">
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="#product" >Products</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/services.php" >Promotions</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#home" >Home</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#about" >About</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#charity" >Charity</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#contact" >Contact</a></li>
		</ul>
	</div>
	<div id="toggleSidebar" class="toggle-btn  navbar-dark container-fluid fixed-top" style="margin-top:28px;background-color:#fff;height:45px;line-height:45px">
			 <i class="fa fa-bars faa-horizontal animated toggleSidebar" style="font-size: 22px;color: #ea740e;cursor:pointer"></i>
			 <a href="#page-top"><img src="./assets/img/finallogo.png" style="height: 50px;margin-top: -40px;"></a>
			<a  class="pull-right" id="cart" href="#purchase"><i class="fa fa-shopping-cart" style="color:#FF5733;font-size:20px;line-height:45px"></i>
				<sup class="cart_sup">0</sup></a>
		</div>
	<div class="text-center container-fluid fixed-top" style="margin-top:22px">
		<p id="itemadded" style="color:orange;font-weight:bold;font-size:16px;"></p>		
	</div>
    <section class="section section-top section-full " style="padding:1px">
        <!-- Cover -->
        <!-- Overlay -->
        <!-- <div class="bg-overlay"></div> -->
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
					<div class="col-md-12 col-lg-12 text-center" style="padding-top:100px">
                    <!-- Heading -->
                    <h2 class="lg-title mb-2" style="line-height: 50px;">
                        ମୋ ଦୋକାନ (My Shop)
                    </h2>
                    <!-- Subheading -->
                    <b class="mb-5 ;" style="color:orange;font-weight:bold;font-size:25px;">
                        ଓଡିଶାର ବାସ୍ନା, ଓଡ଼ିଆଙ୍କ ପସନ୍ଦ
                    </b>					
                    </div>
                </div>
            </div>
						  
	       <div class="row justify-content-center mb-4">
                <div class="col-md-12 col-lg-12 text-center" style="color: black;font-size: 22px;">
						Odisha Authentic Foods By Odias
                </div>
			   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
					<img src="assets/img/GSTIN_logo.png" style="height:70px">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
					<img src="assets/img/FSSAI_logo.png" style="height:70px">
				</div>
            </div>
        </div>
    </section>
	
  <section class="section" id="product" style="padding:1px;display:block; margin-top:-45px;">
	  <div class="container" id="productCategory" style="transition: all 1s ease-in">
		  <div class="col-md-12 col-lg-12 col-sm-12">
			  <h2 class="lg-title mb-2 text-center" style="font-size: 20px;font-weight: bold;">Products Category</h2>
		  </div>
		  <div class="row mb-4">
<?php
	$sql="SELECT * from tblproducts_Category where active_status=1 order by 1";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<div class='col-md-4 col-lg-4 col-sm-6 col-xs-6 mb-4' id='".$row['PRODUCTS_CTGRY_CODE']."'>
					  <div class='category' style='background: url(assets/img/white.png);'>
						  <span>".$row['PRODUCTS_CTGRY_NAME']."</span>
					  </div>								
			  	</div>";
		}
	}
?>		  </div>
		  <div class="row mb-4">
			<div class="col-md-12 col-lg-12 col-sm-12">
			  	<h2 class="lg-title mb-2 text-center" style="font-size: 20px;font-weight: bold;">Favourites</h2>
				
		  	</div>	
			  		
			<div class="col-md-12 col-lg-12 col-sm-12 ">		
				<p id="" class="pull-right view_shopping" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;margin-left: 5px;">Shopping</p>&nbsp;		
				<p id="" class="pull-right view_all_product" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;"> View All</p>		
		  	</div>
			  
			  	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="plainmixture">
					<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
                        <h2 class="lg-title mb-2 " style="font-size: 15px;font-weight: bold;">
                        		ସାଧା ( Plain )
                    	</h2>                    
						<img src="assets/img/2.png" style="height: 143px;">            
                        <h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>90 <small> / 500 Gms.</small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star-half-o" aria-hidden="true" style="color:#FFC300"></i>
							
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Plain Mixture : 500 Gms : Rs. 90/-');">
                    </div>
                </div>
	
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="khatamithamixture">
					<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
                        <h2 class="lg-title mb-2 " style="font-size: 14px;font-weight: bold;">
                        	ଖଟା ମିଠା ( Khata Mitha )
                    	</h2>                    
						<img src="assets/img/Khata_Mitha.jpg" style="height: 143px;">            
                        <h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>90 <small> / 500 Gms.</small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star-half-o" aria-hidden="true" style="color:#FFC300"></i>
							
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Khata Mitha Mixture : 500 Gms : Rs. 90/-');">
                    </div>
                </div>
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="pheni">
                    <div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
						<h2 class="lg-title mb-2" style="font-size: 14px;font-weight: bold;">
							ଫେଣି ଗଜା ( Feni Sweet )
						</h2>                
						<img src="assets/img/Pheni.jpg" style="height: 143px;">            
						
						<h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>85 <small> / 500 Gms.</small><br>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>							
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Pheni Sweet : 500 Gms : Rs. 85/-');">
                    </div>
                </div>
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="chhatua">
			  		<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
						<h2 class="lg-title mb-2" style="font-size: 14px;font-weight: bold;">
							ମହାକାଳୀ ଛତୁଆ ( Roasted Flours Mix Of Mahakali From Bhabaneswar )
						</h2>  
						<img src="assets/img/Chhatua.jpg" style="height: 150px;">            
						
						<h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>60 <small> / 500 Gms.</small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star-half-o" aria-hidden="true" style="color:#FFC300"></i>
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Chhatua Mix : 500 Gms : Rs. 60/-');"> 
						  
                    </div>
			  </div>
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="biscuit">
			  		<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
						<h2 class="lg-title mb-2" style="font-size: 14px;font-weight: bold;">
							ସାଲେପୁର ବିକଳାନନ୍ଦ ରସଗୋଲା <br>(Salepur Bikalananda Kar's Brown Rasagola)
						</h2>  
						<img src="assets/img/rasagola.jpg" style="height: 150px;">            
						
						<h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>240 <small> / 1 Kg </small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Bikalananda Kars Rasagola : 1000 Gms : Rs. 240/-');"> <br>
						  
                    </div>
			  </div>
			  
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="biscuit">
			  		<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
						<h2 class="lg-title mb-2" style="font-size: 14px;font-weight: bold;">
							କାଜୁ ବାଦାମ <br>(Cashew from Berhampur)
						</h2>  
						<img src="assets/img/cashew.jpg" style="height: 150px;">            
						
						<h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>225 <small> / 250 Gms </small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Cashew From Berhampur : 250 Gms : Rs. 225/-');"> <br>
						  
                    </div>
			  </div>
			  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6" id="biscuit">
			  		<div class="pricing-block" style="padding: 10px;background-image: url(assets/img/white.png);">
						<h2 class="lg-title mb-2" style="font-size: 14px;font-weight: bold;">
							ବିରି ବଡ଼ି <br>(Badi from Berhampur)
						</h2>  
						<img src="assets/img/biribadi.jpg" style="height: 150px;">            
						
						<h3 class="price my-3 " style="font-size:25px">
                            <small>Rs.</small>90 <small> / 500 Gms </small><br>
						   <i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
						<i class="fa fa-star" aria-hidden="true" style="color:#FFC300"></i>
                        </h3>
						<input name="submit" type="button" class="btn btn-primary btn-lg" 
							   value="Add To Cart" onclick = "Add('Biri Badi From Berhampur : 500 Gms : Rs. 90/-');"> <br>
						  
                    </div>
			  </div>
		  </div>
	  </div>
	  
	  <div class="container" id="productList" style="display:none;transition: all 500ms ease-in; margin-top:40px">
		  <div class="row mb-4">
			  <div class="col-md-12 col-lg-12 col-sm-12">
			  	<h2 class="lg-title mb-2 text-center" style="font-size: 20px;font-weight: bold;">Products</h2>
		  	</div>
			 <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top:25px">		
			  	  <p  class="pull-right view_shopping" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;margin-left: 5px;">Shopping</p>&nbsp;		
				<p  class="pull-right view_category" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;margin-left: 5px;">View Categories</p>&nbsp;						  
		  	</div>
		  </div>

<?php
	$sql="SELECT * from tblPRODUCTS_Category where ACTIVE_status=1 order by 1";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		//$noOfDivs=$noOfDivs+1;
            echo "<div class='row mb-4' id='".$row['PRODUCTS_CTGRY_CODE']."_all'>
					<div class='col-md-12 col-lg-12 col-sm-12'>                    
                    	<h2 class='lg-title mb-2 ' style='font-size: 16px;font-weight: bold;'>"
                        	.$row['PRODUCTS_CTGRY_NAME']."</h2>
						<p >
							<b style='color:green'>Made in and flavors from :</b>
							<b style='color:#0774d2'> Bhubaneswar, Cuttack, Puri, Berhampur, Khordha, Bhadrak, Baleswar </b>
						</p>                    
        			</div>";
				
			$sql="SELECT * from tblPRODUCTS where PRODUCTS_CTGRY_ID=".$row['PRODUCTS_CTGRY_ID'];
			$result1 = $conn->query($sql);
    		if ($result1->num_rows > 0) {
				while($row1 = $result1->fetch_assoc()) {
					echo"<div class='col-md-3 col-lg-3 col-sm-6 col-xs-6' id='PRODUCT_".$row1['PRODUCT_ID']."'>
                    		<div class='pricing-block' style='padding: 10px;background-image: url(assets/img/white.png);'>
								<h2 class='lg-title mb-2 ' style='font-size: 14px;font-weight: bold;'>"
									.$row1['PRODUCT_NAME']."</h2>                    
								<img src='assets/img/".$row1['PRODUCT_IMAGES']."' style='height: 200px;'>            

							   <h3 class='price my-3 ' style='font-size:30px'>
									<small> Rs. </small>".$row1['PRICE']; 
					if($row['PRODUCTS_CTGRY_ID'] != 4)
					{ 
						echo " <small> / ".$row1['WEIGHT']." Gms. </small>"; 
					} 
					echo "<br>
									<small> ( Inclusive of all taxes )</small>
								</h3>
								<input name='submit' type='button' class='btn btn-primary btn-lg'
									   value='Add To Cart' onclick = 'AddToCart(".$row1['PRODUCT_ID'].");'>
									<br><br>
							</div>
                		</div>";
				}
			}
			else
			{
				echo 	"<div class='col-md-3 col-lg-3 col-sm-6 col-xs-6'>
							<br><br>
							<h4 style='text-align:center;'> Coming soon...! <br> Currently No products has been registerd under this category.</h4>			      		</div>";
			}
    	echo "</div>";		
	}
}
?>
	  </div>
    </section>

	<!-- Purchase
    ================================================== -->	
    <section class="section" id="purchase" style="padding:1px;display:none;margin-top:25px;">
        <div class="container">
            <div class="row justify-content-center mb-4">
			    <div class="col-md-12 col-lg-12 text-center">
                    <!-- Heading -->
                    <h3 class="lg-title mb-2" style="font-size: 18px;font-weight:bold;">
                        Shopping
                    </h3>
                    <!-- Subheading -->                       
                </div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<p id="" class="pull-right view_category" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;margin-left: 5px;">View Categories</p>		
				  <p id="" class="pull-right view_all_product" style="cursor:pointer;color:#FF5733;padding: 5px;border: 2px solid #FF5733;border-radius: 10px;">View All</p>		
				</div>
            </div>
			<div class="row justify-content-center mb-4" style="font-size:12px;color:black">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12">
                    <form class="contact__form" method="post" id="purchaseForm" action="" name="purchase_form">
                        <div class="row">
							<div class="col-lg-12 justify-content-center" style="font-size:14px;color:white;background-color:#0774d2;">
							<b>Products in your cart:</b>
							</div>
							<div class="col-lg-12 " style="font-size:14px;color:black; margin-top:10px">
								 <div class="form-group">
									<table id="productstable" style="width:100%;border:0px;" cellpadding="10">
									<tr style="background-color:#FF5733;color:white">
										<th style="width:70%;text-align:center">Product name and details</th>
										<th style="width:10%;text-align:right">Qty</th>
										<th style="width:10%;text-align:center">Del</th>
										<th style="width:10%;text-align:center">Add</th>
									 </tr>
									</table>
								</div>
							</div>
							<div class="col-lg-12" style="font-size:14px;color:black">
							    <div class="form-group">
									<table style="width:100%;border:2px;">
										<tr>
											<td style="width:60%;">Total Price</td>
											<td style="width:40%;text-align:right">
												<input type="text" name="amount" style="color:#0774d2;font-size:20px;text-align: right;" id="amount" class="form-control" value="0.00" required="required" readonly></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col-lg-12 justify-content-center" style="font-size:14px;color:white;background-color:#0774d2;">
									<b>Billing/Shiping address details :</b>
							</div>
							<div class="col-lg-12 justify-content-center" style="font-size:12px;font-weight:bold;">
								<b>Please Select Delivery Type :</b>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-3">
								<div class="form-group">                                    
									<input type="radio" id="deliveryTypeHome" name="deliveryType"  value="Delivery to your Door Step" checked onclick="disableDeliveryDate();"> Delivery to your Door Step
								</div>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-3">
								<div class="form-group">                                    
									<input type="radio" id="deliveryTypeStation" name="deliveryType"  value="Delivery Near BBSR Railway Station" onclick="enableDeliveryDate();"> Delivery Near BBSR Railway Station
								</div>                               
							</div>
							<div id="deliveryDateDiv" class="col-lg-12" style="font-size:14px;color:black;margin-top:10px;">
								<table>
									<tr>
										<td style="width:60%;">Delivery Date</td>
										<td style="width:40%;text-align:right">
                                    	<input type="date" name="deliveryDate" id="deliveryDate" class="form-control" onchange="checkValidDeliveryDate();">                                			
									</tr>
								</table>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="tel" pattern="[0-9]{10}" maxlength="10" name="pmobile" id="pmobile" class="form-control" placeholder="Mobile No *" required="required">
                                </div>
                            </div>
							<div class="col-lg-12" style="font-size:14px;color:black;margin-top:10px;">
								<div class="form-group">
                                    <input type="text" name="pname" id="pname" class="form-control" placeholder="Your Name *" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="pemail" id="pemail" class="form-control" placeholder="Email Id *" required="required">
                                </div>
                            </div>							 
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="baddress" id="baddress" cols="30" rows="4" class="form-control" placeholder="Billing Address *" required="required"></textarea>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="saddress" id="saddress" cols="30" rows="4" class="form-control" placeholder="Shipping Address *" required="required"></textarea>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="pin" pattern="[0-9]{6}" maxlength="6" name="ppin" id="ppin" class="form-control" placeholder="Shipping Pin No *" required="required" >
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text"  maxlength="12" name="rcode" id="rcode" class="form-control" placeholder="Referral Code"  onchange = "calculateReferralDiscount();">
                                </div>
                            </div>
							<div class="col-lg-12" style="font-size:14px;color:black;">
							    <div class="form-group">
								<table>
									<tr>
										<td style="width:60%;">Delivery Charges <a id="veiwdelivery" onclick="changeView();" style="color:orange;cursor:pointer"> (View Details)</a>
										<input type="text" name="totalweight" id="totalweight" class="form-control" style="color:#0774d2;font-size:20px;text-align: right;display:none;" value="0.00" required="required" readonly></td>
										<td style="width:40%;">
									<input type="text" name="deliverycharges" id="deliverycharges" class="form-control" style="color:#0774d2;font-size:20px;text-align: right;" value="0" required="required" readonly>
									</tr>
								</table>
							</div>
							</div>
							<div class="col-lg-12" id="deliveryDetails" style="display:none;font-size:14px;color:black">
								Delivery charges <!--(Including Taxes)  <img src="assets/img/Dtdc.jpg" style="height:100px">-->
								<ul><!--<li>Out of Odisha in 7 to 10 days : Upto 2.5 Kgs ( Rs.120/- ), then per 1Kg ( Rs.36/- )</li>-->
									<li>Inside Odisha  in 4 to 5 days : Upto 2.5 Kgs ( Rs.50/- ), then per 1Kg ( Rs.10/- )</li>					
								</ul>
                            </div>
							<div class="col-lg-12" style="font-size:14px;color:black;">
							    <div class="form-group">
								<table>
									<tr>
										<td style="width:60%;">Discount ( 5% ) Amount (in Rs.)</td>
										<td style="width:40%;text-align:right"><input type="text" name="discountamount" style="color:#0774d2;font-size:25px;text-align: right;font-weight:bold" id="discountamount" class="form-control" value="0" required="required" readonly>
									</tr>
									<tr>
										<td style="width:60%;">Total Bill Amount (in Rs.)</td>
										<td style="width:40%;text-align:right"><input type="text" name="totalamount" style="color:#0774d2;font-size:25px;text-align: right;font-weight:bold" id="totalamount" class="form-control" value="0.00" required="required" readonly>
									</tr>
								</table>
                            	</div>
							</div>
							<div class="col-lg-12 justify-content-center" style="font-size:14px;color:white;background-color:#0774d2;">
								<b>Please make the payment here  :</b>
							</div>
							<br>
							<div class="col-lg-12" style="font-size:14px;color:black;" style="margin-top:10px;">
								<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
									<ul style ="margin-left: -38px;"><li><b style="color:green;font-size:14px;">Now we are considering only prepaid orders</b></li>
										<li>Kindly Scan the below QR code Or use UPI address:<b style="color:#0774d2;"> mamatapatra1984@oksbi</b> to pay through UPI payment option provided by all banks and all payment wallets</li>
									</ul>
									<img src="assets/img/qrcode.jpg" style="hieght:275px;width:300px;">
								</div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" maxlength="20" name="pmessage" id="pmessage" class="form-control" placeholder="Please put payment UPI reference no. ***" required="required">
                                </div>
                            </div>
							<p style="font-size:12px;"> <b style="color:#0774d2;">** Pease check again details very carefully ...!</b> </p>
							<div class="col-lg-12">
                                <div class="submit text-center">
									<p class="pt-3" id="errorMessage" style="color:rgb(150, 0, 0);font-weight:bold;font-size:12px;">Please Add some products to cart to place order..!</p>
								</div>
                            </div>
							<!--<div class="col-lg-12">
								<div>
									<p id="purchaseMsg" class="pt-3"></p>
								</div>
							</div>	-->
							<div class="col-lg-12">
                                <div class="submit text-center">
									<input id="psubmit" name="psubmit" type="submit" class="btn btn-primary btn-lg pull-right" value="Place Order"><br>
                                 </div>
                            </div>
							<div style="display:none;">
                                <div class="form-group">
                                    <textarea name="tableproductsText" id="tableproductsText" cols="30" rows="6" required="required"></textarea>
                                </div>
                            </div>							
                        </div>
                    </form>
                </div>
                </div>
            </div>      
    </section>

<!--	<section class="section" id="purchaseMobile" style="padding:10px;display:none">
        <div class="container">
			<div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">
                    
                    <h3 class="lg-title mb-2" style="font-size: 22px">
                        ମୋବାଇଲ ଦ୍ୱାରା Shopping କରିବା ପଦ୍ଧତି <br><br>(Steps to shoping by mobile application)
                    </h3>
                    <p class="mb-5">
                       <b style="color:#0774d2;">Use our mobile application</b> <br>
						<img src="assets/img/PeddlePlus.png" style="hieght:175px;">
                    </p>
                </div>
            </div>
				<div class="col-md-12 col-lg-12 col-sm-12 ">
					<p style="font-size:16px;font-weight: bold;">Please check the Video tutorials to know, How to Buy though our mobile application</p>
				</div>
		</div>
				
		 <div class="container">
            <div class="row mb-4">
				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6" style="padding: 20px;">
					<iframe src="https://www.youtube.com/embed/Ro6Gk0J6WiI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height:200px;"></iframe></div>
			 	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6" style="padding: 20px;" >
					<iframe src="https://www.youtube.com/embed/Bfen2nK2z1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height:200px"></iframe></div>
			    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6" style="padding: 20px;">
					<b>Download mobile app from below link</b><br><br>
					<a href="https://play.google.com/store/apps/details?id=com.peddleplus"><img src="assets/img/google-play-store-aso.png" style="width:140px"></a><br><br>
					<a href="https://itunes.apple.com/in/app/peddle-plus/id1393849265?mt=8"><img src="assets/img/apple_store.png" style="width:140px"></a>
				</div>
			</div>
        </div>
    </section>-->
	<div class="col-lg-12 col-md-12 col-sm-12" style="position: fixed;left: 0;bottom: 0;width: 100%;background-color:#e4e9ef;color: white;text-align: center;height:50px;z-index:20000000;">
		<a id="view_shopping" class="pull-right view_shopping" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;" href="#purchase">Shopping</a>&nbsp;
				<a  id="view_category" class="pull-right view_category" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;display:none" href="#product">View Categories</a>&nbsp;
				<a id="view_all_product" class="pull-right view_all_product" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;" href="#productList"> View All</a>
	</div>
    <!-- FOOTER
    ================================================== -->
    <footer class=" bg-dark" style="margin-top: -10px;z-index:2000000;">
        <!--Content -->
        <div class="container">

            <div class="row justify-content-md-center" style="margin-bottom:40px;">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <p class="lead text-white-50" style=" margin-top: 10px; font-size: 14px;">
                    &copy; Modokaan | Design and Developed by Nigam Enterprisers </p>
                    <p>
                       <a style=" pointer-events: none;cursor: default;" >
                         <h3 style="color:white;"> Visitors </h3>
                            <img src="https://smallseotools.com/counterDisplay?code=52658adbf112cca0004619e82b86a4bb&style=0013&pad=9&type=page&initCount=1"  title="Visitor Hit Counter" Alt="Visitor Hit Counter" border="0">
                       </a>
                    </p>
                </div>
            </div>
        </div>
		<!--Email to customer purpose-->
		<div style="display:none">
			<table id="productstableforreport" style="width:100%;border:2px;">
				<tr>
					<th style="width:60%;">Product</th>
					<th style="width:20%;text-align:right">Qty</th>
				</tr>
			</table>
		</div>
                                
        <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="assets/js/validations.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/ajax-contact.js"></script>
	<!-- Theme JS -->
    <script src="assets/js/theme.js"></script>

	<script>
	$(".toggleSidebar").on('click', function(){
		document.getElementById("sidebar").classList.toggle('active');	
	});
	/*"#pmobile").on('keyup', function(){
		alert("testing");
		//mobile_number_check();
		
	});*/
	$("#pmobile").on('change', function(){
		//alert("working");
		mobile_number_check();
	});
	
	$("#ppin").on('change', function(){
		//alert("working");
		pin_code_check();
	});	
	function pin_code_check(){
		
		var pin_code = $("#ppin").val();
		
		if(pin_code.length==6)
		{
			var dataString = 'pincode=' + pin_code;
			$.ajax({
				type: "POST",
				url: "pin_code_detail.php",
				data: dataString,
            	success: function(response)
            	{
					console.log(response);
					var result = JSON.parse(response);
					
					if(parseInt(result['count']) <= 0)
					{
						$("#purchaseMsg").text("We are very sorry to say: \n\n Currenty we are not providing services to your address..!\n\n Kindly contact our Customer care to avail our services in your aread...!");
						$('#placedOrderModal').show();
						
						document.getElementById("ppin").value="";
						document.getElementById("ppin").focus();
						document.getElementById("deliverycharges").value="0";
						
						verifyPinResult=false;
					}
					else
					{
						verifyPinResult=true;
						calculatePrices(0,0);
					}					
				}
			});	
		}
	}
		
	$(".view_all_product, .product_all").on('click', function(){		
		$("#productList").show();
		$("#cat_mixture_all").show();
		$("#cat_sweet_all").show();
		$("#cat_other_all").show();
		$("#cat_books_all").show();
		$("#view_all_product").hide();
		$("#productCategory").hide();
		$("#purchase").hide();
		$("#purchaseMobile").hide();
		$("#view_category").show();
		$("#view_all_product").hide();
		$("#view_shopping").show();
		
	});
	$(".view_category").on('click', function(){		
		$("#productList").hide();
		$("#productCategory").show();
		$("#purchase").hide();
		$("#purchaseMobile").hide();
		$("#view_all_product").show();
		$("#view_category").hide();
		
	$("#view_shopping").show();	
	});
	$("#cat_mixture").on('click', function(){
		$("#productList").show();
		$("#cat_mixture_all").show();
		$("#cat_sweet_all").hide();
		$("#cat_other_all").hide();
		$("#cat_books_all").hide();
		$("#productCategory").hide();		
		$("#view_all_product").show();
		$("#view_category").show();
	$("#view_shopping").show();
		
	});	
	$("#cat_sweet").on('click', function(){
		$("#productList").show();
		$("#cat_mixture_all").hide();
		$("#cat_sweet_all").show();
		$("#cat_other_all").hide();
		$("#cat_books_all").hide();
		$("#productCategory").hide();		
		$("#view_all_product").show();
		$("#view_category").show();
		$("#view_shopping").show();
	});
	$("#cat_other").on('click', function(){
		$("#productList").show();
		$("#cat_mixture_all").hide();
		$("#cat_sweet_all").hide();
		$("#cat_other_all").show();
		$("#cat_books_all").hide();
		$("#productCategory").hide();		
		$("#view_all_product").show();
		$("#view_category").show();
		
		$("#view_shopping").show();
	});
	$("#cat_books").on('click', function(){
		$("#productList").show();
		$("#cat_mixture_all").hide();
		$("#cat_sweet_all").hide();
		$("#cat_other_all").hide();
		$("#cat_books_all").show();
		$("#productCategory").hide();		
		$("#view_all_product").show();
		$("#view_category").show();		
		$("#view_shopping").show();
	});
	$("#cart, .view_shopping, .placeordermenu").on('click', function(){		
		var cart_value=$("#cart").find("sup").html();
		if(cart_value!=0)
		{
			$("#purchase").show();
			$("#purchaseMobile").show();
			$("#productList").hide();		
			$("#productCategory").hide();
			$("#view_all_product").show();
			$("#view_category").show();
			$("#view_shopping").hide();		
			disableDeliveryDate();
		}
		else
		{
			$('#cartModal').show();
		}
	});
	function mobile_number_check(){
		var mobile_num = $("#pmobile").val();
		
		if(mobile_num.length==10)
		{
			//alert(mobile_num);
			$.ajax({
            	url: "web_user_detail.php",
            	success: function(response)
            	{
					console.log(response);
					var result = JSON.parse(response);
					$("#pname").val(result['name']);
					console.log(result['name']);
					//alert(response);
					//alert(response[1]);
					/*if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						echo $row['user_name']."<br>".$row['email_id']."<br>".$row['billing_address']."<br>".$row['pin_code'];
						echo "<br>";
						}
					}*/
				}
			});	
		}
	}
		
	$("#productCategorylist").on('change', function(){	

		var itemSelected = $('#productCategoryList').val();	

		var m = document.getElementById("mixture");
		var s = document.getElementById("sweets");
		var p = document.getElementById("papad");

		alert(itemSelected);
		 m.style.display = "none";

	  if (itemSelected == "Mixture") {
		m.style.display = "block";
	  }

	});

	$('#purchaseForm').on('submit', function(e) {
			//$("#purchaseMsg").text("Mail Sending, please wait ..");
		
			var varDeliveryDate = document.getElementById('deliveryDate');
			varDeliveryDate.disabled=false;
	
			var form = $(this); 
			var post_url = form.attr('action'); 
			var post_data = form.serialize(); //Serialized the form data for process.php
			
			$(".contact__form").css("pointer-events","none");
			
			console.log(post_data);
		
			$.ajax({
				type: 'POST',
				url: 'smtp/purchase_email.php', // Your form script
				data: post_data,
				success: function(msg) {
					$(".purchase_form").css("pointer-events","auto");
					if(msg == 'success')
					{
						$("#purchaseMsg").text("Order Has been placed successfully....!\n\nPlease check your email Inbox for order details.");
						
						//$("#purchaseMsg").text("Kindly check your email inbox for order details..!");
						//$("#purchaseMsg").css("color","green");
						//setTimeout(function(){ $('#purchaseMsg').fadeOut() }, 10000);						
						
						$('#placedOrderModal').show();
						
						$("#productList").hide();
						$("#productCategory").show();
						$("#purchase").hide();
						$("#purchaseMobile").hide();
						$("#view_all_product").show();
						$("#view_category").hide();
						$("#view_shopping").show();
						
					}
					else
					{
						$("#purchaseMsg").text("There is some technial issue during Order submit....!\n\n Please contact to your customer care.");
						$('#placedOrderModal').show();

						//$("#purchaseMsg").text("Message Sending fail");
						//$("#purchaseMsg").css("color","red");
						//setTimeout(function(){ $('#purchaseMsg').fadeOut() }, 10000);
											
					}
				}
			});
			
			$(".contact__form").css("pointer-events","auto");
		
			initializeAll();		
		
		});
		
	function initializeAll()
	{
		document.getElementById("totalweight").value = "0.00";
		document.getElementById("amount").value = "0.00";
		document.getElementById("deliverycharges").value = "0.00";
		document.getElementById("totalamount").value = "0.00";
		//document.getElementById("btnShowHideDlvrDtls").value = "View Details";
		
		var table = document.getElementById("productstable");
		
		while(table.rows.length>1) {
			table.deleteRow(1);
		}
		
		$("#cart").find("sup").html((0).toString());
		
		document.getElementById('deliveryTypeHome').checked = true;
	
	}


// Get the modal
var newsModal = document.getElementById('newsModal');
var cartModal = document.getElementById('cartModal');
var placedOrderModal = document.getElementById('placedOrderModal');
var deliveryDateDiv = document.getElementById('deliveryDate');
		
// Get the <span> element that closes the modal
var newsSpan = document.getElementsByClassName("closeModal")[0];
var cartSpan = document.getElementsByClassName("closeModal")[1];
var placedOrderSpan = document.getElementsByClassName("closeModal")[2];

newsModal.style.display = "none";
cartModal.style.display = "none";
placedOrderModal.style.display="none";
disableDeliveryDate();
		
// When the user clicks on <span> (x), close the modal
newsSpan.onclick = function() {
  newsModal.style.display = "none";
}

cartSpan.onclick = function() {
  cartModal.style.display = "none";
}


placedOrderSpan.onclick = function() {
	placedOrderModal.style.display = "none";
}


function enableDeliveryDate()
{
	var varDeliveryDate = document.getElementById('deliveryDate');

	document.getElementById('deliveryDate').focus();
	
	var validDate = new Date();
	
	validDate.setDate(validDate.getDate()+4);
	
	document.getElementById('deliveryDate').valueAsDate = validDate;
	
	varDeliveryDate.disabled=false;
	
	document.getElementById("saddress").value="Near Bhubaneswar Railway Station, Master Canteen, Bhubaneswar, Odisha";
	document.getElementById("saddress").readOnly=true;
	
	document.getElementById("ppin").value="751001";
	document.getElementById("ppin").readOnly=true;
	
	
	calculatePrices(0,0);
}
		
function disableDeliveryDate()
{
	var varDeliveryDate = document.getElementById('deliveryDate');
	
	var validDate = new Date();
	
	validDate.setDate(validDate.getDate()+5);
	
	document.getElementById('deliveryDate').valueAsDate = validDate;
	varDeliveryDate.disabled=true;
	
	document.getElementById("saddress").value="";
	document.getElementById("saddress").readOnly=false;
	
	document.getElementById("ppin").value="";
	document.getElementById("ppin").readOnly=false;
	calculatePrices(0,0);
	
}
		
function checkValidDeliveryDate()
{
	var DeliveryDate = new Date(document.getElementById('deliveryDate').value);
	var validDate = new Date();
	
	validDate.setDate(validDate.getDate() + 4);
	
	if(DeliveryDate < validDate)
	{
		
		$("#purchaseMsg").text("Please select delivery date value dated [ " + validDate.getDate() + "-" + getMonthName(validDate.getMonth()) + "-" + 		validDate.getFullYear() + " ] onwards .....!");
						
		$('#placedOrderModal').show();
		
		document.getElementById('deliveryDate').valueAsDate = validDate;
		document.getElementById('deliveryDate').focus();		
		
	}
	
}		
// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
  if (event.target == newsModal ) {
    newsModal.style.display = "none";
  }
}

window.onclick = function(event) {
 if (event.target == cartModal) {    
	cartModal.style.display = "none";
  }
	
}*/
		
function getMonthName(monthNo)
{
	var month = new Array();
	month[0] = "Jan";
	month[1] = "Feb";
	month[2] = "Mar";
	month[3] = "Apr";
	month[4] = "May";
	month[5] = "Jun";
	month[6] = "Jul";
	month[7] = "Aug";
	month[8] = "Sep";
	month[9] = "Oct";
	month[10] = "Nov";
	month[11] = "Dec";
	
	return month[monthNo];

}
</script>
	</body>
</html>