<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh EWARS · Early Warning Alert & Response System</title>

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
:root{--navy:#0b1736;--ink:#16213d;--muted:#71809b;--line:#e7ebf3;--green:#16a34a;--cyan:#0891b2;--yellow:#eab308;--orange:#f97316;--red:#dc2626}
body{font-family:Inter,"Segoe UI",Roboto,system-ui,sans-serif;background:linear-gradient(180deg,#f3f6fb,#eef2f8);color:var(--ink);padding-top:76px}
.navbar{background:rgba(11,23,54,.97)!important;backdrop-filter:blur(14px);min-height:76px}.navbar-brand{font-weight:800}.navbar-brand i{color:#ff6b6b}
.page-hero{background:linear-gradient(135deg,#0b1736,#162c63 62%,#1d4ed8);color:#fff;border-radius:0 0 24px 24px;padding:26px 0 30px;margin-bottom:20px;box-shadow:0 12px 30px rgba(11,23,54,.12)}
.hero-kicker{font-size:.72rem;text-transform:uppercase;letter-spacing:1.5px;opacity:.65;font-weight:800}.hero-title{font-size:clamp(1.6rem,3vw,2.45rem);font-weight:850;letter-spacing:-1px}.hero-sub{color:rgba(255,255,255,.72);max-width:760px}
.live-pill{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.14);padding:7px 11px;border-radius:999px;font-size:.75rem}.live-dot{width:8px;height:8px;background:#4ade80;border-radius:50%;animation:pulse-dot 1.6s infinite}@keyframes pulse-dot{50%{opacity:.45;transform:scale(.8)}}
.stat-card,.chart-wrapper{border:1px solid var(--line);border-radius:18px;background:#fff;box-shadow:0 8px 28px rgba(30,45,75,.055);height:100%;transition:.18s}.stat-card:hover,.chart-wrapper:hover{transform:translateY(-2px);box-shadow:0 12px 34px rgba(30,45,75,.09)}
.stat-card .card-title{font-size:.72rem;text-transform:uppercase;letter-spacing:.7px;color:var(--muted);font-weight:800}.stat-card .stat-number{font-size:2rem;font-weight:850}.stat-icon{font-size:1.8rem;opacity:.22}
#ewarsMap{height:570px;width:100%;border-radius:16px;background:#e8edf4}.map-shell{position:relative;overflow:hidden;border-radius:16px}
.map-toolbar{position:absolute;z-index:800;top:14px;left:14px;right:14px;display:flex;gap:8px;justify-content:space-between;pointer-events:none}.map-toolbar>*{pointer-events:auto}
.map-control,.map-select{border:1px solid #dbe2ed;background:rgba(255,255,255,.96);color:#16213d;border-radius:10px;padding:8px 11px;font-size:.78rem;font-weight:700;box-shadow:0 5px 18px rgba(15,23,42,.12)}
.map-legend{position:absolute;z-index:800;left:14px;bottom:14px;background:rgba(255,255,255,.97);border:1px solid #e2e8f0;border-radius:14px;padding:11px 13px;box-shadow:0 7px 22px rgba(15,23,42,.12);min-width:245px}
.legend-title{font-size:.72rem;text-transform:uppercase;letter-spacing:.7px;font-weight:900;margin-bottom:8px}.legend-grid{display:grid;grid-template-columns:1fr 1fr;gap:6px 14px}.legend-item{display:flex;align-items:center;gap:7px;font-size:.72rem;color:#44516b;cursor:pointer}.legend-swatch{width:13px;height:13px;border-radius:4px}.legend-help{font-size:.65rem;color:#94a3b8;margin-top:7px}.map-layer-status{position:absolute;z-index:800;right:14px;bottom:14px;background:rgba(11,23,54,.9);color:#fff;border-radius:12px;padding:8px 11px;font-size:.68rem}
.alert-feed{max-height:500px;overflow:auto}.alert-item{border:1px solid var(--line);border-left:4px solid #94a3b8;border-radius:12px;padding:11px 12px;margin-bottom:9px;background:#fbfcfe;cursor:pointer}.alert-item:hover{background:#fff}.alert-item.danger{border-left-color:var(--red)}.alert-item.warning{border-left-color:var(--yellow)}.alert-item.info{border-left-color:var(--cyan)}
.filter-bar{display:flex;flex-wrap:wrap;gap:8px;align-items:center;background:#fff;border:1px solid var(--line);padding:10px;border-radius:14px;box-shadow:0 5px 18px rgba(30,45,75,.04);margin-bottom:14px}.filter-btn{border:1px solid #dfe5ef;background:#fff;color:#55627a;border-radius:999px;padding:7px 12px;font-size:.74rem;font-weight:800}.filter-btn.active{background:#162653;color:#fff}
.chart-wrapper{padding:1rem 1rem .65rem}.section-head{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:8px}.section-head h6{margin:0;font-weight:850}.mini-select{border:1px solid #dfe5ef;border-radius:9px;padding:5px 8px;font-size:.72rem;background:#fff}
#alertTable th{background:#f6f8fc;color:#59677f;font-size:.72rem;text-transform:uppercase}#alertTable td{font-size:.8rem;vertical-align:middle}.district-link{font-weight:800;color:#18336f;text-decoration:none;cursor:pointer}
.risk-danger{background:var(--red);color:#fff}.risk-severe{background:var(--orange);color:#fff}.risk-warning{background:var(--yellow);color:#111827}.risk-caution{background:var(--cyan);color:#fff}.risk-safe{background:var(--green);color:#fff}
.kpi-accent-danger{border-top:3px solid var(--red)}.kpi-accent-warn{border-top:3px solid var(--yellow)}.kpi-accent-purple{border-top:3px solid #6d5dfc}
.detail-hero{background:linear-gradient(135deg,#0b1736,#1e3a8a);color:#fff;border-radius:14px;padding:16px}.detail-metric{background:#f7f9fc;border:1px solid #e7ebf3;border-radius:12px;padding:12px}.metric-label{font-size:.65rem;text-transform:uppercase;letter-spacing:.6px;color:#7b879d;font-weight:800}.metric-value{font-size:1.2rem;font-weight:850;margin-top:3px}
@media(max-width:768px){#ewarsMap{height:430px}.map-legend{min-width:220px}.hero-title{font-size:1.55rem}}

.demo-ribbon{
  position:fixed;top:76px;left:0;right:0;z-index:1200;
  display:flex;align-items:center;justify-content:center;gap:9px;
  min-height:34px;padding:7px 14px;
  background:linear-gradient(90deg,#7f1d1d,#dc2626,#7f1d1d);
  color:#fff;font-size:.72rem;font-weight:900;letter-spacing:.8px;
  text-transform:uppercase;box-shadow:0 4px 14px rgba(127,29,29,.22);
}
.demo-ribbon i{font-size:.9rem}
body{padding-top:110px}
@media(max-width:768px){
  .demo-ribbon{top:68px;font-size:.64rem;min-height:32px}
  body{padding-top:100px}
}

</style>
</head>
<body>

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

<div class="demo-ribbon" role="status" aria-label="Demo website indicator">
  <i class="bi bi-info-circle-fill"></i>
  <span>DEMO WEBSITE · SAMPLE DATA · NOT FOR OPERATIONAL DECISION-MAKING</span>
</div>

<div class="page-hero"><div class="container-fluid px-3 px-lg-4">
<div class="d-flex flex-wrap justify-content-between align-items-end gap-3"><div>
<div class="hero-kicker">Integrated public-health intelligence</div>
<div class="hero-title">Bangladesh EWARS Command Dashboard</div>
<div class="hero-sub">Explore district-level disease activity, weather stress and early-warning signals from one interactive surveillance view.</div>
</div><div class="live-pill"><span class="live-dot"></span> DEMO SURVEILLANCE VIEW · SAMPLE DATA · 10 Aug 2026</div></div>
</div></div>
    <main class="container-fluid px-3 px-lg-4">

        <!-- ----- STAT ROW (KPI) ----- -->
        <section class="row g-3 mb-4" id="kpiRow">
            <div class="col-6 col-md-3">
                <div class="card stat-card p-3 kpi-accent-danger">
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
                <div class="card stat-card p-3 kpi-accent-warn">
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
                <div class="card stat-card p-3 kpi-accent-danger">
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
                <div class="card stat-card p-3 kpi-accent-purple">
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
<div class="col-lg-8"><div class="card stat-card p-2"><div class="card-body p-1"><div class="map-shell">
<div id="ewarsMap"></div>
<div class="map-toolbar"><div class="d-flex gap-2 flex-wrap">
<button class="map-control" id="resetMap"><i class="bi bi-crosshair2 me-1"></i>Reset view</button>
<button class="map-control" id="locateHighest"><i class="bi bi-lightning-charge me-1"></i>Highest risk</button>
</div><select class="map-select" id="mapMetric">
<option value="risk">Risk level</option><option value="dengue">Dengue cases</option><option value="malaria">Malaria cases</option>
<option value="cholera">Cholera cases</option><option value="heatstroke">Heatstroke</option><option value="wbgt">WBGT</option>
</select></div>
<div class="map-legend"><div class="legend-title"><i class="bi bi-layers me-1"></i><span id="legendTitle">Early-warning risk</span></div>
<div class="legend-grid" id="legendGrid"></div><div class="legend-help">Click a legend item to isolate that category · hover districts for details</div></div>
<div class="map-layer-status" id="mapStatus">Loading district layer…</div>
</div></div></div></div>
<div class="col-lg-4"><div class="card stat-card p-3 h-100">
<div class="section-head"><h6><i class="bi bi-broadcast-pin me-2"></i>Priority alerts</h6><span class="small text-muted" id="alertCount"></span></div>
<div class="alert-feed" id="alertFeed"></div></div></div>
</section>
<section class="filter-bar">
<span class="small fw-bold text-muted me-1"><i class="bi bi-funnel me-1"></i>Focus:</span>
<button class="filter-btn active" data-filter="all">All districts</button><button class="filter-btn" data-filter="Danger">Danger</button>
<button class="filter-btn" data-filter="Severe">Severe</button><button class="filter-btn" data-filter="Warning">Warning</button>
<button class="filter-btn" data-filter="Caution">Caution</button><button class="filter-btn" data-filter="Safe">Safe</button>
<span class="ms-auto small text-muted" id="filterSummary">Showing all districts</span></section>

        <!-- ----- CHARTS (two columns) ----- -->
        <section class="row g-3 mb-4" id="chartsSection">
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <div class="section-head"><h6><i class="bi bi-bar-chart-fill me-2"></i>Weekly Cases by Division</h6>
<select class="mini-select" id="divisionMetric"><option value="dengue">Dengue</option><option value="malaria">Malaria</option><option value="cholera">Cholera</option><option value="heatstroke">Heatstroke</option></select></div>
                    <canvas id="divChart" height="180"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-wrapper">
                    <div class="section-head"><h6><i class="bi bi-thermometer-sun me-2"></i>WBGT Forecast</h6><span class="small text-muted">5 days</span></div>
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
            <i class="bi bi-shield-check me-1"></i> Bangladesh EWARS · IEDCR · Global Fund · BMD · Interactive demonstration · Data as of 10 Aug 2026
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
                <td><a class="district-link" onclick="showDistrictModal('${d.district}')">${d.district}</a></td>
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
        // INTERACTIVE MAP + LEGENDS + FILTERS
        // ================================================================
        const RISK_COLORS={Danger:'#dc2626',Severe:'#f97316',Warning:'#eab308',Caution:'#0891b2',Safe:'#16a34a'};
        const RISK_ORDER=['Danger','Severe','Warning','Caution','Safe'];
        const metricLabels={risk:'Early-warning risk',dengue:'Dengue cases',malaria:'Malaria cases',cholera:'Cholera cases',heatstroke:'Heatstroke',wbgt:'WBGT'};
        const metricRanges={wbgt:[21,25,28,31],dengue:[50,150,300,600],malaria:[5,25,100,300],cholera:[50,100,200,300],heatstroke:[2,5,10,15]};
        const map=L.map('ewarsMap',{zoomControl:true,minZoom:6,maxZoom:11}).setView([23.7,90.35],7);
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png',{attribution:'&copy; OpenStreetMap contributors &copy; CARTO'}).addTo(map);
        let districtGeoLayer=null,activeFilter='all',activeMetric='risk',selectedDistrict=null;

        function metricColor(v,m){if(m==='risk')return RISK_COLORS[getRisk(v).label];const r=metricRanges[m];if(v>=r[3])return '#dc2626';if(v>=r[2])return '#f97316';if(v>=r[1])return '#eab308';if(v>=r[0])return '#0891b2';return '#16a34a'}
        function renderLegend(){
            let labels=activeMetric==='risk'?RISK_ORDER:(activeMetric==='wbgt'?['≥31°C','28–30.9°C','25–27.9°C','21–24.9°C','<21°C']:(()=>{let r=metricRanges[activeMetric];return[`≥${r[3]}`,`${r[2]}–${r[3]-1}`,`${r[1]}–${r[2]-1}`,`${r[0]}–${r[1]-1}`,`<${r[0]}`]})());
            let colors=['#dc2626','#f97316','#eab308','#0891b2','#16a34a'];
            document.getElementById('legendTitle').textContent=metricLabels[activeMetric];
            document.getElementById('legendGrid').innerHTML=labels.map((x,i)=>`<div class="legend-item" data-legend="${x}"><span class="legend-swatch" style="background:${colors[i]}"></span>${x}</div>`).join('');
            document.querySelectorAll('.legend-item').forEach(el=>el.onclick=()=>{if(activeMetric==='risk'){activeFilter=activeFilter===el.dataset.legend?'all':el.dataset.legend;updateMapStyles();updateFilterButtons()}});
        }
        function mapValue(d,m){return m==='risk'?d.wbgt:d[m]}
        function updateMapStyles(){
            if(!districtGeoLayer)return;
            districtGeoLayer.eachLayer(layer=>{
                const n=layer.feature.properties?.NAME||layer.feature.properties?.name||'',d=districtData.find(x=>x.district.toLowerCase()===n.toLowerCase());if(!d)return;
                const risk=getRisk(d.wbgt).label,dim=activeMetric==='risk'&&activeFilter!=='all'&&risk!==activeFilter;
                layer.setStyle({fillColor:metricColor(mapValue(d,activeMetric),activeMetric),fillOpacity:dim?.08:.66,color:selectedDistrict===d.district?'#111827':'#334155',weight:selectedDistrict===d.district?3:1.15});
            });
            const shown=activeFilter==='all'?districtData.length:districtData.filter(d=>getRisk(d.wbgt).label===activeFilter).length;
            document.getElementById('mapStatus').textContent=`${shown} districts · ${metricLabels[activeMetric]}`;
        }
        function selectDistrict(name){selectedDistrict=name;if(districtGeoLayer)districtGeoLayer.eachLayer(layer=>{const n=layer.feature.properties?.NAME||layer.feature.properties?.name||'';if(n.toLowerCase()===name.toLowerCase()){map.fitBounds(layer.getBounds(),{padding:[40,40],maxZoom:8});layer.openPopup()}});updateMapStyles()}
        function popupFor(d){const r=getRisk(d.wbgt);return `<div style="min-width:230px"><div class="d-flex justify-content-between align-items-center mb-1"><strong>${d.district}</strong><span class="badge ${r.cls}">${r.label}</span></div><div class="small text-muted mb-2">${d.division} Division</div><div class="row g-1 small"><div class="col-6">Dengue <strong>${d.dengue}</strong></div><div class="col-6">Malaria <strong>${d.malaria}</strong></div><div class="col-6">Cholera <strong>${d.cholera}</strong></div><div class="col-6">Heatstroke <strong>${d.heatstroke}</strong></div><div class="col-6">WBGT <strong>${d.wbgt.toFixed(1)}°C</strong></div></div><button class="btn btn-sm btn-primary w-100 mt-2" onclick="showDistrictModal('${d.district}')">Open district profile</button></div>`}

        fetch('https://server6.bmd.gov.bd//assets/json/division.min.json').then(r=>r.json()).then(data=>L.geoJSON(data,{style:{color:'#475569',weight:2,fill:false,opacity:.8}}).addTo(map)).catch(()=>{});
        fetch('https://mobile.bmd.gov.bd/bmdmobile/district.min.json').then(r=>r.json()).then(data=>{
            districtGeoLayer=L.geoJSON(data,{style:{fillColor:'#16a34a',fillOpacity:.66,color:'#334155',weight:1.15},onEachFeature:(f,l)=>{
                const n=f.properties?.NAME||f.properties?.name||'District',d=districtData.find(x=>x.district.toLowerCase()===n.toLowerCase());
                if(!d){l.bindTooltip(n);return}
                l.bindTooltip(`<strong>${d.district}</strong><br>${getRisk(d.wbgt).label} · WBGT ${d.wbgt.toFixed(1)}°C`,{sticky:true});
                l.bindPopup(popupFor(d));l.on({mouseover:e=>e.target.setStyle({weight:2.5,fillOpacity:.82}),mouseout:()=>updateMapStyles(),click:()=>selectDistrict(d.district)});
            }}).addTo(map);map.fitBounds(districtGeoLayer.getBounds(),{padding:[12,12]});renderLegend();updateMapStyles();
        }).catch(()=>{renderLegend();document.getElementById('mapStatus').textContent='District boundary service unavailable'});

        document.getElementById('mapMetric').onchange=e=>{activeMetric=e.target.value;activeFilter='all';renderLegend();updateMapStyles();updateFilterButtons()};
        document.getElementById('resetMap').onclick=()=>{if(districtGeoLayer)map.fitBounds(districtGeoLayer.getBounds(),{padding:[12,12]});selectedDistrict=null;activeFilter='all';updateMapStyles();updateFilterButtons()};
        document.getElementById('locateHighest').onclick=()=>{const d=[...districtData].sort((a,b)=>b.wbgt-a.wbgt)[0];selectDistrict(d.district);showDistrictModal(d.district)};

        function renderAlerts(){const top=[...districtData].sort((a,b)=>b.wbgt-a.wbgt).slice(0,5);document.getElementById('alertFeed').innerHTML=top.map(d=>{const r=getRisk(d.wbgt);return `<div class="alert-item ${r.label==='Danger'?'danger':r.label==='Severe'||r.label==='Warning'?'warning':'info'}" onclick="selectDistrict('${d.district}')"><div class="d-flex gap-2"><i class="bi bi-broadcast-pin fs-5"></i><div><strong>${d.district}</strong> · WBGT ${d.wbgt.toFixed(1)}°C <span class="badge ${r.cls}">${r.label.toUpperCase()}</span><div class="small text-muted mt-1">${d.dengue} dengue · ${d.cholera} cholera · ${d.heatstroke} heatstroke</div></div></div></div>`}).join('');document.getElementById('alertCount').textContent=`${top.length} priority signals`}
        renderAlerts();

        function updateFilterButtons(){document.querySelectorAll('.filter-btn').forEach(b=>b.classList.toggle('active',(b.dataset.filter==='all'?activeFilter==='all':b.dataset.filter===activeFilter)));document.getElementById('filterSummary').textContent=activeFilter==='all'?'Showing all districts':`Showing ${activeFilter} districts`}
        document.querySelectorAll('.filter-btn').forEach(b=>b.onclick=()=>{activeFilter=b.dataset.filter;document.getElementById('mapMetric').value='risk';activeMetric='risk';renderLegend();updateMapStyles();updateFilterButtons()});

        window.showDistrictModal=function(name){
            const d=districtData.find(x=>x.district===name);if(!d)return;const r=getRisk(d.wbgt);
            document.getElementById('districtModalLabel').innerHTML=`<i class="bi bi-geo-alt me-2"></i>${d.district} surveillance profile`;
            document.getElementById('districtModalBody').innerHTML=`<div class="detail-hero mb-3"><div class="small opacity-75">${d.division} Division · EWARS Week 32</div><div class="d-flex justify-content-between align-items-end mt-1"><div><div class="h4 mb-0 fw-bold">${d.district}</div><div class="small opacity-75">Current early-warning status</div></div><span class="badge ${r.cls} fs-6">${r.label}</span></div></div><div class="row g-2"><div class="col-6 col-md-3"><div class="detail-metric"><div class="metric-label">Dengue</div><div class="metric-value">${d.dengue}</div></div></div><div class="col-6 col-md-3"><div class="detail-metric"><div class="metric-label">Malaria</div><div class="metric-value">${d.malaria}</div></div></div><div class="col-6 col-md-3"><div class="detail-metric"><div class="metric-label">Cholera</div><div class="metric-value">${d.cholera}</div></div></div><div class="col-6 col-md-3"><div class="detail-metric"><div class="metric-label">Heatstroke</div><div class="metric-value">${d.heatstroke}</div></div></div></div><div class="detail-metric mt-2"><div class="metric-label">WBGT / heat stress</div><div class="metric-value">${d.wbgt.toFixed(1)} °C</div><div class="progress mt-2" style="height:7px"><div class="progress-bar ${r.cls}" style="width:${Math.min(100,d.wbgt/35*100)}%"></div></div></div><div class="alert alert-light border mt-3 mb-0 small"><i class="bi bi-info-circle me-1"></i>Sample dashboard data for demonstration. Production values should come from DGHS/EWARS and BMD pipelines.</div>`;
            new bootstrap.Modal(document.getElementById('districtModal')).show();
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
        const totalMalaria = districtData.reduce((s, d) => s + d.malaria, 0);
        const totalCholera = districtData.reduce((s, d) => s + d.cholera, 0);
        const totalHeat = districtData.reduce((s, d) => s + d.heatstroke, 0);
        // approximated deaths (proportional to sample)
        document.getElementById('kpiNewCases').textContent = '726';
        document.getElementById('kpiTotalCases').textContent = totalDengue.toLocaleString();
        document.getElementById('kpiDeaths').textContent = '61';
        // WBGT for Dhaka
        const dhaka = districtData.find(d => d.district === 'Dhaka');
        if (dhaka) document.getElementById('kpiWbgt').textContent = dhaka.wbgt.toFixed(1) + '°C';

        console.log('✅ EWARS Demo ready · data loaded for', districtData.length, 'districts');
    </script>


<div class="container-fluid px-3 px-lg-4 pb-3">
  <div class="alert alert-warning border-0 shadow-sm mb-0" style="border-radius:14px;">
    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <strong>Demonstration website:</strong> This dashboard is a UI/UX prototype using sample data.
    It is not an official EWARS/IEDCR operational system and must not be used for real-world public-health decisions.
  </div>
</div>

</body>
</html>
