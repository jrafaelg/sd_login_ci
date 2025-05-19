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

            <div class="d-grid gap-5 d-md-flex justify-content-center mx-auto mt-5">
                <?= view_cell('Button::back', ['label' => 'Voltar']) ?>
                <?php if (can('employee.edit')): ?>
                    <?= view_cell('Button::edit', ['controller' => 'Employees', 'method' => 'edit', 'id' => $employee['id'], 'title' => 'Edit employee', 'button' => true]) ?>
                <?php endif ?>
                <?php if (can('employee.delete')): ?>
                    <?= view_cell('Button::del', ['controller' => 'Employees', 'method' => 'delete', 'id' => $employee['id'], 'title' => 'Delete employee', 'button' => true]) ?>
                    <?= view_cell('Form::del', ['id' => $employee['id'], 'title' => 'Delete employee', 'controller' => 'Employees', 'method' => 'delete']) ?>
                <?php endif ?>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>