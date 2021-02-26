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
          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active col-md-offset-4" id="ongoingList" role="tabpanel" aria-labelledby="home-tab">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-6 col-md-offset-4" style="margin-top: 12%;">
                  @if($notification->data["flag"] == "declined")
                    <div class="card justify-content-center">
                      <div class="card-header" style="background-color: #e2e6ea;">
                        <h4>Decline Information</h4>
                      </div>
                      <div class="collapse show" id="mycard-collapse">
                        <div class="card-body">
                          <h5 class="mb-3" style="text-align: center">Project Information</h5>
                          <div class="form-row">
                            <div class="col-md-6"><strong>Project ID: {{$notification->data["project_id_declined"]}}</strong></div>
                            <div class="col-md-6"><strong>Declined By: Engr. {{$notification->data["reason"]}}</strong></div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6"><strong>Reason: {{$notification->data["creator"]}}</strong></div>
                            <div class="col-md-6"><strong>Date Declined: {{$notification->created_at}}</strong></div>
                          </div>
                        </div>
                        <div class="card-footer text-center">
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declineModal">Delete</button>
                        </div>
                      </div>
                    </div>
                   @elseif($notification->data["flag"] == "accepted")
                      <form action="/startProject/{{$notification->id}}/{{$notification->data["project_id_accepted"]}}" method="POST">
                        {{csrf_field()}}
                        <div class="card justify-content-center">
                          <div class="card-header" style="background-color: #e2e6ea;">
                            <h4>Project Accepted</h4>
                          </div>
                          <div class="collapse show" id="mycard-collapse">
                            <div class="card-body">
                              <h5 class="mb-3" style="text-align: center">Project Information</h5>
                              <div class="form-row">
                                <div class="col-md-6"><strong>Project ID: {{$notification->data["project_id_accepted"]}}</strong></div>
                                <div class="col-md-6"><strong>Accepted By: Engr. {{$notification->data["creator"]}}</strong></div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-6"><strong>Estimated Budget: {{$notification->data["budget"]}}</strong></div>
                                <div class="col-md-6"><strong>Estimated Workers: {{$notification->data["worker"]}}</strong></div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-6"><strong>Date Accepted: {{$notification->created_at}}</strong></div>
                              </div>
                            </div>
                            <div class="card-footer text-center">
                              @if ($projects->project_status == "pending")
                              <button type="submit" class="btn btn-success">Start Project</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                              @else
                              <button type="button" class="btn btn-danger">Delete</button>
                              @endif
                              
                            </div>
                          </div>
                        </div>
                      </form>
                  @endif          
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
