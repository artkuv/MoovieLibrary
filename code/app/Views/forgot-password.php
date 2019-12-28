<?php
    $pageTitle = 'Forgot password';
    require_once 'layout/header.php';
?>

<div class="page">
	<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col col-login mx-auto">

				<form class="card" action="" method="post">

	<div class="card-body p-6">
		<div class="card-title">Forgot password</div>

		<p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
		<div class="form-group">
			<label class="form-label" for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		</div>
		<div class="form-footer">
			<button type="submit" class="btn btn-primary btn-block">Send me new password</button>
		</div>
	</div>
</form>
<div class="text-center text-muted">
	Forget it, <a href="/app/Views/login.php">send me back</a> to the sign in screen.
</div>
			</div>
		</div>
	</div>
</div>
</div>

</body>
</html>