<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} — Admin</title>
    <style>
        body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; margin: 0; background: #f6f7f9; color: #111827; }
        .container { max-width: 1100px; margin: 0 auto; padding: 24px; }
        .card { background: #fff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; }
        .grid { display: grid; gap: 16px; }
        @media (min-width: 768px) { .grid-3 { grid-template-columns: repeat(3, 1fr); } }
        pre { background: #0b1021; color: #e5e7eb; padding: 12px; border-radius: 6px; overflow: auto; }
        nav { background: #111827; color: #e5e7eb; padding: 12px 0; }
        nav .brand { font-weight: 700; }
        a { color: inherit; text-decoration: none; }
    </style>
</head>
<body>
<nav>
    <div class="container">
        <span class="brand">{{ config('app.name') }} Admin</span>
        <span style="opacity:.7"> — <a href="/admin">Dashboard</a></span>
    </div>
</nav>
<main class="container">
    @yield('content')
</main>
</body>
</html>
