<?php
include("conexao.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<link href='./images/logo1.png' rel='icon' type='image/x-icon'/>
<title>KRONDIKE</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_about"> </div>
   <div class="header-home">
	<div class="fixed-header">
		<div class="logo">
			<a href="index.html">
	          <span class="secondary">Careers,skills</span>
	          <span class="main">KRONDIKE</span>
	        </a>
		</div>
				<div class="top-nav">
				    <span class="menu"> </span>
					<ul>
						<li><a href="index.html">Home</a></li>
					  	<li><a href="about.html">About</a></li>
					  	<li><a href="services.html">Services</a></li>
					  	<li><a href="blog.html">News</a></li>
					  	<li class="active"><a href="contact.php">Contact</a></li>		
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
   <div class="grid_4">
		<div class="container"> 
			<h1 class="blog_head">Contact</h1>
		    <div class="map">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230483.7742294319!2d-49.429885837373085!3d-25.49474014560398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35351cdb3dd%3A0x6d2f6ba5bacbe809!2sCuritiba%2C+PR!5e0!3m2!1spt-BR!2sbr!4v1534376517423" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact">
				<div class="col-md-4 contact_left">
					<h3>Contact info</h3>
					<p>Want to know about new products and legal information about our projects sign our newlleter, PLEASE SIGN IF YOU ARE OVER 18 YEARS!</p>
				</div>
				

	<div class="col-md-8 contact_right">
		<h3>Catch me</h3>
			<form name="CadForm" action="gravar-filme.php" method="post">
				<div class="text">
				<div class="text-fild">
				<span>Name:</span>
				<input type="text" name="Nome" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
					</div>

					<div class="text-fild">
					<span>Email:</span>
					<input type="text" name="Email" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
					</div>
					<div class="clearfix"> </div>
					</div>

	<div class="msg-fild">
    <label for="Interesse">
    	<span>I am Interested:</span>
    </label>
    <select class="form-control" id="Interesse"
    name="Interesse">
      <option name="Interesse">JOBS</option>
      <option name="Interesse">CLIENT</option>
      <option name="Interesse">FRANCHISE</option>
      <option name="Interesse">NEWS</option>
      <option name="Interesse">INTERSHIP</option>
    </select>

</div>                              					


<div class="text-fild">
    <span>Message:</span>
    <textarea class="form-control" id="exampleTextarea" rows="3" input type="text" name="Mensagem" value="Your Message here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message here';}">	
    </textarea>
    <label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Send"></label>
  </div>
</form>
</div>



					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
	<div class="footer">
		<div class="container">
		  <div class="footer_top">
			<div class="col-sm-3">
			   <ul class="list1">
			   	<h3>Browse</h3>
			   	 <li><a href="#">Prices</a></li>
			   	 <li><a href="#">Events</a></li>
			   	 <li><a href="#">Blog</a></li>
			     <li><a href="#">Contact</a></li>
			   </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="list1">
			    <h3>Next Events</h3>
			   	 <li><a href="#">Canada</a></li>
			   	 <li><a href="#">LasVegas</a></li>
			   	 <li><a href="#">Uruguay</a></li>
			   	 <li><a href="#">Holand</a></li>
			  </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="list1">
			  	<h3>About Us</h3>
			   	 <li><a href="#">About Us</a></li>
			   	 <li><a href="#">Apply</a></li>
			   	 <li><a href="#">Terms and Conditions</a></li>
			   	 <li><a href="#">Register</a></li>
			  </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="socials">
                 <li><a href="#"><i class="fa fb fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa tw fa-twitter"></i></a></li>
              </ul>
              <ul class="list2">
				<li><strong class="phone">+XXXX XXXXX XX</strong><br><small>W.P</small></li>
				<li>Questions? <a href="KRONDIKE@xxx.com">mail(at)kronkdike.com</a></li>
			  </ul>
			</div>
			<div class="clearfix"> </div>
		   </div>
		 </div>
	</div>
	<div class="copy">
	    <p>&copy; 2018 Design by <a href="https://www.linkedin.com/in/willian-pachinski-087439102/" target="_blank">WillianPachinski</a></p>
    </div>
</div>
</body>
</html>		