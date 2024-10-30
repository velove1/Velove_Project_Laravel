<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form id="LoginForm" class="bg-red-100 p-6 rounded-lg shadow-md w-full max-w-sm">
        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Username :</label>
            <input type="text" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password :</label>
            <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full bg-red-300 text-white py-2 rounded hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-blue-500">LOGIN</button>
    </form>

    <script src="public/js/scriptt.js"></script>
</body>
</html>