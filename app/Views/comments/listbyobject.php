<?php
//dd($comments);
?>

<div class="col-12 mt-5">
    <?php if (!empty($comments)): ?>
        <div class="col-12 mb-4">
            <h2 class="fw-normal mb-1">Comments</h2>
            <?php if (can('comment.add')): ?>
                <a class="link-primary link-underline-opacity-0 link-underline-opacity-20-hover mb-3"
                    href="<?= url_to("Comments::new", $comments_object ?? 1, $comments_object_id ?? 1); ?>">add comment</a>
            <?php endif; ?>
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


                        <?php if (can('comment.delete') || can('comment.add')): ?>
                            <div class="post-menu text-end">
                                <?php if (can('comment.add')): ?>
                                    <?= view_cell('Button::reply', ['id' => $comment->id, 'object' => $comments_object, 'object_id' => $comments_object_id, 'title' => 'Reply comment', 'controller' => 'comments', 'method' => 'new']) ?>
                                <?php endif ?>

                                <?php if (can('comment.delete')): ?>
                                    <?= view_cell('Button::del', ['id' => $comment->id, 'title' => 'Delete comment', 'controller' => 'comments', 'method' => 'delete']) ?>
                                    <?= view_cell('Form::del', ['id' => $comment->id, 'title' => 'Delete comment', 'controller' => 'comments', 'method' => 'delete']) ?>
                                <?php endif ?>
                            </div>
                        <?php endif ?>



                        <?php
                        foreach ($replies as $reply) :
                            if ($reply->parent_id !== $comment->id) {
                                continue;
                            }
                        ?>

                            <div class="card mb-3 mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">
                                        <i class="fa-solid fa-at me-1 align-middle"></i><?= esc($reply->username) ?>
                                        <?= esc($reply->created_at->format(DATE_TIME_BR_FORMAT)); ?>
                                    </h5>

                                    <p class="card-text"><?= esc($reply->comment, 'raw'); ?></p>

                                    <?php if (can('comment.delete')): ?>
                                        <div class="post-menu text-end">
                                            <?= view_cell('Button::del', ['id' => $reply->id, 'title' => 'Delete reply', 'controller' => 'comments', 'method' => 'delete']) ?>
                                            <?= view_cell('Form::del', ['id' => $reply->id, 'title' => 'Delete reply', 'controller' => 'comments', 'method' => 'delete']) ?>
                                        </div>
                                    <?php endif ?>

                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="col-12 mb-4">
            <h2 class="fw-normal mb-1">No comments</h2>
            <a class="link-primary link-underline-opacity-0 link-underline-opacity-20-hover mb-3"
                href="<?= url_to("Comments::new", $comments_object ?? 1, $comments_object_id ?? 1); ?>">add comment</a>
        </div>
    <?php endif; ?>
</div>