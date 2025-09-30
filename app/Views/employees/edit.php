<?php

use App\Cells\Button;
?>
<?= $this->extend('templates' . DIRECTORY_SEPARATOR . 'main') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 ">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Edit a Employee</h2>
                <p class="text-secondary">Please fill this form and submit to edit employee record.</p>
            </div>



            <form action="<?= url_to('Employees::update') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="id" id="id" value="<?= $employee['id'] ?? 0; ?>">
                <input type="hidden" name="cod_user" id="user_id" value="<?= $employee['cod_user'] ?? 0; ?>">

                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" name="name" id="name" placeholder="Name" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['name']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('name') ?: esc($employee['name']); ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['name'] ?? '' ?></span>
                            <label for="name">Name</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <textarea id="address" name="address" rows="10" cols="500" placeholder="Address" required
                                class="form-control
                                <?= !empty(session()->getFlashdata('errors')['address']) ? 'is-invalid' : '';
                                ?>"
                                style="height: 200px;"><?= set_value('address') ?: esc($employee['address']); ?></textarea>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['address'] ?? '' ?></span>
                            <label for="address">Address</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" name="salary" id="salary" placeholder="Salary" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['salary']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('salary') ?: esc($employee['salary']); ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['salary'] ?? '' ?></span>
                            <label for="salary">Salary</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <p class="fw-bold ">Digital signature:
                                <span title="Digital Sign: <?= $employee['digital_sign'] == TRUE ? 'VALID' : 'INVALID' ?>">
                                    <i class="fa-solid fa-file-signature <?= $employee['digital_sign'] == TRUE ? 'text-success' : 'text-danger' ?> ms-2"></i>
                                </span>
                            </p>
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

                    <div class="d-grid gap-5 d-md-flex justify-content-center mx-auto mt-5">
                        <?= view_cell('Button::submit', ['label' => 'Submit']) ?>
                        <?= view_cell('Button::back', ['label' => 'Cancel']) ?>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>