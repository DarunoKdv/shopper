<?php require_once('connect.php'); ?>
<?php session_start(); ?>
<?php $staffid=$_SESSION['staid'] ?>
<?php $qaa="select * from customer";
					$resulta=$mysqli->query($qaa);
					if(!$resulta){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My account - SB</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
	<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu" method="post">			
							<li><a href="./staffaccount.php">Profile</a></li>
							<li><a href="./cusprof.php">Customer Profile</a></li>							
							<li><a href="./cusord.php">Customer Order</a></li>
							<li><a href="./loginadmin.php">log Out</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="staffaccount.php" class="logo pull-left"><img src="themes/images/logonew.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
					</nav>
				</div>
			</section>		
			<section class="header_text sub">
				<h4><span>CUSTOMERS INFORMATION</span></h4>
			</section>			
			<section class="main-content">
            <table class="table table-striped">
							<thead>
								<tr>
									<th>Customer ID</th>
									<th>Customer Username</th>
									<th>Customer Name</th>
									<th>Customer Telephone Number</th>
									<th>Customer Address</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php 
							while($rowas=$resulta->fetch_array()) {
								?> <tr> 
                                    <td><a><?=$rowas['CUS_ID']?></a></td>
									<td><a><?=$rowas['CUS_USERNAME']?></a></td>
									<td><a><?=$rowas['CUS_NAME']?></a></td>
									<td><a><?=$rowas['CUS_TEL']?></a></td>
									<td><a><?=$rowas['CUS_ADDR']?></a></td>
									<td><a></a></td>
									<td><a></a></td>
									
								<?php } ?>
								</tr>			  
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>		  
							</tbody>
						</table>		
            </section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">				
					</div>
					<div class="span4">
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logonew.png" class="site_logo" alt=""></p>
						<p>Explore our unrivaled selection of makeup, skincare, fragrance and more from classic and emerging brands.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2020 Sleeping Beauty Team  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>