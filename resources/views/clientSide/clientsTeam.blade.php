<title>My Team</title>

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
                            <h4>Current Labors</h4>
                            <div class="card-header-form">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Request</button>
                            </div>
                        </div>
                        <div class="card-body p-0"> 
                            <div class="col-12">
                                <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="card card-info" style="background-color: #f1f6ff;">
                                        <div class="card-body text-center ribbon">
                                            <img class="rounded-circle img-thumbnail w100" src="assets/img/users/user-1.png" alt="">
                                            <h6 class="mt-3 mb-0">Michelle Green</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">View Profile</button>
                                            <button class="btn btn-default btn-sm">Message</button>
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
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Request Laborer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form class="">
                            <div class="form-group">
                                <label>Equipment Type</label>
                                <select class="form-control" name="equipment_type"  placeholder="Pleace choose type of equipment" required>
                                    <option value=""disabled selected>Type of Labor</option>
                                    <option>Engineer</option>
                                    <option>Foreman</option>
                                    <option>Mason</option>
                                    <option>Labor</option>
                                    <option>Welder</option>
                                    <option>Paintor</option>
                                    <option>Skilled Worker</option>
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