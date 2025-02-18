         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="/">
               <i class="fas fa-fw fa-home"></i>
               <span>Inicio</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/channels">
               <i class="fas fa-fw fa-users"></i>
               <span>Channels</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/courses">
               <i class="fas fa-graduation-cap"></i>
               <span>Courses</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/video-page">
               <i class="fas fa-fw fa-video"></i>
               <span>Video Page</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/upload-video">
               <i class="fas fa-fw fa-cloud-upload-alt"></i>
               <span>Upload Video</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Pages</span>
               </a>
               <div class="dropdown-menu">
                  <h6 class="dropdown-header">Login Screens:</h6>
                  <a class="dropdown-item" href="login.html">Login</a>
                  <a class="dropdown-item" href="register.html">Register</a>
                  <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Other Pages:</h6>
                  <a class="dropdown-item" href="404.html">404 Page</a>
                  <a class="dropdown-item" href="blank.html">Blank Page</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/history-page">
               <i class="fas fa-fw fa-history"></i>
               <span>History Page</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="/categories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Categories</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="/categories">Movie</a>
                  <a class="dropdown-item" href="/categories">Music</a>
                  <a class="dropdown-item" href="/categories">Television</a>
               </div>
            </li>
            <li class="nav-item channel-sidebar-list">
               <h6>SUBSCRIPTIONS</h6>
               <ul>
                  <li>
                     <a href="/subscriptions">
                     <img class="img-fluid" alt="" src="{{ asset('assets/img/s1.png') }}"> Your Life 
                     </a>
                  </li>
                  <li>
                     <a href="/subscriptions">
                     <img class="img-fluid" alt="" src="{{ asset('assets/img/s2.png') }}"> Unboxing  <span class="badge badge-warning">2</span>
                     </a>
                  </li>
                  <li>
                     <a href="/subscriptions">
                     <img class="img-fluid" alt="" src="{{ asset('assets/img/s3.png') }}"> Product / Service  
                     </a>
                  </li>
                  <li>
                     <a href="/subscriptions">
                     <img class="img-fluid" alt="" src="{{ asset('assets/img/s4.png') }}">  Gaming 
                     </a>
                  </li>
               </ul>
            </li>
         </ul>