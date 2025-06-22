<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> -->
<nav class="navbar navbar-expand bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SD Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link <? //= url_is('employees') ? 'active' : '' 
                                        ?>" href="<? //= url_to('Employees::index') 
                                                                                            ?>">Employees</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link <?= url_is('posts') ? 'active' : '' ?>" href="<?= url_to('Posts::index') ?>">Posts</a>
                </li>

                <?php if (can('post.create')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('Posts::new') ?>">Create Post</a>
                    </li>
                <?php endif; ?>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->



        </div>

        <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= getUser()['username'] ?? 'name' ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?= url_to('Login::logout') ?>">Logout</a></li>
                        <li><a class="dropdown-item" href="<?= url_to('Login::changePassword') ?>">Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= url_to('Login::logout') ?>">Logout</a></li>

                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Another action</a>
                </li> -->
            </ul>

        </div>

    </div>
</nav>