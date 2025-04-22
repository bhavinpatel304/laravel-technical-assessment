<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livewire App</title>
    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @livewireStyles
</head>
<body>
<div class="bg-gray-100 font-sans">
  
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 p-4">
      <h2 class="text-xl font-semibold mb-4">Contents</h2>
      <nav class="space-y-2">
        <a href="{{ route('actors') }}" class="{{ request()->is('actors') ? 'bg-green-100' : '' }} block border-b px-3 py-2 rounded hover:bg-gray-100 text-gray-700">Actors</a>
        <a href="{{ route('people') }}" class="{{ request()->is('people') ? 'bg-green-100' : '' }} block border-b px-3 py-2 rounded hover:bg-gray-100 text-gray-700">People</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <section id="section1" class="mb-12">
        {{ $slot }}
      </section>      
    </main>
  </div>

    @livewireScripts
</body>
</html>
