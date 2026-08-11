<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dengue Surveillance · Bangladesh 2026</title>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <style>
        /* ── Dark Theme Variables ── */
        :root {
            --bg-body: #0d1117;
            --bg-card: #161b22;
            --bg-card-hover: #1c2333;
            --border-color: #30363d;
            --text-primary: #f0f6fc;
            --text-secondary: #8b949e;
            --accent-blue: #58a6ff;
            --accent-red: #f85149;
            --accent-green: #3fb950;
            --accent-orange: #d29922;
            --accent-purple: #bc8cff;
            --shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
            --radius: 16px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-primary);
            font-family: 'Segoe UI', 'Inter', system-ui, -apple-system, sans-serif;
            padding: 1.5rem;
            min-height: 100vh;
        }

        .dashboard-wrapper {
            max-width: 1480px;
            margin: 0 auto;
        }

        /* ── Header / Nav ── */
        .navbar-custom {
            background: var(--bg-card);
            border-radius: var(--radius);
            padding: 0.8rem 1.8rem;
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-custom .brand {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }
        .navbar-custom .brand i {
            font-size: 2.2rem;
            color: var(--accent-red);
        }
        .navbar-custom .brand .title {
            font-weight: 700;
            font-size: 1.4rem;
            letter-spacing: -0.3px;
        }
        .navbar-custom .brand .sub {
            font-size: 0.8rem;
            color: var(--text-secondary);
            font-weight: 400;
        }
        .navbar-custom .date-badge {
            background: rgba(255, 255, 255, 0.06);
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            border: 1px solid var(--border-color);
            font-size: 0.9rem;
            color: var(--text-secondary);
        }
        .navbar-custom .date-badge i {
            margin-right: 0.4rem;
            color: var(--accent-blue);
        }

        @media (max-width: 768px) {
            .navbar-custom {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.8rem;
                padding: 1rem 1.2rem;
            }
            .navbar-custom .date-badge {
                align-self: stretch;
                text-align: center;
            }
        }

        /* ── Stat Cards ── */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 1.2rem 1.2rem 1rem 1.2rem;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        .stat-card:hover {
            background: var(--bg-card-hover);
            transform: translateY(-3px);
            border-color: var(--accent-blue);
        }
        .stat-card .stat-icon {
            font-size: 1.8rem;
            opacity: 0.15;
            position: absolute;
            right: 0.8rem;
            bottom: 0.6rem;
            color: var(--text-primary);
        }
        .stat-card .stat-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 0.2rem;
        }
        .stat-card .stat-number {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
            color: var(--text-primary);
        }
        .stat-card .stat-sub {
            font-size: 0.75rem;
            color: var(--text-secondary);
            margin-top: 0.2rem;
        }
        .stat-card.accent-blue .stat-number { color: var(--accent-blue); }
        .stat-card.accent-red .stat-number { color: var(--accent-red); }
        .stat-card.accent-green .stat-number { color: var(--accent-green); }
        .stat-card.accent-orange .stat-number { color: var(--accent-orange); }
        .stat-card.accent-purple .stat-number { color: var(--accent-purple); }

        /* ── Section Cards ── */
        .section-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
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
            color: var(--text-primary);
        }
        .section-card .section-title i {
            color: var(--accent-blue);
        }

        /* ── Tables ── */
        .table {
            color: var(--text-primary);
            border-color: var(--border-color);
            font-size: 0.9rem;
        }
        .table thead th {
            background: #0d1117;
            color: var(--text-secondary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--border-color);
            padding: 0.7rem 0.8rem;
        }
        .table tbody td {
            border-bottom: 1px solid var(--border-color);
            padding: 0.6rem 0.8rem;
            vertical-align: middle;
        }
        .table tbody tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }
        .table .total-row {
            background: #0d1117 !important;
            font-weight: 700;
            border-top: 2px solid var(--accent-blue);
        }
        .table .total-row td {
            border-top: 2px solid var(--accent-blue);
        }

        /* DataTables overrides */
        .dataTables_wrapper .dataTables_filter input {
            background: var(--bg-body);
            border: 1px solid var(--border-color);
            border-radius: 30px;
            padding: 0.3rem 1rem;
            color: var(--text-primary);
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 3px rgba(88, 166, 255, 0.2);
            background: var(--bg-body);
            color: var(--text-primary);
        }
        .dataTables_wrapper .dataTables_length select {
            background: var(--bg-body);
            border: 1px solid var(--border-color);
            border-radius: 30px;
            padding: 0.2rem 0.8rem;
            color: var(--text-primary);
        }
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            color: var(--text-secondary);
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: var(--text-secondary) !important;
            background: transparent !important;
            border-color: var(--border-color) !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--accent-blue) !important;
            color: #fff !important;
            border-color: var(--accent-blue) !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: rgba(255, 255, 255, 0.05) !important;
            color: var(--text-primary) !important;
        }
        .dataTables_wrapper .dataTables_filter label {
            color: var(--text-secondary);
        }
        .dataTables_wrapper .dataTables_length label {
            color: var(--text-secondary);
        }

        /* ── Charts ── */
        .chart-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.8rem;
        }
        .chart-box {
            background: var(--bg-body);
            border-radius: 12px;
            padding: 1rem 1rem 0.5rem 1rem;
            border: 1px solid var(--border-color);
        }
        .chart-box .chart-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-secondary);
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
            color: var(--text-secondary);
            font-size: 0.8rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
            margin-top: 1rem;
        }
        .footer i {
            color: var(--accent-red);
        }

        /* ── Misc ── */
        .badge-dhaka {
            background: var(--accent-blue);
            color: #0d1117;
        }
        .badge-other {
            background: var(--border-color);
            color: var(--text-secondary);
        }
        .text-muted-sm {
            color: var(--text-secondary);
            font-size: 0.75rem;
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
            background: #0d1117;
        }

        @media (max-width: 576px) {
            body { padding: 0.8rem; }
            .section-card { padding: 1rem; }
            .stat-grid { grid-template-columns: repeat(2, 1fr); }
            .stat-card .stat-number { font-size: 1.5rem; }
            .navbar-custom .brand .title { font-size: 1.1rem; }
        }
    </style>
</head>
<body>

<div class="dashboard-wrapper">

    <!-- ===== NAVBAR ===== -->
    <div class="navbar-custom">
        <div class="brand">
            <i class="fas fa-shield-virus"></i>
            <div>
                <div class="title">ডেঙ্গু সার্ভেইল্যান্স</div>
                <div class="sub">স্বাস্থ্য অধিদপ্তর · বাংলাদেশ</div>
            </div>
        </div>
        <div class="date-badge">
            <i class="fas fa-calendar-day"></i> ১০ আগস্ট ২০২৬ · আপডেট
        </div>
    </div>

    <!-- ===== STATS ROW ===== -->
    <div class="stat-grid">
        <div class="stat-card accent-blue">
            <div class="stat-label"><i class="fas fa-plus-circle me-1"></i>২৪ ঘণ্টায় নতুন</div>
            <div class="stat-number">৭২৬</div>
            <div class="stat-sub">আক্রান্ত</div>
            <i class="fas fa-user-plus stat-icon"></i>
        </div>
        <div class="stat-card accent-red">
            <div class="stat-label"><i class="fas fa-virus me-1"></i>মোট আক্রান্ত</div>
            <div class="stat-number">২০,০৭১</div>
            <div class="stat-sub">০১ জানু – আজ</div>
            <i class="fas fa-chart-line stat-icon"></i>
        </div>
        <div class="stat-card" style="border-left: 3px solid var(--accent-red);">
            <div class="stat-label"><i class="fas fa-skull me-1"></i>মোট মৃত্যু</div>
            <div class="stat-number" style="color:var(--accent-red);">৬১</div>
            <div class="stat-sub">সর্বমোট</div>
            <i class="fas fa-heartbeat stat-icon"></i>
        </div>
        <div class="stat-card accent-green">
            <div class="stat-label"><i class="fas fa-check-circle me-1"></i>ছাড়পত্র</div>
            <div class="stat-number">১,৮৫৬</div>
            <div class="stat-sub">সুস্থ হয়েছেন</div>
            <i class="fas fa-home stat-icon"></i>
        </div>
        <div class="stat-card accent-orange">
            <div class="stat-label"><i class="fas fa-hospital-user me-1"></i>বর্তমানে ভর্তি</div>
            <div class="stat-number">১,৪৪৩</div>
            <div class="stat-sub">হাসপাতালে</div>
            <i class="fas fa-bed stat-icon"></i>
        </div>
        <div class="stat-card accent-purple">
            <div class="stat-label"><i class="fas fa-venus-mars me-1"></i>লিঙ্গ অনুপাত</div>
            <div class="stat-number" style="font-size:1.4rem;">৬১.৬% / ৩৮.৪%</div>
            <div class="stat-sub">পুরুষ / নারী</div>
            <i class="fas fa-people-arrows stat-icon"></i>
        </div>
    </div>

    <!-- ===== DIVISION TABLE ===== -->
    <div class="section-card">
        <div class="section-title">
            <i class="fas fa-map-marked-alt"></i> বিভাগভিত্তিক সংক্ষিপ্ত তথ্য
            <span class="ms-auto text-muted-sm"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
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
        <div class="text-muted-sm mt-2">
            <i class="fas fa-info-circle"></i> তথ্য সুত্র: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম
        </div>
    </div>

    <!-- ===== CHARTS SECTION ===== -->
    <div class="section-card">
        <div class="section-title">
            <i class="fas fa-chart-pie"></i> পরিসংখ্যানিক বিশ্লেষণ
            <span class="ms-auto text-muted-sm"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
        </div>

        <div class="chart-grid">
            <!-- Gender Cases -->
            <div class="chart-box">
                <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> আক্রান্তের লিঙ্গ</div>
                <div class="chart-container"><canvas id="genderCasesChart"></canvas></div>
                <div class="text-center text-muted-sm mt-1">পুরুষ ১২,৩৬৪ · নারী ৭,৭০২</div>
            </div>
            <!-- Gender Deaths -->
            <div class="chart-box">
                <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> মৃত্যুর লিঙ্গ</div>
                <div class="chart-container"><canvas id="genderDeathsChart"></canvas></div>
                <div class="text-center text-muted-sm mt-1">পুরুষ ২২ · নারী ৩৯</div>
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
            <span class="ms-auto text-muted-sm"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
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
                    <tr><td>২৬</td><td>বাংলামেশ রেশালাইজ্ড হাসপাতাল</td><td>০</td><td>৩০</td><td>০</td><td>২৫</td><td>৫</td></tr>
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
        <div class="text-muted-sm mt-2">
            <i class="fas fa-info-circle"></i> শুধুমাত্র অ-শূন্য ডেটা সহ হাসপাতালসমূহ দেখানো হয়েছে।
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <div class="footer">
        <i class="fas fa-database me-1"></i> তথ্য উৎস: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম, মহাখালী, ঢাকা
        <br>
        <span style="font-size:0.7rem;opacity:0.7;">
            হটলাইন: ০১৭৫৯-১১৪৪৮৮ · টেলিফোন: ০২-২২২২৮৫৯৩৩, ০২-২২২২৯৭৩৫৩ · ই-মেইল: controlroomdghs@yahoo.com
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
            lengthMenu: [[5, 8, 15, 25, -1], [5, 8, 15, 25, "সব"]],
            order: [[3, 'desc']],
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

        // ---- Chart Colors ----
        const darkColors = {
            blue: '#58a6ff',
            red: '#f85149',
            green: '#3fb950',
            orange: '#d29922',
            purple: '#bc8cff',
            teal: '#56d4dd',
            pink: '#f778ba',
            grey: '#8b949e'
        };

        // ---- 1. Gender Cases (Pie) ----
        const ctx1 = document.getElementById('genderCasesChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['পুরুষ', 'নারী'],
                datasets: [{
                    data: [12364, 7702],
                    backgroundColor: ['#58a6ff', '#f85149'],
                    borderColor: '#161b22',
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#f0f6fc',
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
                    backgroundColor: ['#58a6ff', '#f85149'],
                    borderColor: '#161b22',
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#f0f6fc',
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
                    backgroundColor: 'rgba(88, 166, 255, 0.7)',
                    borderColor: '#58a6ff',
                    borderWidth: 1
                }, {
                    label: 'নারী',
                    data: ageCasesFemale,
                    backgroundColor: 'rgba(248, 81, 73, 0.7)',
                    borderColor: '#f85149',
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
                            color: '#f0f6fc',
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
                        grid: { display: false, color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 9 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 10 } }
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
                    backgroundColor: 'rgba(248, 81, 73, 0.8)',
                    borderColor: '#f85149',
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
                        grid: { display: false, color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 9 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 10 }, stepSize: 2 }
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
                        'rgba(88,166,255,0.6)', 'rgba(139,148,158,0.4)',
                        'rgba(139,148,158,0.4)', 'rgba(139,148,158,0.4)',
                        'rgba(210,153,34,0.7)', 'rgba(248,81,73,0.7)',
                        'rgba(248,81,73,0.85)', 'rgba(192,57,43,0.95)'
                    ],
                    borderColor: [
                        '#58a6ff', '#8b949e', '#8b949e', '#8b949e',
                        '#d29922', '#f85149', '#f85149', '#c0392b'
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
                        grid: { display: false, color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 10 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#8b949e', font: { size: 10 }, stepSize: 5 }
                    }
                }
            }
        });

    });
</script>

</body>
</html>
