<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix text-center">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Employees Details</h2>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="<?= url_to('Employees::new') ?>" class="btn btn-success pull-right ">
                        <i class="fa fa-plus"></i> Add New Employee
                    </a>
                </div>
            </div>


            <?php if (count($employees) <= 0): ?>
                <div class="alert alert-warning mt-3">
                    No employees found.
                </div>
            <?php else: ?>

                <div class="row mt-4">
                    <div class="col-md-12 col-sm-10">
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

                                            <!-- <a href="<?= url_to('Employees::show', $employee['id']) ?>" class="me-2" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                            <a href="<?= url_to('Employees::edit', $employee['id']) ?>" class="me-2" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                            <a href="<?= url_to('Employees::delete', $employee['id']) ?>" class="me-2" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a> -->

                                            <a href="<?= url_to('Employees::show', $employee['id']) ?>" class="btn btn-outline-primary btn-sm">Show</a>
                                            <a href="<?= url_to('Employees::edit', $employee['id']) ?>" class="btn btn-outline-primary btn-sm">Edit</a>
                                            <form action="<?= url_to('Employees::delete', $employee['id']) ?>" method="post" class="d-inline">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>
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