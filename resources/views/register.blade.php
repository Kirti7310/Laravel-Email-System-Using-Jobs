<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #ffffff;
            width: 400px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-bottom: 25px;
            text-align: center;
            color: #2c3e50;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 5px rgba(76,175,80,0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            border: none;
            border-radius: 6px;
            color: #ffffff;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #45a049;
        }

        .footer-text {
            margin-top: 15px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">

        <h2>Create Account</h2>

        <form method="POST" action="/register">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Enter Full Name" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Email Address" required>
            </div>

            <button type="submit">Register</button>
        </form>

        <div class="footer-text">
            © {{ date('Y') }} {{ config('app.name') }}
        </div>

    </div>
</div>

</body>
</html>
