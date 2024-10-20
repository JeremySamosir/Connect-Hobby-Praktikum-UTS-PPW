<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Del Care Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .error {
            color: red;
            font-size: 0.875rem;
            margin-top: 5px;
        }
        .input-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="img/Logo Background White.png" alt="Del Care Logo">
                <h2>DEL CARE</h2>
            </div>
            <form id="loginForm" action="#" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                    <div id="usernameError" class="error"></div>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <div id="passwordError" class="error"></div>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            // Clear previous error messages
            document.getElementById('usernameError').textContent = '';
            document.getElementById('passwordError').textContent = '';

            let hasError = false;

            // Validate username
            const username = document.getElementById('username').value;
            if (username === '') {
                document.getElementById('usernameError').textContent = 'Username is required';
                hasError = true;
            }

            // Validate password
            const password = document.getElementById('password').value;
            if (password === '') {
                document.getElementById('passwordError').textContent = 'Password is required';
                hasError = true;
            }

            // Prevent form submission if there's an error
            if (hasError) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\Indah\Herd\ppw\resources\views/auth/login.blade.php ENDPATH**/ ?>