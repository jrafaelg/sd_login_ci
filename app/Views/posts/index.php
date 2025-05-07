<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>

<?php

use CodeIgniter\I18n\Time;

?>

<div class="row">
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix text-center">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Posts List</h2>
            </div>

            <?php if (can('post.add')): ?>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <a href="<?= url_to('Posts::new') ?>" class="btn btn-success pull-right ">
                            <i class="fa fa-plus"></i> Add New Post
                        </a>
                    </div>
                </div>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                        <?= esc($post['username']) ?>
                                    </span>

                                    <?php $created_at  = Time::parse($post['created_at']); ?>

                                    <span class="d-flex align-items-center" title="<?= $created_at->toLocalizedString('dd/mm/yyyy HH:mm') ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                                        </svg>

                                        <?php
                                        //$created_at  = Time::parse($post['created_at']);
                                        //$time->setTimezone(app_timezone());
                                        //echo $created_at->toLocalizedString('dd/mm/yyyy HH:mm');
                                        //echo $time;
                                        ?>
                                        <?= $created_at->humanize() ?>

                                        <?= $post['created_at']; ?>
                                    </span>
                                </div>

                                <?= esc($post['contend']) ?>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>