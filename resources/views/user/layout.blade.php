<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/user/css/homepage.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contact.css">
  

</head>
<body>
<!--bat dau phan header-->
<header>
    <div class="navbar">
        <!--set up MENU-->
        <div class="dropdown-menu">
            <button class="dropbtn"><i class="fas fa-bars"></i></button>
            <div class="dropdown-content">
                <a href="#">Trang chủ</a>
                <a class="dropdown-btn">Đăng ký
                    <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-container">
                    <a href="{{route('parking.register')}}">Dành cho chủ nhà xe</a>
                    <a href="{{route('user.register')}}">Dành cho người gửi xe</a>
                </div>
                <a class="dropdown-btn">Đăng Nhập
                    <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-container">
                    <a href="{{route('parking.login')}}">Dành cho chủ nhà xe</a>
                    <a href="{{route('user.login')}}">Dành cho người gửi xe</a>
                </div>
                <a class="btn-button js-buy-ticket">Liên hệ</a>
                <a href="#">Trợ giúp</a>
                <a href="#" style="border-bottom: 0px"></a>
            </div>
        </div>
        <!--ket thuc menu-->
        <!------------------>
        <!--lam dropdown Tro giup-->
        <div class="dropdown">
            <button class="dropbtn">Trợ giúp</button>
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{route('user.logout')}}">
                 Điều khoản 
                </a>
                <a href="#">Chính sách </a>
                <a href="#" style="border-bottom: 0px"></a>
            </div>
        </div>
        <!--ket thuc dropdown Tro giup-->
        <!------------------>
        <a class="btn1-button js-buyone-ticket">Liên hệ</a>
        <div class="dropdown">
            <button class="dropbtn">Đăng nhập</button>
            <div class="dropdown-content">
                <a id="myBtn"href="{{route('parking.login')}}">Dành cho chủ nhà xe</a>
                <a href="{{route('user.login')}}">Dành cho người gửi xe</a>
                <a href="#" style="border-bottom: 0px"></a>
            </div>
        </div>
        <!--setup dropdown Dang ky-->
        <div class="dropdown">
            <button class="dropbtn">Đăng ký</button>
            <div class="dropdown-content">
                <a id="myBtn"href="{{route('parking.register')}}">Dành cho chủ nhà xe</a>
                <a href="{{route('user.register')}}">Dành cho người gửi xe</a>
                <a href="#" style="border-bottom: 0px"></a>
            </div>
        </div>
        <!--ket thuc dropdown Dang ky-->
        <a href="#homepage.html">Trang chủ</a>
        <a id="i-parking">I-Parking</a>
    </div>
    <!--------------------------------->
    <!--finish register-parking(1)-->
</header>
<!--ket thuc phan header-->

<!--bat dau phan body (google.map)-->
<main>
    @yield('user')

    <div class="sumenh-background">
        <h2>Sứ Mệnh Của Chúng Tôi</h2>
        <p name="maintext">I-PARKING</p>
        <p name="subtext">Giải pháp tìm bãi đỗ nhanh nhất</p>
        <p name="star" id="alone"><i class="far fa-star" style="color:rgb(156,162,158)"></i>&nbsp;&nbsp;Tiết kiệm thời
            gian,nhiên liệu,tài chính</p>
        <p name="star"><i class="far fa-star" style="color:rgb(156,162,158)"></i>&nbsp;&nbsp;Giảm tình trạng phương tiện
            lấn chiếm lòng đường</p>
        <p name="star"><i class="far fa-star" style="color:rgb(156,162,158)"></i>&nbsp;&nbsp;Đáp ứng nhu cầu tìm bãi đỗ
            cho mọi người</p>
        <p name="star"><i class="far fa-star" style="color:rgb(156,162,158)"></i>&nbsp;&nbsp;Tận dụng tối đa diện tích
        </p>
        <p name="star"><i class="far fa-star" style="color:rgb(156,162,158)"></i>&nbsp;&nbsp;Làm đẹp văn minh đô thị</p>

    </div>
    <!--ket thuc phan gioi thieu su menh-->
    <!----------------------->
    <!--bat dau phan gioi thieu san pham-->

    <div class="first-introduce-background">
        <h2>Các Phân Hệ Chính</h2>

        <div class="layout-system">
            <p name="bold">Quản trị hệ thống</p>
            <p>Cấu hình lịch đỗ và phí đỗ xe,quản trị hệ thống,quản trị người dùng.Giám sát
                bãi đỗ qua hệ thống camera.</p>
        </div>
        <div class="layout-app">
            <p name="bold">Ứng dụng cho chủ phương tiện</p>
            <p>Tìm kiếm và tra cứu thông tin bãi đỗ xe,đặt chỗ nhanh chóng,
                thanh toán linh hoạt qua mobile.Hỗ trợ dẫn đường,xem trực tiếp
                hình ảnh bãi đỗ qua camera.</p>
        </div>
    </div>

    <div class="second-introduce-background">
        <div class="layout-count">
            <p name="bold">Hệ thống phân tích thống kê</p>
            <p>Báo cáo doanh thu,thống kê số lượng đặt chỗ theo thời gian.
                Phân tích và đưa ra các dự báo hiệu xuất trong tương lai
            </p>
        </div>
        <div class="layout-api">
            <p name="bold">Open API</p>
            <p>Cung cấp dữ liệu mở về đỗ xe
                các API cho phép lấy thông tin về trạng thái,phí
                đỗ xe và lịch đỗ.
            </p>
        </div>
        <div class="layout-staff">
            <p name="bold">Ứng dụng cho nhân viên</p>
            <p>Kiểm tra thông tin xe ra vào,
                phát hiện các phương tiện vi phạm(đỗ sai vị trí,chưa thanh toán),
                thống kê số lượt đỗ mỗi ngày


            </p>
        </div>
    </div>
</main>
<!--ket thuc phan main-->
<!---------------------->
<!--bat phan Lien he-->
<div class="modal js-modal">
    <div class="modal-container js-modal-container">
      
      <div class="modal-close js-modal-close">
        <i class="fas fa-times"></i>
      </div>

      <header class="modal-header">
        Liên hệ với chúng tôi
      </header>

      <div class="modal-body">
        <form action="https://formspree.io/f/xqknzeyj" method="post">
          <label for="" class="modal-label">
            Tên của bạn:
          </label>
          <input type="text" class="modal-input" name="Name" required="" title="Yêu cầu nhập tên của bạn">

          <label for="" class="modal-label">
            Số điện thoại:
          </label>
          <input type="text" class="modal-input" name="Phone-Number" required="" title="Yêu cầu nhập số điện thoại" pattern="[0-9]{10}">

          <label for="" class="modal-label">
            Email:
          </label>
          <input type="email" class="modal-input" name="Email" required="" title="Yêu cầu nhập email">

          <label for="" class="modal-label">
            Nội dung:
          </label>
          <textarea class="modal-input" name="Message" required="" title="Yêu cầu nhập nội dung"></textarea>
          <!-- your other form fields go here -->
          <button id="send" type="submit">Gửi thông tin</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const byBtn = document.querySelector('.js-buy-ticket')
    const byoneBtn = document.querySelector('.js-buyone-ticket')
    const bytwoBtn = document.querySelector('.js-buytwo-ticket')

    const modal = document.querySelector('.js-modal')
    const modalContainer = document.querySelector('.js-modal-container')
    const modalClose = document.querySelector('.js-modal-close')
    //ham hien thi contact
    function showBuyTickets() {
      modal.classList.add('open')
    }

    function hideBuyTicket() {
      modal.classList.remove('open')
    }

    byBtn.addEventListener('click', showBuyTickets)
    byoneBtn.addEventListener('click', showBuyTickets)
    bytwoBtn.addEventListener('click', showBuyTickets)
    modalClose.addEventListener('click', hideBuyTicket)

    modal.addEventListener('click', hideBuyTicket)

    modalContainer.addEventListener('click', function (event) {
      event.stopPropagation()
    })
  </script>
<!--ket thuc phan lien he-->

<!--bat dau phan bottom-->
<footer>
    <div class="bottom">
        <div class="side-one">
            <a href="#"><p><i class="fas fa-circle"></i>&nbsp;&nbsp;Điều khoản sử dụng</p></a>
            <a href="#"><p><i class="fas fa-circle"></i>&nbsp;&nbsp;Chính sách bảo mật</p></a>
            <a><p class="btn2-button js-buytwo-ticket"><i class="fas fa-circle"></i>&nbsp;&nbsp;Liên hệ</p></a>
        </div>
        <div class="side-two">
            <a href="#"><p><i class="fas fa-circle"></i>&nbsp;&nbsp;Địa chỉ:72 nguyễn trãi-thanh xuân-hà nội</p></a>
            <a href="mailto:iparkingT2010M@gmail.com?"><p><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email:iparkingT2010M@gmail.com</p></a>
            <a href="#"><p><i class="fas fa-phone"></i>&nbsp;&nbsp;Hot line:0963618438</p></a>
        </div>
        <video width="480" height="360" controls>
            <source src="./video/media.mp4" type="video/mp4">
        </video>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
@yield('script')
</body>
</html>

