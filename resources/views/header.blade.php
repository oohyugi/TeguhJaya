<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>J</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Teguh</b>Jaya</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
      
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Stok payung kuran dari 3 
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          

      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->

      <!-- <li><a href="http://localhost:8000"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

                    <li><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          
                                      <i class="fa fa-btn fa-sign-out"></i> Logout</a>
                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
        
       <!-- ========== End of top menu right items ========== -->
 
          <!-- User Account Menu -->
          <!-- <li class="user-menu"> -->
            <!-- Menu Toggle Button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"> -->
              <!-- The user image in the navbar-->
             <!--  <img src= {{ asset ("/bower_components/AdminLTE/dist/img/user2-160x160.jpg")}} class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <!-- <span class="hidden-xs">Log out</span> -->
            <!-- </a> -->
            <!-- <ul class="dropdown-menu"> -->
              <!-- The user image in the menu -->
           <!--    <li class="user-header">
                
              </li> -->
              <!-- Menu Body -->

              <!-- Menu Footer-->
             <!--  <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li> -->
          <!-- Control Sidebar Toggle Button -->
        <!--   <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Main Header -->