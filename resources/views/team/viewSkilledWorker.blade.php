<title>Skilled Workers</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
    <section class="section">
      <div class="section-body">
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-xs-12 ml-1 mb-2">
                <a class=" btn btn-secondary btn-rounded" href="team">Project Teams</a>
              </div>
              <div class="col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded " href="employeeList">List of Employees</a>
              </div>
              <div class=" col-xs-12 ml-1 mb-2">
                <a class="btn btn-secondary btn-rounded text-white"  data-toggle="modal"
                  data-target=".bd-example-modal-lg">Add Workforce</a>
              </div>
              <div class="dropdown d-inline ml-auto">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Equipments Type
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="foreman">Foreman</a>
                  <a class="dropdown-item" href="mason">Mason</a>
                  <a class="dropdown-item" href="labor">Labor</a>
                  <a class="dropdown-item" href="welder">Welder</a>
                  <a class="dropdown-item" href="paintor">Paintor</a>
                  <a class="dropdown-item" href="skilledWorker">Skilled Worker</a>
                  <a class="dropdown-item" href="backhoeOperator">Backhoe Operator</a>
                  <a class="dropdown-item" href="payLoaderOperator">Payloader Operator</a>
                  <a class="dropdown-item" href="truckDriver">Truck Driver</a>
                </div>
              </div>
            </div>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="trucks" role="tabpanel" aria-labelledby="trucks-tab">
                    
                        <div class="card">
                            <div class="card-header">
                                <h4>L.R.Tiqui Builders Employees</h4>
                                <div class="card-header-form">
                                  {{-- <form>
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search">
                                      <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                      </div>
                                    </div>
                                  </form> --}}
                                </div>
                            </div>
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                  </div>
                                    <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teams as $team)
                                            <tr>
                                                <td><span class="badge badge-secondary">{{$team->employee_num}}</span></td></span>
                                                <td><span>{{$team->first_name}} {{$team->last_name}} {{$team->middle_name}}</span></td>
                                                <td><span>{{$team->position}}</span></td>
                                                @if ($team->status == 'available')
                                                <td><span class="badge badge-success">{{$team->status}}</span></td>
                                                @endif
                                                <td>
                                                  <a href="/getEmployeeDetails/{{ $team->employee_num }}" class="btn btn-primary">View</a>
                                                  <a href="#" class="btn btn-success">Send To</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> --> 
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/addWorkforce" method="post" >
                {{csrf_field()}}
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="first_name" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="last_name" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Middle Name</label>
                      <input type="text" class="form-control" name="middle_name" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Position</label>
                      <select class="form-control" name="position" required>
                        <option value=""disabled selected>Please select position</option>
                        @foreach ($positions as $position)
                          <option>{{$position->position}}</option>    
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Age</label>
                      <input type="text" class="form-control" name="age" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Gender</label>
                      <select class="form-control" name="gender" required>
                        <option value=""disabled selected>Select an gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Birth Month</label>
                      <select class="form-control" name="birth_month" required>
                        <option value=""disabled selected>Select Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Birth Day</label>
                      <select class="form-control" name="birth_day" required>
                        <option value=""disabled selected>Select Day</option>
                        @for($i=1;$i<=31;$i++)
                        {
                          <option>{{$i}}</option>
                        }
                        @endfor
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Birth Year</label>
                      <select class="form-control" name="birth_year" required>
                        <option value=""disabled selected>Select Year</option>
                        @for($i=2020;$i>=1950;$i--)
                        {
                          <option>{{$i}}</option>
                        }
                        @endfor
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Contact Number</label>
                      <input type="number" class="form-control" name="contact_number" required>
                    </div>
                    <div class="form-group col-md-8">
                      <label for="inputAddress2">Address</label>
                      <input type="text" class="form-control" name="address" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group compose-editor col-md-4 m-t-5">
                      <label>Resume</label>
                      <div id="summernote"></div>
                      <input type="file" class="default" multiple name="resume_file">
                    </div>
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>