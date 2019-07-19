<?php include 'header.php'; ?>
<?php include 'profile-header.php'; ?>
<?php if($userdetails){ if($userdetails->usertype == 1) { include 'sidebar-admin.php'; } else { include 'sidebar-user.php'; } }?>
  
  </head>
  <body>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="assets/images/user-profile.jpg" alt="" />
                        </div>
                        <div class="user-work">
                          <h4>work</h4>
                          <div class="work-content">
                            <h3>It Solution </h3>
                            <p>123, South Mugda</p>
                            <p>New York, 1214</p>
                          </div>
                          <div class="work-content">
                            <h3>Unix</h3>
                            <p>123, South Mugda</p>
                            <p>New York, 1214</p>
                          </div>
                        </div>
                        <div class="user-skill">
                          <h4>Skill</h4>
                          <ul>
                            <li>
                              <a href="#">Branding</a>
                            </li>
                            <li>
                              <a href="#">UI/UX</a>
                            </li>
                            <li>
                              <a href="#">Web Design</a>
                            </li>
                            <li>
                              <a href="#">Wordpress</a>
                            </li>
                            <li>
                              <a href="#">Magento</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name"><?php echo  $userdetails->ud_firstname." ".$userdetails->ud_lastname; ?></div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i> New York, New York</div>
                        <div class="user-job-title">Product Designer</div>
                        <div class="ratings">
                          <h4>Ratings</h4>
                          <div class="rating-star">
                            <span>8.9</span>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star"></i>
                          </div>
                        </div>
                        <div class="user-send-message">
                          <button class="btn btn-primary btn-addon" type="button">
                            <i class="ti-email"></i>Send Message</button>
                        </div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number">+8801629599859</span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Address:</span>
                                  <span class="mail-address">123, Rajar Goli, South Mugda</span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="contact-email">hello@Admin Board.com</span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title">Website:</span>
                                  <span class="contact-website">www.Admin Board.com</span>
                                </div>
                                <div class="skype-content">
                                  <span class="contact-title">Skype:</span>
                                  <span class="contact-skype">Admin Board</span>
                                </div>
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Birthday:</span>
                                  <span class="birth-date">January 31, 1990 </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Gender:</span>
                                  <span class="gender">Male</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Recent Project </h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kolor Tea Shirt For Man</td>
                          <td>
                            <span class="badge badge-primary">Ongoing</span>
                          </td>
                          <td>January 22</td>
                          <td class="color-primary">$21.56</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Women</td>
                          <td>
                            <span class="badge badge-success">Complete</span>
                          </td>
                          <td>January 30</td>
                          <td class="color-success">$55.32</td>
                        </tr>
                        <tr>
                          <td>Blue Backpack For Baby</td>
                          <td>
                            <span class="badge badge-danger">Rejected</span>
                          </td>
                          <td>January 25</td>
                          <td class="color-danger">$14.85</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Man</td>
                          <td>
                            <span class="badge badge-primary">Ongoing</span>
                          </td>
                          <td>January 22</td>
                          <td class="color-primary">$21.56</td>
                        </tr>
                        <tr>
                          <td>Kolor Tea Shirt For Women</td>
                          <td>
                            <span class="badge badge-success">Complete</span>
                          </td>
                          <td>January 30</td>
                          <td class="color-success">$55.32</td>
                        </tr>
                        <tr>
                          <td>Blue Backpack For Baby</td>
                          <td>
                            <span class="badge badge-danger">Rejected</span>
                          </td>
                          <td>January 25</td>
                          <td class="color-danger">$14.85</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Recent Comments </h4>

                </div>
                <div class="recent-comment">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="assets/images/avatar/1.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">john doe</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-success">Approved</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">October 21, 2017</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="assets/images/avatar/2.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mr. John</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-warning">Pending</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">October 21, 2017</p>
                    </div>
                  </div>
                  <div class="media no-border">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="assets/images/avatar/3.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mr. John</h4>
                      <p>Cras sit amet nibh libero, in gravida nulla. </p>
                      <div class="comment-action">
                        <div class="badge badge-danger">Rejected</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <div class="comment-date">October 21, 2017</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. -
                  <a href="#">example.com</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>




    <!-- Calender -->
    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>

    <!--  Flot Chart -->
    <script src="assets/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/js/lib/flot-chart/curvedLines.js"></script>
    <script src="assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>

    <!--  Chartist -->
    <script src="assets/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/lib/chartist/chartist-init.js"></script>

    <!--  Chartjs -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>

    <!--  Knob -->
    <script src="assets/js/lib/knob/jquery.knob.min.js "></script>
    <script src="assets/js/lib/knob/knob.init.js "></script>

    <!--  Morris -->
    <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
    <script src="assets/js/lib/morris-chart/morris.js"></script>
    <script src="assets/js/lib/morris-chart/morris-init.js"></script>

    <!--  Peity -->
    <script src="assets/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="assets/js/lib/peitychart/peitychart.init.js"></script>

    <!--  Sparkline -->
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>

    <!-- Select2 -->
    <script src="assets/js/lib/select2/select2.full.min.js"></script>

    <!--  Validation -->
    <script src="assets/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="assets/js/lib/form-validation/jquery.validate-init.js"></script>

    <!--  Circle Progress -->
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!-- Datatable -->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

    <!-- JS Grid -->
    <script src="assets/js/lib/jsgrid/db.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="assets/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="assets/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="assets/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="assets/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="assets/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="assets/js/lib/jsgrid/jsgrid-init.js"></script>

    <!--  Datamap -->
    <script src="assets/js/lib/datamap/d3.min.js"></script>
    <script src="assets/js/lib/datamap/topojson.js"></script>
    <script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="assets/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="assets/js/lib/nestable/jquery.nestable.js"></script>
    <script src="assets/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="assets/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="assets/js/lib/rangeSlider/moment.js"></script>
    <script src="assets/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="assets/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="assets/js/lib/barRating/jquery.barrating.js"></script>
    <script src="assets/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="assets/js/lib/rating1/jRate.min.js"></script>
    <script src="assets/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Toastr -->
    <script src="assets/js/lib/toastr/toastr.min.js"></script>
    <script src="assets/js/lib/toastr/toastr.init.js"></script>
    <!--  Dashboard 1 -->
    <script src="assets/js/dashboard1.js"></script>
    <script src="assets/js/dashboard2.js"></script>

</body>
<?php include 'footer.php'; ?>