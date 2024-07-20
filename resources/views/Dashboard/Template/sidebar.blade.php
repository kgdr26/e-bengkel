<nav class="navbar-vertical-nav d-none d-xl-block ">
    <div class="navbar-vertical">
        <div class="px-4 py-5">
            <a href="{{route('dasbor')}}" class="navbar-brand">
                <img src="{{asset('assets/images/logo/logoebengkel.png')}}" alt="" style="width: 90%;">
            </a>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item ">
                    <a class="nav-link @if (Route::currentRouteName()=='dasbor') active @endif" href="{{route('dasbor')}}">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Managements</span>
                </li>
                @php
                    $link_route = ['1','2'];
                @endphp
                @if (in_array($idnusr->role_id, $link_route))
                    <li class="nav-item ">
                        <a class="nav-link @if (Route::currentRouteName()=='montir') active @endif" href="{{route('montir')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"> <i class="bi bi-gear-wide-connected"></i></span>
                                <span class="nav-link-text">Montir</span>
                            </div>
                        </a>
                    </li>
                @endif

                @php
                    $link_route = ['1'];
                @endphp
                @if (in_array($idnusr->role_id, $link_route))
                    <li class="nav-item ">
                        <a class="nav-link @if (Route::currentRouteName()=='users') active @endif" href="{{route('users')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"> <i class="bi bi-people-fill"></i></span>
                                <span class="nav-link-text">Users</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#navsparepart" aria-expanded="false" aria-controls="navsparepart">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"> <i class="bi bi-gear-wide-connected"></i></span>
                                <span class="nav-link-text">Sparepart</span>
                            </div>
                        </a>
                        <div id="navsparepart" class="collapse @if (Route::currentRouteName()=='categorypart' || Route::currentRouteName()=='listpart') show @endif" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                {{-- <li class="nav-item ">
                                    <a class="nav-link @if (Route::currentRouteName()=='categorypart') active @endif" href="{{route('categorypart')}}">
                                        Kategory
                                    </a>
                                </li> --}}
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link @if (Route::currentRouteName()=='listpart') active @endif" href="{{route('listpart')}}">
                                        List Sparepart
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif

                @php
                    $link_route = ['1','3'];
                @endphp
                @if (in_array($idnusr->role_id, $link_route))
                    <li class="nav-item">
                        <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse"
                            data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"> <i class="bi bi-journal-check"></i></span>
                                <span class="nav-link-text">Booking</span>
                            </div>
                        </a>
                        <div id="navCategoriesOrders" class="collapse @if (Route::currentRouteName()=='actionbooking' || Route::currentRouteName()=='listbooking') show @endif" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link @if (Route::currentRouteName()=='actionbooking') active @endif" href="{{route('actionbooking')}}">
                                        Action
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link @if (Route::currentRouteName()=='listbooking') active @endif" href="{{route('listbooking')}}">
                                        List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample">
    <div class="navbar-vertical">
        <div class="px-4 py-5 d-flex justify-content-between align-items-center">
            <a href="" class="navbar-brand">
                <img src="{{asset('assets/images/logo/logoebengkel.png')}}" alt="" style="width: 90%;">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Managements</span>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if (Route::currentRouteName()=='users') active @endif" href="{{route('users')}}">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"> <i class="bi bi-people-fill"></i></span>
                            <span class="nav-link-text">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navsparepart" aria-expanded="false" aria-controls="navsparepart">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"> <i class="bi bi-gear-wide-connected"></i></span>
                            <span class="nav-link-text">Sparepart</span>
                        </div>
                    </a>
                    <div id="navsparepart" class="collapse @if (Route::currentRouteName()=='categorypart' || Route::currentRouteName()=='listpart') show @endif" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            {{-- <li class="nav-item ">
                                <a class="nav-link @if (Route::currentRouteName()=='categorypart') active @endif" href="{{route('categorypart')}}">
                                    Kategory
                                </a>
                            </li> --}}
                            <!-- Nav item -->
                            <li class="nav-item ">
                                <a class="nav-link @if (Route::currentRouteName()=='listpart') active @endif" href="{{route('listpart')}}">
                                    List Sparepart
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"> <i class="bi bi-journal-check"></i></span>
                            <span class="nav-link-text">Booking</span>
                        </div>
                    </a>
                    <div id="navCategoriesOrders" class="collapse @if (Route::currentRouteName()=='actionbooking' || Route::currentRouteName()=='listbooking') show @endif" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item ">
                                <a class="nav-link @if (Route::currentRouteName()=='actionbooking') active @endif" href="{{route('actionbooking')}}">
                                    Action
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item ">
                                <a class="nav-link @if (Route::currentRouteName()=='listbooking') active @endif" href="{{route('listbooking')}}">
                                    List
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
