<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dengue Dashboard · Bangladesh 2026</title>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <style>
        /* ── Variables ── */
        :root {
            --sidebar-width: 260px;
            --primary: #2c3e50;
            --accent: #e67e22;
            --bg-body: #ecf0f1;
            --bg-card: #ffffff;
            --shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            --radius: 14px;
            --text-dark: #2c3e50;
            --text-muted: #7f8c8d;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-body);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: var(--text-dark);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* ── Sidebar ── */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--primary);
            color: #fff;
            padding: 1.5rem 0;
            overflow-y: auto;
            z-index: 1000;
            transition: transform 0.3s ease;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
        }
        .sidebar .brand {
            text-align: center;
            padding: 0 1rem 1.5rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1.5rem;
        }
        .sidebar .brand i {
            font-size: 2.5rem;
            color: var(--accent);
        }
        .sidebar .brand h4 {
            font-weight: 700;
            margin: 0.5rem 0 0 0;
            letter-spacing: -0.5px;
        }
        .sidebar .brand small {
            opacity: 0.7;
            font-size: 0.75rem;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 0.7rem 1.8rem;
            border-radius: 0;
            border-left: 3px solid transparent;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            font-weight: 500;
            font-size: 0.95rem;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            border-left-color: var(--accent);
        }
        .sidebar .nav-link i {
            width: 1.4rem;
            text-align: center;
            color: var(--accent);
        }

        /* ── Main content ── */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem 2rem 1rem 2rem;
            min-height: 100vh;
        }

        /* ── Cards ── */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1.2rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: var(--bg-card);
            border-radius: var(--radius);
            padding: 1.2rem 1.2rem 0.8rem 1.2rem;
            box-shadow: var(--shadow);
            transition: transform 0.15s, box-shadow 0.15s;
            border-bottom: 4px solid var(--primary);
            position: relative;
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }
        .stat-card .stat-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
            font-weight: 600;
        }
        .stat-card .stat-number {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
            color: var(--primary);
        }
        .stat-card .stat-sub {
            font-size: 0.75rem;
            color: var(--text-muted);
        }
        .stat-card .stat-icon {
            position: absolute;
            right: 1rem;
            bottom: 0.6rem;
            font-size: 1.8rem;
            opacity: 0.15;
            color: var(--primary);
        }
        .stat-card.accent { border-bottom-color: var(--accent); }
        .stat-card.accent .stat-number { color: var(--accent); }
        .stat-card.success { border-bottom-color: #27ae60; }
        .stat-card.success .stat-number { color: #27ae60; }
        .stat-card.danger { border-bottom-color: #e74c3c; }
        .stat-card.danger .stat-number { color: #e74c3c; }
        .stat-card.info { border-bottom-color: #3498db; }
        .stat-card.info .stat-number { color: #3498db; }

        /* ── Section Cards ── */
        .section-card {
            background: var(--bg-card);
            border-radius: var(--radius);
            padding: 1.5rem 1.8rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
        }
        .section-card .section-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: var(--primary);
        }
        .section-card .section-title i {
            color: var(--accent);
        }

        /* ── Tables ── */
        .table {
            font-size: 0.9rem;
            color: var(--text-dark);
        }
        .table thead th {
            background: var(--primary);
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.5px;
            border: none;
            padding: 0.7rem 0.8rem;
        }
        .table tbody td {
            border-bottom: 1px solid #e9ecef;
            padding: 0.6rem 0.8rem;
            vertical-align: middle;
        }
        .table tbody tr:hover {
            background: #f8f9fa;
        }
        .table .total-row {
            background: #f1f3f5 !important;
            font-weight: 700;
            border-top: 2px solid var(--accent);
        }
        .table .total-row td {
            border-top: 2px solid var(--accent);
        }

        /* DataTables tweaks */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ced4da;
            border-radius: 30px;
            padding: 0.3rem 1rem;
            outline: none;
            background: #fff;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.2);
        }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #ced4da;
            border-radius: 30px;
            padding: 0.2rem 0.8rem;
            background: #fff;
        }

        /* ── Charts ── */
        .chart-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.8rem;
        }
        .chart-box {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1rem 1rem 0.5rem 1rem;
            border: 1px solid #e9ecef;
        }
        .chart-box .chart-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 0.5rem;
        }
        .chart-container {
            position: relative;
            height: 220px;
            width: 100%;
        }
        .chart-container-lg {
            height: 280px;
        }

        @media (max-width: 992px) {
            .chart-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        /* ── Footer ── */
        .footer {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.8rem;
            padding-top: 1.5rem;
            border-top: 1px solid #dee2e6;
            margin-top: 1rem;
        }

        /* ── Responsive ── */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
                padding: 1.2rem;
            }
            .stat-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .stat-card .stat-number {
                font-size: 1.4rem;
            }
            /* hamburger button */
            .menu-toggle {
                display: inline-block !important;
            }
        }

        @media (min-width: 769px) {
            .menu-toggle {
                display: none !important;
            }
            .sidebar {
                transform: translateX(0) !important;
            }
        }

        .menu-toggle {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-bottom: 1rem;
        }
        .menu-toggle:hover {
            background: var(--accent);
        }

        /* scrollable table */
        .table-scroll {
            max-height: 400px;
            overflow-y: auto;
        }
        .table-scroll thead th {
            position: sticky;
            top: 0;
            z-index: 5;
            background: var(--primary);
        }
    </style>
</head>
<body>

    <!-- ===== SIDEBAR ===== -->
    <div class="sidebar" id="sidebar">
        <div class="brand">
            <i class="fas fa-shield-virus"></i>
            <h4>ডেঙ্গু ড্যাশ</h4>
            <small>স্বাস্থ্য অধিদপ্তর</small>
        </div>
        <nav class="nav flex-column">
            <a href="#" class="nav-link active"><i class="fas fa-tachometer-alt"></i> ড্যাশবোর্ড</a>
            <a href="#" class="nav-link"><i class="fas fa-map-marked-alt"></i> বিভাগ</a>
            <a href="#" class="nav-link"><i class="fas fa-hospital"></i> হাসপাতাল</a>
            <a href="#" class="nav-link"><i class="fas fa-chart-pie"></i> পরিসংখ্যান</a>
            <a href="#" class="nav-link"><i class="fas fa-file-alt"></i> প্রতিবেদন</a>
        </nav>
        <div style="position:absolute; bottom:1rem; left:0; width:100%; text-align:center; font-size:0.7rem; opacity:0.4; padding:0 1rem;">
            <i class="fas fa-database"></i> v1.0 · ২০২৬
        </div>
    </div>

    <!-- ===== MAIN ===== -->
    <div class="main-content" id="mainContent">

        <!-- Mobile toggle -->
        <button class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i> মেনু</button>

        <!-- ===== HEADER ===== -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold" style="color:var(--primary);"><i class="fas fa-thermometer-half text-warning me-2"></i>ডেঙ্গু সার্ভেইল্যান্স</h3>
                <p class="text-muted">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার · স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়</p>
            </div>
            <div class="bg-white p-2 px-4 rounded-4 shadow-sm border">
                <i class="fas fa-calendar-day text-accent me-2" style="color:var(--accent);"></i>
                <span class="fw-semibold">১০ আগস্ট ২০২৬</span>
                <span class="text-muted ms-2">| আপডেট</span>
            </div>
        </div>

        <!-- ===== STATS ===== -->
        <div class="stat-grid">
            <div class="stat-card">
                <div class="stat-label"><i class="fas fa-plus-circle me-1"></i>২৪ ঘণ্টায়</div>
                <div class="stat-number">৭২৬</div>
                <div class="stat-sub">নতুন আক্রান্ত</div>
                <i class="fas fa-user-plus stat-icon"></i>
            </div>
            <div class="stat-card danger">
                <div class="stat-label"><i class="fas fa-virus me-1"></i>মোট আক্রান্ত</div>
                <div class="stat-number">২০,০৭১</div>
                <div class="stat-sub">০১ জানু – আজ</div>
                <i class="fas fa-chart-line stat-icon"></i>
            </div>
            <div class="stat-card" style="border-bottom-color:#e74c3c;">
                <div class="stat-label"><i class="fas fa-skull me-1"></i>মোট মৃত্যু</div>
                <div class="stat-number" style="color:#e74c3c;">৬১</div>
                <div class="stat-sub">সর্বমোট</div>
                <i class="fas fa-heartbeat stat-icon"></i>
            </div>
            <div class="stat-card success">
                <div class="stat-label"><i class="fas fa-check-circle me-1"></i>ছাড়পত্র</div>
                <div class="stat-number">১,৮৫৬</div>
                <div class="stat-sub">সুস্থ হয়েছেন</div>
                <i class="fas fa-home stat-icon"></i>
            </div>
            <div class="stat-card info">
                <div class="stat-label"><i class="fas fa-hospital-user me-1"></i>বর্তমানে</div>
                <div class="stat-number">১,৪৪৩</div>
                <div class="stat-sub">ভর্তি</div>
                <i class="fas fa-bed stat-icon"></i>
            </div>
            <div class="stat-card accent">
                <div class="stat-label"><i class="fas fa-venus-mars me-1"></i>লিঙ্গ অনুপাত</div>
                <div class="stat-number" style="font-size:1.3rem;">৬১.৬% / ৩৮.৪%</div>
                <div class="stat-sub">পুরুষ / নারী</div>
                <i class="fas fa-people-arrows stat-icon"></i>
            </div>
        </div>

        <!-- ===== DIVISION TABLE ===== -->
        <div class="section-card">
            <div class="section-title">
                <i class="fas fa-map-marked-alt"></i> বিভাগভিত্তিক সংক্ষিপ্ত তথ্য
                <span class="ms-auto text-muted" style="font-size:0.75rem;font-weight:400;"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="divisionTable">
                    <thead>
                        <tr>
                            <th>ক্রমিক</th>
                            <th>বিভাগ</th>
                            <th>২৪ ঘণ্টায়</th>
                            <th>মোট আক্রান্ত</th>
                            <th>বর্তমানে ভর্তি</th>
                            <th>মৃত্যু</th>
                            <th>ছাড়পত্র</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>১</td><td><strong>ঢাকা বিভাগ</strong></td><td>৩৪৬</td><td>৭,৮৪৫</td><td>৫২৮</td><td>৭২৭</td><td>৬,৫৪১</td></tr>
                        <tr><td>২</td><td>ময়মনসিংহ</td><td>৩৭</td><td>৮৮</td><td>৫৬</td><td>৭</td><td>৬১</td></tr>
                        <tr><td>৩</td><td>চট্টগ্রাম</td><td>৮১</td><td>৩৩৯</td><td>৭৫</td><td>৩২</td><td>২৮৫</td></tr>
                        <tr><td>৪</td><td>খুলনা</td><td>১০৭</td><td>২৬৪</td><td>৯১</td><td>২২</td><td>৩৩৯</td></tr>
                        <tr><td>৫</td><td>রাজশাহী</td><td>৬৫</td><td>৮৩</td><td>৫১</td><td>৭</td><td>৬১</td></tr>
                        <tr><td>৬</td><td>রংপুর</td><td>১০০</td><td>৪৪১</td><td>১৪</td><td>১৭</td><td>২৩৭</td></tr>
                        <tr><td>৭</td><td>বরিশাল</td><td>৭৫</td><td>৩৮৯</td><td>৯৭</td><td>৩৬</td><td>১৪২</td></tr>
                        <tr><td>৮</td><td>সিলেট</td><td>৫০</td><td>১২০</td><td>১১</td><td>১৪</td><td>১৪৫</td></tr>
                    </tbody>
                    <tfoot>
                        <tr class="total-row">
                            <td colspan="2" class="text-end">সর্বমোট</td>
                            <td><strong>৭২৬</strong></td>
                            <td><strong>২০,০৭১</strong></td>
                            <td><strong>১,৪৪৩</strong></td>
                            <td><strong>৬১</strong></td>
                            <td><strong>১,৮৫৬</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="text-muted mt-2" style="font-size:0.75rem;">
                <i class="fas fa-info-circle"></i> তথ্য সুত্র: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম
            </div>
        </div>

        <!-- ===== CHARTS ===== -->
        <div class="section-card">
            <div class="section-title">
                <i class="fas fa-chart-pie"></i> পরিসংখ্যানিক বিশ্লেষণ
                <span class="ms-auto text-muted" style="font-size:0.75rem;font-weight:400;"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
            </div>

            <div class="chart-grid">
                <!-- Gender Cases -->
                <div class="chart-box">
                    <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> আক্রান্তের লিঙ্গ</div>
                    <div class="chart-container"><canvas id="genderCasesChart"></canvas></div>
                    <div class="text-center text-muted mt-1" style="font-size:0.75rem;">পুরুষ ১২,৩৬৪ · নারী ৭,৭০২</div>
                </div>
                <!-- Gender Deaths -->
                <div class="chart-box">
                    <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> মৃত্যুর লিঙ্গ</div>
                    <div class="chart-container"><canvas id="genderDeathsChart"></canvas></div>
                    <div class="text-center text-muted mt-1" style="font-size:0.75rem;">পুরুষ ২২ · নারী ৩৯</div>
                </div>
                <!-- Age Cases -->
                <div class="chart-box" style="grid-column: 1 / -1;">
                    <div class="chart-title"><i class="fas fa-users me-1"></i> বয়সভিত্তিক আক্রান্ত</div>
                    <div class="chart-container chart-container-lg"><canvas id="ageCasesChart"></canvas></div>
                </div>
                <!-- Age Deaths -->
                <div class="chart-box" style="grid-column: 1 / -1;">
                    <div class="chart-title"><i class="fas fa-user-injured me-1"></i> বয়সভিত্তিক মৃত্যু</div>
                    <div class="chart-container chart-container-lg"><canvas id="ageDeathsChart"></canvas></div>
                </div>
                <!-- Monthly Deaths -->
                <div class="chart-box" style="grid-column: 1 / -1;">
                    <div class="chart-title"><i class="fas fa-calendar-check me-1"></i> মাসভিত্তিক নিশ্চিত মৃত্যু</div>
                    <div class="chart-container chart-container-lg"><canvas id="monthlyDeathsChart"></canvas></div>
                </div>
            </div>
        </div>

        <!-- ===== HOSPITAL TABLE ===== -->
        <div class="section-card">
            <div class="section-title">
                <i class="fas fa-hospital"></i> হাসপাতালভিত্তিক ডেটা
                <span class="ms-auto text-muted" style="font-size:0.75rem;font-weight:400;"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="hospitalTable">
                    <thead>
                        <tr>
                            <th>ক্রমিক</th>
                            <th>হাসপাতাল</th>
                            <th>২৪ ঘণ্টায়</th>
                            <th>মোট আক্রান্ত</th>
                            <th>বর্তমানে ভর্তি</th>
                            <th>মৃত্যু</th>
                            <th>ছাড়পত্র</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>৪</td><td>আজগি আলী হাসপাতাল</td><td>০</td><td>৬৩</td><td>০</td><td>৬১</td><td>২</td></tr>
                        <tr><td>২৬</td><td>বাংলামেশ রেশালাইজ্ড</td><td>০</td><td>৩০</td><td>০</td><td>২৫</td><td>৫</td></tr>
                        <tr><td>২৮</td><td>সালাউরিন হাসপাতাল</td><td>৪</td><td>৪২</td><td>০</td><td>৪০</td><td>২</td></tr>
                        <tr><td>২৯</td><td>পপুলার মেডিকেল কলেজ</td><td>০</td><td>৪৩</td><td>০</td><td>৪১</td><td>২</td></tr>
                        <tr><td>৩৩</td><td>ডা: এ জি খান শিশু</td><td>৩</td><td>৬৯</td><td>০</td><td>৬২</td><td>৭</td></tr>
                        <tr><td>৩৯</td><td>এ এ রজি হাসপাতাল</td><td>০</td><td>১৩</td><td>০</td><td>১২</td><td>১</td></tr>
                        <tr><td>৪৩</td><td>এরি ব্যাংক হাসপাতাল</td><td>০</td><td>২৩</td><td>০</td><td>১৮</td><td>৫</td></tr>
                        <tr><td>৫২</td><td>আমলাক হাসপাতাল</td><td>২</td><td>৫৩</td><td>০</td><td>৪৮</td><td>৫</td></tr>
                        <tr><td>৫৯</td><td>ইনসা বাংলা জেনারেল</td><td>০</td><td>৭</td><td>০</td><td>৪</td><td>৩</td></tr>
                        <tr><td>৬০</td><td>লাল মনিহাট</td><td>০</td><td>৫৯</td><td>০</td><td>৫৭</td><td>২</td></tr>
                        <tr><td>৬১</td><td>কুড়িগ্রাম</td><td>০</td><td>৩০</td><td>০</td><td>২৮</td><td>২</td></tr>
                        <tr><td>৬২</td><td>নীলফামারী</td><td>০</td><td>৭৯</td><td>০</td><td>৭৮</td><td>১</td></tr>
                        <tr><td>৬৩</td><td>দিনাজপুর</td><td>০</td><td>৪৪</td><td>০</td><td>৪২</td><td>২</td></tr>
                        <tr><td>৬৪</td><td>গাইবান্ধা</td><td>১</td><td>৪৩</td><td>০</td><td>৩৯</td><td>৪</td></tr>
                        <tr><td>৬৫</td><td>ঠাকুরগাঁও</td><td>৩</td><td>২০</td><td>০</td><td>১৯</td><td>১</td></tr>
                        <tr><td>৬৯</td><td>বরিশাল</td><td>১০</td><td>৫৩৯</td><td>০</td><td>৫১০</td><td>২৯</td></tr>
                        <tr><td>৭০</td><td>পটুয়াখালী</td><td>৩</td><td>৪০৫</td><td>০</td><td>৩৯৫</td><td>১০</td></tr>
                        <tr><td>৭২</td><td>ভোলা</td><td>৭</td><td>১৭৯</td><td>০</td><td>১৬৫</td><td>১৪</td></tr>
                        <tr><td>৭৩</td><td>পিরোজপুর</td><td>২৭</td><td>১০৪০</td><td>১</td><td>৯৭৭</td><td>৬২</td></tr>
                        <tr><td>৭৪</td><td>ঝিগুনা</td><td>১১</td><td>৪৩৮</td><td>০</td><td>৩৯৬</td><td>৪২</td></tr>
                        <tr><td>৭৫</td><td>ঝালকাঠি</td><td>১৫</td><td>৯২৫</td><td>১</td><td>৮৮৪</td><td>৪০</td></tr>
                        <tr><td>৭৮</td><td>সুনামগঞ্জ</td><td>৩</td><td>১৭</td><td>০</td><td>১৪</td><td>৩</td></tr>
                        <tr><td>৭৯</td><td>হবিগঞ্জ</td><td>০</td><td>৪৬</td><td>০</td><td>৪৪</td><td>২</td></tr>
                        <tr><td>৮০</td><td>ব্রাহ্মণবাড়িয়া</td><td>২</td><td>৫</td><td>০</td><td>৫</td><td>০</td></tr>
                    </tbody>
                    <tfoot>
                        <tr class="total-row">
                            <td colspan="2" class="text-end">সর্বমোট (উপরের)</td>
                            <td><strong>৮২</strong></td>
                            <td><strong>৪,২৬২</strong></td>
                            <td><strong>২</strong></td>
                            <td><strong>৩,৯৪২</strong></td>
                            <td><strong>৩১৮</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="text-muted mt-2" style="font-size:0.75rem;">
                <i class="fas fa-info-circle"></i> শুধুমাত্র অ-শূন্য ডেটা সহ হাসপাতালসমূহ দেখানো হয়েছে।
            </div>
        </div>

        <!-- ===== FOOTER ===== -->
        <div class="footer">
            <i class="fas fa-database me-1"></i> তথ্য উৎস: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম
            <br>
            <span style="font-size:0.7rem;opacity:0.7;">
                হটলাইন: ০১৭৫৯-১১৪৪৮৮ · টেলিফোন: ০২-২২২২৮৫৯৩৩, ০২-২২২২৯৭৩৫৩
            </span>
            <br>
            <span style="font-size:0.65rem;opacity:0.5;">সর্বশেষ আপডেট: ১০ আগস্ট ২০২৬</span>
        </div>

    </div>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {

            // ---- Sidebar toggle (mobile) ----
            $('#menuToggle').on('click', function() {
                $('#sidebar').toggleClass('open');
            });
            // Close sidebar on link click (mobile)
            $('.sidebar .nav-link').on('click', function() {
                if ($(window).width() <= 768) {
                    $('#sidebar').removeClass('open');
                }
            });

            // ---- DataTables ----
            $('#divisionTable').DataTable({
                responsive: true,
                paging: false,
                ordering: true,
                info: false,
                searching: true,
                columnDefs: [{ targets: [0, 1], orderable: true }],
                language: {
                    search: "খুঁজুন: ",
                    zeroRecords: "কোনো তথ্য পাওয়া যায়নি",
                }
            });

            $('#hospitalTable').DataTable({
                responsive: true,
                paging: true,
                pageLength: 8,
                lengthMenu: [
                    [5, 8, 15, 25, -1],
                    [5, 8, 15, 25, "সব"]
                ],
                order: [
                    [3, 'desc']
                ],
                columnDefs: [{ targets: [0, 1], orderable: true }],
                language: {
                    search: "খুঁজুন: ",
                    lengthMenu: "প্রতি পৃষ্ঠায় _MENU_ টি",
                    info: "_START_–_END_ / _TOTAL_",
                    infoEmpty: "০–০ / ০",
                    zeroRecords: "কোনো তথ্য পাওয়া যায়নি",
                    paginate: {
                        first: "প্রথম",
                        last: "শেষ",
                        next: "পরবর্তী",
                        previous: "পূর্ববর্তী"
                    }
                }
            });

            // ---- Chart Colors (light theme) ----
            const lightColors = {
                blue: '#2c3e50',
                red: '#e74c3c',
                green: '#27ae60',
                orange: '#e67e22',
                purple: '#8e44ad',
                teal: '#1abc9c',
                pink: '#e84393',
                grey: '#95a5a6'
            };

            // ---- 1. Gender Cases (Pie) ----
            const ctx1 = document.getElementById('genderCasesChart').getContext('2d');
            new Chart(ctx1, {
                type: 'doughnut',
                data: {
                    labels: ['পুরুষ', 'নারী'],
                    datasets: [{
                        data: [12364, 7702],
                        backgroundColor: ['#2c3e50', '#e74c3c'],
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: { size: 12 },
                                usePointStyle: true,
                                pointStyle: 'circle',
                                padding: 12
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    let total = ctx.dataset.data.reduce((a, b) => a + b, 0);
                                    let pct = ((ctx.parsed / total) * 100).toFixed(1);
                                    return ctx.label + ': ' + ctx.parsed.toLocaleString() + ' (' + pct + '%)';
                                }
                            }
                        }
                    }
                }
            });

            // ---- 2. Gender Deaths ----
            const ctx2 = document.getElementById('genderDeathsChart').getContext('2d');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: ['পুরুষ', 'নারী'],
                    datasets: [{
                        data: [22, 39],
                        backgroundColor: ['#2c3e50', '#e74c3c'],
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: { size: 12 },
                                usePointStyle: true,
                                pointStyle: 'circle',
                                padding: 12
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    let total = ctx.dataset.data.reduce((a, b) => a + b, 0);
                                    let pct = ((ctx.parsed / total) * 100).toFixed(1);
                                    return ctx.label + ': ' + ctx.parsed + ' (' + pct + '%)';
                                }
                            }
                        }
                    }
                }
            });

            // ---- 3. Age Cases (Bar) ----
            const ageGroups = ['0-5', '6-10', '11-15', '16-20', '21-25', '26-30', '31-35', '36-40',
                '41-45', '46-50', '51-55', '56-60', '61-65', '66-70', '71-75', '76-80', '80+'
            ];
            const ageCasesMale = [590, 583, 826, 1748, 1800, 1844, 1178, 1042, 762, 619, 415, 389, 236, 170, 66, 56, 38];
            const ageCasesFemale = [472, 477, 512, 907, 950, 955, 810, 744, 534, 476, 279, 266, 159, 91, 35, 16, 17];

            const ctx3 = document.getElementById('ageCasesChart').getContext('2d');
            new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: ageGroups,
                    datasets: [{
                        label: 'পুরুষ',
                        data: ageCasesMale,
                        backgroundColor: 'rgba(44,62,80,0.7)',
                        borderColor: '#2c3e50',
                        borderWidth: 1
                    }, {
                        label: 'নারী',
                        data: ageCasesFemale,
                        backgroundColor: 'rgba(231,76,60,0.7)',
                        borderColor: '#e74c3c',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                font: { size: 11 },
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    return ctx.dataset.label + ': ' + ctx.parsed.y.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: { font: { size: 9 } }
                        },
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0,0,0,0.05)' },
                            ticks: { font: { size: 10 } }
                        }
                    }
                }
            });

            // ---- 4. Age Deaths ----
            const ageDeaths = [12, 1, 2, 1, 3, 10, 6, 4, 0, 5, 2, 0, 3, 0, 2, 0, 0];
            const ctx4 = document.getElementById('ageDeathsChart').getContext('2d');
            new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: ageGroups,
                    datasets: [{
                        label: 'মৃত্যু',
                        data: ageDeaths,
                        backgroundColor: 'rgba(231,76,60,0.8)',
                        borderColor: '#e74c3c',
                        borderWidth: 1,
                        borderRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    return 'মৃত্যু: ' + ctx.parsed.y;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: { font: { size: 9 } }
                        },
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0,0,0,0.05)' },
                            ticks: { font: { size: 10 }, stepSize: 2 }
                        }
                    }
                }
            });

            // ---- 5. Monthly Deaths ----
            const months = ['জানু', 'ফেব', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট'];
            const monthlyDeaths = [1, 0, 0, 0, 2, 3, 14, 41];
            const ctx5 = document.getElementById('monthlyDeathsChart').getContext('2d');
            new Chart(ctx5, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'নিশ্চিত মৃত্যু',
                        data: monthlyDeaths,
                        backgroundColor: [
                            'rgba(44,62,80,0.6)', 'rgba(149,165,166,0.4)',
                            'rgba(149,165,166,0.4)', 'rgba(149,165,166,0.4)',
                            'rgba(230,126,34,0.7)', 'rgba(231,76,60,0.7)',
                            'rgba(231,76,60,0.85)', 'rgba(192,57,43,0.95)'
                        ],
                        borderColor: [
                            '#2c3e50', '#95a5a6', '#95a5a6', '#95a5a6',
                            '#e67e22', '#e74c3c', '#e74c3c', '#c0392b'
                        ],
                        borderWidth: 1,
                        borderRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    return 'মৃত্যু: ' + ctx.parsed.y;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: { font: { size: 10 } }
                        },
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0,0,0,0.05)' },
                            ticks: { font: { size: 10 }, stepSize: 5 }
                        }
                    }
                }
            });

        });
    </script>

</body>
</html>
