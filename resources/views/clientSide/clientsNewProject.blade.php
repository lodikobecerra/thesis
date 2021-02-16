@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')
<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active col-md-offset-4" id="ongoingList" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 col-lg-6 col-md-offset-4" style="margin-top: 12%;">
                    <div class="card justify-content-center">
                      <div class="card-header" style="background-color: #e2e6ea;">
                        <h4>{{$project->project_name}}</h4>
                        <div class="card-header-action">
                          <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                          <div class="btn-group dropleft">
                            <a href="#" data-toggle="dropdown" title="Option" style="padding-left: 8px; color: black;"><i class="fas fa-ellipsis-v"></i></a>                 
                            <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a class="dropdown-item" href="manageProjects">Manage Project</a>
                              <a class="dropdown-item" href="p-gantt.html">Gantt chart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="collapse show" id="mycard-collapse">
                        <div class="card-body">
                          <h4><span class="badge badge-secondary">{{$project->id}}</span></h4>
                          <div class="form-row">
                            <div class="col-md-6"><strong>Started: {{$project->project_start_date}}</strong></div>
                            <div class="col-md-6"><strong>Engineer: {{$project->project_engineer}}</strong></div>
                            <div class="col-md-6"><strong>Target date to be finished: {{$project->project_end_date}}</strong></div>
                            <div class="col-md-6"><strong>Location: {{$project->project_location}}</strong></div>
                          </div>
                        </div>
                        <div class="card-footer text-center">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create Team</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>                        
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Request Employees Needed</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" >
            {{csrf_field() }}

            <div class="form-row">
              <div class="form-group col md-4">
                <label><i class="fa fas fa-plus"></i></label>
                <div class=""><a href="#" class="btn btn-sm btn-primary">Add</a></div>
              </div>
              <div class="form-group col-md-5">
                <label>Engineer</label>
                <select class="form-control" name="project_engineer" placeholder="Pleace choose an engineer" required>
                  <option value=""disabled selected>Please select an engineer</option>
                  {{-- @foreach($users as $user)
                    <option>{{$user->id}} Engr. {{$user->firstName}} {{$user->lastName}}</option>
                  @endforeach --}}
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Project Name</label>
                <input type="text" class="form-control" name="project_name" placeholder="Enter Project Name" required>
                
              </div>
              
            </div>
            <br>
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="submit" class="btn btn-primary">Request Number of Workers</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


