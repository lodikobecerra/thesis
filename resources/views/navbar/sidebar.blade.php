<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="assets/img/images-18.jpg" class="header-logo" /> <br>
        <span class="logo-name">L.R. Tiqui Builders Inc.</span>
      </a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="assets/rick.jpg">
      </div>
      <div class="sidebar-user-details">
        <div class="user-name"><a href="profile">Rick Earljohn Mariano Jumuad</a></div>
        <div class="user-role">Engineer</div>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li><a class="nav-link" href="dashboard"><i data-feather="file"></i><span>Dashboard</span></a></li>
      <li><a class="nav-link" href="ongoing_projects"><i data-feather="list"></i><span>Project</span></a></li>
      <li><a class="nav-link" href="trucks"><i data-feather="truck"></i><span>Equipments</span></a></li>
      <li><a class="nav-link" href="team"><i data-feather="user"></i><span>Team</span></a></li>
      <li><a class="nav-link" href="calendar"><i data-feather="calendar"></i><span>Calendar</span></a></li>
      <li><a class="nav-link" href="fileManager"><i data-feather="folder"></i><span>File Manager</span></a></li>
      <li><a class="nav-link" href="gallery"><i data-feather="image"></i><span>Gallery</span></a></li>
      <li><a class="nav-link" href="/register"><i data-feather="user-check"></i><span>Register New Account</span></a></li>
      <li><a class="nav-link" href="resetPassword"><i data-feather="user-check"></i><span>Reset Password</span></a></li>
    </ul>
  </aside>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"> 
  $(document).on('click', 'ul li', function(){
    $(this).addclass('active').siblings().removeClass('active')
  })
</script>

@yield('content')