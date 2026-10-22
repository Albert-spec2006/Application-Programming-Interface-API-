@extends('layouts.master')

@section('title', 'DIKS HAIR CUT — Barbering, dengan karakter')

@section('content')
<div class="diks-site" id="diks-site">
  <header class="diks-header">
    <div class="diks-container diks-header-inner">
      <a class="diks-brand" href="#home" aria-label="DIKS HAIR CUT, beranda">
        <span class="diks-brand-mark">D</span>
        <span>DIKS <b>HAIR CUT</b><small>BARBER • GROOMING • STYLE</small></span>
      </a>
      <button class="diks-menu-toggle" type="button" aria-expanded="false" aria-controls="diks-navigation" aria-label="Buka menu">
        <span></span><span></span>
      </button>
      <nav class="diks-nav" id="diks-navigation" aria-label="Navigasi utama">
        <a href="#tentang">Tentang</a>
        <a href="#layanan">Layanan</a>
        <a href="#suasana">Suasana</a>
        <a href="#kontak">Kontak</a>
      </nav>
      <a class="diks-header-cta" href="#kontak">Konsultasi <span aria-hidden="true">↗</span></a>
    </div>
  </header>

  <main>
    <section class="diks-hero" id="home">
      <div class="diks-hero-photo" role="img" aria-label="Interior barbershop dengan kursi barber klasik"></div>
      <div class="diks-hero-shade"></div>
      <div class="diks-container diks-hero-content">
        <div class="diks-eyebrow"><span></span> BARBERING • EST. 2026</div>
        <h1>RAPI ITU<br>SOAL <em>KARAKTER.</em></h1>
        <p>Potongan yang pas, detail yang diperhatikan, dan waktu untuk diri sendiri. Temukan gaya terbaikmu bersama DIKS HAIR CUT.</p>
        <div class="diks-hero-actions">
          <a class="diks-button diks-button-gold" href="#layanan">Jelajahi layanan <span aria-hidden="true">↗</span></a>
          <a class="diks-text-link" href="#tentang"><span class="diks-play-icon">↓</span> Kenali kami</a>
        </div>
        <div class="diks-hero-note"><span class="diks-note-line"></span><span>GOOD HAIR. GOOD MOOD. EVERY DAY.</span></div>
      </div>
      <div class="diks-hero-index">01 <span>/</span> 04</div>
    </section>

    <section class="diks-proof" aria-label="Keunggulan DIKS HAIR CUT">
      <div class="diks-container diks-proof-grid">
        <div><strong>01</strong><span>Barber berpengalaman</span></div>
        <div><strong>02</strong><span>Detail penuh presisi</span></div>
        <div><strong>03</strong><span>Nyaman tanpa terburu-buru</span></div>
        <div class="diks-proof-quote">GOOD STYLE<br>STARTS HERE <span>✳</span></div>
      </div>
    </section>

    <section class="diks-about diks-section" id="tentang">
      <div class="diks-container diks-about-grid">
        <div class="diks-about-image">
          <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=1000&q=85" alt="Barber sedang merapikan potongan rambut pelanggan" loading="lazy">
          <div class="diks-image-caption"><span>CRAFTED WITH CARE</span><b>Sejak hari pertama.</b></div>
          <span class="diks-image-number">DHC / 01</span>
        </div>
        <div class="diks-about-copy">
          <p class="diks-kicker">LEBIH DARI SEKADAR POTONG RAMBUT</p>
          <h2>Gaya yang terasa<br><em>seperti dirimu.</em></h2>
          <p class="diks-body-copy">Di DIKS HAIR CUT, setiap potongan dimulai dengan mendengarkan. Kami memadukan teknik barber klasik dengan sentuhan modern agar kamu pulang dengan tampilan yang rapi dan tetap terasa personal.</p>
          <a class="diks-underlined-link" href="#layanan">Cerita kami <span aria-hidden="true">↗</span></a>
          <div class="diks-about-signature"><span class="diks-signature-mark">D</span><span>DIKS HAIR CUT<small>YOUR STYLE, OUR CRAFT.</small></span></div>
        </div>
      </div>
    </section>

    <section class="diks-services diks-section" id="layanan">
      <div class="diks-container">
        <div class="diks-section-heading">
          <div><p class="diks-kicker">DIBUAT UNTUK GAYA KAMU</p><h2>LAYANAN <em>KAMI.</em></h2></div>
          <p>Dari potongan harian sampai detail grooming yang lebih lengkap — pilih yang paling cocok untukmu.</p>
        </div>
        <div class="diks-service-grid">
          <article class="diks-service-card">
            <span class="diks-service-number">01 / CUT</span><span class="diks-service-icon" aria-hidden="true">✂</span>
            <h3>Classic Haircut</h3><p>Potongan bersih dan timeless, disesuaikan dengan bentuk wajah dan gaya personalmu.</p>
            <a href="#kontak" aria-label="Tanya tentang Classic Haircut">Tanya layanan <span>↗</span></a>
          </article>
          <article class="diks-service-card diks-service-featured">
            <span class="diks-service-number">02 / FADE</span><span class="diks-service-icon" aria-hidden="true">〰</span>
            <h3>Modern Fade</h3><p>Gradasi halus dengan finishing presisi untuk tampilan segar yang menonjol.</p>
            <a href="#kontak" aria-label="Tanya tentang Modern Fade">Tanya layanan <span>↗</span></a>
          </article>
          <article class="diks-service-card">
            <span class="diks-service-number">03 / GROOM</span><span class="diks-service-icon" aria-hidden="true">⌁</span>
            <h3>Hair &amp; Beard</h3><p>Perawatan rambut dan jenggot dalam satu sesi untuk tampilan yang lebih matang.</p>
            <a href="#kontak" aria-label="Tanya tentang Hair and Beard">Tanya layanan <span>↗</span></a>
          </article>
        </div>
        <p class="diks-service-footnote">Harga dan ketersediaan layanan dapat dikonfirmasi langsung sebelum kunjungan.</p>
      </div>
    </section>

    <section class="diks-gallery diks-section" id="suasana">
      <div class="diks-container">
        <div class="diks-section-heading diks-gallery-heading">
          <div><p class="diks-kicker">MASUK, DUDUK, REFRESH</p><h2>SUASANA <em>DIKS.</em></h2></div>
          <p>Ruang yang santai. Kursi yang nyaman. Waktu untuk menikmati prosesnya.</p>
        </div>
        <div class="diks-gallery-grid">
          <figure class="diks-gallery-large"><img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1400&q=85" alt="Interior barbershop yang hangat dan modern" loading="lazy"><figcaption>THE SHOP <span>01</span></figcaption></figure>
          <figure><img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=900&q=85" alt="Peralatan barber siap digunakan" loading="lazy"><figcaption>THE CRAFT <span>02</span></figcaption></figure>
          <figure><img src="https://images.unsplash.com/photo-1622286342621-4bd786c2447c?auto=format&fit=crop&w=900&q=85" alt="Barber merapikan gaya rambut pelanggan" loading="lazy"><figcaption>THE DETAIL <span>03</span></figcaption></figure>
        </div>
      </div>
    </section>

    <section class="diks-quote">
      <div class="diks-container diks-quote-inner">
        <span class="diks-quote-mark">“</span>
        <blockquote>Penampilan terbaik bukan soal mengikuti semua tren. Tapi menemukan gaya yang <em>paling kamu.</em></blockquote>
        <span class="diks-quote-credit">— FILOSOFI DIKS HAIR CUT</span>
      </div>
    </section>

    <section class="diks-contact diks-section" id="kontak">
      <div class="diks-container diks-contact-grid">
        <div><p class="diks-kicker">SIAP UNTUK REFRESH?</p><h2>Waktunya<br><em>potong rambut.</em></h2><p class="diks-contact-copy">Punya pertanyaan soal layanan atau ingin merencanakan kunjungan? Hubungi kami, kami siap membantu.</p></div>
        <div class="diks-contact-card">
          <span class="diks-contact-icon" aria-hidden="true">✳</span>
          <p class="diks-kicker">MULAI DARI SINI</p>
          <h3>Yuk, ngobrol<br>soal gaya kamu.</h3>
          <p>Kontak dan jadwal kunjungan dapat dikonfirmasi langsung dengan tim DIKS HAIR CUT.</p>
          <a class="diks-button diks-button-dark" href="https://wa.me/?text=Halo%20DIKS%20HAIR%20CUT%2C%20saya%20ingin%20bertanya%20tentang%20booking." target="_blank" rel="noopener noreferrer">Tanya &amp; booking <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </section>
  </main>

  <footer class="diks-footer">
    <div class="diks-container diks-footer-main">
      <a class="diks-brand diks-footer-brand" href="#home"><span class="diks-brand-mark">D</span><span>DIKS <b>HAIR CUT</b><small>BARBER • GROOMING • STYLE</small></span></a>
      <p>Rapi itu soal karakter.</p>
      <a href="#home">Kembali ke atas ↑</a>
    </div>
    <div class="diks-container diks-footer-bottom"><span>© {{ date('Y') }} DIKS HAIR CUT</span><span>DIBUAT DENGAN ✳ DI INDONESIA</span></div>
  </footer>
</div>

<script>
  (() => {
    const toggle = document.querySelector('.diks-menu-toggle');
    const nav = document.querySelector('.diks-nav');

    if (!toggle || !nav) return;

    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      toggle.setAttribute('aria-label', expanded ? 'Buka menu' : 'Tutup menu');
      nav.classList.toggle('is-open', !expanded);
    });

    nav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
        nav.classList.remove('is-open');
      });
    });
  })();
</script>
@endsection
