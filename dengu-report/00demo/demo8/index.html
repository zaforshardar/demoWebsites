<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dengue Surveillance Dashboard | 10 Aug 2026 | DGHS</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-w: 260px;
            --teal: #0d9488;
            --teal-dark: #0f766e;
            --teal-light: #ccfbf1;
            --slate: #0f172a;
            --slate-800: #1e293b;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-400: #94a3b8;
            --slate-200: #e2e8f0;
            --slate-100: #f1f5f9;
            --rose: #e11d48;
            --amber: #d97706;
            --sky: #0284c7;
            --emerald: #059669;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            background: var(--slate-100);
            color: var(--slate);
            margin: 0;
            min-height: 100vh;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            position: fixed;
            top: 0; left: 0;
            width: var(--sidebar-w);
            height: 100vh;
            background: var(--slate);
            color: #fff;
            z-index: 1040;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 1.5rem 1.25rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-brand .logo {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, var(--teal), #14b8a6);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.25rem;
            box-shadow: 0 4px 12px rgba(13,148,136,0.4);
        }

        .sidebar-brand h1 {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.3px;
        }

        .sidebar-brand small {
            font-size: 0.7rem;
            color: var(--slate-400);
            display: block;
            margin-top: 2px;
        }

        .sidebar-nav {
            flex: 1;
            padding: 1rem 0.75rem;
            overflow-y: auto;
        }

        .nav-section {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--slate-400);
            padding: 0.75rem 0.75rem 0.35rem;
            font-weight: 600;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.65rem 0.85rem;
            color: var(--slate-400);
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            margin-bottom: 2px;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.active {
            background: rgba(13,148,136,0.15);
            color: #5eead4;
        }

        .sidebar-nav a i {
            width: 20px;
            text-align: center;
            font-size: 0.95rem;
        }

        .sidebar-footer {
            padding: 1rem 1.25rem;
            border-top: 1px solid rgba(255,255,255,0.08);
            font-size: 0.75rem;
            color: var(--slate-400);
        }

        /* ===== MAIN ===== */
        .main-content {
            margin-left: var(--sidebar-w);
            min-height: 100vh;
            transition: margin 0.3s ease;
        }

        .topbar {
            background: #fff;
            border-bottom: 1px solid var(--slate-200);
            padding: 0.85rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .topbar-title {
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--slate);
        }

        .date-badge {
            background: var(--teal-light);
            color: var(--teal-dark);
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
        }

        .content-area {
            padding: 1.5rem;
        }

        /* ===== STAT CARDS ===== */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 1400px) {
            .stat-grid { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
            .stat-grid { grid-template-columns: repeat(2, 1fr); }
        }

        .stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 1.15rem 1.25rem;
            border: 1px solid var(--slate-200);
            position: relative;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 4px;
            height: 100%;
            border-radius: 16px 0 0 16px;
        }

        .stat-card.teal::before { background: var(--teal); }
        .stat-card.rose::before { background: var(--rose); }
        .stat-card.amber::before { background: var(--amber); }
        .stat-card.sky::before { background: var(--sky); }
        .stat-card.emerald::before { background: var(--emerald); }
        .stat-card.slate::before { background: var(--slate-600); }

        .stat-label {
            font-size: 0.72rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--slate-600);
            margin-bottom: 0.35rem;
        }

        .stat-value {
            font-size: 1.65rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            line-height: 1.1;
        }

        .stat-sub {
            font-size: 0.75rem;
            color: var(--slate-400);
            margin-top: 0.25rem;
        }

        .stat-icon {
            position: absolute;
            right: 1rem;
            top: 1rem;
            width: 36px; height: 36px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.95rem;
            opacity: 0.85;
        }

        /* ===== CARDS / CHARTS ===== */
        .panel {
            background: #fff;
            border-radius: 16px;
            border: 1px solid var(--slate-200);
            margin-bottom: 1.25rem;
            overflow: hidden;
        }

        .panel-header {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--slate-200);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fafbfc;
        }

        .panel-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--slate);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .panel-title i {
            color: var(--teal);
            font-size: 0.9rem;
        }

        .panel-body {
            padding: 1.25rem;
        }

        .chart-box {
            position: relative;
            height: 300px;
        }

        .chart-box.sm { height: 260px; }

        /* ===== TABLES ===== */
        .table thead th {
            background: var(--slate-100) !important;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: var(--slate-600);
            border-bottom: 2px solid var(--slate-200) !important;
            white-space: nowrap;
        }

        .table tbody td {
            font-size: 0.875rem;
            vertical-align: middle;
        }

        .table tfoot th {
            background: var(--teal-light) !important;
            color: var(--teal-dark);
            font-weight: 700;
        }

        /* ===== BADGES ===== */
        .badge-soft {
            font-weight: 600;
            font-size: 0.75rem;
            padding: 0.3rem 0.6rem;
            border-radius: 6px;
        }

        /* ===== MOBILE ===== */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.35rem;
            color: var(--slate);
            padding: 0.25rem;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .mobile-toggle {
                display: block;
            }
            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(15,23,42,0.5);
                z-index: 1035;
            }
            .sidebar-overlay.show {
                display: block;
            }
        }

        /* DataTables tweaks */
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 8px;
            border: 1px solid var(--slate-200);
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
        }
        .dataTables_wrapper .dataTables_length select {
            border-radius: 8px;
            border: 1px solid var(--slate-200);
            padding: 0.25rem 0.5rem;
        }

        .section-label {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--slate-600);
            margin: 1.75rem 0 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--slate-200);
        }
    </style>
</head>
<body>

<!-- Sidebar Overlay (mobile) -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- ========== SIDEBAR ========== -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="d-flex align-items-center gap-3">
            <div class="logo">
                <i class="fas fa-virus"></i>
            </div>
            <div>
                <h1>Dengue Track</h1>
                <small>DGHS • Bangladesh</small>
            </div>
        </div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section">Overview</div>
        <a href="#overview" class="active"><i class="fas fa-gauge-high"></i> Dashboard</a>
        <a href="#charts"><i class="fas fa-chart-pie"></i> Analytics</a>
        <a href="#divisions"><i class="fas fa-map"></i> Divisions</a>

        <div class="nav-section">Demographics</div>
        <a href="#age"><i class="fas fa-user-group"></i> Age Groups</a>
        <a href="#gender"><i class="fas fa-venus-mars"></i> Gender</a>
        <a href="#deaths"><i class="fas fa-heart-crack"></i> Deaths</a>

        <div class="nav-section">Trends</div>
        <a href="#monthly"><i class="fas fa-calendar-days"></i> Monthly</a>
    </nav>

    <div class="sidebar-footer">
        <div class="mb-1 fw-semibold text-white-50">Report Date</div>
        <div class="text-teal" style="color:#5eead4">10 August 2026</div>
        <div class="mt-2 opacity-75" style="font-size:0.7rem">HEOC & Control Room</div>
    </div>
</aside>

<!-- ========== MAIN ========== -->
<div class="main-content">
    <!-- Topbar -->
    <header class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="mobile-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            <div>
                <div class="topbar-title">Daily Dengue Press Release</div>
                <div class="text-muted" style="font-size:0.78rem">Health Emergency Operation Center • MIS, DGHS</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="date-badge">
                <i class="far fa-calendar-alt me-1"></i> 10 Aug 2026
            </span>
        </div>
    </header>

    <div class="content-area">

        <!-- ===== STAT CARDS ===== -->
        <section id="overview">
            <div class="stat-grid">
                <div class="stat-card teal">
                    <div class="stat-icon" style="background:#ccfbf1;color:var(--teal)">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="stat-label">Last 24h Cases</div>
                    <div class="stat-value" style="color:var(--teal)">726</div>
                    <div class="stat-sub">Admitted</div>
                </div>

                <div class="stat-card rose">
                    <div class="stat-icon" style="background:#ffe4e6;color:var(--rose)">
                        <i class="fas fa-heart-crack"></i>
                    </div>
                    <div class="stat-label">Last 24h Deaths</div>
                    <div class="stat-value" style="color:var(--rose)">0</div>
                    <div class="stat-sub">Confirmed</div>
                </div>

                <div class="stat-card amber">
                    <div class="stat-icon" style="background:#fef3c7;color:var(--amber)">
                        <i class="fas fa-bed"></i>
                    </div>
                    <div class="stat-label">Currently Admitted</div>
                    <div class="stat-value" style="color:var(--amber)">1,443</div>
                    <div class="stat-sub">In hospitals</div>
                </div>

                <div class="stat-card sky">
                    <div class="stat-icon" style="background:#e0f2fe;color:var(--sky)">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-label">Cumulative Cases</div>
                    <div class="stat-value" style="color:var(--sky)">20,071</div>
                    <div class="stat-sub">Since 1 Jan 2026</div>
                </div>

                <div class="stat-card rose">
                    <div class="stat-icon" style="background:#ffe4e6;color:var(--rose)">
                        <i class="fas fa-skull"></i>
                    </div>
                    <div class="stat-label">Cumulative Deaths</div>
                    <div class="stat-value" style="color:var(--rose)">61</div>
                    <div class="stat-sub">CFR ≈ 0.30%</div>
                </div>

                <div class="stat-card emerald">
                    <div class="stat-icon" style="background:#d1fae5;color:var(--emerald)">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <div class="stat-label">Discharged</div>
                    <div class="stat-value" style="color:var(--emerald)">18,567</div>
                    <div class="stat-sub">Recovered</div>
                </div>
            </div>

            <!-- Weekly strip -->
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <div class="panel mb-0">
                        <div class="panel-body d-flex align-items-center justify-content-between py-3">
                            <div>
                                <div class="stat-label mb-1">Weekly Cases (W32)</div>
                                <div class="stat-value" style="font-size:1.4rem;color:var(--teal)">1,398</div>
                            </div>
                            <i class="fas fa-calendar-week fa-2x" style="color:var(--teal);opacity:0.25"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel mb-0">
                        <div class="panel-body d-flex align-items-center justify-content-between py-3">
                            <div>
                                <div class="stat-label mb-1">Weekly Deaths</div>
                                <div class="stat-value" style="font-size:1.4rem;color:var(--rose)">2</div>
                            </div>
                            <i class="fas fa-calendar-xmark fa-2x" style="color:var(--rose);opacity:0.25"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CHARTS ===== -->
        <div class="section-label" id="charts"><i class="fas fa-chart-pie"></i> Analytics</div>

        <div class="row g-3">
            <div class="col-lg-8">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-map-location-dot"></i> Division & City Corp — Last 24 Hours</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box">
                            <canvas id="div24h"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-venus-mars"></i> Gender (Last 24h)</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box sm">
                            <canvas id="gender24h"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-users"></i> Age Groups — Last 24 Hours</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box">
                            <canvas id="age24h"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-chart-bar"></i> Cumulative Cases by Division</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box">
                            <canvas id="cumDiv"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3" id="gender">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-chart-pie"></i> Gender — Cases 2026</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box sm">
                            <canvas id="genderCum"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-heart-crack"></i> Gender — Deaths 2026</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box sm">
                            <canvas id="genderDeath"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-calendar"></i> Monthly Cases</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box sm">
                            <canvas id="monthlyCases"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3" id="monthly">
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-chart-column"></i> Monthly Confirmed Deaths</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box">
                            <canvas id="monthlyDeaths"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-layer-group"></i> Age Groups — Cumulative 2026</h3>
                    </div>
                    <div class="panel-body">
                        <div class="chart-box">
                            <canvas id="ageCum"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== DIVISION TABLE ===== -->
        <div class="section-label" id="divisions"><i class="fas fa-map"></i> Division Summary</div>

        <div class="panel">
            <div class="panel-header">
                <h3 class="panel-title"><i class="fas fa-table"></i> Division-wise Status (as of 10 Aug 2026)</h3>
                <span class="badge-soft" style="background:var(--teal-light);color:var(--teal-dark)">Official DGHS Data</span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="divTable" class="table table-hover table-bordered w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Division</th>
                                <th class="text-end">24h Admit</th>
                                <th class="text-end">24h Death</th>
                                <th class="text-end">Cum. Cases</th>
                                <th class="text-end">Cum. Deaths</th>
                                <th class="text-end">Discharged</th>
                                <th class="text-end">Current</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>Dhaka</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">346</td>
                                <td class="text-end">0</td>
                                <td class="text-end">7,845</td>
                                <td class="text-end text-danger fw-semibold">28</td>
                                <td class="text-end">7,678</td>
                                <td class="text-end fw-bold">541</td>
                            </tr>
                            <tr>
                                <td>2</td><td>Mymensingh</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">37</td>
                                <td class="text-end">0</td>
                                <td class="text-end">885</td>
                                <td class="text-end text-danger fw-semibold">6</td>
                                <td class="text-end">761</td>
                                <td class="text-end fw-bold">118</td>
                            </tr>
                            <tr>
                                <td>3</td><td>Chattogram</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">81</td>
                                <td class="text-end">0</td>
                                <td class="text-end">3,397</td>
                                <td class="text-end text-danger fw-semibold">5</td>
                                <td class="text-end">3,285</td>
                                <td class="text-end fw-bold">107</td>
                            </tr>
                            <tr>
                                <td>4</td><td>Khulna</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">107</td>
                                <td class="text-end">0</td>
                                <td class="text-end">2,649</td>
                                <td class="text-end text-danger fw-semibold">12</td>
                                <td class="text-end">2,331</td>
                                <td class="text-end fw-bold">298</td>
                            </tr>
                            <tr>
                                <td>5</td><td>Rajshahi</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">65</td>
                                <td class="text-end">0</td>
                                <td class="text-end">835</td>
                                <td class="text-end text-danger fw-semibold">1</td>
                                <td class="text-end">761</td>
                                <td class="text-end fw-bold">73</td>
                            </tr>
                            <tr>
                                <td>6</td><td>Rangpur</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">10</td>
                                <td class="text-end">0</td>
                                <td class="text-end">441</td>
                                <td class="text-end text-danger fw-semibold">1</td>
                                <td class="text-end">417</td>
                                <td class="text-end fw-bold">23</td>
                            </tr>
                            <tr>
                                <td>7</td><td>Barishal</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">75</td>
                                <td class="text-end">0</td>
                                <td class="text-end">3,899</td>
                                <td class="text-end text-danger fw-semibold">7</td>
                                <td class="text-end">3,614</td>
                                <td class="text-end fw-bold">278</td>
                            </tr>
                            <tr>
                                <td>8</td><td>Sylhet</td>
                                <td class="text-end fw-bold" style="color:var(--teal)">5</td>
                                <td class="text-end">0</td>
                                <td class="text-end">120</td>
                                <td class="text-end text-danger fw-semibold">1</td>
                                <td class="text-end">114</td>
                                <td class="text-end fw-bold">5</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total</th>
                                <th class="text-end">726</th>
                                <th class="text-end">0</th>
                                <th class="text-end">20,071</th>
                                <th class="text-end">61</th>
                                <th class="text-end">18,567</th>
                                <th class="text-end">1,443</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- ===== AGE TABLES ===== -->
        <div class="section-label" id="age"><i class="fas fa-user-group"></i> Age Demographics</div>

        <div class="row g-3">
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-clock"></i> Age Groups — Last 24 Hours</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="age24Table" class="table table-sm table-hover table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Age</th>
                                        <th class="text-end">Male</th>
                                        <th class="text-end">Female</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>0-5</td><td class="text-end">22</td><td class="text-end">11</td><td class="text-end fw-semibold">33</td></tr>
                                    <tr><td>6-10</td><td class="text-end">20</td><td class="text-end">15</td><td class="text-end fw-semibold">35</td></tr>
                                    <tr><td>11-15</td><td class="text-end">33</td><td class="text-end">10</td><td class="text-end fw-semibold">43</td></tr>
                                    <tr><td>16-20</td><td class="text-end">60</td><td class="text-end">29</td><td class="text-end fw-semibold">89</td></tr>
                                    <tr><td>21-25</td><td class="text-end">87</td><td class="text-end">33</td><td class="text-end fw-semibold">120</td></tr>
                                    <tr><td>26-30</td><td class="text-end">66</td><td class="text-end">30</td><td class="text-end fw-semibold">96</td></tr>
                                    <tr><td>31-35</td><td class="text-end">51</td><td class="text-end">30</td><td class="text-end fw-semibold">81</td></tr>
                                    <tr><td>36-40</td><td class="text-end">40</td><td class="text-end">28</td><td class="text-end fw-semibold">68</td></tr>
                                    <tr><td>41-45</td><td class="text-end">24</td><td class="text-end">24</td><td class="text-end fw-semibold">48</td></tr>
                                    <tr><td>46-50</td><td class="text-end">23</td><td class="text-end">16</td><td class="text-end fw-semibold">39</td></tr>
                                    <tr><td>51-55</td><td class="text-end">15</td><td class="text-end">6</td><td class="text-end fw-semibold">21</td></tr>
                                    <tr><td>56-60</td><td class="text-end">12</td><td class="text-end">14</td><td class="text-end fw-semibold">26</td></tr>
                                    <tr><td>61-65</td><td class="text-end">10</td><td class="text-end">4</td><td class="text-end fw-semibold">14</td></tr>
                                    <tr><td>66-70</td><td class="text-end">7</td><td class="text-end">1</td><td class="text-end fw-semibold">8</td></tr>
                                    <tr><td>76-80</td><td class="text-end">4</td><td class="text-end">1</td><td class="text-end fw-semibold">5</td></tr>
                                </tbody>
                                <tfoot>
                                    <tr><th>Total</th><th class="text-end">474</th><th class="text-end">252</th><th class="text-end">726</th></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" id="deaths">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title"><i class="fas fa-heart-crack"></i> Deaths by Age Group (2026)</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="deathAgeTable" class="table table-sm table-hover table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Age</th>
                                        <th class="text-end">Male</th>
                                        <th class="text-end">Female</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>0-5</td><td class="text-end">1</td><td class="text-end">2</td><td class="text-end">3</td></tr>
                                    <tr><td>6-10</td><td class="text-end">1</td><td class="text-end">1</td><td class="text-end">2</td></tr>
                                    <tr><td>11-15</td><td class="text-end">2</td><td class="text-end">2</td><td class="text-end">4</td></tr>
                                    <tr><td>16-20</td><td class="text-end">1</td><td class="text-end">1</td><td class="text-end">2</td></tr>
                                    <tr><td>21-25</td><td class="text-end">1</td><td class="text-end">3</td><td class="text-end">4</td></tr>
                                    <tr><td>26-30</td><td class="text-end">5</td><td class="text-end">5</td><td class="text-end">10</td></tr>
                                    <tr><td>31-35</td><td class="text-end">1</td><td class="text-end">6</td><td class="text-end">7</td></tr>
                                    <tr><td>36-40</td><td class="text-end">4</td><td class="text-end">2</td><td class="text-end">6</td></tr>
                                    <tr><td>41-45</td><td class="text-end">0</td><td class="text-end">4</td><td class="text-end">4</td></tr>
                                    <tr><td>46-50</td><td class="text-end">2</td><td class="text-end">5</td><td class="text-end">7</td></tr>
                                    <tr><td>51-55</td><td class="text-end">2</td><td class="text-end">2</td><td class="text-end">4</td></tr>
                                    <tr><td>56-60</td><td class="text-end">0</td><td class="text-end">2</td><td class="text-end">2</td></tr>
                                    <tr><td>61-65</td><td class="text-end">0</td><td class="text-end">3</td><td class="text-end">3</td></tr>
                                    <tr><td>71-75</td><td class="text-end">2</td><td class="text-end">1</td><td class="text-end">3</td></tr>
                                </tbody>
                                <tfoot>
                                    <tr><th>Total</th><th class="text-end">22</th><th class="text-end">39</th><th class="text-end">61</th></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cumulative Age -->
        <div class="panel">
            <div class="panel-header">
                <h3 class="panel-title"><i class="fas fa-chart-area"></i> Age Group Distribution — Cumulative (1 Jan – 10 Aug 2026)</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="ageCumTable" class="table table-sm table-hover table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Age Group</th>
                                <th class="text-end">Male</th>
                                <th class="text-end">Female</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>0-5</td><td class="text-end">590</td><td class="text-end">472</td><td class="text-end">1,063</td></tr>
                            <tr><td>6-10</td><td class="text-end">583</td><td class="text-end">477</td><td class="text-end">1,061</td></tr>
                            <tr><td>11-15</td><td class="text-end">826</td><td class="text-end">512</td><td class="text-end">1,338</td></tr>
                            <tr><td>16-20</td><td class="text-end">1,748</td><td class="text-end">907</td><td class="text-end">2,655</td></tr>
                            <tr><td>21-25</td><td class="text-end">1,800</td><td class="text-end">950</td><td class="text-end">2,751</td></tr>
                            <tr><td>26-30</td><td class="text-end">1,844</td><td class="text-end">955</td><td class="text-end">2,799</td></tr>
                            <tr><td>31-35</td><td class="text-end">1,178</td><td class="text-end">810</td><td class="text-end">1,988</td></tr>
                            <tr><td>36-40</td><td class="text-end">1,042</td><td class="text-end">744</td><td class="text-end">1,787</td></tr>
                            <tr><td>41-45</td><td class="text-end">762</td><td class="text-end">534</td><td class="text-end">1,296</td></tr>
                            <tr><td>46-50</td><td class="text-end">619</td><td class="text-end">476</td><td class="text-end">1,096</td></tr>
                            <tr><td>51-55</td><td class="text-end">415</td><td class="text-end">279</td><td class="text-end">694</td></tr>
                            <tr><td>56-60</td><td class="text-end">389</td><td class="text-end">266</td><td class="text-end">655</td></tr>
                            <tr><td>61-65</td><td class="text-end">236</td><td class="text-end">159</td><td class="text-end">395</td></tr>
                            <tr><td>66-70</td><td class="text-end">170</td><td class="text-end">91</td><td class="text-end">261</td></tr>
                            <tr><td>71-75</td><td class="text-end">66</td><td class="text-end">35</td><td class="text-end">101</td></tr>
                            <tr><td>76-80</td><td class="text-end">56</td><td class="text-end">16</td><td class="text-end">72</td></tr>
                            <tr><td>80+</td><td class="text-end">38</td><td class="text-end">17</td><td class="text-end">55</td></tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Grand Total</th>
                                <th class="text-end">12,364</th>
                                <th class="text-end">7,702</th>
                                <th class="text-end">20,071</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Notes -->
        <div class="panel">
            <div class="panel-body">
                <div class="d-flex gap-3">
                    <div style="width:40px;height:40px;border-radius:10px;background:var(--teal-light);color:var(--teal);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                        <i class="fas fa-circle-info"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-2">Important Notes</h6>
                        <ul class="mb-0 text-muted" style="font-size:0.875rem;line-height:1.7">
                            <li>Data sourced from hospitals nationwide via the Health Emergency Operation Center & Control Room, DGHS.</li>
                            <li>Last 24-hour figures cover the reporting period ending <strong>10 August 2026</strong>.</li>
                            <li>Case Fatality Rate (CFR) ≈ <strong>0.30%</strong> (61 deaths / 20,071 cases).</li>
                            <li>Males account for ~61.6% of cumulative cases; females account for ~63.9% of deaths.</li>
                            <li>This dashboard is a system-generated visualization of the official press release.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-muted py-4" style="font-size:0.8rem">
            <div class="mb-1">
                <strong>Source:</strong> Health Emergency Operation Center & Control Room • Directorate General of Health Services (DGHS), MIS
            </div>
            <div>Mohakhali, Dhaka-1212 • Phone: 02-222285933 / 02-222297353 • Mobile: 01759-114488</div>
            <div class="mt-1">In-charge: Dr. Md. Salamat Ali • Email: controlroomdghs@yahoo.com</div>
            <div class="mt-2 opacity-75">Dashboard generated from official PDF report • 10 August 2026</div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<script>
    // Mobile sidebar toggle
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const toggle = document.getElementById('menuToggle');

    toggle.addEventListener('click', () => {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    });
    overlay.addEventListener('click', () => {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    });

    // Smooth scroll for sidebar links
    document.querySelectorAll('.sidebar-nav a').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            document.querySelectorAll('.sidebar-nav a').forEach(a => a.classList.remove('active'));
            link.classList.add('active');
            const target = document.querySelector(link.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            // close mobile
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    });

    // Colors
    const C = {
        teal: '#0d9488',
        tealLight: '#5eead4',
        rose: '#e11d48',
        amber: '#d97706',
        sky: '#0284c7',
        emerald: '#059669',
        slate: '#334155',
        pink: '#db2777',
        indigo: '#4f46e5',
        orange: '#ea580c'
    };

    const baseOpts = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: { boxWidth: 11, padding: 14, font: { size: 11, family: "'Plus Jakarta Sans'" } }
            }
        }
    };

    // 1. Division 24h
    new Chart(document.getElementById('div24h'), {
        type: 'bar',
        data: {
            labels: ['Barishal','Chattogram','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],
            datasets: [{
                label: 'Admitted',
                data: [75,81,101,83,107,37,65,172,5],
                backgroundColor: C.teal,
                borderRadius: 8,
                maxBarThickness: 38
            }]
        },
        options: {
            ...baseOpts,
            scales: {
                y: { beginAtZero: true, grid: { color: '#f1f5f9' }, ticks: { font: { size: 11 } } },
                x: { grid: { display: false }, ticks: { font: { size: 11 } } }
            }
        }
    });

    // 2. Gender 24h
    new Chart(document.getElementById('gender24h'), {
        type: 'doughnut',
        data: {
            labels: ['Male 65.3%', 'Female 34.7%'],
            datasets: [{
                data: [474, 252],
                backgroundColor: [C.teal, C.pink],
                borderWidth: 0,
                hoverOffset: 6
            }]
        },
        options: { ...baseOpts, cutout: '60%' }
    });

    // 3. Age 24h
    new Chart(document.getElementById('age24h'), {
        type: 'bar',
        data: {
            labels: ['0-5','6-10','11-15','16-20','21-25','26-30','31-35','36-40','41-45','46-50','51-55','56-60','61-65','66-70','76-80'],
            datasets: [
                { label: 'Male', data: [22,20,33,60,87,66,51,40,24,23,15,12,10,7,4], backgroundColor: C.teal, borderRadius: 4 },
                { label: 'Female', data: [11,15,10,29,33,30,30,28,24,16,6,14,4,1,1], backgroundColor: C.pink, borderRadius: 4 }
            ]
        },
        options: {
            ...baseOpts,
            scales: {
                x: { grid: { display: false }, ticks: { font: { size: 10 } } },
                y: { beginAtZero: true, grid: { color: '#f1f5f9' } }
            }
        }
    });

    // 4. Cumulative Division
    new Chart(document.getElementById('cumDiv'), {
        type: 'bar',
        data: {
            labels: ['Barishal','Chattogram','Dhaka (Out)','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],
            datasets: [{
                label: 'Cases',
                data: [3899,3397,2658,2250,2775,2649,885,835,603,120],
                backgroundColor: [C.teal,C.sky,C.emerald,C.indigo,C.orange,C.amber,C.emerald,C.slate,C.pink,C.rose],
                borderRadius: 6,
                maxBarThickness: 28
            }]
        },
        options: {
            ...baseOpts,
            indexAxis: 'y',
            scales: {
                x: { beginAtZero: true, grid: { color: '#f1f5f9' } },
                y: { grid: { display: false }, ticks: { font: { size: 11 } } }
            }
        }
    });

    // 5. Gender Cum Cases
    new Chart(document.getElementById('genderCum'), {
        type: 'doughnut',
        data: {
            labels: ['Male 61.6%', 'Female 38.4%'],
            datasets: [{ data: [12364, 7702], backgroundColor: [C.teal, C.pink], borderWidth: 0, hoverOffset: 6 }]
        },
        options: { ...baseOpts, cutout: '60%' }
    });

    // 6. Gender Deaths
    new Chart(document.getElementById('genderDeath'), {
        type: 'doughnut',
        data: {
            labels: ['Male 36.1%', 'Female 63.9%'],
            datasets: [{ data: [22, 39], backgroundColor: [C.teal, C.rose], borderWidth: 0, hoverOffset: 6 }]
        },
        options: { ...baseOpts, cutout: '60%' }
    });

    // 7. Monthly Cases
    new Chart(document.getElementById('monthlyCases'), {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug'],
            datasets: [{
                label: 'Cases',
                data: [1081,409,353,640,714,2907,9206,4761],
                backgroundColor: C.teal,
                borderRadius: 6,
                maxBarThickness: 32
            }]
        },
        options: {
            ...baseOpts,
            scales: {
                y: { beginAtZero: true, grid: { color: '#f1f5f9' } },
                x: { grid: { display: false } }
            }
        }
    });

    // 8. Monthly Deaths
    new Chart(document.getElementById('monthlyDeaths'), {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','May','Jun','Jul','Aug'],
            datasets: [{
                label: 'Deaths',
                data: [2,2,1,13,36,7],
                backgroundColor: C.rose,
                borderRadius: 6,
                maxBarThickness: 36
            }]
        },
        options: {
            ...baseOpts,
            scales: {
                y: { beginAtZero: true, grid: { color: '#f1f5f9' } },
                x: { grid: { display: false } }
            }
        }
    });

    // 9. Age Cumulative
    new Chart(document.getElementById('ageCum'), {
        type: 'bar',
        data: {
            labels: ['0-5','6-10','11-15','16-20','21-25','26-30','31-35','36-40','41-45','46-50','51-55','56-60','61+'],
            datasets: [
                { label: 'Male', data: [590,583,826,1748,1800,1844,1178,1042,762,619,415,389,566], backgroundColor: C.teal, borderRadius: 3 },
                { label: 'Female', data: [472,477,512,907,950,955,810,744,534,476,279,266,318], backgroundColor: C.pink, borderRadius: 3 }
            ]
        },
        options: {
            ...baseOpts,
            scales: {
                x: { grid: { display: false }, ticks: { font: { size: 10 } } },
                y: { beginAtZero: true, grid: { color: '#f1f5f9' } }
            }
        }
    });

    // DataTables
    $(function () {
        $('#divTable').DataTable({
            responsive: true,
            pageLength: 10,
            order: [[2, 'desc']],
            language: { search: "Filter:", lengthMenu: "Show _MENU_" }
        });
        $('#age24Table, #deathAgeTable').DataTable({
            responsive: true,
            paging: false,
            searching: false,
            info: false,
            ordering: false
        });
        $('#ageCumTable').DataTable({
            responsive: true,
            pageLength: 20,
            order: [[3, 'desc']],
            language: { search: "Filter:" }
        });
    });
</script>
</body>
</html>

