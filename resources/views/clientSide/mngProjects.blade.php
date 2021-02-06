<title>Manage Projects</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                
                <div id="gantt_here" style='width:100%; height:250px;'></div>
                    <script type="text/javascript">
                        /* chart configuration and initialization */
                        gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";
                        gantt.config.step = 1;
                        gantt.config.scale_unit= "day";
                        gantt.init("gantt_here", new Date(2021,1,1), new Date(2050,12,31));
                        /* refers to the 'data' action that we will create in the next substep */
                        gantt.load("./gantt_data", "xml");
                        /* refers to the 'data' action as well */
                        var dp = new gantt.dataProcessor("./gantt_data");
                        dp.init(gantt);
                    </script>
                {{-- <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Project name</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">Add task</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4><span class="badge badge-secondary">
                                    Project code
                                </span></h4>
                            <p>This is a task detail</p>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>