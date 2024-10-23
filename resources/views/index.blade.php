<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <header class="bg-[#e4aaaa] py-12 text-center">
        <h1 class="text-5xl font-extrabold">SELAMAT DATANG!</h1>
        <p class="text-lg text-gray-700 mt-4">platform velove</p>
    </header>

    <main class="py-16">
        <section class="featured-project text-center">
            <h2 class="text-3xl font-semibold mb-4">Velove Fathya Nurkatsir</h2>
            <img src="https://i.pinimg.com/564x/8a/33/97/8a339794daaa9fb45b1052f64ed1550e.jpg" width="200" height="200" alt="Gambar Proyek Unggulan" class="mx-auto border border-gray-300 rounded-lg shadow-lg">
            <p class="text-lg mt-4">Ini foto saya.</p>
        </section>
    </main>

    <nav class="bg-white py-4 shadow-md">
        <ul class="flex justify-center space-x-8">
            <li><a href="#about" class="text-lg font-bold text-gray-800 hover:text-blue-500">My Cat</a></li>
            <li><a href="#contact" class="text-lg font-bold text-gray-800 hover:text-blue-500">Contact</a></li>
        </ul>
    </nav>

    <section id="about" class="bg-[#f5e2e2] py-16 text-center">
        <h2 class="text-3xl font-semibold mb-4">Aqis Skibidi</h2>
        <img src="https://i.pinimg.com/736x/31/43/d6/3143d6c79e451e605cb42e65ac6b47a1.jpg" alt="Foto Profil" class="w-36 h-36 mx-auto rounded-full mb-4">
        <p class="text-lg">Kucing dengan 1000 kemalsan dan suka pup sembarang.</p>
    </section>

    <section id="contact" class="bg-[#f5e2e2] py-16 text-center">
        <h2 class="text-3xl font-semibold mb-8">Kontak</h2>
        <form class="max-w-lg mx-auto">
            <label for="name" class="block text-left mb-2 text-lg">Nama:</label>
            <input type="text" id="name" name="name" required class="w-full p-3 mb-6 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-[#e4aaaa]">

            <label for="email" class="block text-left mb-2 text-lg">Email:</label>
            <input type="email" id="email" name="email" required class="w-full p-3 mb-6 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-[#e4aaaa]">

            <label for="message" class="block text-left mb-2 text-lg">Pesan:</label>
            <textarea id="message" name="message" required class="w-full p-3 mb-6 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-[#e4aaaa]"></textarea>

            <button type="submit" class="w-full py-3 bg-[#e4aaaa] text-white font-bold rounded hover:bg-[#d09f9f] focus:outline-none focus:ring focus:ring-[#d09f9f]">Kirim</button>
        </form>
    </section>

    <footer class="bg-white py-4 text-center border-t border-gray-300">
        <p class="text-sm text-gray-600">&copy; 2024 Veloveee</p>
    </footer>

</body>
</html>
