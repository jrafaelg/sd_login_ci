<?php
//= $this->render('templates\header') ?: 'Fallback title'
?>

<?php
//dd(session()->getFlashdata('errors'));
?>

<?= $this->extend('templates\header') ?>

<?= $this->section('main') ?>

<?php if (session()->has('message')) : ?>
    <div class="position-fixed top-0 end-0 p-3 pt-4 mt-5 dismissible">
        <div class="">
            <div class="alert alert-warning alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <div class="position-fixed top-0 end-0 p-3 pt-4 mt-5 w-25 dismissible">
        <div class="">
            <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                <?= validation_list_errors() ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
    <div class="position-fixed top-0 end-0 p-3 pt-4 mt-5 w-25 dismissible">
        <div class="">
            <div class="alert alert-danger alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('success')) : ?>
    <div class="position-fixed top-5 end-0 p-3 pt-4 mt-5 w-25 dismissible">
        <div class="">
            <div class="alert alert-success alert-dismissible fade show small text-center" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (service('auth')->isCompleteLoging()): ?>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Are you sure you want to delete this item? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" aria-hidden="true" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (service('auth')->isCompleteLoging()): ?>
    <?= $this->render('components\navbar') ?: 'Fallback title'  ?>
<?php endif ?>

<!-- contend -->
<div class="container" style="min-height: 90vh;">
    <?= $this->renderSection('content'); ?>
</div>
<!-- /contend -->

<?= $this->endSection() ?>