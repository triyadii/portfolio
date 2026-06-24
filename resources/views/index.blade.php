@include('layouts.header')

<body class="index-page">

    <header id="header" class="header">
        <div class="container">

            <div class="navbar-glass">

                <a href="#" class="logo">
                    <span>Dii</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero-section dark-background">
            <div id="particles-js"></div>
            <div class="aurora aurora-1"></div>
            <div class="aurora aurora-2"></div>
            <div class="aurora aurora-3"></div>
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1>
                            Hi, I'm
                            <span class="gradient-text">Dico Triyadi</span>
                        </h1>

                        <h2>
                            <span class="typed"
                                data-typed-items="Software Engineer, Full Stack Developer, Freelancer"></span>
                        </h2>

                        <p>
                            Building scalable web and mobile applications using
                            Laravel, Flutter, PHP, MySQL, And REST API.
                        </p>

                        <div class="social-links mt-4">
                            <a href="https://github.com/triyadii" target="_blank" rel="noopener noreferrer"><i
                                    class="bi bi-github"></i></a>
                            <a href="https://www.linkedin.com/in/m-dico-triyadi-780171199/" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                            <a href="mailto:m.dicotriyadi@gmail.com" target="_blank" rel="noopener noreferrer"><i
                                    class="bi bi-envelope"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </section>

        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center gy-4">

                    <div class="col-lg-5 text-center">
                        <img src="assets_user/img/profile-img2.jpg"
                            class="img-fluid rounded-circle profile-img-large mb-3" alt="Dico Triyadi">
                    </div>

                    <div class="col-lg-7">
                        <div class="about-card p-4 rounded">
                            <h3 class="mb-1">About Me</h3>
                            <p class="lead"><strong>Software Engineer — Full Stack & Mobile</strong></p>
                            <p class="lead">I build scalable web and mobile applications using Laravel, Flutter,
                                PHP,
                                MySQL and modern cloud technologies. I focus on clean, maintainable code and
                                delivering
                                business value.</p>

                            <div class="d-flex flex-wrap gap-2 my-3">
                                <a href="mailto:m.dicotriyadi@gmail.com"
                                    class="btn btn-outline-primary btn-sm">Email</a>
                                <a href="https://wa.me/6282275849670?text=Halo%20Dico,%20saya%20tertarik%20dengan%20jasa%20Anda."
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary btn-sm">WhatsApp</a>
                                <a href="https://www.linkedin.com/in/m-dico-triyadi-780171199/" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">LinkedIn</a>
                            </div>

                            <div class="row gy-3 mt-3">
                                <div class="col-12 col-md-6">
                                    <h5 class="mb-2 text-white">Backend Development</h5>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-secondary">PHP</span>
                                        <span class="badge bg-secondary">Laravel</span>
                                        <span class="badge bg-secondary">REST API</span>
                                        <span class="badge bg-secondary">MySQL</span>
                                    </div>

                                    <h5 class="mb-2 text-white">Frontend Development</h5>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-secondary">HTML</span>
                                        <span class="badge bg-secondary">CSS</span>
                                        <span class="badge bg-secondary">JavaScript</span>
                                        <span class="badge bg-secondary">Bootstrap</span>
                                        <span class="badge bg-secondary">Tailwind CSS</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="mb-2 text-white">Mobile Development</h5>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-secondary">Flutter</span>
                                        <span class="badge bg-secondary">Dart</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Web Development</h3>
                            </a>
                            <p>Build modern and scalable web applications.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Mobile Development</h3>
                            </a>
                            <p>Create cross-platform mobile applications using Flutter.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-server"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Backend Engineering</h3>
                            </a>
                            <p>Design APIs and backend systems for business applications.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>System Integration</h3>
                            </a>
                            <p>Connect multiple systems and automate business workflows.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->



        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Koleksi project yang telah kami selesaikan dengan teknologi terkini dan solusi inovatif.</p>
            </div><!-- End Section Title -->

            <div class="container">

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

                @if ($projects->count() >= 6)
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('portfolio.all') }}" class="btn btn-primary">
                            Lihat Keseluruhan <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                @endif

            </div>

        </section><!-- /Portfolio Section -->
    </main>

    {{-- Chat Widget --}}
    <style>
        .chat-toggle {
            position: fixed; bottom: 24px; right: 24px;
            padding: 14px 22px; border-radius: 30px;
            background: #4f46e5; color: #fff; border: none;
            font-size: 15px; font-weight: 600; cursor: pointer;
            box-shadow: 0 4px 14px rgba(0,0,0,.25);
            z-index: 1000;
        }
        .chat-window {
            position: fixed; bottom: 96px; right: 24px;
            width: 370px; max-width: calc(100vw - 32px);
            height: 520px; max-height: calc(100vh - 200px);
            background: #fff; border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,.2);
            display: none; flex-direction: column; overflow: hidden;
            z-index: 1000;
        }
        .chat-window.open { display: flex; }
        .chat-header {
            background: #4f46e5; color: #fff; padding: 16px;
            font-weight: 600; display: flex; justify-content: space-between; align-items: center;
        }
        .chat-header small { font-weight: 400; opacity: .8; display: block; }
        .chat-close { background: none; border: none; color: #fff; font-size: 20px; cursor: pointer; }
        .chat-messages {
            flex: 1; padding: 16px; overflow-y: auto;
            display: flex; flex-direction: column; gap: 12px;
        }
        .chat-messages .msg { max-width: 80%; padding: 10px 14px; border-radius: 14px; font-size: 14px; line-height: 1.5; word-wrap: break-word; white-space: pre-wrap; }
        .chat-messages .msg.user { align-self: flex-end; background: #4f46e5; color: #fff; border-bottom-right-radius: 4px; }
        .chat-messages .msg.bot { align-self: flex-start; background: #f3f4f6; color: #111; border-bottom-left-radius: 4px; }
        .chat-messages .typing { align-self: flex-start; color: #888; font-size: 13px; font-style: italic; }
        .chat-input {
            display: flex; padding: 12px; border-top: 1px solid #eee; gap: 8px;
        }
        .chat-input input {
            flex: 1; padding: 10px 14px; border: 1px solid #ddd;
            border-radius: 24px; outline: none; font-size: 14px;
        }
        .chat-input input:focus { border-color: #4f46e5; }
        .chat-input button {
            background: #4f46e5; color: #fff; border: none;
            width: 42px; height: 42px; border-radius: 50%; cursor: pointer; font-size: 18px;
        }
        .chat-input button:disabled { opacity: .5; cursor: not-allowed; }
    </style>

    <button class="chat-toggle" onclick="toggleChat()"><i class="bi bi-chat-dots-fill me-2"></i>Chat Asisten Dii</button>
    <div class="chat-window" id="chatWindow">
        <div class="chat-header">
            <div>
                Asisten Dii
            </div>
            <button class="chat-close" onclick="toggleChat()">×</button>
        </div>
        <div class="chat-messages" id="chatMessages">
            <div class="msg bot">Halo! Ada yang bisa saya bantu? 👋</div>
        </div>
        <div class="chat-input">
            <input type="text" id="chatInput" placeholder="Ketik pesan..." onkeydown="if(event.key==='Enter')sendMessage()">
            <button id="sendBtn" onclick="sendMessage()">➤</button>
        </div>
    </div>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        const messagesEl = document.getElementById('chatMessages');
        const inputEl = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendBtn');

        let history = []; // simpan riwayat untuk konteks

        function toggleChat() {
            document.getElementById('chatWindow').classList.toggle('open');
        }

        function addMessage(text, sender) {
            const div = document.createElement('div');
            div.className = 'msg ' + sender;
            div.textContent = text;
            messagesEl.appendChild(div);
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }

        // Tampilkan balasan bot secara bertahap (efek mengetik), per kata
        function typeBotMessage(text) {
            return new Promise((resolve) => {
                const div = document.createElement('div');
                div.className = 'msg bot';
                messagesEl.appendChild(div);

                const words = text.split(' ');
                let i = 0;
                const interval = setInterval(() => {
                    div.textContent += (i === 0 ? '' : ' ') + words[i];
                    i++;
                    messagesEl.scrollTop = messagesEl.scrollHeight;
                    if (i >= words.length) {
                        clearInterval(interval);
                        resolve();
                    }
                }, 180); // jeda antar kata (ms)
            });
        }

        async function sendMessage() {
            const text = inputEl.value.trim();
            if (!text) return;

            addMessage(text, 'user');
            history.push({ role: 'user', content: text });
            inputEl.value = '';
            sendBtn.disabled = true;

            // Indikator mengetik
            const typing = document.createElement('div');
            typing.className = 'typing';
            typing.textContent = 'AI sedang mengetik...';
            messagesEl.appendChild(typing);
            messagesEl.scrollTop = messagesEl.scrollHeight;

            try {
                const res = await fetch("{{ route('chat.send') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({
                        message: text,
                        history: history.slice(-10), // batasi konteks 10 pesan terakhir
                    }),
                });

                const data = await res.json();
                typing.remove();

                const reply = data.reply || 'Maaf, terjadi kesalahan.';
                history.push({ role: 'assistant', content: reply });
                await typeBotMessage(reply);
            } catch (e) {
                typing.remove();
                addMessage('Gagal terhubung ke server.', 'bot');
            } finally {
                sendBtn.disabled = false;
                inputEl.focus();
            }
        }
    </script>

    @include('layouts.footer')
