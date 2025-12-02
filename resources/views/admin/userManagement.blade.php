@extends('layouts.admin')

@section('title', 'User Management - FindKos Admin')

@section('container')
    <div class="container-fluid p-0">
        <h3 class="fw-bold text-dark mb-4">User Management</h3>

        <div class="card border-0 shadow-sm rounded-4">
            <div
                class="card-header bg-white py-3 border-bottom-0 rounded-top-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-dark">Daftar Pengguna</h5>

                <div class="d-flex gap-2">
                    <input type="text" class="form-control form-control-sm" placeholder="Cari nama/email...">
                    <button class="btn btn-sm btn-accent px-3">Cari</button>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="font-size: 0.95rem;">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4">No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-center">Bergabung</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td class="ps-4">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-secondary rounded-circle me-2 d-flex align-items-center justify-content-center text-white small"
                                                style="width: 35px; height: 35px;">
                                                {{ substr($user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <span class="fw-medium d-block">{{ $user->name }}</span>
                                                <small class="text-muted text-xs">{{ '@' . $user->username }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role == 'admin')
                                            <span class="badge bg-dark">Admin</span>
                                        @elseif($user->role == 'owner')
                                            <span
                                                class="badge bg-info text-dark bg-opacity-25 border border-info">Owner</span>
                                        @else
                                            <span
                                                class="badge bg-success bg-opacity-10 text-success border border-success">Pencari</span>
                                        @endif
                                    </td>
                                    <td class="text-center text-muted small">{{ $user->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        {{-- FORM DELETE USER --}}
                                        <form action="{{ route('admin.users.delete', $user->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger border-0"
                                                onclick="return confirm('Yakin ingin menghapus user {{ $user->name }}? Semua data kos dan booking mereka juga akan terhapus permanen.')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">Belum ada pengguna terdaftar.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top-0 py-3 rounded-bottom-4">
                <small class="text-muted">Total Pengguna: {{ $users->count() }}</small>
            </div>
        </div>
    </div>
@endsection
