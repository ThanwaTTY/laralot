  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div id="icon-menu" class="row">
        <div class="sidebar-shortcuts-large bot-margin-3" id="sidebar-shortcuts-large">
              <button class="btn btn-success btn-ajax" data-href="https://agent.superlot999.com/items/overall">
                <i class="ace-icon fa fa-table white"></i>
              </button>

              <button class="btn btn-info btn-ajax" data-href="https://agent.superlot999.com/users/edit1">
                <i class="ace-icon fa fa-users"></i>
              </button>

              <button class="btn btn-warning btn-ajax" data-href="https://agent.superlot999.com/reports/by-member">
                <i class="ace-icon fa fa-bar-chart-o"></i>
              </button>

              <button class="btn btn-danger btn-ajax" data-href="https://agent.superlot999.com/transfers">
                <i class="ace-icon fa fa-refresh"></i>
              </button>
        </div>
      </div>

      <div class="row" style="padding-top: 20px">
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">ชื่อ:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">palm</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">ระดับ:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">เอเย่นต์</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">เครดิต:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">ใช้ไป:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">เหลือ:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">ได้เสีย:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">สมาชิก:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
        <div class="col-md-12"style="padding-left: 0px;padding: 6px -1px;">
          <div class="col-md-5"><span style="float:right;color:white;">ออนไลน์:</span></div>
          <div class="col-md-7"><span style="float:left;color:white;">0</span></div>
        </div>
      </div>
        <li>
          
        </li>
      
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        {{-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> --}}
          {{-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>--}}
        {{-- </li>  --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>รายการแทง</span>
           <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="/listlottery/listlotpoint"><i class="fa fa-circle-o"></i> ดูของรวม / คาดคะเนได้เสีย</a></li>
            <li><a href="/listlottery/listlotuser"><i class="fa fa-circle-o"></i> ดูของ สมาชิก/ประเภท</a></li>
            <li><a href="/listlottery/listresult"><i class="fa fa-circle-o"></i> รอผลเดิมพัน</a></li>
            <li><a href="/listlottery/settingof"><i class="fa fa-circle-o"></i> ตั้งค่าการรับของ</a></li>
            <li><a href="/listlottery/settingtype"><i class="fa fa-circle-o"></i> ตั้งค่ารับของแยกตามชนิด</a></li>
            <li><a href="/listlottery/cancellot"><i class="fa fa-circle-o"></i> ยกเลิก โพย/รายการแทง</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>จัดการสมาชิก</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/user/adduser"><i class="fa fa-circle-o"></i> เพิ่มสมาชิก</a></li>
            <li><a href="/user/general"><i class="fa fa-circle-o"></i> ข้อมูลทั่วไป/เก็บของ</a></li>
            <li><a href="/user/high-low-number"><i class="fa fa-circle-o"></i> ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข</a></li>
            <li><a href="/user/commission"><i class="fa fa-circle-o"></i> อัตราจ่าย/คอมมิชชั่น</a></li>
            <li><a href="/user/open-close-lottery"><i class="fa fa-circle-o"></i> เปิด-ปิด หวย/อัตราจ่าย</a></li>
            <li><a href="/user/useronline"><i class="fa fa-circle-o"></i> สมาชิกออนไลน์</a></li>
            <li><a href="/user/listkeep"><i class="fa fa-circle-o"></i> รายการเก็บของ / อั้น</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tv (alias)"></i>
            <span>จัดการหน้าร้าน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> จัดการโพย</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> ตั้งค่าสมาชิก</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>รายการแพ้/ชนะ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/report/userreport"><i class="fa fa-circle-o"></i> แพ้-ชนะ สมาชิก/ประเภท</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> แพ้-ชนะ สุทธิ</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> รายการที่ถูกรางวัล</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> ผลการออกรางวัล</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-refresh"></i> <span>การเงิน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> จัดการยอด</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> ประวัติการเงิน</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-question"></i> <span>คู่มือการใช้งาน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> คู่มือการใช้งาน</a></li>
          </ul>
        </li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> --}}
        {{-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> --}}
        {{-- <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>