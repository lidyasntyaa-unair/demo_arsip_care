<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Konservator - Arsip Care</title>
    <link rel="stylesheet" href="{{ asset('css/konsultasi_konservator.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="brand-logo">
                <div>
                    <span class="brand-title">Arsip Care</span>
                    <span class="brand-subtitle">Preservasi & Restorasi Arsip</span>
                </div>
            </a>
            <div class="nav-links">
                <a href="/">Beranda</a>
                <a href="/asesmen">Konsultasi</a>
                <a href="/katalog">Katalog</a>
                <a href="/konsultasi-konservator" class="active">Jasa Konservator</a>
            </div>
        </div>
    </nav>

    <!-- CONTAINER UTAMA -->
    <div class="chat-app-container">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <button type="button" class="btn-new-chat" id="btnNewChat">+ Obrolan Baru</button>
            <div class="sidebar-section">
                <span class="sidebar-title">RIWAYAT KONSULTASI</span>
                <div class="chat-history-item active">
                    <strong>Penanganan Ijazah Basah</strong>
                    <small>Aktif • Baru saja</small>
                </div>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="chat-main-content">
            <!-- SUB HEADER -->
            <div class="conservator-sub-header">
                <div class="sub-header-left">
                    <div>
                        <h3>Asisten Konservator</h3>
                        <p>Standar ANRI & ISO 11799 | Layanan Konsultasi Direct WhatsApp</p>
                    </div>
                </div>
            </div>

            <!-- HERO TITLE -->
            <div class="chat-hero">
                <h2>Konsultasi Penanganan & Preservasi Dokumen</h2>
                <p>Tanyakan panduan pertolongan pertama atau klarifikasi penanganan dokumen rapuh Anda secara langsung ke Konservator.</p>
            </div>

            <!-- MESSAGES CONTAINER -->
            <div class="chat-messages-container" id="chatMessages">
                <!-- Chat bubble akan dirender di sini via JS -->
            </div>

            <!-- QUICK PROMPTS -->
            <div class="quick-prompts-grid">
                <div class="prompt-card">
                    <span class="prompt-icon">📜</span>
                    <p>Panduan untuk merawat kertas surat tanah bertahun-tahun?</p>
                </div>
                <div class="prompt-card">
                    <span class="prompt-icon">💧</span>
                    <p>Bagaimana cara menangani sertifikat tanah yang terkena banjir?</p>
                </div>
            </div>

            <!-- INPUT FORM -->
            <div class="chat-input-wrapper">
                <form id="chatForm" class="chat-form">
                    <input type="text" id="chatInput" placeholder="Tanyakan gejala kerusakan dokumen atau pedoman bahan kearsipan..." autocomplete="off" required>
                    <button type="submit" class="btn-send">Kirim ke WA →</button>
                </form>
            </div>
        </main>
    </div>

    <!-- SCRIPT INTI -->
    <script>
        window.waNumber = "{{ $waNumber }}";
    </script>
    <script src="{{ asset('js/konsultasi_konservator.js') }}"></script>
</body>
</html>
