<?php if(!isset($RUN)) { exit(); } ?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Let's get smart</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="Javascript/Flot/excanvas.js"></script>
	<![endif]-->
	<link href="CSS/fonts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="CSS/style.css">
	<script src="Javascript/jQuery/jquery-1.7.2.min.js"></script>
	
	<script src="Javascript/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<script src="Javascript/Uniform/jquery.uniform.js"></script>
	<script src="Javascript/Tipsy/jquery.tipsy.js"></script>
	<script src="Javascript/Elastic/jquery.elastic.js"></script>
	<script src="Javascript/ColorPicker/colorpicker.js"></script>
	<script src="Javascript/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<script src="Javascript/kanrisha.js"></script>
	<script>
		function ChangeSch()
		{
			// var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
			var p_cat_id =$("#drpUserSch").val();        
			 $.post("modules/classes_nologin.php", {  ajax: "yes", sch : "yes", sch_id : p_cat_id ,nologin:"yes"},
			 function(data){
				 $('.clsx').html(data);
				 //document.getElementById('drpTests').style.width="150px";
			});
		}
	</script>
</head>
<body>
	<div class="top_panel">
		<div class="wrapper">
			<div class="user">
				<img src="Images/user_avatar.png" alt="user_avatar" class="user_avatar">
				<span class="label"><a href="login.php">Login</a></span>
			</div>
		</div>
	</div>

	<div class="wrapper contents_wrapper">
		<form method="post" action="signup.php">
		<div class="login">
			<div class="widget_header">
				<h4 class="widget_header_title wwIcon i_16_login">Sign Up</h4>
			</div>
			<div class="widget_contents lgNoPadding">
				<form action="index.html">
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Name</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Name" name="txtName" type="text" placeholder="Fullname"></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Email</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Name" name="txtEmail" type="text" placeholder="Email"></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">School</span></div>
					<div class="g_10 g_10M">
						<select id="drpUserSch" name="drpUserSch" class="simple_field" onchange="ChangeSch()">
							<?php echo $user_sch_options ?>
						</select>
						</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Class</span></div>
					<div class="g_10 g_10M clsx">
						<select id="drpUserCls" name="drpUserCls" class="simple_field" onchange="">
							<?php echo $user_cls_options ?>
						</select>
					</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">User*</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Username" name="txtLogin" type="text" placeholder="Username"></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Pass*</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Password" name="txtPassword" type="password" placeholder="*******">
					</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<center><span class="label" style="color:red;"><?php echo $msg ?></span></center>
					<div class="g_6"><input class="submitIt simple_buttons" name="btnSubmit" value="Register" type="submit">
					</div>
					<div class="clear"></div>
				</div>
				</form>
			</div>
		</div>
		</form>
	</div>
</body>
</html>