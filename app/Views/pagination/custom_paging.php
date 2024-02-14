

<?php $pager->setSurroundCount(2) ?>
<nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="ms-auto">
    <ul class="pagination pagination-light mb-0">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item active" aria-current="page">
                <a class="page-link border-0 font-weight-bold" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link border-0 font-weight-bold" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li <?= $link['active'] ? 'class="active page-item"' : '' ?>>
                <a class="page-link border-0 font-weight-bold" href="<?= $link['url'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li class="btn btn-sm btn-white d-sm-block d-none mb-0">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li class="btn btn-sm btn-white d-sm-block d-none mb-0">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>