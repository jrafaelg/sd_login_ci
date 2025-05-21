<?php //= $this->extend('posts\show') 
?>

<?php //= $this->section('comments') 
?>

<div>
    <p>comments <b>Last update:</b> <?= $post->updated_at->format(DATE_TIME_BR_FORMAT) ?></p>

</div>

<?php if (!empty($comments)): ?>
    <div class="col-12">
        <h2 class="fw-normal mb-4">Comments</h2>
    </div>
    <div class="col-12">
        <?php foreach ($comments as $comment) : ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($comment['title']); ?></h5>
                    <p class="card-text"><?= esc($comment['comment'], 'raw'); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div class="col-12">
        <h2 class="fw-normal mb-4">No comments</h2>
    </div>
<?php endif; ?>

<?php //= $this->endSection() 
?>