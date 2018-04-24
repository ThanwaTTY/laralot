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
  <div class="content-wrapper  table-responsive listresult listlotpoint listlotuser settingof">
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
        $.get("{{ URL::to('/listlottery/listresult') }}",function(data){
          
          $('.listresult').empty().html(data);
          
        });
			});

      $('#listlotpoint').on('click',function(){
        $.get("{{ URL::to('/listlottery/listlotpoint') }}",function(data){
          
          $('.listlotpoint').empty().html(data);
        });
      });

      $('#listlotuser').on('click',function(){
        $.get("{{ URL::to('/listlottery/listlotuser') }}",function(data){
          
          $('.listlotuser').empty().html(data);
        });
      });

      $('#settingof').on('click',function(){
        $.get("{{ URL::to('/listlottery/settingof') }}",function(data){
          console.log(data);
          $('.settingof').empty().html(data);
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
      
      $('.getdatelot').on('click', function(){    
		
        var id = $(this).attr("vaule");
        // console.log(id);
        $.get('/listlottery/listlotuser2', {
          id
        }).done(function(response){
          $("tr.odd").remove();
          console.log(response);
          //console.log(response.usebet_s[20]);
          //for(var i=0;i<response.usebet_s.length;i++){
            //console.log("1111");
            $.each(response.data, function(key1, i) {
              console.log(response.agcom_s[i]);
              console.log(i)
              if(response.member_name[i]){
              $("#tbodyuser").append('	<tr class="odd"><td><a href="/'+response.memberlist_id[i]+"/list_id"
                +'" class="ajaxmember"><span class="span-name jquery-hide">'+response.member_name[i]
                +'()</span></a></td><td class="type" nowrap="">'+response.member_lavel[i].level
                +'</td><td class="align-right dark-blue bolder n2 bg-blue">'+response.usersum_s[i]
                +'</td><td class="align-right n2c"><span class="negative" id="out_1">'+response.usersum_s[i]
                +'<span></span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.usercom_s[i]
                +'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.usersumall[i]
                +'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsum_s[i]
                +'</span></span></td><td class="align-right n2c bg-yellow"><span class="negative"><span>'+response.agcom_s[i]
                +'</span></span></td><td class="align-right n2c bg-yellow"><span class="positive"><span>'+response.agsumall[i]
                +'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysum_s[i]
                +'</span></span></td><td class="align-right n2c"><span class="negative">-<span>'+response.companycom_s[i]
                +'</span></span></td><td class="align-right n2c"><span class="positive"><span>'+response.companysumall[i]
                +'</span></span></tr>');
                }

            });	
          $('#navbar-game-title').html(response.lotto.name);
          $('#namelotto').html(response.lotto.name);
          
          $('#agent').html(response.levellog);
          $('#agent2').html(response.levellog);
          ////////////////////////////////////////////////////////
          $('#sumtop3').html(response.sum_top3);
          $('#sumbottom3').html(response.sum_bottom3);
          $('#sumtod3').html(response.sum_tod3);
          $('#sumtop2').html(response.sum_top2);
          $('#sumbottom2').html(response.sum_bottom2);
          $('#sumtod2').html(response.sum_tod2);
          $('#sumtop1').html(response.sum_top1);
          $('#sumbottom1').html(response.sum_bottom1);
          ////////////////////////////////////////////////////////
          $('#comtop3').html(response.com_top3);
          $('#combottom3').html(response.com_bottom3);
          $('#comtod3').html(response.com_tod3);
          $('#comtop2').html(response.com_top2);
          $('#combottom2').html(response.com_bottom2);
          $('#comtod2').html(response.com_tod2);
          $('#comtop1').html(response.com_top1);
          $('#combottom1').html(response.com_bottom1);
          ////////////////////////////////////////////////////////
          $('#sumusertop3').html(response.sumusertop3);
          $('#sumuserbottom3').html(response.sumuserbottom3);
          $('#sumusertod3').html(response.sumusertod3);
          $('#sumusertop2').html(response.sumusertop2);
          $('#sumuserbottom2').html(response.sumuserbottom2);
          $('#sumusertod2').html(response.sumusertod2);
          $('#sumusertop1').html(response.sumusertop1);
          $('#sumuserbottom1').html(response.sumuserbottom1);
          ////////////////////////////////////////////////////////
          $('#sum_agtop3').html(response.sum_agtop3);
          $('#sum_agbottom3').html(response.sum_agbottom3);
          $('#sum_agtod3').html(response.sum_agtod3);
          $('#sum_agtop2').html(response.sum_agtop2);
          $('#sum_agbottom2').html(response.sum_agbottom2);
          $('#sum_agtod2').html(response.sum_agtod2);
          $('#sum_agtop1').html(response.sum_agtop1);
          $('#sum_agbottom1').html(response.sum_agbottom1);
          ////////////////////////////////////////////////////////
          $('#com_agtop3').html(response.com_agtop3);
          $('#com_agbottom3').html(response.com_agbottom3);
          $('#com_agtod3').html(response.com_agtod3);
          $('#com_agtop2').html(response.com_agtop2);
          $('#com_agbottom2').html(response.com_agbottom2);
          $('#com_agtod2').html(response.com_agtod2);
          $('#com_agtop1').html(response.com_agtop1);
          $('#com_agbottom1').html(response.com_agbottom1);
          ////////////////////////////////////////////////////////
          $('#sumag_top3').html(response.sumag_top3);
          $('#sumag_bottom3').html(response.sumag_bottom3);
          $('#sumag_tod3').html(response.sumag_tod3);
          $('#sumag_top2').html(response.sumag_top2);
          $('#sumag_bottom2').html(response.sumag_bottom2);
          $('#sumag_tod2').html(response.sumag_tod2);
          $('#sumag_top1').html(response.sumag_top1);
          $('#sumag_bottom1').html(response.sumag_bottom1);

          $('#sumcompany_top3').html(response.sumcompany_top3);
          $('#sumcompany_bottom3').html(response.sumcompany_bottom3);
          $('#sumcompany_tod3').html(response.sumcompany_tod3);
          $('#sumcompany_top2').html(response.sumcompany_top2);
          $('#sumcompany_bottom2').html(response.sumcompany_bottom2);
          $('#sumcompany_tod2').html(response.sumcompany_tod2);
          $('#sumcompany_top1').html(response.sumcompany_top1);
          $('#sumcompany_bottom1').html(response.sumcompany_bottom1);

          $('#comcompany_top3').html(response.comcompany_top3);
          $('#comcompany_bottom3').html(response.comcompany_bottom3);
          $('#comcompany_tod3').html(response.comcompany_tod3);
          $('#comcompany_top2').html(response.comcompany_top2);
          $('#comcompany_bottom2').html(response.comcompany_bottom2);
          $('#comcompany_tod2').html(response.comcompany_tod2);
          $('#comcompany_top1').html(response.comcompany_top1);
          $('#comcompany_bottom1').html(response.comcompany_bottom1);
        
          $('#sumtop3_company').html(response.sumtop3_company);
          $('#sumbottom3_company').html(response.sumbottom3_company);
          $('#sumtod3_company').html(response.sumtod3_company);
          $('#sumtop2_company').html(response.sumtop2_company);
          $('#sumbottom2_company').html(response.sumbottom2_company);
          $('#sumtod2_company').html(response.sumtod2_company);
          $('#sumtop1_company').html(response.sumtop1_company);
          $('#sumbottom1_company').html(response.sumbottom1_company);
        
          $('#sum_allmember').html(response.sumallmember);
          $('#sum_allcommember').html(response.sumallcommember);
          $('#sum_allcount').html(response.sumallcount);
          $('#sum_allag').html(response.sumallag);
          $('#sum_allcomag').html(response.sumallcomag);
          $('#sum_allagcount').html(response.sumallagcount);
          $('#sum_allcompany').html(response.sumallcompany);
          $('#sum_allcomcompany').html(response.sumallcomcompany);
          $('#sum_allcountcompany').html(response.sumallcountcompany);

          $('#sumallmember').html(response.sumallmember);
          $('#sumallcommember').html(response.sumallcommember);
          $('#sumallcount').html(response.sumallcount);
          $('#sumallag').html(response.sumallag);
          $('#sumallcomag').html(response.sumallcomag);
          $('#sumallagcount').html(response.sumallagcount);
          $('#sumallcompany').html(response.sumallcompany);
          $('#sumallcomcompany').html(response.sumallcomcompany);
          $('#sumallcountcompany').html(response.sumallcountcompany);

        });
  
		  });
  </script>
  
  
<script src="/dist/js/demo.js"></script>



</body>
</html>
