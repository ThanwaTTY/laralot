<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>สมัคสมาชิก สำหรับ Test ระบบ</title>
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
  <style>
  .login-box, .register-box {
    width: 50%;
    margin: 7% auto;
}
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    {{-- @if($errors->all())
        <div class="box-body">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>            
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                @foreach($errors->all() as $message)
                    {{ $message }}. <br>
                @endforeach
            </div>
        </div>        
    @endif --}}
  <div class="register-logo">
    <a href="/admin"><b>สมัคสมาชิกสำหรับ</b>Test ระบบ</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

        <form action="/register" method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail1">ชื่อผู้ติดต่อ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ใส่ชื่อ - นามสกุลของท่าน" name="name" value="{{ old('fullname') }}">
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label>เบอร์โทรศัพท์</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 ', '+99 99 99 9999[9]']" 
                                data-mask="" name="phone"  value="{{ old('phone') }}">
                            </div>
                            <span class="help-block">{{ $errors->first('phone') }}</span>
                            <!-- /.input group -->
                        </div>

                        {{--  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">อีเมลของท่าน</label>
                            <input type="email" class="form-control" id="email" placeholder="ใส่อีเมลของท่าน" name="email" value="{{ old('email') }}">
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        </div>  --}}

                        <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">username</label>
                            <input type="Text" class="form-control" id="username" placeholder="โปรดตั้ง username ที่ใช้ในการล็อคอิน" name="username"  value="{{ old('username') }}">
                            <span class="help-block">{{ $errors->first('username') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password" placeholder="โปรดตั้ง password ที่ใช้ในการล็อคอิน" name="password" value="{{ old('password') }}">
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        </div>


                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('credit') ? ' has-error' : '' }}">
                            <label for="credit">credit</label>
                            <input type="Text" class="form-control" id="credit" placeholder="กรุณาใส่จำนวนเงิน" name="credit" value="{{ old('credit') }}">
                            <span class="help-block">{{ $errors->first('credit') }}</span>
                        </div>

                        
                        <div class="form-group {{ $errors->has('bank') ? ' has-error' : '' }}">
                            <label for="bank">สถานะ</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="level" value="{{ old('bank') }}">
                                    <option value="1">Admin</option>
                                </select>
                            <span class="help-block">{{ $errors->first('bank') }}</span>  
                        </div>

                        

                        <!-- /.box-body -->                      
                    </div>

                </div>
            <!-- /.row -->
            </div>
            <div class="box-footer">
                <table width="45%" align="center">
                    <tr>   
                        <td width="40%"><input type="submit" class="btn btn-block btn-primary" value="บันทึก"></input></td>
                        <td> </td>
                        <td width="40%"><input type="reset" class="btn btn-block btn-warning" value="ยกเลิก"></input></td>
                    </tr>
                </table>
                
            </div>
        </form>

    {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> --}}

    <a href="/adminLSM/login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    //$(".select2").select2();


    //Money Euro
    $("[data-mask]").inputmask();


  });
</script>
</body>
</html>
