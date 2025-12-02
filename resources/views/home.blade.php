@extends('layouts.app')
@section('container')
    <main class="main">

        <section id="travel-hero" class="travel-hero section dark-background">

            <div class="hero-background">
                <video autoplay="" muted="" loop="">
                    <source src="{{ asset('Tour/assets/img/travel/video-2.mp4') }}" type="video/mp4">
                </video>
                <div class="hero-overlay"></div>
            </div>

            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
                            <h1 class="hero-title">Temukan Kos Idamanmu Sekarang!</h1>
                            <p class="hero-subtitle">Ribuan pilihan kos nyaman, strategis, dan harga terbaik siap huni.</p>
                            <div class="hero-buttons">
                                <a href="#featured-tours" class="btn btn-primary me-3">Jelajahi Kos</a>
                                <a href="#" class="btn btn-outline">Sewakan Kos Anda</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
                            <div class="booking-form">
                                <h3 class="form-title">Cari Kos</h3>
                                <form action="" class="">
                                    {{-- Lokasi --}}
                                    <div class="form-group mb-3">
                                        <label for="destination">Lokasi / Kampus</label>
                                        <select name="destination" id="destination" class="form-select" required="">
                                            <option value="">Pilih Area</option>
                                            <option value="banggaeTimur">Banggae Timur</option>
                                            <option value="banggae">Banggae</option>
                                            <option value="majene">Majene Kota</option>
                                        </select>
                                    </div>

                                    {{-- Tanggal & Durasi --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="checkin">Tanggal Masuk</label>
                                                <input type="date" name="checkin" id="checkin" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="duration">Durasi Sewa</label>
                                                <select name="duration" id="duration" class="form-select">
                                                    <option value="bulanan">Bulanan</option>
                                                    <option value="tahunan">Tahunan</option>
                                                    <option value="harian">Harian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tipe Kos & Fasilitas (Menggantikan Adults/Children) --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tipe_kos">Tipe Kos</label>
                                                <select name="tipe_kos" id="tipe_kos" class="form-select" required="">
                                                    <option value="campur">Campur</option>
                                                    <option value="putra">Putra</option>
                                                    <option value="putri">Putri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="fasilitas">Fasilitas Utama</label>
                                                <select name="fasilitas" id="fasilitas" class="form-select">
                                                    <option value="">Semua</option>
                                                    <option value="ac">AC</option>
                                                    <option value="kmdalam">K. Mandi Dalam</option>
                                                    <option value="wifi">WiFi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Harga (Menggantikan Tour Type) --}}
                                    <div class="form-group mb-3">
                                        <label for="price_range">Rentang Harga</label>
                                        <select name="price_range" id="price_range" class="form-select" required="">
                                            <option value="">Semua Harga</option>
                                            <option value="under_500">Dibawah 500rb</option>
                                            <option value="500_1000">500rb - 1 Juta</option>
                                            <option value="above_1000">Diatas 1 Juta</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Temukan Kos</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="why-us" class="why-us section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="why-choose-section">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3>Kenapa Cari di FindKos?</h3>
                            <p>Kami memastikan pengalaman pencarian tempat tinggal Anda menjadi mudah, aman, dan transparan.
                            </p>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>
                                <h4>Data Terverifikasi</h4>
                                <p>Setiap kos yang terdaftar telah melalui proses verifikasi untuk memastikan keaslian data
                                    dan foto.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                <h4>Transaksi Aman</h4>
                                <p>Pembayaran sewa kos lebih aman melalui sistem kami dengan bukti transaksi yang sah.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-tag"></i>
                                </div>
                                <h4>Harga Transparan</h4>
                                <p>Tidak ada biaya tersembunyi. Harga yang Anda lihat adalah harga yang Anda bayar.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <h4>Chat Pemilik</h4>
                                <p>Hubungi pemilik kos secara langsung melalui fitur chat untuk negosiasi atau tanya jawab.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h4>Lokasi Strategis</h4>
                                <p>Temukan kos yang dekat dengan kampus, kantor, atau pusat keramaian di kota Anda.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h4>Ulasan Penghuni</h4>
                                <p>Baca ulasan jujur dari penghuni sebelumnya untuk memantapkan pilihan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section id="featured-destinations" class="featured-destinations section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Kos Pilihan</h2>
                <div><span>Rekomendasi </span> <span class="description-title">Kos Terpopuler</span><span> Di Area
                        Anda</span>
                </div>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="featured-destination">
                            <div class="destination-overlay">
                                <img src="https://placehold.co/500x500" class="img-fluid" alt="Placeholder">
                                <div class="destination-info">
                                    <span class="destination-tag" style="background-color: #ffc107; color: #000;">Kos
                                        Sultan</span>
                                    <h3>Kos Melati Executive</h3>
                                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Banggae Timur</p>
                                    <p class="description">Kos eksklusif dengan fasilitas lengkap, keamanan 24 jam, dan
                                        parkir luas. Cocok untuk mahasiswa dan karyawan.</p>
                                    <div class="destination-meta">
                                        <div class="tours-count">
                                            <i class="bi bi-door-open"></i>
                                            <span>Sisa 2 Kamar</span>
                                        </div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <span>4.9 (41 Ulasan)</span>
                                        </div>
                                    </div>
                                    <div class="price-info">
                                        <span class="starting-from">Bulanan</span>
                                        <span class="amount">Rp 1.5 Juta</span>
                                    </div>
                                    <a href="#" class="explore-btn">
                                        <span>Lihat Detail</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-3">

                            <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                                <div class="compact-destination">
                                    <div class="destination-image">
                                        <img src="https://placehold.co/200x220" class="img-fluid" alt="Placeholder">
                                        <div class="badge-offer">Promo</div>
                                    </div>
                                    <div class="destination-details">
                                        <h4>Kos Mawar Indah</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Banggae</p>
                                        <p class="brief">Kos nyaman dengan lingkungan tenang. Fasilitas kasur, lemari, dan
                                            meja belajar.</p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-wifi"></i> WiFi Gratis</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.8</span>
                                            <span class="price">Rp 500rb / bln</span>
                                        </div>
                                        <a href="#" class="quick-link">Lihat detail <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                                <div class="compact-destination">
                                    <div class="destination-image">
                                        <img src="https://placehold.co/200x220" class="img-fluid" alt="Placeholder">
                                    </div>
                                    <div class="destination-details">
                                        <h4>Pondok Mahasiswa</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Dekat Kampus</p>
                                        <p class="brief">Hanya 5 menit jalan kaki ke kampus. Air lancar dan bebas banjir.
                                        </p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-droplet-fill"></i> Air PDAM</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.7</span>
                                            <span class="price">Rp 450rb / bln</span>
                                        </div>
                                        <a href="#" class="quick-link">Lihat detail <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                                <div class="compact-destination">
                                    <div class="destination-image">
                                        <img src="https://placehold.co/200x220" class="img-fluid" alt="Placeholder">
                                    </div>
                                    <div class="destination-details">
                                        <h4>Wisma Sejahtera</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Majene Kota</p>
                                        <p class="brief">Bangunan baru, bersih, dan modern. Kamar mandi dalam dengan
                                            shower.</p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-check-circle"></i> Bangunan
                                                Baru</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.9</span>
                                            <span class="price">Rp 800rb / bln</span>
                                        </div>
                                        <a href="#" class="quick-link">Lihat detail <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>
        <section id="featured-tours" class="featured-tours section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Rekomendasi Terbaru</h2>
                <div><span>Cek </span> <span class="description-title">Kos Terbaru </span><span>yang baru
                        ditambahkan</span></div>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Kos Image">
                                <div class="tour-badge" style="background-color: #0d6efd;">PUTRA</div>
                                <div class="tour-price">Rp 600rb</div>
                            </div>
                            <div class="tour-content">
                                <h4>Kos Amanah Putra</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-calendar"></i> Bulanan</span>
                                    <span class="group-size"><i class="bi bi-rulers"></i> 3x3 m</span>
                                </div>
                                <p>Lokasi strategis pinggir jalan raya, akses angkot mudah. Parkir motor luas.</p>
                                <div class="tour-highlights">
                                    <span>Kasur</span>
                                    <span>Lemari</span>
                                    <span>Kipas</span>
                                </div>
                                <div class="tour-action">
                                    <a href="#" class="btn-book">Ajukan Sewa</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.8 (12)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Kos Image">
                                <div class="tour-badge limited" style="background-color: #d63384;">PUTRI</div>
                                <div class="tour-price">Rp 850rb</div>
                            </div>
                            <div class="tour-content">
                                <h4>Wisma Putri Cantika</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-calendar"></i> Bulanan</span>
                                    <span class="group-size"><i class="bi bi-rulers"></i> 4x4 m</span>
                                </div>
                                <p>Khusus putri, ada jam malam (22.00). Dapur umum bersih dan kulkas bersama.</p>
                                <div class="tour-highlights">
                                    <span>K.Mandi Dalam</span>
                                    <span>WiFi</span>
                                    <span>Dapur</span>
                                </div>
                                <div class="tour-action">
                                    <a href="#" class="btn-book">Ajukan Sewa</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.6 (8)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Kos Image">
                                <div class="tour-badge new" style="background-color: #198754;">CAMPUR</div>
                                <div class="tour-price">Rp 1.2 Jt</div>
                            </div>
                            <div class="tour-content">
                                <h4>Paviliun Anggrek</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-calendar"></i> Bulanan</span>
                                    <span class="group-size"><i class="bi bi-house-door"></i> Type Paviliun</span>
                                </div>
                                <p>Bangunan terpisah, cocok untuk pasutri (wajib surat nikah). Listrik token masing-masing.
                                </p>
                                <div class="tour-highlights">
                                    <span>AC</span>
                                    <span>TV</span>
                                    <span>Parkir Mobil</span>
                                </div>
                                <div class="tour-action">
                                    <a href="#" class="btn-book">Ajukan Sewa</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.9 (5)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
                    <a href="#" class="btn-view-all">Lihat Semua Kos</a>
                </div>

            </div>

        </section>
    </main>
@endsection
