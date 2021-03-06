    
        
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
                ผลการออกรางวัล
            </li>
        </ul><!-- /.breadcrumb -->
        <span id="global-clock" class="pull-right"></span>
    </div>

<div class="page-content" id="user-content">
    <div class="row">
        <div id="content" class="col-xs-12"><div class="page-header">
            <h1>ผลการออกรางวัล</h1>
        </div>
        <h3><i class="fa fa-angle-right blue"></i> หวยรัฐ <span class="deep-blue">5 งวดล่าสุด</span></h3>
        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="table-gov-results">
            <thead class="thin-border-bottom">
                <tr>
                    <th rowspan="2" class="ac">ชื่องวด</th>
                    <th colspan="4" class="ac">3 ตัวท้าย</th>
                </tr>
                <tr>
                    <th class="ac">3 ตัวบน</th>
                    <th class="ac">2 ตัวบน</th>
                    <th class="ac">2 ตัวล่าง</th>
                    <th class="ac">3 ตัวล่าง</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bolder ac">งวดวันที่ 1 ตุลาคม 2560</td>
                    <td class="blue bolder ac">714</td>
                    <td class="blue bolder ac">14</td>
                    <td class="blue bolder ac">52</td>
                    <td class="blue bolder ac">611 – 726 – 462 – 952</td>
                </tr>
                <tr>
                    <td class="bolder ac">งวดวันที่ 16 กันยายน 2560</td>
                    <td class="blue bolder ac">143</td>
                    <td class="blue bolder ac">43</td>
                    <td class="blue bolder ac">71</td>
                    <td class="blue bolder ac">172 – 647 – 340 – 388</td>
                </tr>
                <tr>
                    <td class="bolder ac">งวดวันที่ 1 กันยายน 2560</td>
                    <td class="blue bolder ac">224</td>
                    <td class="blue bolder ac">24</td>
                    <td class="blue bolder ac">65</td>
                    <td class="blue bolder ac">345 – 679 – 278 – 195</td>
                </tr>
                <tr>
                    <td class="bolder ac">งวดวันที่ 16 สิงหาคม 2560</td>
                    <td class="blue bolder ac">431</td>
                    <td class="blue bolder ac">31</td>
                    <td class="blue bolder ac">37</td>
                    <td class="blue bolder ac">115 – 302 – 253 – 945</td>
                </tr>
                <tr>
                    <td class="bolder ac">งวดวันที่ 1 สิงหาคม 2560</td>
                    <td class="blue bolder ac">519</td>
                    <td class="blue bolder ac">19</td>
                    <td class="blue bolder ac">36</td>
                    <td class="blue bolder ac">061 – 386 – 787 – 989</td>
                </tr>
            </tbody>
        </table>

        <h3>
            <i class="fa fa-angle-right blue"></i>
            หวยหุ้น <span class="deep-blue" id="stock-date">วันที่ 10-10-2017</span>
            <div class="space-4"></div>
            <button class="btn btn-primary btn-sm no-border no-margin" id="select-date-prev"><i class="fa fa-chevron-left"></i></button>
            <input type="button" class="btn btn-primary btn-sm no-border no-margin" id="select-date" value="10-10-2017" data-date="10-10-2017">
            <button class="btn btn-primary btn-sm no-border no-margin" id="select-date-next"><i class="fa fa-chevron-right"></i></button>
        </h3>

        <div class="space-4"></div>

        <style>
            #table-gov-results th,
            #table-stock-results th {
            background: #4b4b4b !important;
            color: white;
            }
        </style>

        <table class="table table-bordered table-border-dark table-auto table-nowrap" id="table-stock-results">
            <thead class="thin-border-bottom">
                <tr class="bg-black">
                    <th rowspan="2" class="ac">ชนิดหวย</th>
                    <th rowspan="2" class="ac">ชื่องวด</th>
                    <th colspan="3" class="ac">3 ตัวท้าย</th>
                </tr>
                <tr>
                    <th class="ac">3 ตัวบน</th>
                    <th class="ac">2 ตัวบน</th>
                    <th class="ac">2 ตัวล่าง</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="99" class="bolder bg-blue2">หวย ธกส.</td>
                </tr>
                <tr>
                    <td class="bolder">หวย ธกส. (BAAC1)</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หวย ธกส. (BAAC2)</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                <td colspan="99" class="bolder bg-blue2">หวยหุ้นไทย</td>
                </tr>
                <tr>
                    <td class="bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดเช้า &gt;&gt;&gt;</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">887</td>
                    <td class="blue bolder ac">87</td>
                    <td class="blue bolder ac">65</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 2</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">435</td>
                    <td class="blue bolder ac">35</td>
                    <td class="blue bolder ac">13</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 3</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">042</td>
                    <td class="blue bolder ac">42</td>
                    <td class="blue bolder ac">20</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 4</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">802</td>
                    <td class="blue bolder ac">02</td>
                    <td class="blue bolder ac">80</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 5</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">216</td>
                    <td class="blue bolder ac">16</td>
                    <td class="blue bolder ac">94</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 6</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">956</td>
                    <td class="blue bolder ac">56</td>
                    <td class="blue bolder ac">34</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 7</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">777</td>
                    <td class="blue bolder ac">77</td>
                    <td class="blue bolder ac">55</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 8</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">920</td>
                    <td class="blue bolder ac">20</td>
                    <td class="blue bolder ac">98</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 9</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">183</td>
                    <td class="blue bolder ac">83</td>
                    <td class="blue bolder ac">61</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดเช้าคู่ 10</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">170</td>
                    <td class="blue bolder ac">70</td>
                    <td class="blue bolder ac">48</td>
                </tr>
                <tr>
                    <td class="bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเที่ยง &gt;&gt;&gt;</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">869</td>
                    <td class="blue bolder ac">69</td>
                    <td class="blue bolder ac">53</td>
                </tr>
                <tr>
                    <td class="bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบเปิดบ่าย &gt;&gt;&gt;</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">905</td>
                    <td class="blue bolder ac">05</td>
                    <td class="blue bolder ac">83</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 2</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">199</td>
                    <td class="blue bolder ac">99</td>
                    <td class="blue bolder ac">77</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 3</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">004</td>
                    <td class="blue bolder ac">04</td>
                    <td class="blue bolder ac">82</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 4</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">398</td>
                    <td class="blue bolder ac">98</td>
                    <td class="blue bolder ac">76</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 5</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">185</td>
                    <td class="blue bolder ac">85</td>
                    <td class="blue bolder ac">63</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 6</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">600</td>
                    <td class="blue bolder ac">00</td>
                    <td class="blue bolder ac">78</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 7</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">802</td>
                    <td class="blue bolder ac">02</td>
                    <td class="blue bolder ac">80</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 8</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">772</td>
                    <td class="blue bolder ac">72</td>
                    <td class="blue bolder ac">50</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 9</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">788</td>
                    <td class="blue bolder ac">88</td>
                    <td class="blue bolder ac">66</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นไทยเปิดบ่ายคู่ 10</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">490</td>
                    <td class="blue bolder ac">90</td>
                    <td class="blue bolder ac">68</td>
                </tr>
                <tr>
                    <td class="bolder">ไทยก่อนปิดเย็น Pre-Close</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">&lt;&lt;&lt; หวยหุ้นไทย รอบปิดเย็น &gt;&gt;&gt;</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td colspan="99" class="bolder bg-blue2">หวยลาว</td>
                </tr>
                <tr>
                    <td class="bolder">หวยลาว วันพุธ</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td colspan="99" class="bolder bg-blue2">หวยมาเลย์ (Magnum4D)</td>
                </tr>
                <tr>
                    <td class="bolder">หวยมาเลย์ วันพุธ</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หวยมาเลย์ วันเสาร์</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หวยมาเลย์ วันอาทิตย์</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td colspan="99" class="bolder bg-blue2">หวยหุ้นต่างประเทศ</td>
                </tr>
                <tr>
                    <td class="bolder">นิเคอิ รอบเช้า</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">977</td>
                    <td class="blue bolder ac">77</td>
                    <td class="blue bolder ac">06</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นจีน รอบเช้า</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">075</td>
                    <td class="blue bolder ac">75</td>
                    <td class="blue bolder ac">52</td>
                </tr>
                <tr>
                    <td class="bolder">ฮั่งเส็ง รอบเช้า</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">355</td>
                    <td class="blue bolder ac">55</td>
                    <td class="blue bolder ac">96</td>
                </tr>

                <tr>
                    <td class="bolder">หุ้นไต้หวัน</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td colspan="99" class="ac deep-red">ยกเลิก</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นเกาหลี</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">088</td>
                    <td class="blue bolder ac">88</td>
                    <td class="blue bolder ac">89</td>
                </tr>
                <tr>
                    <td class="bolder">นิเคอิ รอบบ่าย</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">351</td>
                    <td class="blue bolder ac">51</td>
                    <td class="blue bolder ac">80</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นจีน รอบบ่าย</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">951</td>
                    <td class="blue bolder ac">51</td>
                    <td class="blue bolder ac">24</td>
                </tr>
                <tr>
                    <td class="bolder">ฮั่งเส็ง รอบบ่าย</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นสิงคโปร์</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นอินเดีย</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นอียิปต์</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นรัสเซีย</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นอังกฤษ</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นเยอรมัน</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หุ้นดาวน์โจน</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">107</td>
                    <td class="blue bolder ac">07</td>
                    <td class="blue bolder ac">60</td>
                </tr>
                <tr>
                    <td colspan="99" class="bolder bg-blue2">หวยเวียดนาม</td>
                </tr>
                <tr>
                    <td class="bolder">ฮานอย Hà Nội</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">คั้ญฮหว่า Khánh Hòa</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กอนตูม Kon Tum</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ฟู้เอียน Phú Yên</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เถื่อเทียน-เว้ Thừa Thiên Huế</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ดั๊กลัก Đắc Lắc</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กว๋างนาม Quảng Nam</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ดานัง Đà Nẵng</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">บิ่ญดิ่ญ Bình Định</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กว๋างบิ่ญ Quảng Bình</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กว๋างจิ Quảng Trị</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ซาลาย Gia Lai</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">นิญถ่วน Ninh Thuận</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ดั๊กนง Đắc Nông</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กว๋างหงาย Quảng Ngãi</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เกียนซาง Kiên Giang</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เลิมด่ง Lâm Đồng</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เตี่ยนซาง Tiền Giang</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">กำเมา Cà Mau</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ด่งท้าบ Đồng Tháp</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">โฮจิมินห์ Thanh pho Ho Chi Minh</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">บักเลียว Bạc Liêu</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เบ๊นแจ Bến Tre</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หวงเต่า Vũng Tàu</td>
                    <td class="bolder">งวดวันที่ 10-10-2017</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เกิ้นเทอ Cần Thơ</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ด่งนาย Đồng Nai</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ซ้อกจัง Sóc Trăng</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">อานชาง An Giang</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">บิ่ญถ่วน Bình Thuận</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เต็ยนิญ Tây Ninh</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">บิ่ญเชือง Bình Dương</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">จ่าวิญ Trà Vinh</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">หวิญล็อง Vĩnh Long</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">บิ่ญเฟื้อก Bình Phước</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">เหิ่วชาง Hậu Giang</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
                <tr>
                    <td class="bolder">ล็องอาน Long An</td>
                    <td class="bolder"></td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                    <td class="blue bolder ac">–</td>
                </tr>
            </tbody>
        </table>

        <script>
            $('#select-date').datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'dd-mm-yyyy'
            });

            $('#select-date').on('changeDate', function(e) {
                var date = $('#select-date').val();

                if ($('#select-date').val() == '') {
                date = $('#select-date').attr('data-date');
                $('#select-date').val(date);
                }

                $('#select-date').attr('data-date', date);

                $('#stock-date').html('วันที่ ' + $('#select-date').attr('data-date'));

                $.get('/reports/stock-results?date='+$('#select-date').attr('data-date'), function(result) {
                if (result.success) {
                    $('#table-stock-results tbody').replaceWith(result.html);
                    $('#select-date').val(date);
                }
                });
            });

            $('#select-date-prev').on('click', function(e) {
                var date = new Date($('#select-date').val().split('-').reverse().join('/'));
                date.setDate(date.getDate() - 1);
                $('#select-date').val(withZero(date.getDate()) + '-' + withZero(date.getMonth() + 1) + '-' + date.getFullYear()).trigger('changeDate');
            });

            $('#select-date-next').on('click', function(e) {
                var date = new Date($('#select-date').val().split('-').reverse().join('/'));
                date.setDate(date.getDate() + 1);
                $('#select-date').val(withZero(date.getDate()) + '-' + withZero(date.getMonth() + 1) + '-' + date.getFullYear()).trigger('changeDate');
            });
        </script>
    </div><!-- /.col -->
</div><!-- /.row -->
{{-- </div> --}}

 
         

    