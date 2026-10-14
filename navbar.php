    <!-- Navigation -->
    <nav>
        <div class="nav-container">
        <div class="logo">
            <img src="<?= BASE_URL ?>/asset/logo.png" alt="ILSAH MADURA">
            <div class="logo-text">
                <span>ILSAH</span>
                <span>MADURA</span>
            </div>
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" onclick="closeMenu()">Beranda</a></li>
                <li><a href="#about" onclick="closeMenu()">Tentang Kami</a></li>
                <li><a href="#programs" onclick="closeMenu()">Program</a></li>
                <li><a href="#info" onclick="closeMenu()">Informasi</a></li>
                <li><a href="#contact" onclick="closeMenu()">Kontak</a></li>
            </ul>
        </div>
    </nav>