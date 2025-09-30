<?= $this->extend('templates' . DIRECTORY_SEPARATOR . 'main') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 ">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Add new comment</h2>
                <p class="text-secondary">Please fill this form and submit to add comment record.</p>
            </div>

            <form action="<?= url_to('Comments::create') ?>" method="post">
                <?= csrf_field() ?>

                <input type="hidden" name="object" id="object" value="<?= $object ?? 0; ?>">
                <input type="hidden" name="object_id" id="object_id" value="<?= $object_id ?? 0; ?>">
                <input type="hidden" name="parent_id" id="parent_id" value="<?= $parent_id ?? 0; ?>">

                <div class="row gy-2 overflow-hidden">

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <textarea id="comment" name="comment" rows="10" cols="500" placeholder="Comment" required
                                class="form-control
                                <?= !empty(session()->getFlashdata('errors')['comment']) ? 'is-invalid' : '';
                                ?>"
                                style="height: 200px;"><?= set_value('comment') ?? ''; ?></textarea>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['comment'] ?? '' ?></span>
                            <label for="comment">Comment</label>
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