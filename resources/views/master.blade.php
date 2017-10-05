<!DOCTYPE html>
<html>
<head>

@yield('head')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
  <link rel="stylesheet" href="/css/top-custom.css">
  <link rel="stylesheet" href="/css/menu-custom.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
@include('nev-bar-top-menu')
<div class="wrapper">

{{-- 
@include('nev-bar-top') --}}
  <!-- Left side column. contains the logo and sidebar -->
@include('nev-bar')
{{-- @include('nev-bar2') --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  table-responsive">
@yield('content')
  </div>
  <!-- /.content-wrapper -->
  {{-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> --}}
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


@yield('footer')
<script>
$(function(){
  var li = $('a[href="'+location.pathname+'"]').parent();
  li.addClass('active');

  li.parent().parent().addClass('active');

  li.parent().parent().parent().parent().addClass('active');
  li.parent().parent().parent().parent().parent().parent().addClass('active');
})
</script>
</body>
</html>
