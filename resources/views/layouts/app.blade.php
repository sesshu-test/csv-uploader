<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto p-6">
        @yield('content')
    </div>
</body>
</html>
