<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix text-center">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Posts List</h2>
            </div>

            <?php if (can('post.add')): ?>
                <?= view_cell('Button::add', ['controller' => 'posts', 'method' => 'new', 'title' => 'Add new Post']) ?>
            <?php endif ?>

            <?php // = $this->render('posts\test') ?: 'Fallback title'
            ?>


            <?php if (count($posts) <= 1): ?>

                <div class="alert alert-warning mt-3">
                    No posts found.
                </div>

            <?php else: ?>

                <div class="posts-container mx-auto my-5">
                    <div class="posts text-start">
                        <?php foreach ($posts as $post): ?>
                            <div class="post my-5">
                                <h1 class="fw-semibold">
                                    <a href="<?= url_to('Posts::show', $post['id']) ?>" class="text-decoration-none">
                                        <?= esc($post['title']) ?>
                                    </a>
                                </h1>

                                <div class="d-flex align-items-center mb-4 text-muted author-info">
                                    <span class="d-flex align-items-center me-3">
                                        <i class="fa-solid fa-at me-2"></i>
                                        <?= esc($post['username']) ?>
                                    </span>

                                    <?php $created_at  = parseDate($post['created_at']); ?>

                                    <span class="d-flex align-items-center" title="<?= formatDate($created_at, DATE_TIME_BR_FORMAT) ?>">
                                        <i class="fa-regular fa-calendar me-2"></i>
                                        <?= $created_at->humanize() ?>
                                    </span>

                                    <?php if ($post['updated_at']): ?>
                                        <?php $updated_at  = parseDate($post['updated_at']); ?>
                                        <span class=" d-flex align-items-center mx-2" title="last update <?= formatDate($updated_at, DATE_TIME_BR_FORMAT) ?>">
                                            <i class="fa-regular fa-square-check me-2"></i>
                                            <?= $updated_at->humanize() ?>
                                        </span>
                                    <?php endif ?>

                                </div>

                                <div class="post-contend text-muted">
                                    <?= esc($post['contend']) ?>
                                </div>

                                <div class="post-menu text-end">
                                    <?php if (can('post.edit')): ?>
                                        <?= view_cell('Button::edit', ['id' => $post['id'], 'title' => 'Edit Post', 'controller' => 'posts', 'method' => 'edit']) ?>
                                    <?php endif ?>
                                    <?php if (can('post.delete')): ?>
                                        <?= view_cell('Button::del', ['id' => $post['id'], 'title' => 'Delete', 'controller' => 'posts', 'method' => 'delete']) ?>
                                    <?php endif ?>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>