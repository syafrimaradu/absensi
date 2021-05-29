<!DOCTYPE html>
<html lang="en">
  <head>
    @include('components.meta')
  </head>

  <body>
    <div class="container-scroller">
      {{-- Navbar --}}
      @include('components.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        {{-- Theme --}}
        <div class="theme-setting-wrapper">
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
            </div>
            <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <!-- Sidebar -->
      @include('components.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row mb-4">
              <div class="col-12 d-flex align-items-center justify-content-between">
                @yield('title-page')
              </div>
            </div>
          @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              {{-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                <a href="http://urbanui.com/" target="_blank">UrbanUI</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                <i class="mdi mdi-heart-outline text-danger"></i>
              </span> --}}
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('components.scripts')
    @yield('footer-scripts')
  </body>
</html>