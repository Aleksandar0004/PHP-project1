<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #00274d, #004080); 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .login-card {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(256, 256, 256, 0.3);
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        .btn-custom {
            background: #4facfe;
            border: none;
            color: #fff;
        }
        .btn-custom:hover {
            background: #00f2fe;
        }
        .btn-back {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
        }
        .btn-back:hover {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="text-center mb-4">Добре дошли!</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Имейл</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Парола</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-custom">Вход</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('register') }}" class="btn btn-custom">Регистрация</a>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/') }}" class="btn btn-back">⬅ Назад към Начало</a>
        </div>
    </div>
</body>
</html>
