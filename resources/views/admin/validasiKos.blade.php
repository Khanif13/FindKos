@extends('layouts.admin')

@section('title', 'Validasi Kos - FindKos Admin')

@section('container')
    <div class="container-fluid p-0">
        <h3 class="fw-bold text-dark mb-4">Validasi Kos Baru</h3>

        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white py-3 border-bottom-0 rounded-top-4">
                        <h5 class="fw-bold mb-0 text-dark">Antrian Validasi ({{ $pendingKos->count() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-4">Data Kos</th>
                                        <th>Pemilik</th>
                                        <th>Harga/Bulan</th>
                                        <th>Alamat</th>
                                        <th class="text-center" style="width: 200px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pendingKos as $item)
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center border"
                                                        style="width: 60px; height: 60px; overflow: hidden;">
                                                        @if ($item->foto_utama)
                                                            <img src="{{ asset('storage/' . $item->foto_utama) }}"
                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                        @else
                                                            <i class="bi bi-image text-secondary fs-4"></i>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <div class="fw-bold text-dark">{{ $item->nama_kos }}</div>
                                                        <small
                                                            class="text-muted">{{ Str::limit($item->fasilitas, 30) }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fw-medium">{{ $item->owner->name ?? 'Unknown' }}</div>
                                                <small class="text-muted">Daftar:
                                                    {{ $item->created_at->format('d/m/Y') }}</small>
                                            </td>
                                            <td class="fw-bold text-success">Rp
                                                {{ number_format($item->harga, 0, ',', '.') }}
                                            </td>
                                            <td>{{ Str::limit($item->alamat_lengkap, 40) }}</td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">

                                                    {{-- FORM APPROVE --}}
                                                    <form action="{{ route('admin.kos.approve', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-success text-white px-3" title="Setujui"
                                                            onclick="return confirm('Apakah Anda yakin ingin menyetujui kos ini?')">
                                                            <i class="bi bi-check-lg"></i>
                                                        </button>
                                                    </form>

                                                    {{-- FORM REJECT --}}
                                                    <form action="{{ route('admin.kos.reject', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-danger text-white px-3"
                                                            title="Tolak"
                                                            onclick="return confirm('Apakah Anda yakin ingin menolak kos ini?')">
                                                            <i class="bi bi-x-lg"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-5">
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class="bi bi-check-circle text-success fs-1 mb-3"></i>
                                                    <h6 class="text-muted">Tidak ada antrian. Semua kos sudah divalidasi!
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
