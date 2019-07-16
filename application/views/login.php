<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ayobantu CMS</title>

	<link href="<?=base_url().'css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?=base_url().'css/custom.css'?>" rel="stylesheet">
	<script src="<?=base_url().'js/jquery.min.js'?>"></script>

</head>
<body id="loginPage">

<div class="container login-box effect7">
	<div class="imglogo">
		<img src="<?=base_url().'images/ablogo.png'?>" />
		<br />
		<br />
		<h6>Management Console</h6>
	</div>
	<br />

	<form role="form" action="<?=base_url().'En/login'?>" method="post">
		<fieldset>
			<div class="form-group">
				<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="Password" name="password" type="password" value="">
			</div>
			<div class="checkbox">
				<label>
					<p class="message"><?=$error_login?></p>
				</label>
			</div>
			<!-- <a href="En/main_dash">Bypass</a> -->
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</fieldset>
	</form>
</div><!-- /.row -->	

<script src="<?=base_url().'js/bootstrap.min.js'?>"></script>
</body>
</html>