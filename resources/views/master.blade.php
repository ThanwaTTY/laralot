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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<style>
  #lot {
      position: absolute;
      right: -48px;
      height: 1000%;
      width: 1000%;
  }
  #headbox {
    background-color: #3c8dbc;
    padding: 15px 10px;
  }
  #main-header {
    background-color: #3c8dbc;
  }
  #unclick {
      background: rgba(0,0,0,0.0);
      color: #f6f6f6;
      Cursor:Default;
  }
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
      padding: 3px;
      line-height: 1.42857143;
      vertical-align: top;
      border-top: 1px solid #ddd;
  }
  .sidebar .sidebar-shortcuts-large {
      line-height: 45px;
  }
  .bot-margin-3 {
      margin-bottom: 13px !important;
      margin-left: 18px !important;

  }

  .bot-margin-3 i {
      font-size: 28px;
  }

  .line-button {

  }
  .boder-right {
  border: 1px solid black;
  }
  li.border {
    border-right:1px solid black;
  }
  #unclick {
    padding: 15px;
    color:white;
  }


  .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
  }

  .dropdown {
      position: relative;
      display: inline-block;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 100%;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .dropdown:hover .dropdown-content {
      display: block;
  }

  .dropdown:hover .dropbtn {
      background-color: #3e8e41;
  }

.sidebar-shortcuts-large bot-margin-3 {

  width: 20px;
}

#icon-menu {
  background: white;
  height: 49px;
  width: 107%;
  border: 1px solid;
}

.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 0px;
    border: 1px solid;
    min-height: 49px;
    margin-left: -3px;
    margin-bottom: -12px;
}
.breadcrumb>li+li:before {
    padding: 0 5px;
    color: #ccc;
    content: ">";
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 0px;
    margin-bottom: 15px;
}

#text-primary {
    color: #337ab7;
    padding-bottom: 15px;
    border-bottom: 1px solid;
}
</style>

@include('nev-bar-top')
  <!-- Left side column. contains the logo and sidebar -->
@include('nev-bar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
