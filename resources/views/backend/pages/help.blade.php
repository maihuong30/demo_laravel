@extends('layouts.defaults')

@section('content')
  <div class="row bg-white">
    @include("includes.page_header", ['title' => trans('app.help'), 'icon' => '/image/title_icon_mark.png'])
    <div class="box-body">
      <div class="col-md-12">
        <p>
          + Từ ngày <b style="font-size: 16px; color: blue">hôm nay đến ngày 02/01/2017</b> sử dụng link sau:<br />
          - Đăng nhập: {{ URL::route('home') }}<br />
          - Trợ giúp: {{ URL::route('help') }}<br />
          <br />
          + Từ ngày <b style="font-size: 16px; color: blue">03/01/2017</b> sử dụng link sau: <br />
          - Đăng nhập: <a href="http://ai-t-vietnam.com/">http://ai-t-vietnam.com/</a> <br />
          - Trợ giúp: <a href="http://ai-t-vietnam.com/">http://ai-t-vietnam.com/help</a> <br />
        </p>
        <p style="color: red">Trong hệ thống mới, các thông tin về Lunch và VAMS của các bạn kể từ 03/01/2017 sẽ được chuyển sang từ hệ thống cũ.
          <br>Các thông tin về Meeting kể từ 03/01/2017 sẽ cần được khai lại.</p>

        <p>Khi sử dụng hệ thống TMS hiện tại, ai trong số chúng ta cũng từng một lần gặp phải những tình huống như</p>
        <ul style="margin-top:0pt;margin-bottom:0pt;">
          <li style="list-style-type:disc; color:red;">
            Không biết VAMS, OT của mình đã được duyệt chưa, bị leader quên duyệt hoặc leader bị quên duyệt.</span>
          </li>
          <li style="list-style-type:disc; color:red;">
            Khó theo dõi được việc khai VAMS, OT của các member trong team</li>
          <li style="list-style-type:disc; color:red;">
            Quên đăng kí cơm trưa</li>
          <li style="list-style-type:disc; color:red;">
            Khai VAMS sai và muốn sửa lại nhưng VAMS đã được duyệt</li>
          <li style="list-style-type:disc; color:red;">
            Không biết contact của một member nào đó</li>
          <li style="list-style-type:disc; color:red;">
            Không khai được OT cho tháng trước</li>
          <li style="list-style-type:disc; color:red;">
            Do không chú ý nên quên trả lời câu hỏi của sếp</li>
        </ul>
        <p>Những tình huống này tuy không nghiêm trọng nhưng lại khá bất tiện và thường gây khó chịu, tốn time để giải quyết.</p>
        <p>Với mục đích tạo ra một tool quản lý hiệu quả, thân thiện, hỗ trợ tối đa cho các member, <span style="font-size: 14px; color: rgb(0, 0, 255);"><b>Hệ thống TMS mới</b></span> đã được tiến hành phát triển với nhiều cải tiến nổi bật so với hệ thống hiện tại</span>
        </p>
        <p><b style="font-weight:normal;" id="docs-internal-guid-8509df19-3fda-b8d0-318e-1ae715543d09"><br></b></p><p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;"><span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><b>1. Giao diện đẹp, thân thiện, chuyên nghiệp hơn.</b></span></p><p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;">
          <span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><b><br></b></span><span style="line-height: 1.71428; font-family: Arial; color: rgb(51, 51, 51); vertical-align: baseline; white-space: pre-wrap;"> </span><span style="line-height: 1.71428; font-family: Arial; color: rgb(51, 51, 51); vertical-align: baseline; white-space: pre-wrap;"><img src="https://lh6.googleusercontent.com/aai2Ta2aGawDUUOXv5yRa9b73J1njTjemIatS829zbw0i6lYvBLsSbl9emWOVOKQJ-xa_QWqXs-rzJrunSTEznwvNVmm2xkaBOyzLCbqCUYjagH1z24Q4S39X4-un4juVNOQyMNM" style="border-width: initial; border-style: none; transform: rotate(0rad); width: 556.455px; height: 266.211px;" height="288" width="602"></span><span style="line-height: 1.71428; font-family: Arial; color: rgb(51, 51, 51); vertical-align: baseline; white-space: pre-wrap;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="line-height: 1.71428; font-family: Arial; color: rgb(51, 51, 51); vertical-align: baseline; white-space: pre-wrap;"><img src="https://lh3.googleusercontent.com/M84Z4VDaY_dfHrfB1pFxs9Xc-07rzGt7M1T99_CFMq_LF89Bs5yVXHVwvYPMmY_IIUMob5tYKkwwIJLQuTIhPKd1fUKbSTArnJj7epOR4aoFiUDualc2isDtuLb--2r9zt7AEO6e" style="border-width: initial; border-style: none; transform: rotate(0rad);" height="267" width="602"></span></p>
        <p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;"><span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><b>2. Thêm nhiều loại thông tin, mail, thông báo, nhắc nhở tiện lợi nhằm đảm bảo quyền lợi, lợi ích của member cũng như giúp member thực hiện công việc hiệu quả hơn, đồng thời giúp clear logic, tạo thuận lợi cho việc thống kê</b></span>
        </p>
        <ul style="margin-top:0pt;margin-bottom:0pt;">
          <li style="list-style-type:disc;">Mail thông báo khai VAMS, OT thành công</li>
          <li style="list-style-type:disc;">Mail nhắc nhở duyệt VAMS, OT</li>
          <li style="list-style-type:disc;">Nhắc nhở nếu không tích Urgent khi khai VAMS</li>
          <li style="list-style-type:disc;">Mail thông báo khi hết thời gian ăn trưa đã đăng kí</li>
          <li style="list-style-type:disc;">Nhắc nhở khi khai VAMS nghỉ trùng thời gian có meeting, ngày đăng kí cơm trưa</li>
          <li style="list-style-type:disc;">Hiển thị số lần khai VAMS Urgent còn lại trong tháng</li>
          <li style="list-style-type:disc;">Hiển thị số ngày chưa khai, chưa chấm, khai muộn TMS</li>
          <li style="list-style-type:disc;">Hiển thị số meeting phải tham gia trong ngày</li>
          <li style="list-style-type:disc;">Hiển thị số ngày đi muộn cùng thời gian checkin, checkout của từng ngày</li>
          <li style="list-style-type:disc;">Hiển thị số VAMS, OT chưa được duyệt/li>
          <li style="list-style-type:disc;">Hiển thị các task phải thực hiện trong ngày</li>
          <li style="list-style-type:disc;">Hiển thị các member của dự án đã khai VAMS nghỉ</li>
          <li style="list-style-type:disc;">Hiển thị các ngày nghỉ lễ</li>
          <li style="list-style-type:disc;">Thêm dòng TMS khi khai VAMS, OT</li>
        </ul>
        <p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;"><b><span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);">3. Cải tiến quy trình khai - duyệt VAMS, OT, </span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);">tăng tính tương tác giữa leader và các member trong team</span></b>
        </p>
        <ul style="margin-top:0pt;margin-bottom:0pt;">
          <li style="list-style-type:disc;">Có thể khai OT vắt qua 2 ngày</li>
          <li style="list-style-type:disc;">Có thể khai VAMS lặp lại theo từng ngày hoặc từng thứ trong tuần nhờ tính năng repeat</li>
          <li style="list-style-type:disc;">Có thể duyệt cùng lúc nhiều VAMS, OT</li>
          <li style="list-style-type:disc;">Tính năng Resend VAMS, OT khi bị reject giúp tăng tính tương tác giữa leader và các member trong team</li>
        </ul>
        <p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;"><span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><b>4. Cải tiến tính năng Meeting </b></span></p>
        <ul>
          <li style="list-style-type:disc;">Tính năng Meeting được link với GG Calendar. Khi book họp trong hệ thống, cuộc họp sẽ được tự động add lên Calendar</li>
          <li style="list-style-type:disc;">Khi book họp, sẽ hiển thị phòng họp nào đang bận, member nào đang nghỉ hoặc có cuộc họp khác</li>
          <li style="list-style-type:disc;">Khi book họp thành công sẽ có thông báo đến các member được mời</li>
          <li style="list-style-type:disc;">Trước khi họp 10' sẽ có mail nhắc nhở</li>
        </ul>
        <p dir="ltr" style="line-height:1.7142857142857142;margin-top:0pt;margin-bottom:8pt;"><span style="font-size: 14px; font-family: Arial; color: rgb(255, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><b>5. Thêm các tính năng phục vụ cho việc quản lý hệ thống, nhân sự</b></span></p>
        <ul style="margin-top:0pt;margin-bottom:0pt;">
          <li style="list-style-type:disc;">Áp dụng hệ thống phân quyền tới từng member. Các member sẽ được phân quyền tương ứng với công việc của mình</li>
          <li style="list-style-type:disc;">Hệ thống quản lý nhân sự được phân chia rõ ràng theo từng cấp bậc (công ty, team, project, member)</li>
          <li style="list-style-type:disc;">Cơ chế hỏi đáp tại TMS đã được cải tiến khiến việc hỏi đáp được clear và dễ dàng hơn, tăng tính tương tác giữa sếp và các member trong công ty</li>
        </ul>

        <p>
          <span>Sau thời gian phát triển, với sự cố gắng của </span><b><span style="font-size: 13.3333px; font-family: Arial; color: rgb(255, 0, 0);">Team 1905</span>,
            <span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 255);"> Hệ thống TMS mới</span></b>
          <span>đã hoàn thành.</span>
        </p>
        <p>Link hướng dẫn sử dụng:</p>
        <p>
          <ul>
            <li><a href="{!! url(config('uploader.folder') . '/tms_bod.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng TMS (dành cho BOD)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/manager_user_admin.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng các tính năng quản lý nhân sự (dành cho netadmin)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/tms_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng TMS (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/vams_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng VAMS (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/vams_leader.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng VAMS (dành cho leader)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/ot_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng OT (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/ot_leader.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng OT (dành cho leader)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/login_dashboard.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Login + Dashboard (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/lunch_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sủ dụng tính năng Lunch (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/holiday_hcth.pptx') !!}"><font color="#0000ff">Hướng dẫn sủ dụng tính năng Holiday (dành cho HCTH)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/contact_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Contact (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/announcement_hcth.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Announcement (dành cho HCTH)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/setting_admin.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Setting (dành cho Netadmin)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/meeting_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Meeting (dành cho all user)</font></a></li>


            <li><a href="{!! url(config('uploader.folder') . '/confirm_travel_hcth.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Trợ cấp đi lại (dành cho HCTH)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/confirm_travel_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Trợ cấp đi lại (dành cho all member)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/meeting_note_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Meeting note(dành cho all user)</font></a></li>

            <li><a href="{!! url(config('uploader.folder') . '/statitic_leader.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Thống kê (dành cho leader)</font></a></li>
            <li><a href="{!! url(config('uploader.folder') . '/statitic_all.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng Thống kê (dành cho all member)</font></a></li>

          <li><a href="{!! url(config('uploader.folder') . '/techshare_review.pptx') !!}"><font color="#0000ff">Hướng dẫn sử dụng tính năng review bài Techshare (dành cho all member)</font></a></li>
        </ul>
        </p>
        <p>Trong quá trình sử dụng hệ thống, nếu có gì thắc mắc, xin vui lòng liên hệ </p>
        <p>Lê Anh Hoài</p>
        <p>&nbsp; + Skype: <a href="skype:le.anh.hoai?chat">le.anh.hoai</a></p>
        <p>&nbsp; + Email: <a href="mailto:hoaila@ai-t.vn">hoaila@ai-t.vn</a></p>
        <p>Nguyễn Huy Văn</p>
        <p>&nbsp; + Skype: <a href="skype:huyvan_8x?chat">huyvan_8x</a></p>
        <p>&nbsp; + Email: <a href="mailto:vannh@ai-t.vn">vannh@ai-t.vn</a></p>
      </div>
    </div>
  </div>
@endsection