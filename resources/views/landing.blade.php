<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EyeDetect</title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html, body {
            width: 100%;
            min-height: 100%;
            overflow-x: hidden;
        }

        body {
            background: #ffffff;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            background: white;
            overflow-x: hidden;
        }

        .navbar {
            width: 100%;
            height: 85px;
            background: #071525;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 70px;
        }

        .logo {
            display: flex;
            align-items: center;
            height: 85px;
            margin-left: -12px;
        }

        .logo img {
            width: 210px;
            height: auto;
            display: block;
            object-fit: contain;
            position: relative;
            top: 8px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 42px;
        }

        .nav-menu a {
            text-decoration: none;
            color: white;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .login-btn {
            background: #1e9bff;
            padding: 16px 24px;
            border-radius: 14px;
            color: white;
        }

        .hero {
            position: relative;
            width: 100%;
            min-height: calc(100vh - 85px);
            background: url('{{ asset("images/background.jpg") }}');
            background-size: cover;
            display: flex;
            align-items: center;
            padding: 60px 85px;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0.97) 0%,
                rgba(255, 255, 255, 0.90) 35%,
                rgba(255, 255, 255, 0.45) 65%,
                rgba(255, 255, 255, 0.05) 100%
            );
        }

        .hero-text {
            position: relative;
            z-index: 2;
            max-width: 560px;
            margin-top: -25px;
        }

        .hero-text h1 {
            font-size: 72px;
            line-height: 1.15;
            font-weight: 900;
            color: #000;
            letter-spacing: 0.5px;
        }

        .hero-line {
            width: 530px;
            height: 3px;
            background: #222;
            margin: 12px 0 18px;
        }

        .hero-text p {
            font-size: 18px;
            line-height: 1.45;
            font-weight: 700;
            color: #111;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 26px;
        }

        .hero-buttons a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 0.8px;
            padding: 17px 28px;
            border-radius: 8px;
        }

        .btn-dark {
            background: #071525;
            color: white;
        }

        .btn-light {
            background: white;
            color: #071525;
            box-shadow: 0 4px 10px rgba(0,0,0,0.22);
        }

        .technology {
            width: 100%;
            min-height: 650px;
            background: white;
            text-align: center;
            padding: 50px 80px 80px;
        }

        .section-badge {
            display: inline-block;
            background: #071525;
            color: white;
            padding: 8px 24px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .technology h2 {
            font-size: 44px;
            font-weight: 900;
            color: #000;
            margin-bottom: 10px;
        }

        .section-desc {
            font-size: 14px;
            line-height: 1.4;
            font-weight: 700;
            color: #111;
            margin-bottom: 58px;
        }

        .tech-cards {
            display: flex;
            justify-content: center;
            gap: 90px;
            flex-wrap: wrap;
        }

        .tech-card {
            width: 230px;
            min-height: 320px;
            background: #bfbfbf;
            border-radius: 28px;
            padding: 38px 24px 24px;
            text-align: center;
            box-shadow: inset 0 2px 3px rgba(0,0,0,0.2);
        }

        .icon-box {
            width: 92px;
            height: 62px;
            background: white;
            border-radius: 5px;
            margin: -12px auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0,0,0,0.25);
        }

        .icon-box i {
            font-size: 42px;
            color: #2d9cff;
        }

        .tech-card h3 {
            font-size: 24px;
            font-weight: 900;
            color: #000;
            margin-bottom: 10px;
        }

        .tech-card p {
            font-size: 13px;
            line-height: 1.2;
            font-weight: 700;
            color: #000;
        }

        @media (max-width: 900px) {
            .navbar {
                height: 68px;
                padding: 0 18px;
            }

            .logo img {
                width: 150px;
            }

            .nav-menu {
                display: none;
            }

            .hero {
                min-height: calc(100vh - 68px);
                padding: 30px 24px;
                background-position: center right;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-line {
                width: 300px;
            }

            .hero-text p {
                font-size: 12px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .technology {
                padding: 40px 20px 60px;
            }

            .technology h2 {
                font-size: 30px;
            }

            .tech-cards {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="page">

        <header class="navbar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo EyeDetect" />
            </div>

            <nav class="nav-menu">
                <a href="#">BERANDA</a>
                <a href="#">PANDUAN/CARA KERJA</a>
                <a href="#">TENTANG</a>
                <a href="{{ route('login') }}" class="login-btn">MASUK/LOGIN</a>    
            </nav>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1>DETEKSI<br />PENYAKIT<br />MATA</h1>
                <div class="hero-line"></div>

                <p>
                    Sistem cerdas untuk menganalisis citra mata dan<br />
                    menampilkan hasil deteksi secara informatif.
                </p>

                <div class="hero-buttons">
                    <a href="#" class="btn-dark">MULAI DETEKSI</a>
                    <a href="#" class="btn-light">PANDUAN/CARA KERJA</a>
                </div>
            </div>
        </section>

        <section class="technology">
            <div class="section-badge">TEKNOLOGI</div>

            <h2>Teknologi yang Digunakan</h2>

            <p class="section-desc">
                Sistem kami dibangun dengan teknologi terkini dalam bidang Deep Learning dan<br />
                Computer Vision
            </p>

            <div class="tech-cards">
                <div class="tech-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h3>Deep Learning</h3>
                    <p>
                        Menggunakan Convolutional Neural Network (CNN)
                        untuk ekstraksi fitur dan klasifikasi gambar mata
                        dengan akurasi tinggi.
                    </p>
                </div>

                <div class="tech-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h3>MobileNet V2</h3>
                    <p>
                        Arsitektur Neural Network yang efisien dan ringan,
                        optimal untuk deployment dengan performa tinggi.
                    </p>
                </div>

                <div class="tech-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-code-branch"></i>
                    </div>
                    <h3>TensorFlow</h3>
                    <p>
                        Framework Deep Learning terpercaya untuk training dan
                        inference model dengan performa optimal.
                    </p>
                </div>
            </div>
        </section>

    </div>
</body>
</html>