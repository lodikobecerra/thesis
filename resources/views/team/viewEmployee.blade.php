@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-12 ml-1 mb-2">
                  <a class=" btn btn-secondary btn-rounded" href="{{url('team')}}">Project Teams</a>
                </div>
                <div class="col-xs-12 ml-1 mb-2">
                  <a class="btn btn-primary btn-rounded " href="{{url('employeeList')}}">List of Employees</a>
                </div>
                <div class=" col-xs-12 ml-1 mb-2">
                  <a class="btn btn-secondary btn-rounded text-white"  data-toggle="modal"
                    data-target=".bd-example-modal-lg">Add Workforce</a>
                </div>
                <div class="dropdown d-inline ml-auto">
                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employee Positions
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
            <div class="tab-pane fade show active col-md-offset-4" id="ongoingList" role="tabpanel" aria-labelledby="home-tab">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-6 col-md-offset-4" style="margin-top: 12%;">
                  <div class="card justify-content-center">
                    <div class="card-header" style="background-color: #e2e6ea;">
                      <h4>Employee Information</h4>
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                      <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="{{$employee->last_name}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="{{$employee->first_name}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" value="{{$employee->middle_name}}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Position</label>
                                <input type="text" class="form-control" value="{{$employee->position}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Age</label>
                                <input type="text" class="form-control" value="{{$employee->age}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Gender</label>
                                <input type="text" class="form-control" value="{{$employee->gender}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Birthday</label>
                                <input type="text" class="form-control" value="{{$employee->birth_month." ".$employee->birth_day." ".$employee->birth_year}}" readonly>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" value="{{$employee->contact_number}}" readonly>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Status</label>
                                <input type="text" class="form-control" value="{{$employee->status}}" readonly>
                            </div>
                            <div class="form-group col-md-8">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{$employee->address}}" readonly>
                            </div>
                        </div> 
                      </div>
                      <div class="card-footer text-right">
                        <button type="button" class="btn btn-primary">Edit</button>
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
</div>