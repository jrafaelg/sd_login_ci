<?= $this->extend('templates' . DIRECTORY_SEPARATOR . 'main') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix text-center">
            <h2>Chave OTP e códigos de recuperação</h2>
            <p>Utilize seu aplicativo autenciador</p>
            <p>Chave OTP: <?= $otp_secret; ?></p>
            <p><img src="<?= $qrcode_src ?>" alt="" height="200px"></p>



            <?php if (!empty($backupCodes)) : ?>
                <h3>Anote os códigos de recuperação abaixo. Eles não serão exibidos novamente!</h3>

                <?php foreach ($backupCodes as $backupCode): ?>
                    <p><?= esc($backupCode['backup_code']) ?></p>
                <?php endforeach ?>
            <?php else: ?>
                <h3>Você não tem códigos de recuperação disponíveis.</h3>
                <p>Você pode gerar códigos de recuperação na página de configurações.</p>
            <?php endif; ?>

            <p>

                <a href="<?= url_to('Login::index') ?>" class="btn btn-primary">Ir para login</a>
            </p>
        </div>
    </div>
</div>



<?= $this->endSection() ?>