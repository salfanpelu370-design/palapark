<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* ===== UMUM ===== */
        body {
            background-color: #faf8f3;
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            color: black;
        }
        table.navbar {
            background-color: #0a2342;
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        table.navbar td a {
            display: block;
            padding: 16px 24px;
            color: #d4cfc4;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            transition: color 0.3s;
        }
        table.navbar td a:hover {
            color: #c9a84c;
        }
        table.navbar td a.active {
            color: #c9a84c;
        }
        table.navbar td.sep {
            color: #6b0f1a;
            font-size: 1.1rem;
        }

        /* ===== HERO (warna diambil dari variabel PHP) ===== */
        table.hero-wrap {
            width: 100%;
            background: <?php echo $hero; ?>;
        }
        h1.judul {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 6vw, 4rem);
            color: <?php echo $warna_judul; ?>;
            text-align: center;
            margin: 0;
            padding: 60px 30px 12px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        p.subtitle {
            text-align: center;
            color: rgba(255,255,255,0.75);
            font-size: 1rem;
            font-weight: 300;
            margin: 0;
            padding: 0 20px 60px;
        }

        /* ===== JUDUL BAGIAN (dipakai beberapa halaman) ===== */
        p.section-label {
            text-align: center;
            font-size: 0.7rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #0d7377;
            font-weight: 700;
            margin-bottom: 6px;
        }
        h2.section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
            color: #0a2342;
            text-align: center;
            margin-bottom: 8px;
        }
        hr.gold {
            width: 48px;
            border: none;
            border-top: 3px solid #c9a84c;
            margin: 0 auto 40px;
        }

        /* ===== HALAMAN ABOUT ===== */
        table.about-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(10,35,66,0.13);
            width: 620px;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }
        table.about-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(10,35,66,0.2);
        }
        table.about-card video {
            display: block;
            width: 100%;
            height: auto;
            background: #000;
        }
        td.about-body {
            padding: 32px 40px 36px;
            background: white;
        }
        p.about-nim {
            font-size: 0.68rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #0d7377;
            font-weight: 700;
            margin: 0 0 10px;
        }
        p.about-quote {
            font-size: 0.97rem;
            color: #334;
            line-height: 1.9;
            margin: 0;
            font-style: italic;
            border-left: 3px solid #c9a84c;
            padding-left: 18px;
        }
        p.about-quote span.big-quote {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #c9a84c;
            line-height: 0;
            vertical-align: -10px;
            font-style: normal;
        }

        /* ===== HALAMAN PROFIL ===== */
        table.biodata {
            border-collapse: collapse;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(10,35,66,0.13);
            width: 700px;
        }
        td.foto-col {
            background: linear-gradient(160deg, #0a2342 0%, #0d4f6b 100%);
            width: 250px;
            text-align: center;
            vertical-align: top;
            padding: 36px 20px 28px;
        }
        td.foto-col img {
            width: 200px;
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
            border: 4px solid #c9a84c;
            box-shadow: 0 6px 24px rgba(0,0,0,0.3);
            display: block;
            margin: 0 auto 16px;
        }
        p.foto-label {
            color: #c9a84c;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin: 0;
        }
        td.info-col {
            background: white;
            vertical-align: top;
            padding: 36px 36px;
        }
        p.info-item {
            font-size: 0.92rem;
            color: #334;
            line-height: 1.6;
            margin: 0 0 14px;
            padding-bottom: 14px;
            border-bottom: 1px solid #f0ede6;
        }
        p.info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        span.info-label {
            font-weight: 700;
            color: #0a2342;
            display: inline-block;
            min-width: 180px;
        }

        /* ===== HALAMAN BERANDA ===== */
        h2.berita-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #0a2342;
            text-align: center;
            margin-bottom: 8px;
        }
        p.berita-label {
            text-align: center;
            font-size: 0.7rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #0d7377;
            font-weight: 700;
            margin-bottom: 6px;
        }
        table.card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(10,35,66,0.12);
            width: 700px;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }
        table.card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(10,35,66,0.2);
        }
        table.card img {
            width: 700px;
            display: block;
            object-fit: cover;
            max-height: 400px;
            transition: transform 0.5s ease;
        }
        table.card:hover img {
            transform: scale(1.04);
        }
        td.card-img-wrap {
            position: relative;
            overflow: hidden;
            display: block;
        }
        span.news-tag {
            display: inline-block;
            background: #6b0f1a;
            color: white;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 20px;
            margin-bottom: 16px;
        }
        h3.news-headline {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: #6b0f1a;
            line-height: 1.4;
            margin-bottom: 14px;
        }
        hr.gold-sm {
            width: 36px;
            border: none;
            border-top: 2px solid #c9a84c;
            margin: 0 0 16px 0;
        }
        p.news-text {
            font-size: 0.96rem;
            color: #334;
            line-height: 1.85;
        }
        p.news-meta {
            font-size: 0.75rem;
            color: #0d7377;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #f0ede6;
        }

        /* ===== HALAMAN AUDIO DAN VIDEO ===== */
        h3.section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.7rem;
            color: #0a2342;
            text-align: center;
            margin-bottom: 8px;
        }
        hr.divider {
            width: 80%;
            border: none;
            border-top: 1px solid #e0dbd0;
            margin: 60px auto;
        }
        table.video-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(10,35,66,0.2);
        }
        table.video-card video {
            display: block;
            width: 100%;
            height: auto;
            background: #000;
        }
        p.video-quote {
            font-size: 0.9rem;
            color: #445;
            font-style: italic;
            line-height: 1.7;
            margin: 0;
        }
        p.video-quote span {
            color: #c9a84c;
            font-size: 1.4rem;
            line-height: 0;
            vertical-align: -6px;
        }
        table.zigzag-wrap {
            width: 620px;
        }
        table.audio-card {
            background: white;
            border-radius: 14px;
            box-shadow: 0 4px 24px rgba(10,35,66,0.10);
            width: 500px;
            margin-bottom: 28px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        table.audio-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(10,35,66,0.16);
        }
        table.audio-card.left {
            margin-left: 0;
            margin-right: auto;
            border-left: 5px solid #c9a84c;
            border-radius: 0 14px 14px 0;
        }
        table.audio-card.right {
            margin-left: auto;
            margin-right: 0;
            border-right: 5px solid #0d7377;
            border-radius: 14px 0 0 14px;
            text-align: right;
        }
        td.audio-body {
            padding: 22px 28px;
        }
        p.audio-label {
            font-size: 0.68rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #0d7377;
            font-weight: 700;
            margin: 0 0 6px;
        }
        table.audio-card.right p.audio-label {
            color: #c9a84c;
        }
        p.audio-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: #0a2342;
            font-weight: 700;
            margin: 0 0 16px;
        }
        audio {
            width: 100%;
            border-radius: 8px;
            accent-color: #c9a84c;
        }
        table.audio-card.right audio {
            accent-color: #0d7377;
        }

        /* ===== HALAMAN LANDING (HYPERLINK) ===== */
        table.cta-wrap {
            width: 100%;
            background-color: #faf8f3;
        }
        a.cta-btn {
            display: inline-block;
            background: #6b0f1a;
            color: white !important;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 14px 36px;
            border-radius: 30px;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 16px rgba(107,15,26,0.25);
        }
        a.cta-btn:hover {
            background: #c9a84c;
            color: white;
            transform: translateY(-2px);
        }
        p.cta-text {
            text-align: center;
            font-size: 0.95rem;
            color: #445;
            margin: 0 0 18px;
        }
        h2.video-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #0a2342;
            text-align: center;
            margin-bottom: 8px;
        }
        p.video-label {
            text-align: center;
            font-size: 0.7rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #0d7377;
            font-weight: 700;
            margin-bottom: 6px;
        }
        table.video-card iframe {
            display: block;
            border-radius: 16px 16px 0 0;
        }
        p.video-caption {
            font-size: 0.8rem;
            color: #0d7377;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin: 0;
        }

        /* ===== KARTU VIDEO (dipakai Audio & Landing) ===== */
        table.video-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(10,35,66,0.12);
            width: 700px;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }
        td.video-body {
            padding: 20px 24px 24px;
            text-align: center;
        }

        /* ===== FOOTER ===== */
        table.footer {
            background: #0a2342;
            width: 100%;
            margin-top: 60px;
        }
        table.footer td {
            color: rgba(255,255,255,0.45);
            font-size: 0.78rem;
            letter-spacing: 0.06em;
            text-align: center;
            padding: 28px;
        }
        table.footer span {
            color: #c9a84c;
        }
    </style>
</head>
<body>
