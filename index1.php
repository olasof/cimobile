<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>C&I Leasing Mobile</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen" />-->
<script>
		if (window.screen.height==568) { // iPhone 4"
		document.querySelector("meta[name=viewport]").content="width=320.1";
		}
    </script>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="js/portfolio/photoswipe.css">

<!-- Scripts -->
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
<script type="text/javascript" src="js/portfolio/klass.min.js"></script>
<script type="text/javascript" src="js/portfolio/code.photoswipe.jquery-3.0.4.min.js"></script>
<script src="js/slider/jquery.flexslider-min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
    <div data-role="page"> 
         <!-- header -->
  <div data-role="header" class="buttons" data-add-back-btn="true"> <a data-icon="arrow-l" data-iconpos="notext" rel="external" href="index.html">Back</a> <a href="index.html" data-icon="home" data-iconpos="notext" rel="external" class="ui-btn-right">Home</a> </div>
  <!--/header --> 
  
  <!-- banner & title -->
  <h2 class="pageTitle"><span>Hertz/ C&I Fleet Management</span></h2>
  <div class="wrapper">  
    <div id="contact_form">
    <form name="form1" id="ff" method="post" action="insert.php">
    <h1>Contact Hertz</h1>
	<label>
		<span>Name*:</span>
        <input type="text" placeholder="Please enter your name" name="name" id="name" required autofocus>
        </label>
        
        <label>
		<span>City*:</span>    
		<input type="text" placeholder="Please enter your city" name="city" id="city" required>
        </label>
        
        <label>
		<span>Phone:</span>
        <input type="tel" placeholder="Please enter your phone" name="phone" id="phone">
        </label>
        
        <label>
		<span>Email*:</span>
        <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
      	</label>
      
		<input class="sendButton" type="submit" name="Submit" value="Send">
			
	</form>
	</div>
   </div>
    
<!-- footer -->
  <div data-role="footer" class="footer">
    <div data-role="navbar" class="navbar" data-grid="c">
      <ul>
          <li><a href="#" data-theme="c">&nbsp;</a></li>
       <li><a href="#" data-theme="c">&nbsp;</a></li>
        <li><a href="#" data-theme="c">&nbsp;
            </a></li>
        <li><a href="contact.html" data-theme="c">Contact</a></li>
      </ul>
    </div></div>
     <div id="copyright">
      <p class="copyright">     <a href="">     &nbsp;   </a></p>
    </div>
  </div>
  <!-- /footer --> 

<!-- /page -->
</body>
</html>