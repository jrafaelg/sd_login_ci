<div>
    <p><?= $post['created_at']; ?></p>
    <p>toLocalizedString</p>
    <p><?= $created_at->toLocalizedString(DATE_TIME_BR_FORMAT) ?></p>
    <p><?= app_timezone() ?></p>
    <p><?= now(app_timezone()) ?></p>
    <p><?= date(DATE_TIME_BR_FORMAT, strtotime($post['created_at'])) ?></p>
    <p><?= date('d/m/Y H:i', strtotime($post['created_at'])) ?></p>
    <p><?= date('m', strtotime($post['created_at'])) ?></p>
    <p><?= $created_at->toLocalizedString() ?></p>
    <p><?= $created_at->toDateTimeString() ?></p>
    <p><?= $created_at->getTimezoneName() ?></p>
    <p><?= $created_at->getLocal() ?></p>
    <p>parseDate</p>
    <p><?= parseDate($post['created_at']) ?></p>
    <p><?= formatDate($created_at, DATE_TIME_BR_FORMAT) ?></p>
    <p><?= formatDate($created_at, 'd/m/Y H:i') ?></p>

</div>