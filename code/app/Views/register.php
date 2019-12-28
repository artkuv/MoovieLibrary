<?php
    $pageTitle = 'Registration';
    require_once 'layout/header.php';
?>

<div class="page">
	<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col col-login mx-auto">

				<form class="card" action="" method="post">
	<div class="card-body p-6">
		<div class="card-title">Create new account</div>

		<div class="form-group">
			<label class="form-label">Name</label>
			<input type="text" class="form-control" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label class="form-label">Email address</label>
			<input type="email" class="form-control" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label class="form-label">Password</label>
			<input type="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<label class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" />
				<span class="custom-control-label">Agree the <a href="">terms and policy</a></span>
			</label>
		</div>

		<div class="form-footer">
			<a href="/app/Views/login.php">
			<button type="submit" class="btn btn-primary btn-block">Create new account</button>
			</a>
		</div>
	</div>
</form>

<div class="text-center text-muted">
	Already have account? <a href="/app/Views/login.php">Sign in</a>
</div>
			</div>
		</div>
	</div>
</div>
</div>

</body>
</html>