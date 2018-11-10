<nav class="navbar top-navbar navbar-expand-md navbar-light">
  <!-- ============================================================== -->
  <!-- Logo -->
  <!-- ============================================================== -->
  <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">
          <!-- Logo icon --><b>
              <!-- Dark Logo icon -->
              <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
              <!-- Light Logo icon -->
              <img src="{{ asset('images/logo-light-icon.png') }} " alt="homepage" class="light-logo" />
          </b>
          <!--End Logo icon -->
          <!-- Logo text --><span>
           <!-- dark Logo text -->
           <img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="dark-logo" />
           <!-- Light Logo text -->    
           <img src="{{ asset( 'images/logo-light-text.png' ) }}" class="light-logo" alt="homepage" /></span> </a>
  </div>
  <!-- ============================================================== -->
  <!-- End Logo -->
  <!-- ============================================================== -->

  @auth
    <div class="navbar-collapse">
      <!-- ============================================================== -->
      <!-- User profile and search -->
      <!-- ============================================================== -->
      <ul class="navbar-nav my-lg-0 ml-auto">
          <!-- ============================================================== -->
          <!-- Profile -->
          <!-- ============================================================== -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu dropdown-menu-right scale-up show">
                  <ul class="dropdown-user">
                      <li>
                          <div class="dw-user-box">
                              <div class="u-text">
                                  <h4>{{ Auth::user()->name }}</h4>
                                  <p class="text-muted">{{ Auth::user()->email}}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                              </div>
                          </div>
                      </li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
              </div>
          </li>
        </ul>
    </div>
  @else
   
    <div class="navbar-collapse">
      <ul class="navbar-nav my-lg-0  ml-auto">
        <!-- ============================================================== -->
        <!-- Profile -->
        <!-- ============================================================== -->
        <li class="nav-item">
            <a href="{{ url('login') }}" class="nav-link text-muted waves-effect waves-dark"> Login</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('register')}}" class="nav-link text-muted waves-effect waves-dark">Register</a>
        </li>
       
    </ul>
    </div>
  @endauth
</nav>