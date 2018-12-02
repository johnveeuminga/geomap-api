<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- User profile -->
      <div class="user-profile" style="background: url({{asset('images/background/dirty_white.jpg')}}) no-repeat;">
          <!-- User profile image -->
          <div class="profile-img"> <img src="{{ auth()->user()->avatar }}" alt="user" /> </div>
          <!-- User profile text-->
          <div class="profile-text"> 
            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" id="dropdownLink" role="button" aria-haspopup="true" aria-expanded="true">{{ auth()->user()->name }} <br> <small>{{ auth()->user()->email }}</small></a> 

            <div class="dropdown-menu" aria-labelledby="dropdownLink"> 

              <a href="{{ route('profile', auth()->user()->username) }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a> 
              <div class="dropdown-divider"></div> 
              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="ti-settings"></i> Logout</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
            </div>
          </div>
      </div>
      <!-- End User profile text-->
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="nav-small-cap">MENU</li>
              <li><a class="waves-effect waves-dark" href="{{ route('home') }}"><i class="mdi mdi-home"></i>Home</a></li>
              <li><a class=" waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Accidents </span></a>
                  <ul aria-expanded="false" class="collapse" style="border-left:2px solid #4AC1E8;margin-left:10px">
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
  </div>
  <!-- End Bottom points-->
</aside>

                                    