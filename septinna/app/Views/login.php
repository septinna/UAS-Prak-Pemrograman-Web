
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>desktop___2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" >
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/desktop___2.css') ?>">
		<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
		<!-- Add your custom HEAD content here -->

	</head>
	<body>
		<div id="content-container" >
			<div id="_bg__desktop___2"  ></div>
			<img src=" <?= base_url('assets/images/asset/bg_lgn.png') ?>" id="rectangle_20" />
           
			<div id="rectangle_6"  ></div>
			<div id="login_form" >
				Login Form
			</div>
			<div id="email__" >
				Email *
			</div>
			<div id="password__" >
				Password *
			</div>
			
			<div id="rectangle_7">
				<input type="text" id="email_input" name="email" placeholder="Enter your email">
			</div>
			<div id="rectangle_8">
				<input type="text" id="password_input" name="password" placeholder="Enter your password">
			</div>
			<button id="_rectangle_9_button" onclick="window.location.href='<?= site_url('dekstop_5') ?>'">
				<div id="_rectangle_9"></div>
				<div id="login">LOGIN</div>
			</button>
			<div id="rectangle_10"></div>
			<a id="_forgot_password___link" href="<?= site_url('forget') ?>" >
			<div id="_forgot_password__" >
				Forgot password ?
			</div>
			</a>
			<button id="_image_7_link" onclick="location.href='<?= site_url('index_view') ?>'">
				<img src="<?= base_url('assets/images/asset/back_lgn.png') ?>" id="_image_7" />
			</button>
		</div>
		
	</body>
</html>