<html lang="th">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="utf-8">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=1366, initial-scale=1.0">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/plugins/select2/select2.min.css">
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> --}}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

  {{-- <link rel="stylesheet" href="/css/custom2.css"> --}}
  <link rel="stylesheet" href="/css/top-custom.css">
  <link rel="stylesheet" href="/css/customtopmenu_member.css">
  <link rel="stylesheet" href="/css/custom_member.css">
  <link rel="stylesheet" href="/css/custom_member2.css">
  <link rel="stylesheet" href="/css/new_custom.css">
  
  
  {{-- <script language="JavaScript" type="text/javascript">
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

  </script> --}}
  

  @yield('head')



</head>
<body class="no-skin">
{{-- @include('nev-bar-top-menu_member') --}}
  <!-- #section:basics/navbar.layout -->
{{-- <div id="navbar" class="navbar navbar-default h-navbar" style="background: #4897d8;height: 10px;">
  <div class="navbar-container container" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <span class="hidden-sm hidden-lg">&nbsp;</span>
    </div>

    <!-- #section:basics/navbar.dropdown -->
    <div class="navbar-buttons navbar-header inline-block pull-right" role="navigation">
      <ul class="nav ace-nav hidden-xs hidden-sm" style="">
        <li class="white right-padding-10 hidden-xs hidden-sm hidden-md">
          ชนิดหวย <i class="fa fa-arrow-right"></i>
        </li>

        <li class="grey dropdown-fix">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <i class="fa fa-book"></i>
            <span id="navbar-game-type-title">
              รัฐบาลไทย
            </span>
          </a>

          <style>
            .dropdown-menu.dropdown-caret:before,
            .dropdown-menu.dropdown-caret:after {
              visibility: hidden;
            }
          </style>

          <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="user-game-type-select" style="transform: translate(-20%, 0);">
            <li>
              <table class="table" id="select-game-type-table">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                <tbody>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">รัฐบาล</th>
                  </tr>              
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="1">รัฐบาลไทย</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวย ธกส.</th>
                  </tr>                                      
                  <tr>
                    <td>
                      <a href="#" class="game-type-item" data-id="39">หวย ธกส. (BAAC1)</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="110">หวย ธกส. (BAAC2)</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวยหุ้นไทย</th>
                  </tr>                                      
                  <tr> 
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="2">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="111">หุ้นไทยเปิดเช้าคู่ 2</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="112">หุ้นไทยเปิดเช้าคู่ 3</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="113">หุ้นไทยเปิดเช้าคู่ 4</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="114">หุ้นไทยเปิดเช้าคู่ 5</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="115">หุ้นไทยเปิดเช้าคู่ 6</a>
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="116">หุ้นไทยเปิดเช้าคู่ 7</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="117">หุ้นไทยเปิดเช้าคู่ 8</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="118">หุ้นไทยเปิดเช้าคู่ 9</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="119">หุ้นไทยเปิดเช้าคู่ 10</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="3">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="4">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="124">หุ้นไทยเปิดบ่ายคู่ 2</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="125">หุ้นไทยเปิดบ่ายคู่ 3</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="126">หุ้นไทยเปิดบ่ายคู่ 4</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="127">หุ้นไทยเปิดบ่ายคู่ 5</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="128">หุ้นไทยเปิดบ่ายคู่ 6</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="129">หุ้นไทยเปิดบ่ายคู่ 7</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="130">หุ้นไทยเปิดบ่ายคู่ 8</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="131">หุ้นไทยเปิดบ่ายคู่ 9</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="132">หุ้นไทยเปิดบ่ายคู่ 10</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="137">ไทยก่อนปิดเย็น Pre-Close</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="5">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวยลาว</th>
                  </tr>                                      
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="139">หวยลาว วันพุธ</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวยมาเลย์ (Magnum4D)</th>
                  </tr>                                      
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="25">หวยมาเลย์ วันพุธ</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="22">หวยมาเลย์ วันเสาร์</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="24">หวยมาเลย์ วันอาทิตย์</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวยหุ้นต่างประเทศ</th>
                  </tr>                                      
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="6">นิเคอิ รอบเช้า</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="11">หุ้นจีน รอบเช้า</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="7">ฮั่งเส็ง รอบเช้า</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="12">หุ้นไต้หวัน</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="13">หุ้นเกาหลี</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="8">นิเคอิ รอบบ่าย</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-dark" data-id="14">หุ้นจีน รอบบ่าย</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="9">ฮั่งเส็ง รอบบ่าย</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="15">หุ้นสิงคโปร์</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="16">หุ้นอินเดีย</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="17">หุ้นอียิปต์</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="18">หุ้นรัสเซีย</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="19">หุ้นอังกฤษ</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="20">หุ้นเยอรมัน</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-dark bg-green3" data-id="10">หุ้นดาวน์โจน</a>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="6" class="bg-blue2 text-white">หวยเวียดนาม</th>
                  </tr>                                      
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="73">ฮานอย Hà Nội</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="74">คั้ญฮหว่า Khánh Hòa</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="75">กอนตูม Kon Tum</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="76">ฟู้เอียน Phú Yên</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="77">เถื่อเทียน-เว้ Thừa Thiên Huế</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="78">ดั๊กลัก Đắc Lắc</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item" data-id="79">กว๋างนาม Quảng Nam</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="80">ดานัง Đà Nẵng</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="82">บิ่ญดิ่ญ Bình Định</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="83">กว๋างบิ่ญ Quảng Bình</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="84">กว๋างจิ Quảng Trị</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="85">ซาลาย Gia Lai</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item" data-id="86">นิญถ่วน Ninh Thuận</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="87">ดั๊กนง Đắc Nông</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="88">กว๋างหงาย Quảng Ngãi</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="89">เกียนซาง Kiên Giang</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="90">เลิมด่ง Lâm Đồng</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="91">เตี่ยนซาง Tiền Giang</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item" data-id="92">กำเมา Cà Mau</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="93">ด่งท้าบ Đồng Tháp</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="94">โฮจิมินห์ Thanh pho Ho Chi Minh</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="95">บักเลียว Bạc Liêu</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="96">เบ๊นแจ Bến Tre</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="97">หวงเต่า Vũng Tàu</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="98">เกิ้นเทอ Cần Thơ</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="99">ด่งนาย Đồng Nai</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item bg-green3" data-id="100">ซ้อกจัง Sóc Trăng</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="101">อานชาง An Giang</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="102">บิ่ญถ่วน Bình Thuận</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="103">เต็ยนิญ Tây Ninh</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="#" class="game-type-item" data-id="104">บิ่ญเชือง Bình Dương</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="105">จ่าวิญ Trà Vinh</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="106">หวิญล็อง Vĩnh Long</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="107">บิ่ญเฟื้อก Bình Phước</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="108">เหิ่วชาง Hậu Giang</a>
                    </td>
                    <td>
                      <a href="#" class="game-type-item" data-id="109">ล็องอาน Long An</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>
          </ul>
        </li>

        <li class="bg-green2 side-padding-10">
          <span class="white">
            <i class="fa fa-calendar"></i>
              งวดวันที่ 16 ตุลาคม 2560
          </span>
        </li>
        <li class="game-result bg-purple side-padding-10">
          <table class="white">
            <tbody>
              <tr>
                <td class="align-center">3 ตัวบน<br><span class="bigger-110 bolder">–</span></td>
              </tr>
            </tbody>
          </table>
        </li>
        <li class="game-result bg-purple side-padding-10">
            <table class="white">
              <tbody>
                <tr>
                  <td class="align-center">2 ตัวบน<br><span class="bigger-110 bolder">–</span></td>
                </tr>
              </tbody>
            </table>
        </li>
        <li class="game-result bg-purple side-padding-10">
              <table class="white">
                <tbody>
                  <tr>
                      <td class="align-center">2 ตัวล่าง<br><span class="bigger-110 bolder">–</span></td>
                  </tr>
                </tbody>
              </table>
        </li>
        <li class="game-result bg-purple side-padding-10">
            <table class="white">
              <tbody>
                <tr>
                  <td class="align-center">3 ตัวล่าง<br><span class="bigger-110 bolder">–</span></td>
                </tr>
              </tbody>
            </table>
        </li>
        <li class="bg-light-blue side-padding-10">
          <span class="white dropdown-toggle">
            <i class="ace-icon fa fa-user"></i>{{auth()->user()->name}}
          </span>
        </li>
        <li>
          <div class="global-clock"><span id="theTime"></span></div>
        </li>
      </ul>
    </div>

  </div>
</div> --}}

<div class="main-container container" id="main-container">
    <div id="sidebar" class="sidebar h-sidebar responsive" style="margin-top: 0">
        <ul class="nav nav-list">
        </ul>
    </div>

    <div class="main-content">

      <div class="page-content">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2" id="user-sidebar">
              <div class="img-logo"><img src="http://via.placeholder.com/160x100/626d71" alt="..."></div>
              <div id="sidebar-box" class="widget-box no-margin-top no-border col-xs-6 col-sm-6 col-md-12">
                <div class="widget-body">
                  <div class="widget-main mobile-bet-hide" id="summary-box">
                    <table class="table no-margin white bolder" id="summary-table" style="border: 0;">
                      <tbody>
                        <tr>
                          <th>
                            <span class="member-credit">
                              <i class="fa fa-calendar"></i>
                                  วันที่ 16 ตุลาคม 2560
                            </span>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    
            <div id="sidebar-box" class="widget-box no-margin-top no-border col-xs-6 col-sm-6 col-md-12">
              <div class="widget-body">
                <div class="widget-main mobile-bet-hide" id="summary-box">
                  <table class="table no-margin white bolder" id="summary-table" style="border: 0;">
                    <tbody>
                      <tr><th><span class="bolder bigger-110">ยอดรวม</span></th></tr>
                      <tr><th>เครดิต</th><td id="member-credit" class="align-right">1000</td></tr>
                      <tr><th>ได้เสียสุทธิ</th><td id="member-bet" class="align-right">0</td></tr>
                      <tr><th>ยอดคงเหลือ</th><td id="member-available" class="align-right">0</td></tr>
                      <tr class="select-game-hide"><th>&nbsp;</th><td></td></tr>
                      <tr class="select-game-hide"><th colspan="2"><span class="bolder bigger-110">ยอดรัฐบาลไทย</span></th></tr>
                      <tr class="select-game-hide"><th>ยอดพนัน</th><td id="member-total-bet" class="align-right">0</td></tr>
                      <tr class="select-game-hide"><th>ค่าคอม</th><td id="member-total-com" class="align-right">0</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12 no-padding select-game-hide">
              <div class="widget-body">
                <div class="widget-main mobile-bet-hide" id="summary-box">
                  <table class="table no-margin white bolder" id="summary-table" style="border: 0;">
                    <tbody>
                      <tr><th><span class="bolder bigger-110">เลขปิดรับ</span></th></tr>
                      <tr><td id="member-credit" class="align-left">3 ตัวบน</td></tr>
                      <tr><td id="member-bet" class="align-left">123 456 789</td></tr>
                      {{-- <tr><td id="member-available" class="align-left">456</td></tr> --}}
                      <tr class="select-game-hide"><th>&nbsp;</th><td></td></tr>
                      <tr class="select-game-hide"><td colspan="2"><span class="bolder bigger-110">3 ตัวล่าง</span></td></tr>
                      <tr class="select-game-hide"><td id="member-total-bet" class="align-left">870</td></tr>
                      {{-- <tr class="select-game-hide"><td id="member-total-com" class="align-right">0</td></tr> --}}
                    </tbody>
                  </table>
                </div>
              </div>

              {{-- <div id="close-box-container">
                <div id="close-box">
                  <h4 class="align-center">
                      หมายเลขปิดรับ<br>
                      รัฐบาลไทย
                      <a href="#" id="close-num-refresh">
                        <i class="ace-icon fa fa-refresh"></i>
                      </a>
                    <div class="space-4"></div>
                  </h4>
                  <div class="widget-box transparent no-margin-top">
                    <div class="widget-body">
                      <div class="widget-main" id="close-num-box"><span class="no-closed">ไม่มีหมายเลขปิดรับ</span></div>
                    </div>
                  </div>
                </div>
                
              </div> --}}
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-10" id="user-content">
            @yield('content')
            
            <div id="content" class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <button class="btn btn-primary active">หวยรัฐบาล</button>
                  <button class="btn btn-primary">หวยหุ้นไทย</button>
                  <button class="btn btn-primary">หวยลาว</button>
                  <button class="btn btn-primary">หวยมาเล</button>
                  <button class="btn btn-primary">หวยต่างประเทศ</button>
                  <button class="btn btn-primary">หวยเวียดนาม</button>
                  <button class="btn btn-primary">ทายผล</button>
                  <button class="btn btn-primary">รายการแทง</button>
                  <button class="btn btn-primary">รายงานการเงิน</button>
                  <button class="btn btn-primary">ตรวจผลรางวัล</button>
                  <button class="btn btn-primary">อัตราจ่าย</button>
                </div>
                <div class="col-md-3 pull-left">
                  <li>
                    <button data-toggle="dropdown" href="#" id="user_dropdown" class="dropdown-toggle color-font btn btn-primary">
                      <i class="ace-icon fa fa-user"></i>
                          {{auth()->user()->username}}
                    </button>

                    <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="user_dropdown">
                      <li>
                        <a href="/" class="ajax">
                          <i class="ace-icon fa fa-home"></i>
                          หน้าแรก
                        </a>
                      </li>

                      <li>
                        <a href="/password" class="ajax">
                          <i class="ace-icon fa fa-cog"></i>
                          เปลี่ยนรหัสผ่าน
                        </a>
                      </li>

                      <li class="divider"></li>

                      <li>
                        <a href="/admin/logout">
                          <i class="ace-icon fa fa-power-off"></i>
                          Logout
                        </a>
                      </li>
                    </ul>
                  </li>
                  {{-- <div class="row">
                    <div class="col-md-6"><p>{{ auth()->user()->name }}</p> <a href="#">เปลี่ยนรหัสผ่า่น</a></div>
                    <div class="col-md-6"><a href="#" class="btn btn-primary btn-sm pull-right" id="btn-logout">ออกจากระบบ</a></div>
                  </div> --}}
                </div>
              </div>
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
              <div id="content"><div id="bet-div">
                  <input id="merge-import" name="" type="hidden" value="">

                
                <div class="col-sm-12 col-md-5">
                  <div class="alert-info padding-10">
                    <label class="deep-blue bolder bot-margin-10">
                      รัฐบาลไทย
                    </label>
                    <b>3 ตัวท้าย</b>
                    <br>

                    <input id="bet_type_group" name="bet_type_group" type="hidden" value="1">

                    <table>
                      <tbody>
                        <tr>
                          <td><label for="payout_id" class="bolder right-padding-5">อัตราจ่าย:</label></td>
                          <td>
                              <select name="payout_id" id="payout" class="ac">
                                <option value="5">หวยรัฐ 70</option>
                              </select>
                              <a href="/play/datauser" target="_blank" class="bigger-110">ดูรายละเอียด</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="space-4"></div>
                    <div class="checkbox clearfix">
                      <label for="down3-tode2">
                        <input name="down3_tode2" type="checkbox" class="" id="down3-tode2" checked="checked">
                        <span class="lbl"> 3 ตัวล่าง, 2 ตัวโต๊ด</span>
                      </label>

                      <div class="pull-right">
                        <label for="door">
                          <input name="door" type="checkbox" class="" id="door">
                          <span class="lbl"> 6 ประตู / 19 ประตู</span>
                        </label>
                        <br>

                        <label for="bulk">
                          <input name="bulk" type="checkbox" class="" id="bulk">
                          <span class="lbl"> แทงเร็ว</span>
                        </label>
                      </div>
                    </div>
                    <div class="input-group">
                      <!-- <span class="input-group-addon"><i class="fa fa-chevron-left"></i></span> -->
                      <select id="bill-number"><option value="0">โพยที่ 2 - รหัส 749461</option></select>
                      <!-- <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span> -->
                    </div>
                  
                  <div id="bet-table-wrapper" class="clearfix">
                    <table class="table table-bordered table-border-dark no-margin jquery-hide" id="special-bet-table">
                      <thead class="thin-border-bottom">
                        <tr class="bg-blue">
                          <th colspan="5" class="ac bigger-120">6 ประตู / 19 ประตู กรอกข้อมูลแล้วกดถูก <i class="fa fa-check"></i></th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bg-blue">
                          <td><input type="text" class="form-control input-sm bolder" id="special-num" maxlength="3" placeholder="เลข"></td>
                          <td><input type="text" class="form-control input-sm" id="special-up" maxlength="9" placeholder="บน"></td>
                          <td><input type="text" class="form-control input-sm" id="special-down" maxlength="9" placeholder="ล่าง"></td>
                          <td><input type="text" class="form-control input-sm" id="special-tode" maxlength="9" placeholder="โต๊ด"></td>
                          <td class="ac am">
                            <a href="#" class="btn-ok" tabindex="-1"><i class="fa fa-check green bigger-125"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <table class="table table-bordered table-border-dark no-margin jquery-hide" id="bulk-table">
                      <thead class="thin-border-bottom">
                        <tr class="bg-blue">
                          <th colspan="5" class="align-center bigger-120">
                            กรอกเลขและราคา แล้วกด <i class="fa fa-check"></i><br>
                            วิธีใช้: <a href="https://youtu.be/nlQv8Xjh7-Y" target="_blank">คลิก YouTube</a>
                          </th>
                        </tr>
                      </thead>

                      <tbody class="bg-blue">
                        <tr>
                          <td rowspan="2">
                            <textarea class="form-control input-sm bolder" id="bulk-row" placeholder="1. กรอกเลขรายบรรทัด 2. หรือคั่นด้วยวรรค คอมม่า จุด ก็ได้เช่นกัน" rows="8"></textarea>
                            <div class="invisible" style="width: 78px"></div>
                          </td>
                          <td><input type="text" class="form-control input-sm" id="bulk-col1" maxlength="9" placeholder="บน"></td>
                          <td><input type="text" class="form-control input-sm" id="bulk-col2" maxlength="9" placeholder="ล่าง"></td>
                          <td><input type="text" class="form-control input-sm" id="bulk-col3" maxlength="9" placeholder="โต๊ด"></td>
                          <td class="align-center align-middle" height="40px">
                            <div style="width: 50px !important;">
                              <label for="close-bulk-ok"><input type="checkbox" id="close-bulk-ok"> ใช้ต่อ</label>
                            </div><br>

                            <a href="#" class="btn-bulk-ok" tabindex="-1"><i class="fa fa-check green bigger-125"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <b class="bolder deep-blue">&lt;&lt; 3 ตัวท้าย &gt;&gt;</b>
                <form id="formpatbet">
                    {{ csrf_field() }}
                    <table class="table table-bordered table-border-dark no-margin" id="bet-table" style="table-layout: fixed;">
                      <thead class="thin-border-bottom">
                        <tr>
                          <th class="ac bigger-120">หมายเลข</th>
                          <th class="ac bigger-120">บน</th>
                          <th class="ac bigger-120">ล่าง</th>
                          <th class="ac bigger-120">โต๊ด</th>
                          <th class="ac bigger-120 last">ลบ</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr id="num-status">
                          <!-- &#8211; -->
                            <td class="ac am bigger-120 bolder" id="betable-number" data-clearable="1">–</td>
                            <td class="ac am bigger-120" id="betable-0">–</td>
                            <td class="ac am bigger-120" id="betable-1">–</td>
                            <td class="ac am bigger-120" id="betable-2">–</td>
                            <td></td>
                        </tr>
                        @for($i = 1; $i <=100; $i++)
                            <tr id="tr-row-{{$i}}" class="all-tr {{($i<6)?'':' jquery-hide'}}" data-check-num="">
                            <td><div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                                  {{$i}}
                                </div>
                                <input type="text" name="num[]" class="input-all input-number form-control input-sm bolder" id="input-number-row-{{$i}}" maxlength="3">
                            </td>
                            <td class="input-icon input-icon-right" id="td-0-row-{{$i}}">
                                <input type="text" name="top[]" id="input-0-row-{{$i}}" class="input-all input-0 form-control input-sm" maxlength="9">
                                <i class="ace-icon fa fa-check green success hidden"></i>
                                <i class="ace-icon fa fa-times red error hidden"></i>
                            </td>
                            <td class="input-icon input-icon-right" id="td-1-row-{{$i}}">
                                <input type="text" name="bottom[]" id="input-1-row-{{$i}}" class="input-all input-1 form-control input-sm" maxlength="9">
                                <i class="ace-icon fa fa-check green success hidden"></i>
                                <i class="ace-icon fa fa-times red error hidden"></i>
                            </td>
                            <td class="input-icon input-icon-right" id="td-2-row-{{$i}}">
                                <input type="text" name="tod[]" id="input-2-row-{{$i}}" class="input-all input-2 form-control input-sm" maxlength="9">
                                <i class="ace-icon fa fa-check green success hidden"></i>
                                <i class="ace-icon fa fa-times red error hidden"></i>
                            </td>
                            <td class="ac am">
                              <a href="#" class="btn-delete" tabindex="-{{$i}}"><i class="fa fa-times red bigger-175"></i></a>
                            </td>
                        </tr>
                        @endfor
                        
                      </tbody>
                      <tfoot>
                        <tr class="ac">
                          <td colspan="99" id="bet-table-foot" style="position: relative">
                            <div class="space-4"></div>

                            <div class="form-group clearfix">
                              <label for="remark" class="control-label col-xs-4 col-xs-push-1">หมายเหตุ:</label>
                              <input type="text" id="remark" class="form-control col-xs-4 col-xs-push-1 max-width-150">
                            </div>

                            <div class="bigger-150">รวม <span id="bill-sum">0</span> บาท</div>

                                          <input type="hidden" name="allow_dupe" value="0" id="allow-dupe">
                            <button type="button" class="btn btn-primary no-border" id="btn-submit-bet" data-text="ยืนยันการแทง">ยืนยันการแทง</button>
                            <button type="button" class="btn btn-danger no-border" id="btn-clear-bet">เริ่มต้นใหม่</button>

                            <div class="space-4"></div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                </form>
                    <div class="space-8"></div>

                    <div id="failed-table" class="jquery-hide">
                      <div>
                        <span class="red bigger-120 bolder pull-left">รายการที่แทงไม่ได้</span>
                        <a href="#" class="bigger-120 bolder pull-right" id="copy">คัดลอก</a>
                      </div>

                      <table class="table table-bordered table-border-dark no-margin" id="bet-table">
                        <thead class="thin-border-bottom">
                          <tr>
                            <th class="ac bigger-120">หมายเลข</th>
                            <th class="ac bigger-120">บน</th>
                            <th class="ac bigger-120">ล่าง</th>
                            <th class="ac bigger-120">โต๊ด</th>
                          </tr>
                        </thead>

                        <tbody></tbody>
                      </table>
                    </div>

                    <div class="space-8"></div>
                    <div class="space-8"></div>
                  </div>
                </div>
              </div>

              <script>
                  var current_bet_type_group = 1;
                var current_bet_types = {"3":[1,1,1],"2":[1,1,1],"1":[1,1]};
              </script>

              <script>
              </script>

              <div class="col-sm-12 col-md-5 no-padding-left">
                <div class="tabbable">
                  <ul class="nav nav-tabs tab-color-blue">
                    <li class="active"><a data-toggle="tab" href="#brief">รายการอย่างย่อ</a></li>
                    <li><a data-toggle="tab" href="#summary">รายการสรุปรวม</a></li>
                    <li><a data-toggle="tab" href="#import-tool" id="tab-import">เครื่องมือนำเข้าข้อมูล</a></li>
                  </ul>

                  <div class="space-4"></div>

                  <div class="tab-content no-border no-padding">
                    <div id="brief" class="tab-pane in active">

                      <div class="input-group">
                        <!-- <span class="input-group-addon"><i class="fa fa-chevron-left"></i></span> -->
                        <select id="bill-number"><option value="0">โพยที่ 2 - รหัส 749461</option></select>
                        <!-- <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span> -->
                      </div>

                      <div class="space-4"></div>

                      <b>
                        โพยที่ 2<span id="bill-id" class="deep-blue"></span>
                        เวลา 19:32<span id="bill-time" class="deep-blue"></span>
                        หมายเหตุ: <span id="bill-remark" class="deep-blue"></span><br>
                        อัตราจ่าย หวย 70<span id="bill-payout" class="deep-blue"></span>
                        การแทง 3 ตัวท้าย<span id="bill-btg-name" class="deep-blue"></span>
                      </b>

                      <table class="table table-bordered table-border-dark table-striped no-margin" id="brief-table">
                        <thead class="thin-border-bottom">
                          <tr>
                            <!-- <th class="ac">โพย#</th>
                            <th class="ac">เวลา</th>
                            <th class="ac">อัตราจ่าย</th> -->
                            <th class="ac">ประเภท</th>
                            <th class="ac">หมายเลข</th>
                            <th class="ac bundle-col" style="display: none;">จำนวน<br>(ตัว)</th>
                            <th class="ac">จำนวน<br>(บาท)</th>
                            <th class="ac">ส่วนลด</th>
                            <th class="ac">สถานะ</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                          <tr>
                            <td class="ac bolder" colspan="2">รวม</td>
                            <td class="align-right bolder bundle-col" id="sum-bundle" style="display: none;">0.00</td>
                            <td class="align-right bolder" id="sum-qty">0.00</td>
                            <td class="align-right bolder" id="sum-com">0.00</td>
                            <td class="align-right bolder" id="sum-total">0.00</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>

                    <div id="summary" class="tab-pane">
                      <b>
                        การแทง <span id="bill-sum-table-name" class="deep-blue"></span>
                      </b>

                      <table class="table table-bordered table-border-dark table-striped no-margin" id="sum-table">
                        <thead class="thin-border-bottom">
                          <tr>
                            <th class="ac">ลำดับ</th>
                            <th class="ac">หมายเลข</th>
                            <!-- <th class="ac">บน</th>
                            <th class="ac">ล่าง</th>
                            <th class="ac">โต๊ด</th> -->
                            <th class="ac dynamic">บน</th>
                            <th class="ac dynamic">ล่าง</th>
                            <th class="ac dynamic">โต๊ด</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                          <tr>
                            <td class="ac bolder" colspan="2">รวม</td>
                            <!-- <td class="ac bolder" id="sum-1">0</td>
                            <td class="ac bolder" id="sum-2">0</td>
                            <td class="ac bolder" id="sum-3">0</td> -->
                            <td class="ac bolder dynamic" id="sum-1">0</td>
                            <td class="ac bolder dynamic" id="sum-2">0</td>
                            <td class="ac bolder dynamic" id="sum-3">0</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>

                    <div id="import-tool" class="tab-pane">
                      <div class="alert alert-success jquery-hide" id="import-success">นำเข้าเสร็จเรียบร้อย</div>
                      <div class="alert alert-danger jquery-hide" id="import-error">ไม่สามารถนำเข้าข้อมูลได้ กรุณาตรวจสอบข้อมูลอีกครั้ง</div>
                      <textarea name="import-text" id="import-text" rows="10" class="form-control width-100"></textarea>
                      <div class="space-4"></div>
                      <div>
                        <button class="btn btn-primary btn-sm no-border" id="btn-submit-import">นำเข้าข้อมูล</button>
                        <button class="btn btn-danger btn-sm no-border" id="btn-clear-import">ล้างข้อมูล</button>
                      </div>
                      <div class="space-4"></div>
                      <p class="no-margin-bottom">
                        <span class="red bolder">ข้อตกลง</span>
                        เครื่องมือนำเข้าข้อมูล เป็นเพียงเครื่องมือช่วยในการกรอกข้อมูลลงฟอร์มการแทงเพื่อให้ผู้ใช้งานทำงานได้รวดเร็วขึ้น
                        ผู้ใช้ต้องตรวจสอบข้อมูลทุกครั้ง ก่อนยืนยันการแทง วิธีการใช้เครื่องมือนำเข้าข้อมูล
                        <a href="/import-help" target="_blank">ดูที่นี่</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>




            <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div><!-- /.main-content -->
    </div>
</div><!-- /.main-container -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse display" style="right: 20px; bottom: 20px;">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-300"></i>
    </a>



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

{{-- <script src="/js/inspect.js"></script> --}}
{{-- <script src="/js/jquery.numeric.js"></script> --}}
{{-- <script src="/js/customjs.js"></script> --}}

  {{-- <script src="/js/jquery.history.js"></script>
  <script src="/js/jquery.numeric.js"></script>
  <script src="/js/moment.min.js"></script>
  <script src="/js/daterangepicker.js"></script>
  <script src="/js/cookies.min.js"></script>
  <script src="/js/spin.js"></script>
  <script src="/js/jquery.spin.js"></script> --}}
  {{-- <script src="/js/main.js"></script> --}}
  {{-- <script src="/js/main.js?t=201504112248"></script> --}}

  {{-- <script src="/js/user.main.js"></script> --}}

  {{-- <script src="/js/user.main.js?t=201504112248"></script> --}}

  {{-- <script src="/js/jquery.maskedinput.min.js"></script> --}}



<!-- Page script -->
{{-- <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'วันนี้': [moment(), moment()],
            'เมื่อวาน': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '3 วันล่าสุด': [moment().subtract(2, 'days'), moment()],
            '7 วันล่าสุด': [moment().subtract(6, 'days'), moment()],
            '30 วันล่าสุด': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script> --}}

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