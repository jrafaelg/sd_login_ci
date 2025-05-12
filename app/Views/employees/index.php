<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix text-center">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Employees Details</h2>
            </div>

            <?php if (can('employee.add')): ?>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <a href="<?= url_to('Employees::new') ?>" class="btn btn-success pull-right ">
                            <i class="fa fa-plus"></i> Add New Employee
                        </a>
                    </div>
                </div>
            <?php endif ?>

            <?php if (count($employees) <= 0): ?>
                <div class="alert alert-warning mt-3">
                    No employees found.
                </div>
            <?php else: ?>

                <div class="row mt-4 justify-content-md-center">
                    <div class="col-sm-10">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col" width="20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employees as $employee): ?>
                                    <tr>
                                        <td><?= esc($employee['id']) ?></td>
                                        <td><?= esc($employee['name']) ?></td>
                                        <td><?= esc($employee['address']) ?></td>
                                        <td><?= esc($employee['salary']) ?></td>
                                        <td>
                                            <?php if (can('employee.view')): ?>
                                                <?= view_cell('Button::view', ['id' => $employee['id'], 'title' => 'View employee', 'controller' => 'Employees', 'method' => 'show']) ?>
                                            <?php endif ?>
                                            <?php if (can('employee.edit')): ?>
                                                <?= view_cell('Button::edit', ['id' => $employee['id'], 'title' => 'Edit employee', 'controller' => 'Employees', 'method' => 'edit']) ?>
                                            <?php endif ?>

                                            <?php if (can('employee.delete')): ?>
                                                <?= view_cell('Button::del', ['id' => $employee['id'], 'title' => 'Delete employee', 'controller' => 'employees', 'method' => 'delete']) ?>
                                                <form action="<?= url_to('Employees::delete') ?>" id="form<?= $employee['id'] ?>" method="POST" accept-charset="utf-8">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="id" value="<?= $employee['id'] ?>">
                                                    <!-- <button type="submit" class="btn btn-outline-danger btn-sm" id="<?= $employee['id'] ?>">Delete</button> -->
                                                </form>
                                            <?php endif ?>

                                            <?php if (!can('employee.delete')): ?>
                                                <form action="<?= url_to('Employees::delete', $employee['id']) ?>" id="1form<?= $employee['id'] ?>" method="get" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm link-danger-delete" id="<?= $employee['id'] ?>">Delete</button>
                                                </form>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>