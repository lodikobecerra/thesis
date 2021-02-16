<title>Finished Projects</title>

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
                <a class="btn btn-primary btn-rounded " href="archive_projects" >Archive</a>
              </div>
              <div class=" col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded text-white"  data-toggle="modal"
                  data-target=".bd-example-modal-lg">Add Project</a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade show active" id="archive" role="tabpanel" aria-labelledby="archive-tab">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>Project Code</th>
                            <th>Project Name</th>
                            <th>Progress</th>
                            <th>Location</th>
                            <th>Date of Completion</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Project Alpha</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Project Bravo</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Project Charlie</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Project Delta</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Project Echo</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>Project Foxtrot</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>Project Gilbert</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              8
                            </td>
                            <td>Project Harpoon</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              9
                            </td>
                            <td>Project Indigo</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              10
                            </td>
                            <td>Project Johnson</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              11
                            </td>
                            <td>Project Kilua</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                          <tr>
                            <td>
                              12
                            </td>
                            <td>Project Lorem</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>Sta.Maria, Bulacan</td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">View Project</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries
                          
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                          <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                          </ul>
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
                <select class="form-control" name="project_engineer" placeholder="Pleace choose an engineer" required>
                  <option value=""disabled selected>Please select an engineer</option>
                  @foreach($users as $user)
                    <option>{{$user->id}} Engr. {{$user->firstName}} {{$user->lastName}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group col-md-4">
                <label for="number">Budget</label>
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



