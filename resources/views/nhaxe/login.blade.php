<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/nhaxe/css/signin.css"/>
</head>
<body>
<form id="regForm" action="{{route('parking.checkUser')}}" method="POST">
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
    @csrf
    <h2 style="margin-top: 55px;">Thông tin đăng nhập:</h2>
    <div class="tab">
        <p>
            <input type="email" placeholder="E-mail/Số điện thoại"  name="email"  required>
            <span class="text-danger" >@error('email'){{$message}}@enderror</span>
        </p>
        <p>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <span class="text-danger" >@error('password'){{$message}}@enderror</span>
        </p>
    </div>
    <div style="overflow:auto;" class="press">
        <div style="float:right;">
            <button type="submit"  id="nextBtn" onclick="nextPrev(1)">Đăng nhập</button>
        </div>
    </div>
</form>

<script src="/user/js/signin.js"></script>

<script src="/user/js/modal.js"></script>
</body>
</html>

