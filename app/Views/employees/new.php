<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Create Record</h2>
                <p class="text-secondary">Please fill this form and submit to add employee record to the
                    database.</p>
            </div>



            <form action="<?= url_to('Employees::new') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" name="name" id="name" placeholder="Name" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['name']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('name') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['name'] ?? '' ?></span>
                            <label for="name">Name</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea
                                name="address"
                                id="address"
                                placeholder="Address"
                                class="form-control <?= !empty(session()->getFlashdata('errors')['address']) ? 'is-invalid' : ''; ?>"
                                required><?= set_value('address') ?? ''; ?></textarea>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['address'] ?? '' ?></span>
                            <label for="address">Address</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="salary" id="salary" placeholder="Salary" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['salary']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('salary') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['salary'] ?? '' ?></span>
                            <label for="salary">Salary</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="password" name="password_sign" id="password_sign" required
                                placeholder="Password Sign"
                                class="form-control <?= !empty(session()->getFlashdata('errors')['password_sign']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('password_sign') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password_sign'] ?? '' ?></span>
                            <label for="password_sign">Password Sign</label>
                        </div>
                    </div>

                    <div class="d-flex gap-5 justify-content-center">
                        <button type="submit"
                            class="btn btn-primary btn-block w-100">
                            Submit
                        </button>
                        <a href="<?= url_to('Employees::index') ?>" class="btn btn-block btn-secondary w-100">Cancel</a>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>