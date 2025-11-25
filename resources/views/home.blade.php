@extends('layouts.app')
@section('container')
    <main class="main">

        <!-- Travel Hero Section -->
        <section id="travel-hero" class="travel-hero section dark-background">

            <div class="hero-background">
                <video autoplay="" muted="" loop="">
                    <source src="{{ 'Tour' }}/assets/img/travel/video-2.mp4" type="video/mp4">
                </video>
                <div class="hero-overlay"></div>
            </div>

            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
                            <h1 class="hero-title">Cari tempat ternyaman mu sekarang!</h1>
                            <p class="hero-subtitle">Kami menyediakan berbagai macam akomodasi bagi kalian yang membutuhkan.
                            </p>
                            <div class="hero-buttons">
                                <a href="#" class="btn btn-primary me-3">Cari kos mu sekarang</a>
                                <a href="#" class="btn btn-outline">Tertarik mempromosikan kos?</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
                            <div class="booking-form">
                                <h3 class="form-title">Plan Your Adventure</h3>
                                <form action="" class="">
                                    <div class="form-group mb-3">
                                        <label for="destination">Lokasi</label>
                                        <select name="destination" id="destination" class="form-select" required="">
                                            <option value="">Pilih Lokasi</option>
                                            <option value="banggaeTimur">Banggae Timur</option>
                                            <option value="banggae">Banggae</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="checkin">Departure Date</label>
                                                <input type="date" name="checkin" id="checkin" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="checkout">Return Date</label>
                                                <input type="date" name="checkout" id="checkout" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="adults">Adults</label>
                                                <select name="adults" id="adults" class="form-select" required="">
                                                    <option value="1">1 Adult</option>
                                                    <option value="2">2 Adults</option>
                                                    <option value="3">3 Adults</option>
                                                    <option value="4">4+ Adults</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="children">Children</label>
                                                <select name="children" id="children" class="form-select">
                                                    <option value="0">No Children</option>
                                                    <option value="1">1 Child</option>
                                                    <option value="2">2 Children</option>
                                                    <option value="3">3+ Children</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="tour-type">Tour Type</label>
                                        <select name="tour_type" id="tour-type" class="form-select" required="">
                                            <option value="">Select tour type</option>
                                            <option value="adventure">Adventure</option>
                                            <option value="cultural">Cultural</option>
                                            <option value="relaxation">Relaxation</option>
                                            <option value="family">Family</option>
                                            <option value="luxury">Luxury</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Find Your Perfect
                                        Trip</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Travel Hero Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- About Us Content -->
                {{-- <div class="row align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h3>Explore the World with Confidence</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <span data-purecounter-start="0" data-purecounter-end="1200"
                                        data-purecounter-duration="2" class="purecounter">0</span>
                                    <div class="stat-label">Happy Travelers</div>
                                </div>
                                <div class="stat-item">
                                    <span data-purecounter-start="0" data-purecounter-end="85"
                                        data-purecounter-duration="2" class="purecounter">0</span>
                                    <div class="stat-label">Countries Covered</div>
                                </div>
                                <div class="stat-item">
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="2" class="purecounter">0</span>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-image">
                            <img src="{{ 'Tour' }}/assets/img/travel/showcase-8.webp" alt="Travel Experience"
                                class="img-fluid rounded-4">
                            <div class="experience-badge">
                                <div class="experience-number">15+</div>
                                <div class="experience-text">Years of Excellence</div>
                            </div>
                        </div>
                    </div>
                </div><!-- End About Us Content --> --}}

                <!-- Why Choose Us -->
                <div class="why-choose-section">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3>Kenapa harus kami?</h3>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h4>Ahli Lokal</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium totam.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4>Aman &amp; Terpercaya</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-cash"></i>
                                </div>
                                <h4>Harga Terbaik</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci
                                    velit.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h4>24/7 Support</h4>
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam nisi.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h4>Penawaran Lengkap</h4>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                    molestiae.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h4>Pengalaman Premium</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt
                                    mollit anim.</p>
                            </div>
                        </div>
                    </div><!-- End Features Grid -->
                </div><!-- End Why Choose Us -->

            </div>

        </section><!-- /Why Us Section -->

        <!-- Featured Destinations Section -->
        <section id="featured-destinations" class="featured-destinations section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Akomodasi Di Sekitar Anda</h2>
                <div><span>Cek </span> <span class="description-title">Akomodasi Rekomendasi</span><span> Kami</span>
                </div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="featured-destination">
                            <div class="destination-overlay">
                                <img src="https://placehold.co/500x500" class="img-fluid" alt="Placeholder">
                                <div class="destination-info">
                                    <span class="destination-tag">Pilihan Populer</span>
                                    <h3>Kos Lorem ipsum</h3>
                                    <p class="location"><i class="bi bi-geo-alt-fill"></i> Banggae</p>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem in
                                        vitae quisquam. Consectetur </p>
                                    <div class="destination-meta">
                                        <div class="tours-count">
                                            <i class="bi bi-collection"></i>
                                            <span>2 Kamar</span>
                                        </div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <span>4.9 (412)</span>
                                        </div>
                                    </div>
                                    <div class="price-info">
                                        <span class="starting-from">Mulai dari</span>
                                        <span class="amount">IDR 500K</span>
                                    </div>
                                    <a href="destination-details.html" class="explore-btn">
                                        <span>Lihat Akomodasi</span>
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
                                        <div class="badge-offer">Harga Terbaik</div>
                                    </div>
                                    <div class="destination-details">
                                        <h4>Kos Lorem ipsum</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Banggae Timur</p>
                                        <p class="brief">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                                            tempora aliquid blanditiis, expedita, ullam dignissimos minus esse
                                            necessitatibus pariatur, cupiditate exercitationem! Dolorem quae provident,
                                            fugiat aut ex dolor odit quibusdam!</p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-house"></i> 4 Kamar</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.8</span>
                                            <span class="price">Mulai dari IDR 500K</span>
                                        </div>
                                        <a href="destination-details.html" class="quick-link">Lihat detail <i
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
                                        <h4>Kos Lorem ipsum</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Banggae</p>
                                        <p class="brief">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                                            fugit non sit cupiditate aliquid pariatur saepe voluptatibus asperiores
                                            reprehenderit vel eveniet excepturi officiis delectus dignissimos fuga quibusdam
                                            inventore, suscipit voluptates?</p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-house"></i> 8 Kamar</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.7</span>
                                            <span class="price">Mulai dari IDR 980K</span>
                                        </div>
                                        <a href="destination-details.html" class="quick-link">Lihat detail <i
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
                                        <h4>Kos Lorem</h4>
                                        <p class="location"><i class="bi bi-geo-alt"></i> Banggae</p>
                                        <p class="brief">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
                                            eligendi obcaecati temporibus voluptas ab aliquam modi labore impedit, fugiat ex
                                            voluptate at quas? Sunt porro assumenda, dolorum quo doloremque odit?</p>
                                        <div class="stats-row">
                                            <span class="tour-count"><i class="bi bi-house"></i> 1 Kamar</span>
                                            <span class="rating"><i class="bi bi-star-fill"></i> 4.9</span>
                                            <span class="price">Mulai dari IDR 2,750K</span>
                                        </div>
                                        <a href="destination-details.html" class="quick-link">Lihat detail <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Featured Destinations Section -->

        <!-- Featured Tours Section -->
        <section id="featured-tours" class="featured-tours section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Varian Akomodasi</h2>
                <div><span>Cek </span> <span class="description-title">Penawaran Akomodasi </span><span>Kami</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge">Top Rated</div>
                                <div class="tour-price">$2,150</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Dolor Sit</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 8 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 6</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel eros vitae urna
                                    tincidunt viverra.</p>
                                <div class="tour-highlights">
                                    <span>Lorem</span>
                                    <span>Ipsum</span>
                                    <span>Dolor</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>4.8 (95)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge limited">Only 3 Spots!</div>
                                <div class="tour-price">$5,700</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Expedition</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 10 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 8</span>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium.</p>
                                <div class="tour-highlights">
                                    <span>Amet</span>
                                    <span>Consectetur</span>
                                    <span>Adipiscing</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span>4.6 (55)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge new">Newly Added</div>
                                <div class="tour-price">$1,400</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Discovery</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 5 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 10</span>
                                </div>
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                </p>
                                <div class="tour-highlights">
                                    <span>Sit</span>
                                    <span>Amet</span>
                                    <span>Dolor</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.9 (72)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge">Popular Choice</div>
                                <div class="tour-price">$1,980</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Cruise</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 9 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 15</span>
                                </div>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                    consequatur.</p>
                                <div class="tour-highlights">
                                    <span>Lorem</span>
                                    <span>Ipsum</span>
                                    <span>Set</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>4.7 (110)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge cultural">Eco-Friendly</div>
                                <div class="tour-price">$2,650</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Trek</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 12 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 10</span>
                                </div>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit.</p>
                                <div class="tour-highlights">
                                    <span>Dolor</span>
                                    <span>Ipsum</span>
                                    <span>Amet</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span>4.5 (88)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="https://placehold.co/600x400" class="img-fluid" alt="Placeholder">
                                <div class="tour-badge adventure">Adventure Seekers</div>
                                <div class="tour-price">$3,950</div>
                            </div>
                            <div class="tour-content">
                                <h4>Lorem Ipsum Peaks & Glaciers</h4>
                                <div class="tour-meta">
                                    <span class="duration"><i class="bi bi-clock"></i> 14 Days</span>
                                    <span class="group-size"><i class="bi bi-people"></i> Max 10</span>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                                </p>
                                <div class="tour-highlights">
                                    <span>Lorem</span>
                                    <span>Ipsum</span>
                                    <span>Dolor</span>
                                </div>
                                <div class="tour-action">
                                    <a href="booking.html" class="btn-book">Book Now</a>
                                    <div class="tour-rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.9 (60)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
                    <a href="tours.html" class="btn-view-all">Lihat Semua Akomodasi</a>
                </div>

            </div>

        </section><!-- /Featured Tours Section -->

        <!-- Testimonials Home Section -->
        {{-- <section id="testimonials-home" class="testimonials-home section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <div><span>What Our Customers</span> <span class="description-title">Are Saying</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ 'Tour' }}/assets/img/person/person-m-9.webp" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ 'Tour' }}/assets/img/person/person-f-5.webp" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ 'Tour' }}/assets/img/person/person-f-12.webp" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                        illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ 'Tour' }}/assets/img/person/person-m-12.webp" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                        nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ 'Tour' }}/assets/img/person/person-m-13.webp" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Home Section --> --}}

        <!-- Call To Action Section -->
        {{-- <section id="call-to-action" class="call-to-action section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="content-wrapper">
                        <div class="badge-wrapper">
                            <span class="promo-badge">Limited Time Offer</span>
                        </div>
                        <h2>Discover Your Next Adventure</h2>
                        <p>Unlock incredible destinations with our specially curated travel packages. From exotic
                            beaches to mountain peaks, your perfect getaway awaits.</p>

                        <div class="action-section">
                            <div class="main-actions">
                                <a href="destinations.html" class="btn btn-explore">
                                    <i class="bi bi-compass"></i>
                                    Explore Now
                                </a>
                                <a href="deals.html" class="btn btn-deals">
                                    <i class="bi bi-percent"></i>
                                    View Deals
                                </a>
                            </div>

                            <div class="quick-contact">
                                <span class="contact-label">Need help choosing?</span>
                                <a href="tel:+1555123456" class="contact-link">
                                    <i class="bi bi-telephone"></i>
                                    Call +1 (555) 123-456
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="visual-element">
                        <img src="{{ 'Tour' }}/assets/img/travel/showcase-3.webp" alt="Travel Adventure"
                            class="hero-image" loading="lazy">
                        <div class="image-overlay">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Destinations</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">10K+</span>
                                <span class="stat-label">Happy Travelers</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="newsletter-section" data-aos="fade-up" data-aos-delay="300">
                    <div class="newsletter-card">
                        <div class="newsletter-content">
                            <div class="newsletter-icon">
                                <i class="bi bi-envelope-heart"></i>
                            </div>
                            <div class="newsletter-text">
                                <h3>Stay in the Loop</h3>
                                <p>Get exclusive travel deals and destination guides delivered to your inbox</p>
                            </div>
                        </div>

                        <form class="php-email-form newsletter-form" action="forms/newsletter.php" method="post">
                            <div class="form-wrapper">
                                <input type="email" name="email" class="email-input"
                                    placeholder="Your email address" required="">
                                <button type="submit" class="subscribe-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>

                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Welcome aboard! Check your email for exclusive offers.</div>

                            <div class="trust-indicators">
                                <i class="bi bi-lock"></i>
                                <span>We protect your privacy. Unsubscribe anytime.</span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="benefits-showcase" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefits-header">
                        <h3>Why Choose Our Adventures</h3>
                        <p>Experience the difference with our premium travel services</p>
                    </div>

                    <div class="benefits-grid">
                        <div class="benefit-card" data-aos="flip-left" data-aos-delay="450">
                            <div class="benefit-visual">
                                <div class="benefit-icon-wrap">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="benefit-pattern"></div>
                            </div>
                            <div class="benefit-content">
                                <h4>Handpicked Destinations</h4>
                                <p>Every location is carefully selected by our travel experts for authentic experiences
                                </p>
                            </div>
                        </div>

                        <div class="benefit-card" data-aos="flip-left" data-aos-delay="500">
                            <div class="benefit-visual">
                                <div class="benefit-icon-wrap">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div class="benefit-pattern"></div>
                            </div>
                            <div class="benefit-content">
                                <h4>Award-Winning Service</h4>
                                <p>Recognized for excellence with 5-star ratings and industry awards</p>
                            </div>
                        </div>

                        <div class="benefit-card" data-aos="flip-left" data-aos-delay="550">
                            <div class="benefit-visual">
                                <div class="benefit-icon-wrap">
                                    <i class="bi bi-heart"></i>
                                </div>
                                <div class="benefit-pattern"></div>
                            </div>
                            <div class="benefit-content">
                                <h4>Personalized Care</h4>
                                <p>Tailored itineraries designed around your preferences and travel style</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- /Call To Action Section --> --}}
    </main>
@endsection
