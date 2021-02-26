@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<div class="main-content" style="min-height: 636px;">
  <section class="section">
    <div class="section-body">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active col-md-offset-4" id="ongoingList" role="tabpanel" aria-labelledby="home-tab">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-6 col-md-offset-4" style="margin-top: 12%;">
                  @if ($notification->data["flag"]=="started")
                  <div class="card justify-content-center">
                    <div class="card-header" style="background-color: #e2e6ea;">
                      <h4>Admin started the Project</h4>
                      
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                      <div class="card-body">
                        <h4><span class="badge badge-secondary">{{$project->id}}</span>{{"  -  ".$project->project_name}}</h4
                        <h4></h4
                        <div class="form-row">
                          <div class="col-md-6"><strong>Started: {{$project->project_start_date}}</strong></div>
                          <div class="col-md-6"><strong>Engineer: {{$project->project_engineer}}</strong></div>
                          <div class="col-md-6"><strong>Target date to be finished: {{$project->project_end_date}}</strong></div>
                          <div class="col-md-6"><strong>Location: {{$project->project_location}}</strong></div>
                        </div>
                      </div>
                      <div class="card-footer text-center">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Request Equipment</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declineModal">Decline</button>
                      </div>
                    </div>
                  @elseif($notification->data["flag"] == "new project")
                  <div class="card justify-content-center">
                    <div class="card-header" style="background-color: #e2e6ea;">
                      <h4>New Project From Admin</h4>
                      
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                      <div class="card-body">
                        <h4><span class="badge badge-secondary">{{$project->id}}</span>{{"  -  ".$project->project_name}}</h4
                        <h4></h4
                        <div class="form-row">
                          <div class="col-md-6"><strong>Started: {{$project->project_start_date}}</strong></div>
                          <div class="col-md-6"><strong>Engineer: {{$project->project_engineer}}</strong></div>
                          <div class="col-md-6"><strong>Target date to be finished: {{$project->project_end_date}}</strong></div>
                          <div class="col-md-6"><strong>Location: {{$project->project_location}}</strong></div>
                        </div>
                      </div>
                      <div class="card-footer text-center">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#acceptModal">Accept</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declineModal">Decline</button>
                      </div>
                    </div>
                  @endif
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Decline Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/declineProject" method="POST">
            {{csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-2">
                <label>Project ID</label>
                <input type="text" class="form-control" name="project_id" value="{{$project->id}}" readonly>
              </div>
              <div class="form-group col-md-10">
                <label>Reason</label>
                <input type="text" class="form-control" name="reason" required>
              </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="submit" class="btn btn-primary">Send</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Propose Budget</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/acceptProject" method="POST">
            {{csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-2">
                <label>Project ID</label>
                <input type="text" class="form-control" name="project_id" value="{{$project->id}}" readonly>
              </div>
              <div class="form-group col-md-5">
                <label>Estimated Budget</label>
                <input type="number" class="form-control" name="budget" required>
              </div>
              <div class="form-group col-md-5">
                <label>Estimated Workers Needed</label>
                <input type="text" class="form-control" name="worker" required>
              </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="submit" class="btn btn-success">Send</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#e2e6ea;">
          <h5 class="modal-title" id="myLargeModalLabel">Request Employees Needed for Project {{$project->id}} ( {{$project->project_name}})</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/employeeRequest" method="POST">
            {{csrf_field() }}
            <button class="add_form_field btn btn-primary">Add New Field &nbsp;</button>
            <div class="container1">
              <div class="form-row">
                <div class="col form-group">
                  <label for="exampleFormControlSelect1">Equipment type</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="type[]">
                    <option>Truck</option>
                    <option>Backhoe</option>
                    <option>Crane</option>
                    <option>Loader</option>
                    <option>Forklift</option>
                  </select>
                </div>
                <div class="col form-group">
                  <label for="exampleFormControlSelect1">Quantity</label>
                  <select class="form-control" id="exampleFormControlSelect2" name="quantity[]">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-whitesmoke br">
            
            <button type="submit" class="btn btn-success">Send Request</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>


</div>

<script>
  $(document).ready(function() {
    var max_fields = 5;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        //let Random
        
        if (x < max_fields) {
            x++;
            $(wrapper).append('<section><div class="form-row"><div class="col form-group"><label for="exampleFormControlSelect1">Equipment type</label><select class="form-control" id="exampleFormControlSelect1" name="type[]"><option>Truck</option><option>Backhoe</option><option>Crane</option><option>Loader</option><option>Forklift</option></select></div><div class="col form-group"><label for="exampleFormControlSelect2">Quantity</label><select class="form-control id="exampleFormControlSelect2" name="quantity[]"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div></div><a href="#" class="delete btn btn-danger">Delete</a></section>'); //add input box
            var type = $("#exampleFormControlSelect1 option:selected").text();
            var qty = $("#exampleFormControlSelect2 option:selected").text();
            console.log(type, qty);
        } else {
            alert('Maximum of 5 Requests only')
        }
    });
    

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('section').remove();
        x--;
    });
});
</script>