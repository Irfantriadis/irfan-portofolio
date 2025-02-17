<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/foto_profil.jpg') }}" type="image/x-icon">
    <title>Portofolio Irfan Triadi Saputra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
        }
        
        .hero {
            background: linear-gradient(135deg, #1e2024 0%, #23272b 100%);
            color: white;
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(74, 144, 226, 0.1) 0%, rgba(144, 19, 254, 0.1) 100%);
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #4A90E2;
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(74, 144, 226, 0.3);
            transition: transform 0.3s ease;
            object-fit: cover;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .section {
            padding: 60px 0;
            background-color: #23272b;
            margin: 20px 0;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.2);
        }

        .social-link {
            display: inline-block;
            background: linear-gradient(45deg, #4A90E2, #9013FE);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative; /* Pastikan tidak tertutup */
            margin: 5px;
            pointer-events: auto;
            z-index: 10; /* Pastikan elemen ada di atas */
            text-decoration: none; /* Opsional, untuk menghilangkan garis bawah */
            display: inline-block; /* Pastikan elemen bisa diklik */
        }

        .social-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.4);
            color: white;
        }

        h1, h2, h4 {
            color: #4A90E2;
            font-weight: bold;
        }

        .skill-item {
            background: #2c3035;
            padding: 15px;
            border-radius: 10px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }

        .skill-item:hover {
            transform: translateX(10px);
            background: #343a40;
        }

        .container {
            max-width: 1200px;
            padding: 0 20px;
        }

        footer {
            background: #141414;
            padding: 20px 0;
            margin-top: 50px;
        }

        .achievement-item {
            border-left: 3px solid #4A90E2;
            padding-left: 15px;
            margin: 15px 0;
        }

        .certificate-section {
            text-align: center;
            padding: 20px;
        }

        .certificate-img {
            max-width: 70%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
            transition: transform 0.3s ease;
        }

        .certificate-img:hover {
            transform: scale(1.05);
        }

        .app-image {
            width: 100%; /* Biar responsif */
            max-width: 250px; /* Ukuran gambar */
            border-radius: 10px; /* Agar sudutnya melengkung */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        }

        .app-details {
            padding-left: 20px; /* Spasi antara gambar dan teks */
        }

        .playstore-logo {
            width: 150px; /* Ukuran logo Play Store */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="container text-center">
            <img src="{{ asset('images/foto_profil.jpg') }}" alt="Irfan Triadi Saputra" class="profile-img">
            <h1 class="fw-bold mb-3">Irfan Triadi Saputra, S.Tr.Kom</h1>
            <p class="lead">Dosen Praktisi | AI Enthusiast</p>
            <p>📍 Kabupaten Pemalang, Jawa Tengah 52361</p>
            <p>📞 +62 823 2428 2477 | ✉️ irfants1710@gmail.com</p>
            <div class="social-links my-4">
                <a href="https://www.linkedin.com/in/irfan-triadi-saputra/" class="social-link" target="_blank">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
                <a href="https://github.com/Irfantriadis" class="social-link" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://instagram.com/irfantriadis_" class="social-link" target="_blank">
                    <i class="fab fa-instagram"></i> irfantriadis_
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Tentang Saya</h2>
            <p class="text-center px-4">
                Saya adalah lulusan Teknik Informatika Politeknik Harapan Bersama dengan pengalaman dalam pengembangan perangkat lunak, kecerdasan buatan, dan riset teknologi informasi. 
                Saya juga aktif sebagai pemateri di berbagai seminar dan telah mengembangkan berbagai aplikasi berbasis AI.
            </p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Pengalaman Kerja</h2>
            <div class="row px-4">
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Back-End AI Developer (Magang)</h4>
                        <p>PT. Inti Utama Solusindo (Pharos Group) | 6 Bulan</p>
                        <ul>
                            <li>Mengembangkan Forklift Otomatis dengan Object Detection</li>
                            <li>Backend Development berbasis AI</li>
                            <li>Berkontribusi dalam proyek sistem berbasis AI</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Dosen Praktisi</h4>
                        <p>Politeknik Harapan Bersama | 1 Semester</p>
                        <ul>
                            <li>Mengajar Algoritma dan Struktur Data 1</li>
                            <li>Membimbing mahasiswa dalam pemrograman Python</li>
                            <li>Membimbing mahasiswa dalam logika pemrograman dasar</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Asistant Dosen Pemrograman Sistem Cerdas</h4>
                        <p>Politeknik Harapan Bersama | 1 Semester | Kelas Reguler dan RPL</p>
                        <ul>
                            <li>Mengajar Pemrograman Sistem Cerdas 1 dan 2</li>
                            <li>Membimbing mahasiswa dalam pemrograman Python</li>
                            <li>Membimbing mahasiswa membangun AI Realtime Detection</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Asistant Dosen Big Data</h4>
                        <p>Politeknik Harapan Bersama | 1 Semester | Kelas RPL</p>
                        <ul>
                            <li>Mengajar Big Data</li>
                            <li>Membimbing mahasiswa dalam pemrograman Python</li>
                            <li>Membimbing mahasiswa membangun Sistem Analisis berbasis AI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Soft Skills & Hard Skills</h2>
            <div class="row px-4">
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Soft Skills</h4>
                        <ul>
                            <li>Public Speaking</li>
                            <li>Kepemimpinan</li>
                            <li>Manajemen Waktu</li>
                            <li>Pemecahan Masalah</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="skill-item">
                        <h4>Hard Skills</h4>
                        <ul>
                            <li>Machine Learning & AI</li>
                            <li>Image Processing</li>
                            <li>Data Analysis</li>
                            <li>Figma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Organisasi</h2>
            <div class="skill-item mx-4">
                <ul>
                    <li><strong>Ketua Study Club Forum Riset dan Teknologi Informasi (FORTI)</strong></li>
                    <li><strong>Koordinator Humas - INVOFEST</strong></li>
                </ul>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Pendidikan</h2>
            <div class="skill-item mx-4">
                <p><strong>Politeknik Harapan Bersama</strong></p>
                <p>Sarjana Terapan Teknik Informatika (2020 - 2024) | IPK: 3,89</p>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Prestasi Akademik & Non-Akademik</h2>
            <div class="px-4">
                <div class="achievement-item">
                    <p>Finalis 7 Lomba Kepenulisan National Youth Competition</p>
                </div>
                <div class="achievement-item">
                    <p>Peraih Insentif PKM DIKTI VOKASI Tingkat Nasional (2021 & 2023)</p>
                </div>
                <div class="achievement-item">
                    <p>Juara 3 Lomba Karya Tulis Ilmiah Vocation Of The Champions</p>
                </div>
                <div class="achievement-item">
                    <p>Terpilih sebagai Mahasiswa Berprestasi Prodi D-IV Teknik Informatika PHB (2022)</p>
                </div>
                <div class="achievement-item">
                    <p>Juara 3 Penelitian Insentif BAPPEDA Kabupaten Tegal</p>
                </div>
                <div class="achievement-item">
                    <p>Terbaik Kedua Capstone Project Semester 5 Teknik Informatika PHB (2022)</p>
                </div>
                <div class="achievement-item">
                    <p>Terbaik Ketiga Capstone Project Semester 6 Teknik Informatika PHB (2023)</p>
                </div>
                <div class="achievement-item">
                    <p>Peraih Piagam Penghargaan sebagai Mahasiswa Terbaik Prodi Teknik Informatika (2022)</p>
                </div>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Sertifikat Scientist</h2>
            <div class="certificate-section">
                <img src="{{ asset('images/sertif.png') }}" alt="Sertifikat Scientist" class="certificate-img">
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">Publikasi & Hak Kekayaan Intelektual</h2>
            <div class="skill-item mx-4">
                <ul>
                    <li>Jurnal: Game Online Multiplayer untuk Pembelajaran Jarak Jauh</li>
                    <li>Jurnal: Aplikasi Question Answer untuk Akuntansi</li>
                    <li>Jurnal: Peningkatan Keterampilan Digital Enterpreneur Bagi Siswa SMK</li>
                    <li>Jurnal: Si-Mosque: Instrumen Pelaporan Keuangan Masjid untuk Mewujudkan Good Mosque Governance</li>
                    <li>HKI: SI-Mosque.com & BAIKMU: Self Care Mobile Apps</li>
                </ul>
            </div>
        </div>

        <div class="section" data-aos="fade-up">
            <h2 class="text-center mb-4">My Apps</h2>
            <div class="container">
                <div class="row align-items-center">
                    <!-- App Description -->
                    <div class="col-md-9">
                        <div class="app-details">
                            <h4 class="app-title text-primary">BAIKMU: SELF CARE</h4>
                            <p class="app-description">
                                Aplikasi virtual assistant untuk kesehatan mental dengan fitur chatbot AI, 
                                tes PHQ-9, meditasi, pengingat tidur dan obat, serta pencarian psikiater.
                            </p>
                            
                            <!-- Play Store Button -->
                            <a 
                                href="https://play.google.com/store/apps/details?id=com.baikmu.selfcare" 
                                target="_blank" 
                                class="store-link"
                            >
                                <img 
                                    src="{{ asset('images/ps.png') }}" 
                                    alt="Download on Play Store" 
                                    class="playstore-logo"
                                    style="width: 150px; height: auto;"
                                >
                            </a>
                        </div>
                    </div>

                    <!-- App Image -->
                    <div class="col-md-3">
                        <img 
                            src="{{ asset('images/ss.jpeg') }}" 
                            alt="BAIKMU: SELF CARE" 
                            class="app-image img-fluid"
                            style="width: 150px; height: auto;"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; 2024 Irfan Triadi Saputra</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>