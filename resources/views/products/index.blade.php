<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>DIKS HAIR CUT — Barbershop</title>

    <!-- Google Fonts -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            font-family: 'Montserrat', sans-serif;
            background: #f5f2eb;
            color: #171717;
            overflow-x: hidden;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 80px;

            z-index: 1000;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 7%;

            background: rgba(0, 0, 0, .55);

            backdrop-filter: blur(8px);

            border-bottom: 1px solid rgba(255,255,255,.15);

            transition: .4s;
        }


        .navbar.scrolled {

            background: rgba(15,15,15,.95);

            height: 70px;
        }


        .brand {

            color: white;

            text-decoration: none;

            font-family: 'Bebas Neue', sans-serif;

            font-size: 28px;

            letter-spacing: 3px;
        }


        .brand span {
            color: #c89b3c;
        }


        .menu {

            display: flex;

            gap: 35px;

            list-style: none;
        }


        .menu a {

            color: white;

            text-decoration: none;

            font-size: 13px;

            font-weight: 500;

            letter-spacing: 1px;

            text-transform: uppercase;

            transition: .3s;
        }


        .menu a:hover {
            color: #d4af37;
        }


        .booking {

            padding: 12px 23px;

            border: 1px solid #d4af37;

            color: #d4af37 !important;

            border-radius: 2px;

            transition: .3s;
        }


        .booking:hover {

            background: #d4af37;

            color: #111 !important;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            height: 100vh;

            min-height: 650px;

            position: relative;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;
        }


        /* FOTO UTAMA
           GANTI FOTO DI SINI
        */

        .hero-image {

            position: absolute;

            inset: 0;

            background-image:

                linear-gradient(
                    rgba(0,0,0,.25),
                    rgba(0,0,0,.55)
                ),

                url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=2200&q=90');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            transform: scale(1.03);

            animation: zoomHero 15s ease-in-out infinite alternate;
        }


        @keyframes zoomHero {

            from {
                transform: scale(1.03);
            }

            to {
                transform: scale(1.10);
            }
        }


        /* =====================================================
           HERO DARK OVERLAY
        ===================================================== */

        .hero::after {

            content: "";

            position: absolute;

            inset: 0;

            background:

                linear-gradient(
                    90deg,
                    rgba(0,0,0,.65),
                    rgba(0,0,0,.10),
                    rgba(0,0,0,.65)
                );

            pointer-events: none;
        }


        /* =====================================================
           HERO CONTENT
        ===================================================== */

        .hero-content {

            position: relative;

            z-index: 5;

            text-align: center;

            color: white;

            max-width: 850px;

            padding: 30px;
        }


        .hero-small {

            font-size: 13px;

            letter-spacing: 7px;

            color: #d4af37;

            margin-bottom: 20px;

            font-weight: 600;

            text-transform: uppercase;

            animation: fadeDown 1s ease;
        }


        .hero-title {

            font-family: 'Bebas Neue', sans-serif;

            font-size: clamp(70px, 10vw, 145px);

            line-height: .85;

            letter-spacing: 4px;

            text-transform: uppercase;

            text-shadow:

                0 5px 20px rgba(0,0,0,.7);

            animation: fadeUp 1.2s ease;
        }


        .hero-title span {
            color: #d4af37;
        }


        .hero-description {

            max-width: 600px;

            margin: 30px auto;

            color: rgba(255,255,255,.85);

            line-height: 1.8;

            font-size: 14px;

            animation: fadeUp 1.5s ease;
        }


        .hero-buttons {

            display: flex;

            justify-content: center;

            gap: 15px;

            animation: fadeUp 1.8s ease;
        }


        .btn-primary {

            display: inline-block;

            padding: 15px 32px;

            background: #c89b3c;

            color: #111;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            transition: .3s;
        }


        .btn-primary:hover {

            background: #e0bb58;

            transform: translateY(-4px);

            box-shadow:
                0 10px 30px rgba(200,155,60,.3);
        }


        .btn-outline {

            display: inline-block;

            padding: 14px 32px;

            border: 1px solid white;

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            letter-spacing: 1px;

            text-transform: uppercase;

            transition: .3s;
        }


        .btn-outline:hover {

            background: white;

            color: #111;

            transform: translateY(-4px);
        }


        /* =====================================================
           BARBER POLE
        ===================================================== */

        .barber-pole {

            position: absolute;

            z-index: 10;

            right: 40px;

            top: 120px;

            width: 42px;

            height: 130px;

            border-radius: 20px;

            background:

                repeating-linear-gradient(
                    -45deg,
                    #d4af37 0px,
                    #d4af37 10px,
                    #222 10px,
                    #222 20px
                );

            border: 4px solid #111;

            box-shadow:

                0 0 0 2px #d4af37,

                0 10px 30px rgba(0,0,0,.5);

            animation: poleRotate 5s linear infinite;
        }


        @keyframes poleRotate {

            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100px 100px;
            }
        }


        /* =====================================================
           BOTTOM PAPER EFFECT
        ===================================================== */

        .paper-edge {

            position: absolute;

            bottom: -1px;

            left: -2%;

            width: 104%;

            height: 105px;

            z-index: 20;

            background: #f5f2eb;

            clip-path: polygon(

                0 35%,
                3% 45%,
                6% 30%,
                10% 43%,
                14% 32%,
                18% 48%,
                22% 34%,
                26% 45%,
                30% 28%,
                34% 43%,
                38% 35%,
                42% 50%,
                47% 31%,
                52% 46%,
                56% 29%,
                61% 43%,
                66% 34%,
                71% 49%,
                76% 31%,
                81% 44%,
                86% 28%,
                91% 43%,
                95% 32%,
                100% 40%,
                100% 100%,
                0 100%
            );
        }


        /* =====================================================
           ABOUT
        ===================================================== */

        .about {

            padding: 110px 8%;

            background: #f5f2eb;

            text-align: center;
        }


        .section-label {

            color: #b38a32;

            font-size: 12px;

            letter-spacing: 5px;

            font-weight: 700;
        }


        .about h2 {

            font-family: 'Bebas Neue', sans-serif;

            font-size: clamp(50px, 6vw, 80px);

            letter-spacing: 2px;

            margin: 15px 0;
        }


        .about h2 span {
            color: #b38a32;
        }


        .about-text {

            max-width: 700px;

            margin: auto;

            color: #666;

            line-height: 1.9;

            font-size: 14px;
        }


        /* =====================================================
           SERVICES
        ===================================================== */

        .services {

            padding: 100px 8%;

            background: #171717;

            color: white;
        }


        .services-title {

            text-align: center;

            margin-bottom: 55px;
        }


        .services-title h2 {

            font-family: 'Bebas Neue', sans-serif;

            font-size: 65px;

            letter-spacing: 2px;

            margin-top: 10px;
        }


        .service-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;

            max-width: 1200px;

            margin: auto;
        }


        .service-card {

            background: #202020;

            padding: 35px;

            border: 1px solid #303030;

            position: relative;

            overflow: hidden;

            transition: .4s;
        }


        .service-card::before {

            content: "";

            position: absolute;

            width: 100px;

            height: 100px;

            background: #c89b3c;

            filter: blur(70px);

            right: -50px;

            top: -50px;

            opacity: .15;
        }


        .service-card:hover {

            transform: translateY(-10px);

            border-color: #c89b3c;
        }


        .service-icon {

            font-size: 40px;

            margin-bottom: 20px;
        }


        .service-card h3 {

            font-family: 'Bebas Neue', sans-serif;

            font-size: 30px;

            letter-spacing: 1px;
        }


        .service-card p {

            color: #999;

            line-height: 1.7;

            font-size: 13px;

            margin-top: 10px;
        }


        .price {

            margin-top: 20px;

            color: #d4af37;

            font-weight: 700;
        }


        /* =====================================================
           CTA
        ===================================================== */

        .cta {

            padding: 110px 8%;

            background: #f5f2eb;

            text-align: center;
        }


        .cta h2 {

            font-family: 'Bebas Neue', sans-serif;

            font-size: clamp(55px, 7vw, 90px);

            line-height: .9;
        }


        .cta p {

            color: #777;

            max-width: 600px;

            margin: 25px auto 35px;

            line-height: 1.8;

            font-size: 14px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background: #111;

            color: #777;

            text-align: center;

            padding: 30px;

            font-size: 12px;
        }


        footer span {
            color: #d4af37;
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform: translateY(30px);
            }

            to {

                opacity: 1;

                transform: translateY(0);
            }
        }


        @keyframes fadeDown {

            from {

                opacity: 0;

                transform: translateY(-20px);
            }

            to {

                opacity: 1;

                transform: translateY(0);
            }
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .menu {
                display: none;
            }


            .hero-title {
                font-size: 80px;
            }


            .service-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }


            .barber-pole {

                right: 20px;

                top: 100px;

                transform: scale(.8);
            }
        }


        @media (max-width: 600px) {

            .navbar {
                padding: 0 5%;
            }


            .brand {
                font-size: 23px;
            }


            .booking {
                padding: 9px 15px;
            }


            .hero {
                min-height: 700px;
            }


            .hero-title {
                font-size: 65px;
            }


            .hero-description {
                font-size: 12px;
            }


            .hero-buttons {

                flex-direction: column;

                align-items: center;
            }


            .btn-primary,
            .btn-outline {

                width: 220px;

                text-align: center;
            }


            .service-grid {

                grid-template-columns: 1fr;
            }


            .barber-pole {
                display: none;
            }
        }

    </style>

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ===================================================== -->

    <nav class="navbar">

        <a href="#" class="brand">
            DIKS HAIR CUT<span>.</span>
        </a>


        <ul class="menu">

            <li>
                <a href="#home">
                    Home
                </a>
            </li>

            <li>
                <a href="#about">
                    About
                </a>
            </li>

            <li>
                <a href="#services">
                    Services
                </a>
            </li>

            <li>
                <a href="#contact">
                    Contact
                </a>
            </li>

        </ul>


        <a href="#booking"
           class="booking">

            BOOKING

        </a>

    </nav>



    <!-- =====================================================
         HERO
    ===================================================== -->

    <section class="hero"
             id="home">


        <!-- FOTO HERO -->

        <div class="hero-image"></div>


        <!-- BARBER POLE -->

        <div class="barber-pole"></div>


        <!-- CONTENT -->

        <div class="hero-content">

            <div class="hero-small">

                EST. 2026 • PREMIUM BARBERSHOP

            </div>


            <h1 class="hero-title">

                DIKS
                <br>

                <span>HAIR CUT</span>

            </h1>


            <p class="hero-description">

                Potongan yang pas, detail yang diperhatikan,
                dan waktu untuk diri sendiri. Temukan gaya
                terbaikmu bersama DIKS HAIR CUT.

            </p>


            <div class="hero-buttons">

                <a href="#booking"
                   class="btn-primary">

                    BOOK AN APPOINTMENT

                </a>


                <a href="#services"
                   class="btn-outline">

                    OUR SERVICES

                </a>

            </div>

        </div>


        <!-- PAPER EFFECT -->

        <div class="paper-edge"></div>

    </section>



    <!-- =====================================================
         ABOUT
    ===================================================== -->

    <section class="about"
             id="about">

        <div class="section-label">

            OUR STORY

        </div>


        <h2>

            MORE THAN JUST A
            <span>HAIRCUT</span>

        </h2>


        <p class="about-text">

            Kami percaya bahwa potongan rambut bukan hanya
            tentang penampilan. Ini adalah tentang bagaimana
            seorang gentleman membawa dirinya. Dengan barber
            berpengalaman, detail presisi, dan suasana klasik,
            kami memberikan pengalaman grooming yang berbeda.

        </p>

    </section>



    <!-- =====================================================
         SERVICES
    ===================================================== -->

    <section class="services"
             id="services">


        <div class="services-title">

            <div class="section-label">

                WHAT WE DO

            </div>


            <h2>

                OUR SERVICES

            </h2>

        </div>


        <div class="service-grid">


            <div class="service-card">

                <div class="service-icon">
                    ✂️
                </div>

                <h3>
                    CLASSIC HAIRCUT
                </h3>

                <p>
                    Potongan klasik dengan detail
                    rapi dan presisi.
                </p>

                <div class="price">
                    Rp 35.000
                </div>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💈
                </div>

                <h3>
                    MODERN FADE
                </h3>

                <p>
                    Fade modern dengan finishing
                    profesional.
                </p>

                <div class="price">
                    Rp 45.000
                </div>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🧔
                </div>

                <h3>
                    HAIR & BEARD
                </h3>

                <p>
                    Potong rambut sekaligus merapikan
                    beard untuk tampilan maksimal.
                </p>

                <div class="price">
                    Rp 60.000
                </div>

            </div>


        </div>

    </section>



    <!-- =====================================================
         BOOKING
    ===================================================== -->

    <section class="cta"
             id="booking">

        <h2>

            READY TO LOOK
            <br>

            <span style="color:#b38a32">
                SHARP?
            </span>

        </h2>


        <p>

            Jadwalkan kunjunganmu sekarang dan rasakan
            pengalaman grooming premium bersama
            DIKS HAIR CUT.

        </p>


        <a href="https://wa.me/?text=Halo%20DIKS%20HAIR%20CUT%2C%20saya%20ingin%20bertanya%20tentang%20booking."
           class="btn-primary">

            ✂ BOOKING SEKARANG

        </a>

    </section>



    <!-- =====================================================
         FOOTER
    ===================================================== -->

    <footer id="contact">

        © {{ date('Y') }}

        <span>DIKS HAIR CUT</span>

        — Premium Barbershop

    </footer>



    <!-- =====================================================
         JAVASCRIPT
    ===================================================== -->

    <script>

        /*
        ============================================
        NAVBAR BERUBAH SAAT SCROLL
        ============================================
        */

        window.addEventListener('scroll', function () {

            const navbar =
                document.querySelector('.navbar');

            if (window.scrollY > 50) {

                navbar.classList.add('scrolled');

            } else {

                navbar.classList.remove('scrolled');

            }

        });


    </script>


</body>

</html>