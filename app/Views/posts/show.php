<?= $this->extend('templates' . DIRECTORY_SEPARATOR . 'main') ?>

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
                    <i class="fa-solid fa-at me-1 align-middle"></i><?= esc($post->username) ?>
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

            <div class="d-grid gap-5 d-md-flex justify-content-center mx-auto mt-5">
                <?= view_cell('Button::back', ['label' => 'Voltar']) ?>
                <?php if (can('post.edit')): ?>
                    <?= view_cell('Button::edit', ['controller' => 'posts', 'method' => 'edit', 'id' => $post->id, 'title' => 'Edit Post', 'button' => true]) ?>
                <?php endif ?>
                <?php if (can('post.delete')): ?>
                    <?= view_cell('Button::del', ['controller' => 'posts', 'method' => 'delete', 'id' => $post->id, 'title' => 'Delete Post', 'button' => true]) ?>
                    <?= view_cell('Form::del', ['id' => $post->id, 'title' => 'Delete post', 'controller' => 'posts', 'method' => 'delete']) ?>
                <?php endif ?>
            </div>

            <?= $this->render('comments' . DIRECTORY_SEPARATOR . 'listbyobject') ?>



        </div>
    </div>
</div>

<?= $this->endSection() ?>