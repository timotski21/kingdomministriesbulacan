<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>	Kingdom Ministries</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href='plugins/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='plugins/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css"> 
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<link rel="stylesheet" href="css/jquery.flipster.css">
<link rel="stylesheet" href="css/flipsternavtabs.css">
<script type="text/javascript">
	 var _gaq = _gaq || [];
	 _gaq.push(['_setAccount', 'UA-35839373-1']);
	 _gaq.push(['_trackPageview']);

	  (function() {
		 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 })();

</script>
<!--//flipster-js-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->


<div class="body"> 
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="index.php"><img src="images/logo.png" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation hidden-sm hidden-xs">
              <li><a href="plan-visit.php">Plan your visit</a></li>
              <li><a href="events-calendar.php">Calendar</a></li>
              <li><a href="donate.php">Donate Now</a></li>
            </ul>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">

                <li><a href="index.php">Home</a>
                <li><a href="#about" class="scroll"><span data-hover="About">About</span></a></li>

                </li>
                
                <li><a href="#event" class="scroll"><span data-hover="Event">Event</span></a></li>
                </li>
                <li><a href="#sermon" class="scroll"><span data-hover="Sermon">Sermon</span></a></li>
                 
                </li>
                
                <li><a href="#give" class="scroll"><span data-hover="Give">Give</span></a></li>
                 
              	</li>
              </ul>
              <div class="clearfix"> </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header --> 
  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/z.jpg);"></li>
      <li class="parallax" style="background-image:url(images/t.jpg);"></li>
      <a href="index.php" class="button scroll" data-text="More About">More About</a>
    </ul>
  </div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.php">Saturday Morning Prayer</a></h5>
          <span class="meta-data"28th March, 2017</span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="April 6, 2017">
          <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
          <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
          <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
          <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
        </div>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="events-grid.php" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
      </div>
    </div>
  </div>
  <!-- End Notice Bar --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-4 col-sm-4 featured-block"> <a href="our-staff.php" class="img-thumbnail"> <img src="images/mm.jpg" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="about.php" class="img-thumbnail"> <img src="images/staff1.jpg" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="sermons.php" class="img-thumbnail"> <img src="images/slide2.jpg" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3>More Coming Events</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">22</span> <span class="month">March</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.php">Monday Prayer</a></h4>
                      <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.php" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">28</span> <span class="month">March</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.php">Staff members meet</a></h4>
                      <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.php" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">25</span> <span class="month">April</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.php">Evening Prayer</a></h4>
                      <span class="event-dayntime meta-data">Friday | 06:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.php" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>
            <div class="spacer-30"></div>
            <!-- Latest News -->
            <div class="listing post-listing">
              <header class="listing-header">
                <h3>Latest News</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item post">
                    <div class="row">
                      <div class="col-md-4"> <a href="#" class="media-box"> <img src="images/post.jpg" alt="" class="img-thumbnail"> </a></div>
                      <div class="col-md-8">
                        <div class="post-title">
                          <h2><a href="blog-post.php">Sunday's Post Encounter</a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on 26th March, 2017</span></div>
                        <p> This Sunday's lesson at the Post Encounter will be about the foundation of our faith -- the Bible. Let us know His words and promises in our lives together. See you Post Encounter students this Sunday afternoon at 1:00.</p>
                      </div>
                    </div>
                  </li>
                  <li class="item post">
                    <div class="row">
                      <div class="col-md-4"> <a href="#" class="media-box"> <img src="images/latest.jpg" alt="" class="img-thumbnail"> </a></div>
                      <div class="col-md-8">
                        <div class="post-title">
                          <h2><a href="blog-post.php">Saturday's Pre-Encounter</a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on 25th March, 2017</span></div>
                        <p class="drop-caps">Pre Encounter - Your journey to life starts here. Let us help you develop your new-found relationship with Christ as we prepare you for the Destiny Weekend. Discover your new life in the Lord! Join our session this March 25 where we will talk about Life in Christ. This March 25-26, Encounter Weekend will be held at the Hotel Turista, Tungkong Mangga, CSJDM.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 col-sm-6"> 
            <!-- Latest Sermons -->
            <div class="listing sermons-listing">
              <header class="listing-header">
                <h3>Recent Sermons</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date">February 14, 2017</span>
                    <h4><a href="single-sermon.php">TO SAVE A LIFE & DO YOU BELIEVE </a></h4>
                    <div class="featured-sermon-video">
                      <iframe width="300" height="170" src="images/Vow.mp4"> </iframe>
                    </div>
                    <p>Do you believe? Will you save a life? We invite you to join us as in discovering and experiencing God as our saviour. You might be experiencing hopelessness or discouragement from all the challenges, struggles, and problems in life. We believe that you can overcome and be restored.</p>
                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                  </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.php">Post Encounter - Sunday Afternoon</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 20th April, 2017</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.php">Pre Encounter - Finding Strength in God.</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 27th May, 2017</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.php">Post Encounter: "Restoring your Self-Image"</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th June, 2017</span> </li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
<!-- Start Page Header -->

   <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->

<div class="about" id="about">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
        <h1>About</h1>
          <div class="col-md-12">

            <div class="tabs">
              <ul class="nav nav-tabs">
                <li class="active"> <a data-toggle="tab" href="#sampletab1"> History </a> </li>
                <li> <a data-toggle="tab" href="#sampletab2"> Our Pastors </a> </li>
                <li> <a data-toggle="tab" href="#sampletab3"> Our Ministry </a> </li>
              </ul>
              <div class="tab-content">
                <div id="sampletab1" class="tab-pane active">
                  <p>Today, Kingdom Ministries - San Jose finally sprouted here in Bulacan, with hundreds comins and young professionals. We continue to experience exponential growth, winning people and making disciples in both quantity and quality. Our vision has impacted not just the people in our church and city, but also many others in the Philippines and in other countries.g to the Sunday Services and attending Life Groups and the mid-week gatherings for student.</p>
                  <p>A large fraction of our church’s population is composed of the youth from different campuses and universities in City of San Jose del Monte, who have one vision of changing the campus to change the nation. Our influence has also reached the corporate world, touching the lives of young professionals in the different job sectors and helping them reach their full potential as working Filipinos. Since we also believe in the family as the integral unit of the society, we have also spanned the nearby communities, revolutionizing the lives of people one household at a time. In the campuses, the communities, and the corporate world, our vision stays the same – national transformation.</p>
                  <p>Kingdom Ministries also believes in the power of leadership and equipping. That is why we conduct regular trainings and mentoring with the leaders in the church, teaching both spiritual and practical leadership principles that are applicable not only within the church setting but also in other aspects of life. We also mentor other churches in the Philippines,so that they, too, can achieve the same growth and levelling-up we experienced.</p>
                  <p>To this day, Kingdom Ministries continues to reach out to people, fuelled by the desire for change and for brand new vision. We will continue to reach out and touch as many lives as we can, for as long as there are people who want to experience the same change and awakening that God has allowed us to experience. As long as there is that desire, we will continue to live our call and fulfil our ministry.</p>

                </div>
                <div id="sampletab2" class="tab-pane"><div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/mm.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Bro. Jared Garcia</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>He is the Lead Pastor / Founder of Kingdom Ministries-San Jose.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/pp.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Bro. Jezer Garcia</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>Co-founder of Kingdom Ministries-San Jose and Pastor.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/mm.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Bro. Jared Garcia</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>He is the Lead Pastor / Founder of Kingdom Ministries-San Jose.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

                </div>
                <div id="sampletab3" class="tab-pane">
                   <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Church Ministry</h2>
            </header>
            <div class="post-content">
              <img src="images/z.jpg" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
              <p>Today, Kingdom Ministries - San Jose finally sprouted here in Bulacan, with hundreds coming to the Sunday Services and attending Life Groups and the mid-week gatherings for students and young professionals. We continue to experience exponential growth, winning people and making disciples in both quantity and quality. Our vision has impacted not just the people in our church and city, but also many others in the Philippines and in other countries.</p>
              <hr>
              <h3>Get Involved</h3>
              <p>Be one of us! Just click the button below to know more about our church.</p>
              <a href="contact.php" class="btn btn-primary">Find a Life Group</a>
              <hr>
                <h3>Ministry Team</h3>
                <ul class="checks">
                  <li>Women Ministry</li>
                  <li>Men Ministry</li>
                  <li>Youth Ministry</li>
                  
                </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 sidebar">
            <!-- Photo Gallery Widget -->
            <div class="widget-gallery widget">
              <div class="sidebar-widget-title">
                <h3>Latest Gallery Items</h3>
              </div>
              <ul>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f1.jpg" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f2.jpg" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f3.jpg" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f4.jpg" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f5.jpg" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="images/f6.jpg" alt="" class="img-thumbnail"> </a></li>
              </ul>
            </div>
            <div class="widget-upcoming-events widget">
              <div class="sidebar-widget-title">
                <h3>Ministry Events</h3>
              </div>
              <ul>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Staff Members Meet</a></h4>
                    <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                </li>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Monday Prayer</a></h4>
                    <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 
                </div>
              </div>
            </div>
            
            <hr>
          
          </div>
          

  <!-- Start Page Header -->
  <!-- End Page Header --> 
  <!-- Start Content -->
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Location</h2>
            </header>
            <div class="post-content">
              <div id="gmap">
                <iframe src="images/loc.jpg"></iframe>
              </div>
              <div class="row">
                <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                  <div class="col-md-6 margin-15">
                    <div class="form-group">
                      <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                  </div>
                </form>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div id="message"></div>
                </div>
              </div>
            </div>
          </div>
		  <!-- Start Sidebar -->
          <div class="col-md-3 sidebar"> 
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">John Rick Orioque</a> <span class="meta-data"><i class="fa fa-calendar"></i> 24th Feb, 2017</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">Angelica Nunez Ignacio</a> <span class="meta-data"><i class="fa fa-calendar"></i>  4th Jan, 2017</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">Cathrine Calvero</a> <span class="meta-data"><i class="fa fa-calendar"></i> 28th March, 2016</span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		  
  <!-- Start Events -->

  <!-- Start Page Header -->
  
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="event" id="event">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
		<h1>Events</h1>
          <div class="col-md-12">
            <ul class="grid-holder col-3 events-grid">
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/gg.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Pre Encounter</a></h3>
                    <p>Pre Encounter - Your journey to life starts here.
                      Let us help you develop your new-found relationship with Christ as we prepare you for the Destiny Weekend. Discover your new life in the Lord!</p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> March 25,2017 | Saturday | 1:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/slide2.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Bible Study</a></h3>
                    <p>This Sunday's lesson at the Post Encounter will be about the foundation of our faith -- the Bible. Let us know His words and promises in our lives together.</p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> March 17,2017 | Friday | 6:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/ii.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Consecration Night</a></h3>
                    <p>As we go beyond borders this year , we are relaunching the Cell Miracle Catch Campaign. And before we receive a miraculous catch ,our net (life) will be checked for a repair & for upgrade .Mobilize your team and join our prayparation. Be cleansed, healed & empowered! </p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> January 9-10,2017 | 5:00 - 9:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/gg.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Pre Encounter</a></h3>
                    <p>Pre Encounter - Your journey to life starts here.
                      Let us help you develop your new-found relationship with Christ as we prepare you for the Destiny Weekend. Discover your new life in the Lord!</p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> March 17,2017 | Friday | 6:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/slide2.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Bible Study</a></h3>
                    <p>This Sunday's lesson at the Post Encounter will be about the foundation of our faith -- the Bible. Let us know His words and promises in our lives together.</p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> March 17,2017 | Friday | 6:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
              <li class="grid-item format-standard">
                <div class="grid-item-inner"> <a href="single-event.php" class="media-box"> <img src="images/ii.jpg" alt=""> </a>
                  <div class="grid-content">
                    <h3><a href="single-event.php">Consecration Night</a></h3>
                    <p>As we go beyond borders this year , we are relaunching the Cell Miracle Catch Campaign. And before we receive a miraculous catch ,our net (life) will be checked for a repair & for upgrade .Mobilize your team and join our prayparation. Be cleansed, healed & empowered!</p>
                  </div>
                  <ul class="info-table">
                    <li><i class="fa fa-calendar"></i> January 9-10,2017 | 5:00 - 9:00 PM</li>
                    <li><i class="fa fa-map-marker"></i> Hotel Turista, Tungkong Mangga, CSJDM</li>
                  </ul>
                </div>
              </li>
            </ul>
            <ul class="pager pull-right">
              <li><a href="#">&larr; Older</a></li>
              <li><a href="#">Newer &rarr;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Sermons -->
 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="sermon" id="sermon">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
		<h1>Sermons</h1>
          <div class="col-md-8 sermon-archive"> 
            <!-- Sermons Listing -->
            <article class="post sermon">
              <header class="post-title">
                <div class="row">
                  <div class="col-md-9 col-sm-9">
                    <h3><a href="single-sermon.php">Sermon</a></h3>
                    <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 17th Dec, 2016 | Pastor:Jason <a href="#">Admin</a></span> </div>
                  <div class="col-md-3 col-sm-3 sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
                </div>
              </header>
              <div class="post-content">
                <div class="row">
                  <div class="col-md-4"> <a href="single-sermon.php" class="media-box"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a> </div>
                  <div class="col-md-8">
                    <p>Bakit na composed ang kantang “AMAZING GRACE”🎼🎵🎶
Because they have a story!😏
-May nagngangalang James,alam mo si James wala siyang kinikilalang Diyos....wala siyang Diyos sa buhay niya wala siyang Church!😕
-First Time niyang makasakay sa barko🚢...so yung nasa gitna na sila nang karagatan🌅...May dumating na malakas na bagyo🌀,yung barkong sinasakyan nila ay halos hampasin na ng alon🌊 na gumegewang - geweng pa!😅 Na may kasamang malakas na ulan.☔
Lahat na sila ay halos kapit na kapit sa mga parte ng barko.😱Yung mga kasama nila ay todo na ang pag pray.🙏
Siya naman ay may nakitang sanggol.👶 Kinuha niya ito at itinaas sabay sinabi niya na...
“kung totoo nga talaga ang Diyos,itong sanggol na ito! ay makikita ko pa sa pag laki niya at hahaba pa ang buhay niya!”😠</p>
                    <p><a href="single-sermon.php" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                  </div>
                </div>
              </div>
            </article>
            <article class="post sermon">
              <header class="post-title">
                <div class="row">
                  <div class="col-md-9 col-sm-9">
                    <h3><a href="single-sermon.php">Sermon</a></h3>
                    <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 17th Dec, 2016 | Pastor:Jason<a href="#">Admin</a></span> </div>
                  <div class="col-md-3 col-sm-3 sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
                </div>
              </header>
              <div class="post-content">
                <div class="row">
                  <div class="col-md-4"> <a href="single-sermon.php" class="media-box"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a> </div>
                  <div class="col-md-8">
                    <p>Bakit na composed ang kantang “AMAZING GRACE”🎼🎵🎶
Because they have a story!😏
-May nagngangalang James,alam mo si James wala siyang kinikilalang Diyos....wala siyang Diyos sa buhay niya wala siyang Church!😕
-First Time niyang makasakay sa barko🚢...so yung nasa gitna na sila nang karagatan🌅...May dumating na malakas na bagyo🌀,yung barkong sinasakyan nila ay halos hampasin na ng alon🌊 na gumegewang - geweng pa!😅 Na may kasamang malakas na ulan.☔
Lahat na sila ay halos kapit na kapit sa mga parte ng barko.😱Yung mga kasama nila ay todo na ang pag pray.🙏
Siya naman ay may nakitang sanggol.👶 Kinuha niya ito at itinaas sabay sinabi niya na...
“kung totoo nga talaga ang Diyos,itong sanggol na ito! ay makikita ko pa sa pag laki niya at hahaba pa ang buhay niya!”😠</p>
                    <p><a href="single-sermon.php" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                  </div>
                </div>
              </div>
            </article>
            <article class="post sermon">
              <header class="post-title">
                <div class="row">
                  <div class="col-md-9 col-sm-9">
                    <h3><a href="single-sermon.php">Sermon</a></h3>
                    <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 17th Dec, 2016 | Pastor:Jason <a href="#">Admin</a></span> </div>
                  <div class="col-md-3 col-sm-3 sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
                </div>
              </header>
              <div class="post-content">
                <div class="row">
                  <div class="col-md-4"> <a href="single-sermon.php" class="media-box"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a> </div>
                  <div class="col-md-8">
                    <p>Bakit na composed ang kantang “AMAZING GRACE”🎼🎵🎶
Because they have a story!😏
-May nagngangalang James,alam mo si James wala siyang kinikilalang Diyos....wala siyang Diyos sa buhay niya wala siyang Church!😕
-First Time niyang makasakay sa barko🚢...so yung nasa gitna na sila nang karagatan🌅...May dumating na malakas na bagyo🌀,yung barkong sinasakyan nila ay halos hampasin na ng alon🌊 na gumegewang - geweng pa!😅 Na may kasamang malakas na ulan.☔
Lahat na sila ay halos kapit na kapit sa mga parte ng barko.😱Yung mga kasama nila ay todo na ang pag pray.🙏
Siya naman ay may nakitang sanggol.👶 Kinuha niya ito at itinaas sabay sinabi niya na...
“kung totoo nga talaga ang Diyos,itong sanggol na ito! ay makikita ko pa sa pag laki niya at hahaba pa ang buhay niya!”😠</p>
                    <p><a href="single-sermon.php" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                  </div>
                </div>
              </div>
            </article>
            <article class="post sermon">
              <header class="post-title">
                <div class="row">
                  <div class="col-md-9 col-sm-9">
                    <h3><a href="single-sermon.php">Sermon</a></h3>
                    <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 17th Dec, 2016 | Pastor:Jason <a href="#">Admin</a></span> </div>
                  <div class="col-md-3 col-sm-3 sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
                </div>
              </header>
              <div class="post-content">
                <div class="row">
                  <div class="col-md-4"> <a href="single-sermon.php" class="media-box"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a> </div>
                  <div class="col-md-8">
                    <p>Bakit na composed ang kantang “AMAZING GRACE”🎼🎵🎶
Because they have a story!😏
-May nagngangalang James,alam mo si James wala siyang kinikilalang Diyos....wala siyang Diyos sa buhay niya wala siyang Church!😕
-First Time niyang makasakay sa barko🚢...so yung nasa gitna na sila nang karagatan🌅...May dumating na malakas na bagyo🌀,yung barkong sinasakyan nila ay halos hampasin na ng alon🌊 na gumegewang - geweng pa!😅 Na may kasamang malakas na ulan.☔
Lahat na sila ay halos kapit na kapit sa mga parte ng barko.😱Yung mga kasama nila ay todo na ang pag pray.🙏
Siya naman ay may nakitang sanggol.👶 Kinuha niya ito at itinaas sabay sinabi niya na...
“kung totoo nga talaga ang Diyos,itong sanggol na ito! ay makikita ko pa sa pag laki niya at hahaba pa ang buhay niya!”😠</p>
                    <p><a href="single-sermon.php" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                  </div>
                </div>
              </div>
            </article>
            <ul class="pagination">
              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 sidebar">
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Categories</h3>
              </div>
              <ul>
                <li><a href="#">Faith</a> (10)</li>
                <li><a href="#">Missions</a> (12)</li>
                <li><a href="#">Salvation</a> (34)</li>
                <li><a href="#">Worship</a> (14)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Speakers</h3>
              </div>
              <ul>
                <li><a href="#">Bro. Jared Garcia</a> (5)</li>
                <li><a href="#">Bro. Jezer Garcia</a> (13)</li>
                <li><a href="#">Bro. Jared Garcia</a> (34)</li>
                <li><a href="#">Bro. Jezer Garcia</a> (2)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Give --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="give" id="give">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
		 <h1>Give</h1>
          <div class="col-md-9 posts-archive causes-archive">
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="single-cause.php"><img src="images/abs.jpg" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="single-cause.php">ABS-CBN Lingkod Kapamilya Foundation, Inc.</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Feb, 2017</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Non-Profit</a>, <a href="#">Organization</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                  </span>
                  <div class="progress-label">
                      80% Donated of <span>P1,000,000</span>
                      <label class="cause-days-togo label label-default pull-right">19 days to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
				  <h3>Mission</h3>
                  <p>We commit to make a significant impact in the strategic areas of churches,child care by leveraging the power and reach of media with concerned sectors of society. </p>
                </div>
              </div>
            </article>
            
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="single-cause.php"><img src="images/gma.jpg" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="single-cause.php">GMA Kapuso Foundation</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Jan, 2017</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Non-Profit</a>, <a href="#">Organization</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 9</a></span>
                  </span>
                  <div class="progress-label">
                      30% Donated of <span>P300,000</span>
                      <label class="cause-days-togo label label-default pull-right">2 months to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" data-appear-progress-animation="30%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
				  <h3>Mission</h3>
                  <p>We uplift the life of the under privileged Kapusong-Filipino all over the Philippines.</p>
                </div>
              </div>
            </article>
            
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="single-cause.php"><img src="images/abs.jpg" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="single-cause.php">TV5 Kapatid Foundation</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Jan, 2017</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Non-Profit</a>, <a href="#">Organization</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 5</a></span>
                  </span>
                  <div class="progress-label">
                      55% Donated of <span>P550,000</span>
                      <label class="cause-days-togo label label-default pull-right">27 days to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-appear-progress-animation="55%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
                  <p>We commit to make a significant impact in the strategic areas of churches,child care by leveraging the power and reach of media with concerned sectors of society.</p>
                </div>
              </div>
            </article>
            <!-- Payment Modal Window -->
            <div class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Donate to: <span class="accent-color payment-to-cause"></span></h4>
                  </div>
                  <div class="modal-body">
                  	<form>
                    	<div class="row">
                        	<div class="col-md-6">
                                <label>How much would you like to donate?</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">P</span>
                                    <select name="donation amount" class="form-control">
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="Custom">500</option>
										<option value="Custom">1,000</option>
										<option value="Custom">10,000</option>
										<option value="Custom">100,000</option>
                                    </select>
                                </div>
                            </div>
                        	<div class="col-md-6 custom-donate-amount">
                                <label>Enter custom donation amount</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">P</span>
                        			<input type="text" name="Custom Donation Amount" class="form-control">
                                </div>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="text" name="lname" class="form-control" placeholder="Last name">
                            </div>
                      	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="phone" name="phone" class="form-control" placeholder="Your phone">
                            </div>
                       	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                            </div>
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Additional Notes"></textarea>
                            </div>
                       	</div>
                        <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Donate Now">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <p class="small short">If you would prefer to call in your donation, please call 1800.785.876</p>
                  </div>
                </div>
              </div>
            </div>
            <ul class="pagination">
              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget search-form-widget">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search Posts...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search fa-lg"></i></button>
                </span> </div>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Categories</h3>
              </div>
              <ul>
                <li><a href="#">Faith</a> (10)</li>
                <li><a href="#">Missions</a> (12)</li>
                <li><a href="#">Salvation</a> (34)</li>
                <li><a href="#">Worship</a> (14)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Plan Visit -->
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Plan your visit</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
            <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Here is how you can reach us</h2>
            </header>
            <div class="post-content">
              <p><span class="label label-danger">Visit</span>us at Hotel Turista, Tungkong Mangga, SJDM Bulacan to experience the Power of God..</p>
              </div>
			    <div id="gmap">
                <iframe src="images/loc.jpg"></iframe>
              </div>
          </div>
        <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget-upcoming-events widget">
              <div class="sidebar-widget-title">
                <h3>Upcoming Events</h3>
              </div>
              <ul>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Monday Prayer</a></h4>
                    <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                </li>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Staff members meet</a></h4>
                    <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                </li>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">25</span> <span class="month">Sep</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Evening Prayer</a></h4>
                    <span class="event-dayntime meta-data">Friday | 06:00 PM</span> </div>
                </li>
              </ul>
            </div>
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                  <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">John Rick Orioque</a> <span class="meta-data"><i class="fa fa-calendar"></i> 24th Feb, 2017</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">Angelica Nunez Ignacio</a> <span class="meta-data"><i class="fa fa-calendar"></i>  4th Jan, 2017</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/u.jpg" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="blog-medium-thumbnails.php">Cathrine Calvero</a> <span class="meta-data"><i class="fa fa-calendar"></i> 28th March, 2016</span> </div>
                </li>
               </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Calendar -->
   <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Events Calendar</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">About our Church</h4>
          <img src="images/logo.png" alt="Logo">
          <div class="spacer-20"></div>
          <p>Kingdom Ministries- San Jose finally sprouted here in Bulacan! Be up-to-date with our forthcoming life-changing events.</p>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Blogroll</h4>
          <ul>
            <li><a href="index.php">Church Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="google-calendar.php">All Events</a></li>
            <li><a href="sermons.php">Sermons Archive</a></li>
            <li><a href="blog-medium-thumbnails.php">Our Blog</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Our Church on Facebook</h4>
          <li><a href="https://fb.com/KingdomMinistriesMain" class="btn btn-primary">Open with Facebook</a>
        </div>
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2017 Kingdom Ministries. All Rights Reserved.</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src='plugins/fullcalendar/lib/moment.min.js'></script>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src='plugins/fullcalendar/jquery-ui.custom.min.js'></script>
<script src='plugins/fullcalendar/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			defaultDate: '2017-03-20',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-03-01'
				},
				{
					title: 'Long Event',
					start: '2017-03-07',
					end: '2017-03-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-03-09 T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-03-16 T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-03-11',
					end: '2017-03-13'
				},
				{
					title: 'Meeting',
					start: '2017-03-12 T10:30:00',
					end: '2017-03-12 T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-03-12 T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-03-12 T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-03-12 T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-03-12 T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-03-13 T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-03-28'
				}
			]
		});
		
	});

</script>
</body>
</html>