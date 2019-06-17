<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Edu<span>Star]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
        @include('admin.partials.sidebar')
        <!-- br-sideleft-menu -->

        @include('admin.partials.sideinfo')<!-- info-lst -->

        <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.partials.navbar')
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
        <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
                        class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
                        class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
                        class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
                        class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0 ">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div><!-- contact-list -->


                <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div><!-- contact-list -->

            </div><!-- #contacts -->


            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
                <div class="media-file-list">
                    <div class="media">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43445</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6543</p>
                            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Tax_Form</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Getting_Started</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Introduction</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43420</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43447</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6545</p>
                            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Secret_Document</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                </div><!-- media-list -->
            </div><!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
                <div class="pd-x-25">
                    <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
                    <h6 id="brDate" class="tx-white tx-light op-3"></h6>
                </div>

                <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
                <div class="datepicker sidebar-datepicker"></div>


                <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
                <div class="pd-x-25">
                    <div class="list-group sidebar-event-list mg-b-20">
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->

                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add
                        Event</a>
                    <br>
                </div>

            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Sound Notification</h6>
                    <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                    <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your
                        phone.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox2" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Location Services</h6>
                    <p class="op-5 tx-13">Allowing us to access your location</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox3" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                    <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox4" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Your email</h6>
                    <div class="pos-relative">
                        <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10"
                            value="janedoe@domain.com">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25">
                    <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account
                        Settings</a>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy
                        Settings</a>
                </div>

            </div>
        </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
            <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">
            @yield('content')

        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
                <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('lib/moment/moment.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/d3/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>


    <script src="{{ asset('js/bracket.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        $(function () {
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function () {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)')
                    .matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                        'collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });
    </script>
</body>

</html>
