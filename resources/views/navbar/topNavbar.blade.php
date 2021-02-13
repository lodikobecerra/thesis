<nav class="navbar navbar-expand-lg main-navbar">
  <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right">
    <li>
      <form class="form-inline mr-auto">
        <div class="search-element">
          <input class="form-control mt-2" type="search" placeholder="Search" aria-label="Search" data-width="200">
          <button class="btn mt-2" type="submit" style="height:44px">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </li>
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
        class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"></i>
        </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
        <div class="dropdown-header">
          Notifications
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          <a href="#" class="dropdown-item dropdown-item-unread"> <span
              class="dropdown-item-icon bg-primary text-white"> <i class="fas
									fa-code"></i>
            </span> <span class="dropdown-item-desc"> Notifications here <span class="time">2 Min
                Ago</span>
            </span>
          </a> 
          
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>
    <div class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="logout" class="dropdown-item text-danger"> 
          Logout<i class="fas fa-sign-out-alt"></i>
        </a></li>
      </ul>
    </div>
  </ul>
</nav>

<script> feather.replace() </script>

@yield('content')