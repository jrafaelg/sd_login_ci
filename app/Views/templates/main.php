<?= $this->render('templates\header') ?: 'Fallback title'  ?>

<?php
//dd(session()->getFlashdata('errors'));
?>

<?php if (session()->has('message')) : ?>
    <div class="position-fixed bottom-0 end-0 p-3">
        <div class="">
            <div class="alert alert-warning alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <div class="position-fixed bottom-0 end-0 p-3">
        <div class="">
            <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                <?= validation_list_errors() ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast align-items-center alert alert-danger border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= validation_list_errors() ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>


<?php endif ?>

<?php if (session()->has('error')) : ?>
    <div class="position-fixed bottom-0 end-0 p-3">
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