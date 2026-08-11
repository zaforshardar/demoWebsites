<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dengue · Glass Dashboard</title>

    <!-- Google Font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet" />

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <style>
        /* ── Variables & Reset ── */
        :root {
            --glass-bg: rgba(255, 255, 255, 0.07);
            --glass-border: rgba(255, 255, 255, 0.12);
            --glass-shadow: 0 8px 32px rgba(0, 0, 0, 0.35);
            --text-light: #f0f4fa;
            --text-muted: #a0b3cc;
            --accent-gold: #f0b429;
            --accent-red: #ff6b6b;
            --accent-blue: #4d9fff;
            --accent-green: #51cf66;
            --accent-purple: #b197fc;
            --radius: 18px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: radial-gradient(circle at 10% 20%, #1a1a2e, #16213e, #0f0c29);
            min-height: 100vh;
            color: var(--text-light);
            padding: 1.5rem;
            background-attachment: fixed;
        }

        .dashboard-wrapper {
            max-width: 1480px;
            margin: 0 auto;
        }

        /* ── Glass Card ── */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius);
            box-shadow: var(--glass-shadow);
        }

        /* ── Header ── */
        .header-glass {
            padding: 1.8rem 2.2rem;
            margin-bottom: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        .header-glass .brand h1 {
            font-weight: 800;
            font-size: 1.8rem;
            letter-spacing: -0.5px;
            margin: 0;
        }
        .header-glass .brand h1 i {
            color: var(--accent-gold);
            margin-right: 0.5rem;
        }
        .header-glass .brand .sub {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 400;
        }
        .header-glass .date-badge {
            background: rgba(255, 255, 255, 0.06);
            padding: 0.5rem 1.5rem;
            border-radius: 40px;
            border: 1px solid var(--glass-border);
            font-size: 0.9rem;
            color: var(--text-muted);
        }
        .header-glass .date-badge i {
            color: var(--accent-gold);
            margin-right: 0.5rem;
        }

        @media (max-width: 768px) {
            .header-glass {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.8rem;
                padding: 1.2rem 1.5rem;
            }
            .header-glass .date-badge {
                align-self: stretch;
                text-align: center;
            }
        }

        /* ── Stat Grid ── */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            padding: 1.2rem 1.2rem 0.8rem 1.2rem;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            overflow: hidden;
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
        }
        .stat-card .stat-icon {
            font-size: 1.6rem;
            opacity: 0.2;
            position: absolute;
            right: 1rem;
            bottom: 0.8rem;
            color: #fff;
        }
        .stat-card .stat-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: var(--text-muted);
            font-weight: 600;
        }
        .stat-card .stat-number {
            font-size: 2rem;
            font-weight: 800;
            line-height: 1.2;
            color: #fff;
        }
        .stat-card .stat-sub {
            font-size: 0.7rem;
            color: var(--text-muted);
            margin-top: 0.1rem;
        }
        .stat-card.gold .stat-number { color: var(--accent-gold); }
        .stat-card.red .stat-number { color: var(--accent-red); }
        .stat-card.blue .stat-number { color: var(--accent-blue); }
        .stat-card.green .stat-number { color: var(--accent-green); }
        .stat-card.purple .stat-number { color: var(--accent-purple); }

        /* ── Section Cards ── */
        .section-card {
            padding: 1.5rem 1.8rem;
            margin-bottom: 2rem;
        }
        .section-card .section-title {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: #fff;
        }
        .section-card .section-title i {
            color: var(--accent-gold);
        }
        .section-card .section-title .badge-soft {
            font-size: 0.7rem;
            background: rgba(255, 255, 255, 0.08);
            padding: 0.2rem 0.8rem;
            border-radius: 30px;
            font-weight: 400;
            color: var(--text-muted);
            margin-left: auto;
        }

        /* ── Tables ── */
        .table {
            color: var(--text-light);
            border-color: rgba(255, 255, 255, 0.06);
            font-size: 0.88rem;
        }
        .table thead th {
            background: rgba(255, 255, 255, 0.04);
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.65rem;
            letter-spacing: 0.6px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0.7rem 0.8rem;
        }
        .table tbody td {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 0.6rem 0.8rem;
            vertical-align: middle;
        }
        .table tbody tr:hover {
            background: rgba(255, 255, 255, 0.03);
        }
        .table .total-row {
            background: rgba(255, 255, 255, 0.05) !important;
            font-weight: 700;
            border-top: 2px solid var(--accent-gold);
        }
        .table .total-row td {
            border-top: 2px solid var(--accent-gold);
        }

        /* DataTables overrides (glass) */
        .dataTables_wrapper .dataTables_filter input {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 0.3rem 1rem;
            color: #fff;
            outline: none;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--accent-gold);
            box-shadow: 0 0 0 3px rgba(240, 180, 41, 0.15);
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
        }
        .dataTables_wrapper .dataTables_filter input::placeholder {
            color: var(--text-muted);
        }
        .dataTables_wrapper .dataTables_length select {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 0.2rem 0.8rem;
            color: #fff;
        }
        .dataTables_wrapper .dataTables_length select option {
            background: #1a1a2e;
        }
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            color: var(--text-muted);
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: var(--text-muted) !important;
            background: transparent !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--accent-gold) !important;
            color: #0f0c29 !important;
            border-color: var(--accent-gold) !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: rgba(255, 255, 255, 0.05) !important;
            color: #fff !important;
        }
        .dataTables_wrapper .dataTables_filter label,
        .dataTables_wrapper .dataTables_length label {
            color: var(--text-muted);
        }

        /* ── Charts ── */
        .chart-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.8rem;
        }
        .chart-box {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 14px;
            padding: 1rem 1rem 0.5rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .chart-box .chart-title {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 0.5rem;
        }
        .chart-container {
            position: relative;
            height: 210px;
            width: 100%;
        }
        .chart-container-lg {
            height: 270px;
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
            font-size: 0.75rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            margin-top: 1rem;
        }
        .footer i {
            color: var(--accent-gold);
        }

        /* ── Responsive tweaks ── */
        @media (max-width: 576px) {
            body { padding: 0.8rem; }
            .section-card { padding: 1rem; }
            .stat-grid { grid-template-columns: repeat(2, 1fr); gap: 0.7rem; }
            .stat-card .stat-number { font-size: 1.4rem; }
            .stat-card { padding: 0.8rem; }
            .header-glass .brand h1 { font-size: 1.3rem; }
        }

        /* scrollable tables */
        .table-scroll {
            max-height: 400px;
            overflow-y: auto;
        }
        .table-scroll thead th {
            position: sticky;
            top: 0;
            z-index: 5;
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(4px);
        }

        /* small helper */
        .text-gold { color: var(--accent-gold); }
        .text-muted-light { color: var(--text-muted); }
    </style>
</head>
<body>

<div class="dashboard-wrapper">

    <!-- ===== HEADER (Glass) ===== -->
    <div class="header-glass glass">
        <div class="brand">
            <h1><i class="fas fa-shield-virus"></i>ডেঙ্গু ট্র্যাকার</h1>
            <div class="sub">স্বাস্থ্য অধিদপ্তর · বাংলাদেশ · ২০২৬</div>
        </div>
        <div class="date-badge">
            <i class="fas fa-calendar-day"></i> ১০ আগস্ট ২০২৬ · সর্বশেষ আপডেট
        </div>
    </div>

    <!-- ===== STATS ===== -->
    <div class="stat-grid">
        <div class="stat-card glass gold">
            <div class="stat-label"><i class="fas fa-plus-circle me-1"></i>২৪ ঘণ্টায়</div>
            <div class="stat-number">৭২৬</div>
            <div class="stat-sub">নতুন আক্রান্ত</div>
            <i class="fas fa-user-plus stat-icon"></i>
        </div>
        <div class="stat-card glass red">
            <div class="stat-label"><i class="fas fa-virus me-1"></i>মোট আক্রান্ত</div>
            <div class="stat-number">২০,০৭১</div>
            <div class="stat-sub">০১ জানু – আজ</div>
            <i class="fas fa-chart-line stat-icon"></i>
        </div>
        <div class="stat-card glass" style="border-left: 3px solid var(--accent-red);">
            <div class="stat-label"><i class="fas fa-skull me-1"></i>মোট মৃত্যু</div>
            <div class="stat-number" style="color:var(--accent-red);">৬১</div>
            <div class="stat-sub">সর্বমোট</div>
            <i class="fas fa-heartbeat stat-icon"></i>
        </div>
        <div class="stat-card glass green">
            <div class="stat-label"><i class="fas fa-check-circle me-1"></i>ছাড়পত্র</div>
            <div class="stat-number">১,৮৫৬</div>
            <div class="stat-sub">সুস্থ হয়েছেন</div>
            <i class="fas fa-home stat-icon"></i>
        </div>
        <div class="stat-card glass blue">
            <div class="stat-label"><i class="fas fa-hospital-user me-1"></i>বর্তমানে</div>
            <div class="stat-number">১,৪৪৩</div>
            <div class="stat-sub">ভর্তি</div>
            <i class="fas fa-bed stat-icon"></i>
        </div>
        <div class="stat-card glass purple">
            <div class="stat-label"><i class="fas fa-venus-mars me-1"></i>লিঙ্গ অনুপাত</div>
            <div class="stat-number" style="font-size:1.3rem;">৬১.৬% / ৩৮.৪%</div>
            <div class="stat-sub">পুরুষ / নারী</div>
            <i class="fas fa-people-arrows stat-icon"></i>
        </div>
    </div>

    <!-- ===== DIVISION TABLE ===== -->
    <div class="section-card glass">
        <div class="section-title">
            <i class="fas fa-map-marked-alt"></i> বিভাগভিত্তিক সংক্ষিপ্ত তথ্য
            <span class="badge-soft"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
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
        <div class="text-muted-light mt-2" style="font-size:0.7rem;">
            <i class="fas fa-info-circle"></i> তথ্য সুত্র: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম
        </div>
    </div>

    <!-- ===== CHARTS ===== -->
    <div class="section-card glass">
        <div class="section-title">
            <i class="fas fa-chart-pie"></i> পরিসংখ্যানিক বিশ্লেষণ
            <span class="badge-soft"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
        </div>

        <div class="chart-grid">
            <!-- Gender Cases -->
            <div class="chart-box">
                <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> আক্রান্তের লিঙ্গ</div>
                <div class="chart-container"><canvas id="genderCasesChart"></canvas></div>
                <div class="text-center text-muted-light mt-1" style="font-size:0.7rem;">পুরুষ ১২,৩৬৪ · নারী ৭,৭০২</div>
            </div>
            <!-- Gender Deaths -->
            <div class="chart-box">
                <div class="chart-title"><i class="fas fa-venus-mars me-1"></i> মৃত্যুর লিঙ্গ</div>
                <div class="chart-container"><canvas id="genderDeathsChart"></canvas></div>
                <div class="text-center text-muted-light mt-1" style="font-size:0.7rem;">পুরুষ ২২ · নারী ৩৯</div>
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
    <div class="section-card glass">
        <div class="section-title">
            <i class="fas fa-hospital"></i> হাসপাতালভিত্তিক ডেটা
            <span class="badge-soft"><i class="far fa-calendar-alt"></i> ০১ জানু – ১০ আগস্ট ২০২৬</span>
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
        <div class="text-muted-light mt-2" style="font-size:0.7rem;">
            <i class="fas fa-info-circle"></i> শুধুমাত্র অ-শূন্য ডেটা সহ হাসপাতালসমূহ দেখানো হয়েছে।
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <div class="footer">
        <i class="fas fa-database me-1"></i> তথ্য উৎস: স্বাস্থ্য অধিদপ্তর, এমআইএস, হেলথ ইমার্জেন্সি অপারেশন সেন্টার ও কন্ট্রোল রুম
        <br>
        <span style="font-size:0.65rem;opacity:0.6;">
            হটলাইন: ০১৭৫৯-১১৪৪৮৮ · টেলিফোন: ০২-২২২২৮৫৯৩৩, ০২-২২২২৯৭৩৫৩
        </span>
        <br>
        <span style="font-size:0.6rem;opacity:0.4;">সর্বশেষ আপডেট: ১০ আগস্ট ২০২৬</span>
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

        // ---- Chart Colors (glass theme) ----
        const glassColors = {
            blue: '#4d9fff',
            red: '#ff6b6b',
            gold: '#f0b429',
            green: '#51cf66',
            purple: '#b197fc',
            teal: '#22b8cf',
            pink: '#f06595'
        };

        // ---- 1. Gender Cases (Pie) ----
        const ctx1 = document.getElementById('genderCasesChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['পুরুষ', 'নারী'],
                datasets: [{
                    data: [12364, 7702],
                    backgroundColor: ['#4d9fff', '#ff6b6b'],
                    borderColor: 'rgba(15,12,41,0.6)',
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
                            color: '#f0f4fa',
                            font: { size: 11 },
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 10
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
                    backgroundColor: ['#4d9fff', '#ff6b6b'],
                    borderColor: 'rgba(15,12,41,0.6)',
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
                            color: '#f0f4fa',
                            font: { size: 11 },
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 10
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
                    backgroundColor: 'rgba(77, 159, 255, 0.7)',
                    borderColor: '#4d9fff',
                    borderWidth: 1
                }, {
                    label: 'নারী',
                    data: ageCasesFemale,
                    backgroundColor: 'rgba(255, 107, 107, 0.7)',
                    borderColor: '#ff6b6b',
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
                            color: '#f0f4fa',
                            font: { size: 10 },
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
                        grid: { display: false, color: 'rgba(255,255,255,0.03)' },
                        ticks: { color: '#a0b3cc', font: { size: 8 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#a0b3cc', font: { size: 9 } }
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
                    backgroundColor: 'rgba(255, 107, 107, 0.8)',
                    borderColor: '#ff6b6b',
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
                        grid: { display: false, color: 'rgba(255,255,255,0.03)' },
                        ticks: { color: '#a0b3cc', font: { size: 8 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#a0b3cc', font: { size: 9 }, stepSize: 2 }
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
                        'rgba(77,159,255,0.6)', 'rgba(160,179,204,0.3)',
                        'rgba(160,179,204,0.3)', 'rgba(160,179,204,0.3)',
                        'rgba(240,180,41,0.7)', 'rgba(255,107,107,0.7)',
                        'rgba(255,107,107,0.85)', 'rgba(192,57,43,0.95)'
                    ],
                    borderColor: [
                        '#4d9fff', '#a0b3cc', '#a0b3cc', '#a0b3cc',
                        '#f0b429', '#ff6b6b', '#ff6b6b', '#c0392b'
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
                        grid: { display: false, color: 'rgba(255,255,255,0.03)' },
                        ticks: { color: '#a0b3cc', font: { size: 10 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(255,255,255,0.05)' },
                        ticks: { color: '#a0b3cc', font: { size: 9 }, stepSize: 5 }
                    }
                }
            }
        });

    });
</script>

</body>
</html>
