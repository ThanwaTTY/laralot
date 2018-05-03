  <aside class="main-sidebar">
    <section class="sidebar">
      
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
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

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>

				<!-- #account-summary -->
				<div id="account-summary">
					<ul>
						<li><span class="prop">ชื่อ:</span><span id="">{{auth()->user()->username}}</span></li>
						<li><span class="prop">ระดับ:</span>
						@if(auth()->user()->level == 1)
						<span id="">Admin</span>
						@elseif(auth()->user()->level == 2)
						<span id="">Pathner</span>
						@elseif(auth()->user()->level == 3)
						<span id="">Super Senior</span>
						@elseif(auth()->user()->level == 4)
						<span id="">Senior</span>
						@elseif(auth()->user()->level == 5)
						<span id="">Master</span>
						@elseif(auth()->user()->level == 6)
						<span id="">Agent</span>
						@elseif(auth()->user()->level == 7)
						<span id="">Member</span>
						@endif
						</li>
						<li><span class="prop">เครดิต:</span><span id="max_credit">{{number_format(auth()->user()->credit,2)}}</span></li>
						<li><span class="prop">ใช้ไป:</span><span id="used_credit">0</span></li>
						<li><span class="prop">เหลือ:</span><span id="credit_balance">0</span></li>
						<li><span class="prop">ได้เสีย:</span><span id="cash_balance">0</span></li>
						<li><span class="prop">สมาชิก:</span><span id="member_count"></span></li>
						<li><span class="prop">ออนไลน์:</span><span id="member_online">0</span></li>
					</ul>
				</div><!-- /#account-summary -->
			</div>

      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>รายการแทง</span>
           <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="#" class"listlotpoint" id="listlotpoint"><i class="fa fa-circle-o"></i> ดูของรวม / คาดคะเนได้เสีย</a></li>
            <li><a href="#" class"listlotuser" id="listlotuser"><i class="fa fa-circle-o"></i> ดูของ สมาชิก/ประเภท</a></li>
            <li><a href="#" class"listresult" id="listresult"><i class="fa fa-circle-o"></i> รอผลเดิมพัน</a></li>
            <li><a href="#" class"settingof" id="settingof"><i class="fa fa-circle-o"></i> ตั้งค่าการรับของ</a></li>
            <li><a href="#" class"settingtype" id="settingtype"><i class="fa fa-circle-o"></i> ตั้งค่ารับของแยกตามชนิด</a></li>
            <li><a href="#" class"cancellot" id="cancellot"><i class="fa fa-circle-o"></i> ยกเลิก โพย/รายการแทง</a></li>
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
            <li><a href="/members/create"><i class="fa fa-circle-o"></i> เพิ่มสมาชิก</a></li>
            <li><a href="/members/edit"><i class="fa fa-circle-o"></i> ข้อมูลทั่วไป/เก็บของ</a></li>
            <li><a href="/user/high-low-number"><i class="fa fa-circle-o"></i> ขั้นต่ำ/สูงสุด/สูงสุดต่อเลข</a></li>
            <li><a href="/user/commission"><i class="fa fa-circle-o"></i> อัตราจ่าย/คอมมิชชั่น</a></li>
            <li><a href="/user/open-close-lottery"><i class="fa fa-circle-o"></i> เปิด-ปิด หวย/อัตราจ่าย</a></li>
            <li><a href="#" class"memberonline" id="memberonline"><i class="fa fa-circle-o"></i> สมาชิกออนไลน์</a></li>
            <li><a href="#" class"listkeep" id="listkeep"><i class="fa fa-circle-o"></i> รายการเก็บของ / อั้น</a></li>
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
            <li><a href="#" class"chitmanagement" id="chitmanagement"><i class="fa fa-circle-o"></i> จัดการโพย</a></li>
            <li><a href="#" class"settinguser" id="settinguser"><i class="fa fa-circle-o"></i> ตั้งค่าสมาชิก</a></li>
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
            <li><a href="#" class"userreport" id="userreport"><i class="fa fa-circle-o"></i> แพ้-ชนะ สมาชิก/ประเภท</a></li>
            <li><a href="#" class"winlossreport" id="winlossreport"><i class="fa fa-circle-o"></i> แพ้-ชนะ สุทธิ</a></li>
            <li><a href="/report/jackpot"><i class="fa fa-circle-o"></i> รายการที่ถูกรางวัล</a></li>
            <li><a href="/report/resultjackpot"><i class="fa fa-circle-o"></i> ผลการออกรางวัล</a></li>
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
            <li><a href="/money/manage-balance"><i class="fa fa-circle-o"></i> จัดการยอด</a></li>
            <li><a href="/money/history"><i class="fa fa-circle-o"></i> ประวัติการเงิน</a></li>
          </ul>
        </li>
				@if(auth()->user()->helper == 0)
				 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>ผู้ช่วย</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/helper/managehelper"><i class="fa fa-circle-o"></i> จัดการผู้ช่วย</a></li>
            <li><a href="/show/helper"><i class="fa fa-circle-o"></i> ผู้ช่วย</a></li>
          </ul>
        </li>
				@elseif(auth()->user()->helper == 1)
				 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>ไม่มีสิทธิ์ใช้งานหน้าผู้ช่วย</span>
          </a>
        </li>
				@endif
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
				<li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>เปิด/ปิด หวย</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/datelotto/create"><i class="fa fa-circle-o"></i> เพิ่มงวดหวย</a></li>
          </ul>
        </li>
      </ul>
    </section>
	</aside>
	
	
