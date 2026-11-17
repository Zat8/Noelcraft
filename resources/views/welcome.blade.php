<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noelcraft | Ecoprint dari daun dan bunga</title>
    <meta name="description" content="Kain, tas, dan pakaian ecoprint buatan tangan dengan pewarna alami daun dan bunga.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { cream: '#FAF6F0', forest: '#2C4A3E', terra: '#C86D51' },
                    fontFamily: {
                        display: ['"Playfair Display"', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        html { scroll-padding-top: 5rem; }
        .leaf-bg {
            background:
                radial-gradient(circle at 20% 20%, rgba(200,109,81,.35) 0, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(250,246,240,.18) 0, transparent 45%),
                #2C4A3E;
        }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
    </style>
</head>
<body class="bg-cream font-sans text-forest antialiased" x-data="{ menu: false, cat: 'Semua' }">

{{-- NAVBAR --}}
<header class="fixed inset-x-0 top-0 z-50 border-b border-forest/10 bg-cream/90 backdrop-blur">
    <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between px-5">
        <a href="#beranda" class="font-display text-2xl font-bold">Noelcraft</a>

        <ul class="hidden items-center gap-8 text-sm font-medium md:flex">
            <li><a href="#keunggulan" class="hover:text-terra">Keunggulan</a></li>
            <li><a href="#katalog" class="hover:text-terra">Katalog</a></li>
            <li><a href="#galeri" class="hover:text-terra">Galeri</a></li>
            <li><a href="#kontak" class="hover:text-terra">Kontak</a></li>
            <li>
                <a href="https://wa.me/{{ $waNumber }}" target="_blank" rel="noopener"
                   class="rounded-full bg-terra px-5 py-2 text-cream hover:bg-forest">Hubungi kami</a>
            </li>
        </ul>

        <button @click="menu = !menu" class="md:hidden" aria-label="Buka menu" :aria-expanded="menu">
            <svg x-show="!menu" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
            <svg x-show="menu" x-cloak class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
    </nav>

    <ul x-show="menu" x-cloak x-transition @click="menu = false"
        class="space-y-1 border-t border-forest/10 bg-cream px-5 py-4 text-sm font-medium md:hidden">
        <li><a href="#keunggulan" class="block py-2">Keunggulan</a></li>
        <li><a href="#katalog" class="block py-2">Katalog</a></li>
        <li><a href="#galeri" class="block py-2">Galeri</a></li>
        <li><a href="#kontak" class="block py-2">Kontak</a></li>
    </ul>
</header>

<main>
{{-- HERO --}}
<section id="beranda" class="mx-auto grid max-w-6xl items-center gap-10 px-5 pb-20 pt-32 md:grid-cols-2 md:pt-40">
    <div>
        <h1 class="font-display text-4xl font-bold leading-tight md:text-6xl">
            Setiap helai daun meninggalkan jejaknya di kain.
        </h1>
        <p class="mt-6 max-w-md text-lg leading-relaxed text-forest/80">
            Noelcraft membuat kain, tas, dan pakaian ecoprint dengan pewarna dari daun dan bunga. Tidak ada dua motif yang sama.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="#katalog" class="rounded-full bg-forest px-7 py-3 font-semibold text-cream hover:bg-terra">Lihat katalog</a>
            <a href="#keunggulan" class="rounded-full border border-forest px-7 py-3 font-semibold hover:bg-forest hover:text-cream">Cara pembuatannya</a>
        </div>
    </div>

    {{-- Kolase cetakan daun: gambar hero opsional di public/images/hero.jpg --}}
    <div class="leaf-bg relative aspect-[4/5] overflow-hidden rounded-t-[10rem] rounded-b-2xl">
        <img src="{{ asset('images/hero.jpg') }}" alt="Kain ecoprint Noelcraft" class="h-full w-full object-cover" onerror="this.remove()">
        <svg class="absolute inset-0 m-auto h-2/3 w-2/3 text-cream/25" viewBox="0 0 100 100" fill="currentColor" aria-hidden="true">
            <path d="M50 4C28 22 20 46 32 70c4 8 10 14 18 22 8-8 14-14 18-22 12-24 4-48-18-66zm0 20v62" stroke="#FAF6F0" stroke-opacity=".5" stroke-width="1.2"/>
        </svg>
    </div>
</section>

{{-- KEUNGGULAN & PROSES --}}
<section id="keunggulan" class="bg-forest py-20 text-cream">
    <div class="mx-auto max-w-6xl px-5">
        <h2 class="max-w-xl font-display text-3xl font-bold md:text-4xl">Dibuat pelan, supaya warnanya jujur</h2>
        <p class="mt-4 max-w-xl text-cream/80">Ecoprint adalah teknik memindahkan motif dan warna tumbuhan langsung ke kain berserat alami. Begini alurnya di tempat kami.</p>

        <ol class="mt-12 grid gap-6 md:grid-cols-4">
            @foreach ([
                ['Pilih kain', 'Kain putih berserat alami seperti katun, mori, atau sutra. Serat sintetis tidak menyerap warna daun.'],
                ['Perlakuan awal', 'Kain direndam dan diproses agar pigmen alami menempel kuat. Tahap ini paling memakan waktu.'],
                ['Tata daun dan bunga', 'Daun dan bunga ditata satu per satu di atas kain, lalu dicetak dengan teknik pounding atau kukus.'],
                ['Kukus dan jemur', 'Kain dikukus, didiamkan, lalu dijemur. Motif muncul dan warnanya mengunci pada serat.'],
            ] as $i => [$title, $text])
                <li class="border-t border-cream/30 pt-5">
                    <span class="font-display text-3xl text-terra">{{ $i + 1 }}</span>
                    <h3 class="mt-2 font-semibold">{{ $title }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-cream/75">{{ $text }}</p>
                </li>
            @endforeach
        </ol>

        <div class="mt-14 grid gap-6 border-t border-cream/20 pt-10 text-sm md:grid-cols-3">
            <p><strong class="block text-base">Pewarna alami</strong>Tanpa pewarna sintetis. Limbah proses lebih ramah lingkungan.</p>
            <p><strong class="block text-base">Satu potong, satu motif</strong>Pola daun tidak bisa diulang persis, jadi produkmu unik.</p>
            <p><strong class="block text-base">Dikerjakan tangan</strong>Dari pemilihan kain hingga finishing dikerjakan langsung oleh pengrajin.</p>
        </div>
    </div>
</section>

{{-- KATALOG --}}
<section id="katalog" class="mx-auto max-w-6xl px-5 py-20">
    <h2 class="font-display text-3xl font-bold md:text-4xl">Katalog produk</h2>
    <p class="mt-3 max-w-lg text-forest/80">Pilih produk, lalu kirim pesan ke admin lewat WhatsApp. Pembayaran dan pengiriman dibicarakan di sana.</p>

    <div class="mt-8 flex flex-wrap gap-2" role="group" aria-label="Filter kategori">
        <button @click="cat = 'Semua'"
                :class="cat === 'Semua' ? 'bg-forest text-cream' : 'border border-forest/30 hover:border-forest'"
                class="rounded-full px-5 py-2 text-sm font-medium transition">Semua</button>
        @foreach ($categories as $category)
            <button @click="cat = '{{ $category }}'"
                    :class="cat === '{{ $category }}' ? 'bg-forest text-cream' : 'border border-forest/30 hover:border-forest'"
                    class="rounded-full px-5 py-2 text-sm font-medium transition">{{ $category }}</button>
        @endforeach
    </div>

    <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($products as $product)
            @php
                $pesan = "Halo Admin Noelcraft, saya tertarik memesan produk *{$product->name}* dengan harga Rp " . number_format($product->price, 0, ',', '.') . ". Apakah stoknya masih tersedia?";
                $waLink = "https://wa.me/{$waNumber}?text=" . rawurlencode($pesan);
            @endphp
            <article x-show="cat === 'Semua' || cat === '{{ $product->category }}'" x-transition.opacity
                     class="flex flex-col overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-forest/10">
                <div class="relative aspect-square bg-forest/10">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" loading="lazy"
                         class="h-full w-full object-cover {{ $product->is_available ? '' : 'opacity-50' }}"
                         onerror="this.style.display='none'">
                    <span class="absolute left-3 top-3 rounded-full bg-cream px-3 py-1 text-xs font-medium">{{ $product->category }}</span>
                    @unless ($product->is_available)
                        <span class="absolute right-3 top-3 rounded-full bg-terra px-3 py-1 text-xs font-medium text-cream">Stok habis</span>
                    @endunless
                </div>
                <div class="flex flex-1 flex-col p-5">
                    <h3 class="font-display text-xl font-bold leading-snug">{{ $product->name }}</h3>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-forest/75">{{ $product->description }}</p>
                    <p class="mt-4 text-lg font-semibold text-terra">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                    @if ($product->is_available)
                        <a href="{{ $waLink }}" target="_blank" rel="noopener"
                           class="mt-4 rounded-full bg-forest py-3 text-center text-sm font-semibold text-cream hover:bg-terra">Pesan via WhatsApp</a>
                    @else
                        <a href="{{ $waLink }}" target="_blank" rel="noopener"
                           class="mt-4 rounded-full border border-forest/40 py-3 text-center text-sm font-semibold hover:bg-forest hover:text-cream">Tanya ketersediaan</a>
                    @endif
                </div>
            </article>
        @endforeach
    </div>
</section>

{{-- GALERI INSTAGRAM --}}
<section id="galeri" class="bg-forest/5 py-20">
    <div class="mx-auto max-w-6xl px-5">
        <div class="flex flex-wrap items-end justify-between gap-4">
            <h2 class="font-display text-3xl font-bold md:text-4xl">Dari Instagram kami</h2>
            <a href="https://instagram.com/{{ $instagram }}" target="_blank" rel="noopener" class="font-semibold text-terra hover:underline">&#64;{{ $instagram }}</a>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-3 md:grid-cols-3">
            @foreach ($products->take(6) as $i => $product)
                <a href="https://instagram.com/{{ $instagram }}" target="_blank" rel="noopener"
                   class="group relative aspect-square overflow-hidden rounded-lg {{ $i % 2 ? 'bg-terra/30' : 'bg-forest/20' }}">
                    <img src="{{ asset('images/gallery/gallery-' . ($i + 1) . '.jpg') }}" alt="Foto Instagram Noelcraft {{ $i + 1 }}" loading="lazy"
                         class="h-full w-full object-cover transition group-hover:scale-105"
                         onerror="this.onerror=null; this.src='{{ asset($product->image) }}'; this.onerror=function(){this.style.display='none'}">
                </a>
            @endforeach
        </div>
    </div>
</section>
</main>

{{-- FOOTER --}}
<footer id="kontak" class="bg-forest text-cream">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 py-14 md:grid-cols-3">
        <div>
            <p class="font-display text-2xl font-bold">Noelcraft</p>
            <p class="mt-3 max-w-xs text-sm text-cream/75">Kerajinan ecoprint dan rajut buatan tangan, dibuat dari rumah pengrajin.</p>
        </div>
        <div class="text-sm">
            <p class="font-semibold">Kontak</p>
            <ul class="mt-3 space-y-2 text-cream/80">
                <li>WhatsApp: <a class="underline" href="https://wa.me/{{ $waNumber }}" target="_blank" rel="noopener">+{{ $waNumber }}</a></li>
                <li>Instagram: <a class="underline" href="https://instagram.com/{{ $instagram }}" target="_blank" rel="noopener">&#64;{{ $instagram }}</a></li>
            </ul>
        </div>
        <div class="text-sm">
            <p class="font-semibold">Lokasi</p>
            <p class="mt-3 text-cream/80">[Isi alamat produksi]. Belum ada toko fisik; pemesanan lewat WhatsApp.</p>
        </div>
    </div>
    <p class="border-t border-cream/15 py-5 text-center text-xs text-cream/60">&copy; {{ date('Y') }} Noelcraft. Hak cipta dilindungi.</p>
</footer>

</body>
</html>
