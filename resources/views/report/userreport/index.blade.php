<div class="breadcrumbs">
  <ul id="breadcrumbs" class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <!-- <a href="#">Home</a> -->
    </li>
    <li>			
    รายงานแพ้ชนะ 
    </li>
    <li>
        แพ้-ชนะ สมาชิก/ประเภท
    </li>
  </ul><!-- /.breadcrumb -->
  <span id="global-clock" class="pull-right"></span>
</div> 
    @if($errors->all())
        <div class="box-body">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>            
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                @foreach($errors->all() as $message)
                    {{ $message }}. <br>
                @endforeach
            </div>
        </div>        
    @endif

    <div class="page-content" id="user-content">
      <div class="row">
        <div id="content" class="col-xs-12"><div class="page-header">
          <h1>
            ได้เสีย สมาชิก/ประเภท
            <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
              3M3K
            </small>
          </h1>
          <h4 class="sub">
            <i class="fa fa-angle-right orange"></i>
            <span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 ตุลาคม 2560
            <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
          </h4>
        </div>

        <div class="alert alert-info">
          <h3 class="no-margin">ยังไม่ประกาศผลรางวัล กรุณาไปที่ <a href="https://agent.superlot999.com/items/by-member" class="ajax">รายการแทง</a></h3>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
{{-- </div> --}}

 