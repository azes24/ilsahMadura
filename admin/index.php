<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel – ILSAH MADURA</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --crimson: #800020;
            --crimson-dark: #5F001A;
            --crimson-light: #A0002A;
            --gold: #FFD700;
            --gold-light: #FFF8E7;
            --gold-muted: #FFE5B4;
            --cream: #FFFBF0;
            --text: #2a1a0e;
            --text-muted: #7a5c3e;
            --white: #ffffff;
            --shadow: 0 4px 24px rgba(128,0,32,0.13);
            --radius: 14px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--cream);
            color: var(--text);
            min-height: 100vh;
            display: flex;
        }

        /* ── SIDEBAR ─────────────────────────── */
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: linear-gradient(160deg, var(--crimson-dark) 0%, var(--crimson) 100%);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 100;
            box-shadow: 4px 0 20px rgba(0,0,0,0.18);
            transition: transform 0.3s;
        }

        .sidebar-logo {
            padding: 28px 24px 20px;
            border-bottom: 1px solid rgba(255,215,0,0.2);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-logo .logo-icon {
            width: 42px; height: 42px;
            background: var(--gold);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .sidebar-logo .logo-text {
            font-family: 'Lora', serif;
            color: var(--gold-light);
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .sidebar-logo .logo-text small {
            display: block;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.7rem;
            font-weight: 400;
            color: rgba(255,248,231,0.6);
            letter-spacing: 0.5px;
        }

        .sidebar-nav {
            flex: 1;
            padding: 20px 12px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-section-label {
            color: rgba(255,215,0,0.5);
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 12px 12px 6px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 10px;
            color: rgba(255,248,231,0.75);
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
            font-weight: 500;
            border: none; background: none; width: 100%; text-align: left;
        }

        .nav-item:hover { background: rgba(255,215,0,0.1); color: var(--gold-light); }

        .nav-item.active {
            background: var(--gold);
            color: var(--crimson-dark);
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(255,215,0,0.3);
        }

        .nav-item .icon { font-size: 1.1rem; width: 22px; text-align: center; }

        .sidebar-footer {
            padding: 16px 12px;
            border-top: 1px solid rgba(255,215,0,0.15);
        }

        /* ── MAIN ─────────────────────────────── */
        .main {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .topbar {
            background: var(--white);
            padding: 0 32px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--gold-muted);
            position: sticky; top: 0;
            z-index: 50;
            box-shadow: 0 2px 10px rgba(128,0,32,0.06);
        }

        .topbar-title {
            font-family: 'Lora', serif;
            font-size: 1.25rem;
            color: var(--crimson);
            font-weight: 700;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .admin-badge {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--gold-light);
            border: 1.5px solid var(--gold-muted);
            border-radius: 30px;
            padding: 6px 14px 6px 8px;
            cursor: pointer;
        }

        .admin-avatar {
            width: 30px; height: 30px;
            background: var(--crimson);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: var(--gold);
            font-size: 0.85rem;
            font-weight: 700;
        }

        .admin-name { font-size: 0.85rem; font-weight: 600; color: var(--crimson); }

        .content { padding: 32px; flex: 1; }

        /* ── STATS ───────────────────────────── */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 18px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 22px 24px;
            border: 1.5px solid var(--gold-muted);
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .stat-icon {
            width: 48px; height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--crimson), var(--crimson-light));
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .stat-info .stat-num { font-size: 1.8rem; font-weight: 700; color: var(--crimson); font-family: 'Lora', serif; }
        .stat-info .stat-label { font-size: 0.78rem; color: var(--text-muted); font-weight: 500; }

        /* ── PANEL UTAMA ─────────────────────── */
        .panel {
            background: var(--white);
            border-radius: var(--radius);
            border: 1.5px solid var(--gold-muted);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .panel-header {
            padding: 20px 24px;
            border-bottom: 1.5px solid var(--gold-muted);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(90deg, var(--cream), var(--white));
        }

        .panel-title {
            font-family: 'Lora', serif;
            font-size: 1.15rem;
            color: var(--crimson);
            font-weight: 700;
        }

        .btn {
            padding: 9px 20px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-primary {
            background: var(--crimson);
            color: var(--gold);
            box-shadow: 0 3px 10px rgba(128,0,32,0.3);
        }

        .btn-primary:hover { background: var(--crimson-light); transform: translateY(-1px); }

        .btn-gold {
            background: var(--gold);
            color: var(--crimson-dark);
        }

        .btn-gold:hover { background: #FFC300; }

        .btn-outline {
            background: transparent;
            border: 1.5px solid var(--crimson);
            color: var(--crimson);
        }

        .btn-outline:hover { background: var(--crimson); color: var(--gold); }

        .btn-danger {
            background: transparent;
            border: 1.5px solid #dc3545;
            color: #dc3545;
        }

        .btn-danger:hover { background: #dc3545; color: #fff; }

        .btn-sm { padding: 6px 14px; font-size: 0.78rem; }

        /* ── TABLE ───────────────────────────── */
        .table-wrap { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background: var(--gold-light);
        }

        th {
            padding: 12px 16px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--crimson);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            white-space: nowrap;
        }

        td {
            padding: 14px 16px;
            font-size: 0.875rem;
            color: var(--text);
            border-bottom: 1px solid var(--gold-light);
            vertical-align: middle;
        }

        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,215,0,0.04); }

        .kegiatan-img {
            width: 52px; height: 42px;
            object-fit: cover;
            border-radius: 7px;
            border: 1.5px solid var(--gold-muted);
        }

        .kegiatan-img-placeholder {
            width: 52px; height: 42px;
            border-radius: 7px;
            background: var(--gold-light);
            border: 1.5px dashed var(--gold-muted);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem;
            color: var(--text-muted);
        }

        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.72rem;
            font-weight: 600;
        }

        .badge-aktif { background: #e8f5e9; color: #2e7d32; }
        .badge-selesai { background: #fce4ec; color: #c62828; }
        .badge-akan { background: #fff3e0; color: #e65100; }

        .actions { display: flex; gap: 6px; }

        /* ── MODAL ───────────────────────────── */
        .modal-overlay {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,0.55);
            backdrop-filter: blur(3px);
            z-index: 200;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.open { display: flex; animation: fadeIn 0.2s ease; }

        @keyframes fadeIn { from { opacity: 0 } to { opacity: 1 } }
        @keyframes slideUp { from { opacity: 0; transform: translateY(30px) } to { opacity: 1; transform: translateY(0) } }

        .modal {
            background: var(--white);
            border-radius: 18px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 24px 64px rgba(0,0,0,0.25);
            animation: slideUp 0.25s ease;
            border: 2px solid var(--gold-muted);
        }

        .modal-header {
            padding: 22px 28px 18px;
            border-bottom: 1.5px solid var(--gold-muted);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(90deg, var(--cream), var(--white));
        }

        .modal-header h3 {
            font-family: 'Lora', serif;
            color: var(--crimson);
            font-size: 1.15rem;
        }

        .modal-close {
            background: none; border: none; cursor: pointer;
            color: var(--text-muted); font-size: 1.4rem; line-height: 1;
            transition: color 0.2s;
        }

        .modal-close:hover { color: var(--crimson); }

        .modal-body { padding: 24px 28px; }

        .modal-footer {
            padding: 16px 28px;
            border-top: 1.5px solid var(--gold-muted);
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        /* ── FORM ────────────────────────────── */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group.full { grid-column: 1 / -1; }

        label {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--crimson);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input, textarea, select {
            padding: 10px 14px;
            border: 1.5px solid var(--gold-muted);
            border-radius: 9px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.9rem;
            color: var(--text);
            background: var(--cream);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }

        input:focus, textarea:focus, select:focus {
            border-color: var(--crimson);
            box-shadow: 0 0 0 3px rgba(128,0,32,0.1);
        }

        textarea { resize: vertical; min-height: 90px; }

        /* ── UPLOAD AREA ─────────────────────── */
        .upload-area {
            border: 2px dashed var(--gold-muted);
            border-radius: 12px;
            padding: 28px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            background: var(--gold-light);
            position: relative;
        }

        .upload-area:hover { border-color: var(--crimson); background: var(--cream); }
        .upload-area.dragover { border-color: var(--crimson); background: rgba(255,215,0,0.15); }

        .upload-area input[type="file"] {
            position: absolute; inset: 0; opacity: 0; cursor: pointer;
            padding: 0; border: none; background: none;
        }

        .upload-icon { font-size: 2.2rem; margin-bottom: 8px; }
        .upload-text { font-size: 0.85rem; color: var(--text-muted); }
        .upload-text strong { color: var(--crimson); }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
            margin-top: 12px;
        }

        .preview-item {
            position: relative;
        }

        .preview-item img {
            width: 100%; aspect-ratio: 1;
            object-fit: cover;
            border-radius: 9px;
            border: 1.5px solid var(--gold-muted);
        }

        .preview-remove {
            position: absolute; top: -6px; right: -6px;
            width: 20px; height: 20px;
            background: #dc3545; color: #fff;
            border-radius: 50%; border: none;
            font-size: 0.7rem; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700;
        }

        /* ── SEARCH / FILTER ─────────────────── */
        .toolbar {
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        .search-input-wrap {
            position: relative;
            flex: 1;
            min-width: 200px;
        }

        .search-input-wrap input {
            width: 100%;
            padding-left: 36px;
        }

        .search-icon {
            position: absolute;
            left: 12px; top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .filter-select { min-width: 150px; }

        /* ── EMPTY STATE ─────────────────────── */
        .empty-state {
            text-align: center;
            padding: 52px 24px;
            color: var(--text-muted);
        }

        .empty-state .empty-icon { font-size: 3rem; margin-bottom: 12px; }
        .empty-state p { font-size: 0.9rem; }

        /* ── CONFIRM MODAL ───────────────────── */
        .confirm-body { text-align: center; padding: 32px 28px; }
        .confirm-icon { font-size: 3rem; margin-bottom: 12px; }
        .confirm-body h4 { font-family: 'Lora', serif; color: var(--crimson); font-size: 1.2rem; margin-bottom: 8px; }
        .confirm-body p { color: var(--text-muted); font-size: 0.9rem; }

        /* ── TOAST ───────────────────────────── */
        .toast-container {
            position: fixed; bottom: 24px; right: 24px;
            z-index: 999;
            display: flex; flex-direction: column; gap: 10px;
        }

        .toast {
            background: var(--white);
            border-left: 4px solid var(--crimson);
            border-radius: 10px;
            padding: 12px 18px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text);
            animation: slideUp 0.3s ease;
            max-width: 300px;
        }

        .toast.success { border-color: #2e7d32; }
        .toast.error { border-color: #c62828; }

        /* ── PAGE SECTIONS ───────────────────── */
        .page { display: none; }
        .page.active { display: block; }

        /* ── RESPONSIVE ──────────────────────── */
        @media (max-width: 900px) {
            .sidebar { transform: translateX(-260px); }
            .sidebar.open { transform: translateX(0); }
            .main { margin-left: 0; }
            .topbar { padding: 0 16px; }
            .content { padding: 20px 16px; }
            .form-grid { grid-template-columns: 1fr; }
            .mobile-menu-btn { display: flex !important; }
        }

        .mobile-menu-btn {
            display: none;
            background: none; border: none; cursor: pointer;
            font-size: 1.4rem; color: var(--crimson);
        }

        .sidebar-overlay {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 99;
        }

        .sidebar-overlay.open { display: block; }
    </style>
</head>
<body>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <div class="logo-icon">🌙</div>
        <div class="logo-text">
            ILSAH MADURA
            <small>Panel Administrator</small>
        </div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-label">Menu Utama</div>
        <button class="nav-item active" onclick="showPage('dashboard')">
            <span class="icon">📊</span> Dashboard
        </button>
        <button class="nav-item" onclick="showPage('kegiatan')">
            <span class="icon">📅</span> Kelola Kegiatan
        </button>
        <button class="nav-item" onclick="showPage('galeri')">
            <span class="icon">🖼️</span> Galeri Foto
        </button>
        <button class="nav-item" onclick="showPage('pengumuman')">
            <span class="icon">📢</span> Pengumuman
        </button>

        <div class="nav-section-label" style="margin-top:8px">Pengaturan</div>
        <button class="nav-item" onclick="showPage('profil')">
            <span class="icon">⚙️</span> Pengaturan
        </button>
    </nav>

    <div class="sidebar-footer">
        <button class="nav-item" onclick="handleLogout()">
            <span class="icon">🚪</span> Keluar
        </button>
    </div>
</aside>

<!-- Main Content -->
<div class="main">
    <header class="topbar">
        <div style="display:flex;align-items:center;gap:12px">
            <button class="mobile-menu-btn" onclick="openSidebar()">☰</button>
            <div class="topbar-title" id="topbarTitle">Dashboard</div>
        </div>
        <div class="topbar-right">
            <div class="admin-badge">
                <div class="admin-avatar">A</div>
                <span class="admin-name">Admin</span>
            </div>
        </div>
    </header>

    <div class="content">

        <!-- ═══ DASHBOARD ═══ -->
        <div class="page active" id="page-dashboard">
            <div class="stats-row">
                <div class="stat-card">
                    <div class="stat-icon">📅</div>
                    <div class="stat-info">
                        <div class="stat-num" id="statKegiatan">0</div>
                        <div class="stat-label">Total Kegiatan</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <div class="stat-info">
                        <div class="stat-num" id="statAktif">0</div>
                        <div class="stat-label">Kegiatan Aktif</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📢</div>
                    <div class="stat-info">
                        <div class="stat-num" id="statPengumuman">0</div>
                        <div class="stat-label">Pengumuman</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🖼️</div>
                    <div class="stat-info">
                        <div class="stat-num" id="statFoto">0</div>
                        <div class="stat-label">Foto Galeri</div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">⚡ Kegiatan Terbaru</div>
                    <button class="btn btn-primary" onclick="showPage('kegiatan')">Lihat Semua</button>
                </div>
                <div class="table-wrap">
                    <table id="dashboardTable">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="dashboardTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ═══ KEGIATAN ═══ -->
        <div class="page" id="page-kegiatan">
            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">📅 Kelola Kegiatan</div>
                    <button class="btn btn-primary" onclick="openModalKegiatan()">+ Tambah Kegiatan</button>
                </div>
                <div style="padding:16px 20px; border-bottom:1px solid var(--gold-muted);">
                    <div class="toolbar">
                        <div class="search-input-wrap">
                            <span class="search-icon">🔍</span>
                            <input type="text" placeholder="Cari kegiatan..." id="searchKegiatan" oninput="renderKegiatan()">
                        </div>
                        <select class="filter-select" id="filterStatus" onchange="renderKegiatan()">
                            <option value="">Semua Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="akan">Akan Datang</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="kegiatanTableBody"></tbody>
                    </table>
                    <div id="kegiatanEmpty" class="empty-state" style="display:none">
                        <div class="empty-icon">📭</div>
                        <p>Belum ada kegiatan. Tambahkan kegiatan pertama!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ GALERI ═══ -->
        <div class="page" id="page-galeri">
            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">🖼️ Galeri Foto</div>
                    <button class="btn btn-primary" onclick="openModalGaleri()">+ Tambah Foto</button>
                </div>
                <div style="padding:24px">
                    <div id="galeriGrid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:16px;"></div>
                    <div id="galeriEmpty" class="empty-state" style="display:none">
                        <div class="empty-icon">🖼️</div>
                        <p>Belum ada foto di galeri.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ PENGUMUMAN ═══ -->
        <div class="page" id="page-pengumuman">
            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">📢 Pengumuman</div>
                    <button class="btn btn-primary" onclick="openModalPengumuman()">+ Tambah Pengumuman</button>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Isi Singkat</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="pengumumanTableBody"></tbody>
                    </table>
                    <div id="pengumumanEmpty" class="empty-state" style="display:none">
                        <div class="empty-icon">📭</div>
                        <p>Belum ada pengumuman.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ PROFIL ═══ -->
        <div class="page" id="page-profil">
            <div class="panel" style="max-width:500px">
                <div class="panel-header">
                    <div class="panel-title">⚙️ Pengaturan Admin</div>
                </div>
                <div class="modal-body">
                    <div class="form-grid" style="grid-template-columns:1fr">
                        <div class="form-group">
                            <label>Nama Admin</label>
                            <input type="text" value="Admin ILSAH" id="namaAdmin">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="ilsahmadura@gmail.com" id="emailAdmin">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" placeholder="Kosongkan jika tidak diubah">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" placeholder="Ulangi password baru">
                        </div>
                    </div>
                    <div style="margin-top:20px">
                        <button class="btn btn-primary" onclick="showToast('Pengaturan berhasil disimpan!','success')">💾 Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /content -->
</div><!-- /main -->


<!-- ═══ MODAL KEGIATAN ═══ -->
<div class="modal-overlay" id="modalKegiatan">
    <div class="modal">
        <div class="modal-header">
            <h3 id="modalKegiatanTitle">Tambah Kegiatan</h3>
            <button class="modal-close" onclick="closeModal('modalKegiatan')">×</button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="kegiatanId">
            <div class="form-grid">
                <div class="form-group full">
                    <label>Nama Kegiatan *</label>
                    <input type="text" id="kegiatanNama" placeholder="Contoh: Kajian Rutin Bulanan">
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" id="kegiatanTanggal">
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="time" id="kegiatanWaktu">
                </div>
                <div class="form-group full">
                    <label>Lokasi</label>
                    <input type="text" id="kegiatanLokasi" placeholder="Contoh: Masjid Agung Bangkalan">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select id="kegiatanStatus">
                        <option value="akan">Akan Datang</option>
                        <option value="aktif">Aktif / Berlangsung</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>
                <div class="form-group full">
                    <label>Keterangan</label>
                    <textarea id="kegiatanKeterangan" placeholder="Deskripsi singkat kegiatan..."></textarea>
                </div>
                <div class="form-group full">
                    <label>Foto Kegiatan</label>
                    <div class="upload-area" id="uploadAreaKegiatan">
                        <input type="file" accept="image/*" onchange="handleUploadKegiatan(this)">
                        <div class="upload-icon">📸</div>
                        <div class="upload-text"><strong>Klik atau seret</strong> foto ke sini<br>JPG, PNG, WEBP (maks 5MB)</div>
                    </div>
                    <div class="preview-grid" id="previewKegiatan"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline" onclick="closeModal('modalKegiatan')">Batal</button>
            <button class="btn btn-primary" onclick="saveKegiatan()">💾 Simpan</button>
        </div>
    </div>
</div>

<!-- ═══ MODAL GALERI ═══ -->
<div class="modal-overlay" id="modalGaleri">
    <div class="modal">
        <div class="modal-header">
            <h3>Tambah Foto ke Galeri</h3>
            <button class="modal-close" onclick="closeModal('modalGaleri')">×</button>
        </div>
        <div class="modal-body">
            <div class="form-grid" style="grid-template-columns:1fr">
                <div class="form-group">
                    <label>Judul Foto</label>
                    <input type="text" id="galeriJudul" placeholder="Contoh: Kajian Bulan Maret">
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <div class="upload-area">
                        <input type="file" accept="image/*" multiple onchange="handleUploadGaleri(this)">
                        <div class="upload-icon">🖼️</div>
                        <div class="upload-text"><strong>Klik atau seret</strong> beberapa foto sekaligus</div>
                    </div>
                    <div class="preview-grid" id="previewGaleri"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline" onclick="closeModal('modalGaleri')">Batal</button>
            <button class="btn btn-primary" onclick="saveGaleri()">💾 Simpan</button>
        </div>
    </div>
</div>

<!-- ═══ MODAL PENGUMUMAN ═══ -->
<div class="modal-overlay" id="modalPengumuman">
    <div class="modal">
        <div class="modal-header">
            <h3 id="modalPengumumanTitle">Tambah Pengumuman</h3>
            <button class="modal-close" onclick="closeModal('modalPengumuman')">×</button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="pengumumanId">
            <div class="form-grid" style="grid-template-columns:1fr">
                <div class="form-group">
                    <label>Judul Pengumuman *</label>
                    <input type="text" id="pengumumanJudul" placeholder="Judul pengumuman...">
                </div>
                <div class="form-group">
                    <label>Isi Pengumuman *</label>
                    <textarea id="pengumumanIsi" style="min-height:120px" placeholder="Isi lengkap pengumuman..."></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline" onclick="closeModal('modalPengumuman')">Batal</button>
            <button class="btn btn-primary" onclick="savePengumuman()">💾 Simpan</button>
        </div>
    </div>
</div>

<!-- ═══ CONFIRM DELETE ═══ -->
<div class="modal-overlay" id="modalConfirm">
    <div class="modal" style="max-width:380px">
        <div class="confirm-body">
            <div class="confirm-icon">🗑️</div>
            <h4>Hapus Data?</h4>
            <p>Tindakan ini tidak dapat dibatalkan. Data akan dihapus secara permanen.</p>
            <div style="display:flex;gap:10px;justify-content:center;margin-top:20px">
                <button class="btn btn-outline" onclick="closeModal('modalConfirm')">Batal</button>
                <button class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Toast -->
<div class="toast-container" id="toastContainer"></div>

<script>
    // ── STATE ─────────────────────────────────────────────
    let kegiatan = [
        { id: 1, nama: 'Kajian Rutin Bulanan', tanggal: '2025-03-15', waktu: '08:00', lokasi: 'Masjid Agung Bangkalan', keterangan: 'Kajian keislaman rutin dengan Kyai Abdurrahman.', status: 'aktif', foto: null },
        { id: 2, nama: 'Silaturahmi Alumni', tanggal: '2025-04-01', waktu: '10:00', lokasi: 'Aula Pesantren Tarbiyatut Tholabah', keterangan: 'Pertemuan tahunan seluruh alumni wilayah Madura.', status: 'akan', foto: null },
        { id: 3, nama: 'Bakti Sosial Ramadhan', tanggal: '2025-02-10', waktu: '09:00', lokasi: 'Desa Burneh, Bangkalan', keterangan: 'Pembagian sembako untuk warga dhuafa.', status: 'selesai', foto: null },
    ];

    let galeri = [];
    let pengumuman = [
        { id: 1, judul: 'Pendaftaran Beasiswa Santri 2025 Dibuka!', isi: 'Dengan bangga kami umumkan bahwa pendaftaran beasiswa santri berprestasi tahun 2025 resmi dibuka. Segera daftarkan diri Anda!', tanggal: '2025-03-01' }
    ];

    let nextId = 10;
    let pendingDeleteFn = null;
    let currentEditId = null;
    let currentFotoKegiatan = null;
    let pendingGaleriFotos = [];

    // ── PAGE NAVIGATION ──────────────────────────────────
    const pageTitles = { dashboard: 'Dashboard', kegiatan: 'Kelola Kegiatan', galeri: 'Galeri Foto', pengumuman: 'Pengumuman', profil: 'Pengaturan' };

    function showPage(name) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
        document.getElementById('page-' + name).classList.add('active');
        document.querySelectorAll('.nav-item').forEach(n => { if (n.textContent.trim().includes(pageTitles[name])) n.classList.add('active'); });
        document.getElementById('topbarTitle').textContent = pageTitles[name];
        closeSidebar();
        if (name === 'dashboard') renderDashboard();
        if (name === 'kegiatan') renderKegiatan();
        if (name === 'galeri') renderGaleri();
        if (name === 'pengumuman') renderPengumuman();
    }

    // ── SIDEBAR MOBILE ────────────────────────────────────
    function openSidebar() {
        document.getElementById('sidebar').classList.add('open');
        document.getElementById('sidebarOverlay').classList.add('open');
    }
    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('open');
        document.getElementById('sidebarOverlay').classList.remove('open');
    }

    // ── MODAL ────────────────────────────────────────────
    function openModal(id) { document.getElementById(id).classList.add('open'); }
    function closeModal(id) { document.getElementById(id).classList.remove('open'); }

    // Click outside to close
    document.querySelectorAll('.modal-overlay').forEach(o => {
        o.addEventListener('click', function(e) {
            if (e.target === this) closeModal(this.id);
        });
    });

    // ── TOAST ─────────────────────────────────────────────
    function showToast(msg, type = 'success') {
        const t = document.createElement('div');
        t.className = 'toast ' + type;
        t.textContent = msg;
        document.getElementById('toastContainer').appendChild(t);
        setTimeout(() => t.remove(), 3500);
    }

    // ── CONFIRM DELETE ────────────────────────────────────
    function confirmDelete(fn) {
        pendingDeleteFn = fn;
        document.getElementById('confirmDeleteBtn').onclick = () => { fn(); closeModal('modalConfirm'); };
        openModal('modalConfirm');
    }

    // ── UTILS ─────────────────────────────────────────────
    function formatDate(d) {
        if (!d) return '-';
        const opts = { day:'numeric', month:'long', year:'numeric' };
        return new Date(d).toLocaleDateString('id-ID', opts);
    }

    function statusBadge(s) {
        const map = { aktif: ['badge-aktif','Aktif'], akan: ['badge-akan','Akan Datang'], selesai: ['badge-selesai','Selesai'] };
        const [cls, label] = map[s] || ['',''];
        return `<span class="badge ${cls}">${label}</span>`;
    }

    function fotoCell(foto) {
        if (foto) return `<img src="${foto}" class="kegiatan-img" alt="foto">`;
        return `<div class="kegiatan-img-placeholder">📷</div>`;
    }

    // ── DASHBOARD ─────────────────────────────────────────
    function renderDashboard() {
        document.getElementById('statKegiatan').textContent = kegiatan.length;
        document.getElementById('statAktif').textContent = kegiatan.filter(k => k.status === 'aktif').length;
        document.getElementById('statPengumuman').textContent = pengumuman.length;
        document.getElementById('statFoto').textContent = galeri.length;

        const tbody = document.getElementById('dashboardTableBody');
        const recent = [...kegiatan].reverse().slice(0, 5);
        tbody.innerHTML = recent.map(k => `
            <tr>
                <td>${fotoCell(k.foto)}</td>
                <td><strong>${k.nama}</strong></td>
                <td>${formatDate(k.tanggal)}</td>
                <td>${k.lokasi || '-'}</td>
                <td>${statusBadge(k.status)}</td>
            </tr>
        `).join('') || `<tr><td colspan="5" class="empty-state">Belum ada kegiatan</td></tr>`;
    }

    // ── KEGIATAN ─────────────────────────────────────────
    function openModalKegiatan(id = null) {
        currentEditId = id;
        currentFotoKegiatan = null;
        document.getElementById('previewKegiatan').innerHTML = '';
        document.getElementById('modalKegiatanTitle').textContent = id ? 'Edit Kegiatan' : 'Tambah Kegiatan';

        if (id) {
            const k = kegiatan.find(x => x.id === id);
            document.getElementById('kegiatanId').value = k.id;
            document.getElementById('kegiatanNama').value = k.nama;
            document.getElementById('kegiatanTanggal').value = k.tanggal;
            document.getElementById('kegiatanWaktu').value = k.waktu || '';
            document.getElementById('kegiatanLokasi').value = k.lokasi || '';
            document.getElementById('kegiatanStatus').value = k.status;
            document.getElementById('kegiatanKeterangan').value = k.keterangan || '';
            currentFotoKegiatan = k.foto;
            if (k.foto) {
                document.getElementById('previewKegiatan').innerHTML = `<div class="preview-item"><img src="${k.foto}"><button class="preview-remove" onclick="currentFotoKegiatan=null;this.parentNode.remove()">✕</button></div>`;
            }
        } else {
            document.getElementById('kegiatanId').value = '';
            ['kegiatanNama','kegiatanTanggal','kegiatanWaktu','kegiatanLokasi','kegiatanKeterangan'].forEach(id => document.getElementById(id).value = '');
            document.getElementById('kegiatanStatus').value = 'akan';
        }
        openModal('modalKegiatan');
    }

    function handleUploadKegiatan(input) {
        const file = input.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = e => {
            currentFotoKegiatan = e.target.result;
            document.getElementById('previewKegiatan').innerHTML = `<div class="preview-item"><img src="${e.target.result}"><button class="preview-remove" onclick="currentFotoKegiatan=null;this.parentNode.remove()">✕</button></div>`;
        };
        reader.readAsDataURL(file);
    }

    function saveKegiatan() {
        const nama = document.getElementById('kegiatanNama').value.trim();
        const tanggal = document.getElementById('kegiatanTanggal').value;
        if (!nama) return showToast('Nama kegiatan wajib diisi!', 'error');
        if (!tanggal) return showToast('Tanggal wajib diisi!', 'error');

        const data = {
            nama,
            tanggal,
            waktu: document.getElementById('kegiatanWaktu').value,
            lokasi: document.getElementById('kegiatanLokasi').value,
            status: document.getElementById('kegiatanStatus').value,
            keterangan: document.getElementById('kegiatanKeterangan').value,
            foto: currentFotoKegiatan
        };

        if (currentEditId) {
            const idx = kegiatan.findIndex(k => k.id === currentEditId);
            kegiatan[idx] = { ...kegiatan[idx], ...data };
            showToast('Kegiatan berhasil diperbarui!', 'success');
        } else {
            kegiatan.push({ id: nextId++, ...data });
            showToast('Kegiatan berhasil ditambahkan!', 'success');
        }
        closeModal('modalKegiatan');
        renderKegiatan();
        renderDashboard();
    }

    function deleteKegiatan(id) {
        confirmDelete(() => {
            kegiatan = kegiatan.filter(k => k.id !== id);
            renderKegiatan();
            renderDashboard();
            showToast('Kegiatan berhasil dihapus.', 'success');
        });
    }

    function renderKegiatan() {
        const q = document.getElementById('searchKegiatan').value.toLowerCase();
        const fs = document.getElementById('filterStatus').value;
        let data = kegiatan.filter(k => {
            const matchQ = k.nama.toLowerCase().includes(q) || (k.lokasi || '').toLowerCase().includes(q);
            const matchS = fs ? k.status === fs : true;
            return matchQ && matchS;
        });

        const tbody = document.getElementById('kegiatanTableBody');
        const empty = document.getElementById('kegiatanEmpty');

        if (!data.length) { tbody.innerHTML = ''; empty.style.display = 'block'; return; }
        empty.style.display = 'none';

        tbody.innerHTML = data.map(k => `
            <tr>
                <td>${fotoCell(k.foto)}</td>
                <td><strong>${k.nama}</strong></td>
                <td>${formatDate(k.tanggal)}${k.waktu ? '<br><small style="color:var(--text-muted)">'+k.waktu+'</small>' : ''}</td>
                <td>${k.lokasi || '-'}</td>
                <td style="max-width:180px;font-size:0.82rem;color:var(--text-muted)">${(k.keterangan||'').slice(0,80)}${(k.keterangan||'').length>80?'...':''}</td>
                <td>${statusBadge(k.status)}</td>
                <td>
                    <div class="actions">
                        <button class="btn btn-outline btn-sm" onclick="openModalKegiatan(${k.id})">✏️</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteKegiatan(${k.id})">🗑️</button>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    // ── GALERI ───────────────────────────────────────────
    function openModalGaleri() {
        pendingGaleriFotos = [];
        document.getElementById('galeriJudul').value = '';
        document.getElementById('previewGaleri').innerHTML = '';
        openModal('modalGaleri');
    }

    function handleUploadGaleri(input) {
        const files = Array.from(input.files);
        files.forEach(file => {
            const reader = new FileReader();
            reader.onload = e => {
                pendingGaleriFotos.push({ src: e.target.result, judul: document.getElementById('galeriJudul').value });
                const prev = document.getElementById('previewGaleri');
                prev.innerHTML += `<div class="preview-item"><img src="${e.target.result}"></div>`;
            };
            reader.readAsDataURL(file);
        });
    }

    function saveGaleri() {
        if (!pendingGaleriFotos.length) return showToast('Pilih minimal satu foto!', 'error');
        const judul = document.getElementById('galeriJudul').value || 'Tanpa Judul';
        pendingGaleriFotos.forEach(f => galeri.push({ id: nextId++, src: f.src, judul }));
        closeModal('modalGaleri');
        renderGaleri();
        renderDashboard();
        showToast(`${pendingGaleriFotos.length} foto berhasil ditambahkan!`, 'success');
    }

    function deleteGaleri(id) {
        confirmDelete(() => {
            galeri = galeri.filter(g => g.id !== id);
            renderGaleri();
            renderDashboard();
            showToast('Foto berhasil dihapus.', 'success');
        });
    }

    function renderGaleri() {
        const grid = document.getElementById('galeriGrid');
        const empty = document.getElementById('galeriEmpty');
        if (!galeri.length) { grid.innerHTML = ''; empty.style.display = 'block'; return; }
        empty.style.display = 'none';
        grid.innerHTML = galeri.map(g => `
            <div style="position:relative;border-radius:12px;overflow:hidden;border:2px solid var(--gold-muted);box-shadow:var(--shadow)">
                <img src="${g.src}" style="width:100%;aspect-ratio:1;object-fit:cover;display:block">
                <div style="padding:8px 10px;background:#fff;font-size:0.78rem;font-weight:600;color:var(--text-muted);white-space:nowrap;overflow:hidden;text-overflow:ellipsis">${g.judul}</div>
                <button onclick="deleteGaleri(${g.id})" style="position:absolute;top:6px;right:6px;background:rgba(220,53,69,0.9);color:#fff;border:none;border-radius:7px;padding:4px 8px;cursor:pointer;font-size:0.75rem;font-weight:700">✕</button>
            </div>
        `).join('');
    }

    // ── PENGUMUMAN ───────────────────────────────────────
    function openModalPengumuman(id = null) {
        currentEditId = id;
        document.getElementById('modalPengumumanTitle').textContent = id ? 'Edit Pengumuman' : 'Tambah Pengumuman';
        if (id) {
            const p = pengumuman.find(x => x.id === id);
            document.getElementById('pengumumanId').value = p.id;
            document.getElementById('pengumumanJudul').value = p.judul;
            document.getElementById('pengumumanIsi').value = p.isi;
        } else {
            document.getElementById('pengumumanId').value = '';
            document.getElementById('pengumumanJudul').value = '';
            document.getElementById('pengumumanIsi').value = '';
        }
        openModal('modalPengumuman');
    }

    function savePengumuman() {
        const judul = document.getElementById('pengumumanJudul').value.trim();
        const isi = document.getElementById('pengumumanIsi').value.trim();
        if (!judul || !isi) return showToast('Judul dan isi wajib diisi!', 'error');

        const tanggal = new Date().toISOString().split('T')[0];
        if (currentEditId) {
            const idx = pengumuman.findIndex(p => p.id === currentEditId);
            pengumuman[idx] = { ...pengumuman[idx], judul, isi };
            showToast('Pengumuman diperbarui!', 'success');
        } else {
            pengumuman.push({ id: nextId++, judul, isi, tanggal });
            showToast('Pengumuman ditambahkan!', 'success');
        }
        closeModal('modalPengumuman');
        renderPengumuman();
        renderDashboard();
    }

    function deletePengumuman(id) {
        confirmDelete(() => {
            pengumuman = pengumuman.filter(p => p.id !== id);
            renderPengumuman();
            renderDashboard();
            showToast('Pengumuman dihapus.', 'success');
        });
    }

    function renderPengumuman() {
        const tbody = document.getElementById('pengumumanTableBody');
        const empty = document.getElementById('pengumumanEmpty');
        if (!pengumuman.length) { tbody.innerHTML = ''; empty.style.display = 'block'; return; }
        empty.style.display = 'none';
        tbody.innerHTML = pengumuman.map(p => `
            <tr>
                <td><strong>${p.judul}</strong></td>
                <td style="max-width:260px;font-size:0.82rem;color:var(--text-muted)">${p.isi.slice(0,100)}${p.isi.length>100?'...':''}</td>
                <td>${formatDate(p.tanggal)}</td>
                <td>
                    <div class="actions">
                        <button class="btn btn-outline btn-sm" onclick="openModalPengumuman(${p.id})">✏️</button>
                        <button class="btn btn-danger btn-sm" onclick="deletePengumuman(${p.id})">🗑️</button>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    function handleLogout() {
        if (confirm('Yakin ingin keluar dari panel admin?')) {
            showToast('Berhasil keluar.', 'success');
            setTimeout(() => window.location.href = 'index.php', 1200);
        }
    }

    // ── INIT ─────────────────────────────────────────────
    renderDashboard();
</script>
</body>
</html>