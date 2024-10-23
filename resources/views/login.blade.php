<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="login-container bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <form id="loginForm" class="login-form">
            <h2 class="form-title text-2xl font-bold mb-6 text-center">Login</h2>
            <div class="form-group mb-4">
                <label for="username" class="block mb-2 text-sm text-gray-700">Username:</label>
                <input type="text" name="username" id="username" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="form-group mb-6">
                <label for="password" class="block mb-2 text-sm text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="login-btn w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">LOGIN</button>
        </form>
    </div>

    <script src="asset/js/script.js"></script>
</body>
</html>