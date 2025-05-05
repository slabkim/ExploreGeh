@extends('layouts.main')

@section('style')
    <style>
        a {
            text-decoration: none !important;
        }

        .body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9fafb;
            padding: 3rem 1rem 4rem;
            margin: 0;
        }

        .kategori-title {
            font-weight: 400;
            font-size: 1.5rem;
            color: #111827;
            text-align: center;
            margin-bottom: 0.25rem;
            user-select: none;
        }

        .kategori-subtitle {
            font-size: 0.625rem;
            color: #6b7280;
            letter-spacing: 0.15em;
            text-align: center;
            margin-bottom: 3rem;
            user-select: none;
            font-weight: 400;
        }

        .kategori-subtitle .highlight {
            color: #dc2626;
            font-weight: 600;
        }

        .kategori-dot {
            display: inline-block;
            width: 0.375rem;
            height: 0.375rem;
            background-color: #dc2626;
            border-radius: 50%;
            margin-left: 0.25rem;
            position: relative;
            top: 0.1rem;
        }

        .kategori-card {
            border-radius: 0.5rem;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 4px 6px rgb(0 0 0 / 0.1);
            position: relative;
            user-select: none;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .kategori-card:hover {
            transform: scale(1.03);
            filter: brightness(85%);
            z-index: 10;
        }

        .kategori-card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            border-radius: 0.5rem;
            transition: transform 0.3s ease;
        }

        .kategori-card:hover .kategori-card-img-top {
            transform: scale(1.05);
        }

        .kategori-card-img-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .kategori-card:hover .kategori-card-img-overlay {
            background-color: rgba(0, 0, 0, 0.45);
        }

        .kategori-card-img-overlay-dark {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .kategori-card:hover .kategori-card-img-overlay-dark {
            background-color: rgba(0, 0, 0, 0.55);
        }

        .kategori-name {
            color: white;
            font-weight: 300;
            font-size: 1.125rem;
            line-height: 1.2;
            user-select: none;
        }

        .kategori-camera-icon {
            color: white;
            font-size: 1.25rem;
            user-select: none;
        }

        @media (max-width: 576px) {
            .kategori-card-img-top {
                height: 180px !important;
            }
        }

        .hero-container {
            position: relative;
            background-image: url('/img/header.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .hero-text {
            font-size: 3rem;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            z-index: 2;
        }

        .btn-circle {
            position: absolute;
            left: 2rem;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            z-index: 3;
        }

        .btn-circle:hover {
            background-color: #f0f0f0;
        }

        .btn-circle {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 3;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            border: none;
        }

        .card-destination {
            border-radius: 15px;
            overflow: hidden;
            text-align: center;
            color: white;
            background-size: cover;
            background-position: center;
            height: 200px;
            display: flex;
            align-items: end;
            padding: 1rem;
        }

        .section-dark {
            background-color: #1e1e1e;
            color: white;
            padding: 60px 0;
        }

        .section-light {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .card-title-custom {
            font-size: 1rem;
            font-weight: 500;
            margin: 0;
        }

        .card-destination {
            border-radius: 15px;
            overflow: hidden;
            text-align: center;
            color: white;
            background-size: cover;
            background-position: center;
            height: 200px;
            display: flex;
            align-items: end;
            padding: 1rem;
            transition: transform 0.3s ease, filter 0.3s ease;
            position: relative;
        }

        .card-destination:hover {
            transform: scale(1.03);
            filter: brightness(85%);
            cursor: pointer;
        }
    </style>
@endsection

@section('mainContainer')
    <div class="hero-container" style="background-image: url('/img/beautiful.jpg');">
        <div class="hero-content text-center text-white" style="font-family: 'Raleway', sans-serif;">
            <h1 class="hero-title">ExploreGeh</h1>
        </div>
    </div>

    <section class="body section-light text-center">
        <div class="container">
            <h3 class="mb-4">Rekomendasi Untukmu</h3>
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($pantaiKlara->foto) }}');">
                        <p class="card-title-custom">
                            <a href="/destinasi/{{ $pantaiKlara->slug }}" class="text-decoration-none text-white">
                                {{ $pantaiKlara->nama }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($radisson->foto) }}');">
                        <p class="card-title-custom">
                            <a href="/destinasi/{{ $radisson->slug }}" class="text-decoration-none text-white">
                                {{ $radisson->nama }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($pesagi->foto) }}');">
                        <p class="card-title-custom">
                            <a href="/destinasi/{{ $pesagi->slug }}" class="text-decoration-none text-white">
                                {{ $pesagi->nama }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($rajabasa->foto) }}');">
                        <p class="card-title-custom">
                            <a href="/destinasi/{{ $rajabasa->slug }}" class="text-decoration-none text-white">
                                {{ $rajabasa->nama }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Destinasi Favorit -->
    <section class="body section-dark text-center">
        <div class="container">
            <h3 class="mb-2">Destinasi Favorit</h3>
            <p class="text-muted mb-5" style="color: #ccc;">Explore, Experience, Enjoy</p>
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($embung->foto) }}');">
                        <p class="card-title-custom"><a href="/destinasi/{{ $embung->slug }}"
                                class="text-decoration-none text-white">
                                {{ $embung->nama }}
                            </a></p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($gigihiu->foto) }}');">
                        <p class="card-title-custom"><a href="/destinasi/{{ $gigihiu->slug }}"
                                class="text-decoration-none text-white">
                                {{ $gigihiu->nama }}
                            </a></p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card-destination" style="background-image: url('{{ asset($mutun->foto) }}');">
                        <p class="card-title-custom"><a href="/destinasi/{{ $mutun->slug }}"
                                class="text-decoration-none text-white">
                                {{ $mutun->nama }}
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="body">
        <h1 class="kategori-title">Kategori Tersedia</h1>
        <p class="kategori-subtitle">
            Discover <span class="highlight">More</span> Than Just a Adventure
            <span class="kategori-dot"></span>
        </p>

        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="kategori-card">
                        <img src="/img/Kategori Pantai.jpg"
                            alt="Pantai beach with palm trees and clear water under blue sky"
                            class="kategori-card-img-top" />
                        <div class="kategori-card-img-overlay d-flex flex-column justify-content-between">
                            <span class="kategori-name"><a href="{{ route('kategori.index', $pantai->nama) }}"
                                    class="text-white">Pantai</a></span>
                            <i class="fas fa-camera kategori-camera-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="kategori-card">
                        <img src="/img/Header Rekreasi.jpg" alt="Rekreasi group rafting adventure with red helmets on river"
                            class="kategori-card-img-top" />
                        <div class="kategori-card-img-overlay d-flex flex-column justify-content-between">
                            <span class="kategori-name"><a href="{{ route('kategori.index', $rekreasi->nama) }}"
                                    class="text-white">Rekreasi</a></span>
                            <i class="fas fa-camera kategori-camera-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="kategori-card">
                        <img src="/img/Kategori Gununh.jpg" alt="Gunung mountain view with cloudy sky and trees"
                            class="kategori-card-img-top" />
                        <div
                            class="kategori-card-img-overlay kategori-card-img-overlay-dark d-flex flex-column justify-content-between">
                            <span class="kategori-name"><a href="{{ route('kategori.index', $gunung->nama) }}"
                                    class="text-white">Gunung</a></span>
                            <i class="fas fa-camera kategori-camera-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="kategori-card">
                        <img src="/img/Kategori Staycation.jpg"
                            alt="Staycation water villa over clear water with green hills background"
                            class="kategori-card-img-top" />
                        <div class="kategori-card-img-overlay d-flex flex-column justify-content-between">
                            <span class="kategori-name"><a href="{{ route('kategori.index', $staycation->nama) }}"
                                    class="text-white">Staycation</a></span>
                            <i class="fas fa-camera kategori-camera-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
