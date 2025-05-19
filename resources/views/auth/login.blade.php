<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập vào hệ thống</h2>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if ($errors->has('login_error'))
        <div style="color: red;">{{ $errors->first('login_error') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Đăng nhập</button>
    </form>

    <p><a href="{{ route('register.form') }}">Chưa có tài khoản? Đăng ký ngay</a></p>
</body>
</html>
