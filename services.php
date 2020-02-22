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
    width: 200px;
    height:70px;
    background: #FF5733 !important;
    color: white;
    text-align: center;
    margin: 0 auto;
    border-radius: 5%;
    padding-top: 5px;
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
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Global JS -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/ajax-contact.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.js"></script>
    
    <title>ମୋ ଦୋକାନ ( My Shop )</title>
</head>

<body id="page-top">
<div class="container-fluid fixed-top" style="background-color:#f8f9fa;height:30px;width:100%;font-size: 12px;color:black;">
				<p class="pull-right"><i class="fa fa-envelope" style="color:orange;margin-top:5px;"></i> <a href="mailto:support@modokaan.com">support@modokaan.com </a>&nbsp;&nbsp;<i class="fa fa-whatsapp" style="color:green"></i> <a href="tel:+91-7008766586">(+91)7008766586</a></p>
	</div>
	<div id="sidebar" style="background-color:#f8f9fa;">
		<i class="closeMenu toggleSidebar" style="color:#0774d2;cursor:pointer;">&times;</i>
		<ul style="padding: 0px !important;margin-top: 25px;color:black">
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/" >Products</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#home" >Home</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#about" >About</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#charity" >Charity</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#contact" >Contact</a></li>
		</ul>
	</div>
	<div id="toggleSidebar" class="toggle-btn  navbar-dark container-fluid fixed-top" style="margin-top:28px;background-color:#fff;height:45px;line-height:45px">
			 <i class="fa fa-bars faa-horizontal animated toggleSidebar" style="font-size: 22px;color: #ea740e;cursor:pointer"></i>
			 <a href="#page-top"><img src="./assets/img/finallogo.png" style="height: 50px;margin-top: -40px;"></a>
		</div>
	<div class="text-center container-fluid fixed-top" style="margin-top:22px"><p id="itemadded" style="color:orange;font-weight:bold;font-size:12px;"></p>
	</div>
	
    <!-- HERO
    ================================================== -->
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
            <br>
	       <div class="row justify-content-center mb-4">
                <div class="col-md-12 col-lg-12 text-center">
					<h1 class="text-center mb-4 display-4 " style="color: black;font-size: 25px;">
						Authentic Services By Odias
					</h1>
                </div>
            </div>
			
			<div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">                    
                    <b class="lg-title mb-2" style="font-size: 25px">
                        We Promote
                    </b>
                    <p class="mb-5">
                        We provide a platform to showcase your business profile. If you want to promote your business to reach world wide , please contact us.
                    </p>
                </div>
            </div>          
    
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <!-- SECTIONS
    ================================================== -->
    <!-- PAGES
    ================================================== -->

	<!-- Business Promotions 
    ================================================== -->
     <section class="section bg-light" id="serviceCategories" style="padding:10px">
        <div class="container">
		  <div class="row mb-4" style="margin-top:-50px;">
				<div class="col-md-12 col-lg-12 col-sm-12">
				  <h2 class="lg-title mb-2 text-center" style="font-size: 20px;font-weight: bold;">Service Categoriers</h2>
					<br>
				</div>
							 
<?php
	$sql="SELECT * from tblService_Category where status=1 order by 1";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo 
			"<div class='col-md-3 col-lg-3 col-sm-6 col-xs-6 mb-4' id='cat_".$row['SC_ID']."'>
				  <div class='category' style='background: url(assets/img/white.png);'>
					  <span >".$row['SRVC_CTGRY']."</span>
				  </div> 
			  </div>";
		}
	}
?>
		 </div>
	</div>
</section >
<?php
	$sql="SELECT * from tblService_Category where status=1 order by 1";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$noOfSections=$noOfSections+1;
 
echo "<section class='section bg-light' id='section_".$row['SC_ID']."' style='padding:10px;display:none;'>
 		<div class='container'>
			<div class='category' style='background: url(assets/img/white.png);'><span>".$row['SRVC_CTGRY']."</span></div>
            <div class='row justify-content-center'>";
	
	$sql="SELECT * from tblService_Providers where SC_ID=".$row['SC_ID'];
	$result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
		while($row1 = $result1->fetch_assoc()) {
		echo 
		"	
        <div class='col-lg-4 col-md-6 col-sm-12 mb-5'>
			<div class='portfolio-block'>
				<div class='portfolio-content'>
				<span class='work-cat'>".$row1['SP_NAME']."</span><br>
				<h4>".$row1['SERVICE_NAME']."</h4>
				<a style='cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;' data-toggle='collapse' data-target='#business_".$row1['SP_ID']."' > View More..</a>
                              <p id='business_".$row1['SP_ID']."' class='collapse' style='padding: 5px;text-align: justify;'> 
							  	<img src='assets/profile_photos/".$row1['PROFILE_PHOTO']."' alt='promotion' style='padding: 30px;height: 310px;width: 310px;'>
							  	<b>Mobile No:</b>".$row1['MOBILE_NO'].":<br>
								<b>Email:</b>".$row1['EMAIL_ID']."<br>								
								</p>  					
								
                 </div>   
			</div>
        </div>";
		}
	}
	else
	{
		echo 
		"	
		
        <div class='col-lg-4 col-md-6 col-sm-12 mb-5'>
			<br><br>
			<h4 style='text-align:center;'> Coming soon...! <br> Currently No one has been registerd under this section.</h4>			
        </div>";
	}
    
	echo " </div>
        </div>
	</section>";	
	
	}
}

echo"<script type='text/javascript'>";
	
for ($x = 1; $x <= $noOfSections; $x++) {
    echo 
	" $('#cat_".$x."').on('click', function(){ \r\n
		$('#section_".$x."').show();
		
		$('#serviceCategories').hide();
		$('#register').hide();
		$('#view_category').show();		
		$('#view_register').show(); \r\n\r\n";
	
	for ($y = 1; $y <= $noOfSections; $y++) {
    	if($y!=$x)
		{
			echo "$('#section_".$y."').hide();\r\n";
		}
	}
	echo "\r\n\r\n}); \r\n\r\n";
} 


echo"</script>";
	
?>
	<!--
<img src='data:image/jpeg;base64,'".base64_encode($row1['PROFILE_PHOTO'])."'/>'								

<section class="section bg-light" id="others" style="padding:10px;display:none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>AABN IMPORT & EXPORT ENTERPRISES </h4>
                            <span class="work-cat">Mrs. Nilima Patro</span><br>
                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#business_1" > View More..</a>

                              <p id="business_1" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/nilimapatro.png" alt="promotion" style="padding: 30px;height: 310px;width: 310px;">
                                <b>Mobile No:</b> 9560100558<br>
                                <b>Email:</b> silpipatro@gmail.com<br>
                                <b>Details:</b> Business Development Advisor for all Kind of Online dealing with consultancy                                
                              </p>  
                        </div>   

                    </div>
                </div>                                 
            </div>
        </div>
    </section>-->
    <!-- Contact
    ================================================== -->
    <section class="section" id="register" style="padding:10px;marging-top:-150px;display:none">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h3 class="lg-title mb-2" style="font-size: 32px">
                        Register
                    </h3>

                    <!-- Subheading -->
                    <p class="mb-5">
                        Please feel free to rigister yourself. To help Odias accross world with your provided services.
                    </p>

                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12 center">
                    <form class="register_form" method="post" id="registerForm" action="" name="register_form">
                    		<div class="col-lg-12">
                                <div class="form-group">
								<select id="category" class="form-control" required="required"> 
									<option value="">Select Category</option>
									<?php
										$sql="SELECT * from tblService_Category where status=1 order by 1";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												echo"<option value='".$row['SC_ID']."'>".$row['SRVC_CTGRY']."</option>";
											}
										}
 										?>
								</select>
								</div>
                             </div>
  
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name*" required="required">
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="servicename" id="servicename" class="form-control" placeholder="Your Service / Company / Agency Name*" required="required">            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Id*" required="required">
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="tel" pattern="[0-9]{10}" name="mobile" id="mobile" class="form-control" placeholder="Mobile *" required="required">
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
									<textarea name="skills" id="skills" cols="30" rows="4" class="form-control" placeholder="Skills in details*" required="required"></textarea>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
									<textarea name="experiences" id="experiences" cols="30" rows="4" class="form-control" placeholder="Experience details ( Freshers leave blank )" ></textarea>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
									<textarea name="coveringarea" id="coverginarea" cols="30" rows="2" class="form-control" placeholder="Covering Area *" required="required"></textarea>
                                </div>
                            </div>
                        <div class="col-lg-12">
							<div class="form-group">
								<input type="text" name="address" id="address" class="form-control" placeholder="Address *" required="required">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Your Message for your customer *" required="required"></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
							Upload Photo
							  <input type="file" name="pic" accept="image/*" required="required">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="submit text-center">
								<input name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit Now"><br>

							</div>
						</div>
						<div class="col-lg-12">
							<div>
								<p id="registerMsg" class="pt-3"></p>
							</div>
						</div>	
					</form>
				</div>
                
            </div>      
		</div>
    </section>

	<div class="col-lg-12 col-md-12 col-sm-12" style="position: fixed;left: 0;bottom: 0;width: 100%;background-color:#e4e9ef;color: white;text-align: center;height:50px;z-index:20000000;">
		<a id="view_register" class="pull-right view_shopping" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;" href="#register">Register</a>&nbsp;
				<a  id="view_category" class="pull-right view_category" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;display:none" href="#serviceCategories">View Categories</a>&nbsp;
				<!--<a id="view_all_product" class="pull-right view_all_product" style="cursor:pointer;color:white;background-color:#0774d2;padding:5px;border: 1px solid #0774d2;border-radius: 5px;margin-left: 5px;margin-top:5px;" href="#productList"> View All</a>-->
	</div>

    <!-- FOOTER
    ================================================== -->
    <footer class="pull-down bg-dark" style="margin-top: -10px;margin-bottom:40px;">
        <!--Content -->
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <p class="lead text-white-50" style=" margin-top: 10px; font-size: 14px;">
                    &copy; Modokaan | Design and Developed by Nigam Enterprisers </p>
                    <p>
                       <a style=" pointer-events: none;cursor: default;" >
                         <h3 style="color:white"> Visitors </h3>
                            <img src="https://smallseotools.com/counterDisplay?code=52658adbf112cca0004619e82b86a4bb&style=0013&pad=9&type=page&initCount=1"  title="Visitor Hit Counter" Alt="Visitor Hit Counter" border="0">
                       </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    
    <script type="text/javascript">
	$(".toggleSidebar").on('click', function(){
		document.getElementById("sidebar").classList.toggle('active');	
	});
		
    $('#registerForm').on('submit', function(e) {
		$("#registerMsg").text("Registering yoru data, please wait ..");
    	var form = $(this); 
    	var post_url = form.attr('action'); 
    	var post_data = form.serialize(); //Serialized the form data for process.php
    	
		$(".register_form").css("pointer-events","none");
    	$.ajax({
        type: 'POST',
        url: 'register_service_provider.php', // Your form script
		data: post_data,
        success: function(msg) {
           $(".register_form").css("pointer-events","auto");
			if(msg == 'success')
			{
				$("#registerMsg").text("Registered successfully. Please check your email Inbox...!");
				$("#registerMsg").css("color","green");
				setTimeout(function(){ $('#registerMsg').fadeOut() }, 5000);
			}
			else
			{
				$("#registerMsg").text("Message Sending fail...!");
				$("#registerMsg").css("color","red");
				setTimeout(function(){ $('#registerMsg').fadeOut() }, 5000);
			}
        }
    });
});

$(".view_category").on('click', function(){		

		$("#serviceCategories").show();
		$("#register").hide();
		$("#view_category").hide();		
		$("#view_register").show();

	  for (var i = 0; i < 100; i++) {
		  var y = document.getElementById("section_"+i.toString());
		  
		  if(y != undefined) 
		  {
			  y.style.display = "none";
		  }
	  }

		
	});
		
	$("#view_register").on('click', function(){
		$("#serviceCategories").hide();
		$("#register").show();
		
		$("#view_category").show();		
		$("#view_register").hide();
		
		for (var i = 0; i < 100; i++) {
		  var y = document.getElementById("section_"+i.toString());
		  
		  if(y != undefined) 
		  {
			  y.style.display = "none";
		  }
	  }
		
	});
	
 </script>	
	</body>

</html>