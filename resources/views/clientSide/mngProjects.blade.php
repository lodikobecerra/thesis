<title>Manage Projects</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('clientSide.sidebarClient')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Project name</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">Add task</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4><span class="badge badge-secondary">
                                    Project code
                                </span></h4>
                            <p>This is a task detail</p>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>