<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
        }

        /* Container for the login form */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Logo */
        .login-logo {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Form title */
        .login-title {
            font-family: 'Georgia', serif;
            font-size: 26px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        /* Input fields */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 4px rgba(76, 175, 80, 0.3);
        }

        /* Login button */
        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #45a049;
        }

        /* Link for password recovery */
        .forgot-password {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Responsive Styles */
        @media (max-width: 400px) {
            .login-container {
                padding: 20px;
            }
            .login-title {
                font-size: 22px;
            }
            .login-container input[type="text"],
            .login-container input[type="password"] {
                font-size: 14px;
            }
            .btn-login {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Logo Image -->
        <img src="Images/petcLogo.png" alt="Logo" class="login-logo">

        <!-- Form Title -->
        <div class="login-title">Login</div>

        <!-- Login Form -->
        <form action="/loginFormButton" method="post">
            @csrf
            <input type="text" name="email" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <input type="submit" class="btn btn-login" value="Login to Account">

            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
    </div>

</body>
</html>
