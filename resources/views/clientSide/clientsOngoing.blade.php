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
              <a class="nav-link active" href="ongoing">OnGoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="outgoing">OutGoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="archive" >Archive</a>
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
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit enim minima corporis nihil tempore iusto quos nesciunt laboriosam ea sed.</p>
                          <div class="form-row">
                            <div class="col-md-6"><strong>Started:</strong></div>
                            <div class="col-md-6"><p>2020-03-22</p></div>
                            <div class="col-md-6"><strong>Engineer:</strong></div>
                            <div class="col-md-6"><p>Jason Bovovic</p></div>
                            <div class="col-md-6"><strong>Target date to be finished:</strong></div>
                            <div class="col-md-6"><p>2020-04-22</p></div>
                            <div class="col-md-6"><strong>Location:</strong></div>
                            <div class="col-md-6"><p>1324 Lorem St. Bagbaguin Sta. Maria Bulacan</p></div>
                          </div>
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
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>