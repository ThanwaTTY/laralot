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
  
  <script language="JavaScript" type="text/javascript">


  </script>
  


  @yield('head')



</head>
<body class="no-skin">
{{-- @include('nev-bar-top-menu_member') --}}
  <!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default h-navbar" style="background: green;height: 10px;">
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
</div>

<div class="main-container container" id="main-container">
  <div id="sidebar" class="sidebar h-sidebar responsive" style="margin-top: 0">
	
    <ul class="nav nav-list">
      <li class="">
        <a href="#" data-url="/play/typelot" onclick="clickmenu('/play/typelot');return false;">
          <i class="menu-icon fa fa-book"></i>
          <span class="menu-text">เลือกชนิดหวย</span>
        </a>
      </li>
      <li class="active">
        <a href="/play/bet" data-url="/play/bet"  onclick="clickmenu('/play/bet');return false;" class="active">
          <i class="menu-icon fa fa-dashboard"></i>
          <span class="menu-text">ทายผล</span>
        </a>
      </li>
      <li class="">
        <a href="/play/reportlot" data-url="/play/reportlot"  onclick="clickmenu('/play/reportlot');return false;">
          <i class="menu-icon fa fa-credit-card"></i>
          <span class="menu-text">สรุปงวดหวย</span>
        </a>
      </li>
      <li class="">
        <a href="/play/checklot" data-url="/play/checklot"  onclick="clickmenu('/play/checklot');return false;">
          <i class="menu-icon fa fa-bar-chart-o"></i>
          <span class="menu-text">ตรวจผลรางวัล</span>
        </a>
      </li>
      <li class="">
        <a href="/play/datauser" data-url="/play/datauser"  onclick="clickmenu('/play/datauser');return false;">
          <i class="menu-icon fa fa-user"></i>
          <span class="menu-text">ข้อมูลผู้ใช้</span>
        </a>
      </li>
      <li class="">
        <a href="/play/reportmoney" data-url="/play/reportmoney"  onclick="clickmenu('/play/reportmoney');return false;">
          <i class="menu-icon fa fa-refresh"></i>
          <span class="menu-text">สรุปการเงิน</span>
        </a>
      </li>
      <li class="">
        <a href="/play/cancellist" data-url="/play/cancellist" onclick="clickmenu('/play/cancellist');return false;">
          <i class="menu-icon fa fa-times"></i>
          <span class="menu-text">ยกเลิกโพย</span>
        </a>
      </li>
      <li class="pull-right visible-md visible-lg">
        <a href="/logout" data-url="/logout">
          <i class="menu-icon fa fa-sign-out"></i>
          <span class="menu-text">ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </div>

    <div class="main-content">


            <div class="page-content">  
        <div class="space-4"></div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2" id="user-sidebar">
            <div id="sidebar-box" class="widget-box no-margin-top no-border col-xs-6 col-sm-6 col-md-12">
              <div class="widget-body">
                <div class="widget-main mobile-bet-hide" id="summary-box">
                  <table class="table no-margin white bolder" id="summary-table" style="border: 0;">
                    <tbody>
                      <tr><th><span class="bolder bigger-110">ยอดรวม</span></th></tr>
                      <tr><th>เครดิต</th><td id="member-credit" class="align-right">1,000</td></tr>
                      <tr><th>ได้เสียสุทธิ</th><td id="member-bet" class="align-right">-20</td></tr>
                      <tr><th>ยอดคงเหลือ</th><td id="member-available" class="align-right">980</td></tr>
                                              <tr class="select-game-hide"><th>&nbsp;</th><td></td></tr>
                        <tr class="select-game-hide"><th colspan="2"><span class="bolder bigger-110">ยอดรัฐบาลไทย</span></th></tr>
                        <tr class="select-game-hide"><th>ยอดพนัน</th><td id="member-total-bet" class="align-right">30</td></tr>
                        <tr class="select-game-hide"><th>ค่าคอม</th><td id="member-total-com" class="align-right">10</td></tr>
                                          </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12 no-padding select-game-hide">
              <div>
                                  <select id="bet_type_group_id" class="form-control" name="bet_type_grop_id"><option value="1">3 ตัวท้าย</option></select>
              </div>

              <div id="close-box-container"><div id="close-box">
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
                
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-10" id="user-content">
            <div class="alert alert-info invert-select-game-hide mobile-bet-hide hidden" id="news">
              <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
              </button>
                <b>ประกาศระบบ:</b> แจ้งข่าวเรื่องออกผลหวยหุ้นต่างๆ<br>
                เนื่องจากเดือนนี้ มีวันหยุดเทศกาล ในแต่ละประเทศแตกต่างกันไป และค่อนข้างเยอะ จึงทำให้ผลหุ้นต่างประเทศบางตัว อาจจะต้องโมฆะยกเลิก คืนเงิน เช่น หุ้นบางตัวเปิดตลาดแค่ครึ่งวันแล้วก็ปิดก่อนเวลาปกติ ทางบริษัทจึงต้องให้เป็นโมฆะ และคืนเงินกลับไป เป็นต้น<br>
                <br>
                สำหรับเอเย่นต์ที่ทำบัญชีราย สัปดาห์ จันทร์ - อาทิตย์  บริษัทจึงขอแนะนำให้ท่านทำบัญชีหลัง 12.00น. ของวันจันทร์เป็นต้นไป<br>
                <br>
                <br>
            </div>

            
              
  <div id="content"><div id="bet-div">
      <input id="merge-import" name="" type="hidden" value="">

    
    <div class="col-sm-12 col-md-5 no-padding-left">
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
                  <tr id="tr-row-{{$i}}" class="all-tr {{($i<6)?'':' jquery-hide'}}" data-check-num="{{$i}}">
                  <td><div class="line-number" style="color: #999; position: absolute; width: 75px; line-height: 32px; text-align: right; margin-left: -80px">
                        {{$i}}
                      </div>
                      <input type="text" name="num[]" class="input-all input-number form-control input-sm bolder" id="input-number-row-{{$i}}" maxlength="3">
                  </td>
                  <td class="input-icon input-icon-right" id="td-0-row-{{$i}}">
                      <input type="text" name="top[]" id="input-0-row-{{$i}}" class="input-all input-0 form-control input-sm input-amount" maxlength="9">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                  </td>
                  <td class="input-icon input-icon-right" id="td-1-row-{{$i}}">
                      <input type="text" name="bottom[]" id="input-1-row-{{$i}}" class="input-all input-1 form-control input-sm input-amount" maxlength="9">
                      <i class="ace-icon fa fa-check green success hidden"></i>
                      <i class="ace-icon fa fa-times red error hidden"></i>
                  </td>
                  <td class="input-icon input-icon-right" id="td-2-row-{{$i}}">
                      <input type="text" name="tod[]" id="input-2-row-{{$i}}" class="input-all input-2 form-control input-sm input-amount" maxlength="9">
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
                                {{--  <button type="sumbit" class="btn btn-primary no-border" id="btn-submit-bet" data-text="ยืนยันการแทง">ยืนยันการแทง</button>  --}}
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
          <select id="bill-number"><option value="986572">โพยที่ 1 - รหัส 986572</option></select>
          <!-- <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span> -->
        </div>

        <div class="space-4"></div>

        <b>
          โพยที่ <span id="bill-id" class="deep-blue">1</span>
          เวลา <span id="bill-time" class="deep-blue">14:54</span>
          หมายเหตุ: <span id="bill-remark" class="deep-blue"></span><br>
          อัตราจ่าย <span id="bill-payout" class="deep-blue">หวยรัฐ 70</span>
          การแทง <span id="bill-btg-name" class="deep-blue">3 ตัวท้าย</span>
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
          <tbody><tr class=""><td class="ac dark-blue">3 ตัวล่าง</td><td class="ac dark-blue bolder">325</td><td class="align-right bundle-col" style="display: none;">20.00</td><td class="align-right">20.00</td><td class="align-right">6.60</td><td class="align-right"><b><span class="negative">-13.40<span></span></span></b></td></tr><tr class=""><td class="ac dark-blue">3 ตัวบน</td><td class="ac dark-blue bolder">325</td><td class="align-right bundle-col" style="display: none;">10.00</td><td class="align-right">10.00</td><td class="align-right">3.30</td><td class="align-right"><b><span class="negative">-6.70<span></span></span></b></td></tr></tbody>
          <tfoot>
            <tr>
              <td class="ac bolder" colspan="2">รวม</td>
              <td class="align-right bolder bundle-col" id="sum-bundle" style="display: none;">30.00</td>
              <td class="align-right bolder" id="sum-qty">30.00</td>
              <td class="align-right bolder" id="sum-com">9.90</td>
              <td class="align-right bolder" id="sum-total"><span class="negative">-20.10<span></span></span></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div id="summary" class="tab-pane">
        <b>
          การแทง <span id="bill-sum-table-name" class="deep-blue">3 ตัวท้าย</span>
        </b>

        <table class="table table-bordered table-border-dark table-striped no-margin" id="sum-table">
          <thead class="thin-border-bottom">
            <tr>
              <th class="ac">ลำดับ</th>
              <th class="ac">หมายเลข</th>
              <!-- <th class="ac">บน</th>
              <th class="ac">ล่าง</th>
              <th class="ac">โต๊ด</th> -->
            <th class="ac dynamic">บน</th><th class="ac dynamic">ล่าง</th><th class="ac dynamic">โต๊ด</th></tr>
          </thead>
          <tbody><tr><td class="ac">1</td><td class="ac dark-blue bolder">325</td><td class="ac">10</td><td class="ac">20</td><td class="ac">0</td></tr></tbody>
          <tfoot>
            <tr>
              <td class="ac bolder" colspan="2">รวม</td>
              <!-- <td class="ac bolder" id="sum-1">0</td>
              <td class="ac bolder" id="sum-2">0</td>
              <td class="ac bolder" id="sum-3">0</td> -->
            <td class="ac bolder dynamic" id="sum-1">10</td><td class="ac bolder dynamic" id="sum-2">20</td><td class="ac bolder dynamic" id="sum-3">0</td></tr>
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

<script>
  
  //update_bet_list();

  $('#bet-table input:first').focus();
</script>


    </div><!-- /.main-container -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse display" style="right: 20px; bottom: 20px;">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-300"></i>
    </a>

      <!-- basic scripts -->
    {{-- 
      <!--[if !IE]> -->
      <script type="text/javascript">
        window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>"+"<"+"/script>");
      </script><script src="/assets/js/jquery.min.js"></script>

      <!-- <![endif]-->

      <!--[if IE]>
      <script type="text/javascript">
      window.jQuery || document.write("<script src='/assets/js/jquery1x.min.js'>"+"<"+"/script>");
      </script>
      <![endif]-->

      <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
      </script>
      <script src="/assets/js/bootstrap.min.js"></script>

      <!-- page specific plugin scripts -->

      <!-- ace scripts -->
      <script src="/assets/js/ace.min.js"></script>

      <script type="text/javascript"> ace.vars['base'] = '..'; </script>

      <script src="/assets/js/date-time/bootstrap-datepicker.min.js"></script>

      <script src="/js/jquery.history.js"></script>
      <script src="/js/jquery.numeric.js"></script>
      <script src="/js/moment.min.js"></script>
      <script src="/js/daterangepicker.js"></script>
      <script src="/js/cookies.min.js"></script>
      <script src="/js/spin.js"></script>
      <script src="/js/jquery.spin.js"></script>
      <script src="/js/main.js?t=201504112248"></script>
      <script src="/js/user.main.js?t=201504112248"></script>

      <script src="/js/jquery.maskedinput.min.js"></script>

          <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-47544296-2', 'auto');
          ga('send', 'pageview');
        </script>
      
      <script>
        var bet_type_groups = [{"id":1,"btg_name":"3 \u0e15\u0e31\u0e27\u0e17\u0e49\u0e32\u0e22","btg_num_len":3,"btg_col":3,"btg_bundle":0,"btg_active":1,"btg_position":1,"msg":""},{"id":2,"btg_name":"3 \u0e15\u0e31\u0e27\u0e2b\u0e31\u0e27","btg_num_len":3,"btg_col":3,"btg_bundle":0,"btg_active":1,"btg_position":2,"msg":"<img src=\"\/img\/finish\u0e2a\u0e32\u0e21\u0e15\u0e31\u0e27\u0e2b\u0e31\u0e27.jpg\">"},{"id":3,"btg_name":"2 \u0e15\u0e31\u0e27\u0e17\u0e49\u0e32\u0e22 (\u0e2b\u0e27\u0e22\u0e15\u0e31\u0e27)","btg_num_len":3,"btg_col":3,"btg_bundle":1,"btg_active":1,"btg_position":3,"msg":"<img src=\"\/img\/finish \u0e2b\u0e27\u0e22\u0e15\u0e31\u0e272\u0e15\u0e31\u0e27\u0e17\u0e49\u0e32\u0e22.jpg\">"},{"id":4,"btg_name":"2 \u0e15\u0e31\u0e27\u0e2b\u0e31\u0e27 (\u0e2b\u0e27\u0e22\u0e15\u0e31\u0e27)","btg_num_len":3,"btg_col":3,"btg_bundle":1,"btg_active":1,"btg_position":4,"msg":"<img src=\"\/img\/finish \u0e2b\u0e27\u0e22\u0e15\u0e31\u0e272\u0e15\u0e31\u0e27\u0e2b\u0e31\u0e27.jpg\">"},{"id":5,"btg_name":"\u0e2a\u0e39\u0e07-\u0e15\u0e48\u0e33","btg_num_len":1,"btg_col":6,"btg_bundle":0,"btg_active":1,"btg_position":5,"msg":"<img src=\"\/img\/finish \u0e2a\u0e39\u0e07\u0e15\u0e48\u0e33.jpg\">"},{"id":6,"btg_name":"\u0e04\u0e39\u0e48-\u0e04\u0e35\u0e48","btg_num_len":1,"btg_col":6,"btg_bundle":0,"btg_active":1,"btg_position":6,"msg":"<img src=\"\/img\/finish \u0e04\u0e39\u0e48\u0e04\u0e35\u0e48.jpg\">"},{"id":7,"btg_name":"4-5-6 \u0e15\u0e31\u0e27\u0e15\u0e23\u0e07","btg_num_len":6,"btg_col":3,"btg_bundle":0,"btg_active":1,"btg_position":7,"msg":""}];
        var bet_type_keys = [1,2,3,4,5,6,7,8,21,22,23,24,25,26,27,28,31,32,33,34,35,36,37,38,41,42,43,44,45,46,47,48,51,52,53,54,55,56,61,62,63,64,65,66,71,72,73];
        var bet_types = {"1":"3 \u0e15\u0e31\u0e27\u0e1a\u0e19","2":"3 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","3":"3 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","4":"2 \u0e15\u0e31\u0e27\u0e1a\u0e19","5":"2 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","6":"2 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","7":"\u0e27\u0e34\u0e48\u0e07\u0e1a\u0e19","8":"\u0e27\u0e34\u0e48\u0e07\u0e25\u0e48\u0e32\u0e07","21":"3 \u0e15\u0e31\u0e27\u0e1a\u0e19","22":"3 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","23":"3 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","24":"2 \u0e15\u0e31\u0e27\u0e1a\u0e19","25":"2 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","26":"2 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","27":"\u0e27\u0e34\u0e48\u0e07\u0e1a\u0e19","28":"\u0e27\u0e34\u0e48\u0e07\u0e25\u0e48\u0e32\u0e07","31":"3 \u0e15\u0e31\u0e27\u0e1a\u0e19","32":"3 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","33":"3 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","34":"2 \u0e15\u0e31\u0e27\u0e1a\u0e19","35":"2 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","36":"2 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","37":"\u0e27\u0e34\u0e48\u0e07\u0e1a\u0e19","38":"\u0e27\u0e34\u0e48\u0e07\u0e25\u0e48\u0e32\u0e07","41":"3 \u0e15\u0e31\u0e27\u0e1a\u0e19","42":"3 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","43":"3 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","44":"2 \u0e15\u0e31\u0e27\u0e1a\u0e19","45":"2 \u0e15\u0e31\u0e27\u0e25\u0e48\u0e32\u0e07","46":"2 \u0e15\u0e31\u0e27\u0e42\u0e15\u0e4a\u0e14","47":"\u0e27\u0e34\u0e48\u0e07\u0e1a\u0e19","48":"\u0e27\u0e34\u0e48\u0e07\u0e25\u0e48\u0e32\u0e07","51":"\u0e2b\u0e25\u0e31\u0e01\u0e41\u0e2a\u0e19","52":"\u0e2b\u0e25\u0e31\u0e01\u0e2b\u0e21\u0e37\u0e48\u0e19","53":"\u0e2b\u0e25\u0e31\u0e01\u0e1e\u0e31\u0e19","54":"\u0e2b\u0e25\u0e31\u0e01\u0e23\u0e49\u0e2d\u0e22","55":"\u0e2b\u0e25\u0e31\u0e01\u0e2a\u0e34\u0e1a","56":"\u0e2b\u0e25\u0e31\u0e01\u0e2b\u0e19\u0e48\u0e27\u0e22","61":"\u0e2b\u0e25\u0e31\u0e01\u0e41\u0e2a\u0e19","62":"\u0e2b\u0e25\u0e31\u0e01\u0e2b\u0e21\u0e37\u0e48\u0e19","63":"\u0e2b\u0e25\u0e31\u0e01\u0e1e\u0e31\u0e19","64":"\u0e2b\u0e25\u0e31\u0e01\u0e23\u0e49\u0e2d\u0e22","65":"\u0e2b\u0e25\u0e31\u0e01\u0e2a\u0e34\u0e1a","66":"\u0e2b\u0e25\u0e31\u0e01\u0e2b\u0e19\u0e48\u0e27\u0e22","71":"4 \u0e15\u0e31\u0e27\u0e15\u0e23\u0e07","72":"5 \u0e15\u0e31\u0e27\u0e15\u0e23\u0e07","73":"6 \u0e15\u0e31\u0e27\u0e15\u0e23\u0e07"};
      </script> --}}


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
<script src="/js/create.js"></script>




</body>
</html>