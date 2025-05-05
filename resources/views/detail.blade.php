@extends('layouts.main')


@section('style')
    <style>
        a {
            text-decoration: none !important;
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
    </style>
@section('mainContainer')
    <div class="hero-container" style="background-image: url('/img/beautiful.jpg'); position: relative;">
        <div class="hero-content text-center text-white"
            style="font-family: 'Raleway', sans-serif; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1 class="hero-title">{{ $destinasi->nama }}</h1>
        </div>

        <section class="position-relative container px-0">
            <a href="/destinasi" class="position-relative">
                <button aria-label="Previous slide"
                    class="btn btn-white position-absolute top-50 start-0 translate-middle-y shadow-lg rounded-circle"
                    style="width: 40px; height: 40px; background-color: #ffffffaf; transition: all 0.3s ease;">
                    <i class="fas fa-chevron-left text-primary"></i>
                </button>
            </a>
        </section>
    </div>


    <main class="container my-5" style="max-width: 1250px;">
        <article class="bg-light rounded-3 p-4 p-md-5">
            <header class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3">
                <h2 class="fs-3 fw-normal mb-3 mb-md-0">{{ $destinasi->nama }}</h2>
                <div class="d-flex align-items-center gap-3 small text-secondary">
                    <div class="d-flex align-items-center gap-1">
                        <span>Rating</span>
                        <div class="rating-stars text-warning d-flex gap-1">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div>
                        <span>Kategori</span> <span><a
                                href="/kategori/{{ $destinasi->kategori->slug }}">{{ $destinasi->kategori->nama }}</a></span>
                    </div>
                </div>
            </header>
            <p class="small text-secondary lh-base mb-3" style="font-size: 1rem;">
                {{ $destinasi->deskripsiFull }}
            </p>

            <section class="mt-4">
                <h3 class="d-flex align-items-center gap-2 text-secondary small mb-2">
                    <i class="fas fa-camera"></i> Views
                </h3>
                <img src="{{ asset($destinasi->foto) }}"
                    alt="View of Gunung Rajabasa mountain and coastline with village and ocean" class="rounded-3 w-100 "
                    style="max-height: 700px; object-fit: cover;" />
            </section>

            <section class="mt-4">
                <h3 class="d-flex align-items-center gap-2 text-secondary small mb-2">
                    <i class="fas fa-map-marker-alt"></i> Maps
                </h3>
                <div class="rounded-3 w-50" style="max-height: 400px; overflow: hidden; position: relative;">
                    {!! $destinasi->embed_map !!}
                </div>
            </section>
        </article>

        <div class="mt-5">
            <h3 class="fs-4 font-semibold mb-3">Berikan Ulasan Anda</h3>

            @if (session('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('ulasan.store') }}" method="POST" class="max-w-3xl">
                @csrf
                <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}">

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" id="nama" name="nama" required
                        placeholder="Masukkan Nama Anda">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" required
                        placeholder="Masukkan Email Anda">
                </div>

                <!-- Ulasan -->
                <div class="mb-3">
                    <label for="ulasan" class="form-label">Ulasan</label>
                    <textarea class="form-control form-control-sm" id="ulasan" name="ulasan" rows="4" required
                        placeholder="Tulis ulasan Anda"></textarea>
                </div>

                <button type="submit" class="btn btn-sm btn-teal text-white" style="background-color:#0f766e;">Kirim
                    Ulasan</button>
            </form>
        </div>

        <!-- Menampilkan Ulasan yang Sudah Dikirim -->
        <div class="mt-5">
            <h3 class="fs-4 font-semibold mb-4">Ulasan Pengguna</h3>
            @foreach ($destinasi->ulasans as $ulasan)
                <div class="mb-4 p-3 border rounded-3 shadow-sm">
                    <div class="fw-bold">{{ $ulasan->nama }}</div>
                    <div class="text-muted">{{ $ulasan->email }}</div>
                    <p class="mt-2">{{ $ulasan->ulasan }}</p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
