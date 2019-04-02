	<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dropdown Menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
		<body>
			<!----start-body------->
			<!----star-wrapper-demo------->
			<div class="wrapper-demo">
				<!-----start-wrapper-dropdown-2---->
					<div id="dd" class="wrapper-dropdown-2" tabindex="1">ADMIN SETTINGS<span><img src="images/menu.png"/></span>
							<ul class="dropdown">
							
									<li><a href="#">Register professional T.I<span class="icon"> </span></a></li>
									<li><a href="#">Web Staticstics<span class="icon stat"> </span></a></li>
									<li><a href="excluir-filme.php">Delete Customer<span class="icon msg"> </span></a></li>
									<li><a href="editar-filme.php">Update Client<span class="icon signout"> </span></a></li>
							</ul>
					</div>
			</div>
			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
			<!-----end-script---->
			<!----end-wrapper-demo----->
			<!-----start-copyright---->
			<div class="copy-right">
					<p>Template by <a href="https://www.linkedin.com/in/willian-pachinski-087439102/" target="_blank">Willian Pachinski</a> </p>
			</div>
			<!-----end-copyright---->
			<!----end-body------->
	</body>
</html>