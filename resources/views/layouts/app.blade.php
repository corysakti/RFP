<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

    <title>{{ config('app.name', 'RFP')}}</title>
</head>

<body class="c-app">
    @include('layouts.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                        <svg class="c-icon">
                            <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-bell"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                        <svg class="c-icon">
                            <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-list-rich"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                        <svg class="c-icon">
                            <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-envelope-open"></use>
                        </svg></a></li>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="http://127.0.0.1:8000/resources/assets/img/avatars/6.jpg" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-bell"></use>
                            </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-envelope-open"></use>
                            </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-task"></use>
                            </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-comment-square"></use>
                            </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-user"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-settings"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="http://127.0.0.1:8000/icons/sprites/free.svg#cil-account-logout"></use>
                            </svg>
                            <form action="http://127.0.0.1:8000/logout" method="POST"> <input type="hidden" name="_token" value="7BLdHcIB1FrfcH9Agbl6nUlvuHwB4Lzvdb7M24Xy"> <button type="submit" class="btn btn-ghost-dark btn-block">Logout</button></form>
                        </a>
                    </div>
                </li>
            </ul>
        </header>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    @yield('content')

                </div>
            </main>
        </div>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
</body>

</html>