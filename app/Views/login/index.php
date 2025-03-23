<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card-body p-3 p-md-4 p-xl-5">

                <div class="text-center mb-3">
                    <h2 class="fw-normal text-center  mb-4">Sign in <?php echo $test ?? '' ?> <?php echo $title ?? '' ?></h2>
                    <p class="text-secondary">Please fill this form to login.</p>
                </div>

                <?php
                if (!empty($login_err)) {
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
                ?>

                <form action="/login" method="post">
                    <?= csrf_field() ?>
                    <div class="row gy-2 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" id="username" placeholder="Username"
                                    class="form-control <?php echo !empty($username_err) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $username ?? ''; ?>" required>
                                <label for="username" class="form-label">Username</label>
                                <span class="invalid-feedback"><?php echo $username_err ?? ''; ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control <?php echo !empty($password_err) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $password ?? ''; ?>" required>
                                <span class="invalid-feedback"><?php echo $password_err ?? ''; ?></span>
                                <label for="password" class="form-label">Password</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="m-0 text-secondary text-center">
                                Don't have an account? <a href="register" class="link-primary text-decoration-none">Click here</a>
                            </p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>