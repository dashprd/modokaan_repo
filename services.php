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
                    <h2 class="lg-title mb-2">
                        ମୋ ଦୋକାନ
                    </h2>

                    <!-- Subheading -->
                    <b class="mb-5 ;" style="color:orange;font-weight:bold;font-size:25px">
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
     <section class="section bg-light" id="service" style="padding:10px">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">                    
                    <h2 class="lg-title mb-2" style="font-size: 40px">
                        We Promote
                    </h2>
                    <p class="mb-5">
                        We provide a platform to showcase your business profile. If you want to promote your business to reach world wide , please contact us.
                    </p>
                </div>
            </div>          

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
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Insurance Advisory & Investment Consultant </h4>
                            <span class="work-cat">Sarbeswar Patro</span><br>
                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#business_2" > View More..</a>
                              <p id="business_2" class="collapse" style="padding: 5px;text-align: justify;"> 
								<img src="assets/img/sarbeswar.jpg" alt="promotion" style="padding: 30px;height: 310px;width: 310px;">
                                <b>Mobile No:</b> 9818941260<br>
                                <b>Email:</b>sarbe_k@yahoo.com, sarbeswar.patra@gmail.com<br>
                                <b>Details:</b> It has been almost 10 year's of experience with clear vision of providing financial planning & helps to people for their wealth maximisation through various investment tools like Mutual Funds, Life & General Insurance & Other Income products services across India.                         
                              </p>  
                        </div>   

                    </div>
                </div>                                 
            </div>
            
        </div>
    </section>
    <!-- Contact
    ================================================== -->
    <section class="section" id="contact" style="padding:10px;display:none">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h3 class="lg-title mb-2" style="font-size: 40px">
                        Question or Feedback
                    </h3>

                    <!-- Subheading -->
                    <p class="mb-5">
                        Please feel free to ask us your question Or share your feedback to me. I will try my best to help you asap.
                    </p>

                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                    <form class="contact__form" method="post" id="contactForm" action="" name="contact_form">
                                                  
                        <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">                                    
                                        <input type="radio" name="contactType"  value="Question" checked> Question
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">                                    
                                        <input type="radio" name="contactType"  value="FeedBack"> Feedback
                                </div>                               
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name*" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email " required="required">
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="tel" pattern="[0-9]{10}" name="mobile" id="mobile" class="form-control" placeholder="Mobile *" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Address *" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="6" class="form-control" placeholder="Enter your Message" required="required"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="submit text-center">
                                    <input name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit Now"><br>
                                    
                                </div>
                            </div>
							<div class="col-lg-12">
								<div>
									<p id="mailMsg" class="pt-3"></p>
								</div>
							</div>	
                        </div>
                    </form>
                </div>
                </div>
            </div>      
    </section>


    <!-- FOOTER
    ================================================== -->
    <footer class=" bg-dark" style="margin-top: -10px;">
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
    <!-- Global JS -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/ajax-contact.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.js"></script>
    
    <script type="text/javascript">
	$(".toggleSidebar").on('click', function(){
		document.getElementById("sidebar").classList.toggle('active');	
	});
    $('#contactForm').on('submit', function(e) {
		$("#mailMsg").text("Mail Sending, please wait ..");
    //e.preventDefault(); //Prevents default submit
		//alert("welcome to Modokaan, we are working on it");
    var form = $(this); 
    var post_url = form.attr('action'); 
    var post_data = form.serialize(); //Serialized the form data for process.php
    //$('#loader', form).html('<img src="../img/loader.gif" /> Please Wait...');
		//alert(post_data);q
	$(".contact__form").css("pointer-events","none");
    $.ajax({
        type: 'POST',
        url: 'smtp/test_email.php', // Your form script
		//url: 'PHPMailer_5.2.0/Sendingmail.php', // Your form script
        data: post_data,
        success: function(msg) {
           $(".contact__form").css("pointer-events","auto");
			if(msg == 'success')
			{
				$("#mailMsg").text("Message sent. Please check your email Inbox...!");
				$("#mailMsg").css("color","green");
				setTimeout(function(){ $('#mailMsg').fadeOut() }, 5000);
			}
			else
			{
				$("#mailMsg").text("Message Sending fail...!");
				$("#mailMsg").css("color","red");
				setTimeout(function(){ $('#mailMsg').fadeOut() }, 5000);
			}
            //alert(msg);
        }
    });
});
$("#productlist").on('change', function(){	
	var itemSelected = $('#productlist').val();	
	var select = document.getElementById("qty");
	document.getElementById("qty").innerHTML = "";
	var items=[];
	if(itemSelected !="" && (itemSelected == "Spicy_Mixture" || itemSelected == "Plain_Mixture" || itemSelected == "Khata_Mitha_Mixture"))
	{
		items = ["1 Kg", "2 Kgs"];
	}
	else if( itemSelected !="")
	{
		items = ["2 Kgs"];
	}
	if(items.length!=0)
	{
	
		for (var item of items)
		{
			var option = document.createElement("option");		
			option.text = item;
			option.value = item;
			select.appendChild(option);
		}
	}	
});
    	</script>
	
	</body>

</html>