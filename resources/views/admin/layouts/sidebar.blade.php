<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ url('admin/dashboard') }}" class="logo">
            <span>
                <img src="{{ URL::asset('admin/assets/images/vivo_logo.png') }}" alt="logo-large" class="logo-dark">
            </span>
        </a>
    </div>
    <div class="dastone-profile-main text-align-center">
        <img src="{{ asset('/storage/' . Session()->get('img')) }}" alt="" class="rounded-circle">
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('admin/dashboard') }}"> <i data-feather="home"
                        class="align-self-center menu-icon"></i><span>Dashboard</span></a>
            </li>

            <li>
                <a href="javascript: void(0);"> <i data-feather="layers"
                        class="align-self-center menu-icon"></i><span>Backend</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('mobile-series.index') }}"><i
                                class="ti-control-record"></i>Mobile Series</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('mobile_series_versions.index') }}"><i
                                class="ti-control-record"></i>Mobile Series Version</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tags.index') }}"><i
                                class="ti-control-record"></i>Tags</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/pending_request') }}"><i
                                class="ti-control-record"></i>Pending Request</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/approved_request') }}"><i
                                class="ti-control-record"></i>Approved Request</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"> <i data-feather="grid"
                        class="align-self-center menu-icon"></i><span>Frontend</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home_sliders.index') }}"><i
                                class="ti-control-record"></i>Home Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('moments.index') }}"><i
                                class="ti-control-record"></i>Moments</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('exibition_upload.index') }}"><i
                                class="ti-control-record"></i>Exibition</a></li>
                    <li class="nav-item">
                        <a href="javascript: void(0);"> <i data-feather="grid"
                                class="align-self-center menu-icon"></i><span>Playlist 1</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/playlist1_main_vedios') }}"><i
                                        class="ti-control-record"></i>Main Vedio</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ url('admin/playlist1_other_vedios') }}"><i
                                        class="ti-control-record"></i>Others Vedios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript: void(0);"> <i data-feather="grid"
                                class="align-self-center menu-icon"></i><span>Playlist 2</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/playlist2_main_vedios') }}"><i
                                        class="ti-control-record"></i>Main Vedio</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ url('admin/playlist2_other_vedios') }}"><i
                                        class="ti-control-record"></i>Others Vedios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}"><i
                                class="ti-control-record"></i>Blog Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('campaigns.index') }}"><i
                                class="ti-control-record"></i>Campaign</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('participants.index') }}"> <i data-feather="user"
                        class="align-self-center menu-icon"></i><span>Participants</span></a>
            </li>
            <li>
                <a href="{{ route('faqs.index') }}"> <i data-feather="help-circle"
                        class="align-self-center menu-icon"></i><span>FAQS</span></a>
            </li>
            <li>
                <a href="{{ url('admin/users') }}"> <i data-feather="user-plus"
                        class="align-self-center menu-icon"></i><span>Users</span></a>
            </li>
            <li>
                <a href="{{ url('admin/user_profile') }}"> <i data-feather="user-plus"
                        class="align-self-center menu-icon"></i><span>Profile</span></a>
            </li>
            <li>
                <a href="{{ url('admin/logout') }}"> <i data-feather="box"
                        class="align-self-center menu-icon"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>
