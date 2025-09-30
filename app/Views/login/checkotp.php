<?= $this->extend('templates' . DIRECTORY_SEPARATOR . 'main') ?>


<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Sign in</h2>
                <p class="text-secondary">Check your OTP key to login.</p>
            </div>

            <form action="<?= url_to('Login::checkOtp') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="otp" id="otp" placeholder="otp"
                                class="form-control <?= !empty(session()->getFlashdata('errors')['otp']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('otp') ?? ''; ?>" required>
                            <label for="otp" class="form-label">OTP key</label>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['otp'] ?? '' ?></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-grid my-3">
                            <button class="btn btn-primary btn-lg" type="submit">Check</button>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>