<div class="dropdown">
    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
        <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
        <img src="{{ Gravatar::get(Auth::user()->email) }}" class="wd-32 rounded-circle" alt="">
        <span class="square-10 bg-success"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-header wd-200">
        <ul class="list-unstyled user-profile-nav">
            <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
            <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
            <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
            <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
            <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
            <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
        </ul>
    </div><!-- dropdown-menu -->
</div>
