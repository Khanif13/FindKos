@extends('layouts.admin') {{-- Pastikan ini extend ke 'layouts.admin' --}}

@section('title', 'Dashboard Admin')

@section('container')
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold text-dark mb-1">Dashboard Admin</h3>
                <p class="text-secondary mb-0" style="font-size: 14px;">
                    Selamat datang, Administrator. Berikut ringkasan sistem hari ini.
                </p>
            </div>
            <div class="d-flex align-items-center bg-white px-3 py-2 rounded shadow-sm border">
                <i class="bi bi-calendar-check text-primary me-2"></i>
                <span class="fw-medium">{{ date('d F Y') }}</span>
            </div>
        </div>

        <div class="row g-3 mb-4">
            {{-- Card 1: Total Pencari Kos --}}
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card-stat p-3 h-100 border-start border-4 border-primary">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-secondary small fw-bold text-uppercase mb-1">Pencari Kos</div>
                            {{-- DATA REAL --}}
                            <div class="h3 fw-bold mb-0 text-dark">{{ $totalPencari ?? 0 }}</div>
                        </div>
                        <div class="icon-box bg-light-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: Total Pemilik Kos --}}
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card-stat p-3 h-100 border-start border-4 border-success">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-secondary small fw-bold text-uppercase mb-1">Pemilik Kos</div>
                            {{-- DATA REAL --}}
                            <div class="h3 fw-bold mb-0 text-dark">{{ $totalOwner ?? 0 }}</div>
                        </div>
                        <div class="icon-box bg-light-success">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3: Total Kos Terdaftar --}}
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card-stat p-3 h-100 border-start border-4 border-info">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-secondary small fw-bold text-uppercase mb-1">Total Kos</div>
                            {{-- DATA REAL --}}
                            <div class="h3 fw-bold mb-0 text-dark">{{ $totalKos ?? 0 }}</div>
                        </div>
                        <div class="icon-box bg-light-info">
                            <i class="bi bi-houses-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 4: Menunggu Validasi --}}
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card-stat p-3 h-100 border-start border-4 border-warning">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-secondary small fw-bold text-uppercase mb-1">Perlu Validasi</div>
                            {{-- DATA REAL --}}
                            <div class="h3 fw-bold mb-0 text-danger">{{ $kosPending ?? 0 }}</div>
                        </div>
                        <div class="icon-box bg-light-warning">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div
                        class="card-header bg-white py-3 border-bottom-0 rounded-top-4 d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="bi bi-clock-history text-primary me-2"></i>Kos Baru Ditambahkan
                        </h5>
                        <a href="{{ route('admin.datakos') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-dashboard align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-4">Nama Kos</th>
                                        <th>Pemilik</th>
                                        <th class="text-center">Tanggal Daftar</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- LOOPING DATA REAL --}}
                                    @forelse($latestKos ?? [] as $kos)
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                        style="width: 40px; height: 40px; overflow:hidden;">
                                                        @if ($kos->foto_utama)
                                                            <img src="{{ asset('storage/' . $kos->foto_utama) }}"
                                                                alt="Foto"
                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                        @else
                                                            <i class="bi bi-image text-secondary"></i>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <div class="fw-bold text-dark">{{ $kos->nama_kos }}</div>
                                                        <small class="text-secondary">{{ $kos->lokasi }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $kos->owner->name ?? 'Unknown' }}</td>
                                            <td class="text-center text-secondary">
                                                {{ $kos->created_at->format('d M Y') }}
                                            </td>
                                            <td class="text-center">
                                                @if ($kos->status == 'aktif')
                                                    <span class="badge bg-success rounded-pill">Aktif</span>
                                                @elseif($kos->status == 'pending')
                                                    <span class="badge bg-warning text-dark rounded-pill">Pending</span>
                                                @else
                                                    <span class="badge bg-danger rounded-pill">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4 text-muted">
                                                Belum ada data kos yang masuk.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-white py-3 border-bottom-0 rounded-top-4">
                        <h5 class="fw-bold mb-0 text-dark">Menunggu Validasi</h5>
                        <small class="text-secondary">Kos baru yang butuh persetujuan</small>
                    </div>
                    <div class="card-body py-0">
                        <ul class="list-group list-group-flush list-validation">
                            {{-- LOGIC: Kita ambil kos yang statusnya pending saja untuk list ini (Max 3) --}}
                            @php
                                // Mengambil data pending dari variabel $latestKos atau query terpisah (idealnya dikirim dari controller sebagai $pendingList)
                                // Untuk sementara kita filter manual dari $latestKos jika statusnya pending
                                $pendingList = collect($latestKos ?? [])
                                    ->where('status', 'pending')
                                    ->take(3);
                            @endphp

                            @forelse($pendingList as $item)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-bold text-dark">{{ $item->nama_kos }}</div>
                                            <small class="text-secondary d-block">Owner:
                                                {{ $item->owner->name ?? '-' }}</small>
                                        </div>
                                        <a href="{{ route('admin.validasi') }}"
                                            class="btn btn-sm btn-accent rounded-pill px-3">Cek</a>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-4">
                                    Tidak ada antrian validasi.
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-top-0 text-center py-3 rounded-bottom-4">
                        <a href="{{ route('admin.validasi') }}" class="text-decoration-none small fw-bold"
                            style="color: var(--accent-color);">Lihat Antrian Lengkap</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4 bg-light-primary">
                    <div class="card-body">
                        <h6 class="fw-bold" style="color: var(--accent-color);">ℹ️ Info Sistem</h6>
                        <p class="small mb-0 text-secondary">
                            Pastikan memverifikasi data kos sebelum menyetujuinya untuk menjaga kualitas aplikasi FindKos.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
