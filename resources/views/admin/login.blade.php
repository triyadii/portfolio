<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../" />
    <title>Admin Login - Dico Triyadi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets_user/img/logo2.png" />
    <link rel="apple-touch-icon" href="assets_user/img/logo2.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" />

    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">

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

    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <style>
            body {
                background-image: url('assets/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpeg');
            }
        </style>

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">

                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="assets_user/img/logo2.png" alt="Dico Triyadi Logo" />

                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="assets_user/img/logo2.png" alt="Dico Triyadi Logo" />

                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">
                        Kelola Portfolio Anda
                    </h1>

                    <div class="text-gray-600 fs-base text-center fw-semibold">
                        Admin Panel - Dico Triyadi Portfolio
                    </div>

                </div>
            </div>

            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">

                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">

                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <div class="alert-content">
                                    <strong>Login Gagal!</strong>
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form class="form w-100" id="kt_sign_in_form" action="{{ route('admin.login.submit') }}"
                            method="POST">
                            @csrf

                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">Admin Login</h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Masukkan kredensial admin Anda
                                </div>
                            </div>

                            <div class="fv-row mb-8">
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" required />
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="fv-row mb-3">
                                <input type="password" placeholder="Password" name="password"
                                    class="form-control bg-transparent @error('password') is-invalid @enderror"
                                    required />
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="remember" />
                                        <span class="form-check-label text-gray-700">Ingat saya</span>
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary" id="kt_sign_in_submit">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Harap tunggu...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>

                        </form>

                        <div class="text-center text-gray-500 fs-6">
                            <a href="{{ route('landing') }}" class="link-primary">Kembali ke Home</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

</body>

</html>
