<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user/css/register-driver.css">
</head>

<body>
<form id="regForm" action="{{route('user.createUser')}}" method="POST">
    @csrf
    <h2 style="margin-top: 55px;">Thông tin đăng ký:</h2>
    <div class="tab"></div>
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
    <p>
        <input type="tel" placeholder="Tên" name="name" required >
    </p>
    <p>
        <input type="tel" placeholder="Email" name="email" required>
    </p>

    <p>
        <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');
      if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Nhập mật khẩu" required>
    </p>
    <p>
        <input id="password_two" name="cf_password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');
     " placeholder="Nhập lại mật khẩu" required>
    </p>
    </div>
    <div class="press">
        <button type="submit" value="Đăng ký">Đăng ký</button>
    </div>
</form>
<script src="js/modal.js"></script>
</body>

</html>
