<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../" />
    <title>@yield('title', 'Admin Panel') - Portfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" />

    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">

    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                themeMode = localStorage.getItem("data-bs-theme") || defaultThemeMode;
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root">

        <!-- Header -->
        <div id="kt_header" class="header bg-white shadow-sm mb-5">
            <div class="container-fluid d-flex justify-content-between align-items-center px-4 py-3">
                <h1 class="h4 mb-0">
                    <a href="{{ route('landing') }}" class="text-decoration-none text-dark">Portfolio Admin</a>
                </h1>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted">{{ Auth::user()->name ?? 'Admin' }}</span>
                    <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Container -->
        <div class="container-fluid">
            <!-- Page Header -->
            @if (isset($page_title))
                <div class="mb-4">
                    <h2 class="fs-2 fw-bold">@yield('page_title')</h2>
                    @if (isset($page_description))
                        <p class="text-muted">@yield('page_description')</p>
                    @endif
                </div>
            @endif

            <!-- Alerts -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <strong>Terjadi Error!</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Content -->
            <div class="bg-white rounded shadow-sm p-4 mb-5">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center py-4 mt-5">
            <p class="text-muted small">© 2026 Dico Triyadi Portfolio. All rights reserved.</p>
        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

</body>

</html>
