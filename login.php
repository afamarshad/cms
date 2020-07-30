<?php
session_start();
$empty="";
	$emailMatched = "";
if(isset($_POST['form1']))
{
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	

	if(empty($_POST['email']) || empty($_POST['password']))
	{
		$empty = "Field empty!";
	}
	
	if(!preg_match($regex, $_POST['email']))
	{
		$emailMatched = "Email does not match the pattern";
	}

	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin - Login</title>

		<?php
			include("includes/headerlinks.php");

		?>
	
	</head>
	<body>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					<div class="panel-body">
						<form method="POST" id="form1" action="validate.php">
							<fieldset>
								<div class="form-group">
								<input class='form-control' placeholder='E-mail' name='email' id='email' data-validation="email">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" id="password" data-validation="alphanumeric">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me" id="remeber">Remember Me
									</label>
								</div>
								<div class="text-center">
									<button class="btn btn-primary" type="submit" name="submit">Login</button></fieldset>
								</div>
						</form>
					</div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row	 -->
	
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

		<script>
			$.validate({
				lang: 'en'
			});
		</script>
		
		
	</body>
</html>
