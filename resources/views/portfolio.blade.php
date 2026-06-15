@include('layouts.header')

<body class="index-page">

    <header id="header" class="header">
        <div class="container">

            <div class="navbar-glass">

                <a href="{{ route('landing') }}" class="logo">
                    <span>Dii</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('landing') }}#hero">Home</a></li>
                        <li><a href="{{ route('landing') }}#about">About</a></li>
                        <li><a href="{{ route('landing') }}#services">Services</a></li>
                        <li><a href="{{ route('portfolio.all') }}" class="active">Portfolio</a></li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>

    <main class="main">

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section" style="padding-top: 120px;">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Semua Portfolio</h2>
                <p>Koleksi lengkap project yang telah kami selesaikan, diurutkan dari yang terbaru.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="mb-4">
                    <a href="{{ route('landing') }}#portfolio" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Kembali
                    </a>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    @forelse($projects as $project)
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-card">
                                @if ($project->gambar)
                                    <img src="{{ asset('storage/' . $project->gambar) }}" class="portfolio-card-img"
                                        alt="{{ $project->namaProject }}">
                                @else
                                    <img src="https://via.placeholder.com/400x300?text={{ urlencode($project->namaProject) }}"
                                        class="portfolio-card-img" alt="{{ $project->namaProject }}">
                                @endif
                                <div class="portfolio-card-body d-flex flex-column" style="min-height: 280px;">
                                    <div>
                                        <h4>{{ $project->namaProject }}</h4>
                                        <p>{{ Str::limit($project->keterangan, 200) }}</p>
                                        <div class="portfolio-stack">
                                            @foreach (explode(',', $project->technology) as $tech)
                                                <span class="badge">{{ trim($tech) }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        @if ($project->link)
                                            <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                                class="btn btn-outline-primary btn-sm">View Project</a>
                                        @else
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">Belum ada project yang ditampilkan.</p>
                        </div>
                    @endforelse
                </div>

            </div>

        </section><!-- /Portfolio Section -->
    </main>

    @include('layouts.footer')
