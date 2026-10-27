<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        $totalUsers = User::where('role', 'user')->count();
        $totalKonservator = User::where('role', 'konservator')->count();
        $totalAdmin = User::where('role', 'admin')->count();

        return view('admin.dashboard', compact('users', 'totalUsers', 'totalKonservator', 'totalAdmin'));
    }

    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:admin,konservator,user',
            'status' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Data akun berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Pengguna berhasil dihapus!');
    }
}
