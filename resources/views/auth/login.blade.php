<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Akun - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

  <div class="auth-card">
    <div class="auth-header">
      <a href="{{ url('/dashboard') }}" class="auth-brand">
        <img src="{{ asset('images/logo arsipcare.jpg') }}" alt="Logo Arsip Care">
        <span style="font-weight: 800; font-size: 1.1rem; color: var(--primary-dark);">Arsip Care</span>
      </a>
      <h1 class="auth-title">Selamat Datang Kembali</h1>
      <p class="auth-subtitle">Masuk untuk mengelola asesmen dan layanan konservasi dokumen Anda.</p>
    </div>

    @if ($errors->any())
      <div class="alert-danger">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="nama@email.com" required autofocus>
      </div>

      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
      </div>

      <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem;">
        <input type="checkbox" id="remember" name="remember" style="accent-color: var(--teal-accent);">
        <label for="remember" style="font-weight: 500; font-size: 0.8rem; cursor: pointer; margin-bottom: 0;">Ingat Saya di Perangkat Ini</label>
      </div>

      <button type="submit" class="btn-auth">Masuk ke Akun &rarr;</button>
    </form>

    <div class="auth-footer">
      Belum memiliki akun? <a href="{{ route('register') }}">Daftar Sekarang</a>
    </div>
  </div>

</body>
</html>
