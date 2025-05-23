<div class="col-12 mt-5">
    <?php if (!empty($comments)): ?>
        <div class="col-12">
            <h2 class="fw-normal mb-4">Comments</h2>
        </div>
        <div class="col-12">
            <?php foreach ($comments as $comment) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">
                            <i class="fa-solid fa-at me-1 align-middle"></i><?= esc($comment->username) ?>
                            <?= esc($comment->created_at->format(DATE_TIME_BR_FORMAT)); ?>
                        </h5>
                        <p class="card-text"><?= esc($comment->comment, 'raw'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="col-12">
            <h2 class="fw-normal mb-4">No comments</h2>
        </div>
    <?php endif; ?>
</div>