<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DGHS Dengue Surveillance Dashboard | 10 Aug 2026</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
:root{
  --navy:#102a43;
  --blue:#1677c8;
  --blue2:#38a3e8;
  --cyan:#14b8c4;
  --red:#e53935;
  --green:#18a673;
  --orange:#f59e0b;
  --bg:#f3f7fb;
  --card:#ffffff;
  --text:#203040;
  --muted:#718096;
  --border:#e5edf4;
  --shadow:0 8px 30px rgba(16,42,67,.07);
}
*{box-sizing:border-box}
body{
  margin:0;
  background:var(--bg);
  color:var(--text);
  font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Arial,sans-serif;
}
.app{min-height:100vh}
.sidebar{
  position:fixed;left:0;top:0;bottom:0;width:255px;
  background:linear-gradient(180deg,#102a43 0%,#123b5d 100%);
  color:#fff;padding:22px 16px;z-index:1040;
}
.brand{
  display:flex;align-items:center;gap:12px;padding:5px 8px 22px;
  border-bottom:1px solid rgba(255,255,255,.12);margin-bottom:18px;
}
.brand-mark{
  width:45px;height:45px;border-radius:12px;background:#fff;color:var(--blue);
  display:grid;place-items:center;font-weight:900;font-size:18px;
}
.brand strong{font-size:14px;line-height:1.2;display:block}
.brand small{opacity:.65;font-size:10px}
.side-label{
  text-transform:uppercase;font-size:10px;letter-spacing:1.2px;
  color:rgba(255,255,255,.45);padding:8px 12px;
}
.side-nav a{
  color:rgba(255,255,255,.72);text-decoration:none;padding:11px 12px;
  border-radius:10px;display:flex;align-items:center;gap:10px;margin:3px 0;font-size:13px;
}
.side-nav a:hover,.side-nav a.active{background:rgba(255,255,255,.12);color:#fff}
.side-nav i{font-size:16px;width:20px}
.sidebar-bottom{
  position:absolute;bottom:18px;left:16px;right:16px;
  background:rgba(255,255,255,.08);border-radius:12px;padding:12px;font-size:10px;color:rgba(255,255,255,.68);
}
.main{margin-left:255px}
.topbar{
  height:72px;background:#fff;border-bottom:1px solid var(--border);
  display:flex;align-items:center;justify-content:space-between;padding:0 30px;
  position:sticky;top:0;z-index:1030;
}
.menu-btn{display:none}
.report-pill{
  display:inline-flex;align-items:center;gap:7px;background:#edf7ff;color:#1677c8;
  border:1px solid #d8edfc;border-radius:30px;padding:7px 12px;font-size:11px;font-weight:700;
}
.live-dot{width:7px;height:7px;border-radius:50%;background:#17a673;box-shadow:0 0 0 4px #dcf8ec}
.content{padding:26px 30px 40px;max-width:1600px}
.hero{
  background:linear-gradient(120deg,#0f4c75,#1677c8 58%,#38a3e8);
  color:#fff;border-radius:18px;padding:25px 28px;position:relative;overflow:hidden;
  box-shadow:0 12px 35px rgba(22,119,200,.18);
}
.hero:after{
  content:"";position:absolute;width:300px;height:300px;border-radius:50%;
  right:-80px;top:-150px;background:rgba(255,255,255,.08);
}
.hero h1{font-size:24px;font-weight:800;margin:0 0 5px}
.hero p{margin:0;color:rgba(255,255,255,.76);font-size:12px}
.hero-date{font-size:12px;margin-top:17px;display:inline-block;background:rgba(255,255,255,.12);padding:7px 11px;border-radius:8px}
.kpi-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:18px 0}
.kpi{
  background:var(--card);border:1px solid var(--border);border-radius:14px;padding:18px;
  box-shadow:var(--shadow);position:relative;overflow:hidden;
}
.kpi:before{content:"";position:absolute;left:0;top:0;bottom:0;width:4px;background:var(--blue)}
.kpi.red:before{background:var(--red)} .kpi.green:before{background:var(--green)} .kpi.orange:before{background:var(--orange)}
.kpi-top{display:flex;justify-content:space-between;align-items:center}
.kpi-icon{width:40px;height:40px;border-radius:10px;background:#edf7ff;color:var(--blue);display:grid;place-items:center;font-size:19px}
.kpi.red .kpi-icon{background:#fff0f0;color:var(--red)}
.kpi.green .kpi-icon{background:#eafaf4;color:var(--green)}
.kpi.orange .kpi-icon{background:#fff7e7;color:var(--orange)}
.kpi-label{font-size:11px;color:var(--muted);margin-top:13px}
.kpi-value{font-size:28px;font-weight:800;letter-spacing:-.5px;margin-top:2px}
.kpi-sub{font-size:10px;color:var(--muted);margin-top:3px}
.section-head{display:flex;justify-content:space-between;align-items:end;margin:26px 0 10px}
.section-head h2{font-size:16px;margin:0;font-weight:800}
.section-head p{margin:3px 0 0;color:var(--muted);font-size:11px}
.chart-card,.table-card{
  background:#fff;border:1px solid var(--border);border-radius:14px;padding:16px;box-shadow:var(--shadow);
}
.chart-title{font-size:12px;font-weight:700;margin-bottom:10px}
.chart-wrap{height:300px;position:relative}
.chart-wrap.short{height:260px}
.chart-wrap.tall{height:350px}
.quick-stat{
  display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--border);
  padding:10px 0;font-size:12px;
}
.quick-stat:last-child{border-bottom:0}
.quick-stat strong{font-size:14px}
.report-tabs{
  background:#fff;border:1px solid var(--border);border-radius:12px;padding:5px;
  display:flex;gap:4px;overflow:auto;margin-bottom:20px;box-shadow:var(--shadow);
}
.report-tabs button{
  border:0;background:transparent;color:var(--muted);padding:9px 14px;border-radius:8px;
  white-space:nowrap;font-size:11px;font-weight:700;
}
.report-tabs button.active{background:var(--blue);color:#fff}
.dataTables_wrapper{font-size:11px}
table.dataTable thead th{background:#eef6fc!important;color:#31546e!important;border-bottom:1px solid #d9e8f2!important;font-size:10px!important}
table.dataTable tbody td{font-size:11px;padding:8px 7px!important}
table.dataTable tbody tr:hover{background:#f8fbfd!important}
.total-row{font-weight:800;background:#f1f7fb!important}
.source{
  margin-top:24px;background:#eaf4fb;border:1px solid #d7eaf7;color:#4a6477;border-radius:12px;padding:13px;font-size:10px;
}
.footer{padding:22px 30px;background:#102a43;color:rgba(255,255,255,.62);font-size:10px}
.mobile-overlay{display:none}
@media(max-width:991px){
  .sidebar{transform:translateX(-100%);transition:.25s}
  body.sidebar-open .sidebar{transform:translateX(0)}
  .main{margin-left:0}
  .menu-btn{display:inline-grid;place-items:center;border:0;background:none;font-size:22px;color:var(--navy)}
  .topbar{padding:0 18px}
  .content{padding:20px 18px}
  .kpi-grid{grid-template-columns:repeat(2,1fr)}
  .mobile-overlay{position:fixed;inset:0;background:rgba(0,0,0,.35);z-index:1035}
  body.sidebar-open .mobile-overlay{display:block}
}
@media(max-width:575px){
  .kpi-grid{grid-template-columns:1fr 1fr;gap:9px}
  .kpi{padding:13px}
  .kpi-value{font-size:23px}
  .hero{padding:20px}
  .hero h1{font-size:19px}
  .chart-wrap,.chart-wrap.short{height:250px}
  .chart-wrap.tall{height:300px}
  .content{padding:14px 12px 28px}
  .topbar{height:62px}
  .report-pill span{display:none}
}
</style>
</head>

<body>
<div class="app">
  <aside class="sidebar">
    <div class="brand">
      <div class="brand-mark">BD</div>
      <div><strong>DGHS<br>Health Control Room</strong><small>Dengue Surveillance</small></div>
    </div>
    <div class="side-label">Dashboard</div>
    <nav class="side-nav">
      <a href="#overview" class="active"><i class="bi bi-grid-1x2-fill"></i>Overview</a>
      <a href="#age"><i class="bi bi-people"></i>Age &amp; Gender</a>
      <a href="#geography"><i class="bi bi-geo-alt"></i>Division &amp; City</a>
      <a href="#monthly"><i class="bi bi-bar-chart"></i>Monthly Trends</a>
      <a href="#tables"><i class="bi bi-table"></i>Report Tables</a>
    </nav>
    <div class="side-label mt-3">Report</div>
    <nav class="side-nav">
      <a href="#source"><i class="bi bi-file-earmark-text"></i>Source Information</a>
    </nav>
    <div class="sidebar-bottom">
      <strong>DGHS MIS</strong><br>
      Health Emergency Operation Center &amp; Control Room<br>
      Mohakhali, Dhaka-1212
    </div>
  </aside>
  <div class="mobile-overlay" onclick="toggleSidebar()"></div>

  <div class="main">
    <header class="topbar">
      <div class="d-flex align-items-center gap-3">
        <button class="menu-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
        <div>
          <div class="fw-bold" style="font-size:13px">Dengue Surveillance Dashboard</div>
          <div class="text-secondary" style="font-size:10px">Daily Press Release</div>
        </div>
      </div>
      <div class="report-pill"><span class="live-dot"></span><span>Report date: 10-Aug-2026</span></div>
    </header>

    <main class="content">
      <section class="hero" id="overview">
        <h1>Daily Dengue Situation Report</h1>
        <p>Government of the People's Republic of Bangladesh · Directorate General of Health Services (DGHS)</p>
        <div class="hero-date"><i class="bi bi-calendar3 me-1"></i> 10 August 2026</div>
      </section>

      <section class="kpi-grid">
        <div class="kpi">
          <div class="kpi-top"><div class="kpi-label mt-0">WEEKLY CASES · W32</div><div class="kpi-icon"><i class="bi bi-person-plus"></i></div></div>
          <div class="kpi-value">1,398</div><div class="kpi-sub">Cases reported this week</div>
        </div>
        <div class="kpi red">
          <div class="kpi-top"><div class="kpi-label mt-0">WEEKLY DEATHS</div><div class="kpi-icon"><i class="bi bi-heart-pulse"></i></div></div>
          <div class="kpi-value">2</div><div class="kpi-sub">Deaths reported this week</div>
        </div>
        <div class="kpi green">
          <div class="kpi-top"><div class="kpi-label mt-0">CUMULATIVE CASES</div><div class="kpi-icon"><i class="bi bi-people-fill"></i></div></div>
          <div class="kpi-value">20,071</div><div class="kpi-sub">1 January – 10 August 2026</div>
        </div>
        <div class="kpi red">
          <div class="kpi-top"><div class="kpi-label mt-0">CUMULATIVE DEATHS</div><div class="kpi-icon"><i class="bi bi-exclamation-diamond"></i></div></div>
          <div class="kpi-value">61</div><div class="kpi-sub">Confirmed deaths</div>
        </div>
      </section>

      <div class="report-tabs" id="tabs">
        <button class="active" data-section="overviewPanel">Overview</button>
        <button data-section="agePanel">Age &amp; Gender</button>
        <button data-section="geoPanel">Geography</button>
        <button data-section="monthlyPanel">Monthly Trends</button>
        <button data-section="tablesPanel">Tables</button>
      </div>

      <div id="overviewPanel" class="panel">
        <div class="section-head"><div><h2>24-hour situation</h2><p>Cases, deaths and geographical distribution reported during the last 24 hours.</p></div></div>
        <div class="row g-3">
          <div class="col-lg-6"><div class="chart-card"><div class="chart-title">New dengue cases · last 24 hours</div><div class="chart-wrap"><canvas id="cases24"></canvas></div></div></div>
          <div class="col-lg-6"><div class="chart-card"><div class="chart-title">Dengue deaths · last 24 hours</div><div class="chart-wrap"><canvas id="deaths24"></canvas></div></div></div>
          <div class="col-12"><div class="chart-card"><div class="chart-title">Cases by division / city corporation · last 24 hours</div><div class="chart-wrap tall"><canvas id="division24"></canvas></div></div></div>
          <div class="col-lg-8"><div class="chart-card"><div class="chart-title">Deaths by division / city corporation · last 24 hours</div><div class="chart-wrap"><canvas id="divisionDeaths24"></canvas></div></div></div>
          <div class="col-lg-4"><div class="chart-card h-100"><div class="chart-title">Quick 24-hour summary</div>
            <div class="quick-stat"><span>New admitted</span><strong>726</strong></div>
            <div class="quick-stat"><span>Discharged</span><strong>724</strong></div>
            <div class="quick-stat"><span>Male cases</span><strong>65.3%</strong></div>
            <div class="quick-stat"><span>Female cases</span><strong>34.7%</strong></div>
            <div class="quick-stat"><span>Reported deaths</span><strong class="text-danger">0</strong></div>
          </div></div>
        </div>
      </div>

      <div id="agePanel" class="panel d-none">
        <div class="section-head"><div><h2>Age &amp; gender profile</h2><p>Distribution of dengue cases and deaths by demographic group.</p></div></div>
        <div class="row g-3">
          <div class="col-lg-6"><div class="chart-card"><div class="chart-title">Gender distribution · last 24 hours</div><div class="chart-wrap"><canvas id="gender24"></canvas></div></div></div>
          <div class="col-lg-6"><div class="chart-card"><div class="chart-title">Gender distribution · cumulative 2026</div><div class="chart-wrap"><canvas id="genderCum"></canvas></div></div></div>
          <div class="col-lg-6"><div class="table-card"><div class="chart-title">Age group distribution · last 24 hours</div><div class="table-responsive"><table id="age24Table" class="table table-sm table-bordered"></table></div></div></div>
          <div class="col-lg-6"><div class="table-card"><div class="chart-title">Age group distribution · cumulative 2026</div><div class="table-responsive"><table id="ageCumTable" class="table table-sm table-bordered"></table></div></div></div>
          <div class="col-lg-6"><div class="table-card"><div class="chart-title">Age group distribution of deaths · cumulative 2026</div><div class="table-responsive"><table id="deathCumTable" class="table table-sm table-bordered"></table></div></div></div>
        </div>
      </div>

      <div id="geoPanel" class="panel d-none">
        <div class="section-head"><div><h2>Geographical distribution</h2><p>Division and city corporation reporting across Bangladesh.</p></div></div>
        <div class="row g-3">
          <div class="col-12"><div class="chart-card"><div class="chart-title">Cumulative cases by division / city corporation</div><div class="chart-wrap tall"><canvas id="divisionCum"></canvas></div></div></div>
          <div class="col-12"><div class="chart-card"><div class="chart-title">Cumulative deaths by division / city corporation</div><div class="chart-wrap"><canvas id="divisionCumDeaths"></canvas></div></div></div>
          <div class="col-12"><div class="table-card"><div class="chart-title">Division summary</div><div class="table-responsive"><table id="divisionTable" class="table table-bordered"></table></div></div></div>
        </div>
      </div>

      <div id="monthlyPanel" class="panel d-none">
        <div class="section-head"><div><h2>Monthly trends</h2><p>Reported dengue cases and confirmed deaths by month in 2026.</p></div></div>
        <div class="row g-3">
          <div class="col-lg-8"><div class="chart-card"><div class="chart-title">Monthly dengue cases</div><div class="chart-wrap tall"><canvas id="monthlyCases"></canvas></div></div></div>
          <div class="col-lg-4"><div class="chart-card"><div class="chart-title">Monthly deaths</div><div class="chart-wrap tall"><canvas id="monthlyDeaths"></canvas></div></div></div>
        </div>
      </div>

      <div id="tablesPanel" class="panel d-none">
        <div class="section-head"><div><h2>Report tables</h2><p>Search, sort and inspect the detailed figures.</p></div></div>
        <div class="table-card">
          <div class="table-responsive"><table id="mainTable" class="table table-bordered table-hover"></table></div>
        </div>
      </div>

      <div class="source" id="source">
        <strong><i class="bi bi-info-circle me-1"></i> Source &amp; reporting note</strong><br>
        Directorate General of Health Services (DGHS), Management Information System (MIS),
        Health Emergency Operation Center &amp; Control Room. Report date: 10-Aug-2026.
        This dashboard redesign preserves the figures and terminology from the supplied report.
      </div>
    </main>

    <footer class="footer">
      <strong>DGHS · Health Emergency Operation Center &amp; Control Room</strong><br>
      Mohakhali, Dhaka-1212 · Hotline: 01759-114488 · Telephone: 02-222285933, 02-222297353
    </footer>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.9/dist/chart.umd.min.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>

<script>
const C={blue:'#1677c8',blue2:'#38a3e8',red:'#e53935',green:'#18a673',dark:'#102a43',grid:'#e8eef3'};
Chart.defaults.font.family='Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Arial,sans-serif';
Chart.defaults.font.size=11; Chart.defaults.color='#66788a';

function chart(id,type,labels,data,color,opts={}){
  return new Chart(document.getElementById(id),{
    type,data:{labels,datasets:[{data,label:'Value',backgroundColor:color,borderColor:color,borderWidth:2,borderRadius:type==='bar'?5:0,fill:type==='line'?false:undefined,tension:.35}]},
    options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false}},y:{beginAtZero:true,grid:{color:C.grid}}},...opts}
  });
}
function doughnut(id,labels,data){
  return new Chart(document.getElementById(id),{type:'doughnut',data:{labels,datasets:[{data,backgroundColor:[C.blue,C.red],borderWidth:3,borderColor:'#fff'}]},options:{responsive:true,maintainAspectRatio:false,cutout:'68%',plugins:{legend:{position:'bottom'}}}});
}
chart('cases24','bar',['Admitted'],[726],C.blue);
chart('deaths24','bar',['Deaths'],[0],C.red);
chart('division24','bar',['Barishal','Chattogram','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],[75,81,101,83,107,37,65,172,5],C.blue,{indexAxis:'y'});
chart('divisionDeaths24','bar',['Barishal','Chattogram','Dhaka out CC','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],[7,5,1,7,20,10,6,3,1,1],C.red,{indexAxis:'y'});
doughnut('gender24',['Male','Female'],[65.3,34.7]);
doughnut('genderCum',['Male','Female'],[61.6,38.4]);
chart('divisionCum','bar',['Barishal','Chattogram','Dhaka out CC','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],[3899,3397,2658,2250,2775,2649,885,835,603,120],C.blue,{indexAxis:'y'});
chart('divisionCumDeaths','bar',['Barishal','Chattogram','Dhaka out CC','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],[7,5,1,7,20,10,6,3,1,1],C.red,{indexAxis:'y'});
chart('monthlyCases','line',['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug'],[1081,409,353,640,714,2907,9206,4761],C.blue,{elements:{point:{radius:4,hoverRadius:6}}});
chart('monthlyDeaths','bar',['Jan','Feb','May','Jun','Jul','Aug'],[2,2,1,13,36,7],C.red);

const age24=[['0-5',22,11,33],['06-10',20,15,35],['11-15',33,10,43],['16-20',60,29,89],['21-25',87,33,120],['26-30',66,30,96],['31-35',51,30,81],['36-40',40,28,68],['41-45',24,24,48],['46-50',23,16,39],['51-55',15,6,21],['56-60',12,14,26],['61-65',10,4,14],['66-70',7,1,8],['76-80',4,1,5],['Grand Total',474,252,726]];
const ageCum=[['0-5',590,472,1063],['06-10',583,477,1061],['11-15',826,512,1338],['16-20',1748,907,2655],['21-25',1800,950,2751],['26-30',1844,955,2799],['31-35',1178,810,1988],['36-40',1042,744,1787],['41-45',762,534,1296],['46-50',619,476,1096],['51-55',415,279,694],['56-60',389,266,655],['61-65',236,159,395],['66-70',170,91,261],['71-75',66,35,101],['76-80',56,16,72],['80+',38,17,55],['Grand Total',12364,7702,20071]];
const deathCum=[['0-5',1,2,3],['06-10',1,1,2],['11-15',2,2,4],['16-20',1,1,2],['21-25',1,3,4],['26-30',5,5,10],['31-35',1,6,7],['36-40',4,2,6],['41-45',0,4,4],['46-50',2,5,7],['51-55',2,2,4],['56-60',0,2,2],['61-65',0,3,3],['71-75',2,1,3],['Grand Total',22,39,61]];
const divisions=[['Dhaka Division',346,0,7845,28,7276,541],['Mymensingh Division',37,0,885,6,761,118],['Chattogram Division',81,0,3397,5,3285,107],['Khulna Division',107,0,2649,12,2339,298],['Rajshahi Division',65,0,835,1,761,73],['Rangpur Division',10,0,441,1,417,23],['Barishal Division',75,0,3899,7,3614,278],['Sylhet Division',5,0,120,1,114,5],['National Total',726,0,20071,61,18567,1443]];

function buildTable(id,headers,rows){
 const el=document.getElementById(id);
 el.innerHTML='<thead><tr>'+headers.map(h=>`<th>${h}</th>`).join('')+'</tr></thead><tbody>'+
 rows.map(r=>'<tr>'+r.map(v=>`<td>${typeof v==='number'?v.toLocaleString():v}</td>`).join('')+'</tr>').join('')+'</tbody>';
 new DataTable('#'+id,{pageLength:10,language:{search:'',searchPlaceholder:'Search…'}});
}
buildTable('age24Table',['Age group','Male','Female','Total'],age24);
buildTable('ageCumTable',['Age group','Male','Female','Total'],ageCum);
buildTable('deathCumTable',['Age group','Male','Female','Total'],deathCum);
buildTable('divisionTable',['Division','24h new','24h deaths','Cumulative cases','Cumulative deaths','Discharged','Currently admitted'],divisions);
buildTable('mainTable',['Division','24h new','24h deaths','Cumulative cases','Cumulative deaths','Discharged','Currently admitted'],divisions);

document.querySelectorAll('.report-tabs button').forEach(btn=>{
 btn.addEventListener('click',()=>{
   document.querySelectorAll('.report-tabs button').forEach(b=>b.classList.remove('active'));
   btn.classList.add('active');
   document.querySelectorAll('.panel').forEach(p=>p.classList.add('d-none'));
   document.getElementById(btn.dataset.section).classList.remove('d-none');
   window.scrollTo({top:0,behavior:'smooth'});
 });
});
document.querySelectorAll('.side-nav a').forEach(a=>{
 a.addEventListener('click',()=>{document.querySelectorAll('.side-nav a').forEach(x=>x.classList.remove('active'));a.classList.add('active');});
});
function toggleSidebar(){document.body.classList.toggle('sidebar-open')}
</script>
</body>
</html>
