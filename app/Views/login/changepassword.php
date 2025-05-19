<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 ">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Change Password</h2>
                <p class="text-secondary">Please fill this form and submit to change own password.</p>
            </div>

            <form action="<?= url_to('Login::changePassword') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="id" value="<?= $user['id'] ?? 0; ?>">

                <div class="row gy-2 overflow-hidden">

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="password" name="old_password" id="old_password" placeholder="Old Password" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['old_password']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('old_password') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['old_password'] ?? '' ?></span>
                            <label for="old_password">Old Password</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="password" name="password" id="password" placeholder="Password" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['password']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('password') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password'] ?? '' ?></span>
                            <label for="password">New Password</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"
                                required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['confirm_password']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('confirm_password') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['confirm_password'] ?? '' ?></span>
                            <label for="confirm_password">Confirm Password</label>
                        </div>
                    </div>

                    <div class="d-grid gap-5 d-md-flex justify-content-center mx-auto mt-5">
                        <?= view_cell('Button::submit', ['label' => 'Submit']) ?>
                        <?= view_cell('Button::back', ['label' => 'Cancel']) ?>
                    </div>

                </div>



        </div>
    </div>
</div>

<?= $this->endSection() ?>