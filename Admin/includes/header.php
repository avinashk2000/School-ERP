<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <button data-toggle="sidenav" data-target="#sidenav-1" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-1" aria-haspopup="true">
            <i class="fas fa-bars fa-lg"></i>
        </button>
        <ul class="navbar-nav ml-auto d-flex flex-row">
            <li class="nav-item dropdown">
                <a class="nav-link mr-3 mr-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="united kingdom flag m-0"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                            <i class="fa fa-check text-success ml-2"></i></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['name'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Welcome <?= $_SESSION['name']; ?></a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="../log-out">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>