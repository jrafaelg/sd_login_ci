<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card-body p-3 p-md-4 p-xl-5">

                <div class="text-center mb-3">
                    <h2 class="fw-normal text-center  mb-4">Sign up</h2>
                    <p class="text-secondary">Please fill this form to create an account.</p>
                </div>

                <form action="<?= url_to('Login::register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="row gy-2 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" id="username" placeholder="Username"
                                    class="form-control <?= !empty(session()->getFlashdata('errors')['username']) ? 'is-invalid' : ''; ?>"
                                    value="<?= set_value('username') ?? ''; ?>">
                                <label for="username" class="form-label">Username</label>
                                <span class="invalid-feedback"><?= session()->getFlashdata('errors')['username'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control <?php echo !empty(session()->getFlashdata('errors')['password']) ? 'is-invalid' : ''; ?>"
                                    value="<?= set_value('password') ?? ''; ?>">
                                <label for="password" class="form-label">Password</label>
                                <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" name="password_confirm" id="password_confirm"
                                    placeholder="Password confirm"
                                    class="form-control <?php echo !empty(session()->getFlashdata('errors')['password_confirm']) ? 'is-invalid' : ''; ?>"
                                    value="<?= set_value('password_confirm') ?? ''; ?>">
                                <label for="password_confirm" class="form-label">Confirm Password</label>
                                <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password_confirm'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" name="password_sign" id="password_sign"
                                    placeholder="Password Sing"
                                    class="form-control <?php echo !empty(session()->getFlashdata('errors')['password_sign']) ? 'is-invalid' : ''; ?>"
                                    value="<?= set_value('password_sign') ?? ''; ?>">
                                <label for="password_sign" class="form-label">Signature password</label>
                                <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password_sign'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" name="password_sign_confirm" id="password_sign_confirm"
                                    placeholder="Confirm Password Sing"
                                    class="form-control <?php echo !empty(session()->getFlashdata('errors')['password_sign_confirm']) ? 'is-invalid' : ''; ?>"
                                    value="<?= set_value('password_sign_confirm') ?? ''; ?>">
                                <label for="password_sign_confirm" class="form-label">Confirm signature password </label>
                                <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password_sign_confirm'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg" type="submit">Create</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="m-0 text-secondary text-center">
                                Already have an account? <a href="<?= url_to('Login::index') ?>" class="link-primary text-decoration-none">Click
                                    here</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>