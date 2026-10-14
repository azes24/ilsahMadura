<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta property="og:title" content="ILSAH MADURA">
    <meta property="og:description" content="Ikatan alumni santri tarbiyatut tholabah wilayah madura.">
    <meta property="og:image" content="https://ilsahmadura.page.gd/asset/og.jpg">
    <meta property="og:url" content="https://ilsahmadura.page.gd">
    <meta property="og:type" content="website"> -->
    <title>ILSAH MADURA</title>
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>/asset/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once('navbar.php')
    ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">SELAMAT DATANG DI</div>
                <h1>ILSAH MADURA</h1>
                <p class="hero-description">ILSAH MADURA atau Ikatan Alumni Santri Tarbiyatut Tholabah Wilayah Madura merupakan organisasi yang mewadahi para alumni Tarbiyatut Tholabah yang sedang berproses melanjutkan pendidikan di wilayah Madura.</p>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="vision-mission" id="about">
        <div class="container">
            <h2 class="section-title scroll-animate">Tentang Kami</h2>
            <p class="section-subtitle scroll-animate">ILSAH MADURA hadir sebagai jembatan silaturahmi dan pengembangan bagi para alumni santri di wilayah Madura</p>
            
            <div class="vm-grid">
                <div class="vm-card scroll-animate-left">
                    <h3>Visi</h3>
                    <p>Mewujudkan ILSAH sebagai organisasi yang agamis, berwawasan luas, berakhlakul karimah dan mempunyai jiwa pengabdian pada almamater dan masyarakat.</p>
                </div>
                
                <div class="vm-card scroll-animate-right">
                    <h3>Misi</h3>
                    <ul>
                        <li>Melestarikan tradisi kepesantrenan yang islami di dalam perilaku sehari-hari.</li>
                        <li>Meningkatkan kualitas program kerja dengan upaya mengembangkan intelektual anggota setiap divisi.</li>
                        <li>Membentuk karakter yang berani dan sadar akan nilai moral dengan berlandaskan ajaran ahlusunnah wal-jamaah.</li>
                        <li>Memberdayakan anggota melalui pengabdian kepada almamater dan masyarakat, untuk mengoptimalkan pembelajaran dan pengembangan diri.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs" id="programs">
        <div class="container">
            <h2 class="section-title scroll-animate">Program Kami</h2>
            <p class="section-subtitle scroll-animate">Berbagai program untuk mempererat ukhuwah dan memberdayakan alumni santri</p>
            
            <div class="program-grid">
                <div class="program-card scroll-animate-scale">
                    <h3>Kajian Rutin</h3>
                    <p>Kajian keislaman rutin bulanan dengan menghadirkan ustadz/kyai untuk menambah wawasan keagamaan alumni.</p>
                </div>
                
                <div class="program-card scroll-animate-scale">
                    <h3>Silaturahmi Alumni</h3>
                    <p>Pertemuan berkala antar alumni untuk mempererat persaudaraan dan berbagi pengalaman.</p>
                </div>
                
                <div class="program-card scroll-animate-scale">
                    <h3>Pemberdayaan Ekonomi</h3>
                    <p>Pelatihan kewirausahaan dan pembentukan koperasi untuk meningkatkan kesejahteraan anggota.</p>
                </div>
                
                <div class="program-card scroll-animate-scale">
                    <h3>Bakti Sosial</h3>
                    <p>Kegiatan sosial seperti santunan anak yatim, bantuan untuk dhuafa, dan kegiatan kemanusiaan lainnya.</p>
                </div>
                
                <div class="program-card scroll-animate-scale">
                    <h3>Beasiswa Santri</h3>
                    <p>Program beasiswa untuk santri berprestasi yang membutuhkan bantuan biaya pendidikan.</p>
                </div>
                
                <div class="program-card scroll-animate-scale">
                    <h3>Dakwah Masyarakat</h3>
                    <p>Kegiatan dakwah dan pembinaan masyarakat di berbagai daerah wilayah Madura.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section" id="info">
        <div class="container">
            <h2 class="section-title scroll-animate">Informasi</h2>
            <p class="section-subtitle scroll-animate">Berbagai informasi penting untuk anggota ILSAH MADURA</p>
            
            <div class="info-grid">
                <div class="info-card scroll-animate">
                    <h3>📅 Jadwal Kegiatan</h3>
                    <p>Informasi lengkap tentang jadwal kajian rutin, pertemuan alumni, dan kegiatan lainnya.</p>
                    <a href="#" class="info-link">Lihat Jadwal →</a>
                </div>
                
                <div class="info-card scroll-animate">
                    <h3>📢 Pengumuman</h3>
                    <p>Update terbaru seputar kegiatan organisasi, program, dan informasi penting lainnya.</p>
                    <a href="#" class="info-link">Baca Selengkapnya →</a>
                </div>
                
                <div class="info-card scroll-animate">
                    <h3>👥 Keanggotaan</h3>
                    <p>Panduan untuk menjadi anggota ILSAH MADURA dan informasi seputar hak dan kewajiban anggota.</p>
                    <a href="#" class="info-link">Info Lengkap →</a>
                </div>
                
                <div class="info-card scroll-animate">
                    <h3>📚 Galeri Dokumentasi</h3>
                    <p>Dokumentasi foto dan video kegiatan ILSAH MADURA dari berbagai program yang telah dilaksanakan.</p>
                    <a href="#" class="info-link">Lihat Galeri →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container scroll-animate">
            <h2>Hubungi Kami</h2>
            <p>Silakan hubungi kami untuk informasi lebih lanjut tentang ILSAH MADURA</p>
            
            <div class="contact-info">
                <div class="contact-item">
                    <strong>WhatsApp</strong>
                    <a href="https://wa.me/6285731037913">0857-3103-7913</a>
                </div>
                <div class="contact-item">
                    <strong>Email</strong>
                    <a href="#contact" onclick="copyEmail('ilsahmadura@gmail.com'); return false;">
    ilsahmadura@gmail.com
</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#" title="Instagram">Instagram</a>
            <a href="#" title="Tiktok">Tiktok</a>
        </div>
        <p>&copy; 2025 ILSAH MADURA - Ikatan Alumni Santri Tarbiyatut Tholabah Wilayah Madura. All rights reserved.</p>
    </footer>

    <script>
        // Menu Toggle
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        function closeMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.remove('active');
        }

        // clipboard
        function copyEmail(email) {
            navigator.clipboard.writeText(email).then(() => {
        alert('Email berhasil disalin!');
        // atau bisa pakai notifikasi yang lebih smooth
    });
}

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const nav = document.querySelector('nav');
            const navLinks = document.getElementById('navLinks');
            if (!nav.contains(event.target)) {
                navLinks.classList.remove('active');
            }
        });

        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        // Observe all elements with scroll animation classes
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll(
                '.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-scale'
            );
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });

            // Staggered animation for grid items
            const programCards = document.querySelectorAll('.program-card');
            programCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });

            const infoCards = document.querySelectorAll('.info-card');
            infoCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>