<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ route('photographer.dashboard') }}" class="logo">
            <span>
                <img src="{{ URL::asset('admin/assets/images/vivo_logo.png') }}" alt="logo-large" class="logo-dark">
            </span>
        </a>
    </div>
    <div class="dastone-profile-main text-align-center">
        <img src="{{ asset('/storage/' . Session()->get('img')) }}" alt="" weight="128" height="128"
            class="rounded-circle">
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ route('photographer.upload-photo') }}"> <i data-feather="image"
                        class="align-self-center menu-icon"></i><span>Photo Upload</span></a>
            </li>
            <li>
                <a href="{{ route('photographer.photo_history') }}"> <i data-feather="list"
                        class="align-self-center menu-icon"></i><span>Photo History</span></a>
            </li>
            <li>
                <a href="{{ route('photographer.profile') }}"> <i data-feather="user-plus"
                        class="align-self-center menu-icon"></i><span>Profile</span></a>
            </li>
            <li>
                <a href="{{ url('user/logout') }}"> <i data-feather="lock"
                        class="align-self-center menu-icon"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>
