<title>New Project</title>

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
                <a class="nav-link" href="myOngoing">OnGoing Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">OutGoing Projects</a>
              </li>
            </ul>
  
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="ongoingList" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6">
                      <div class="card">
                        <div class="card-header" style="background-color: #e2e6ea;">
                          <h4>Project Alpha</h4>
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
                            <h4><span class="badge badge-secondary">AB2FNU</span></h4>
                            
                            <div class="form-row">
                              <div class="col-md-6"><strong>Started:</strong></div>
                              <div class="col-md-6"><strong>Engineer:</strong></div>
                              <div class="col-md-6"><strong>Target date to be finished:</strong></div>
                              <div class="col-md-6"><strong>Location:</strong></div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <button data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-primary">Create Team</button>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Form Team</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
      </div>
    </div>
  </div>
</div>