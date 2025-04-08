<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-sm-5  mx-auto">
        <div class="mt-5 mb-3 clearfix justify-content-md-center">
            <div class="text-center mb-3">
                <h2 class="fw-normal mb-4">See Record</h2>
                <p class="text-secondary">Record details.</p>
            </div>

            <div class="form-group">
                <label>Name</label>
                <p><b><?= esc($employee['name']); ?></b></p>
            </div>
            <div class="form-group">
                <label>Address</label>
                <p><b><?= esc($employee['address']); ?></b></p>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <p><b><?= esc($employee['salary']); ?></b></p>
            </div>

            <div class="form-group">
                <label>Digital signature:</label>
                <p class="fw-bold <?= $employee['digital_sign'] == "valid signature" ? 'text-success' : 'text-danger' ?>">
                    <?= esc($employee['digital_sign']); ?>
                </p>
            </div>

            <p class="text-center">
                <a href="<?= url_to('Employees::index') ?>" class="btn btn-primary">Voltar</a>
            </p>

        </div>
    </div>
</div>

<?= $this->endSection() ?>