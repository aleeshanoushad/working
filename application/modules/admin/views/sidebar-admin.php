<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
  <div class="nano">
    <div class="nano-content">
      <div class="logo">
        <a href="index.html">
          <!-- <img src="assets/images/logo.png" alt="" /> -->
          <span><?php echo  $userdetails->ud_firstname." ".$userdetails->ud_lastname; ?></span>
        </a>
      </div>
      <ul>
        <li class="label">Main</li>
        <li>
          <a class="sidebar-sub-toggle">
            <i class="ti-home"></i> Dashboard
            <span class="badge badge-primary">2</span>
            <!-- <span class="sidebar-collapse-icon ti-angle-down"></span> -->
          </a>

        </li>

        <li class="label">Profile</li>
         <!--  <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-bar-chart-alt"></i>View Profile
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="chart-flot.html">Flot</a>
              </li>
              <li>
                <a href="chart-morris.html">Morris</a>
              </li>
              <li>
                <a href="chartjs.html">Chartjs</a>
              </li>
              <li>
                <a href="chartist.html">Chartist</a>
              </li>
              <li>
                <a href="chart-peity.html">Peity</a>
              </li>
              <li>
                <a href="chart-sparkline.html">Sparkle</a>
              </li>
              <li>
                <a href="chart-knob.html">Knob</a>
              </li>
            </ul>
          </li> -->
          <li>
            <a href="<?php echo base_url(); ?>admin/profile">
              <i class="ti-calendar"></i>View Profile</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>admin/addprofile">
                <i class="ti-email"></i>Update Profile</a>
              </li>
          <!-- <li>
            <a >
              <i class="ti-user"></i> Profile</a>
          </li>
          <li>
            <a href="app-widget-card.html">
              <i class="ti-layout-grid2-alt"></i> Widget</a>
            </li> -->
            <li class="label">Features</li>
            <li>
              <a class="sidebar-sub-toggle">
                <i class="ti-layout"></i>Documents
                <span class="sidebar-collapse-icon ti-angle-down"></span>
              </a>
              <ul>
               <li>
                <a href="#">Add Documents</a>
              </li>
              <li>
                <a href="#">View All Documents</a>
              </li>
              <li>
                <a href="#">Renew Pending Docs</a>
              </li>
              <li>
                <a href="#">Renewed Docs</a>
              </li>
<!--  -->
              <li>
                <a href="ui-typography.html">Typography</a>
              </li>
              
              <li>
                <a href="ui-alerts.html">Alerts</a>
              </li>

              <li>
                <a href="ui-button.html">Button</a>
              </li>
              <li>
                <a href="ui-dropdown.html">Dropdown</a>
              </li>

              <li>
                <a href="ui-list-group.html">List Group</a>
              </li>

              <li>
                <a href="ui-progressbar.html">Progressbar</a>
              </li>
              <li>
                <a href="ui-tab.html">Tab</a>
              </li>

            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-panel"></i> Components
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="uc-calendar.html">Calendar</a>
              </li>
              <li>
                <a href="uc-carousel.html">Carousel</a>
              </li>
              <li>
                <a href="uc-weather.html">Weather</a>
              </li>
              <li>
                <a href="uc-datamap.html">Datamap</a>
              </li>
              <li>
                <a href="uc-todo-list.html">To do</a>
              </li>
              <li>
                <a href="uc-scrollable.html">Scrollable</a>
              </li>
              <li>
                <a href="uc-sweetalert.html">Sweet Alert</a>
              </li>
              <li>
                <a href="uc-toastr.html">Toastr</a>
              </li>
              <li>
                <a href="uc-range-slider-basic.html">Basic Range Slider</a>
              </li>
              <li>
                <a href="uc-range-slider-advance.html">Advance Range Slider</a>
              </li>
              <li>
                <a href="uc-nestable.html">Nestable</a>
              </li>

              <li>
                <a href="uc-rating-bar-rating.html">Bar Rating</a>
              </li>
              <li>
                <a href="uc-rating-jRate.html">jRate</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-layout-grid4-alt"></i> Table
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="table-basic.html">Basic</a>
              </li>

              <li>
                <a href="table-export.html">Datatable Export</a>
              </li>
              <li>
                <a href="table-row-select.html">Datatable Row Select</a>
              </li>
              <li>
                <a href="table-jsgrid.html">Editable </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-heart"></i> Icons
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="font-themify.html">Themify</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-map"></i> Maps
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="gmaps.html">Basic</a>
              </li>
              <li>
                <a href="vector-map.html">Vector Map</a>
              </li>
            </ul>
          </li>
          <li class="label">Form</li>
          <li>
            <a href="form-basic.html">
              <i class="ti-view-list-alt"></i> Basic Form </a>
            </li>
            <li class="label">Extra</li>
            <li>
              <a class="sidebar-sub-toggle">
                <i class="ti-files"></i> Invoice
                <span class="sidebar-collapse-icon ti-angle-down"></span>
              </a>
              <ul>
                <li>
                  <a href="invoice.html">Basic</a>
                </li>
                <li>
                  <a href="invoice-editable.html">Editable</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="sidebar-sub-toggle">
                <i class="ti-target"></i> Pages
                <span class="sidebar-collapse-icon ti-angle-down"></span>
              </a>
              <ul>
                <li>
                  <a href="page-login.html">Login</a>
                </li>
                <li>
                  <a href="page-register.html">Register</a>
                </li>
                <li>
                  <a href="page-reset-password.html">Forgot password</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../documentation/index.html">
                <i class="ti-file"></i> Documentation</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>login/logout">
                  <i class="ti-close"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="float-left">
                  <div class="hamburger sidebar-toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <div class="float-right">
                  <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                      <i class="ti-bell"></i>
                      <div class="drop-down dropdown-menu dropdown-menu-right">
                        <div class="dropdown-content-heading">
                          <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                          <ul>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Mr. John</div>
                                  <div class="notification-text">5 members joined today </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Mariam</div>
                                  <div class="notification-text">likes a photo of you</div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Tasnim</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Mr. John</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li class="text-center">
                              <a href="#" class="more-link">See All</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                      <i class="ti-email"></i>
                      <div class="drop-down dropdown-menu dropdown-menu-right">
                        <div class="dropdown-content-heading">
                          <span class="text-left">2 New Messages</span>
                          <a href="email.html">
                            <i class="ti-pencil-alt pull-right"></i>
                          </a>
                        </div>
                        <div class="dropdown-content-body">
                          <ul>
                            <li class="notification-unread">
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Michael Qin</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li class="notification-unread">
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Mr. John</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Michael Qin</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                <div class="notification-content">
                                  <small class="notification-timestamp pull-right">02:34 PM</small>
                                  <div class="notification-heading">Mr. John</div>
                                  <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                </div>
                              </a>
                            </li>
                            <li class="text-center">
                              <a href="#" class="more-link">See All</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown dib">
                    <div class="header-icon" data-toggle="dropdown">
                      <span class="user-avatar"><?php echo  $userdetails->ud_firstname." ".$userdetails->ud_lastname ?>
                      <i class="ti-angle-down f-s-10"></i>
                    </span>
                    <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                  <!-- <div class="dropdown-content-heading">
                    <span class="text-left">Upgrade Now</span>
                    <p class="trial-day">30 Days Trail</p>
                  </div> -->
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="<?php echo base_url(); ?>admin/profile">
                          <i class="ti-user"></i>
                          <span>Profile</span>
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="ti-email"></i>
                          <span>Inbox</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-settings"></i>
                          <span>Setting</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url(); ?>login/logout">
                          <i class="ti-power-off"></i>
                          <span>Logout</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">

