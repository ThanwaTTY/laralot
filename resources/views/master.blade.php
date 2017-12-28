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
  <link rel="stylesheet" href="/css/customtopmenu.css">
  
  <script language="JavaScript" type="text/javascript">
    function sivamtime() {
    now=new Date();
    day=(now.getDate());
    mounths = new Array(12);
      mounths[0] = "มกราคม";
      mounths[1] = "กุมภาพันธ์";
      mounths[2] = "มีนาคม";
      mounths[3] = "เมษายน";
      mounths[4] = "พฤษภาคม";
      mounths[5] = "มิถุนายน";
      mounths[6] = "กรกฏาคม";
      mounths[7] = "สิงหาคม";
      mounths[8] = "กันยายน";
      mounths[9] = "ตุลาคม";
      mounths[10] = "พฤศจิกายน";
      mounths[11] = "ธันวาคม";
    mounth = mounths[(now.getMonth())];
    year =(now.getFullYear()+543);

      hour=now.getHours();
      min=now.getMinutes();
      sec=now.getSeconds();
    if (day<=9) { day="0"+day; }
    if (min<=9) { min="0"+min; }
    if (sec<=9) { sec="0"+sec; }
    //if (hour>12) { hour=hour-12; add="pm"; }
    //else { hour=hour; add="am"; }
    //if (hour==12) { add="pm"; }

    //time = ((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;
    time = "วันที่ " + day + " " + mounth + " " + year + " " + "เวลา " + ((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " ";

    if (document.getElementById) { theTime.innerHTML = time; }
    else if (document.layers) {
    document.layers.theTime.document.write(time);
    document.layers.theTime.document.close(); }

    setTimeout("sivamtime()", 1000);
    }
    window.onload = sivamtime;

  </script>
 
</head>

<body class="hold-transition skin-blue sidebar-mini">
{{-- @include('nev-bar-top-menu') --}}

<div class="wrapper">

    <header class="main-header" style="background-color: #3c8dbc; ">
    <!-- Logo -->
      <div class="logo">
          <div>
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
              </a>
          </div>
      </div>
    </header>
@include('nev-bar-top-menu')
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
<script language="JavaScript" type="text/javascript">
  $(function(){
    $('.getdatelot').on('click', function(){    
      
      var id = $(this).attr("vaule");
     // console.log(id);
      $.get('/listlottery/test', {
        id
      }).done(function(response){
        if(response.tickets){
          console.log(response.tickets[0].id);
          $("#buy_1").html(response.buytop3);
          $("#buy_2").html(response.buybottom3);
          $("#buy_3").html(response.buytod3);
          $("#buy_4").html(response.buytop2);
          $("#buy_5").html(response.buybottom2);
          $("#buy_6").html(response.buytod2);
          $("#buy_7").html(response.buytop1);
          $("#buy_8").html(response.buybottom1);
          $("#com_1").html(response.comtop3);
        }
        console.log(response.lotto.name);
        $('#navbar-game-title').html(response.lotto.name);
      });

      });
    });
 
  </script>
</body>
</html>
