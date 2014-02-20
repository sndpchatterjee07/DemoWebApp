<!DOCTYPE HTML>
<?php
include_once 'config/core/config.php';
?>
<html>
	<head>
		<title>Demo Web Application: Home Page</title>
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
								<li class="selected">
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
								<li>
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
						<!-- insert the page content here -->
						<h1>Man Light Hath You Own Divide</h1>
						<p>
							<!--START-DUMMY-CONTENT-->
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
							Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
							Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
							Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
							In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
							Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
							porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. 
							Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. 
							Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, 
							sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit 
							id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. 
							Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. 
							Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
							<!--END-DUMMY-CONTENT-->
						</p>
						
						<p>
							<!--START-DUMMY-CONTENT-->
							The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, 
							flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. 
							Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk 
							TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" 
							my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. 
							A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, 
							and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in 
							fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just
							<!--END-DUMMY-CONTENT-->
						</p>
						
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
