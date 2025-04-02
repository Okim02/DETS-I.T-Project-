<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('cu.png') no-repeat center center/cover;
        }
        .go-back-btn {
            display: block;
            margin-top: 10px;
            background-color: #6c757d; /* Bootstrap Secondary Color */
            color: white;
            transition: 0.3s;
        }
        .go-back-btn:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-3">Login</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none d-block">Forgot password?</a>
            <a href="index.html" class="btn go-back-btn w-100">Go Back</a>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
