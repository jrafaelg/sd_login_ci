

<?= $this->render('templates\header') ?: 'Fallback title'  ?>

<?= $this->renderSection('content'); ?>

<?= $this->render('templates\footer') ?: 'Fallback title'  ?>