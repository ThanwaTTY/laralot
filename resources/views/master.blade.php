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
 <!-- <link rel="stylesheet" href="/css/custom.css">  -->
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
  <div class="content-wrapper  table-responsive listresult listlotpoint listlotuser settingof settingtype cancellot memberonline listkeep 
  chitmanagement settinguser userreport winlossreport jackpot resultjackpot manage-balance history createmember datelotto membersedit">
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


  <script type="text/javascript">
  
    
    
			$('#listresult').on('click',function(){			
            $("li").removeClass('active')
        	  $('#listresultlink').addClass('active');
        $.get("{{ URL::to('/listlottery/listresult') }}",function(data){
        
          $('.listresult').empty().html(data);
          
        });
			});

      $('#listlotpoint').on('click',function(){
          $("li").removeClass('active')
          $('#listlotpointlink').addClass('active');
        $.get("{{ URL::to('/listlottery/listlotpoint') }}",function(data){
         
          $('.listlotpoint').empty().html(data);
        });
      });

      $('#listlotuser').on('click',function(){
          $("li").removeClass('active');
          $('#listlotuserlink').addClass('active');
        $.get("{{ URL::to('/listlottery/listlotuser') }}",function(data){
          
          $('.listlotuser').empty().html(data);
        });
      });

      $('#settingof').on('click',function(){
          $("li").removeClass('active');
          $('#settingoflink').addClass('active');
        $.get("{{ URL::to('/listlottery/settingof') }}",function(data){
          
          $('.settingof').empty().html(data);
        });
      });

      $('#settingtype').on('click',function(){
          $("li").removeClass('active');
          $('#settingtypelink').addClass('active');
        $.get("{{ URL::to('/listlottery/settingtype') }}",function(data){
          
          $('.settingtype').empty().html(data);
        });
      });

      $('#cancellot').on('click',function(){
          $("li").removeClass('active');
          $('#cancellotlink').addClass('active');
        $.get("{{ URL::to('/listlottery/cancellot') }}",function(data){

          $('.cancellot').empty().html(data);
        });
      });

      $('#createmember').on('click', function(){
          $("li").removeClass('active');
          $('#creatememberlink').addClass('active');
        $.get(" {{ URL::to('/members/create') }} " ,function(data){

          $('.createmember').empty().html(data);
        });
      });

      $('#membersedit').on('click', function(){
        $.get(" {{ URL::to('/members/edit') }} ",function(data){
          $('.membersedit').empty().html(data);
        });
      });

      $('#memberonline').on('click' , function(){
        $.get(" {{URL::to('/user/useronline')}}",function(data){
          $('.memberonline').empty().html(data);
        });
      });

      $('#listkeep').on('click',function(data){
        $.get(" {{ URL::to('/user/listkeep')}} ", function(data){
          $('.listkeep').empty().html(data);
        });
      });

      $('#chitmanagement').on('click',function(){
        $.get(" {{ URL::to('/shopmanagement/chitmanagement') }} " ,function(data){
          $('.chitmanagement').empty().html(data);
        });
      });

      $('#settinguser').on('click',function(){
        $.get(" {{ URL::to('/shopmanagement/settinguser') }} ",function(data){
          $('.settinguser').empty().html(data);
        });
      });

      $('#userreport').on('click',function(){
        $.get(" {{ URL::to('/report/userreport') }} ",function(data){
          $('.userreport').empty().html(data);
        });
      });

      $('#winlossreport').on('click', function(){
        $.get(" {{ URL::to('/report/winlossreport') }} ",function(data){
          $('.winlossreport').empty().html(data);
        });
      });

      $('#jackpot').on('click',function(){
        $.get(" {{ URL::to('/report/jackpot') }} ",function(data){
          $('.jackpot').empty().html(data);
        });
      });

      $('#resultjackpot').on('click',function(){
        $.get(" {{ URL::to('/report/resultjackpot') }} ",function(data){
          $('.resultjackpot').empty().html(data);
        });
      });

      $('#manage-balance').on('click',function(){
        $.get(" {{ URL::to('/money/manage-balance') }} " ,function(data){
          $('.manage-balance').empty().html(data);
        });
      });

      $('#history').on('click',function(){
        $.get(" {{ URL::to('/money/history') }} " ,function(data){
          $('.history').empty().html(data);
        });
      });

      $('#datelotto').on('click',function(){
        $.get(" {{ URL::to('/datelotto/create') }} ", function(data){
          $('.datelotto').empty().html(data);
        });
      });

      $('.getdatelot').on('click', function(){    
      
        var id = $(this).attr("vaule");
        // console.log(id);
        $.get('/listlottery/listlotpoint2', {
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
            //////////////////////////////////////////////
            $("#com_1").html(response.comtop3);
            $("#com_2").html(response.combottom3);
            $("#com_3").html(response.comtod3);
            $("#com_4").html(response.comtop2);
            $("#com_5").html(response.combottom2);
            $("#com_6").html(response.comtod2);
            $("#com_7").html(response.comtop1);
            $("#com_8").html(response.combottom1);
            //////////////////////////////////////////////
            $("#take_1").html(response.taketop3);
            $("#take_2").html(response.takebottom3);
            $("#take_3").html(response.taketod3);
            $("#take_4").html(response.taketop2);
            $("#take_5").html(response.takebottom2);
            $("#take_6").html(response.taketod2);
            $("#take_7").html(response.taketop1);
            $("#take_8").html(response.takebottom1);
            //////////////////////////////////////////////
            $("#pay_1").html(response.paytop3);
            $("#pay_2").html(response.paybottom3);
            $("#pay_3").html(response.paytod3);
            $("#pay_4").html(response.paytop2);
            $("#pay_5").html(response.paybottom2);
            $("#pay_6").html(response.paytod2);
            $("#pay_7").html(response.paytop1);
            $("#pay_8").html(response.paybottom1);
            /////////////////////////////////////////////
          }

          console.log(response.buytop3);
          console.log(response.lotto.name);
          $('#navbar-game-title').html(response.lotto.name);
          $('#lottodate').html(response.lotto.name);
        });

      });
      
     
  </script>
  
  
  
<script src="/dist/js/demo.js"></script>

  

</body>
</html>
