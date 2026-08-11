<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily Dengue Press Release — 10-Aug-2026</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables -->
  <link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" rel="stylesheet">

  <style>
    :root{
      --brand:#337fb9;
      --brand-dark:#286b9f;
      --blue:#337fb9;
      --red:#ff1717;
      --ink:#2d2f34;
      --muted:#6c757d;
      --line:#dfe5ea;
      --soft:#f7f9fb;
    }
    body{
      margin:0;
      background:#fff;
      color:var(--ink);
      font-family:Arial, Helvetica, sans-serif;
      font-size:14px;
    }
    .report-header{
      background:var(--brand);
      color:#fff;
      padding:18px 15px 16px;
      text-align:center;
    }
    .seal{
      width:54px;height:54px;border-radius:50%;
      margin:0 auto 6px;
      background:#fff;
      border:3px solid #e7d18b;
      display:flex;align-items:center;justify-content:center;
      color:#c49b2d;font-weight:800;font-size:22px;
      box-shadow:0 1px 5px rgba(0,0,0,.2);
    }
    .report-header h1{font-size:16px;margin:0;font-weight:700;line-height:1.12}
    .report-header p{margin:2px 0;font-size:13px;font-weight:600;line-height:1.1}
    .report-date{
      color:#ff1d1d;
      text-align:center;
      font-weight:700;
      margin:10px 0 12px;
    }
    .container-report{max-width:1200px}
    .kpi{
      min-height:105px;
      display:flex;align-items:center;justify-content:center;
      text-align:center;
      border-right:1px solid #ddd;
      position:relative;
    }
    .kpi:last-child{border-right:0}
    .kpi .icon{font-size:31px;line-height:1;margin-bottom:6px}
    .kpi .label{font-size:11px;color:#555;line-height:1.1}
    .kpi .value{font-size:24px;font-weight:800}
    .kpi .prefix{font-size:12px;color:#1770aa;margin-right:4px}
    .section-title{
      border-top:2px solid #2389cc;
      margin:14px 0 0;
      padding:8px 6px 7px;
      text-align:center;
      font-weight:700;
      font-size:14px;
      background:#fff;
    }
    .chart-card{
      background:#fff;
      border:1px solid #edf0f2;
      border-radius:2px;
      padding:5px 8px 10px;
      height:100%;
    }
    .chart-wrap{position:relative;height:310px}
    .chart-wrap.tall{height:360px}
    .chart-wrap.small{height:270px}
    .table-card{height:100%}
    table.dataTable thead th{
      background:var(--brand)!important;
      color:#fff!important;
      font-weight:500;
      font-size:12px;
    }
    table.dataTable tbody td{font-size:12px;vertical-align:middle}
    .compact-table td,.compact-table th{padding:.32rem .45rem!important}
    .grand-total{font-weight:800;background:#f0f3f5!important}
    .nav-pills .nav-link{color:#2d5f86}
    .nav-pills .nav-link.active{background:var(--brand)}
    .filter-box{
      background:var(--soft);
      border:1px solid var(--line);
      border-radius:6px;
      padding:12px;
    }
    .footer{
      margin-top:30px;
      background:#f5f7f9;
      border-top:1px solid #dfe4e8;
      padding:16px;
      color:#666;
      font-size:12px;
    }
    .legend-dot{
      display:inline-block;width:9px;height:9px;border-radius:50%;margin-right:5px;
    }
    .dot-blue{background:var(--blue)} .dot-red{background:var(--red)}
    .sticky-top-tabs{position:sticky;top:0;z-index:1030;background:#fff;border-bottom:1px solid #ddd}
    @media (max-width:767px){
      body{font-size:13px}
      .kpi{min-height:90px;border-right:0;border-bottom:1px solid #eee}
      .kpi .value{font-size:21px}
      .chart-wrap{height:280px}
      .chart-wrap.tall{height:320px}
      .report-header h1{font-size:14px}
      .report-header p{font-size:11px}
      .section-title{font-size:13px}
    }
  </style>
</head>

<body>
<header class="report-header">
  <div class="seal">BD</div>
  <h1>Government of the People's Republic of Bangladesh</h1>
  <p>Directorate General of Health Services (DGHS)</p>
  <p>Management Information System (MIS)</p>
  <p>Health Emergency Operation Center &amp; Control Room</p>
  <p>Daily Dengue Press Release</p>
</header>

<main class="container container-report py-2">
  <div class="report-date">10-Aug-2026</div>

  <div class="sticky-top-tabs py-2">
    <ul class="nav nav-pills justify-content-center gap-1" id="reportTabs">
      <li class="nav-item"><button class="nav-link active" data-target="#dashboard">Dashboard</button></li>
      <li class="nav-item"><button class="nav-link" data-target="#age">Age &amp; Gender</button></li>
      <li class="nav-item"><button class="nav-link" data-target="#geography">Division &amp; City</button></li>
      <li class="nav-item"><button class="nav-link" data-target="#monthly">Monthly</button></li>
      <li class="nav-item"><button class="nav-link" data-target="#tables">Report Tables</button></li>
    </ul>
  </div>

  <section id="dashboard" class="report-section">
    <div class="row g-0 border-bottom">
      <div class="col-6 col-md-3 kpi">
        <div><div class="icon">👤+</div><div class="label">Weekly Case<br><span class="text-primary">W32</span></div><div class="value">1,398</div></div>
      </div>
      <div class="col-6 col-md-3 kpi">
        <div><div class="icon">🩺</div><div class="label">Weekly Death</div><div class="value">2</div></div>
      </div>
      <div class="col-6 col-md-3 kpi">
        <div><div class="icon">🧑‍⚕️+</div><div class="label">Cumulative Case</div><div class="value">20,071</div></div>
      </div>
      <div class="col-6 col-md-3 kpi">
        <div><div class="icon">☠</div><div class="label">Cumulative Death</div><div class="value">61</div></div>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-lg-6">
        <div class="section-title">Dengue cases of last 24 hours</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="last24Cases"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Dengue death of last 24 hours</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="last24Deaths"></canvas></div></div>
      </div>
    </div>

    <div class="section-title">Division &amp; City corporation cases of last 24 hours</div>
    <div class="chart-card"><div class="chart-wrap tall"><canvas id="division24"></canvas></div></div>

    <div class="row g-3 mt-1">
      <div class="col-lg-4">
        <div class="section-title">Division &amp; City corporation deaths of last 24 hours</div>
        <div class="chart-card"><div class="chart-wrap small"><canvas id="death24Division"></canvas></div></div>
      </div>
      <div class="col-lg-4">
        <div class="section-title">Age group distribution of affected cases of last 24 hours</div>
        <div class="chart-card table-card"><div class="table-responsive"><table class="table table-striped table-bordered compact-table mb-0" id="age24Table"></table></div></div>
      </div>
      <div class="col-lg-4">
        <div class="section-title">Age group distribution of deaths of last 24 hours</div>
        <div class="chart-card table-card"><div class="table-responsive"><table class="table table-striped table-bordered compact-table mb-0" id="deathAge24Table"></table></div></div>
      </div>
    </div>
  </section>

  <section id="age" class="report-section d-none">
    <div class="row g-3">
      <div class="col-lg-6">
        <div class="section-title">Gender distribution of affected cases — last 24 hours</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="gender24"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Discharged</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="discharged"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Total Dengue cases from 1 January to till date</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="cumCases"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Total Dengue deaths from 1 January to till date</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="cumDeaths"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Gender distribution of affected cases from 1 January to till date in 2026</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="genderCumCases"></canvas></div></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Gender distribution of deaths from 1 January to till date in 2026</div>
        <div class="chart-card"><div class="chart-wrap"><canvas id="genderCumDeaths"></canvas></div></div>
      </div>
    </div>

    <div class="row g-3 mt-1">
      <div class="col-lg-6">
        <div class="section-title">Age group distribution of affected cases from 1 January to till date in 2026</div>
        <div class="table-responsive"><table id="ageCumTable" class="table table-striped table-bordered"></table></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Age group distribution of deaths from 1 January to till date in 2026</div>
        <div class="table-responsive"><table id="deathCumTable" class="table table-striped table-bordered"></table></div>
      </div>
    </div>
  </section>

  <section id="geography" class="report-section d-none">
    <div class="section-title">Division &amp; City corporation wise reported cases from 1 January to till date</div>
    <div class="chart-card"><div class="chart-wrap tall"><canvas id="divisionCum"></canvas></div></div>

    <div class="section-title">Division &amp; City corporation wise deaths from 1 January to till date</div>
    <div class="chart-card"><div class="chart-wrap tall"><canvas id="divisionCumDeaths"></canvas></div></div>

    <div class="row g-3 mt-1">
      <div class="col-lg-6">
        <div class="section-title">Division summary — current report</div>
        <div class="table-responsive"><table id="divisionTable" class="table table-striped table-bordered"></table></div>
      </div>
      <div class="col-lg-6">
        <div class="section-title">Last 24-hour division cases</div>
        <div class="table-responsive"><table id="division24Table" class="table table-striped table-bordered"></table></div>
      </div>
    </div>
  </section>

  <section id="monthly" class="report-section d-none">
    <div class="section-title">Monthly Dengue cases by Month</div>
    <div class="chart-card"><div class="chart-wrap tall"><canvas id="monthlyCases"></canvas></div></div>

    <div class="section-title">Monthly Dengue confirmed deaths by Month</div>
    <div class="chart-card"><div class="chart-wrap"><canvas id="monthlyDeaths"></canvas></div></div>

    <div class="alert alert-light border mt-3">
      <strong>Source:</strong> DGHS Health Emergency Operation Center &amp; Control Room. Report date: 10-Aug-2026.
      The PDF states that the system-generated report does not require a signature.
    </div>
  </section>

  <section id="tables" class="report-section d-none">
    <div class="filter-box mb-3">
      <div class="row align-items-end g-2">
        <div class="col-md-8">
          <label class="form-label mb-1"><strong>Report table search</strong></label>
          <input id="globalSearch" class="form-control" placeholder="Search hospital, division, district, or value...">
        </div>
        <div class="col-md-4">
          <div class="small text-muted">Interactive DataTables search, sort and pagination.</div>
        </div>
      </div>
    </div>

    <div class="section-title">Division-level summary</div>
    <div class="table-responsive"><table id="mainReportTable" class="table table-striped table-bordered"></table></div>

    <div class="section-title mt-4">Key government / hospital totals reported in the PDF</div>
    <div class="table-responsive"><table id="hospitalTotalsTable" class="table table-striped table-bordered"></table></div>
  </section>
</main>

<footer class="footer">
  <div class="container container-report">
    <div><strong>Directorate General of Health Services (DGHS) — MIS</strong></div>
    <div>Health Emergency Operation Center &amp; Control Room, Mohakhali, Dhaka-1212</div>
    <div>Hotline: 01759-114488 &nbsp; | &nbsp; Telephone: 02-222285933, 02-222297353 &nbsp; | &nbsp; Email: controlroomdghs@yahoo.com</div>
  </div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.9/dist/chart.umd.min.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>

<script>
const BLUE = '#337fb9', LIGHTBLUE = '#36a9e1', RED = '#ff1717', DARK = '#44454d';
Chart.defaults.font.family = 'Arial, Helvetica, sans-serif';
Chart.defaults.font.size = 11;
Chart.defaults.color = '#444';

function bar(id, labels, data, color=BLUE, horizontal=false){
  return new Chart(document.getElementById(id),{
    type:'bar',
    data:{labels,datasets:[{label:'No.',data,backgroundColor:color,borderColor:color,borderWidth:1}]},
    options:{
      responsive:true, maintainAspectRatio:false,
      indexAxis: horizontal ? 'y':'x',
      plugins:{legend:{display:false},tooltip:{mode:'index',intersect:false}},
      scales:{x:{grid:{color:'#e8edf1'}},y:{beginAtZero:true,grid:{color:'#e8edf1'}}}
    }
  });
}
function doughnut(id, labels, data){
  return new Chart(document.getElementById(id),{
    type:'doughnut',
    data:{labels,datasets:[{data,backgroundColor:['#79afe1',DARK],borderColor:'#fff',borderWidth:1}]},
    options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'right'},tooltip:{callbacks:{label:c=>`${c.label}: ${c.raw}%`}}}}
  });
}

bar('last24Cases',['Admitted'],[726],BLUE);
bar('last24Deaths',['Death'],[0],RED);
bar('division24',
  ['Barishal Division','Chattogram Division','DNCC','DSCC','Khulna Division','Mymensingh Division','Rajshahi Division','Rangpur Division','Sylhet Division'],
  [75,81,101,83,107,37,65,172,5], BLUE);
bar('death24Division',
  ['Barishal','Chattogram','Dhaka (Out of CC)','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],
  [7,5,1,7,20,10,6,3,1,1], RED);

doughnut('gender24',['Male','Female'],[65.3,34.7]);
bar('discharged',['Last 24 hours','1 Jan–Till date'],[724,18567],LIGHTBLUE);
bar('cumCases',['Admitted'],[20071],BLUE);
bar('cumDeaths',['Death'],[61],RED);
doughnut('genderCumCases',['Male','Female'],[61.6,38.4]);
doughnut('genderCumDeaths',['Male','Female'],[36.1,63.9]);

bar('divisionCum',
 ['Barishal','Chattogram','Dhaka (Out of CC)','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],
 [3899,3397,2658,2250,2775,2649,885,835,603,120], BLUE);
bar('divisionCumDeaths',
 ['Barishal','Chattogram','Dhaka (Out of CC)','DNCC','DSCC','Khulna','Mymensingh','Rajshahi','Rangpur','Sylhet'],
 [7,5,1,7,20,10,6,3,1,1], RED);
bar('monthlyCases',['January','February','March','April','May','June','July','August'],[1081,409,353,640,714,2907,9206,4761],BLUE);
bar('monthlyDeaths',['January','February','May','June','July','August'],[2,2,1,13,36,7],RED);

const age24 = [
['0-5',22,11,33],['06-10',20,15,35],['11-15',33,10,43],['16-20',60,29,89],
['21-25',87,33,120],['26-30',66,30,96],['31-35',51,30,81],['36-40',40,28,68],
['41-45',24,24,48],['46-50',23,16,39],['51-55',15,6,21],['56-60',12,14,26],
['61-65',10,4,14],['66-70',7,1,8],['76-80',4,1,5],['Grand Total',474,252,726]
];
const ageDeaths24 = [['Grand Total',0,0,0]];

const ageCum = [
['0-5',590,472,1063],['06-10',583,477,1061],['11-15',826,512,1338],['16-20',1748,907,2655],
['21-25',1800,950,2751],['26-30',1844,955,2799],['31-35',1178,810,1988],['36-40',1042,744,1787],
['41-45',762,534,1296],['42309',1,1,2],['46-50',619,476,1096],['46301',0,1,1],
['51-55',415,279,694],['56-60',389,266,655],['61-65',236,159,395],['66-70',170,91,261],
['71-75',66,35,101],['76-80',56,16,72],['80+',38,17,55],['Grand Total',12364,7702,20071]
];
const deathCum = [
['0-5',1,2,3],['06-10',1,1,2],['11-15',2,2,4],['16-20',1,1,2],['21-25',1,3,4],
['26-30',5,5,10],['31-35',1,6,7],['36-40',4,2,6],['41-45',0,4,4],['46-50',2,5,7],
['51-55',2,2,4],['56-60',0,2,2],['61-65',0,3,3],['71-75',2,1,3],['Grand Total',22,39,61]
];

function makeTable(selector, rows){
  const table = document.querySelector(selector);
  table.innerHTML = `<thead><tr><th>Age Group</th><th>Male</th><th>Female</th><th>Total</th></tr></thead>
  <tbody>${rows.map(r=>`<tr>${r.map((v,i)=>`<td class="${r[0]==='Grand Total'?'grand-total':''}">${typeof v==='number'?v.toLocaleString():v}</td>`).join('')}</tr>`).join('')}</tbody>`;
}
makeTable('#age24Table',age24);
makeTable('#deathAge24Table',ageDeaths24);
makeTable('#ageCumTable',ageCum);
makeTable('#deathCumTable',deathCum);

const divisions = [
['Dhaka Division',346,0,7845,28,7276,541],
['Mymensingh Division',37,0,885,6,761,118],
['Chattogram Division',81,0,3397,5,3285,107],
['Khulna Division',107,0,2649,12,2339,298],
['Rajshahi Division',65,0,835,1,761,73],
['Rangpur Division',10,0,441,1,417,23],
['Barishal Division',75,0,3899,7,3614,278],
['Sylhet Division',5,0,120,1,114,5],
['National Total',726,0,20071,61,18567,1443]
];

const division24 = [
['Barishal Division',75],['Chattogram Division',81],['DNCC',101],['DSCC',83],
['Khulna Division',107],['Mymensingh Division',37],['Rajshahi Division',65],['Rangpur Division',172],['Sylhet Division',5]
];

function fillDivisionTable(){
  const headers=['Division','24h New Admitted','24h Death','Cumulative Admitted','Cumulative Death','Discharged','Currently Admitted'];
  document.querySelector('#divisionTable').innerHTML =
    `<thead><tr>${headers.map(h=>`<th>${h}</th>`).join('')}</tr></thead><tbody>`+
    divisions.map(r=>`<tr>${r.map((v,i)=>`<td class="${r[0]==='National Total'?'grand-total':''}">${typeof v==='number'?v.toLocaleString():v}</td>`).join('')}</tr>`).join('')+
    `</tbody>`;
  document.querySelector('#division24Table').innerHTML =
    `<thead><tr><th>Division / City Corporation</th><th>24h New Admitted</th></tr></thead><tbody>`+
    division24.map(r=>`<tr><td>${r[0]}</td><td>${r[1]}</td></tr>`).join('')+
    `</tbody>`;
}
fillDivisionTable();

const hospitalTotals = [
['Government & autonomous hospitals','142','3,893','27','3,644','222'],
['Private clinics / hospitals','42','1,133','0','1,047','86'],
['Combined Dhaka hospital total','184','5,026','27','4,691','308'],
['All Bangladesh current total','726','20,071','61','18,567','1,443']
];
document.querySelector('#hospitalTotalsTable').innerHTML =
 `<thead><tr><th>Category</th><th>24h New</th><th>Total Admitted</th><th>Deaths</th><th>Discharged</th><th>Currently Admitted</th></tr></thead><tbody>`+
 hospitalTotals.map(r=>`<tr>${r.map((v,i)=>`<td class="${i===0?'fw-semibold':''}">${v}</td>`).join('')}</tr>`).join('')+
 `</tbody>`;

const mainDT = new DataTable('#mainReportTable',{pageLength:10,order:[[0,'asc']]});
const hospitalDT = new DataTable('#hospitalTotalsTable',{pageLength:10,searching:false});
new DataTable('#ageCumTable',{pageLength:20,searching:true});
new DataTable('#deathCumTable',{pageLength:20,searching:true});
new DataTable('#age24Table',{paging:false,searching:false,info:false});
new DataTable('#deathAge24Table',{paging:false,searching:false,info:false});
new DataTable('#divisionTable',{pageLength:10});
new DataTable('#division24Table',{paging:false,searching:false,info:false});

document.getElementById('globalSearch').addEventListener('input',e=>{
  mainDT.search(e.target.value).draw();
  hospitalDT.search(e.target.value).draw();
});

document.querySelectorAll('#reportTabs .nav-link').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('#reportTabs .nav-link').forEach(x=>x.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.report-section').forEach(x=>x.classList.add('d-none'));
    document.querySelector(btn.dataset.target).classList.remove('d-none');
    window.scrollTo({top:0,behavior:'smooth'});
  });
});
</script>
</body>
</html>
