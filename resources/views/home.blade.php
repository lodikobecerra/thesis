<title>Dashboard</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="main-content" style="min-height: 636px;">
    <section class="section">
        <div class="section-body">
           @include('gantt')
        </div>
    </section>
</div>


