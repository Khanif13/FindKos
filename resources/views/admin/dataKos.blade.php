@extends('layouts.admin')

@section('title', 'Data Kos - FindKos Admin')

@section('container')
    <div class="container-fluid p-0">
        <h3 class="fw-bold text-dark mb-4">Semua Data Kos</h3>

        <div class="card border-0 shadow-sm rounded-4">
            <div
                class="card-header bg-white py-3 border-bottom-0 rounded-top-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-dark">Database Kos Aktif</h5>
                <button class="btn btn-sm btn-outline-success"><i class="bi bi-file-earmark-excel me-2"></i>Export
                    Data</button>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4">Nama Kos</th>
                                <th>Pemilik</th>
                                <th>Lokasi</th>
                                <th>Kamar Tersedia</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kos as $item)
                                <tr>
                                    <td class="ps-4">
                                        <div class="fw-bold text-dark">{{ $item->nama_kos }}</div>
                                        <small class="text-muted">Updated: {{ $item->updated_at->diffForHumans() }}</small>
                                    </td>
                                    <td>{{ $item->owner->name ?? '-' }}</td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td>
                                        @if ($item->sisa_kamar > 0)
                                            <span
                                                class="badge bg-info bg-opacity-10 text-info border border-info">{{ $item->sisa_kamar }}
                                                Kamar</span>
                                        @else
                                            <span
                                                class="badge bg-danger bg-opacity-10 text-danger border border-danger">Penuh</span>
                                        @endif
                                    </td>
                                    <td><span class="badge bg-success rounded-pill">Aktif</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-light border text-primary">Detail</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">Belum ada data kos yang aktif.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
