<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGHS Dengue Status Dashboard - 10 Aug 2026</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-bg: #f4f6f9;
            --header-bg: #004d40;
        }
        body {
            background-color: var(--primary-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-custom {
            background-color: var(--header-bg);
        }
        .stat-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
        .icon-shape {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-title-custom {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <nav class="navbar navbar-dark navbar-custom mb-4 shadow-sm">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fs-4">
                <i class="fa-solid fa-hospital-user me-2"></i> DGHS Daily Dengue Status Dashboard
            </span>
            <span class="badge bg-light text-dark fs-6">Date: 10-Aug-2026</span>
        </div>
    </nav>

    <div class="container-fluid px-4">

        <!-- Subtitle Header -->
        <div class="row mb-3">
            <div class="col-12 text-center text-md-start">
                <h5 class="fw-bold text-secondary mb-0">Government of the People's Republic of Bangladesh</h5>
                <p class="text-muted small">Directorate General of Health Services (DGHS) | Health Emergency Operation Center & Control Room</p>
            </div>
        </div>

        <!-- Metric KPI Cards -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card stat-card p-3 border-start border-4 border-primary">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="card-title-custom fw-semibold">Last 24h Cases</span>
                            <h2 class="mb-0 fw-bold text-primary">726</h2>
                        </div>
                        <div class="icon-shape bg-primary bg-opacity-10 text-primary fs-3">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card stat-card p-3 border-start border-4 border-danger">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="card-title-custom fw-semibold">Last 24h Deaths</span>
                            <h2 class="mb-0 fw-bold text-danger">2</h2>
                        </div>
                        <div class="icon-shape bg-danger bg-opacity-10 text-danger fs-3">
                            <i class="fa-solid fa-skull-crossbones"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card stat-card p-3 border-start border-4 border-info">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="card-title-custom fw-semibold">Cumulative Cases (2026)</span>
                            <h2 class="mb-0 fw-bold text-info">20,071</h2>
                        </div>
                        <div class="icon-shape bg-info bg-opacity-10 text-info fs-3">
                            <i class="fa-solid fa-hospital-patients"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card stat-card p-3 border-start border-4 border-dark">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="card-title-custom fw-semibold">Cumulative Deaths (2026)</span>
                            <h2 class="mb-0 fw-bold text-dark">61</h2>
                        </div>
                        <div class="icon-shape bg-dark bg-opacity-10 text-dark fs-3">
                            <i class="fa-solid fa-ribbon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Analytics Section (Charts) -->
        <div class="row g-4 mb-4">
            <!-- Monthly Trend Chart -->
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 pt-3 fw-bold fs-6">
                        <i class="fa-solid fa-chart-line text-primary me-2"></i> Monthly Dengue Trend (2026)
                    </div>
                    <div class="card-body">
                        <canvas id="monthlyTrendChart" style="max-height: 320px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Gender Distribution Pie Chart -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 pt-3 fw-bold fs-6">
                        <i class="fa-solid fa-chart-pie text-success me-2"></i> Gender Distribution (Cumulative)
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <canvas id="genderPieChart" style="max-height: 280px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <!-- Division Breakdown Bar Chart -->
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 pt-3 fw-bold fs-6">
                        <i class="fa-solid fa-chart-bar text-info me-2"></i> Cumulative Cases by Division / CC
                    </div>
                    <div class="card-body">
                        <canvas id="divisionChart" style="max-height: 300px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Age Group Distribution Bar Chart -->
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 pt-3 fw-bold fs-6">
                        <i class="fa-solid fa-people-group text-warning me-2"></i> Age Group Distribution (24h)
                    </div>
                    <div class="card-body">
                        <canvas id="ageGroupChart" style="max-height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table Section -->
        <div class="card border-0 shadow-sm mb-5">
            <div class="card-header bg-white border-0 pt-3 fw-bold fs-5">
                <i class="fa-solid fa-table me-2 text-secondary"></i> Divisional Dengue Status Summary
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dengueDataTable" class="table table-striped table-hover align-middle w-100">
                        <thead class="table-dark">
                            <tr>
                                <th>Division Name</th>
                                <th>24h New Admitted</th>
                                <th>24h Death</th>
                                <th>Cumulative Admitted</th>
                                <th>Cumulative Death</th>
                                <th>Discharged</th>
                                <th>Currently Admitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dhaka Division</td>
                                <td>346</td>
                                <td>0</td>
                                <td>7,845</td>
                                <td>28</td>
                                <td>7,276</td>
                                <td>541</td>
                            </tr>
                            <tr>
                                <td>Mymensingh Division</td>
                                <td>37</td>
                                <td>0</td>
                                <td>885</td>
                                <td>6</td>
                                <td>761</td>
                                <td>118</td>
                            </tr>
                            <tr>
                                <td>Chattogram Division</td>
                                <td>81</td>
                                <td>0</td>
                                <td>3,397</td>
                                <td>5</td>
                                <td>3,285</td>
                                <td>107</td>
                            </tr>
                            <tr>
                                <td>Khulna Division</td>
                                <td>107</td>
                                <td>0</td>
                                <td>2,649</td>
                                <td>12</td>
                                <td>2,339</td>
                                <td>298</td>
                            </tr>
                            <tr>
                                <td>Rajshahi Division</td>
                                <td>65</td>
                                <td>0</td>
                                <td>835</td>
                                <td>1</td>
                                <td>761</td>
                                <td>73</td>
                            </tr>
                            <tr>
                                <td>Rangpur Division</td>
                                <td>10</td>
                                <td>0</td>
                                <td>441</td>
                                <td>1</td>
                                <td>417</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>Barishal Division</td>
                                <td>75</td>
                                <td>0</td>
                                <td>3,899</td>
                                <td>7</td>
                                <td>3,614</td>
                                <td>278</td>
                            </tr>
                            <tr>
                                <td>Sylhet Division</td>
                                <td>5</td>
                                <td>0</td>
                                <td>120</td>
                                <td>1</td>
                                <td>114</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                        <tfoot class="table-secondary fw-bold">
                            <tr>
                                <td>Total</td>
                                <td>726</td>
                                <td>0</td>
                                <td>20,071</td>
                                <td>61</td>
                                <td>18,567</td>
                                <td>1,443</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 text-center fs-7">
        <div class="container">
            <p class="mb-0">In-Charge: Dr. Md. Salamat Ali | Health Emergency Operation Center & Control Room, MIS, DGHS</p>
            <small class="text-white-50">Hotline: 01759-114488 | Phone: 02-222285933 | Email: controlroomdghs@yahoo.com</small>
        </div>
    </footer>

    <!-- JS Libraries: jQuery, Bootstrap, DataTables, Chart.js -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#dengueDataTable').DataTable({
                responsive: true,
                pageLength: 10,
                order: [[3, 'desc']] // Default sort by cumulative cases
            });

            // 1. Monthly Trend Chart (Bar + Line)
            const ctxMonthly = document.getElementById('monthlyTrendChart').getContext('2d');
            new Chart(ctxMonthly, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    datasets: [{
                        label: 'Cases',
                        data: [1081, 409, 353, 640, 714, 2907, 9206, 4761],
                        backgroundColor: 'rgba(13, 110, 253, 0.75)',
                        borderColor: 'rgba(13, 110, 253, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Deaths',
                        type: 'line',
                        data: [2, 2, 0, 1, 3, 6, 36, 7],
                        borderColor: '#dc3545',
                        backgroundColor: '#dc3545',
                        borderWidth: 2,
                        yAxisID: 'y1'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'Cases' } },
                        y1: { beginAtZero: true, position: 'right', grid: { drawOnChartArea: false }, title: { display: true, text: 'Deaths' } }
                    }
                }
            });

            // 2. Gender Distribution Pie Chart
            const ctxGender = document.getElementById('genderPieChart').getContext('2d');
            new Chart(ctxGender, {
                type: 'doughnut',
                data: {
                    labels: ['Male (61.6%)', 'Female (38.4%)'],
                    datasets: [{
                        data: [12364, 7702],
                        backgroundColor: ['#0d6efd', '#e83e8c']
                    }]
                },
                options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
            });

            // 3. Division Breakdown Bar Chart
            const ctxDivision = document.getElementById('divisionChart').getContext('2d');
            new Chart(ctxDivision, {
                type: 'bar',
                data: {
                    labels: ['Barishal', 'Chattogram', 'Dhaka (Out CC)', 'DNCC', 'DSCC', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Sylhet'],
                    datasets: [{
                        label: 'Admitted Cases',
                        data: [3899, 3397, 2658, 2250, 2775, 2649, 885, 835, 603, 120],
                        backgroundColor: '#17a2b8'
                    }]
                },
                options: { responsive: true, indexAxis: 'y' }
            });

            // 4. Age Group Distribution Chart (24h)
            const ctxAge = document.getElementById('ageGroupChart').getContext('2d');
            new Chart(ctxAge, {
                type: 'bar',
                data: {
                    labels: ['0-5', '6-10', '11-15', '16-20', '21-25', '26-30', '31-35', '36-40', '41-45', '46-50', '51+'],
                    datasets: [
                        { label: 'Male', data: [22, 20, 33, 60, 87, 66, 51, 40, 24, 23, 48], backgroundColor: '#0d6efd' },
                        { label: 'Female', data: [11, 15, 10, 29, 33, 30, 30, 28, 24, 16, 26], backgroundColor: '#e83e8c' }
                    ]
                },
                options: { responsive: true, scales: { x: { stacked: true }, y: { stacked: true } } }
            });
        });
    </script>
</body>
</html>
