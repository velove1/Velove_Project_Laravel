<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body >
    <header class = 'bg-red-100' >
    <div class="container mx-auto p-5 flex justify-center items-center">
  <h1 class="text-2xl font-bold underline text-black">
    About Me!
  </h1>
</div>
</header>
<a href="{{ route ('home') }}"class="text=1xl font-bold mb-4">kembali</a>
</body>
</html>