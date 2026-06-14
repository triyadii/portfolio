<!DOCTYPE html>

<html lang="id">
	<!--begin::Head-->
	<head>
		<title>Dico Triyadi - Portfolio | Full Stack Developer</title>
		<meta charset="utf-8" />
		<meta name="description" content="Portfolio Dico Triyadi - Professional Full Stack Web Developer dengan spesialisasi Laravel, Vue.js, PHP, dan teknologi modern lainnya." />
		<meta name="keywords" content="dico triyadi, portfolio, web developer, full stack, laravel, php, freelance, javascript, mysql" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Dico Triyadi - Portfolio | Full Stack Developer" />
		<meta property="og:url" content="http://localhost" />
		<meta property="og:site_name" content="Dico Triyadi Portfolio" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<i class="ki-outline ki-abstract-14 fs-2hx"></i>
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="#kt_body" class="d-flex align-items-center text-decoration-none">
										<span class="text-white fw-bold fs-3 logo-default">Dico Triyadi</span>
										<span class="text-dark fw-bold fs-3 logo-sticky">Dico Triyadi</span>
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#about" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang & Skill</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="#contact" class="btn btn-success" data-kt-scroll-toggle="true">Hubungi Saya</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Hi, Saya Dico Triyadi
							<br />Spesialis Dalam Pengembangan 
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Web Application</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="#portfolio" class="btn btn-success fs-5 fw-bold px-8 py-4" data-kt-scroll-toggle="true">Lihat Project Saya</a>
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Tech Stack Badges-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<span class="text-gray-500 fw-bold fs-6 me-4 mb-3">TECH STACK UTAMA:</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">Laravel</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">PHP</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">Vue.js</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">JavaScript</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">MySQL</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">Bootstrap 5</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">Tailwind CSS</span>
							<span class="badge badge-light-success fs-6 fw-semibold px-4 py-3 m-2">Git</span>
						</div>
						<!--end::Tech Stack Badges-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::About Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2" id="about">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-gray-900 mb-5" data-kt-scroll-offset="{default: 100, lg: 150}">Tentang Saya & Skill</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-semibold max-w-800px mx-auto">
							Profil profesional dan daftar teknologi serta framework yang saya gunakan untuk membangun solusi web terbaik.
						</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-md-20">
						<!--begin::Col-->
						<div class="col-md-6 px-5">
							<div class="card bg-light border-0 shadow-sm h-100">
								<div class="card-body p-10">
									<h4 class="text-gray-900 fw-bold fs-2 mb-6">Tentang Dico Triyadi</h4>
									<p class="fs-5 text-gray-700 fw-normal leading-relaxed mb-6">
										Saya adalah seorang <strong>Full Stack Web Developer</strong> yang berdedikasi tinggi dan berfokus pada kualitas kode serta user experience. Saya memiliki ketertarikan yang mendalam dalam memecahkan masalah kompleks melalui teknologi dan pemrograman web.
									</p>
									<p class="fs-5 text-gray-700 fw-normal leading-relaxed mb-6">
										Dengan pengalaman mengembangkan berbagai aplikasi web dari sistem informasi internal hingga platform e-commerce, saya selalu berusaha menggunakan best practices dalam penulisan kode untuk menghasilkan produk yang aman, cepat, dan mudah dipelihara.
									</p>
									<div class="d-flex align-items-center mt-8">
										<div class="symbol symbol-60px symbol-circle me-5">
											<div class="symbol-label fs-2 fw-bold bg-success text-inverse-success">DT</div>
										</div>
										<div class="d-flex flex-column">
											<span class="text-gray-900 fw-bold fs-5">Dico Triyadi</span>
											<span class="text-muted fw-semibold fs-6">Full Stack Web Developer</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 px-5">
							<div class="card bg-light border-0 shadow-sm h-100">
								<div class="card-body p-10">
									<h4 class="text-gray-900 fw-bold fs-2 mb-6">Teknologi & Keahlian</h4>
									
									<div class="mb-6">
										<h5 class="text-success fw-bold fs-5 mb-3">Backend Development</h5>
										<div class="d-flex flex-wrap gap-2">
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-laravel text-danger me-2"></i>Laravel Framework</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-php text-info me-2"></i>PHP Language</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-node-js text-success me-2"></i>Node.js / Express</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fas fa-link text-primary me-2"></i>RESTful API</span>
										</div>
									</div>

									<div class="mb-6">
										<h5 class="text-success fw-bold fs-5 mb-3">Frontend Development</h5>
										<div class="d-flex flex-wrap gap-2">
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-vuejs text-success me-2"></i>Vue.js</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-js text-warning me-2"></i>JavaScript (ES6+)</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-bootstrap text-purple me-2"></i>Bootstrap 5</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fas fa-palette text-info me-2"></i>Tailwind CSS</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-html5 text-danger me-2"></i>HTML5 & CSS3</span>
										</div>
									</div>

									<div>
										<h5 class="text-success fw-bold fs-5 mb-3">Databases & Tools</h5>
										<div class="d-flex flex-wrap gap-2">
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fas fa-database text-primary me-2"></i>MySQL / PostgreSQL</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-git-alt text-danger me-2"></i>Git Version Control</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-docker text-primary me-2"></i>Docker Containers</span>
											<span class="badge badge-white border text-gray-800 fs-6 py-3 px-4"><i class="fab fa-linux text-dark me-2"></i>Linux OS / VPS</span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::About Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Heading-->
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
							<!--begin::Title-->
							<h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single tool 
							<br />for different amazing and great useful admin</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Statistics-->
						<div class="d-flex flex-center">
							<!--begin::Items-->
							<div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-outline ki-element-11 fs-2tx text-white mb-3"></i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Known Companies</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-outline ki-chart-pie-4 fs-2tx text-white mb-3"></i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80" data-kt-countup-suffix="K+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Statistic Reports</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<i class="ki-outline ki-basket fs-2tx text-white mb-3"></i>
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35" data-kt-countup-suffix="M+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-semibold fs-5 lh-0">Secure Payments</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Statistics-->
						<!--begin::Testimonial-->
						<div class="fs-2 fw-semibold text-muted text-center mb-3">
						<span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a 
						<br />
						<span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way 
						<span class="fs-1 lh-1 text-gray-700">“</span></div>
						<!--end::Testimonial-->
						<!--begin::Author-->
						<div class="fs-2 fw-semibold text-muted text-center">
							<a href="account/security.html" class="link-primary fs-4 fw-bold">Marcus Levy,</a>
							<span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
						</div>
						<!--end::Author-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->

			<div class="mb-lg-n15 position-relative z-index-2" id="portfolio">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Card-->
					<div class="card shadow-lg" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
						<!--begin::Card body-->
						<div class="card-body p-lg-20">
							<!--begin::Heading-->
							<div class="text-center mb-15">
								<!--begin::Title-->
								<h3 class="fs-2hx text-gray-900 mb-5">Project yang Telah Ditangani</h3>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="fs-5 text-muted fw-semibold">Berikut adalah beberapa portfolio project yang telah saya kerjakan dengan berbagai macam teknologi modern.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->

							<!--begin::Projects Grid-->
							<div class="row g-10">
								@forelse($projects as $project)
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4">
										<!--begin::Card-->
										<div class="card border border-2 border-gray-100 hover-elevate-up h-100 shadow-sm">
											<!--begin::Image-->
											<div class="card-rounded-top overflow-hidden position-relative">
												@if($project->gambar)
													<img src="{{ asset($project->gambar) }}" alt="{{ $project->namaProject }}" class="w-100" style="height: 200px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/12ce5d/ffffff?text={{ urlencode($project->namaProject) }}'"/>
												@else
													<img src="https://placehold.co/600x400/12ce5d/ffffff?text={{ urlencode($project->namaProject) }}" alt="{{ $project->namaProject }}" class="w-100" style="height: 200px; object-fit: cover;"/>
												@endif
											</div>
											<!--end::Image-->
											<!--begin::Body-->
											<div class="card-body d-flex flex-column p-7">
												<!--begin::Title-->
												<h4 class="text-gray-900 fw-bold fs-3 mb-2">{{ $project->namaProject }}</h4>
												<!--end::Title-->
												<!--begin::Technologies-->
												<div class="mb-4">
													@foreach(explode(',', $project->technology) as $tech)
														<span class="badge badge-light-success fs-8 fw-bold me-1 mb-1">{{ trim($tech) }}</span>
													@endforeach
												</div>
												<!--end::Technologies-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-normal fs-6 flex-grow-1 mb-5" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
													{{ $project->keterangan }}
												</p>
												<!--end::Description-->
												<!--begin::Link-->
												@if($project->link)
													<a href="{{ $project->link }}" target="_blank" class="btn btn-sm btn-success w-100">
														Lihat Project <i class="ki-outline ki-arrow-right fs-6 ms-1"></i>
													</a>
												@else
													<button disabled class="btn btn-sm btn-light w-100">
														Link Tidak Tersedia
													</button>
												@endif
												<!--end::Link-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								@empty
									<!--begin::Empty State-->
									<div class="col-12 text-center py-10">
										<div class="symbol symbol-100px mb-5">
											<i class="ki-outline ki-abstract-26 fs-3x text-muted"></i>
										</div>
										<h4 class="text-gray-600 fw-bold fs-4">Belum ada project</h4>
										<p class="text-muted">Data project akan segera ditambahkan.</p>
									</div>
									<!--end::Empty State-->
								@endforelse
							</div>
							<!--end::Projects Grid-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Projects Section-->
			<!--begin::Contact Section-->
			<div class="py-20 position-relative z-index-2" id="contact">




				<!--end::Curve bottom-->
			</div>
			<!--end::Pricing Section-->
			<!--begin::Testimonials Section-->
			<div class="mt-20 mb-n20 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-gray-900 mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool 
						<br />for different amazing and great useful admin</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row g-lg-10 mb-10 mb-lg-20">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template 
									<br />and the most well structured</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Paul Miles</a>
										<span class="text-muted d-block fw-bold">Development Lead</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template 
									<br />and the most well structured</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Janya Clebert</a>
										<span class="text-muted d-block fw-bold">Development Lead</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Rating-->
									<div class="rating mb-6">
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
										<div class="rating-label me-2 checked">
											<i class="ki-outline ki-star fs-5"></i>
										</div>
									</div>
									<!--end::Rating-->
									<!--begin::Title-->
									<div class="fs-2 fw-bold text-gray-900 mb-3">This is by far the cleanest template 
									<br />and the most well structured</div>
									<!--end::Title-->
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/300-16.jpg" class="" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Steave Brown</a>
										<span class="text-muted d-block fw-bold">Development Lead</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Highlight-->
					<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
						<!--begin::Content-->
						<div class="my-2 me-5">
							<!--begin::Title-->
							<div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Start With Metronic Today, 
							<span class="fw-normal">Speed Up Development!</span></div>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Join over 100,000 Professionals Community to Stay Ahead</div>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Link-->
						<a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>
						<!--end::Link-->
					</div>
					<!--end::Highlight-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Would you need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to 
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">How About a Custom Project?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service. 
									<a href="pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-semibold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bold text-gray-500 mb-6">More for Metronic</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-semibold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="https://www.facebook.com/keenthemes" class="mb-6">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://github.com/KeenthemesHub" class="mb-6">
											<img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://twitter.com/keenthemes" class="mb-6">
											<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://dribbble.com/keenthemes" class="mb-6">
											<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="https://www.instagram.com/keenthemes" class="mb-6">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="landing.html">
									<img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">&copy; 2024 Keenthemes Inc.</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-outline ki-arrow-up"></i>
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>