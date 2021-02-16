<title>Gallery</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
            <div class="card">
              <div class="card-header" style="background-color: #e2e6ea;">
                <h4>Gallery</h4>

                <div class="card-header-action">
                  <div class="btn-group dropleft">
                    <a href="#" data-toggle="dropdown" title="Option" style="padding-left: 8px; color: black;"><i class="fas fa-ellipsis-v"></i></a>                 
                    <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="upload" >Upload</a>
                      <a class="dropdown-item" href="#" >Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                @foreach($image as $image)
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
                    <a href="{{asset('storage/images/'.$image->image)}}" data-sub-html="Demo Description">
                      <img class="img-responsive thumbnail" src="{{asset('storage/images/'.$image->image)}}" alt="image" style="height: 350px; width:auto;">
                    </a>
                  </div>
                  @endforeach
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myLargeModalLabel">Upload Photo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/upload" method="POST" ecntype = "multipart/data">
            {{csrf_field()}}
            <div class="fallback">
              <input type="file" name="image" multiple />
            </div>
          </form>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" name="/Upload">Upload</button>
        </div>
      </div>
    </div>
  </div> -->