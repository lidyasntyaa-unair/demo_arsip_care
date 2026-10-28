<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $status ?? 500 }} - {{ $title ?? 'Terjadi Kesalahan' }}</title>

    <!-- Link File CSS -->
    <link rel="stylesheet" href="{{ asset('css/error_page.css') }}">

    <!-- Font Google (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="error-container">
        <div class="error-code-wrapper">
            <h1 class="error-code" id="errorCode">{{ $status ?? 500 }}</h1>
            <div class="ghost-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 10h.01"/>
                    <path d="M15 10h.01"/>
                    <path d="M12 2a8 8 0 0 0-8 8v12l3-3 2.5 2.5L12 19l2.5 2.5L17 19l3 3V10a8 8 0 0 0-8-8z"/>
                </svg>
            </div>
        </div>

        <h2 class="error-title">
            @switch($status ?? 500)
                @case(403)
                    Akses Ditolak
                    @break
                @case(404)
                    Halaman Tidak Ditemukan
                    @break
                @case(419)
                    Sesi Telah Berakhir
                    @break
                @case(500)
                    Kesalahan Server Internal
                    @break
                @default
                    Terjadi Kesalahan
            @endswitch
        </h2>

        <p class="error-message">
            @if(isset($exception) && $exception->getMessage() && config('app.debug'))
                {{ $exception->getMessage() }}
            @else
                @switch($status ?? 500)
                    @case(403)
                        Anda tidak memiliki izin untuk mengakses halaman ini.
                        @break
                    @case(404)
                        Halaman yang Anda tuju tidak ada, telah dihapus, atau alamat URL yang Anda masukkan kurang tepat.
                        @break
                    @case(419)
                        Sesi halaman Anda telah kadaluarsa. Silakan muat ulang halaman.
                        @break
                    @case(500)
                        Terjadi masalah pada server kami. Silakan coba beberapa saat lagi.
                        @break
                    @default
                        Terjadi kesalahan yang tidak terduga pada sistem.
                @endswitch
            @endif
        </p>

        <div class="action-buttons">
            <a href="{{ url('/') }}" class="btn btn-primary">
                Kembali ke Beranda
            </a>
            <button onclick="window.history.back()" class="btn btn-secondary">
                Kembali ke Halaman Sebelumnya
            </button>
        </div>
    </div>

    <!-- Link File JS -->
    <script src="{{ asset('js/error_page.js') }}"></script>
</body>
</html>
