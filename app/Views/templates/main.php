<?= $this->render('templates\header') ?: 'Fallback title'  ?>

<?php
//dd(session()->getFlashdata('errors'));
?>

<?php if (session()->has('message')) : ?>
    <div class="position-fixed top-0 end-0 p-3">
        <div class="">
            <div class="alert alert-warning alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <div class="position-fixed top-0 end-0 p-3">
        <div class="">
            <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                <?= validation_list_errors() ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
    <div class="position-fixed top-0 end-0 p-3">
        <div class="">
            <div class="alert alert-danger alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?= $this->renderSection('content'); ?>

<?= $this->render('templates\footer') ?: 'Fallback title'  ?>