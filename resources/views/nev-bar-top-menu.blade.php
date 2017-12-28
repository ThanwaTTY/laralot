
<nav class="navbar navbar-default">
  {{-- <div class="container-fluid"> --}}
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{-- <a class="navbar-brand" href="#">Project name</a> --}}
    </div>



    <!-- #section:basics/navbar.dropdown -->
    <div id="navbar" class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
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

          <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="game-type-select" style="transform: translate(43%, 0);">
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

        <li class="green dropdown-fix">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <i class="fa fa-calendar"></i>
            <span id="navbar-game-title">
                งวดวันที่ 16 กันยายน 2560
            </span>
          </a>

          <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="game-select">
              {{--  <li><a href="#" class="game-item" data-id="25870">งวดทดสอบ</a></li>  --}}
              @foreach ($lottos as $lotto)
              <li><a vaule="{{$lotto->id}}" class="getdatelot" id="getdatelot">{{$lotto->name}}</a></li>
              @endforeach
          </ul>
        </li>

        <!-- #section:basics/navbar.user_menu -->
        <li class="light-blue dropdown-fix">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <i class="ace-icon fa fa-user"></i>
                {{auth()->user()->username}}
          </a>

          <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret" id="user-toggle-list">
            <li>
              <a href="/" class="ajax">
                <i class="ace-icon fa fa-home"></i>
                หน้าแรก
              </a>
            </li>

            <!-- <li>
              <a href="/rules" class="ajax">
                <i class="ace-icon fa fa-question-circle"></i>
                กฎและกติกา
              </a>
            </li> -->

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

        <li>
          <div id="global-clock" class="align-right inline-block pull-right">
            <span id="theTime"></span>
          </div>
          
        </li>

        <!-- /section:basics/navbar.user_menu -->
      </ul>
    </div>
</nav>
