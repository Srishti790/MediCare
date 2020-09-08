<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medicare|Healthcare Logistics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome  -->
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--new-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<style>

@import 'https://fonts.googleapis.com/css?family=Open+Sans|Quicksand:400,700';

/*--------------------
General Style
---------------------*/





body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  color:#000;
}



.about-section {
  padding: 50px;
  text-align: center;
  background-image: url("images/black-dark.jpg");
  background-attachment:fixed;
  color: white;
}
h1 {
  
  color: black;
  font-weight:bold;
}


.about-btn {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.about-btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.about-btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.about-btn:hover span {
  padding-right: 25px;
}

.about-btn:hover span:after {
  opacity: 1;
  right: 0;
}

/*new*/

.c-container {
    margin: auto;
    width: 93%;
    position: relative;
    z-index: 1;
}


.card-view {
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    border-radius: 4px;
    padding: 22px;
    margin-bottom: 20px;
	background: #fff;
}
.flex-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.spacer {
    padding-top: 50px;
    padding-bottom: 50px;
}
.bg-gray {
    background: #F8F8F8;
}
.no-margin {
    margin: 0 !important;
}
.flex-row .flex-col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

/* common css up */
.timeline {
    list-style: none;
    padding: 0;
    margin: 0;
    position: relative;
}
.timeline li.right {
    margin-left: auto;
}
.timeline li:first-child {
    margin-top: 0;
}
.timeline li {
    width: 47%;
    position: relative;
    margin-top: 50px;
}
.timeline:before {
    content: '';
    width: 4px;
    height: 100%;
    background: #E4E4E4;
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
}
.timeline li:before {
    content: '';
    --size: 16px;
    width: var(--size);
    height: var(--size);
    background: #00796B;
    display: block;
    position: absolute;
    left: -48px;
    border-radius: 50%;
}
.time-thumb-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 20px;
}
.time-thumb-row .time-content {
    margin-left: 14px;
}
.time-thumb-row .time-content h4 {
    margin: 0;
    color: #212121;
    font-weight: 600;
    font-size: 17px;
}
.time-thumb-row .time-content time {
    font-size: 14px;
    color: #666666;
}
.timeline li.left:before {
    left: inherit;
    right: -48px;
}
.width100 {
    width: 100%;
    max-height: 500px;
    object-fit: contain;
    object-position: center;
}


.fade-in[data-scroll] {
	opacity: 0;
	will-change: transform, scale, opacity;
	-webkit-transform: translateY(6rem) scale(0.93);
			transform: translateY(6rem) scale(0.93);
	transition: all 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

.fade-in-right[data-scroll] {
	opacity: 0;
	will-change: transform, scale, opacity;
	-webkit-transform: translatex(6rem) scale(0.93);
			transform: translatex(6rem) scale(0.93);
	transition: all 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
  }
  .fade-in-left[data-scroll] {
	opacity: 0;
	will-change: transform, scale, opacity;
	-webkit-transform: translatex(-6rem) scale(0.93);
			transform: translatex(-6rem) scale(0.93);
	transition: all 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
  }
  
  .fade-in[data-scroll="in"], .fade-in-right[data-scroll="in"] ,.fade-in-left[data-scroll="in"] {
	opacity: 1;
	-webkit-transform: translateY(0) scale(1);
			transform: translateY(0) scale(1);
  }
  
p {
    color: #5d5d5d;
    line-height: 1.5;
}
 
   
        </style>
	</head>
	<body>
  <?php
	include_once './sidebars/homesidebar.php';
	?>
	<div id="page" style="background-repeat:no-repeat;background-size:cover;overflow-y:hidden; height:120px;boreder-bottom:2px solid #000">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
						<div class="col-md-3 col-xs-2">
							<div id="fh5co-logo"><a href="index.php" style ="color:#000"><img src ="images\newlogo.png"></a></div>
						</div>
					<div class="col-md-9 col-xs-11 text-right menu-1">
						<ul>
							<li><a href="index.php" style ="color:#000">Home</a></li>
							<li><a href="managerlogin.php" style ="color:#000">Manager</a></li>
							<li><a href="technicianlogin.php" style ="color:#000">Technician</a></li>
							<li><a href="customerlogin.php" style ="color:#000">Customer</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
    </nav>
</div>

<div class="about-section" >
  <h1 style ="color:#fff">About Us </h1><br>
  <p style ="color:#fff"><b>Work With The Experts Who Know The Soul Of Your Business Demands.</p><br>
  <button class="about-btn" style="vertical-align:middle"><a href ="index.php" style="color:white"><span>START</span></a></button>
  
</div>


<div id="fh5co-explore" class="fh5co-bg-section"style ="background-image:url(images/black.jpg);background-attachment:fixed;background-size:cover;background-repeat:cover">
<br><br>

<h1 style="text-align: center;color:white">Our Team</h1><br>
        <section class="c-container" style="position: static;">
                <ul class="timeline">
                    <li class="right">
                        <div class="card-view fade-in" data-scroll>
                            <div class="time-thumb-row">
                                
                                
                                <div class="time-content">
                                    <h4>Aditya Kumar</h4>
                                    <time>Full Stack Web Developer</time>
                                </div>
                            </div>
                            <img class="width100" src="images/ad.jpg" alt="">
                        </div>
                    </li>
                    <li class="left">
                            <div class="card-view fade-in" data-scroll>
                                <div class="time-thumb-row">
                                    
                                    <div class="time-content">
                                        <h4>Aditya Kumar</h4>
                                        <time>Full Stack Web Developer</time>
                                    </div>
                                </div>
                                <p class="para-14">
                                I am a full stack web developer and also a fontend and backend developer.      
                                </p>
                            </div>
                    </li>
                    <li class="right">
                            <div class="card-view fade-in" data-scroll>
                                <div class="time-thumb-row">
                                   
                                    <div class="time-content">
                                        <h4>Yash</h4>
                                        <time>Web Developer ,Frontend designer & Content Writer</time>
                                    </div>
                                </div>
                                <p class="para-14">
                                I am a full time web develper and also a frontend developer and a content writer.      
                                </p>
                            </div>
                    </li>
                    <li class="left">
                            <div class="card-view fade-in" data-scroll>
                                <div class="time-thumb-row">
                                   
                                    <div class="time-content">
                                        <h4>Yash</h4>
                                        <time>Web Developer ,Frontend designer & Content Writer</time>
                                    </div>
                                </div>
                                <img class="width100" src="images/ys.jpg" alt="">
                            </div>
                        </li>
                        
                            <li class="left">
                                    <div class="card-view fade-in" data-scroll>
                                        <div class="time-thumb-row">
                                          
                                            <div class="time-content">
                                                <h4>Srishti Suverna Baraik</h4>
                                                <time>Web Developer & Frontend</time>
                                            </div>
                                        </div>
                                        <p>
                                        I am a full time  web developer and also a frontend designer.
                                        </p>
                                        
                                    </div>
                                </li>
                                <li class="right">
                                        <div class="card-view fade-in" data-scroll>
                                            <div class="time-thumb-row">
                                               
                                                <div class="time-content">
                                                    <h4>Srishti Suverna Baraik</h4>
                                                    <time>Web Developer & Frontend</time>
                                                </div>
                                            </div>
                                            <img class="width100" src="images/sr.jpg" alt="">
                                        </div>
                                    </li>
                                   
                </ul>
            </section>
			
            <script src="https://md-aqil.github.io/images/scroll-out.js"></script>
            <script>
                
                ScrollOut({
                cssProps: {
                    visibleY: true,
                    viewportY: true
                },
                });

            </script>
	<script>
        
	</script>

</body>
</html>