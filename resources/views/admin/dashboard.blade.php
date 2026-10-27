<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <style>
    .admin-layout { display: flex; min-height: 100vh; }
    .admin-sidebar { width: 260px; background: #0B2240; color: #fff; padding: 1.5rem; }
    .admin-sidebar a { color: #94A3B8; text-decoration: none; display: block; padding: 0.75rem 0; font-size: 0.875rem; }
    .admin-sidebar a.active { color: #34AC98; font-weight: bold; }
    .admin-main { flex: 1; background: #F8FAFC; padding: 2rem; }
    .stat-card-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2rem; }
    .stat-card { background: #fff; border: 1px solid #E2E8F0; padding: 1.25rem; border-radius: 0.75rem; }
    .table-card { background: #fff; border: 1px solid #E2E8F0; border-radius: 0.75rem; padding: 1.5rem; }
    table { width: 100%; border-collapse: collapse; margin-top: 1rem; font-size: 0.85rem; }
    th, td { border-bottom: 1px solid #E2E8F0; padding: 0.75rem; text-align: left; }
    th { background: #F8FAFC; color: #0B2240; font-weight: 700; }
    .badge-role { padding: 0.2rem 0.5rem; border-radius: 0.25rem; font-weight: bold; font-size: 0.7rem; }
    .role-admin { background: #FEE2E2; color: #EF4444; }
    .role-konservator { background: #E6F7F4; color: #34AC98; }
    .role-user { background: #E2E8F0; color: #64748B; }
  </style>
</head>
<body>

  <div class="admin-layout">
    <aside class="admin-sidebar">
      <div style="margin-bottom: 2rem;">
        <strong style="font-size: 1.1rem; color: #fff; display: block;">Arsip Care</strong>
        <span style="font-size: 0.7rem; color: #34AC98;">Panel Administrator</span>
      </div>
      <a href="#" class="active">📊 Ringkasan User & Roles</a>
      <a href="{{ url('/') }}">🏠 Kembali ke Beranda</a>

      <form action="{{ route('logout') }}" method="POST" style="margin-top: 3rem;">
        @csrf
        <button type="submit" style="background: none; border: none; color: #EF4444; font-weight: bold; cursor: pointer;">🚪 Keluar (Logout)</button>
      </form>
    </aside>

    <main class="admin-main">
      <h2 style="font-size: 1.5rem; color: #0B2240; margin-bottom: 1.5rem;">Manajemen Pengguna & Akun</h2>

      @if (session('success'))
        <div style="background: #D1FAE5; border: 1px solid #10B981; color: #065F46; padding: 0.75rem; border-radius: 0.5rem; margin-bottom: 1rem; font-size: 0.85rem;">
          {{ session('success') }}
        </div>
      @endif

      <div class="stat-card-grid">
        <div class="stat-card">
          <span style="font-size: 0.75rem; color: #64748B;">Total Pengguna (User)</span>
          <strong style="font-size: 1.5rem; color: #0B2240; display: block; margin-top: 0.25rem;">{{ $totalUsers }}</strong>
        </div>
        <div class="stat-card">
          <span style="font-size: 0.75rem; color: #64748B;">Pakar Konservator</span>
          <strong style="font-size: 1.5rem; color: #34AC98; display: block; margin-top: 0.25rem;">{{ $totalKonservator }}</strong>
        </div>
        <div class="stat-card">
          <span style="font-size: 0.75rem; color: #64748B;">Administrator</span>
          <strong style="font-size: 1.5rem; color: #EF4444; display: block; margin-top: 0.25rem;">{{ $totalAdmin }}</strong>
        </div>
      </div>

      <div class="table-card">
        <h3 style="font-size: 1.1rem; color: #0B2240;">Daftar Akun Terdaftar</h3>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>WhatsApp / HP</th>
              <th>Role</th>
              <th>Spesialisasi / Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $u)
              <tr>
                <td>        {{ $u->id }}</td>
                <td><strong>{{ $u->username }}</strong></td>
                <td>        {{ $u->email }}</td>
                <td>        {{ $u->no_telepon ?? '-' }}</td>
                <td>
                  <span class="badge-role role-{{ $u->role }}">{{ strtoupper($u->role) }}</span>
                </td>
                <td>{{ $u->spesialisasi ?? ($u->status ?? '-') }}</td>
                <td>
                  <form action="{{ route('admin.users.update', $u->id) }}" method="POST" style="display: inline-flex; gap: 0.3rem;">
                    @csrf
                    @method('PUT')
                    <select name="role" style="font-size: 0.75rem; padding: 0.25rem;">
                      <option value="user" {{ $u->role == 'user' ? 'selected' : '' }}>User</option>
                      <option value="konservator" {{ $u->role == 'konservator' ? 'selected' : '' }}>Konservator</option>
                      <option value="admin" {{ $u->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <input type="hidden" name="status" value="{{ $u->status ?? 'Aktif' }}">
                    <button type="submit" style="background: #34AC98; color: #fff; border: none; padding: 0.25rem 0.5rem; border-radius: 0.2rem; cursor: pointer; font-size: 0.75rem;">Simpan</button>
                  </form>

                  <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus akun ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #EF4444; color: #fff; border: none; padding: 0.25rem 0.5rem; border-radius: 0.2rem; cursor: pointer; font-size: 0.75rem;">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div style="margin-top: 1rem;">
          {{ $users->links() }}
        </div>
      </div>
    </main>
  </div>

</body>
</html>
