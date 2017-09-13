 <header class="main-header" id="main-header">
    <!-- Logo -->
    {{--  <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>  --}}
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      {{--  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>  --}}

      <div class="navbar-custom-menu ">
        <ul class="nav navbar-nav">
          <li id="unclick" class="border"><span>ชนิดหวย </span><i class="fa fa-arrow-right"></i></span></li>
          <li class="dropdown messages-menu border">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-list-alt"> รัฐบาลไทย</i>
              {{--  <span class="label label-success">4</span>  --}}
            </a>
            <ul class="dropdown-menu bg-info border-right" id="lot">
              <li id="headbox" class="header"><b>รัฐบาล</b></li>
              
              <li>

            </ul>
          </li>
            <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu border">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-calendar"> งวดวันที่ {{ date('d M Y')}}</i>
              {{--  <span class="label label-warning">1</span>  --}}
            </a>
            <ul class="dropdown-content">
              <a href="#">Link 1</a>
            </ul>
          </li>

          <li class="border"><a href="#about">About</a></li>

        </ul>
      </div>
    </nav>
  </header>