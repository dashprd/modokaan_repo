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
	<link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/services.php" >Promotions</a></li>
			<li><a class="nav-link js-scroll-trigger" href="#home1" >Home</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="#about" >About</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="#charity" >Charity</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="#contact" >Contact</a></li>
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
						Authentic Odisha Foods By Odias
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

    <!-- FEATURES
    ================================================== -->
    <section class="section" id="home1" style="padding:10px">
        <div class="container">
            <div class="row justify-content-center mb-4">
              	<div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-6 col-xs-6 text-center">
					<img src="assets/img/GSTIN_logo.png" style="height:80px">
				</div>
				<div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-6 col-xs-6 text-center">
					<img src="assets/img/FSSAI_logo.png" style="height:80px">
				</div>
            </div>
            <!-- / .row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Odisha, the state, which known for its rich culture, art, temples, natural minerals, food etc. Being a Odia, we love our food the most, so who all are staying out of Odisha, definitely missing their favourite food items. Some food items are only availble in Odisha, which known for its taste and authenticity.</p>
                    <p>Here we provide a platform, where you can order your favourite food items from odisha, which will deliver at your door step with a minimal delivery charges. We tied up with one of India's top online ordering app "PeddelPlus"( created by an Odia) and soon it will available on Amazon, Flipkart, Paytm Mall.<br>
                    You can download the mobile app to order your food item or you can do that from any browser. We are providing UPI , Wallet payment options with usual online payment options.
                        
                    </p>
                    <p>Here also we are collabrating with many small business people to help them to grow with us, also proving the platform
                    to other business team to do their promotions in our website. We are here to serve you as our own family, we hope you will trust us and we promise you, we will try our level best to fullfill your needs.</p>

                    
                </div>
            </div>
            <div class="row justy-content-center">
                <div class=" col-lg-12 col-md-12 col-sm-12 text-center mb-5">
                    <h3>Why to Choose Us</h3>
                </div> 

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-clock"></i>
                        </div>
                        <h4 class="mb-3">Delivery On Time </h4>
                        <p>We collabrated with top courier service of India.So you can be assure that you will get your order on time</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h4 class="mb-3">Quality</h4>
                        <p>We collabrated with top Manufacturer of Dry Snacks Items of Puri,Bhubaneswar,Cuttack, Berhampur and also having discussion with other products verndors from all over Odisha.So we dont compromise on Quality, that we can assure you.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <h4 class="mb-3">Secure Payment</h4>
                        <p>We provide all kind of wallet, UPI, Online facility for payment on which you can trust and easy to do.</p>
                    </div>
                </div>

                
            </div>
        </div>
        <!-- / .container -->
    </section>
    
    <!-- ABOUT
    ================================================== -->
    <section class="section bg-light" id="about" style="padding:10px">
        <div class="container">
            <div class="row text-center">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 10px">
                    <h2 class="display-5">About Us</h2>
                </div> -->
                
            </div>
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-content-2">
                        <h2 class="display-5" style="font-size: 30px">
                            Our Birth Story
                        </h2>
                        <p>The journey started with three Odia people having almost a daily discussion, how to serve to our beloved Odisha people by availing our Odisha delicious foods to the door step of our Odisha people staying away from Odisha.  And gradually we realized in a broader way, we should think about how to serve to every person of our Odisha staying all part of the world.<br>Then we thought of online food ordering service, which could help us to solve our issue. After that <b>“MO DOKAAN” ( ମୋ ଦୋକାନ  )</b> took birth. </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-img">
                        <img src="assets/img/about_1.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content-2">
                        <p>So we are starting our journey with minimal provided services which is the most favourite and needy requirement of our every Odisha person and family, which will gradually cover all kind of possible services for our Odisha people staying all over the world. And the journey will continue forever more and more to serve more and more to our Beloved Odisha people. We have decided to donate 5 % profit to charity. And to build this organization as a trust gradually.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content-2 ">
                        <h2 class="display-5" style="font-size: 30px">
                            Vision
                        </h2>
                        <p>Inspired by the philosophy of <b>"Vasudhaiva Kutumbakam"</b></p>
                        <p>
                            <i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
                            To provide a very user friendly, trust worthy, faithful and transparent service provider platform between all kind and level of business people ( starting from micro, small scale level  to medium level, even from remote village areas ) available in side our Odisha and the people staying away from Odisha at any part of the world.
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
                        </p>
                        <p>
                            <i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
                            To provide a platform between the people who are interested passionately to guide as a helping hand by sharing their knowledge & experiences with the young people of our Odisha, who doesn’t have any idea or confidence for, how to proceed further in their life.
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
                        </p>
                        <p>
                            <i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
                            The aim is to make people reach to each other for mutual growth to achieve a helpful, healthy & lovable society across. Which we all have learnt from our childhood days in our culture and traditions.
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
                        </p>
                       
                    </div>
                </div>                
            </div>
        </div>
        <div class="container">
            <div class="row mt-5  ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content-2 ">
                        <h2 class="display-5" style="font-size: 30px">
                            Our Team
                        </h2>                      
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                       

                        <div class="portfolio-content">
                            <h4>Santosh Kumar Sahoo</h4>
                            <span class="work-cat">Administrative Head</span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_1" > View More..</a>


                              <p id="profile_1" class="collapse" style="padding: 5px;text-align: justify;">
								  <img src="assets/img/santosh.png" alt="profile">
                                <b>Qualification:</b> Masters in Science in Geology(Utkal University, Odisha)<br>   
                                <b>Experiences:</b> 20 years (Own business)<br>

                                So much caring and extremely hard worker. He can bear any level of physical pain and focus on his works with so much dedication. He is so conscious always, to serve the people with honesty, very good quality and delivery at committed time. <br><b>Taking care of all back office and Administrative activities.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        

                        <div class="portfolio-content">
                            <h4>Sabita Sahoo</h4>
                            <span class="work-cat">Creative Head<br>& Associate Administrative </span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_2" > View More..</a>


                              <p id="profile_2" class="collapse" style="padding: 5px;text-align: justify;">
								  <img src="assets/img/sabita.png" alt="profile" >
                                <b>Qualification:</b> Graduate in Arts and Crafts(Utkal University, Odisha)<br>   
                                <b>Experiences:</b> 16 years (Own business)<br>

                                Very strong minded, caring and helping in nature. She believes so much strongly to stay, live and move ahead in life as a team always and always put her best efforts dedicatedly to have that around. She is a creative artist and arts graduate. <br><b>Taking care of all the creative and artistic activities, with a helping hand Administrative activities.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        

                        <div class="portfolio-content">
                            <h4>Prativa Sahoo</h4>
                            <span class="work-cat">Sr. Accountant </span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_3" > View More..</a>


                              <p id="profile_3" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/no_image.png" alt="profile" >
                                <b>Qualification:</b> BSc And Advance Dimploma in Computers<br>   
                                <b>Experiences:</b> 2 years Experiene in Software Development<br>

                                She is very talented, matured, so skilled for her profile. Very straigh forward about her opinion<br><b>She is taking care of our Administrative and Accounts Activities for the whole Organization</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
                <!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Jayashree Jena</h4>
                            <span class="work-cat">Admin And Sr. Social Media Representative</span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_4" > View More..</a>

                              <p id="profile_4" class="collapse" style="padding: 5px;text-align: justify;">
								  <img src="assets/img/no_image.png" alt="profile" ><br>
                                <b>Qualification:</b> Graduate in Arts(Utkal University, Odisha) And PGDCA <br>   
								<b>Technical Qualification:</b>PGDCA And Trained in SAP SD <br>   
                                <b>Experiences:</b> 2 years as Admin Executive<br>
<b>Taking care of Admin works and also working as Senior Marketing Executive</b> 
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Sangram Kesari Mohanty</h4>
                            <span class="work-cat">Operation Manager <br> <b>For Bhubaneswar Circle</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_5" > View More..</a>


                              <p id="profile_5" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/sangrammohanty.png" alt="profile" >
                                <b>Qualification:</b> MBA in Finance, Inter Cost<br>   
                                <b>Experiences:</b> 8 years Experience of Cunstruction Business, Working as Consultant with NGO<br>

                                He is so Spritual Perrson. Love Music And So Hard Worker.<br><b>He is taking care completely the Business for our Bhubaneswar Circle.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        

                        <div class="portfolio-content">
                            <h4>Sunil Kumar Patro</h4>
                            <span class="work-cat">Operation Manager <br> <b>For Berhumpur Circle</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_6" > View More..</a>


                              <p id="profile_6" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/sunilpatro.jpg" alt="profile" >
                                <b>Qualification:</b> MBA in Marketing And BA<br>   
                                <b>Experiences:</b> 15 years of Experience in variousl job and business profiles<br>

                                Very Dynamic Personality, having strong skills to do a Business and so good idea about Odisha Market Products.<br><b>He is taking care completely the Business for our Berhampur Circle.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>-->
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Susanta Paikaray</h4>
                            <span class="work-cat">Department Head Operations<br><b>( For Whole Odisha )</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_5" > View More..</a>


                              <p id="profile_5" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/susantapaikaray.jpg" alt="profile" >
                                <b>Qualification:</b> MBA and GNIIT <br>   
                                <b>Experiences:</b> 15 years of Experience in variousl jobs<br>

                                Very Humble Personality, Matured and very cool minded. Way of communication is his best skills. Having strong skills of management.<br><b>He is taking care of completely the operation department of whole Odisha.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Sangram Biswal</h4>
							<span class="work-cat">Operation Manager <br> <b>For Puri Circle</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_6" > View More..</a>


                              <p id="profile_6" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/sangrambiswal.jpg" alt="profile" >
                                <b>Qualification:</b> Bachelor in Arts<br>   
                                <b>Experiences:</b> Experience of Marketing Job<br>

                                Very Cool Minded, Smart, Dynamic And Curious Personality. <br><b>He is taking care completely the Business for our Puri Circle</b> 
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>	
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Sridhara Behera</h4>
                            <span class="work-cat">Operation Manager <br> <b>For Berhumpur Circle</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_7" > View More..</a>


                              <p id="profile_7" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/no_image.png" alt="profile" >
                                <b>Qualification:</b> Diploma in Fire and Safety and fundamenta knowledge of Computers<br>   
                                <b>Experiences:</b> 3 years of Experience in variousl job and business profiles<br>

                                Very Dynamic Personality, having strong skills to do a Business and so good idea about Odisha Market Products.<br><b>He is taking care completely the Business for our Berhampur Circle.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				<!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Balaram Sahoo</h4>
                            <span class="work-cat">Operation Manager <br> <b>For Bhubaneswar Circle</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_8" > View More..</a>


                              <p id="profile_8" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/balaramsahoo.jpg" alt="profile" >
                                <b>Qualification:</b>BA <br>   
                                <b>Experiences:</b> Above 10 years of Experience in various jobs<br>
                  He is so hard worker, honest and genuine person.<br><b>He is taking care completely the Business for our Bhubaneswar Circle.</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>-->
                <!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        

                        <div class="portfolio-content">
                            <h4>Srabani Mishra</h4>
                            <span class="work-cat">Team Lead for Digital and Social Media Marketing</span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_9" > View More..</a>


                              <p id="profile_9" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/no_image.png" alt="profile" >
                                <b>Qualification:</b> BTech ( Computure Science )<br>   
                                <b>Experiences:</b> 2 years (Digital Marketing Executive)<br>

                                She is extermely sharp, so skilled for her profile. Very straigh forward about her opinior<br><b>She is taking care of to spread the impotance and value of Mo Dokaan accross our country and also guide the Digital marketing team of Mo Dokanan as a Team Lead</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>-->
				
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Manmohan Ojha</h4>
                            <span class="work-cat">Social Media Representative<br> <b>For Delhi</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_8" > View More..</a>


                              <p id="profile_8" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/manmohanojha.jpg" alt="profile" >
                                <b>Qualification:</b> MBA, BCom And PGDCA<br>   
                                <b>Experiences:</b> Prepairing for Goverment Job<br>

                                He is so cool minded and matured person. Very much skilled <br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our country</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				
                <!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                      
                        <div class="portfolio-content">
                            <h4>Sushree Monalisha</h4>
                            <span class="work-cat">Social Media Marketing Executive <br> <b>For Mumbai</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_11" > View More..</a>


                              <p id="profile_9" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/no_image.png" alt="profile" >
                                <b>Qualification:</b> Pursuing Graduation <br>   
                                <b>Experiences:</b> Very much interested to do some part time business <br>

                                She is young,dynamic,bold and sharp.<br><b>She is taking care of to spread the impotance and value of Mo Dokaan accross our country</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>-->
                <!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Yuvaraaj Dora</h4>
                            <span class="work-cat">Social Media Representative<br> <b>For Bangalore</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_10" > View More..</a>


                              <p id="profile_10" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/no_image.png" alt="profile" >
                                <b>Qualification:</b> Pursuing Bsc<br>   
                                <b>Experiences:</b> Very much interested to do some part time business <br>

                                He is young and dynamic. Very energetic<br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our country</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>-->
				
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Prashant Sahoo</h4>
                            <span class="work-cat">Social Media Representative <br> <b>For Odisha</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_9" > View More..</a>


                              <p id="profile_9" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/prasant.png" alt="profile" >
                                <b>Qualification:</b>Completed BA<br>   
                                <b>Experiences:</b>Have worked in various jobs for 2 years. And very much interested to do some part time business <br>

                                He is young and dynamic. Very energetic<br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our Odisha</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Bishnu Prasad Pradhan</h4>
                            <span class="work-cat">Social Media Representative <br> <b>For West Odisha</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_10" > View More..</a>


                              <p id="profile_10" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/bishnupradhan.jpg" alt="profile" >
                                <b>Qualification:</b>Completed BA and good knowledge of computers<br>   
                                <b>Experiences:</b>Have worked in various jobs for above 14 years. And very much interested to do some part time business <br>

                                He is so talented and have very good analytical skills. Very cool minded and caml person.<br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our West Odisha</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				<!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Ashok Kumar Rout</h4>
                            <span class="work-cat">Social Media Representative <br> <b>For West Odisha</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_11" > View More..</a>


                              <p id="profile_11" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/ashokrout.jpg" alt="profile" >
                                <b>Qualification:</b>Completed 12th and good knowledge of computers<br>   
                                <b>Experiences:</b>Have worked in various jobs for above 6 years. And very much interested to do some part time business <br>

                                <br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our West Odisha</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        
                        <div class="portfolio-content">
                            <h4>Sunil Kumar Sabat</h4>
                            <span class="work-cat">Social Media Representative <br> <b>For South Odisha</b></span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_12" > View More..</a>


                              <p id="profile_12" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/sunilsabat.jpg" alt="profile" >
                                <b>Qualification:</b>Completed BA<br>   
                                <b>Experiences:</b>Have worked in various jobs for above 12 years. And very much interested to do some part time business <br>

                                He is very straing forward and honest person. Very cool minded and caml person.<br><b>He is taking care of to spread the impotance and value of Mo Dokaan accross our South Odisha</b>
                              </p>              
                            
                        </div>
                        
                    </div>                    
                </div>

                <!--<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <img src="assets/img/no_image.png" alt="profile" >

                        <div class="portfolio-content">
                            <h4>Priya Ranjan Dash</h4>
                            <span class="work-cat">IT & Creative Department Head</span><br>

                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_7" > View More..</a>


                              <p id="profile_7" class="collapse" style="padding: 5px;text-align: justify;">
                                <b>Qualification:</b> BTech in Computer Science & Engg.(VSSUT, Burla, Odisha)<br>   
                                <b>Experiences:</b> 4+ years (IT Industry)<br>

                                Extremely matured, so balanced, so much multi-talented personality. He can dance well, sing well, write well, artistic drawings well. In one word he is the most creative person in our team. Modokaan name is one of the creative result of is creative intelligence. Taking care of everything to maintain our website. 
                              </p>              
                            
                        </div>
                        
                    </div>  
                </div>-->                  

            </div>
            
        </div>
        <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content-2 " style="line-height: 20px;">
                        <h2 class="display-5" style="font-size: 30px:">
                            Advisors
                        </h2>
					    <p>Girija Shankar Das ( Guide and philosopher for our all kind of provided services ) </p>
						<p>Arun Kumar Sahu ( Founder Member and Our Financial Management and Legal advisor ) </p>
						<p>Priya Ranjan Dash ( Founder Member and Our Digital Advisor ) </p>
						<p>Ramakrishna Biswal ( Strategy Maker and Our Consultant Advisor ) </p>
					</div>
                </div>
				<div id="charity" class="col-lg-12 col-md-12 col-sm-12">
					<div class="about-content-3">
							<h2 class="display-5" style="font-size: 30px:">
								Charity
							</h2>
						  <p>We will donate our <b>5%</b> of our Services Profits to them.<br>
							For more details about Sparsh please check<a href="http://www.sparshsociety.in"> (www.sparshsociety.in)</a></p>

					</div>
				</div>
            </div>
        </div>
    </section>

    <!-- Charity
    ================================================== -->
    
	<!--<section class="section bg-light" id="charity" style="padding:10px">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">                    
                    <h2 class="lg-title mb-2" style="font-size: 20px">
                        We are commited to support <br><br> Sparsh Society for Rural Development ( NGO )
                    </h2>
                    <p class="mb-5">
                        We will donate our <b>5%</b> of our Services Profits to them.<br>
						For more details about Sparsh please check<a href="http://www.sparshsociety.in"> (www.sparshsociety.in)</a>
                    </p>
                </div>
            </div>          
			<div class="row justify-content-center" style="margin-top:-50px;">
             <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
				 
			</div>
                 <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>President</h4>
                            <span class="work-cat">Mr. Kamala Kanta Parhi</span><br>
                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_1" > View More..</a>

                              <p id="profile_1" class="collapse" style="padding: 5px;text-align: justify;">
								<img src="assets/img/KamalaParhi.jpg" alt="promotion" style="padding: 30px;height: 310px;width: 310px;"><br>
                                <b>Mobile No:</b>(+91) 9210433601<br>
                                <b>Email:</b> kamal.parhi@sparshsociety.in<br>                                
                              </p>  
                        </div>   

                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="portfolio-block">
                        <div class="portfolio-content">
                            <h4>Vice President</h4>
                            <span class="work-cat">Mr. Bhagateswar Patro</span><br>
                            <a style="cursor: pointer;text-align: right;color: orange;font-weight: bold;border: 1px solid orange; padding: 5px;" data-toggle="collapse" data-target="#profile_2" > View More..</a>
                              <p id="profile_2" class="collapse" style="padding: 5px;text-align: justify;"> 
								<img src="assets/img/bhagat.png" alt="promotion" style="padding: 30px;height: 310px;width: 310px;"><br>
                                <b>Mobile No:</b>(+91)9560100558 <br>
                                <b>Email:</b>bhagatpatro@sparshsociety.in<br>                                
                              </p>  
                        </div>   

                    </div>
                </div>                                 
			</div>
            
        </div>
    </section>-->
   
    <section class="section bg-dark" id="testimonial" style="padding:1px">
            <div class="carousel slide" id="review-slider" data-ride="carousel" style="height:375px;">
               <ol class="carousel-indicators">
                <li data-target="#review-slider" data-slide-to="0" class="active"></li>
                <li data-target="#review-slider" data-slide-to="1"></li>
                <li data-target="#review-slider" data-slide-to="2"></li>
                <li data-target="#review-slider" data-slide-to="3"></li>
                <li data-target="#review-slider" data-slide-to="4"></li>
                <li data-target="#review-slider" data-slide-to="5"></li>
              </ol>
               <div class="caousel-inner">
                   <div class="container">
                         <div class="row">
                           <div class="col-lg-6 m-auto">
							   <h3 class="text-center" style="color:white;margin-top:4px;">Well wishers ( Inspires us always )</h3>
                            <div class="carousel-item active text-justify test-content">
                                <p class="lead">Extremely Spiritual, health conscious, down to earth, caring and honest person.  His favourite and more help full advice is eat healthy, do exercises regularly and stay healthy. Having a healthy life, have a goal in life, to serve the best to the nature and the people around.</p>
                                <div class="client-text text-center">
                                    <h3>Banamali Sahoo</h3>
                                </div>
                            </div>
                             <div class="carousel-item text-justify test-content">
                                <p class="lead">Caring and Lovable like all lovable mothers. Her goal and aim of life at every stage of life is do the duty first what needs to be done at the moment. Then think of something else.</p>

                                <div class="client-text text-center">
                                    <h3>Nirupama Sahoo</h3>                                    
                                </div>
                            </div>
                             <div class="carousel-item text-justify test-content">
                                
                                <p class="lead">Very strong minded, intelligent, knowledgeable, caring and help full person. He is very clear about his life vision and goals, and he knows very clearly, how to achieve the same in any kind of worst or best situation come across on the journey of his life.</p>
                                <div class="client-text text-center">
                                    <h3>Dilip Sahoo</h3>                                    
                                </div>
                            </div>
                             <div class="carousel-item text-justify test-content">
                                <p class="lead">Very caring, lovable and extremely emotional person. Whenever she speaks or behave that is completely reflection of her words and behaviour whatever is there at the moment in her heart and mind without any fear or hesitation.</p>
                                <div class="client-text text-center">
                                    <h3>Bidyutaprabha Sahoo</h3>                                    
                                </div>
                            </div>
                            <div class="carousel-item text-justify test-content">
                                <p class="lead">Very much confident, society conscious, honest person who is so clear about his goals and visions of life. Too much inspirational for all the people around him. Always ready to help to anyone with his knowledge, experiences and also financially without any hesitation or second thought.</p>

                                <div class="client-text text-center">
                                    <h3>Girija Shankar Das</h3>                                    
                                </div>
                            </div>
                            <div class="carousel-item text-justify test-content">
                                <p class="lead">He is unpredictable, he is mysterious. And he has done commendable things in his life journey up to now. And his every achievement of his life from childhood days is shocking and surprising for the people around him. He is very unique, help full, society conscious great and inspirational personality.</p>
                                <div class="client-text text-center">
                                    <h3>Bhagateswar Patro</h3>                                    
                                </div>
                            </div>  

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact
    ================================================== -->
    <section class="section" id="contact" style="padding:10px">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h3 class="lg-title mb-2" style="font-size: 25px">
                        Question or Feedback
                    </h3>

                    <!-- Subheading -->
                    <p class="mb-5">
                        Please feel free to ask us your question Or share your feedback with us. We will try our best to help you asap.
                    </p>

                </div>
            </div>
            <!-- / .row -->


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                    <form class="contact__form" method="post" id="contactForm" action="" name="contact_form">
                        <div class="row">
							<div class="col-lg-6 col-md-3 col-sm-3">
                                <div class="form-group">                                    
                                        <input type="radio" name="contactType"  value="Question" checked> Question
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-sm-3">
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
                                    <input name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit"><br>
                                    
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                    <div class="row">
                        <div style="margin-top: 0px;width: 100%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7490.141965270565!2d85.6114001512378!3d20.172769815625095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19adf52132c5c1%3A0x344375fb3e4c3020!2sMO+DOKAAN+(NIGAM+ENTERPRISERS+)!5e0!3m2!1sen!2sin!4v1554782842046!5m2!1sen!2sin" frameborder="0" style="border:0;width: 100%;height: 300px" allowfullscreen></iframe>
                            <p><b>Contact </b></p>
                            <i class="fa fa-whatsapp" aria-hidden="true"> WhatsApp: (+91)7008766586</i><br>
                            <i class="fa fa-envelope" aria-hidden="true"> Mail: support@modokaan.com, nigamaenterprisers@gmail.com</i>
                       </div>
                    </div>
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
    	</script>
	
	</body>

</html>