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
  <link rel="stylesheet" href="/css/top-custom.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">


<!-- menutop -->
@include('nev-bar-top-menu2')
<!-- menutopend -->
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
    <!-- Header Navbar: style can be found in header.less -->
    {{-- <nav class="navbar navbar-static-top"> --}}
      <!-- Sidebar toggle button-->


      {{-- <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
            <li class="white right-padding-10">
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

          <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="game-type-select" style="transform: translate(-50%, 0);">
            <li>
                <table class="table" id="select-game-type-table">
                    <tbody>
                        <tr class="odd">
                            <th colspan="6" class="bg-blue2">รัฐบาล</th>
                        </tr>
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="1">รัฐบาลไทย</a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <th colspan="6" class="bg-blue2">หวย ธกส.</th>
                        </tr>
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="39">หวย ธกส. (BAAC1)</a>
                            </td>  
                            <td>
                                <a href="#" class="game-type-item" data-id="110">หวย ธกส. (BAAC2)</a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <th colspan="6" class="bg-blue2">หวยหุ้นไทย</th>
                        </tr>  
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="2">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="111">หุ้นไทยเปิดเช้าคู่ 2</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="112">หุ้นไทยเปิดเช้าคู่ 3</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="113">หุ้นไทยเปิดเช้าคู่ 4</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="114">หุ้นไทยเปิดเช้าคู่ 5</a>
                            </td>   
                            <td>
                                <a href="#" class="game-type-item" data-id="115">หุ้นไทยเปิดเช้าคู่ 6</a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="116">หุ้นไทยเปิดเช้าคู่ 7</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="117">หุ้นไทยเปิดเช้าคู่ 8</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="118">หุ้นไทยเปิดเช้าคู่ 9</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="119">หุ้นไทยเปิดเช้าคู่ 10</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="3">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="4">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="124">หุ้นไทยเปิดบ่ายคู่ 2</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="125">หุ้นไทยเปิดบ่ายคู่ 3</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="126">หุ้นไทยเปิดบ่ายคู่ 4</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="127">หุ้นไทยเปิดบ่ายคู่ 5</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="128">หุ้นไทยเปิดบ่ายคู่ 6</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="129">หุ้นไทยเปิดบ่ายคู่ 7</a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="130">หุ้นไทยเปิดบ่ายคู่ 8</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="131">หุ้นไทยเปิดบ่ายคู่ 9</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="132">หุ้นไทยเปิดบ่ายคู่ 10</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="137">ไทยก่อนปิดเย็น Pre-Close</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="5">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <th colspan="6" class="bg-blue2">หวยลาว</th>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="138">หวยลาว วันจันทร์</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="139">หวยลาว วันพุธ</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="140">หวยลาว วันพฤหัส</a>
                            </td>

                        </tr>
                        <tr class="even">
                            <th colspan="6" class="bg-blue2">หวยมาเลย์ (Magnum4D)</th>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="25">หวยมาเลย์ วันพุธ</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="22">หวยมาเลย์ วันเสาร์</a>
                            </td>  
                            <td>
                                <a href="#" class="game-type-item bg-green3" data-id="24">หวยมาเลย์ วันอาทิตย์</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <th colspan="6" class="bg-blue2">หวยหุ้นต่างประเทศ</th>
                        </tr>                                      
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="6">นิเคอิ รอบเช้า</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="11">หุ้นจีน รอบเช้า</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="7">ฮั่งเส็ง รอบเช้า</a>
                            </td>                      
                            <td>
                                <a href="#" class="game-type-item" data-id="12">หุ้นไต้หวัน</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="13">หุ้นเกาหลี</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="8">นิเคอิ รอบบ่าย</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="14">หุ้นจีน รอบบ่าย</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="9">ฮั่งเส็ง รอบบ่าย</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="15">หุ้นสิงคโปร์</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="16">หุ้นอินเดีย</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item bg-green3" data-id="17">หุ้นอียิปต์</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="18">หุ้นรัสเซีย</a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item" data-id="19">หุ้นอังกฤษ</a>
                            </td>      
                            <td>
                                <a href="#" class="game-type-item" data-id="20">หุ้นเยอรมัน</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="10">หุ้นดาวน์โจน</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <th colspan="6" class="bg-blue2">หวยเวียดนาม</th>
                        </tr>
                        <tr class="odd">
                            <td>
                                <a href="#" class="game-type-item bg-green3" data-id="73">ฮานอย Hà Nội</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item bg-dark" data-id="74">คั้ญฮหว่า Khánh Hòa</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item bg-dark" data-id="75">กอนตูม Kon Tum</a>
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
                        <tr class="even">
                            <td>
                                <a href="#" class="game-type-item" data-id="79">กว๋างนาม Quảng Nam</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="80">ดานัง Đà Nẵng</a>
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
                        <tr class="odd">
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
                                <a href="#" class="game-type-item bg-dark" data-id="89">เกียนซาง Kiên Giang</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="90">เลิมด่ง Lâm Đồng</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item bg-dark" data-id="91">เตี่ยนซาง Tiền Giang</a>
                            </td>
                        </tr>
                        <tr class="even">
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
                        <tr class="odd">              
                            <td>
                                <a href="#" class="game-type-item" data-id="98">เกิ้นเทอ Cần Thơ</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="99">ด่งนาย Đồng Nai</a>
                            </td>
                            <td>
                                <a href="#" class="game-type-item" data-id="100">ซ้อกจัง Sóc Trăng</a>
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
                        <tr class="even">
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

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
            </li>











          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div> --}}
    {{-- </nav> --}}
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- menu -->
  @include('nev-bar2')
  <!-- menuend -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->
@yield('footer')

</body>
</html>
