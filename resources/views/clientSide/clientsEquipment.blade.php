<title>Equipments</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')

<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="main-content" style="min-height: 636px;">
        <section class="section">
          <div class="section-body">
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Current Equipments</h4>
                  <div class="card-header-form">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Request</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <!-- <th>
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                              class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th> -->
                        
                        <th>Body Number</th>
                        <th>Operator</th>
                        <th>Due Date</th>
                        <th>Location</th>
                      </tr>
                      <tr>
                        
                        <td>24552</td>
                        <td>
                          Azkhar
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          Batungbakal St. Sta. Thotiana Bulbulacan
                        </td>
                      </tr>
                      <tr>
                        
                        <td>23542</td>
                        <td>
                          J Kwan
                        </td>
                        <td>2018-04-10</td>
                        <td>
                          Batungbakal St. Sta. Thotiana Bulbulacan
                        </td>
                      </tr>
                      <tr>
                        
                        <td>39775</td>
                        <td>
                          Pochola
                        </td>
                        <td>2018-01-29</td>
                        <td>
                          Batungbakal St. Sta. Thotiana Bulbulacan
                        </td>
                      </tr>
                      <tr>
                        
                        <td>06784</td>
                        <td>
                          Mang Tani
                        </td>
                        <td>2018-01-16</td>
                        <td>
                          Batungbakal St. Sta. Thotiana Bulbulacan
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Request New Equipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="">
                  <div class="form-group">
                    <label>Equipment Type</label>
                    <select class="form-control" name="equipment_type"  placeholder="Pleace choose type of equipment" required>
                        <option value=""disabled selected>Type of Equipment</option>
                        <option>Truck</option>
                        <option>Backhoe Loader</option>
                        <option>Payloader</option>
                        <option>Bulldozer</option>
                        <option>Cement Mixer</option>
                        <option>Elf</option>
                        <option>Motor Pool</option>
                        <option>Batching</option>
                        <option>Asphalt</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" required>
                  </div>
                  
                  <button type="button" class="btn btn-primary m-t-15 waves-effect">Request</button>
                  <button type="button" class="btn btn-secondary m-t-15" data-dismiss="modal">Cancel</button>
                </form>
              </div>
            </div>
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
  