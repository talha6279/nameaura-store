<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engraved Pens & Personalized Gifts | NameAura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- Sidebar --}}
    <div class="d-flex">
        <nav class="bg-dark text-white p-3 vh-100" style="width: 220px;">
            <h4 class="mb-4">NameAura</h4>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('category.show')}}" class="nav-link text-white">Category</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('product.show')}}" class="nav-link text-white">Products</a>
                </li>
                
            </ul>
        </nav>

        {{-- Main Content --}}
        <main class="flex-grow-1 p-4">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
