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
                  <div class="card justify-content-center">
                    <div class="card-header" style="background-color: #e2e6ea;">
                      <h4>{{$project->project_name}}</h4>
                      
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
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Create Team</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
            $(wrapper).append('<form><div class="form-row"><div class="col form-group"><label for="exampleFormControlSelect1">Equipment type</label><select class="form-control" id="exampleFormControlSelect1" name="type[]"><option>Truck</option><option>Backhoe</option><option>Crane</option><option>Loader</option><option>Forklift</option></select></div><div class="col form-group"><label for="exampleFormControlSelect2">Quantity</label><select class="form-control id="exampleFormControlSelect2" name="quantity[]"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div></div><a href="#" class="delete btn btn-danger">Delete</a></form>'); //add input box
            var type = $("#exampleFormControlSelect1 option:selected").text();
            var qty = $("#exampleFormControlSelect2 option:selected").text();
            console.log(type, qty);
        } else {
            alert('Maximum of 5 Requests only')
        }
    });
    $

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('form').remove();
        x--;
    });
});
</script>


{{-- <script>

function displayValue(div_name, data){ 
            document.getElementById(div_name).innerText += data; 
        } 

document.getElementById('generate').onclick = function() {
 
 var values = ["Foreman", "Mason", "Labor", "Welder", "Paintor", "Skilled Worker", "Backhoe Operator", "Payloader Operator", "Truck Driver"];

 var select = document.createElement("select");
 select.name = "type";
 select.id = "type"

 for (const val of values) {
   var option = document.createElement("option");
   option.value = val;
   option.text = val.charAt(0).toUpperCase() + val.slice(1);
   
  //  option.className = myClass;
   var equipment = document.getElementsByClassName("type").value;
   displayValue("displayValue", equipment + "\n");
   console.log;

  select.appendChild(option);
  //  displayValue("displayValue", equipmentType + "\n");
 }

 var label = document.createElement("label");
 label.innerHTML = "Choose Employee Type: "
 label.htmlFor = "type";
 label.className = "form-control";

 document.getElementById("container").appendChild(label).appendChild(select);
  
 var textbox;
  label.appendChild(document.createTextNode(' Quantity: '));
  textbox = document.createElement('input');
  textbox.type = 'number';
  label.appendChild(textbox);

  // document.getElementById('generate').appendChild(label);
}
</script> --}}