<nav class="navbar navbar-expand-lg defaultscroll shadow-none fixed-top navbar-sticky p-0 navbar-header">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link  arrow-none"  href="{{route('home')}}" role="button"
                       aria-haspopup="true" aria-expanded="false">Home
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="" role="button"
                       aria-haspopup="true" aria-expanded="false">Categorise
                        <i class="mdi mdi-chevron-down down-arrow"></i>
                    </a>

                    <div class="dropdown-menu nav-dropdown-menu">
                        <div class="nav-item dropdown dropdown-hover">
                            <a class="dropdown-item" href="">Standard Post</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>

            </ul>

            <div class="topbar-search d-flex justify-content-end d-none d-lg-block">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item pe-3 me-0 shop-icon">
                        <div class="topbar-shop">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                               aria-controls="offcanvasTop"><i class="mdi mdi-magnify"></i></a>

                        </div>
                    </li>
{{--                    <li class="list-inline-item ps-3">--}}
{{--                        <div class="topbar-shop">--}}
{{--                            <a href="#"><i class="mdi mdi-cart"></i>--}}
{{--                                <span class="badge bg-danger">0</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>

        </div>
    </div>
</nav>
