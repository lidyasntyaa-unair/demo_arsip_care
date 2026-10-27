<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun Baru - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

  <div class="auth-card">
    <div class="auth-header">
      <a href="{{ url('/') }}" class="auth-brand">
        <img src="{{ asset('images/logo arsipcare.jpg') }}" alt="Logo Arsip Care">
        <span style="font-weight: 800; font-size: 1.1rem; color: var(--primary-dark);">Arsip Care</span>
      </a>
      <h1 class="auth-title">Buat Akun Baru</h1>
      <p class="auth-subtitle">Bergabung dengan ekosistem preservasi dan restorasi dokumen nasional.</p>
    </div>

    @if ($errors->any())
      <div class="alert-danger">
        <ul style="padding-left: 1rem; margin: 0;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Contoh: Farrel Moh Rizky" required>
      </div>

      <div class="form-group">
         <label for="username">Username / Nama Pengguna</label>
        <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" placeholder="Contoh: farrel_moh" required>
        </div>

      <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="nama@email.com" required>
      </div>

      <div class="form-group">
        <label for="no_hp">Nomor WhatsApp / HP</label>
        <input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ old('no_hp') }}" placeholder="085718192720">
      </div>

      <div class="form-group">
        <label for="role">Daftar Sebagai</label>
        <select id="role" name="role" class="form-control" onchange="toggleKonservatorFields(this.value)" required>
          <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Pengguna / Pemilik Dokumen</option>
          <option value="konservator" {{ old('role') == 'konservator' ? 'selected' : '' }}>Konservator / Pakar Restorasi</option>
        </select>
      </div>

      <div class="form-group" id="spesialisasiGroup" style="display: none;">
        <label for="spesialisasi">Spesialisasi / Akreditasi Kearsipan</label>
        <input type="text" id="spesialisasi" name="spesialisasi" class="form-control" value="{{ old('spesialisasi') }}" placeholder="Contoh: Sertifikasi ANRI / Deasidifikasi Kimia">
      </div>

      <div class="form-group">
        <label for="password">Kata Sandi (Minimal 8 karakter)</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="••••••••" required>
      </div>

      <button type="submit" class="btn-auth">Daftar Akun Sekarang &rarr;</button>
    </form>

    <div class="auth-footer">
      Sudah memiliki akun? <a href="{{ route('login') }}">Masuk di Sini</a>
    </div>
  </div>

  <script>
    function toggleKonservatorFields(role) {
      const group = document.getElementById('spesialisasiGroup');
      if (role === 'konservator') {
        group.style.display = 'block';
      } else {
        group.style.display = 'none';
      }
    }
    window.onload = function() {
      toggleKonservatorFields(document.getElementById('role').value);
    };
  </script>

</body>
</html>
