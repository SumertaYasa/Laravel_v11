<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Home</title>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite('resources/css/app.css')
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body class="h-full">
  
<div class="min-h-full"  x-data="{ isOpen: false }">
  <x-navbar></x-navbar>

  <x-header>{{ $title }}</x-header>  
  
  <main>
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <!-- Your content -->
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>