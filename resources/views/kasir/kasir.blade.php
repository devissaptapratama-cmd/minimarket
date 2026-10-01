<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir Retail POS</title>
    <link rel="stylesheet" href="{{ url(asset('css/chasier.css')) }}">
    {{-- <script src="{{ url(asset('js/chasier.js')) }}"></script> --}}
</head>
<body>
    <div class="pos-container">
        <header class="header">
            <div>
                <div class="store-name">
                    TOKO RETAIL MAS DEVIS
                </div>
                <div class="store-info">
                    Jl. Menuju Surga No. 24434 • Probolinggo • Telp. 0813-5710-3038
                </div>

                <div id="currentDate"></div>
            </div>
        </header>
        <main class="main">
        <!-- ================= LEFT ================= -->
            <section>
                @include('kasir.component.left.left')
                @include('kasir.component.left.daftarbarang')
            </section>

        <!-- ================= RIGHT ================= -->
            <aside>
                @include('kasir.component.right.right')
            </aside>
        </main>
    </div>
    <script src="{{ url(asset('js/chasier.js')) }}"></script>
</body>
</html>
