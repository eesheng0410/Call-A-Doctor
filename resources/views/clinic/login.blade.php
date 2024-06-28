<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #DEF2F1; /* Mint Green Background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 50px;
            border-radius: 15px; /* More rounded corners */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Deeper shadow for a floating effect */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
        }

        .container:hover {
            transform: translateY(-10px); /* Lift up on hover */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* More pronounced shadow on hover */
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 40px;
            color: #3AAFA9; /* Sky Blue Color */
            font-size: 2.5em;
            letter-spacing: 2px; /* Added spacing for a futuristic look */
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group select,
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .submit-button {
            background-color: #3AAFA9; /* Sky Blue Button */
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 30px; /* Fully rounded buttons for a futuristic look */
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition for hover effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to buttons */
        }

        .submit-button:hover {
            background-color: #2b7c7b; /* Darker Sky Blue on hover */
            transform: translateY(-5px); /* Slight lift on hover */
        }

        .submit-button:focus {
            outline: none;
        }

        .link-group {
            margin-top: 20px;
        }

        .link-group a {
            display: block;
            color: #3AAFA9; /* Sky Blue Color */
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease; /* Smooth transition for hover effect */
        }

        .link-group a:hover {
            color: #2b7c7b; /* Darker Sky Blue on hover */
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Call-A-Doctor Logo" class="logo">
        <h1>Clinic Login</h1>
        <form method="POST" action="{{ route('clinic.login') }}">
            @csrf
            <div class="form-group">
                <label for="clinic_id">Select Clinic</label>
                <select name="clinic_id" id="clinic_id" required>
                    <option value="" disabled selected>-- Select Clinic --</option>
                    <option value="1">Clinic A</option>
                    <option value="2">Clinic B</option>
                    <option value="3">Clinic C</option>
                    <option value="4">Clinic D</option>
                    <option value="5">Clinic E</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pin">Pin</label>
                <input type="password" name="pin" id="pin" required>
            </div>
            <button type="submit" class="submit-button">Login</button>
        </form>
        @if ($errors->any())
            <div class="error-message">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
        <div class="link-group">
            <a href="{{ route('login.selection') }}">Back to Login Selection</a>
        </div>
    </div>
</body>
</html>