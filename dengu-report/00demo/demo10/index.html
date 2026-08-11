<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGHS Dengue Analytics Portal - 10 Aug 2026</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-body: #0b0f19;
            --bg-card: #111827;
            --border-color: #1f2937;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: #e2e8f0;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: var(--bg-card);
            border-right: 1px solid var(--border-color);
            min-height: 100vh;
        }

        /* Card Customization */
        .analytics-card {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }
        .analytics-card:hover {
            border-color: #374151;
            transform: translateY(-2px);
        }

        /* Chart Wrapper Containers */
        .chart-container {
            position: relative;
            width: 100%;
            height: 280px;
        }

        /* KPI Glow Badges */
        .badge-glow-primary { background: rgba(59, 130, 246, 0.15); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); }
        .badge-glow-danger { background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); }
        .badge-glow-warning { background: rgba(245, 158, 11, 0.15); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.3); }
        .badge-glow-success { background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); }

        /* Table Styling Overrides */
        .table-custom {
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--border-color);
            --bs-table-color: #cbd5e1;
        }
        .table-custom thead th {
            background-color: var(--border-color);
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }

        /* DataTables Custom Polish */
        .dataTables_wrapper .dataTables_length, 
        .dataTables_wrapper .dataTables_filter, 
        .dataTables_wrapper .dataTables_info, 
        .dataTables_wrapper .dataTables_paginate {
            color: var(--text-muted) !important;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        .dataTables_wrapper .form-control,
        .dataTables_wrapper .form-select {
            background-color: var(--border-color);
            border-color: #374151;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        
        <!-- Sidebar Navigation -->
        <aside class="col-lg-2 sidebar d-none d-lg-block p-3">
            <div class="d-flex align-items-center gap-2 mb-4 px-2">
                <i class="fa-solid fa-shield-virus text-danger fs-3"></i>
                <span class="fw-bold fs-5 text-white">DGHS Monitor</span>
            </div>
            
            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="#overview" class="nav-link active d-flex align-items-center gap-2">
                        <i class="fa-solid fa-chart-pie"></i> Executive Overview
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#demographics" class="nav-link text-secondary d-flex align-items-center gap-2">
                        <i class="fa-solid fa-users"></i> Demographics
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#regional" class="nav-link text-secondary d-flex align-items-center gap-2">
                        <i class="fa-solid fa-map-location-dot"></i> Regional Breakdown
                    </a>
                </li>
            </ul>

            <div class="mt-auto pt-5 px-2">
                <div class="p-3 analytics-card rounded-3">
                    <small class="text-secondary d-block">Report Source</small>
                    <span class="fw-semibold text-light small">Control Room, MIS, DGHS</span>
                    <div class="mt-2 pt-2 border-top border-secondary border-opacity-25 text-muted" style="font-size:0.75rem;">
                        <i class="fa-solid fa-phone me-1"></i> 01759-114488
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="col-12 col-lg-10 p-4">
            
            <!-- Top App Bar -->
            <header class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-4 border-bottom border-secondary border-opacity-25">
                <div>
                    <h4 class="fw-bold text-white mb-1">Dengue Surveillance Analytics</h4>
                    <p class="text-secondary small mb-0">Health Emergency Operation Center & Control Room Bulletin</p>
                </div>
                <div class="d-flex align-items-center gap-2 mt-2 mt-sm-0">
                    <span class="badge badge-glow-primary px-3 py-2 rounded-pill">
                        <i class="fa-regular fa-calendar me-1"></i> 10-Aug-2026
                    </span>
                </div>
            </header>

            <!-- Key Metric Cards -->
            <section id="overview" class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="analytics-card p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="text-secondary small fw-bold">24H NEW ADMITTED</span>
                            <span class="badge badge-glow-primary"><i class="fa-solid fa-arrow-up me-1"></i> Live</span>
                        </div>
                        <h2 class="fw-bold text-white mb-1">726</h2>
                        <small class="text-muted">Patients admitted in last 24 hrs</small>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="analytics-card p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="text-secondary small fw-bold">24H DEATHS</span>
                            <span class="badge badge-glow-danger">Critical</span>
                        </div>
                        <h2 class="fw-bold text-danger mb-1">2</h2>
                        <small class="text-muted">Reported fatalities in last 24 hrs</small>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="analytics-card p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="text-secondary small fw-bold">CUMULATIVE ADMITTED</span>
                            <span class="badge badge-glow-warning">Year 2026</span>
                        </div>
                        <h2 class="fw-bold text-warning mb-1">20,071</h2>
                        <small class="text-muted">Total cases since Jan 01, 2026</small>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="analytics-card p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="text-secondary small fw-bold">TOTAL DISCHARGED</span>
                            <span class="badge badge-glow-success">92.5% Rate</span>
                        </div>
                        <h2 class="fw-bold text-success mb-1">18,567</h2>
                        <small class="text-muted">Successfully recovered patients</small>
                    </div>
                </div>
            </section>

            <!-- Analytics Charts - Row 1 -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-xl-8">
                    <div class="analytics-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="fw-bold text-white mb-0">Monthly Case & Death Progression (2026)</h6>
                            <small class="text-secondary">Jan - Aug Trend</small>
                        </div>
                        <div class="chart-container">
                            <canvas id="trendChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="analytics-card p-3 h-100">
                        <div class="mb-3">
                            <h6 class="fw-bold text-white mb-0">Demographic Distribution</h6>
                            <small class="text-secondary">Cumulative Cases by Gender</small>
                        </div>
                        <div class="chart-container">
                            <canvas id="genderChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analytics Charts - Row 2 -->
            <div id="demographics" class="row g-4 mb-4">
                <div class="col-12 col-xl-6">
                    <div class="analytics-card p-3">
                        <h6 class="fw-bold text-white mb-1">Age Group Distribution (Last 24 Hours)</h6>
                        <p class="text-secondary small mb-3">Male vs Female Breakdown</p>
                        <div class="chart-container">
                            <canvas id="ageChart"></canvas>
                        </div>
                    </div>
                </div>

                <div id="regional" class="col-12 col-xl-6">
                    <div class="analytics-card p-3">
                        <h6 class="fw-bold text-white mb-1">Regional Distribution (Cumulative)</h6>
                        <p class="text-secondary small mb-3">Cases by Division and City Corporation</p>
                        <div class="chart-container">
                            <canvas id="divisionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Division Data Table -->
            <div class="analytics-card p-3 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-white mb-0">Division-Wise Detailed Summary</h6>
                </div>
                <div class="table-responsive">
                    <table id="dengueTable" class="table table-custom align-middle w-100">
                        <thead>
                            <tr>
                                <th>Division</th>
                                <th>24h Admitted</th>
                                <th>24h Death</th>
                                <th>Cumulative Admitted</th>
                                <th>Cumulative Death</th>
                                <th>Discharged</th>
                                <th>Currently Admitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold text-white">Dhaka Division</td>
                                <td>346</td>
                                <td>0</td>
                                <td>7,845</td>
                                <td>28</td>
                                <td>7,276</td>
                                <td>541</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Mymensingh Division</td>
                                <td>37</td>
                                <td>0</td>
                                <td>885</td>
                                <td>6</td>
                                <td>761</td>
                                <td>118</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Chattogram Division</td>
                                <td>81</td>
                                <td>0</td>
                                <td>3,397</td>
                                <td>5</td>
                                <td>3,285</td>
                                <td>107</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Khulna Division</td>
                                <td>107</td>
                                <td>0</td>
                                <td>2,649</td>
                                <td>12</td>
                                <td>2,339</td>
                                <td>298</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Rajshahi Division</td>
                                <td>65</td>
                                <td>0</td>
                                <td>835</td>
                                <td>1</td>
                                <td>761</td>
                                <td>73</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Rangpur Division</td>
                                <td>10</td>
                                <td>0</td>
                                <td>441</td>
                                <td>1</td>
                                <td>417</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Barishal Division</td>
                                <td>75</td>
                                <td>0</td>
                                <td>3,899</td>
                                <td>7</td>
                                <td>3,614</td>
                                <td>278</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-white">Sylhet Division</td>
                                <td>5</td>
                                <td>0</td>
                                <td>120</td>
                                <td>1</td>
                                <td>114</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</div>

<!-- Essential JS Libraries -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // DataTables Initialization
        $('#dengueTable').DataTable({
            responsive: true,
            pageLength: 8,
            lengthChange: false,
            order: [[3, 'desc']]
        });

        // Chart.js Dark Mode Global Configuration Defaults
        Chart.defaults.color = '#94a3b8';
        Chart.defaults.borderColor = '#1f2937';
        Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";

        // 1. Monthly Trend Chart
        new Chart(document.getElementById('trendChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Admitted Cases',
                    data: [1081, 409, 353, 640, 714, 2907, 9206, 4761],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.35
                }, {
                    label: 'Deaths',
                    data: [2, 2, 0, 1, 3, 6, 36, 7],
                    borderColor: '#ef4444',
                    backgroundColor: '#ef4444',
                    tension: 0.35
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // 2. Gender Doughnut Chart
        new Chart(document.getElementById('genderChart'), {
            type: 'doughnut',
            data: {
                labels: ['Male (61.6%)', 'Female (38.4%)'],
                datasets: [{
                    data: [12364, 7702],
                    backgroundColor: ['#3b82f6', '#ec4899'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });

        // 3. Age Group Chart
        new Chart(document.getElementById('ageChart'), {
            type: 'bar',
            data: {
                labels: ['0-5', '6-10', '11-15', '16-20', '21-25', '26-30', '31-35', '36-40', '41-45', '46-50', '51+'],
                datasets: [
                    { label: 'Male', data: [22, 20, 33, 60, 87, 66, 51, 40, 24, 23, 48], backgroundColor: '#3b82f6' },
                    { label: 'Female', data: [11, 15, 10, 29, 33, 30, 30, 28, 24, 16, 26], backgroundColor: '#ec4899' }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { stacked: true },
                    y: { stacked: true }
                }
            }
        });

        // 4. Regional Breakdown Chart
        new Chart(document.getElementById('divisionChart'), {
            type: 'bar',
            data: {
                labels: ['Barishal', 'Chattogram', 'Dhaka (Out CC)', 'DNCC', 'DSCC', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Sylhet'],
                datasets: [{
                    label: 'Cases',
                    data: [3899, 3397, 2658, 2250, 2775, 2649, 885, 835, 603, 120],
                    backgroundColor: '#10b981',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>

</body>
</html>
