<title>Calendar</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')



<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header" style="background-color: #e2e6ea;">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">
                    <div class="fc-overflow">
                      <!-- <div id="myEvent"></div> -->
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Add New Event popup -->
        <!-- <div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title"><strong>Add</strong> an event</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                      <form>
                          <div class="row">
                              <div class="col-md-6">
                                  <label class="control-label">Event Name</label>
                                  <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                              </div>
                              <div class="col-md-6">
                                  <label class="control-label">Choose Event Color</label>
                                  <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                      <option value="success">Success</option>
                                      <option value="danger">Danger</option>
                                      <option value="info">Info</option>
                                      <option value="primary">Primary</option>
                                      <option value="warning">Warning</option>
                                  </select>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
        </div> -->
        <!-- Add Direct Event popup -->
        <div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Add Direct Event</h4>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Event Name</label>
                                  <input class="form-control" name="event-name" type="text" />
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Event Type</label>
                                  <select name="event-bg" class="form-control">
                                      <option value="success">Success</option>
                                      <option value="danger">Danger</option>
                                      <option value="info">Info</option>
                                      <option value="primary">Primary</option>
                                      <option value="warning">Warning</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn save-btn btn-success">Save</button>
                      <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
        </div>
        <!-- Event Edit Modal popup -->
        <div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Edit Event</h4>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Event Name</label>
                                  <input class="form-control" name="event-name" type="text" />
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Event Type</label>
                                  <select name="event-bg" class="form-control">
                                      <option value="success">Success</option>
                                      <option value="danger">Danger</option>
                                      <option value="info">Info</option>
                                      <option value="primary">Primary</option>
                                      <option value="warning">Warning</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn mr-auto delete-btn btn-danger">Delete</button>
                      <button class="btn save-btn btn-success">Save</button>
                      <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>