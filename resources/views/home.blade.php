@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row align-items-center mb-4">
        <div class="col-lg-7">
            <div class="hero shadow-sm">
                <h1 class="display-6">Contoh Halaman Single-file dengan Bootstrap</h1>
                <p class="lead text-muted">
                    Semua kode (HTML + CSS) ada di file yang sama. 
                    Gunakan CDN Bootstrap untuk komponen dan utilitas cepat.
                </p>
                <p>
                    <a href="#fitur" class="btn btn-primary me-2">Lihat Fitur</a>
                    <a href="#kontak" class="btn btn-outline-primary">Hubungi</a>
                </p>
            </div>
        </div>

        <div class="col-lg-5 d-none d-lg-block">
            <img src="https://picsum.photos/seed/bootstrap/640/360" alt="placeholder" class="img-fluid rounded" />
        </div>
    </div>

    <!-- Section fitur -->
    <section id="fitur" class="mb-5">
        <h2 class="h4 mb-3">Fitur</h2>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://picsum.photos/seed/1/800/400" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Responsive</h5>
                        <p class="card-text text-muted">
                            Tata letak otomatis menyesuaikan layar (mobile, tablet, desktop).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://picsum.photos/seed/2/800/400" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Komponen Siap Pakai</h5>
                        <p class="card-text text-muted">
                            Navbar, modal, carousel, form — tinggal pakai class Bootstrap.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://picsum.photos/seed/3/800/400" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Ringkas</h5>
                        <p class="card-text text-muted">
                            Semua gaya khusus dimasukkan ke &lt;style&gt; sehingga tidak perlu file CSS terpisah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form kontak -->
    <section id="kontak" class="mb-5">
        <h2 class="h4 mb-3">Kontak</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama kamu" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nama@contoh.com" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <p class="text-muted">Atau hubungi kami di:</p>
                    <p class="mb-1"><strong>Email:</strong> hello@example.com</p>
                    <p><strong>Telp:</strong> +62 812-3456-7890</p>
                </div>
            </div>
        </div>
    </section>
@endsection
