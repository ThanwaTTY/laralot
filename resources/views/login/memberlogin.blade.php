<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form using HTML5 and CSS3</title>
  
  
  
      <link rel="stylesheet" href="/../memberlogin/css/style.css">
<style>
#content form input[type="reset"] {
    background: rgb(254,231,154);
    background: -moz-linear-gradient(top, rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
    background: -webkit-linear-gradient(top, rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: -o-linear-gradient(top, rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: -ms-linear-gradient(top, rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    background: linear-gradient(top, rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border-radius: 30px;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    -o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    border: 1px solid #D69E31;
    color: #85592e;
    cursor: pointer;
    float: left;
    font: bold 15px Helvetica, Arial, sans-serif;
    height: 35px;
    margin: 20px 0 35px 15px;
    position: relative;
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    width: 120px;
}
#content form input[type="reset"]:hover {
    background: rgb(254,193,81);
    background: -moz-linear-gradient(top, rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
    background: -webkit-linear-gradient(top, rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: -o-linear-gradient(top, rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: -ms-linear-gradient(top, rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    background: linear-gradient(top, rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
}

</style>
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
</head>

<body>
  <body>
<div class="container">
	<section id="content">
        @if(session()->get('massage'))
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
		<form action="/login" method="POST">
        {{ csrf_field() }}
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<input type="reset" value="Reset" />
                
				{{-- <a href="#">Lost your password?</a> --}}
				{{-- <a href="#">Register</a> --}}
			</div>
		</form><!-- form -->
		{{-- <div class="button">
			<a href="#" width="100px">Download source file</a>
		</div><!-- button --> --}}
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="/../memberlogin/js/index.js"></script>

</body>
</html>
