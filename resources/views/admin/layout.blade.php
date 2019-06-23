<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/bracketplus/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2019 06:44:21 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">

    @yield('styles')
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('/bracket.css') }}">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    @include('admin.partials.sidebar')<!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="input-group hidden-xs-down wd-170 transition">
                <input id="searchbox" type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div><!-- input-group -->
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-email-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header">
                        <div class="dropdown-menu-label">
                            <label>Messages</label>
                            <a href="#">+ Add New Message</a>
                        </div><!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="#" class="media-list-link">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img3.jpg" alt="">
                                    <div class="media-body">
                                        <div>
                                            <p>Donna Seay</p>
                                            <span>2 minutes ago</span>
                                        </div><!-- d-flex -->
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                            mornings of spring.</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img4.jpg" alt="">
                                    <div class="media-body">
                                        <div>
                                            <p>Samantha Francis</p>
                                            <span>3 hours ago</span>
                                        </div><!-- d-flex -->
                                        <p>My entire soul, like these sweet mornings of spring.</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img7.jpg" alt="">
                                    <div class="media-body">
                                        <div>
                                            <p>Robert Walker</p>
                                            <span>5 hours ago</span>
                                        </div><!-- d-flex -->
                                        <p>I should be incapable of drawing a single stroke at the present moment...</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img5.jpg" alt="">
                                    <div class="media-body">
                                        <div>
                                            <p>Larry Smith</p>
                                            <span>Yesterday</span>
                                        </div><!-- d-flex -->
                                        <p>When, while the lovely valley teems with vapour around me, and the meridian
                                            sun strikes...</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-footer">
                                <a href="#"><i class="fa fa-angle-down"></i> Show All Messages</a>
                            </div>
                        </div><!-- media-list -->
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
                <div class="dropdown">
                    <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-bell-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header">
                        <div class="dropdown-menu-label">
                            <label>Notifications</label>
                            <a href="#">Mark All as Read</a>
                        </div><!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img8.jpg" alt="">
                                    <div class="media-body">
                                        <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others
                                            in a post.</p>
                                        <span>October 03, 2017 8:45am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img9.jpg" alt="">
                                    <div class="media-body">
                                        <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work
                                            <strong>The Social Network</strong></p>
                                        <span>October 02, 2017 12:44am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img10.jpg" alt="">
                                    <div class="media-body">
                                        <p class="noti-text">20+ new items added are for sale in your <strong>Sale
                                                Group</strong></p>
                                        <span>October 01, 2017 10:20pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="#" class="media-list-link read">
                                <div class="media">
                                    <img src="http://themepixels.me/bracketplus/img/img5.jpg" alt="">
                                    <div class="media-body">
                                        <p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on
                                            your conversation with <strong>Ronnie Mara</strong></p>
                                        <span>October 01, 2017 6:08pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <div class="dropdown-footer">
                                <a href="#"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                            </div>
                        </div><!-- media-list -->
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
                <div class="dropdown">
                    <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Katherine</span>
                        <img src="http://themepixels.me/bracketplus/img/img1.jpg" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-250">
                        <div class="tx-center">
                            <a href="#"><img src="http://themepixels.me/bracketplus/img/img1.jpg" class="wd-80 rounded-circle" alt=""></a>
                            <h6 class="logged-fullname">Katherine P. Lumaad</h6>
                            <p>youremail@domain.com</p>
                        </div>
                        <hr>
                        <div class="tx-center">
                            <span class="profile-earning-label">Earnings After Taxes</span>
                            <h3 class="profile-earning-amount">$13,230 <i
                                    class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                            <span class="profile-earning-text">Based on list price.</span>
                        </div>
                        <hr>
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                            <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                            <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
                            <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
                            <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>
                            <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="#" class="pos-relative">
                    <i class="icon ion-ios-chatboxes-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- br-header-right -->
    </div><!-- br-header -->
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
                    <a href="#" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img2.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Marilyn Tarter</p>
                                <span>Clemson, CA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img3.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0 ">Belinda Connor</p>
                                <span>Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img4.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Britanny Cevallos</p>
                                <span>Shiboygan Falls, WI</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img5.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Brandon Lawrence</p>
                                <span>Snohomish, WA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img6.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Andrew Wiggins</p>
                                <span>Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img7.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Theodore Gristen</p>
                                <span>Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img8.jpg" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p>Deborah Miner</p>
                                <span>North Shore, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div><!-- contact-list -->


                <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img2.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Marilyn Tarter</p>
                                <span>Clemson, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img3.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Belinda Connor</p>
                                <span>Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img4.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Britanny Cevallos</p>
                                <span>Shiboygan Falls, WI</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img5.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Brandon Lawrence</p>
                                <span>Snohomish, WA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img6.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Andrew Wiggins</p>
                                <span>Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img7.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Theodore Gristen</p>
                                <span>Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="#" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://themepixels.me/bracketplus/img/img8.jpg" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p>Deborah Miner</p>
                                <span>North Shore, CA</span>
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
                            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43445</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6543</p>
                            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Tax_Form</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Getting_Started</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Introduction</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43420</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43447</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6545</p>
                            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Secret_Document</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                        </div><!-- media-body -->
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                </div><!-- media-list -->
            </div><!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
                <div class="pd-x-25">
                    <h2 id="brTime" class="br-time"></h2>
                    <h6 id="brDate" class="br-date"></h6>
                </div>

                <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
                <div class="datepicker sidebar-datepicker"></div>


                <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
                <div class="pd-x-25">
                    <div class="list-group sidebar-event-list mg-b-20">
                        <div class="list-group-item">
                            <div>
                                <h6>Roven's 32th Birthday</h6>
                                <p>2:30PM</p>
                            </div>
                            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div>
                                <h6>Regular Workout Schedule</h6>
                                <p>7:30PM</p>
                            </div>
                            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->

                    <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-12 tx-spacing-2">+ Add
                        Event</a>
                    <br>
                </div>

            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

                <div class="sidebar-settings-item">
                    <h6 class="tx-13 tx-normal">Sound Notification</h6>
                    <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox" class="switch-button" checked>
                    </div>
                </div>

                <div class="sidebar-settings-item">
                    <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                    <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your
                        phone.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox2" class="switch-button">
                    </div>
                </div>

                <div class="sidebar-settings-item">
                    <h6 class="tx-13 tx-normal">Location Services</h6>
                    <p class="op-5 tx-13">Allowing us to access your location</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox3" class="switch-button">
                    </div>
                </div>

                <div class="sidebar-settings-item">
                    <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                    <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox4" class="switch-button" checked>
                    </div>
                </div>

                <div class="sidebar-settings-item">
                    <h6 class="tx-13 tx-normal">Your email</h6>
                    <div class="pos-relative">
                        <input type="email" name="email" class="form-control" value="janedoe@domain.com">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25">
                    <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                    <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account
                        Settings</a>
                    <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy
                        Settings</a>
                </div>

            </div>
        </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>

                <h4>@yield('title')</h4>
                <p class="mg-b-0">@yield('subtitle')</p>


            </div>
        </div>

        <div class="br-pagebody">
                @yield('content')
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('/lib/peity/jquery.peity.js') }}"></script>

    <script src="{{ asset('/js/bracket.js') }}"></script>

    @yield('scripts')
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


</html>
