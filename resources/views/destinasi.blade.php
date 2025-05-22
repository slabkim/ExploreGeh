@extends('layouts.main')

@section('style')
    <style>
        a {
            text-decoration: none !important;
        }

        .hero-container {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            z-index: 0;
            /* Hero berada di bawah */
        }

        .hero-content {
            font-size: 3rem;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            z-index: 1;
            text-align: center;
        }

        .destinasi-container {
            margin-top: 40px;
            /* Memberikan jarak cukup antara hero section dan konten destinasi */
            background-color: #f8f9fa;
            padding-top: 20px;
            /* Jarak atas konten destinasi */
        }

        .destinasi-item {
            margin-top: 20px;
        }

        .shadow-sm {
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .staycation-hero {
            position: relative;
            background-image: url('/img/heroStaycation.jpg');
            /* Ganti dengan path gambar pantai */
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .staycation-overlay {

            padding: 40px;
            border-radius: 10px;
        }

        .staycation-hero h1,
        .staycation-hero p {
            margin: 0;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
        }

        .staycation-hero h1 {
            font-size: 2.5rem;
        }

        .staycation-hero p {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .staycation-button {
            background-color: #4da8f0;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .staycation-button:hover {
            background-color: #2c89d3;
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
    </style>
@endsection

@section('mainContainer')
    <div class="hero-container" style="background-image: url('/img/beautiful.jpg'); position: relative;">
        <div class="hero-content text-center text-white"
            style="font-family: 'Raleway', sans-serif; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1 class="hero-title">Destinasi</h1>
        </div>
        <section class="position-relative container px-0">
            <a href="/home" class="position-relative">
                <button aria-label="Previous slide"
                    class="btn btn-white position-absolute top-50 start-0 translate-middle-y shadow-lg rounded-circle"
                    style="width: 40px; height: 40px; background-color: #ffffffaf; transition: all 0.3s ease;">
                    <i class="fas fa-chevron-left text-primary"></i>
                </button>
            </a>
        </section>
    </div>

    <!-- Konten Destinasi -->
    <div class="destinasi-container">
        @foreach ($destinasi as $item)
            <div class="container my-5 px-3" style="max-width: 1200px;">
                <div class="mb-4 shadow-sm rounded-4 p-3 bg-white destinasi-item">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div class="overflow-hidden rounded" style="padding: 5px;">
                                <img src="{{ asset($item->foto) }}" class="img-fluid w-100" alt="Embung Unila"
                                    style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="ps-3">
                                <a href="/destinasi/{{ $item->slug }}">
                                    <h5>{{ $item->nama }}</h5>
                                </a>
                                <p class="text-muted small mb-1"><i
                                        class="bi bi-geo-alt text-danger me-1"></i>{{ $item->lokasi }}</p>
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="staycation-hero">
        <div class="staycation-overlay">
            <h1>Not Just Adventures</h1>
            <p>Make Room for Staycations</p>
            <a href="{{ route('kategori.index', $staycation->nama) }}" class="staycation-button">check &#x2794;</a>
        </div>
    </div>
@endsection
