<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impex Helper</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="{{ asset('aset/logo-zoom.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/home.css')
    <style>
        .hero {
            position: relative;
            height: 100vh;
            background-image: url('{{ asset('aset/bg1.png') }}'); /* Set the background image */
            background-position: center; /* Center-align the background image */
            background-size: cover; /* Cover the entire hero section */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #222; /* Main text color */
        }
    </style>
</head>
<body>
    @include('partial.navbar')

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-inner">
                <img src="{{ asset('aset/bumi.png') }}" alt="Earth Illustration" class="hero-image">
                <div class="hero-content">
                    <h1><span>Bridging</span> Markets, <span>Building</span> Futures</h1>
                    <p>Impex Helper streamlines export-import in ASEAN, connecting buyers and sellers in commodity
                        trade while ensuring compliance with regional export regulations.</p>
                    <button class="start-journey">Start Journey!</button>
                </div>
            </div>
        </section>

        <!-- Commodity Sections -->
        <section class="commodities">
            <!-- Wood & Furniture -->
            <div class="commodity-section">
                <h2>Wood & Furniture Commodity</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <img src="{{ asset('aset/kayu mahoni.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Mahoni</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/Kursi Rotan.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Rotan Chair</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/Furniture Kayu Jati.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Nakas Jati</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/kayu Jati.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Kayu Jati</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

            <!-- Fisheries and Marine Products Commodity -->
            {{-- <div class="commodity-section"> --}}
                <h2>Fisheries and Marine Products</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <img src="{{ asset('aset/Ikan Tuna.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Ikan Tuna</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/Kepiting bakau.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Kepiting Bakau</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/Udang.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Udang</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <img src="{{ asset('aset/Ikan Tuna.png') }}" alt="Mahoni">
                        <div class="product-info">
                            <h3>Ikan Tuna Nusa Tenggara</h3>
                        </div>
                        <div class="product-price">
                            <div class="price">
                                <span class="current-price">$ 2.99</span>
                            </div>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

        <!-- Process Food and Beverages -->
        {{-- <div class="commodity-section"> --}}
            <h2>Process Food and Beverages</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="{{ asset('aset/Indomie Goreng.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Indomie goreng</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Keripik Singkong.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Keripik Singkong</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Indomie Soto.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Indomie Soto</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Sambal.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Saus Sambal</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Agriculture and Plantation -->
        {{-- <div class="commodity-section"> --}}
            <h2>Agriculture and Plantation</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="{{ asset('aset/Kopi.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Coffee</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Karet.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Latex</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Kelapa Sawit.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Palm oil</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Kopi.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Coffee Dieng</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Craft and Textiles -->
        {{-- <div class="commodity-section"> --}}
            <h2>Craft and Textiles</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="{{ asset('aset/Kain Batik.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Batik Pekalongan</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Kain Songket.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Songket</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Kain Tenun.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Tenun</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Kain Batik.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Batik Semarang</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- >Mining and Metals -->
        {{-- <div class="commodity-section"> --}}
            <h2>Mining and Metals</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="{{ asset('aset/Nikel.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Nickel</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Tembaga.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Copper</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Bauksit.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Bauxite</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('aset/Nikel.png') }}" alt="Mahoni">
                    <div class="product-info">
                        <h3>Nickel</h3>
                    </div>
                    <div class="product-price">
                        <div class="price">
                            <span class="current-price">$ 2.99</span>
                        </div>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

        </section>
    </main>

    @include('partial.footer')
</body>
</html>
