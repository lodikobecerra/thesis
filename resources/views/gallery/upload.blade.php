<title>Upload</title>

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
                            <h4>Upload Photo</h4>

                            <div class="card-header-action">
                                <div class="btn-group dropleft">
                                    <a href="#" data-toggle="dropdown" title="Option" style="padding-left: 8px; color: black;"><i class="fas fa-ellipsis-v"></i></a>                 
                                    <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="upload">Upload</a>
                                        <a class="dropdown-item" href="#" >Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/uploadImage" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="file" name="image" multiple>
                                <input type="submit" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>