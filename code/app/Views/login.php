<?php
    $pageTitle = 'Login';
    require_once 'layout/header.php';
?>

<div class="page">
	<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col col-login mx-auto">
				<form class="card" action="" method="post">

				<div class="card-body p-6">
					<div class="card-title">Login to your account</div>

					<div class="form-group">
						<label class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label class="form-label">
							Password
							<a href="/app/Views/forgot-password.php" class="float-right small">I forgot password</a>
						</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" />
							<span class="custom-control-label">Remember me</span>
						</label>
					</div>

					<div class="form-footer">
						<a href="/app/Views/main.php">
						<button type="submit" class="btn btn-primary btn-block">Sign in</button>
						</a>
					</div>
				</div>
				</form>

			<div class="text-center text-muted">
				Don't have account yet? <a href="/app/Views/register.php">Sign up</a>
			</div>
			</div>
		</div>
	</div>
</div>
</div>

</body>
</html>