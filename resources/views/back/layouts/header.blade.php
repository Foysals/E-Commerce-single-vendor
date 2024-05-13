@php 
$setting=DB::table('settings')->first();
@endphp
   <!-- Topbar Start -->
   <div class="navbar-custom gradient-info">
    <ul class="list-unstyled topnav-menu float-right mb-0">


        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/images/user.png') }}" alt="user-image" class="rounded-circle">
                &nbsp;
             <span> <b class=" text-light">{{ Auth::user()->name }}</b></span>
                <span class="pro-user-name ml-1">
                <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="m-0">
                        Welcome !
                        {{ Auth::user()->name }}
                    </h6>
                </div>

                <!-- item-->
                <a href="#" class="dropdown-item notify-item">
                    <i class="dripicons-user"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-gear"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="{{route('admin.password.change')}}" class="dropdown-item notify-item">
                    <i class="dripicons-lock"></i>
                    <span>Change Password</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                
                <a class="dropdown-item notify-item" id="logout" href="{{ route('admin.logout') }}" >
                    <i class="dripicons-power"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
               
            </div>
        </li>


    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <a href="" class="logo">
                <span class="logo-lg">
                    <img src="{{url($setting->logo)}}" style="border-radius:5px; opacity: .8" alt="" width="120" height="50">
                </span>
                <span class="logo-sm">
                    <img src="{{url($setting->logo)}}" style="border-radius:5px; opacity: .8" alt="" height="24">
                </span>
            </a>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>
    </ul>
</div>
<!-- end Topbar -->
