<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<?php //= $this->render('templates\header') ?: 'Fallback title'  
?>
<div class="container" style="min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <h1 class="text-center">403</h1>

                <p class="text-center mt-5">
                    <?php if (ENVIRONMENT !== 'production') : ?>
                        <?= $data['message'] ?? 'adsfadsf' ?>
                        <?= session()->getFlashdata('message') ?>
                        <?php var_dump(session()->getFlashdata('message') ?? 'Not Alowed') ?>
                    <?php else : ?>
                        <?= session()->getFlashdata('message') ?? 'Not Alowed'  ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="wrap">

</div>

<?= $this->endSection() ?>
<?php // = $this->render('templates\footer') ?: 'Fallback title'  
?>