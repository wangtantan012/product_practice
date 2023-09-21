<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>product edit List Dashboard - FreshCart </title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link href="/CSS/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/CSS/freshcart-order-list.css">

</head>

<body>
    <div class="b-main">
        <div class="row">
            <div class="col-xl-2 d-none d-xl-block ">
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li>
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                <a href="https://freshcart.codescandy.com/dashboard/order-list.html"><img
                                        src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg"
                                        alt="" border="0"></a>
                            </h5>
                        </li>
                        <li class="nav-item pb-5">
                            <i class="bi bi-house"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="span-fs pb-2">Store Management</li>
                        <li class="nav-item">
                            <i class="bi bi-cart"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <i class="bi bi-list-ul"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Categories</a>
                        </li>
                        <li class="nav-item flex-wrap">
                            <a class="nav-link-2 d-inline chev1 nav-item dropdown border-0 bg-white w-100"
                                type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent0"
                                aria-controls="navbarToggleExternalContent0" aria-expanded="false"
                                aria-label="Toggle navigation" aria-current="page" href="#">

                                <i class="bi bi-bag"></i>
                                <span>Orders</span>
                            </a>
                            <!-- </button> -->
                            <div class="collapse w-100" id="navbarToggleExternalContent0" data-bs-theme="white">
                                <div class="bg-white p-4">
                                    <ul class="tran3">
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-start" href="#">
                                                <div class="bullet-dot"></div>List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-start" href="#">
                                                <div class="bullet-dot"></div>Single
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <i class="bi bi-shop"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Sellers /
                                Vendors</a>
                        </li>

                        <li class="nav-item ">
                            <i class="bi bi-people"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Customers</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-star"></i>
                            <a class="nav-link-1 active" aria-current="page" href="#">Reviews</a>
                        </li>

                        <li class="nav-item flex-wrap">
                            <button class="nav-item dropdown border-0 bg-white" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarToggleExternalContent1"
                                aria-controls="navbarToggleExternalContent1" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <a class="nav-link-2 d-inline chev1" aria-current="page" href="#">
                                    <i class="bi bi-arrow-90deg-down"></i>
                                    <span>Menu Level</span>
                                </a>
                            </button>
                            <div class="collapse w-100" id="navbarToggleExternalContent1" data-bs-theme="white">
                                <div class="bg-white p-4">
                                    <ul class="tran3">
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-start" href="#">
                                                <div class="bullet-dot"></div>Two Level
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-start" href="#">
                                                <div class="bullet-dot"></div>Three Level
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="span-fs">Site Setting <span id="blue-b" class="brick">Coming
                                Soon</span></li>

                        <li class="nav-item">
                            <i class="bi bi-newspaper"></i>
                            <a class="nav-link-1 active" aria-current="page">Blog</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-images"></i>
                            <a class="nav-link-1 active" aria-current="page">Media</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-gear"></i>
                            <a class="nav-link-1 active" aria-current="page">Store Setting</a>
                        </li>

                        <li class="span-fs">Support <span id="blue-b" class="brick">Coming
                                Soon</span></li>

                        <li class="nav-item">
                            <i class="bi bi-headphones"></i>
                            <a class="nav-link-1 active" aria-current="page">Support ticket</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-question-circle"></i>
                            <a class="nav-link-1 active" aria-current="page">Help Center</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-infinity"></i>
                            <a class="nav-link-1 active" aria-current="page">How FreshCart
                                Works</a>
                        </li>

                        <li class="span-fs">Our Apps</li>

                        <li class="nav-item">
                            <i class="bi bi-apple"></i>
                            <a class="nav-link-1 active" aria-current="page">Apple Store</a>
                        </li>

                        <li class="nav-item">
                            <i class="bi bi-google-play"></i>
                            <a class="nav-link-1 active" aria-current="page">Google Play
                                Store</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-10 d-flex justify-content-center overflow-y-scroll">
                <div class="main-chi d-flex flex-column">
                    <nav class="navbar bg-body-tertiary fixed-top navbar-glass align-items-start">
                        <div class="nav-func-chi">
                            <div class="container-fluid d-flex">
                                <button class="navbar-toggler border-0 d-xl-none" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                    <i class="bi bi-text-indent-right"></i>
                                </button>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                                    aria-labelledby="offcanvasNavbarLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                            <a href="https://freshcart.codescandy.com/dashboard/order-list.html"><img
                                                    src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg"
                                                    alt="" border="0"></a>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body h-100">
                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                            <li class="nav-item pb-5">
                                                <i class="bi bi-house"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Dashboard</a>
                                            </li>
                                            <li class="span-fs pb-2">Store Management</li>
                                            <li class="nav-item">
                                                <i class="bi bi-cart"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-list-ul"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Categories</a>
                                            </li>
                                            <li class="nav-item flex-wrap">
                                                <button class="nav-item dropdown border-0 bg-white" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#navbarToggleExternalContent0"
                                                    aria-controls="navbarToggleExternalContent0" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <a class="nav-link-2 d-inline chev1" aria-current="page"
                                                        href="#">
                                                        <i class="bi bi-bag"></i>
                                                        <span>Orders</span>
                                                    </a>
                                                </button>
                                                <div class="collapse w-100" id="navbarToggleExternalContent0"
                                                    data-bs-theme="white">
                                                    <div class="bg-white p-4">
                                                        <ul class="tran3">
                                                            <li>
                                                                <a class="dropdown-item d-flex justify-content-start"
                                                                    href="#">
                                                                    <div class="bullet-dot"></div>List
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex justify-content-start"
                                                                    href="#">
                                                                    <div class="bullet-dot"></div>Single
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item ">
                                                <i class="bi bi-shop"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Sellers /
                                                    Vendors</a>
                                            </li>

                                            <li class="nav-item ">
                                                <i class="bi bi-people"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Customers</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-star"></i>
                                                <a class="nav-link-1 active" aria-current="page"
                                                    href="#">Reviews</a>
                                            </li>

                                            <li class="span-fs">Site Setting <span id="blue-b"
                                                    class="brick">Coming
                                                    Soon</span></li>

                                            <li class="nav-item">
                                                <i class="bi bi-newspaper"></i>
                                                <a class="nav-link-1 active" aria-current="page">Blog</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-images"></i>
                                                <a class="nav-link-1 active" aria-current="page">Media</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-gear"></i>
                                                <a class="nav-link-1 active" aria-current="page">Store Setting</a>
                                            </li>

                                            <li class="span-fs">Support <span id="blue-b" class="brick">Coming
                                                    Soon</span></li>

                                            <li class="nav-item">
                                                <i class="bi bi-headphones"></i>
                                                <a class="nav-link-1 active" aria-current="page">Support ticket</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-question-circle"></i>
                                                <a class="nav-link-1 active" aria-current="page">Help Center</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-infinity"></i>
                                                <a class="nav-link-1 active" aria-current="page">How FreshCart
                                                    Works</a>
                                            </li>

                                            <li class="span-fs">Our Apps</li>

                                            <li class="nav-item">
                                                <i class="bi bi-apple"></i>
                                                <a class="nav-link-1 active" aria-current="page">Apple Store</a>
                                            </li>

                                            <li class="nav-item">
                                                <i class="bi bi-google-play"></i>
                                                <a class="nav-link-1 active" aria-current="page">Google Play
                                                    Store</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form class="d-flex align-self-start" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                </form>
                            </div>
                        </div>
                        <div class="nav-func-chi-2 text-center">
                            <button type="button" class="btn btn-chi btn-white position-relative rounded-circle">
                                <i class="bi bi-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <div class="human-chi">
                                <div class="btn-group">
                                    <button class="btn btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                    @yield('main')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="/JS/freshcart-order-list.Js"></script>

    @yield('js')

</body>

</html>
