<title>Gantt Chart</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
          <div class="" id="myTab3" role="tablist">
            <div class="row">
              <div class="col-xs-12 ml-1 mb-2">
                <a class=" btn btn-secondary btn-rounded" href="ongoing_projects">OnGoing Projects</a>
              </div>
              <div class="col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded " href="outgoing_projects">OutGoing Projects</a>
              </div>
              <div class=" col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded " href="archive_projects" >Archive</a>
              </div>
              <div class=" col-xs-12 ml-1 mb-2">
                <a class="btn btn-primary btn-rounded " href="project_status" >Project Status</a>
              </div>
              <div class=" col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded text-white"  data-toggle="modal"
                  data-target=".bd-example-modal-lg">Add Project</a>
              </div>
            </div>
          </div>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
                <div class="row">
                    {{-- <div class="gantt_control">
                        <script>
                            function changeSkin(name) {
                                var link = document.createElement("link");
                    
                                link.onload = function () {
                                    gantt.resetSkin();
                                    gantt.render();
                                };
                    
                                link.rel = "stylesheet";
                                link.type = "text/css";
                                link.id = "skin";
                                link.href = "../../codebase/skins/dhtmlxgantt_" + name + ".css?v=7.0.13";
                                document.head.replaceChild(link, document.querySelector("#skin"));
                    
                            }
                        </script>
                        <button onclick="changeSkin('terrace')">Terrace</button>
                        <button onclick="changeSkin('skyblue')">Skyblue</button>
                        <button onclick="changeSkin('meadow')">Meadow</button>
                        <button onclick="changeSkin('broadway')">Broadway</button>
                        <button onclick="changeSkin('material')">Material</button>
                        <button onclick="changeSkin('contrast_white')">High contrast light</button>
                        <button onclick="changeSkin('contrast_black')">High contrast dark</button>
                    </div> --}}
                    <div id="gantt_here" style='width:100%; height:750px;'></div>
                        <script type="text/javascript">
                            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

                            gantt.init("gantt_here", new Date(2020,1,1), new Date(2025,11,31));

                            gantt.load("/api/data");  

                            var dp = new gantt.dataProcessor("/api");

                            dp.init(gantt);

                            dp.setTransactionMode("REST");
                        </script>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Large modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Create Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/addProject" method="post" >
            {{csrf_field() }}

              <div class="form-row">
              <div class="form-group col-md-6">
                <label>Project Name</label>
                <input type="text" class="form-control" name="project_name" placeholder="Enter Project Name" required>
                
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Client</label>
                <input type="text" class="form-control" name="project_client"id="inputZip" placeholder="DPWH" disabled="">
              </div>
              <div class="form-group col-md-4">
                <label>Engineer</label>
                <select class="form-control" name="project_engineer" required>
                  <option value=""disabled selected>Please select an engineer</option>
                  @foreach($users as $user)
                    <option>{{$user->id}} Engr. {{$user->firstName}} {{$user->lastName}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group col-md-4">
                <label for="inputZip">Budget</label>
                <input type="number" class="form-control currency" id="inputZip" name="project_budget" placeholder="Enter Budget Allocated" required>
                
              </div>
              <div class="form-group col-md-4">
                <label>Starting Date</label>
                <input type="text" class="form-control datepicker" name="project_start_date">
              </div>
              <div class="form-group col-md-4">
                <label>Ending Date</label>
                <input type="text" class="form-control datepicker" name="project_end_date">
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Description</label>
                <input type="text" class="form-control" name="project_description" placeholder="Enter Project Description">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Location</label>
                <input type="text" class="form-control" name="project_location" placeholder="Enter Project Location" required>
                
                <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="1234 Maint St."> -->
              </div>
            </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="submit" class="btn btn-primary">Create Project</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('[data-dismiss=modal]').on('click', function (e) {
    var $t = $(this),
        target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];

    $(target)
    .find("input,textarea,select")
        .val('')
        .end()
    .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end();
  })
</script>

