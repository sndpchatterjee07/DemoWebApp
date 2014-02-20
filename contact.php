<!DOCTYPE HTML>
<?php
include_once 'config/core/config.php';
?>
<html>
	<head>
		<title>Demo Web Application: Contact us</title>
		<meta name="description" content="Demo Web Application" />
		<meta name="keywords" content="demo web application" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="shortcut icon" href="icons/success.ico" />
	</head>

	<body>
		<div id="main">
			<!--START-HEADER-->
			<div id="header">
				<?php include_once 'header.php';?>
					<!--START-MENUBAR-->
						<div id="menubar">
							<ul id="menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="page1.php">Page 1</a>
								</li>
								<li>
									<a href="page2.php">Page 2</a>
								</li>
								<li>
									<a href="page3.php">Page 3</a>
								</li>
								<li class="selected">
									<a href="contact.php">Contact Us</a>
								</li>
							</ul>
						</div>
			  <!--END-MENUBAR-->
			</div>
			<div id="content_header"><marquee>This is a simple and customizable HTML5 & PHP website template.We are gradually adding new functionality and we welcome your suggestions and feedbacks. Please take a look around and let us know what you think.</marquee></div>
			<!--END-HEADER-->
			
			<!--START-SITE-CONTENT-->
			<div id="site_content">
				<div id="banner">
					<!--Banner Content-->
				</div>

				<!--START-SIDEBAR-CONTAINER(RIGHT)-->
				<div id="sidebar_container">
					<!--START-SIDEBAR-1-->
					<div class="sidebar">
							<!--START-SIDEBAR-TOP-->
							<div class="sidebar_top">
								
							</div>
							<!--END-SIDEBAR-TOP-->
						
							<!--START-SIDEBAR-ITEMS-->
							<div class="sidebar_item">
								<h3>Latest News</h3>
								<h4>New Website Launched</h4>
								<h5> <?php echo date("d-m-y h:i A"); ?> </h5>
								<p>
									<!--START-DUMMY-CONTENT-->
									We are gradually adding new functionality and we welcome your suggestions and feedback. 
									Please take a look around and let us now what you think.
									<!--END-DUMMY-CONTENT-->
									<br />
									<a href="#">Read more</a>
								</p>
							</div>
							<!--END-SIDEBAR-ITEMS-->
						
							<!--START-SIDEBAR-BASE-->
							<div class="sidebar_base">
							
							</div>
							<!--END-SIDEBAR-BASE-->
					</div>
					<!-- END-SIDEBAR-1-->
					
					
					<!--START-SIDEBAR-2-->
					<div class="sidebar">
							<!--START-SIDEBAR-TOP-->
							<div class="sidebar_top">
								
							</div>
							<!--END-SIDEBAR-TOP-->
							
							<!--START-SIDEBAR-ITEMS-->
							<div class="sidebar_item">
								<h3>Useful Links</h3>
								<ul>
									<li>
										<a href="#">Link 1</a>
									</li>
									<li>
										<a href="#">Link 2</a>
									</li>
									<li>
										<a href="#">Link 3</a>
									</li>
									<li>
										<a href="#">Link 4</a>
									</li>
								</ul>
							</div>
							<!--END-SIDEBAR-ITEMS-->
							
							<!--START-SIDEBAR-BASE-->
							<div class="sidebar_base">
								
							</div>
							<!--END-SIDEBAR-BASE-->
					</div>
					<!--END-SIDEBAR-2-->
					
					
					<!--START-SIDEBAR-3-->
					<div class="sidebar">
							<!--START-SIDEBAR-TOP-->
							<div class="sidebar_top">
								
							</div>
							<!--END-SIDEBAR-TOP-->
							
							<!--START-SIDEBAR-ITEMS-->
							<div class="sidebar_item">
								<h3>Search</h3>
								<!--START-SEARCH-FORM-->
								<form method="post" action="#" id="search_form">
									<p>
										<input class="search" type="text" name="search_field" value="Enter keywords....." onblur="if ((this.value == '')) {this.value='Enter keywords.....';}" onfocus="if ((this.value == 'Enter keywords.....')) {this.value='';}"/>
										<input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="css/search.png" alt="Search" title="Search" />
									</p>
								</form>
								<!--END-SEARCH-FORM-->
							</div>
							<!--END-SIDEBAR-ITEMS-->
							
							<!--START-SIDEBAR-BASE-->
							<div class="sidebar_base">
								
							</div>
							<!--END-SIDEBAR-BASE-->
					</div>
					<!--END-SIDEBAR-3-->
				</div>
				<!-- END-SIDEBAR-CONTAINER(RIGHT) -->


				<!--START-CONTENT-->
				<div id="content">
					<h1>Contact Us</h1>
					<div class="form_settings">
					<p>
						<!--START-DUMMY-CONTENT-->
							<p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
	            			<p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
	            			<p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
	            			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Submit" /></p>
						<!--END-DUMMY-CONTENT-->
						</p>
						</div>
				</div>
				<!--END-CONTENT-->
			</div>
			<!-- END-SITE-CONTENT -->
			
			
			<!--START-FOOTER-->
			<div id="footer">
			<?php include_once 'footer.php';?>
			</div>
			<!--END-FOOTER-->
		</div>
	</body>
</html>
