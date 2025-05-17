<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">

    <ul class="pagination justify-content-center">

        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true" title="<?= lang('Pager.first') ?>">
                        <i class="fa-solid fa-angles-left"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true" title="<?= lang('Pager.previous') ?>">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true" title="<?= lang('Pager.next') ?>">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true" title="<?= lang('Pager.last') ?>">
                        <i class="fa-solid fa-angles-right"></i>
                    </span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>