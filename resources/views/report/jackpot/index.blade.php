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
          รายการที่ถูกรางวัล
        </h1>
        <h4 class="sub">
          <i class="fa fa-angle-right orange"></i>
          <span class="deep-blue">รัฐบาลไทย</span>, งวดวันที่ 16 ตุลาคม 2560
          <span class="smaller near-white"><i>(เปลี่ยนได้ที่แถบเมนูด้านบน)</i></span>
        </h4>
      </div>

      <div class="alert alert-info">
        <h3 class="no-margin">ยังไม่ประกาศผลรางวัล</h3>
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->
{{-- </div> --}}

 
         