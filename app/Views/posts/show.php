<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 ">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal mb-4">See Record</h2>
                <p class="text-secondary">Post details.</p>
            </div>

            <div class="text-center mb-3 mt-5">
                <h1 class="fw-semibold"><?= esc($post->title); ?></h1>

            </div>
            <div class="col-12">
                <p><?= esc($post->contend, 'raw'); ?></p>
            </div>
            <div class="col-12">
                <p>
                    <i class="fa-solid fa-at me-1 align-middle"></i> <?= esc($post->username) ?>
                </p>
            </div>

            <div class="d-flex gap-5 justify-content-start">
                <p>
                    <b>Created at:</b> <?= $post->created_at->format(DATE_TIME_BR_FORMAT) ?>
                    <?php if ($post->updated_at): ?>
                        <b>Last update:</b> <?= $post->updated_at->format(DATE_TIME_BR_FORMAT) ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-12">
                <div class="form-floating mb-3">
                    <p class="fw-bold ">Digital signature:
                        <span title="Digital Sign: <?= $post->digital_sign == TRUE ? 'VALID' : 'INVALID' ?>">
                            <i class="fa-solid fa-file-signature <?= $post->digital_sign == TRUE ? 'text-success' : 'text-danger' ?> ms-2"></i>
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-12 mt-5">
                <p class="text-center">
                    <a href="<?= url_to('Posts::index') ?>" class="btn btn-primary">Voltar</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>