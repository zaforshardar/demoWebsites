<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh EWARS · Demo Prototype</title>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js">
    </script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />

    <style>
        /* ----- global reset & typography ----- */
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
            background: #f4f7fb;
            padding-top: 70px;
        }

        /* ----- DEMO RIBBON (top-right indicator) ----- */
        .demo-ribbon {
            position: fixed;
            top: 72px;
            right: 20px;
            z-index: 9999;
            background: linear-gradient(145deg, #ff8a00, #e65100);
            color: #fff;
            padding: 6px 20px 6px 18px;
            border-radius: 40px;
            font-weight: 800;
            font-size: 0.8rem;
            letter-spacing: 1.2px;
            box-shadow: 0 4px 20px rgba(230, 81, 0, 0.5);
            border: 2px solid #ffb74d;
            text-transform: uppercase;
            pointer-events: none;
            animation: pulse-ribbon 2.5s infinite ease-in-out;
            backdrop-filter: blur(2px);
        }
        .demo-ribbon i {
            margin-right: 6px;
            font-size: 0.9rem;
        }
        @keyframes pulse-ribbon {
            0%,
            100% {
                transform: scale(1) rotate(0deg);
                box-shadow: 0 4px 20px rgba(230, 81, 0, 0.4);
            }
            50% {
                transform: scale(1.04) rotate(1deg);
                box-shadow: 0 6px 30px rgba(230, 81, 0, 0.7);
                background: linear-gradient(145deg, #ff5722, #bf360c);
            }
        }
        @media (max-width: 576px) {
            .demo-ribbon {
                top: 66px;
                right: 10px;
                font-size: 0.65rem;
                padding: 4px 14px;
            }
        }

        /* ----- navbar ----- */
        .navbar-brand {
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .navbar-brand i {
            color: #e74c3c;
        }
        .badge-outbreak {
            background: #e74c3c;
            color: #fff;
            animation: pulse-badge 1.5s infinite;
        }
        @keyframes pulse-badge {
            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.7;
                transform: scale(0.95);
            }
        }

        /* ----- cards & containers ----- */
        .stat-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
            transition: transform 0.15s;
            background: #fff;
            height: 100%;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
        .stat-card .card-title {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #6c757d;
        }
        .stat-card .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.2;
        }
        .stat-card .stat-icon {
            font-size: 2rem;
            opacity: 0.3;
        }

        /* ----- map & legend ----- */
        #ewarsMap {
            height: 520px;
            width: 100%;
            border-radius: 1rem;
            background: #e9ecf0;
        }

        /* custom WBGT legend on map */
        .wbgt-legend {
            background: rgba(255, 255, 255, 0.95);
            padding: 10px 16px;
            border-radius: 30px;
            font-size: 0.78rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            align-items: center;
            pointer-events: none;
            border: 1px solid rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(4px);
        }
        .wbgt-legend .legend-title {
            font-weight: 700;
            font-size: 0.8rem;
            color: #2c3e50;
            margin-right: 4px;
            letter-spacing: 0.3px;
        }
        .wbgt-legend .dot {
            display: inline-block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            margin-right: 4px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        .wbgt-legend .legend-item {
            display: inline-flex;
            align-items: center;
            gap: 3px;
        }

        /* ----- chart containers ----- */
        .chart-wrapper {
            background: #fff;
            border-radius: 1rem;
            padding: 1rem 1rem 0.5rem 1rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
            height: 100%;
        }

        /* ----- table tweaks ----- */
        .table-responsive {
            border-radius: 1rem;
            overflow: hidden;
        }
        #alertTable th {
            background: #f8f9fc;
        }
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 30px;
            border: 1px solid #dee2e6;
            padding: 0.3rem 1rem;
        }

        /* ----- risk badges ----- */
        .risk-danger {
            background: #dc3545;
            color: #fff;
        }
        .risk-severe {
            background: #fd7e14;
            color: #fff;
        }
        .risk-warning {
            background: #ffc107;
            color: #212529;
        }
        .risk-caution {
            background: #0dcaf0;
            color: #212529;
        }
        .risk-safe {
            background: #0d6efd;
            color: #fff;
        }

        /* ----- responsive ----- */
        @media (max-width: 768px) {
            #ewarsMap {
                height: 340px;
            }
            .stat-card .stat-number {
                font-size: 1.6rem;
            }
            .wbgt-legend {
                gap: 8px;
                padding: 6px 12px;
                font-size: 0.7rem;
                border-radius: 20px;
            }
            .wbgt-legend .dot {
                width: 12px;
                height: 12px;
            }
        }
        /* custom scroll */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c9d4;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- ============================================================ -->
    <!-- DEMO INDICATOR (fixed ribbon) -->
    <!-- ============================================================ -->
    <div class="demo-ribbon">
        <i class="bi bi-exclamation-triangle-fill"></i> Demo Prototype
    </div>

    <!-- ============================================================ -->
    <!-- NAVBAR -->
    <!-- ============================================================ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shield-fill-check me-2"></i>Bangladesh EWARS
                <span class="badge badge-outbreak ms-2">LIVE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#mapSection"><i class="bi bi-map me-1"></i>Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="#chartsSection"><i class="bi bi-graph-up me-1"></i>Charts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tableSection"><i class="bi bi-table me-1"></i>Data</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal"><i class="bi bi-info-circle me-1"></i>About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================================ -->
    <!-- MAIN CONTAINER -->
    <!-- ============================================================ -->
    <main class="container-fluid px-3 px-lg-4">

        <!-- ----- STAT ROW (KPI) ----- -->
        <section class="row g-3 mb-4" id="kpiRow">
            <div class="col-6 col-md-3">
                <div class="card stat-card p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="card-title"><i class="bi bi-person-plus me-1"></i>New Cases (24h)</div>
                            <div class="stat-number text-danger" id="kpiNewCases">726</div>
                        </div>
                        <div class="stat-icon text-danger"><i class="bi bi-graph-up-arrow"></i></div>
                    </div>
                    <small class="text-muted">⬆ 12% vs yesterday</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card stat-card p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="card-title"><i class="bi bi-people me-1"></i>Total Cases (2026)</div>
                            <div class="stat-number text-warning" id="kpiTotalCases">20,071</div>
                        </div>
                        <div class="stat-icon text-warning"><i class="bi bi-clipboard-data"></i></div>
                    </div>
                    <small class="text-muted">as of 10 Aug 2026</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card stat-card p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="card-title"><i class="bi bi-heart-pulse me-1"></i>Deaths</div>
                            <div class="stat-number text-danger" id="kpiDeaths">61</div>
                        </div>
                        <div class="stat-icon text-danger"><i class="bi bi-exclamation-triangle"></i></div>
                    </div>
                    <small class="text-muted">CFR 0.30%</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card stat-card p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="card-title"><i class="bi bi-thermometer-half me-1"></i>WBGT (Dhaka)</div>
                            <div class="stat-number text-warning" id="kpiWbgt">30.2°C</div>
                        </div>
                        <div class="stat-icon text-warning"><i class="bi bi-sun"></i></div>
                    </div>
                    <small class="text-muted">Severe Warning · <span class="badge bg-warning text-dark">Orange</span></small>
                </div>
            </div>
        </section>

        <!-- ----- MAP + ALERT SIDEBAR ----- -->
        <section class="row g-3 mb-4" id="mapSection">
            <div class="col-lg-8">
                <div class="card stat-card p-2">
                    <div class="card-body p-1 position-relative">
                        <div id="ewarsMap"></div>

                        <!-- UPDATED MAP LEGEND (WBGT Risk Index) -->
                        <div class="position-absolute bottom-0 start-0 m-3 wbgt-legend">
                            <span class="legend-title"><i class="bi bi-thermometer-half me-1"></i>WBGT Risk:</span>
                            <span class="legend-item"><span class="dot" style="background:#0d6efd;"></span>&lt;21°C</span>
                            <span class="legend-item"><span class="dot" style="background:#0dcaf0;"></span>21–25</span>
                            <span class="legend-item"><span class="dot" style="background:#ffc107;"></span>25–28</span>
                            <span class="legend-item"><span class="dot" style="background:#fd7e14;"></span>28–31</span>
                            <span class="legend-item"><span class="dot" style="background:#dc3545;"></span>≥31°C</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card stat-card p-3 h-100">
                    <h6 class="fw-bold"><i class="bi bi-megaphone me-2"></i>Active Alerts</h6>
                    <div id="alertFeed" style="max-height:440px; overflow-y:auto;">
                        <div class="alert alert-danger py-2 mb-2 d-flex align-items-center">
                            <i class="bi bi-exclamation-octagon me-2 fs-5"></i>
                            <div><strong>Rajshahi</strong> · WBGT 32.0°C <span class="badge bg-danger">DANGER</span><br /><small>Exercise prohibited · cooling centres activated</small></div>
                        </div>
                        <div class="alert alert-warning py-2 mb-2 d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle me-2 fs-5"></i>
                            <div><strong>Mymensingh</strong> · WBGT 31.4°C <span class="badge bg-danger">DANGER</small></span><br /><small>Stop outdoor work · public warning issued</small></div>
                        </div>
                        <div class="alert alert-warning py-2 mb-2 d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle me-2 fs-5"></i>
                            <div><strong>Dhaka</strong> · 726 new cases (24h) · <span class="badge bg-warning text-dark">SURGE</span><br /><small>7‑day avg +18% · intensify vector control</small></div>
                        </div>
                        <div class="alert alert-info py-2 mb-2 d-flex align-items-center">
                            <i class="bi bi-cloud-rain me-2 fs-5"></i>
                            <div><strong>Gopalganj</strong> · 61 mm rain · <span class="badge bg-info text-dark">FLOOD RISK</span><br /><small>Cholera surveillance elevated</small></div>
                        </div>
                        <div class="alert alert-secondary py-2 mb-0 d-flex align-items-center">
                            <i class="bi bi-droplet me-2 fs-5"></i>
                            <div><strong>Koyra</strong> · 47 mm rain · humidity 99%<br /><small>High vector breeding potential</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----- CHARTS (two columns) ----- -->
        <section class="row g-3 mb-4" id="chartsSection">
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <h6 class="fw-bold"><i class="bi bi-bar-chart-fill me-2"></i>Weekly Cases by Division</h6>
                    <canvas id="divChart" height="180"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <h6 class="fw-bold"><i class="bi bi-thermometer-sun me-2"></i>WBGT Forecast (5‑day)</h6>
                    <canvas id="forecastChart" height="180"></canvas>
                </div>
            </div>
        </section>

        <!-- ----- DISEASE BREAKDOWN (Age / Sex) ----- -->
        <section class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <h6 class="fw-bold"><i class="bi bi-person-arms-up me-2"></i>Age distribution · Dengue 2026</h6>
                    <canvas id="ageChart" height="170"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <h6 class="fw-bold"><i class="bi bi-activity me-2"></i>Disease burden (5 diseases)</h6>
                    <canvas id="diseaseChart" height="170"></canvas>
                </div>
            </div>
        </section>

        <!-- ----- DATA TABLE (with search & pagination) ----- -->
        <section class="row g-3 mb-4" id="tableSection">
            <div class="col-12">
                <div class="card stat-card p-3">
                    <h6 class="fw-bold"><i class="bi bi-table me-2"></i>District Surveillance Data (Week 32)</h6>
                    <div class="table-responsive">
                        <table id="alertTable" class="table table-hover table-striped" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>District</th>
                                    <th>Division</th>
                                    <th>Dengue</th>
                                    <th>Malaria</th>
                                    <th>Cholera</th>
                                    <th>Heatstroke</th>
                                    <th>WBGT (°C)</th>
                                    <th>Risk</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <!-- injected by JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================ -->
        <!-- FOOTER -->
        <!-- ============================================================ -->
        <footer class="text-center text-muted small py-4 border-top">
            <i class="bi bi-shield-check me-1"></i> Bangladesh EWARS · IEDCR · Global Fund · BMD · Data as of 10 Aug 2026
        </footer>

    </main>

    <!-- ============================================================ -->
    <!-- MODALS -->
    <!-- ============================================================ -->

    <!-- About Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-info-circle me-2"></i>About EWARS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Bangladesh Early Warning Alert & Response System</strong></p>
                    <p>Developed by IEDCR with support from The Global Fund and IMACS (USA).</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Real‑time surveillance for malaria, dengue, cholera</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Automatic OCR digitisation of daily PDF reports</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>BMD weather &amp; WBGT integration</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Heatstroke &amp; 17 additional diseases (roadmap)</li>
                    </ul>
                    <hr />
                    <p class="mb-0 small text-muted">System reactivation requested · budgetary support needed</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- District Detail Modal (populated by JS) -->
    <div class="modal fade" id="districtModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="districtModalLabel"><i class="bi bi-geo-alt me-2"></i>District Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="districtModalBody">
                    <!-- dynamic content -->
                </div>
            </div>
        </div>
    </div>


    <!-- ============================================================ -->
    <!-- SCRIPTS -->
    <!-- ============================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
    </script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>

    <script>
        // ================================================================
        //  1.  SAMPLE DATA (64 districts, 5 diseases + WBGT)
        // ================================================================
        const districtData = [
            { district: "Dhaka", division: "Dhaka", dengue: 812, malaria: 12, cholera: 210, heatstroke: 8, wbgt: 30.2 },
            { district: "Gazipur", division: "Dhaka", dengue: 340, malaria: 5, cholera: 120, heatstroke: 4, wbgt: 27.5 },
            { district: "Narayanganj", division: "Dhaka", dengue: 410, malaria: 3, cholera: 150, heatstroke: 5, wbgt: 27.8 },
            { district: "Tangail", division: "Dhaka", dengue: 220, malaria: 2, cholera: 90, heatstroke: 3, wbgt: 29.5 },
            { district: "Kishoreganj", division: "Dhaka", dengue: 150, malaria: 1, cholera: 75, heatstroke: 2, wbgt: 26.5 },
            { district: "Manikganj", division: "Dhaka", dengue: 110, malaria: 0, cholera: 60, heatstroke: 1, wbgt: 26.0 },
            { district: "Munshiganj", division: "Dhaka", dengue: 130, malaria: 1, cholera: 70, heatstroke: 1, wbgt: 26.2 },
            { district: "Narsingdi", division: "Dhaka", dengue: 160, malaria: 2, cholera: 95, heatstroke: 2, wbgt: 27.0 },
            { district: "Faridpur", division: "Dhaka", dengue: 190, malaria: 0, cholera: 180, heatstroke: 1, wbgt: 29.0 },
            { district: "Gopalganj", division: "Dhaka", dengue: 80, malaria: 0, cholera: 310, heatstroke: 0, wbgt: 28.5 },
            { district: "Madaripur", division: "Dhaka", dengue: 60, malaria: 0, cholera: 110, heatstroke: 0, wbgt: 28.0 },
            { district: "Rajbari", division: "Dhaka", dengue: 50, malaria: 0, cholera: 80, heatstroke: 0, wbgt: 27.2 },
            { district: "Shariatpur", division: "Dhaka", dengue: 100, malaria: 0, cholera: 140, heatstroke: 0, wbgt: 27.5 },
            { district: "Mymensingh", division: "Mymensingh", dengue: 180, malaria: 4, cholera: 90, heatstroke: 2, wbgt: 31.4 },
            { district: "Jamalpur", division: "Mymensingh", dengue: 90, malaria: 2, cholera: 70, heatstroke: 1, wbgt: 27.0 },
            { district: "Netrokona", division: "Mymensingh", dengue: 70, malaria: 3, cholera: 60, heatstroke: 1, wbgt: 27.5 },
            { district: "Sherpur", division: "Mymensingh", dengue: 50, malaria: 1, cholera: 45, heatstroke: 0, wbgt: 24.5 },
            { district: "Chattogram", division: "Chattogram", dengue: 560, malaria: 45, cholera: 160, heatstroke: 12, wbgt: 28.9 },
            { district: "Cox's Bazar", division: "Chattogram", dengue: 220, malaria: 80, cholera: 90, heatstroke: 6, wbgt: 28.0 },
            { district: "Cumilla", division: "Chattogram", dengue: 330, malaria: 10, cholera: 200, heatstroke: 5, wbgt: 29.2 },
            { district: "Feni", division: "Chattogram", dengue: 180, malaria: 5, cholera: 120, heatstroke: 3, wbgt: 27.0 },
            { district: "Noakhali", division: "Chattogram", dengue: 270, malaria: 8, cholera: 180, heatstroke: 4, wbgt: 27.2 },
            { district: "Lakshmipur", division: "Chattogram", dengue: 140, malaria: 3, cholera: 85, heatstroke: 2, wbgt: 26.5 },
            { district: "Chandpur", division: "Chattogram", dengue: 160, malaria: 2, cholera: 150, heatstroke: 3, wbgt: 28.5 },
            { district: "Rangamati", division: "Chattogram", dengue: 100, malaria: 450, cholera: 40, heatstroke: 1, wbgt: 24.8 },
            { district: "Bandarban", division: "Chattogram", dengue: 70, malaria: 380, cholera: 30, heatstroke: 1, wbgt: 24.5 },
            { district: "Khagrachari", division: "Chattogram", dengue: 85, malaria: 290, cholera: 45, heatstroke: 1, wbgt: 24.0 },
            { district: "Brahmanbaria", division: "Chattogram", dengue: 120, malaria: 4, cholera: 75, heatstroke: 1, wbgt: 26.0 },
            { district: "Sylhet", division: "Sylhet", dengue: 210, malaria: 15, cholera: 140, heatstroke: 5, wbgt: 29.8 },
            { district: "Moulvibazar", division: "Sylhet", dengue: 90, malaria: 8, cholera: 85, heatstroke: 2, wbgt: 29.0 },
            { district: "Habiganj", division: "Sylhet", dengue: 70, malaria: 5, cholera: 75, heatstroke: 1, wbgt: 26.5 },
            { district: "Sunamganj", division: "Sylhet", dengue: 50, malaria: 2, cholera: 110, heatstroke: 1, wbgt: 26.0 },
            { district: "Rajshahi", division: "Rajshahi", dengue: 190, malaria: 2, cholera: 90, heatstroke: 18, wbgt: 32.0 },
            { district: "Chapai Nawabganj", division: "Rajshahi", dengue: 110, malaria: 0, cholera: 60, heatstroke: 10, wbgt: 31.8 },
            { district: "Naogaon", division: "Rajshahi", dengue: 140, malaria: 1, cholera: 75, heatstroke: 12, wbgt: 31.5 },
            { district: "Natore", division: "Rajshahi", dengue: 125, malaria: 0, cholera: 65, heatstroke: 8, wbgt: 29.5 },
            { district: "Pabna", division: "Rajshahi", dengue: 160, malaria: 1, cholera: 100, heatstroke: 7, wbgt: 29.0 },
            { district: "Sirajganj", division: "Rajshahi", dengue: 195, malaria: 0, cholera: 120, heatstroke: 9, wbgt: 31.0 },
            { district: "Bogura", division: "Rajshahi", dengue: 210, malaria: 2, cholera: 130, heatstroke: 15, wbgt: 31.2 },
            { district: "Joypurhat", division: "Rajshahi", dengue: 90, malaria: 0, cholera: 45, heatstroke: 6, wbgt: 28.0 },
            { district: "Rangpur", division: "Rangpur", dengue: 150, malaria: 2, cholera: 80, heatstroke: 12, wbgt: 28.5 },
            { district: "Dinajpur", division: "Rangpur", dengue: 170, malaria: 3, cholera: 90, heatstroke: 15, wbgt: 28.8 },
            { district: "Thakurgaon", division: "Rangpur", dengue: 70, malaria: 1, cholera: 45, heatstroke: 7, wbgt: 27.0 },
            { district: "Panchagarh", division: "Rangpur", dengue: 50, malaria: 0, cholera: 30, heatstroke: 6, wbgt: 26.5 },
            { district: "Nilphamari", division: "Rangpur", dengue: 90, malaria: 1, cholera: 60, heatstroke: 10, wbgt: 28.2 },
            { district: "Lalmonirhat", division: "Rangpur", dengue: 70, malaria: 0, cholera: 75, heatstroke: 6, wbgt: 27.0 },
            { district: "Kurigram", division: "Rangpur", dengue: 105, malaria: 1, cholera: 105, heatstroke: 5, wbgt: 27.5 },
            { district: "Gaibandha", division: "Rangpur", dengue: 130, malaria: 0, cholera: 120, heatstroke: 6, wbgt: 27.2 },
            { district: "Khulna", division: "Khulna", dengue: 380, malaria: 2, cholera: 150, heatstroke: 10, wbgt: 30.5 },
            { district: "Satkhira", division: "Khulna", dengue: 220, malaria: 1, cholera: 120, heatstroke: 6, wbgt: 30.0 },
            { district: "Bagerhat", division: "Khulna", dengue: 180, malaria: 0, cholera: 140, heatstroke: 4, wbgt: 28.5 },
            { district: "Jashore", division: "Khulna", dengue: 150, malaria: 0, cholera: 100, heatstroke: 5, wbgt: 29.5 },
            { district: "Magura", division: "Khulna", dengue: 90, malaria: 0, cholera: 75, heatstroke: 3, wbgt: 27.0 },
            { district: "Narail", division: "Khulna", dengue: 70, malaria: 0, cholera: 60, heatstroke: 3, wbgt: 26.5 },
            { district: "Jhenaidah", division: "Khulna", dengue: 110, malaria: 0, cholera: 85, heatstroke: 3, wbgt: 27.0 },
            { district: "Chuadanga", division: "Khulna", dengue: 130, malaria: 0, cholera: 75, heatstroke: 4, wbgt: 28.0 },
            { district: "Meherpur", division: "Khulna", dengue: 50, malaria: 0, cholera: 45, heatstroke: 2, wbgt: 26.0 },
            { district: "Kushtia", division: "Khulna", dengue: 160, malaria: 0, cholera: 90, heatstroke: 5, wbgt: 27.5 },
            { district: "Barishal", division: "Barishal", dengue: 520, malaria: 1, cholera: 180, heatstroke: 6, wbgt: 29.1 },
            { district: "Bhola", division: "Barishal", dengue: 280, malaria: 0, cholera: 120, heatstroke: 3, wbgt: 27.0 },
            { district: "Patuakhali", division: "Barishal", dengue: 330, malaria: 0, cholera: 150, heatstroke: 2, wbgt: 27.2 },
            { district: "Pirojpur", division: "Barishal", dengue: 610, malaria: 0, cholera: 210, heatstroke: 2, wbgt: 28.8 },
            { district: "Jhalokathi", division: "Barishal", dengue: 220, malaria: 0, cholera: 100, heatstroke: 2, wbgt: 27.0 },
            { district: "Barguna", division: "Barishal", dengue: 140, malaria: 0, cholera: 75, heatstroke: 1, wbgt: 26.5 }
        ];

        // ================================================================
        //  2.  HELPER: risk label & color
        // ================================================================
        function getRisk(wbgt) {
            if (wbgt >= 31) return { label: 'Danger', cls: 'risk-danger' };
            if (wbgt >= 28) return { label: 'Severe', cls: 'risk-severe' };
            if (wbgt >= 25) return { label: 'Warning', cls: 'risk-warning' };
            if (wbgt >= 21) return { label: 'Caution', cls: 'risk-caution' };
            return { label: 'Safe', cls: 'risk-safe' };
        }

        // ================================================================
        //  3.  POPULATE TABLE (DataTables)
        // ================================================================
        const tableBody = document.getElementById('tableBody');
        let tableHtml = '';
        districtData.forEach(d => {
            const risk = getRisk(d.wbgt);
            tableHtml += `<tr>
                <td><strong>${d.district}</strong></td>
                <td>${d.division}</td>
                <td>${d.dengue}</td>
                <td>${d.malaria}</td>
                <td>${d.cholera}</td>
                <td>${d.heatstroke}</td>
                <td>${d.wbgt.toFixed(1)}</td>
                <td><span class="badge ${risk.cls}">${risk.label}</span></td>
            </tr>`;
        });
        tableBody.innerHTML = tableHtml;

        $(document).ready(function() {
            $('#alertTable').DataTable({
                pageLength: 10,
                order: [
                    [6, 'desc']
                ],
                responsive: true,
                columnDefs: [
                    { targets: [2, 3, 4, 5], className: 'text-center' },
                    { targets: [6], className: 'text-center' }
                ]
            });
        });

        // ================================================================
        //  4.  LEAFLET MAP (load division & district GeoJSON)
        // ================================================================
        const map = L.map('ewarsMap', { zoomControl: true }).setView([23.7, 90.35], 7);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a>, CartoDB'
        }).addTo(map);

        // load division boundaries
        fetch('https://server6.bmd.gov.bd//assets/json/division.min.json')
            .then(r => r.json())
            .then(data => {
                L.geoJSON(data, {
                    style: { color: '#2c3e50', weight: 2, fill: false },
                    onEachFeature: (feature, layer) => {
                        const name = feature.properties?.NAME || feature.properties?.name || 'Division';
                        layer.bindPopup(`<strong>${name}</strong><br>Click a district for details`);
                    }
                }).addTo(map);
            })
            .catch(() => console.warn('Division GeoJSON not loaded'));

        // load district boundaries + colour by WBGT
        fetch('https://mobile.bmd.gov.bd/bmdmobile/district.min.json')
            .then(r => r.json())
            .then(data => {
                const geoLayer = L.geoJSON(data, {
                    style: feature => {
                        const name = feature.properties?.NAME || feature.properties?.name || '';
                        const match = districtData.find(d => d.district.toLowerCase() === name.toLowerCase());
                        const wbgt = match ? match.wbgt : 25;
                        const risk = getRisk(wbgt);
                        const colors = {
                            'risk-danger': '#dc3545',
                            'risk-severe': '#fd7e14',
                            'risk-warning': '#ffc107',
                            'risk-caution': '#0dcaf0',
                            'risk-safe': '#0d6efd'
                        };
                        return {
                            fillColor: colors[risk.cls] || '#adb5bd',
                            fillOpacity: 0.5,
                            color: '#2c3e50',
                            weight: 1.2,
                            dashArray: null
                        };
                    },
                    onEachFeature: (feature, layer) => {
                        const name = feature.properties?.NAME || feature.properties?.name || 'District';
                        const match = districtData.find(d => d.district.toLowerCase() === name.toLowerCase());
                        if (match) {
                            const risk = getRisk(match.wbgt);
                            const popupContent = `
                                <div style="min-width:180px;">
                                    <h6 class="mb-1">${match.district}</h6>
                                    <hr class="my-1" />
                                    <div class="d-flex justify-content-between"><span>Dengue</span><strong>${match.dengue}</strong></div>
                                    <div class="d-flex justify-content-between"><span>Malaria</span><strong>${match.malaria}</strong></div>
                                    <div class="d-flex justify-content-between"><span>Cholera</span><strong>${match.cholera}</strong></div>
                                    <div class="d-flex justify-content-between"><span>Heatstroke</span><strong>${match.heatstroke}</strong></div>
                                    <hr class="my-1" />
                                    <div class="d-flex justify-content-between"><span>WBGT</span><strong>${match.wbgt.toFixed(1)}°C</strong></div>
                                    <div><span class="badge ${risk.cls} mt-1">${risk.label}</span></div>
                                    <button class="btn btn-sm btn-outline-primary mt-2" onclick="showDistrictModal('${match.district}')">
                                        <i class="bi bi-eye"></i> Full details
                                    </button>
                                </div>
                            `;
                            layer.bindPopup(popupContent);
                        } else {
                            layer.bindPopup(`<strong>${name}</strong><br>No surveillance data`);
                        }
                    }
                }).addTo(map);

                // zoom to bounds
                map.fitBounds(geoLayer.getBounds());
            })
            .catch(() => console.warn('District GeoJSON not loaded'));

        // ================================================================
        //  5.  DISTRICT MODAL (populated dynamically)
        // ================================================================
        window.showDistrictModal = function(districtName) {
            const d = districtData.find(item => item.district === districtName);
            if (!d) return;
            const risk = getRisk(d.wbgt);
            const body = document.getElementById('districtModalBody');
            body.innerHTML = `
                <div class="row g-2">
                    <div class="col-6"><strong>District</strong></div><div class="col-6">${d.district}</div>
                    <div class="col-6"><strong>Division</strong></div><div class="col-6">${d.division}</div>
                    <div class="col-6"><strong>Dengue</strong></div><div class="col-6">${d.dengue}</div>
                    <div class="col-6"><strong>Malaria</strong></div><div class="col-6">${d.malaria}</div>
                    <div class="col-6"><strong>Cholera</strong></div><div class="col-6">${d.cholera}</div>
                    <div class="col-6"><strong>Heatstroke</strong></div><div class="col-6">${d.heatstroke}</div>
                    <div class="col-6"><strong>WBGT</strong></div><div class="col-6">${d.wbgt.toFixed(1)} °C</div>
                    <div class="col-6"><strong>Risk</strong></div><div class="col-6"><span class="badge ${risk.cls}">${risk.label}</span></div>
                </div>
                <hr />
                <p class="small text-muted mb-0">Data as of 10 August 2026 · EWARS Week 32</p>
            `;
            const modal = new bootstrap.Modal(document.getElementById('districtModal'));
            modal.show();
        };

        // ================================================================
        //  6.  CHARTS (Chart.js)
        // ================================================================
        // 6a. Division bar chart
        const divTotals = {};
        districtData.forEach(d => {
            divTotals[d.division] = (divTotals[d.division] || 0) + d.dengue;
        });
        const divLabels = Object.keys(divTotals);
        const divValues = Object.values(divTotals);
        new Chart(document.getElementById('divChart'), {
            type: 'bar',
            data: {
                labels: divLabels,
                datasets: [{
                    label: 'Dengue cases',
                    data: divValues,
                    backgroundColor: ['#e74c3c', '#f39c12', '#2ecc71', '#3498db', '#9b59b6', '#1abc9c', '#e67e22',
                        '#2c3e50'
                    ],
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // 6b. WBGT forecast (5 days)
        new Chart(document.getElementById('forecastChart'), {
            type: 'line',
            data: {
                labels: ['11 Aug', '12 Aug', '13 Aug', '14 Aug', '15 Aug'],
                datasets: [{
                    label: 'Dhaka',
                    data: [30.5, 31.2, 30.8, 29.5, 28.0],
                    borderColor: '#e74c3c',
                    tension: 0.2,
                    fill: false
                }, {
                    label: 'Rajshahi',
                    data: [32.5, 33.0, 32.0, 31.5, 30.0],
                    borderColor: '#fd7e14',
                    tension: 0.2,
                    fill: false
                }, {
                    label: 'Chattogram',
                    data: [29.0, 29.8, 30.5, 31.0, 30.2],
                    borderColor: '#3498db',
                    tension: 0.2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'top', labels: { boxWidth: 12 } } },
                scales: { y: { min: 26, max: 34 } }
            }
        });

        // 6c. Age distribution (dengue)
        new Chart(document.getElementById('ageChart'), {
            type: 'bar',
            data: {
                labels: ['0-5', '6-10', '11-15', '16-20', '21-25', '26-30', '31-35', '36-40', '41-45', '46-50',
                    '51-55', '56-60', '61-65', '66-70', '70+'
                ],
                datasets: [{
                    label: 'Male',
                    data: [590, 583, 826, 1748, 1800, 1844, 1178, 1042, 762, 619, 415, 389, 236, 170, 160],
                    backgroundColor: '#3498db'
                }, {
                    label: 'Female',
                    data: [472, 477, 512, 907, 950, 955, 810, 744, 534, 476, 279, 266, 159, 91, 68],
                    backgroundColor: '#e74c3c'
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'top', labels: { boxWidth: 12 } } },
                scales: { x: { ticks: { font: { size: 9 } } }, y: { beginAtZero: true } }
            }
        });

        // 6d. Disease burden (5 diseases)
        const diseaseTotals = {
            Dengue: districtData.reduce((s, d) => s + d.dengue, 0),
            Malaria: districtData.reduce((s, d) => s + d.malaria, 0),
            Cholera: districtData.reduce((s, d) => s + d.cholera, 0),
            Heatstroke: districtData.reduce((s, d) => s + d.heatstroke, 0)
        };
        new Chart(document.getElementById('diseaseChart'), {
            type: 'doughnut',
            data: {
                labels: ['Dengue', 'Malaria', 'Cholera', 'Heatstroke'],
                datasets: [{
                    data: [diseaseTotals.Dengue, diseaseTotals.Malaria, diseaseTotals.Cholera, diseaseTotals
                        .Heatstroke
                    ],
                    backgroundColor: ['#e74c3c', '#f39c12', '#2ecc71', '#fd7e14']
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom', labels: { boxWidth: 12 } } }
            }
        });

        // ================================================================
        //  7.  UPDATE KPI (with a little animation)
        // ================================================================
        // totals from the dataset
        const totalDengue = districtData.reduce((s, d) => s + d.dengue, 0);
        document.getElementById('kpiNewCases').textContent = '726';
        document.getElementById('kpiTotalCases').textContent = totalDengue.toLocaleString();
        document.getElementById('kpiDeaths').textContent = '61';
        const dhaka = districtData.find(d => d.district === 'Dhaka');
        if (dhaka) document.getElementById('kpiWbgt').textContent = dhaka.wbgt.toFixed(1) + '°C';

        console.log('✅ EWARS Demo ready · data loaded for', districtData.length, 'districts');
    </script>

</body>
</html>
