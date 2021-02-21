<title>My Ongoing Projects</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <ul class="nav nav-pills" id="myTab3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="myOngoing">OnGoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">OutGoing Projects</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
              <div class="row">
                  @foreach($projects as $project)
                  <div class="col-md-6 col-sm-12">
                    <div class="card">  
                      <div class="card-header" style="background-color: #e2e6ea;">
                        <h4>{{$project->project_name}}</h4>
                        <div class="card-header-action">
                          <div class="btn-group dropleft">
                            <a href="#" data-toggle="dropdown" title="Option" style="padding-left: 8px; color: black;"><i class="fas fa-ellipsis-v"></i></a>                 
                            <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a class="dropdown-item" href="#">Edit</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="collapse show" id="mycard-collapse">
                        <div class="card-body">
                          <h4><span class="badge badge-secondary">
                            {{$project->id}}
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
                    </div>
                  </div>
                  @endforeach  
              </div>
            </div>
                
        </div>
      </div>
    </div>
  </section>
</div>