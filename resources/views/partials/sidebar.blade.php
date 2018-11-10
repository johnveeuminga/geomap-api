<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- User profile -->
      <div class="user-profile" style="background: url({{asset('images/background/user-info.jpg')}}) no-repeat;">
          <!-- User profile image -->
          <div class="profile-img"> <img src="{{ asset('images/users/profile.png') }}" alt="user" /> </div>
          <!-- User profile text-->
          <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ auth()->user()->name }}</a>
              <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                  <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                  <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
          </div>
      </div>
      <!-- End User profile text-->
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="nav-small-cap">PERSONAL</li>
              <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Accidents </span></a>
                  <ul aria-expanded="false" class="collapse">
                      <li><a href="{{ route('accidents.index') }}">View Accidents</a></li>
                  </ul>
            </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
  <!-- Bottom points-->
  <div class="sidebar-footer">
      <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
      <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
      <!-- item--><a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
  </div>
  <!-- End Bottom points-->
</aside>

                                    