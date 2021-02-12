<title>Outgoing Projects</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <ul class="nav nav-pills" id="myTab3" role="tablist">
            <li class="nav-item">
              <a class="nav-link" href="ongoing_projects">OnGoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="outgoing_projects">OutGoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="archive_projects" >Archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="modal"
                      data-target=".bd-example-modal-lg">Add Project</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active">
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-6">
                @foreach($projects as $project)
                  <div class="card">
                  <div class="card-header" style="background-color: #e2e6ea;">
                    <h4>{{$project->project_name}}</h4>
                    <div class="card-header-action">
                      <div class="btn-group dropleft">
                        <a href="#" data-toggle="dropdown" title="Option" style="padding-left: 8px; color: black;"><i class="fas fa-ellipsis-v"></i></a>                 
                        <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                          <a class="dropdown-item" href="manageProjects">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                      <h4><span class="badge badge-secondary">
                        {{$project->project_code}}
                      </span></h4>
                      <p>{{$project->project_description}}</p>
                      <div class="form-row">
                        <div class="col-md-6"><strong>Started:</strong></div>
                        <div class="col-md-6"><p>{{$project->project_start_date}}</p></div>
                        <div class="col-md-6"><strong>Target date to be finished:</strong></div>
                        <div class="col-md-6"><p>{{$project->project_end_date}}</p></div>
                        <div class="col-md-6"><strong>Engineer:</strong></div>
                        <div class="col-md-6"><p>{{$project->project_engineer}}</p></div>
                        <div class="col-md-6"><strong>Location:</strong></div>
                        <div class="col-md-6"><p>{{$project->project_location}}</p></div>
                        <div class="col-md-6"><strong>Budget:</strong></div>
                        <div class="col-md-6"><p>{{$project->project_budget}}</p></div>
                    </div>
                    <div class="card-footer">
                      <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0</div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach                    
              </div>
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
                    <option>{{$user->id}}. Engr. {{$user->first_name}} {{$user->last_name}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group col-md-4">
                <label for="inputZip">Budget</label>
                <input type="text" class="form-control currency" id="inputZip" name="project_budget" placeholder="Enter Budget Allocated" required>
                
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