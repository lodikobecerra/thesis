<title>File Manager</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')


<div class="main-content" style="min-height: 636px;">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #e2e6ea;">
                <h4>Recently Accessed Files</h4>
                <div class="card-options">                                
                    <!-- <a href="javascript:void(0)"><i class="fa fa-plus" data-toggle="tooltip" data-placement="right" title="Upload New"></i></a> -->
                    <!-- <a href="#" class="btn btn-icon" title="Option"><i class="fas fa-ellipsis-v"></i></a> -->
                    <div class="btn-group dropleft">                            
                            <a href="#" data-toggle="dropdown" title="Option"><i data-feather="more-vertical" style="color: black;"></i></a>
                        <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenterr">New folder</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-lg1">Upload</a>
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <div class="file_folder">
                    <a href="javascript:void(0);">
                        <div class="icon">
                            <i class="fas fa-folder"></i>
                        </div>
                        <div class="file-name">
                            <p class="mb-0 text-muted">Family</p>
                            <small>3 File, 1.2GB</small>
                        </div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="icon">
                            <i class="fas fa-file-word"></i>
                        </div>
                        <div class="file-name">
                            <p class="mb-0 text-muted">Report2017.doc</p>
                            <small>Size: 68KB</small>
                        </div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="file-name">
                            <p class="mb-0 text-muted">Report2017.pdf</p>
                            <small>Size: 68KB</small>
                        </div>
                    </a>
                </div>
              </div>
            </div>
            <!-- <div class="card bg-none b-none"> -->
                <!-- <div class="card-body pt-0"> -->
                    <div class="table-responsive">
                        <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Last Update</th>
                                    <th>File Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="width45">
                                        <i class="fa fa-folder"></i>
                                    </td>
                                    <td>
                                        <span class="folder-name">Drawings</span>
                                    </td>
                                    
                                    <td class="width100">
                                        <span>Oct 7, 2018</span>
                                    </td>
                                    <td class="width100 text-center">
                                        <span class="size"> - </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">
                                        <i class="fa fa-folder"></i>
                                    </td>
                                    <td>
                                        <span class="folder-name">Documents</span>
                                    </td>
                                    
                                    <td class="width100">
                                        <span>Oct 17, 2018</span>
                                    </td>
                                    <td class="width100 text-center">
                                        <span class="size"> - </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">
                                        <i class="fa fa-folder"></i>
                                    </td>
                                    <td>
                                        <span class="folder-name">Project 1 Files </span>
                                    </td>
                                    
                                    <td class="width100">
                                        <span>Oct 18, 2018</span>
                                    </td>
                                    <td class="width100 text-center">
                                        <span class="size"> 50MB </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">
                                        <i class="fa fa-folder"></i>
                                    </td>
                                    <td>
                                        <span class="folder-name">Project 2 files </span>
                                    </td>
                                    
                                    <td class="width100">
                                        <span>April 7, 2019</span>
                                    </td>
                                    <td class="width100 text-center">
                                        <span class="size"> 1GB </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width45">
                                        <i class="fa fa-folder"></i>
                                    </td>
                                    <td>
                                        <span class="folder-name">Project 3 files</span>
                                    </td>
                                    
                                    <td class="width100">
                                        <span>Nov 23, 2019</span>
                                    </td>
                                    <td class="width100 text-center">
                                        <span class="size"> - </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <!-- </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    </div>
  
<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">New folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <div class="modal-body">
    <input type="text" class="form-control" value="New folder">
</div>
<div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary">OK</button>
</div>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myLargeModalLabel">Multiple Upload</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" class="dropzone" id="mydropzone">
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>