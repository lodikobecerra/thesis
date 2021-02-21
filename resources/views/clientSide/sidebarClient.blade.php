<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('assets/img/images-18.jpg')}}" class="header-logo" /> <br>
              <span class="logo-name">L.R. Tiqui Builders Inc.</span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="user-name">
              <h6>{{Auth::user()->firstName}} {{Auth::user()->lastName}}</h6>
            </div>
            <div class="sidebar-user-details">
              <div style="font-weight: light">{{Auth::user()->user_type}}</div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="{{route("my_ongoing")}}"><i data-feather="list"></i><span>My Projects</span></a></li>
            <li><a class="nav-link" href="{{route("my_equipment")}}"><i data-feather="truck"></i><span>Equipments</span></a></li>
            <li><a class="nav-link" href="{{route("my_team")}}"><i data-feather="user"></i><span>Team</span></a></li>
            {{-- <li><a class="nav-link" href="calendar"><i data-feather="calendar"></i><span>Calendar</span></a></li>
            <li><a class="nav-link" href="fileManager"><i data-feather="folder"></i><span>File Manager</span></a></li> --}}
            <li><a class="nav-link" href="{{route("gallery")}}"><i data-feather="image"></i><span>Gallery</span></a></li>
            {{-- <li><a class="nav-link" href="resetPassword"><i data-feather="user-check"></i><span>Reset Password</span></a></li> --}}
          </ul>
        </aside>
      </div>
    </body>