<title>Manage Projects</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div id="gantt_here" style='width:100%; height:750px;'></div>
                <script type="text/javascript">
                    gantt.config.date_format = "%Y-%m-%d %H:%i:%s";
 
                    gantt.init("gantt_here", new Date(2020,1,1), new Date(2025,11,31));
 
                    gantt.load("/api/data");  

                    var dp = new gantt.dataProcessor("/api");

                    dp.init(gantt);

                    // dp.setTransactionMode("REST");
                </script>
            </div>
        </div>
    </section>
</div>