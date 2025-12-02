@extends('layouts.admin')

@section('title', 'Data Pesanan - FindKos Admin')

@section('container')
    <div class="container-fluid p-0">
        <h3 class="fw-bold text-dark mb-4">Riwayat Pesanan</h3>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped align-middle mb-0">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th class="ps-4 py-3">Kode Booking</th>
                                <th class="py-3">Penyewa</th>
                                <th class="py-3">Kos Tujuan</th>
                                <th class="py-3">Tgl Masuk</th>
                                <th class="py-3">Durasi</th>
                                <th class="py-3 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td class="ps-4 fw-bold font-monospace">{{ $booking->kode_booking }}</td>
                                    <td>
                                        <div class="fw-bold">{{ $booking->user->name ?? 'User Terhapus' }}</div>
                                        <small class="text-muted">{{ $booking->user->email ?? '-' }}</small>
                                    </td>
                                    <td>{{ $booking->kos->nama_kos ?? 'Kos Terhapus' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->tanggal_masuk)->format('d M Y') }}</td>
                                    <td>{{ $booking->durasi_sewa }}</td>
                                    <td class="text-center">
                                        @if ($booking->status == 'lunas')
                                            <span class="badge bg-success">Lunas</span>
                                        @elseif($booking->status == 'menunggu_konfirmasi')
                                            <span class="badge bg-warning text-dark">Menunggu Konfirmasi</span>
                                        @else
                                            <span class="badge bg-secondary">Dibatalkan</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">Belum ada transaksi booking.
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
