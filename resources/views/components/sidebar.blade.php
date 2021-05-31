 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <img src="{{ asset('images/faces/face1.jpg') }}" alt="profile image">
            <p class="text-center font-weight-medium">Larry Garner</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin./') }}">
              <i class="menu-icon icon-diamond"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-success">3</div>
            </a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">HRM</span>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.overview') }}">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.employe')}}">Employe</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.departments')}}">Departments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.announcements')}}">Announcements</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.designation')}}">Designations</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts2" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Attendance</span>
            </a>
            <div class="collapse" id="page-layouts2">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.ov-attendance')}}">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.shift')}}">Shift</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.tools')}}">Tools</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.attendance')}}">Attendance</a>
                </li> 
                        
              </ul>
            </div>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Reports</span>
            </a>            
          </li>    
        </ul>
      </nav>