<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký tài khoản</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Họ tên:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br>

        <label>Xác nhận mật khẩu:</label><br>
        <input type="password" name="password_confirmation"><br><br>

        <button type="submit">Đăng ký</button>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>
