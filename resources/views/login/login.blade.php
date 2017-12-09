<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<b>LARALOT</b>
		</div>

		@if(session()->get('massagesuccess'))
		<div class="box">
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
			</div>
			<div class="callout callout-success">
				<h4>success!</h4>
				<p>{{ session()->get('massagesuccess') }}</p>
			</div>
		</div>
		@endif @if(session()->get('massage'))
		<div class="box">
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
			</div>
			<div class="callout callout-danger">
				<h4>Fail !</h4>

				<p>{{ session()->get('massage') }}</p>
			</div>
		</div>
		@endif
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="/admin/login" method="post">
				{{ csrf_field() }}
				<div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
					<input type="username" class="form-control" placeholder="Username" name="username" value="{{ Old('username') }}">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('username') }}</span>
				</div>
				<div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
					<input type="password" class="form-control" placeholder="Password" name="password" value="{{ Old('password') }}">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('password') }}</span>
				</div>
				<div class="row">
					<div class="col-xs-8">
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
						<a href="/register" class="btn btn-warning btn-block btn-flat">register</a>
					</div>
					<!-- /.col -->

				</div>
			</form>


		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.2.3 -->
	<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="../../plugins/iCheck/icheck.min.js"></script>



	<!-- AdminLTE App -->
	<script src="../../dist/js/app.min.js"></script>




	<script>
		$(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
	</script>
</body>

</html>